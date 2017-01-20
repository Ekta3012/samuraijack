<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Doctor;
use App\doctor_availability;
use Session;


class DoctorController extends Controller
{
    public function index()
    {
        $doctor=Doctor::all();
        $doctor_availability=doctor_availability::all();
        return view('/index', ['doctor' => $doctor , 'doctor_availability' => $doctor_availability]);
    }
    public function edit($id)
    {
    	$doctor = Doctor::findorFail($id);
    	return view('doctor.edit')->with('doctor',$doctor);
    }
    public function update($id, Request $request)
	{
	    $doctor = Doctor::findOrFail($id);

	    // $this->validate($request, [
	    //     'title' => 'required',
	    //     'description' => 'required'
	    // ]);

	    $input = $request->all();

	    $doctor->fill($input)->save();

	    Session::flash('flash_message', 'Task successfully added!');

	    return redirect()->action('DoctorController@index');
	}
}
