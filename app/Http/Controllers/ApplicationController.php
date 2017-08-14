<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentProfile;
use DB;
use Illuminate\Support\Facades\Storage;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ms.student-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ms.apply-now');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentprofile = new StudentProfile;
        $studentprofile->student_name = $request->student_name;
        $studentprofile->student_fatherName = $request->student_fatherName;
        $studentprofile->student_motherName = $request->student_motherName;
        $studentprofile->student_mobileNumber = $request->student_mobileNumber;
        $studentprofile->student_email = $request->student_email;
        $studentprofile->student_subject = $request->student_subject;
        $studentprofile->student_address = $request->student_address;
        
        // file upload section


        $studentprofile->profile = $request->file('profile')->getClientOriginalName();
        /*$filepath = $request->profile->path();
        $fileextension = $request->profile->extension();*/
        
        if ($request->hasFile('profile')) {
            $request->profile->storeAs('public/upload', $request->file('profile')->getClientOriginalName());
            // return Storage::put('public/upload', $studentprofile->profile);
            
        }
        else
        {
            return 'No file selected';
        }

        // saving in the database
        $studentprofile->save();
        session()->flash('message','Data Uploaded Successfuly');
        return redirect('ms/student-profile');
        


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
