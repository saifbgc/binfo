<?php

namespace App\Http\Controllers\frontend\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;

use App\Repositories\Frontend\Listing\ListingRepository;
use App\Http\Requests\Listing\AddRequest;
use App\Models\Category;
use App\Models\Listing;
//use App\Models\Image;
use App\Models\Division;
use App\Models\District;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Validator;
use PHPImageWorkshop\ImageWorkshop;

//use TextProcess;

class ListingController extends Controller
{
	
	protected $listingRepository;
	
	public function __construct(ListingRepository $listingRepository)
    {
        $this->listingRepository = $listingRepository;
    }
	
	
	public function redirectPath()
    {
        return route(home_route());
    }
	
	
	public function showImage($name){
		/***	
		//$savePath = Storage::disk('public')->path(null);	
		//echo $savePath;
		//die();
		*/
		
		$frame = 'frame.png';
		$image = $name.'.jpg';
		///$path = 'public/' . $filename;
		//echo storage_path('app/public/');
		//die();
		//$path = 'storage/uploads/rcN9cj8pgMaoPtPzcdUruxRZMs8SeYxwPRrzkjkW.png';
		//$contents = Storage::disk('local')->get($path);
		//echo $contents;
		//die();
		$framepath = Storage::disk('public')->path($frame);
		$imagepath = Storage::disk('public')->path($image);
		//echo $framepath;
		//die();
	    if ( !File::exists($framepath) && !File::exists($imagepath) ) {
	        abort(404);
	    }
		
		$imagefile = ImageWorkshop::initFromPath($imagepath);
		$framefile = ImageWorkshop::initFromPath($framepath);
		//die();
		$frameW = $framefile->getWidth();
		$frameH = $framefile->getHeight();
		$layerGroup = ImageWorkshop::initVirginLayer( $frameW , $frameH);
		
		$holderOX = $frameW * (10/100);
		$holderOY = $frameH * (10/100);

		$holderW = $frameW - $holderOX;
		$holderH = $frameH - $holderOY;

		$holderArea = ImageWorkshop::initVirginLayer( $holderW , $holderH);

		$imageW = $imagefile->getWidth();
		$imageH = $imagefile->getHeight();
		
		if($imageW > $holderW || $imageH > $holderH){

			
		
			$ratio = ($imageW / $imageH) ;
			

			$imageW = $holderW *  $ratio;
			$imageH = $holderH / $ratio;
			
			if($imageW > $holderW){
				$imageWdiff = $imageW - $holderW;
				$imageWdiffDiv = ($imageW / $imageWdiff);
				$imageHdiff = ($imageH / $imageWdiffDiv)/2;
				$imageW = $imageW - ($imageWdiff + $imageWdiff * .30);
				$imageH = $imageH - ($imageHdiff - $imageHdiff * .95);
			}

			if($imageH > $holderH){
				$imageHdiff = $imageH - $holderH;
				$imageHdiffDiv = ($imageH / $imageHdiff);
				$imageWdiff = ($imageW / $imageHdiffDiv)/2;
				$imageH = $imageH - ($imageHdiff + $imageHdiff * .50);
				$imageW = $imageW - ($imageWdiff + $imageWdiff * .99);
			}
				
		
		}

		//holder middle

		$holderMiddleX = $holderW/2;
		$holderMiddleY = $holderH/2;
		$imageMiddleX = $imageW/2;
		$imageMiddleY = $imageH/2;

		$imagePosX = $holderMiddleX - ($imageMiddleX+$imageMiddleX * .15);
		//$imagePosY = $holderMiddleY - $imageMiddleY;

		$imagefile->resizeInPixel($imageW, $imageH);
		
		$holderArea->addLayer(1, $imagefile,$imagePosX, null, 'LT' );

		$layerGroup->addLayer(1, $framefile);
		$layerGroup->addLayer(2, $holderArea, $holderOX, $holderOY, 'LT');
		//$framefile = File::get($framepath);
		//$imagefile = File::get($imagepath);
		
	    $type = File::mimeType($framepath);
		//$extension = File::extension($framepath);
		//var_dump($extension);
		//die();
		//$filename = $this->listingRepository->FrameImage($image);
		$image = $layerGroup->getResult("ffffff");
	    //$response = Response::make($image, 200);
	    //$response->header("Content-Type", $type);
	    
		
	    //return $response;
	    header('Content-type: image/jpeg');
	    imagejpeg($image, null, 95);
		
		//$this->listingRepository->NameImage("Golam Mostofa");
		//return TextProcess::lineBreak('Golam Mostofa',5);
		
	}
	
