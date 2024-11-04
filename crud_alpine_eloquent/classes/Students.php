<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Students extends Eloquent{
   
    protected $table = "student_alpine";
    
    protected $fillable = [
        'name','email','password', 'address', 'gender'
    ];
    
    // protected $hidden = [
    //     'created', 'updated'
    // ];
    public $timestamps=false;  //when our table dont have updated_at and created_at columns
}