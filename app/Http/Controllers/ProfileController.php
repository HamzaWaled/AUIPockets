<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use DB;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ViewProfile($id){
    	
    	
    	return view('Profile.view');
    }
    public function editing($id){
        // return user::find($id);
        
        if(Auth::user()->Category!=1){
            //is the person who logged in is not an admin he can not change the id in the URL bar , because in the web we have /user/{id}/edit in edit user so anyone can change the id (/{id}/) in the url bar and go to whatever account he wants, which is very bad, so we need to redirect the user to his initial id if he tried to enter an id that is not equal to his id in the url bar. But the admin can still enter any account he wants using this security bug (changing id (/{id}/)in url bar)
            if($id!=Auth::user()->id)
                //check if the id tn the URL bar (the same id that is in the user edit route) does not match with the id of the person who is logging in.
           return redirect()->route('Profile.edit',['id'=>Auth::user()->id]);
       //Go back to the original id of the user that is logging in
        }
        
        return view('Profile.Edit');
    }
     public function updating(Request $req){
        
        $dataa= User::find($req->id);
        // dd($dataa);
        if (isset($req->FNameFormEdit)) {
            $dataa->FirstName=$req->FNameFormEdit;
        }
        if (isset($req->LNameFormEdit)) {
            $dataa->LastName=$req->LNameFormEdit;
        }
        if (isset($req->IDFormEdit)) {
            $dataa->StudentID=$req->IDFormEdit;
        }
        if (isset($req->SchoolFormEdit)) {
            $dataa->School=$req->SchoolFormEdit;
        }
        if (isset($req->MajorFormEdit)) {
            $dataa->Major=$req->MajorFormEdit;
        }
        // if (isset($req->LastNameForm)) {
        //     $dataa->Category=$req->LastNameForm;
        // }
        if (isset($req->GenderFormEdit)) {
            $dataa->Gender=$req->GenderFormEdit;
        }
        if (isset($req->BirthDateFormEdit)) {
            $dataa->BirthDate=$req->BirthDateFormEdit;
        }
        if (isset($req->PhoneNumberFormEdit)) {
            $dataa->PhoneNumber=$req->PhoneNumberFormEdit;
        }
        if (isset($req->CountryFormEdit)) {
            $dataa->Country=$req->CountryFormEdit;
        }
        //user is not able to change his/her category
        $dataa->Category=$req->CategoryFormEdit;
        if (isset($req->CityFormEdit)) {
            $dataa->City=$req->CityFormEdit;
        }
        // picture
        if (isset($req->EmailFormEdit)) {
            $dataa->Email=$req->EmailFormEdit;
        }
        if (isset($req->PasswordFormEdit)) {
            //if the user didnot enter anything in the form, we won't update the password
            $dataa->Password=$req->PasswordFormEdit;
        }
        if (isset($req->Picture)) {
            if($req->hasfile('Picture')){
        		$file = $req->file('Picture');
		        $extention = $file->getClientOriginalExtension();
		        $PictureName = $file->getClientOriginalName();
		        $PictureSize = $file->getSize();
		        $filename = time().'.'.$extention; //we use time to make sure that the image' name won't be duplicated
		        //put the image in the storage to be able to retreive it after
                $file->move('uploads/users/',$filename);
		        // $req->Picture->storeAs('Profile_Images',$filename,'public');
	        	$dataa->Picture =$filename;
       		}
            
        }
         
        

        $dataa->save();
        session::flash('success','Profile Updated successfully');
         
        // return redirect()->back();
         return view('Profile.view');
        
    }
public function deleting($id){
   // I need to add confditons to delete (TO DO)...
    $UserToDelete = User::find($id);
     
         
        $UserToDelete->delete();
         session::flash('success','Profile Deleted Successfully');
        return redirect()->route('login_index');
     
}
}
