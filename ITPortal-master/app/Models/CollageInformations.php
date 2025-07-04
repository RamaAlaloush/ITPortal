<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollageInformations extends Model
{
    use HasFactory;


    protected $fillable = [
        "id",
        "name" ,
        "value"
    ];

        /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



}
