<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
		if(Auth::user()->usertype == 'user'){
			$doctor = Doctor::all();
 
         return view('home.index',compact('doctor'));
               }
          else{
       return view('admin.index');
}
	}

	public function index(){
		if(Auth::id())
		{
			return redirect('home');
		}
		else{
			$doctor = Doctor::all();
		return view('home.index',compact('doctor'));

		}
		
	}

	public function appointment(Request $request ){
		$appointment = new Appointment;
		$appointment->name=$request->name;
		$appointment->email=$request->email;
		$appointment->date=$request->date;
		$appointment->phone=$request->phone;
		$appointment->message=$request->message;
		$appointment->doctor=$request->doctor;
		$appointment->status='In Progress';
		if(Auth::id()){
		$appointment->user_id=Auth::user()->id;
		}
		$appointment->save();
		return redirect()->back()->with('message',('Appointment Request Successful. We will contact with you soon'));
		
	}

	public function myappointment(){
		if(Auth::id()){
			$userid=Auth::user()->id;
			$appoint=Appointment::where('user_id',$userid)->get();
			return view('home.my_appointment',compact('appoint'));

		}
		else{
			return redirect()->back();
		}	
	}
	public function cancel_appoint($id){
			$data = Appointment::find($id);
			$data->delete();
			return redirect()->back();
			 
		}
}
