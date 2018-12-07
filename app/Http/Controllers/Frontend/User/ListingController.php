<?php

namespace App\Http\Controllers\frontend\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Frontend\Listing\ListingRepository;
use App\Http\Requests\Listing\AddRequest;
use App\Models\Category;
use App\Models\Listing;
use App\Models\Image;
use App\Models\Division;
use App\Models\District;



use Validator;
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
	
	
    public function index()
    {
        $listings=\App\Models\Listing::all();
        return view('frontend.listing',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
	   $listing->working_hour = $request->working_hour;
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
	   
	   
	   if($request->hasFile('logo')){
	   	
		 $path = $request->logo->store('storage/uploads');
	   	 $image = new Image();
		 $image->path = $path;
		 $image->save();
		 $image_id = $image->id;
	   }
	   
	   if($image_id != null){
	   	 $listing->image_id = $image_id;
	   }
	   $listing->save();
	   
       //$this->listingRepository->create($data);
	   return redirect($this->redirectPath());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
