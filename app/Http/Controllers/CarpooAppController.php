<?php

namespace App\Http\Controllers;
use App\Class\Traitment2;
use App\Class\Traitment;
use App\Class\Traitment3;
use App\Class\Traitment4;
use App\Class\Traitment5;
use App\Class\Traitment6;

use App\Class\Traitment7;
use Session;
use Auth;
use DB;
use App\Models\User;
use App\Models\CarpoolingInfo;
use App\Models\ChooseSpecificCarpoo_Table;
use App\Models\LikeCarpoo;
use Illuminate\Http\Request;


class CarpooAppController extends Controller
{
    public function ViewMainCarpooPage()
    {
        $EveryUser = User::all();
        $checkuser = CarpoolingInfo::all();
        $ManageYourOwnCarpoo =CarpoolingInfo::all();
        $CountTop3likedCarpoo = DB::table('topdriverscarp')
        ->select('LikedCarpoo_id')
        ->groupBy('LikedCarpoo_id')
        ->orderByRaw('COUNT(LikedCarpoo_id) DESC')
        ->limit(3)
        ->get();
        $count=1;
        // dd($CountTop3likedCarpoo);
    	return view('CarpoolingApplication.MainCarpooPage')->with('ManageYourOwnCarpoo',$ManageYourOwnCarpoo)
        ->with('EveryUser',$EveryUser)
        ->with('checkuser',$checkuser)
        ->with('count',$count)
        ->with('CountTop3likedCarpoo',$CountTop3likedCarpoo);
    }
    public function ViewAvailableCarpooPage(Request $request)
    {
        
        $like_id =CarpoolingInfo::find($request->id);
        // dd($DisplaySpecificCarpoo);
        $UserWhoHasChosenThisCarpoo =ChooseSpecificCarpoo_Table::all();
        $PersonWhoPublishedInCarpoo =User::all();
        $DisplayCarpoo =CarpoolingInfo::all();
        $NumberOfAvailableCarpoo = CarpoolingInfo::where('CityFrom',$request->LeavingDisplayForm)->where('CityTo',$request->GoingDisplayForm)->where('CarpooDate',$request->DateDisplayForm)->count();
        $DisplaySpecificCarpoo = CarpoolingInfo::where('CityFrom',$request->LeavingDisplayForm)
                                                            ->where('CityTo',$request->GoingDisplayForm)
                                                            ->where('CarpooDate',$request->DateDisplayForm)->get();
        $Dateee=$request->DateDisplayForm;
        $PlaceToGo=$request->GoingDisplayForm;
        $PlaceComingFrom=$request->LeavingDisplayForm;
        // THIS IS not exact because I am not checking the exact carpooling I am just checking every carpoo
        $CheckIfUserLiked=0;
        foreach($DisplaySpecificCarpoo as  $checklike){
            $CheckIfUserLiked = LikeCarpoo::where('LikedCarpoo_id',$checklike->id)->where('UserWhoLiked_id', auth()->user()->id)->count();
        }
        // dd($CheckIfUserLiked);
        // dd($test);
        //  dd($DisplaySpecificCarpoo);
    	return view('CarpoolingApplication.ViewAvailableCarpoo')
        ->with('DisplaySpecificCarpoo',$DisplaySpecificCarpoo)
        ->with('NumberOfAvailableCarpoo',$NumberOfAvailableCarpoo)
        ->with('DisplayCarpoo',$DisplayCarpoo)
        ->with('Dateee',$Dateee)
        ->with('PlaceToGo',$PlaceToGo)
        ->with('PlaceComingFrom',$PlaceComingFrom)
        ->with('CheckIfUserLiked',$CheckIfUserLiked)
        ->with('like_id',$like_id)
        ->with('UserWhoHasChosenThisCarpoo',$UserWhoHasChosenThisCarpoo)
        ->with('PersonWhoPublishedInCarpoo',$PersonWhoPublishedInCarpoo);
    }
    public function StoringCarpoo(Request $request){
        
        $CarpooToAdd = new CarpoolingInfo();
        
        $CarpooToAdd->User_Who_Added_This_Carpoo_id =Auth::user()->id; 
        $CarpooToAdd->CityFrom =$request->CarpooFromForm;
        $CarpooToAdd->CityTo=$request->CarpooFromTO;
        $CarpooToAdd->MeetingPoint=$request->MeetingPointForm;
        $CarpooToAdd->CarpooDate =$request->DATEEForm; 

        $CarpooToAdd->CarType =$request->CARTYPEForm;

        $CarpooToAdd->CIN=$request->CINForm;

        $CarpooToAdd->Price =$request->PriceForm; 

        $CarpooToAdd->Passengers =$request->PassengerForm;

        $CarpooToAdd->StartingTime=$request->StartTimeForm;
        $CarpooToAdd->ArrivingTime=$request->ArriveTimeForm;
        
       
        $CarpooToAdd->save();

        session::flash('success','Carpooling Created.');
        return redirect()->route('View_MainCarpooPage');
    }
    public function deletingCarpool($id){
        // I need to add confditons to delete (TO DO)...
        $Traitment6 = new Traitment6();
        $Traitment7 = new Traitment7();
        $AllUserswithThisCarpoo= ChooseSpecificCarpoo_Table::where('CarpooId',$id)->get();
         $UserToDelete = CarpoolingInfo::find($id);
         $usersALL = user::all();
         $UserWhoCreatedThisCarpoo= $UserToDelete->User_Who_Added_This_Carpoo_id;
         // dd($AllUserswithThisCarpoo);
         // we mean carpootodelete ($UserToDelete2).
         foreach ($usersALL as $valuesss){
             if($valuesss->id == $UserWhoCreatedThisCarpoo){
               $FUserCreatedthisCarp=$valuesss->FirstName; 
               $LUserCreatedthisCarp=$valuesss->LastName; 
             }
         }
         foreach ($AllUserswithThisCarpoo as $Userss){
            foreach ($usersALL as $values){
                 if($values->id == $Userss->User_Who_HasChosen_This_Carpoo){
                         
                     if($Traitment7->SendEmail($values->FirstName,$values->LastName,
                     $UserToDelete->CityFrom,$UserToDelete->CityTo,
                     $UserToDelete->CarpooDate,$FUserCreatedthisCarp,$LUserCreatedthisCarp,$values->email)){
                         
                     }
                 }
             }
             foreach ($usersALL as $valuess){
                 if($valuess->id == $UserWhoCreatedThisCarpoo){
                         
                     if($Traitment6->SendEmail($valuess->FirstName,$valuess->LastName,
                     $UserToDelete->CityFrom,$UserToDelete->CityTo,
                     $UserToDelete->CarpooDate,$valuess->email)){
                         
                     }
                 }
             }
                 
         }

              
             $UserToDelete->delete();
              session::flash('success','Carpooling Deleted.');
             return redirect()->back();
          
     }
     public function deletingCarpool2($id){
        $Traitment6 = new Traitment6();
        $Traitment7 = new Traitment7();
        // I need to add confditons to delete (TO DO)...
        $AllUserswithThisCarpoo= ChooseSpecificCarpoo_Table::where('CarpooId',$id)->get();
        $UserToDelete2 = CarpoolingInfo::find($id);
        $usersALL = user::all();
            $UserWhoCreatedThisCarpoo= $UserToDelete2->User_Who_Added_This_Carpoo_id;
            // dd($AllUserswithThisCarpoo);
            // we mean carpootodelete ($UserToDelete2).
            foreach ($usersALL as $valuesss){
                if($valuesss->id == $UserWhoCreatedThisCarpoo){
                  $FUserCreatedthisCarp=$valuesss->FirstName; 
                  $LUserCreatedthisCarp=$valuesss->LastName; 
                }
            }
            foreach ($AllUserswithThisCarpoo as $Userss){
               foreach ($usersALL as $values){
                    if($values->id == $Userss->User_Who_HasChosen_This_Carpoo){
                            
                        if($Traitment7->SendEmail($values->FirstName,$values->LastName,
                        $UserToDelete2->CityFrom,$UserToDelete2->CityTo,
                        $UserToDelete2->CarpooDate,$FUserCreatedthisCarp,$LUserCreatedthisCarp,$values->email)){
                            
                        }
                    }
                }
                foreach ($usersALL as $valuess){
                    if($valuess->id == $UserWhoCreatedThisCarpoo){
                            
                        if($Traitment6->SendEmail($valuess->FirstName,$valuess->LastName,
                        $UserToDelete2->CityFrom,$UserToDelete2->CityTo,
                        $UserToDelete2->CarpooDate,$valuess->email)){
                            
                        }
                    }
                }
                    
            }

             
            
            
            $UserToDelete2->delete();
              session::flash('success','Carpooling Deleted.');
             return redirect()->back();
          
     }
     public function UpdateAvailableCarpooPage($id){
        
        $CARPOO_to_UPDATE= new ChooseSpecificCarpoo_Table();
        $Update_Available_Spots=CarpoolingInfo::find($id);
        $Traitment3 = new Traitment3();
        $Traitment4 = new Traitment4();
         $usersALL = user::all();
        // dd($Update_Available_Spots);
        $CARPOO_to_UPDATE->CarpooId=$id;
        $CARPOO_to_UPDATE->User_Who_HasChosen_This_Carpoo=Auth::user()->id;
        $CARPOO_to_UPDATE->save();
        // dd($CARPOO_to_UPDATE->User_Who_HasChosen_This_Carpoo);
            

        
            if($Update_Available_Spots->Passengers>=1){
                $Update_Available_Spots->Passengers=$Update_Available_Spots->Passengers-1;
            }
        $Update_Available_Spots->User_Who_Added_This_Carpoo_id=$Update_Available_Spots->User_Who_Added_This_Carpoo_id;
        $Update_Available_Spots->CityFrom=$Update_Available_Spots->CityFrom;
        $Update_Available_Spots->CityTo=$Update_Available_Spots->CityTo;
        $Update_Available_Spots->CarpooDate=$Update_Available_Spots->CarpooDate;
        $Update_Available_Spots->CarType=$Update_Available_Spots->CarType;
        $Update_Available_Spots->CIN=$Update_Available_Spots->CIN;
        $Update_Available_Spots->Price=$Update_Available_Spots->Price;
        $Update_Available_Spots->StartingTime=$Update_Available_Spots->StartingTime;
        $Update_Available_Spots->ArrivingTime=$Update_Available_Spots->ArrivingTime;
        
        
        $Update_Available_Spots->save();
        foreach ($usersALL as $value) {
            if($value->id == $CARPOO_to_UPDATE->User_Who_HasChosen_This_Carpoo){
                $FpersononSelectedcarpoo= $value->FirstName;
                $LpersononSelectedcarpoo= $value->LastName;
            }    
        }
        foreach ($usersALL as $value) {
            if($value->id == $Update_Available_Spots->User_Who_Added_This_Carpoo_id){
                $FpersonCreatedcarpoo= $value->FirstName;
                $LpersonCreatedcarpoo= $value->LastName;
                $EmailCreatedcarpoo= $value->PhoneNumber;
                $PhoneCreatedcarpoo= $value->email;
            }    
        }
        // dd($FpersonCreatedcarpoo);
        foreach ($usersALL as $value) {
            if($value->id == $CARPOO_to_UPDATE->User_Who_HasChosen_This_Carpoo ){
                if($Traitment4->SendEmail($value->FirstName,$value->LastName,$Update_Available_Spots->CityFrom,
                $Update_Available_Spots->CityTo,$Update_Available_Spots->CarpooDate,
                $Update_Available_Spots->StartingTime,$FpersononSelectedcarpoo,$LpersononSelectedcarpoo,
                $FpersonCreatedcarpoo,$LpersonCreatedcarpoo,$EmailCreatedcarpoo,$PhoneCreatedcarpoo,$value->email)){
                        
                }
            }  
            if($value->id == $Update_Available_Spots->User_Who_Added_This_Carpoo_id){
                if($Traitment3->SendEmail($value->FirstName,$value->LastName,$Update_Available_Spots->CityFrom,
                $Update_Available_Spots->CityTo,$Update_Available_Spots->CarpooDate,
                $Update_Available_Spots->StartingTime,$FpersononSelectedcarpoo,$LpersononSelectedcarpoo,$value->email)){
                        
                }
            }  
        }
        session::flash('success','Check your email for contact information.');
        return redirect()->back();
    }
    public function DeletingChosenCarpooling($id){
        // I need to add confditons to delete (TO DO)...
         $chosencarpooTodelete = ChooseSpecificCarpoo_Table::find($id);
         $Update_Available_Spot=CarpoolingInfo::find($chosencarpooTodelete->CarpooId);
         $Traitment2 = new Traitment2();
         $Traitment5 = new Traitment5();
         $usersALL = user::all();
        //  dd($Update_Available_Spot->Passengers);
        $personwhowantTocancelTravel = $chosencarpooTodelete->User_Who_HasChosen_This_Carpoo;
        $PersonWhoCreatedThisTravel = $Update_Available_Spot ->User_Who_Added_This_Carpoo_id;
        $cityfrom = $Update_Available_Spot->CityFrom;
        $cityto = $Update_Available_Spot->CityTo;
        $carpoDate = $Update_Available_Spot->CarpooDate;
       
        foreach ($usersALL as $value){
            if($value->id == $personwhowantTocancelTravel){
                $FUserCancelingTrip = $value->FirstName;
                $LUserCancelingTrip = $value->LastName;
            }
        }
            // dd($req->email);
            foreach ($usersALL as $value) {
                if($value->id == $PersonWhoCreatedThisTravel){
                    if($Traitment2->SendEmail($value->FirstName,$value->LastName,$cityfrom,$cityto,$carpoDate,$FUserCancelingTrip,$LUserCancelingTrip,$value->email)){
                            
                    }
                }    
            }
            foreach ($usersALL as $value) {
                if($value->id == $personwhowantTocancelTravel){
                    if($Traitment5->SendEmail($value->FirstName,$value->LastName,$cityfrom,$cityto,
                    $carpoDate,$FUserCancelingTrip,$LUserCancelingTrip,$value->email)){
                            
                    }
                }    
            }
            
            
// if($Update_Available_Spot->Passengers>=1){
            $Update_Available_Spot->Passengers=$Update_Available_Spot->Passengers+1;
        // }
    $Update_Available_Spot->User_Who_Added_This_Carpoo_id=$Update_Available_Spot->User_Who_Added_This_Carpoo_id;
    $Update_Available_Spot->CityFrom=$Update_Available_Spot->CityFrom;
    $Update_Available_Spot->CityTo=$Update_Available_Spot->CityTo;
    $Update_Available_Spot->CarpooDate=$Update_Available_Spot->CarpooDate;
    $Update_Available_Spot->CarType=$Update_Available_Spot->CarType;
    $Update_Available_Spot->CIN=$Update_Available_Spot->CIN;
    $Update_Available_Spot->Price=$Update_Available_Spot->Price;
    $Update_Available_Spot->StartingTime=$Update_Available_Spot->StartingTime;
    $Update_Available_Spot->ArrivingTime=$Update_Available_Spot->ArrivingTime;
    
    // dd($Update_Available_Spot->Passengers);
    $Update_Available_Spot->save();
    $chosencarpooTodelete->delete();
              session::flash('success','You have unselected this carpoooling.');
             return redirect()->back();
          
     }
    
}
