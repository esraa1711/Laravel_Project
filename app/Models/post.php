<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Carbon\Carbon;

class post extends Model
{
    use HasFactory ,SoftDeletes ;

    protected $fillable= [
        'title',
        'user_Id',
        'desc',
        'created_at',
    ];


}
