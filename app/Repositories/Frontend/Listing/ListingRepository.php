<?php

namespace App\Repositories\Frontend\Listing;


use Carbon\Carbon;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use App\Models\Listing;

class ListingRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Listing::class;
    }
	
	
}
