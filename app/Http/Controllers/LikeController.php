<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use DB;
use App\Models\User;
use App\Models\NewsInfo;
use App\Models\Create_like;
use App\Models\LikeCarpoo;
use Illuminate\Http\Request;
class LikeController extends Controller
{
public function like($id)
    {
    	$NewsDetail = new Create_like();
    	// check if the person already did a like or not
        $LikedNewsId=$id;
    	$like = Create_like::where('LikedNews_id', $id)->where('UserWhoLiked_id', auth()->user()->id)->first();
        if ($like) {
            $like->delete();
            $changeIconFlag=0;
       } else {
            $LikeInfo =new Create_like();
        $LikeInfo->LikedNews_id=$id;//the article that was liked
        $LikeInfo->UserWhoLiked_id=Auth::user()->id;// the person who liked the article.
        $LikeInfo->save();
        $changeIconFlag=1;
        }
        $NumberOf_Likes = Create_like::where('LikedNews_id',$id)->count();
       return response()->json([
            'like'=> $like,
            'NumberOf_Likes'=> $NumberOf_Likes,
            'changeIconFlag'=> $changeIconFlag,
        ]); 
    }
    public function likeCarpoo($id)
    {
        $CARPOODetail = new LikeCarpoo();
        $LikedCARPOOId=$id;
        // dd($id);
        $likeCarpoo = LikeCarpoo::where('LikedCarpoo_id', $id)->where('UserWhoLiked_id', auth()->user()->id)->first();
        if ($likeCarpoo) {
            $likeCarpoo->delete();
            $ChangeHeartFlag=0;
       } else {
        $LikeCarp =new LikeCarpoo();
    $LikeCarp->LikedCarpoo_id=$id;//the article that was liked
    $LikeCarp->UserWhoLiked_id=Auth::user()->id;// the person who liked the article.
    $LikeCarp->save();
    $ChangeHeartFlag=1;
    }
    $NumberOf_LikesinCarpoo = LikeCarpoo::where('LikedCarpoo_id',$id)->count();
        return response()->json([
            'likeCarpoo'=> $likeCarpoo,
            'NumberOf_LikesinCarpoo'=> $NumberOf_LikesinCarpoo,
            'ChangeHeartFlag'=> $ChangeHeartFlag,
        ]); 
    }
        
    
}