    public function index()
    {
		$listings=Listing::where('user_id','=',auth()->user()->id)
		->orderBy('id','desc')
		->paginate(5);
		//var_dump($listings);
		
        return view('frontend.user.listing.index',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		//var_dump(auth()->user()->id);
		
		
        $category = Category::pluck('name','id');
		$division = Division::pluck('name','id');
        return view('frontend.user.listing.create')->with(['categories'=> $category, 'division' => $division]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
      
	   
	   $image_id = null;
	   
	   $listing = new Listing();
	   
	   
	  
	   
	   $listing->name = $request->name;
	   $listing->description = $request->description;
	   
	   $listing->category_id = $request->category_id;
	   //$listing->working_hour = $request->working_hour;
	   $request->opening_to = !empty($request->opening_to)?",".$request->opening_to:"";
	   $listing->working_hour = $request->opening_from.$request->opening_to;
	   $listing->founded_at = $request->founded_at;
	   $listing->user_id = $request->user()->id;
	   $listing->off_days = $request->off_days;
	   
	   $listing->division_id = $request->division_id;
	   $listing->district_id = $request->district_id;
	   
	   $listing->address = $request->address;
	   $listing->website = $request->website;
	   $listing->phone = $request->phone;
	   $listing->email = $request->email;
	   $listing->registered_with = $request->registered_with;
	   
	   $listing->additional_information = $request->additional_information;
	   
	   
	   
	   $listing->facebook_url = $request->facebook_url;
	   $listing->twitter_url = $request->twitter_url;
	   $listing->linkedin_url = $request->linkedin_url;
	   $listing->googleplus_url = $request->googleplus_url;
	   $listing->youtube_url = $request->youtube_url;
	   $listing->instagram_url = $request->instagram_url;
	   
	   $fileName = Listing::max('id')+1;
	   
	   if($request->hasFile('logo')){
	   	
		 $path = $request->logo->store('storage/uploads');
		 //$fileName  = $request->logo->getClientOriginalName();
		 
		 $fileName = $this->listingRepository->FrameImage($path, $fileName);
		 /*
	   	 $image = new Image();
		 //$image->path = $path;
		 $image->path = $filename;
		 $image->save();
		 $image_id = $image->id;*/
		 $image_id = $this->listingRepository->saveImage($fileName);
		 
	   }else{
		//$fileName  = date('Ymdhis');
		
		$fileName = $this->listingRepository->NameImage($listing->name, $fileName);

		$image_id = $this->listingRepository->saveImage($fileName);
	   }
	  
	   
	   if($image_id != null){
	   	 $listing->image_id = $image_id;
	   }
	   $listing->save();
	   
       //$this->listingRepository->create($data);
	   return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$listing = Listing::find($id);
        return view('frontend.user.listing.show',compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = \App\Listing::find($id);
        return view('frontend.listing',compact('listing','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listing= \App\Listing::find($id);
        $listing->name=$request->get('name');
        $listing->description=$request->get('description');
        $listing->image_id=$request->get('image_id');
        $listing->category_id=$request->get('category_id');
        $listing->user_id=$request->get('user_id');
        $listing->status=$request->get('status');
        $listing->save();
        return redirect('listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = \App\Listing::find($id);
        $listing->delete();
        return redirect('listing')->with('msg','Information has been  deleted');
    }
	
	
	//list district by division
	public function getdistrict(Request $request){
		return District::where('division_id', $request->parent)->pluck('name', 'id');
	}
	
	
}
