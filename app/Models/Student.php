<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table ="students";

    //Propiedad que indica que campos pueden ser alterados
    protected $fillable=[
        'name',
        'email',
        'phone' ,
        'language'  
    ];


}
