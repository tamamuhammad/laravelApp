<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
