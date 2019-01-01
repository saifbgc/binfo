<?php

namespace App\Repositories\Frontend\Listing;


use Carbon\Carbon;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Listing;
use App\Models\Image;
use PHPImageWorkshop\ImageWorkshop;

use Illuminate\Database\Eloquent\Model;
class ListingRepository extends BaseRepository
{
    /**
     * @return string
     */
	
	public function __construct()
    {
		parent::__construct();
		$this->makeImageModel();
    }


    public function model()
    {
        return Listing::class;
	}
	
	protected $imageModel;
	
	public function ImageModel(){
		return Image::class;
	}

	

	public function createImageModel(array $data)
    {
        $this->unsetClauses();

		$object =  $this->imageModel->create($data);
		return $object->id;
    }
	
	public function makeImageModel(){
		$model = app()->make($this->ImageModel());
		
		if (! $model instanceof Model) {
            throw new GeneralException("Class {$this->model()} must be an instance of ".Model::class);
        }
		
        return $this->imageModel = $model;
	}
	
	
	public function FrameImage($image, $fileName ,  $savePath = null){
		
		$frame = 'frame.png';
		$framepath = Storage::disk('public')->path($frame);
		$imagepath = Storage::disk('local')->path($image);
		
		$savePath = Storage::disk('public')->path($savePath);
		
		$imagefile = ImageWorkshop::initFromPath($imagepath);
		$framefile = ImageWorkshop::initFromPath($framepath);
		
		$layerGroup = ImageWorkshop::initVirginLayer($framefile->getWidth() , $framefile->getHeight());
		
		$imagefile->resizeInPixel($framefile->getWidth()-40, $framefile->getHeight()-120);
		
		$layerGroup->addLayer(1, $framefile);
		$layerGroup->addLayer(2, $imagefile, 20, 80, 'LT');
		
		
	    //$type = File::mimeType($framepath);
	    $extension = File::extension($framepath);
		$fileName = $fileName.'.'.$extension;
		
	    $layerGroup->save($savePath, $fileName,false,true,90);
		return $fileName;
	}
	
	
	public function NameImage($imageText,  $fileName , $savePath = null){
		
		$frame = 'textimage.png';
		$fontName = 'fonts/open-sans/OpenSans-Semibold.ttf';
		$framepath = Storage::disk('public')->path($frame);
		
		$fontPath = Storage::disk('public')->path($fontName);
		
		$savePath = Storage::disk('public')->path($savePath);
		
		$textLayer = ImageWorkshop::initTextLayer($imageText, $fontPath, 17, '000000', 0);
		$framefile = ImageWorkshop::initFromPath($framepath);
		
		$layerGroup = ImageWorkshop::initVirginLayer($framefile->getWidth() , $framefile->getHeight());
		
		/*** Font Position **/
		$middleXFrame = $framefile->getWidth()/2;
		$middleYFrame = $framefile->getHeight()/2;
		$middleXText = $textLayer->getWidth()/2;
		$middleYText = $textLayer->getHeight()/2; 
		$posXText = $middleXFrame - $middleXText;
		$posYText = $middleYFrame - $middleYText;
		
		/** end font position calculation **/
		$layerGroup->addLayer(1, $framefile);
		$layerGroup->addLayer(2, $textLayer, $posXText, $posYText, 'LT');
		
		
	    //$type = File::mimeType($framepath);
	    $extension = File::extension($framepath);
		$fileName = $fileName.'.'.$extension;
		
	    $layerGroup->save($savePath, $fileName,false,true,90);
		return $fileName;
		 
		
	}
	
	public function saveImage($fileName){
		$data = [
			'path'=>$fileName
		];
		return $this->createImageModel($data);

	}
}
