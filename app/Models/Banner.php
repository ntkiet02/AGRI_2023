<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Banner extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'banners';
    //_id, photos, url
}
