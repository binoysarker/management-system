<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students_result;
use App\EventModel;


class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('ms.index');
    }
    public function getGallery()
    {
        return view('ms.gallery');
    }
    public function getApply()
    {
        return view('ms.apply-now');
    }
    public function getAdmissionResult()
    {
        $results = Students_result::all();
        return view('ms.admission-result',compact('results'));
    }
    public function getAcademicCalander()
    {
        
        
        return view('ms.academic-calander');
    }
    public function getCoCurriculer()
    {
        return view('ms.co-curriculer');
    }
    public function getClassRoutine()
    {
    	return view('ms.class-routine');
    }
    public function getScholarship()
    {
    	return view('ms.scholarship');
    }
    public function getEventsArchive()
    {
    	return view('ms.events-archive');
    }
    public function getEventsSingle()
    {
    	return view('ms.events-single');
    }
    public function getCourseArchive()
    {
    	return view('ms.course-archive');
    }
    public function getCourseSingle()
    {
    	return view('ms.course-single');
    }
    public function getBlogArchive()
    {
    	return view('ms.blog-archive');
    }
    public function getBlogSingle()
    {
    	return view('ms.blog-single');
    }
    public function getContact()
    {
    	return view('ms.contact');
    }
    public function get404()
    {
    	return view('ms.404');
    }


    
}
