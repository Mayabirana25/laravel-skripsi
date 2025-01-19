<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsetGardu extends Model
{
    use HasFactory;

    public $table = "data_aset_gardu";

    protected $fillable = [
        'bulan', 
        'name',
        'ulp',
        'id_transpower',
        'phase',
        'location',
        'penyulang',
        'keypoint',
        'section',
        'segment',
        'latitude',
        'longitude',
        'spec_fabrication',
        'spec_transtap',
        'spec_voltage',
        'spec_year',
        'spec_wiring',
        'spec_mineraloil',
        'spec_cooling_type',
        'spec_oilweight',
        'spec_transweight',
        'test_earth'
    ];
}
