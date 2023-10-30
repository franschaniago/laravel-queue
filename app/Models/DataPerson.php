<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerson extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'data_person';
    protected $fillable = ['name','email'];
}
