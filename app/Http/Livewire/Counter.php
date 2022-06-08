<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Auth;
use DB;
use App\Models\User;
use App\Models\NewsInfo;
use Illuminate\Http\Request;
class Counter extends Component
{
	public function increment()
    {
        dd('here');
    }
    public function ViewSinglePageNews($id)
    {
        $Info2 =NewsInfo::all();
        $NewsDetail =NewsInfo::find($id);
        $display2 =User::all();
        return view('livewire.View_Single_Page')->with('display2',$display2)->with('Info2',$Info2)->with('NewsDetail',$NewsDetail);
    }
    // public function render($id)
    // {
    //     $Info2 =NewsInfo::all();
    //     $NewsDetail =NewsInfo::find($id);
    //     $display2 =User::all();
    //     return view('livewire.View_Single_Page')->with('display2',$display2)->with('Info2',$Info2)->with('NewsDetail',$NewsDetail);
    // }
}
