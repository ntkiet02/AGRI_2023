<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class VanBanBieuMau extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'van_ban_bieu_mau';
}
