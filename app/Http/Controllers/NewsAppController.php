<?php

namespace App\Http\Controllers;
use Session;
use Auth;
use DB;
use App\Models\User;
use App\Models\NewsInfo;
use App\Models\Create_like;
use App\Class\Traitment8;
use Illuminate\Http\Request;

class NewsAppController extends Controller
{
    public function ViewMainNewsPage()
    {
        $CountBestArticles =Create_like::all();
        //  dd($CountBestArticles);
$CountTop3likedArticles = DB::table('top3likes')
->select('LikedNews_id')
->groupBy('LikedNews_id')
->orderByRaw('COUNT(LikedNews_id) DESC')
->limit(3)
->get();
    // dd($CountTop3likedArticles);
     
    	$Info =NewsInfo::all();
        // dd($Info);
    	$display =User::all();
    	return view('NewsApplication.view')->with('display',$display)->with('Info',$Info)
        ->with('CountBestArticles',$CountBestArticles)->with('CountTop3likedArticles',$CountTop3likedArticles);
    }
    public function StoringNews(Request $request){
        
        $NewsToAdd = new NewsInfo();
        $usersALL = user::all();
        $Traitment8 = new Traitment8();
        $NewsToAdd->Title =$request->NewsTitleForm; 
        $NewsToAdd->Description =$request->NewsDescriptionForm;
        $NewsToAdd->NewsCategory=$request->NewsCategoryForm;
        
       if($request->hasfile('Picture')){
        $file = $request->file('Picture');
        $extention = $file->getClientOriginalExtension();
        $PictureName = $file->getClientOriginalName();
        $PictureSize = $file->getSize();
        $filename = time().'.'.$extention; 
        $file->move('uploads/NewsPic/',$filename);
        // $request->Picture->storeAs('NewsForm_Images',$filename,'public');
        $NewsToAdd->Picture =$filename;
       }
        $NewsToAdd->save();
        foreach ($usersALL as $name){
            if($Traitment8->SendEmail($name->FirstName,$name->LastName,
            $NewsToAdd->Title,$NewsToAdd->Description,$name->email)){
                    
                }
            
        }
        session::flash('success','News Created successfully');
        return redirect()->route('View_MainNewsPage');
    }
    public function ViewSinglePageNews($id)
    {
        $InitialNumberOfLikes = Create_like::where('LikedNews_id',$id)->count();
        $CheckIfUserLiked = Create_like::where('LikedNews_id',$id)->where('UserWhoLiked_id', auth()->user()->id)->count();
        
        $Info2 =NewsInfo::all();
        $NewsDetail =NewsInfo::find($id);
        $display2 =User::all();
        $Artile_id =NewsInfo::find($id);
        $like_id =NewsInfo::find($id);
        // $NumberOf_Likes = Create_like::where('LikedNews_id',$NewsDetail->id)->count();
        // return $NumberOf_Likes;
        return view('NewsApplication.ViewSinglePage')->with('display2',$display2)->with('Info2',$Info2)->with('NewsDetail',$NewsDetail)->with('like_id',$like_id)->with('Artile_id',$Artile_id)->with('InitialNumberOfLikes',$InitialNumberOfLikes)->with('CheckIfUserLiked',$CheckIfUserLiked);
    }
    public function DeleteSinglePageNews($id){
   // I need to add confditons to delete (TO DO)...
    $NewsToDelete =NewsInfo::find($id);
    // $deletefromtop3like = DB::table('top3likes')
    //                 ->where('LikedNews_id', $id)
    //                 ->get();
    //  dd($deletefromtop3like);
    
    // $deletefromtop3like->delete();
    $NewsToDelete->delete();
         session::flash('success','News Deleted successfully');
        return redirect()->route('View_MainNewsPage');
     
}
    public function editingNews($id){
        $NewsToEdit= NewsInfo::find($id);
        return response()->json([
            'status'=>200,
            'NewsToEdit'=>$NewsToEdit,
        ]);

    }
     public function updatingNews(Request $req){
        $stud_idd = $req->stud_id;
        // dd($stud_idd);
        $NewsToEdit= NewsInfo::find($stud_idd);
        // dd($NewsToEdit);
        if (isset($req->NewsTitleForm)) {
            $NewsToEdit->Title=$req->NewsTitleForm;
        }
        if (isset($req->NewsDescriptionForm)) {
            $NewsToEdit->Description=$req->NewsDescriptionForm;
        }
        if (isset($req->Picture)) {
            if($req->hasfile('Picture')){
                $file = $req->file('Picture');
                $extention = $file->getClientOriginalExtension();
                $PictureName = $file->getClientOriginalName();
                $PictureSize = $file->getSize();
                $filename = time().'.'.$extention;
                $file->move('uploads/NewsPic/',$filename);
                // $req->Picture->storeAs('NewsForm_Images',$filename,'public');
                $NewsToEdit->Picture =$filename;
            }
        }
         $NewsToEdit->save();
        session::flash('success','News Updated successfully');
        return redirect()->back();
    }
    // like part
    // public function LikeSinglePageNews($id)
    // {
    //     dd("here");
    //     $LikeInfo =new Create_like();
    //     $LikeInfo->LikedNews_id=$id;//the article that was liked
    //     $LikeInfo->UserWhoLiked_id=Auth::user()->id;// the person who liked the article.
    //     $LikeInfo->save();
    // }
    
}

