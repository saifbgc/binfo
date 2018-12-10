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
use PHPImageWorkshop\ImageWorkshop;
class ListingRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Listing::class;
    }
	
	
	public function FrameImage($image, $fileName ,  $savePath = null){
		
		$frame = 'frame.jpg';
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
	
}
