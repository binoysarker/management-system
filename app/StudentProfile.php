<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
	
    protected $fillable = ['student_name','student_fatherName','student_motherName','student_mobileNumber','student_email','student_subject','student_address'];
    
}
