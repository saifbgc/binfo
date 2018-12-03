<?php

namespace App\Repositories\Backend;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
 * Class SettingRepository.
 */
class SettingRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

    public function getAll(){
        $settings = [
            'data' => Setting::paginate(25),
            'total' => Setting::count()
        ];
        return $settings;
    }
}