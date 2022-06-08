<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Class\Traitment;
use Illuminate\Support\Str;

// in this controller we have register ,and change password
class WelcomeController extends Controller
{
    
    public function Register()
    {
    	
    	
    	return view('user.register');
    }
    public function Storing(Request $request){
        
        $user_registration = new User();
        $user_registration->FirstName =$request->FNameForm; 
        $user_registration->LastName =$request->LNameForm;
        $user_registration->StudentID =$request->IDForm; 
        $user_registration->School =$request->SchoolForm;
        $user_registration->Major =$request->MajorForm;
        $user_registration->Category ="1"; 
        $user_registration->Gender =$request->GenderForm;
        $user_registration->BirthDate =$request->BirthDateForm;
        $user_registration->PhoneNumber =$request->PhoneNumberForm; 
        $user_registration->Country =$request->CountryForm;
        $user_registration->City =$request->CityForm;
        $user_registration->email =$request->EmailForm; 
        $user_registration->password =$request->PasswordForm;
        // $user_registration->Picture =$request->PictureForm;
        // dd($user_registration->Picture);
       if($request->hasfile('Picture')){
        // dd($user_registration->password);
        $file = $request->file('Picture');
        $extention = $file->getClientOriginalExtension();
        $PictureName = $file->getClientOriginalName();
        $PictureSize = $file->getSize();
        // dd($extention,$PictureName,$PictureSize);
        $filename = time().'.'.$extention; //we use time to make sure that the image' name won't be duplicated
        //put the image in the storage to be able to retreive it after
         $file->move('uploads/users/',$filename);
        //  $filename->store('public/dist/img/');
        // $request->Picture->storeAs('Profile_Images',$filename,'public');
        $user_registration->Picture =$filename;
       }
        $user_registration->save();

        session::flash('success','registered successfully');
        return redirect()->route('login_index');
    }

     public function MainPage(){
        return view('Main.view');
    }
    public function passwordforget(){
        
        return view('User.ChangePsw');
    }   
       public function changepassword(Request $req)
       {
        
        $Traitment = new Traitment();
        $exist_email = User::where('Email',$req->email)->get()->count();

        
        if($exist_email!=0){
            $random = Str::random(6);

            $l = $random;
            $id_user = User::where('Email',$req->email)->first();

            $update = User::find($id_user->id);

            $update->password=$random;
            $update->save();
            // dd($req->email);

            if($Traitment->SendEmail($id_user->FirstName,"As requested",$random,$id_user->email)){
             
            }else{

            }


            session::flash('success',"Password Changed Successfully"); 
        }else{
            session::flash('Error','Email n existe pas');/// not exist
        }
        return redirect()->route('login_index');
       }
}
