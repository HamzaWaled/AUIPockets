@extends('LAYOUT.master')
@section('content')

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href=""><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
                    <div class="header_top_left">
            <ul class="top_nav">
              <li>
              
                  <img src="../../../../../../dist/img/al akhawayn logo_.png"  class="photo">
             
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/View/MainNewsPage">
                  <span class="fa fa-home" ></span>
              
                </a>
               
                  <!-- <a class=" dropdown-toggle"href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" >
                    Categories
                  </a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: 100px;">
                  
                  <a class="dropdown-item" href="#Cat2">Category 2</a>
                  <a class="dropdown-item" href="#Cat3">Category 3</a>
                  <a class="dropdown-item" href="#Cat4">Category 4</a>
                  <a class="dropdown-item" href="#Cat5">Category 5</a>
                  <a class="dropdown-item" href="#Cat6">Category 6</a>
                  <a class="dropdown-item" href="#Cat7">Category 7</a>
                  <a class="dropdown-item" href="#Cat8">Category 8</a>
                </div> -->

                <!-- Start of pop up to update news -->
                @if(Auth::user()->Category==2)
                <!-- category 2 is admin -->
              <li>
                <button class="open-button" onclick="openForm()"> <i class="fa fa-plus"></i> News</button>
              </li>
              @endif
              <!-- form to add news -->
              <div class="form-popup" id="myForm">
                <div class="wrapper bg-light">
                  <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-close" style="font-size:20px;color:red; padding-left:500px;"></i></button>
                      <div class="h5 font-weight-bold" style="color: #003311;">&nbsp;&nbsp;  Add News</div>
                      <hr>
                            <form action="save-news" class="form-container" method="POST" enctype="multipart/form-data" style="width: 100%; height: 100%;">
                            @csrf
                            <input type="hidden" name="btn_sub" id="btn_sub" value="no">
                            
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                            <div class="form-group col-md-6"> 
                                
                                <label for="NewsTitleForm" class="mandatory" required>Title</label> 
                                <input type="textarea" class="form-control" name="NewsTitleForm" required> 
                            </div>
                            <div class="form-group col-md-6">
                                <div> 
                                    <label class="mandatory" required>Category</label> 
                                </div>
                                <select name="NewsCategoryForm" id="NewsCategoryForm" class="NewsCategoryForm form-control" required>
                                    <option selected disabled>Choose..</option>
                                    
                                    <option value="2">Career and Opportunities</option>
                                    <option value="3">Clubs</option>
                                    <option value="4">SGA</option>
                                    <option value="5">Events</option>
                                    <option value="6">Trips</option>
                                    <option value="7">Sport</option>
                                    <option value="8">Others</option>
                                                 
                                </select>
                            </div>
                            
                        </div>
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                            
                            <div class="form-group col-md-12"> 
                                <label for="Picture" class="mandatory">Picture</label> 

                                <input type="File" id="myFile" class="form-control" name="Picture"> 
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                            
                            <div class="form-group col-md-12"> 
                                <label  for="NewsDescriptionForm" class="mandatory ">Description </label> 
                                <!-- <input type="textarea" class="form-control" name="MajorForm" rows="20" cols="50">  -->
                                <textarea name="NewsDescriptionForm" cols="50" required></textarea>
                            </div>
                        </div>
                            <label class="mandatory "></label> Required field
                            <div class="d-flex align-items-center justify-content-sm-end button-section"> 
                                <button type="submit" name="user-save" class="btn btn-primary mx-4" style="background-color:#003300;" id="submitButton"onclick="validateSignupForm()">Add</button> 
                            </div>
                                 
                            
                    </form>

              </div>


              <!-- end of pop up -->
            </ul>
          </div>
          <div class="header_top_right">
            <!--  -->
            <p>
              <br>
            <div onload='startDate()' id='date' style="color:white;"></div>
              
           <span style="color:white;"> Today’s Paper</span>  

            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <span class="" >
            <img src="../../../../../../dist/img/BN.png" class="banner-pic">
          </span>
          <span class="add_banner" style="padding-top: 0px;">
            
              <img src="../../../../../../assets2/images/banner 3.jpg"  >
            
          </span>
        </div>
      </div>
    </div>
  </header>
  <style>
    /* .dropdown-toggle{
      background-color:#003311;
    } */
    
    .Cat2Picture{
      width: 338px;
      height: 253px;
      object-fit: contain;
    } 
    .Cat3P{
      width: 330px;
      height: 253px;
      object-fit: contain;
    }
    .Cat4P{
      width: 330px;
      height: 253px;
      object-fit: contain;
    }
    .Cat5P{
      width: 330px;
      height: 253px;
      object-fit: contain;
    }
    
    .banner-pic{
      padding-top: 20px;
    }
    
.photo{
  height:5%;
  width:20%;
}    
.fa-home{
  font-size: 16px;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 140px;
}
.form-container {
  
  padding: 10px;
  /*background-color: white;*/
}

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/*.wrapper {
        max-width: 750px;
        border-radius: 10px;
        margin: 50px auto;
        padding: 10px;
        
    }
*/
    .form-control {
        border: 1px solid #001a00;
    }

    .form-control:focus {
        box-shadow: none
    }

    .mandatory::after {
        content: "*";
        color: #ff0000;
    }

    .button-section .btn {
        background-color: #fff;
        border-radius: 20px;
        border: 1.5px solid #001a00;
        padding: 5px 15px
    }

    .button-section .btn.btn-primary {
        background-color: #002266;
        color: #eee
    }

    .button-section .btn:hover {
        background-color: #001a00;
        color: #eee
    }

    .btn.btn-primary {
        background-color: #fff;
        color: #555;
        border: 1px solid #001a00;
        width: 115px
    }

    .btn.btn-primary:hover {
        background-color: #001a00;
        color: #fff
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active {
        background-color: #f2f2f2
    }
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
@media only screen and (max-width: 820px) {
  .Cat3P{
    width: 100%;
      height: 100%;
      object-fit: contain;
    }
  .Cat2Picture{
      width: 100%;
      height: 100%;
      object-fit: contain;
    } 
    .Cat4P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .Cat5P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
}
@media only screen and (max-width: 768px) {
  .Cat3P{
    width: 100%;
      height: 100%;
      object-fit: contain;
    }
  .Cat2Picture{
      width: 100%;
      height: 100%;
      object-fit: contain;
    } 
    .Cat4P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .Cat5P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
}
@media only screen and (max-width: 820px) {
       .banner-pic{
              padding-top:0;
              width:400px;
              text-align:center;
          }
}
@media only screen and (max-width: 768px) {
       .banner-pic{
              padding-top:0;
              width:280px;
              text-align:center;
          }
}
@media only screen and (max-width: 600px) {
  .header_top{
    background-color:#003311;
  }
  .dropdown-toggle{
    
    width: 95px;
    background-color:#003311;
    
  }
  .Cat3P{
    width: 100%;
      height: 100%;
      object-fit: contain;
    }
  .Cat2Picture{
      width: 100%;
      height: 100%;
      object-fit: contain;
    } 
    .Cat4P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .Cat5P{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  .photo{
    height:5%;
  width:30%;
    float:left;
  }
  .fa-home{
    float:left;
    padding-left:80px;
    font-size: 14px;
  }
  .banner-pic{
    padding-top:0;
    width:280px;
    text-align:center;
    }
}

</style>
  <!-- <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active">
            <a href="index.html">
              <span class="fa fa-home desktop-home"></span>
              <span class="mobile-show">Home</span>
            </a>
            <a href="#">
              Technology
            </a>
          </li>
          <li>
            
          </li>
          <li class="dropdown"> 
            

        </ul>
      </div>
    </nav>
  </section> -->
  <!--  -->
  <section id="newsSection">
    <div class="row">
      
      <div class="col-lg-12 col-md-12">
      <div class="latest_newsarea"> <span>Latest News</span>
        <div class="latest_newsarea"> 
          <ul id="ticker01" class="news_sticker">
           @foreach($Info as $NewsInfos)
            <li>
              <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                <img src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}">
                {!! Str::limit($NewsInfos['Title'], 20, $end='...') !!}
              </a>
            </li>
             @endforeach
          </ul>
       </div>
      </div>
    </div>
  </section>



  <section id="sliderSection">
    <div class="row">
      
      
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          @foreach($Info as $NewsInfos)
          <div class="single_iteam"> 
            <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}"> 
              <img src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}" style="filter: brightness(60%);">
            </a>
            <a class="slider_tittle" href="#">
                  
                </a>
            <div class="slider_article">
              <h2 style="text-align: right; padding-bottom: 170px;font-size: 15; position: static;" >
                <a class="slider_tittle" href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                  {{ \Carbon\Carbon::parse($NewsInfos['updated_at'])->format('Y/m/d - H:i')}}
                  
                </a>
              </h2>
              <h2 style="text-align: center;" >
                <a class="slider_tittle" href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                  {!! Str::limit($NewsInfos['Title'], 30, $end='...') !!}
                </a>
              </h2>
              <p>
                {!! Str::limit($NewsInfos['Description'], 150, $end='...') !!}
                
              </p>
            </div>
          </div>
          @endforeach

          
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2>
            <span style="font-size: 16px;">
              Top News <i class="fa fa-newspaper-o"></i>
            </span>
          </h2>
          <div class="latest_post_container">
            <!-- <div id="prev-button"><i class="fa fa-chevron-up"></i></div> -->
            <ul class="">
            @foreach($CountTop3likedArticles as $top)
              @foreach($Info as $NewsInfos)
                  @if($NewsInfos['id'] == $top->LikedNews_id)
                  <li>
                    
                      <div class="media"> 
                        <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                        
                        <img class="PictureTopNews" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}">
                        &nbsp;
                        
                        <br><br>
                        <div class="media-body"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title TitleTopNews"> 
                      {!! Str::limit($NewsInfos['Title'], 88, $end='...') !!}
                    </a> 
                  </div>
                        </a>
                      </div>
                    </li>
                    
                  @endif
                  
              @endforeach    
          @endforeach
              
            </ul>
            <!-- <div id="next-button"><i class="fa  fa-chevron-down"></i></div> -->
          </div>
        </div>
      </div>

      
    </div>
    <br>
  </section>
  <section id="sliderSection">
    <div class="row">
    </div>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span id="Cat2" >Career and Opportunities <i class="fa fa-address-card"></i></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                
                @php
                  $counter1=1;
                  $TitleToAvoid;
                  $IdToAvoid;
                @endphp
                  @foreach($Info as $NewsInfos)
                  @if($NewsInfos['NewsCategory'] == "2" && $counter1<2 )
                @php
                  $counter1++;

                @endphp
                <li>

                  <figure class="bsbig_fig"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}"> 
                      <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}" class="Cat2Picture"> 
                      <span></span> 
                    </a>
                    <figcaption> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                        @php
                        $TitleToAvoid=$NewsInfos['Title'] ;
                        $IdToAvoid=$NewsInfos['id'] ;
                        @endphp
                        {!! Str::limit($NewsInfos['Title'], 50, $end='...') !!}
                      </a> 
                    </figcaption>
                    <p>
                      {!! Str::limit($NewsInfos['Description'], 171, $end='...') !!}<a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" style="color: #003311;">Read more</a>
                    </p>
                  </figure>
                  @if(Auth::user()->Category==2)
                  <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                      
                          <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                          </button>
                      
                       
                    @endif
                </li>
                @endif
                @endforeach
               
              </ul>
            </div>
            <div class="single_post_content_right">
              <!-- TitleToAvoid is the title of the first news that I have already displayed before and to make sure that I will not face any problem I did the id as well(if should be different) -->
                @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "2" && $NewsInfos['Title'] != $TitleToAvoid && $NewsInfos['id'] != $IdToAvoid)
                
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                      <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                    </a>
                    <div class="media-body"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title">
                      {!! Str::limit($NewsInfos['Title'], 50, $end='...') !!}
                        <!--  User ' LastName '   -->   
                      </a> 
                    </div>
                    @if(Auth::user()->Category==2)

                    <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                    
                       &nbsp;
                       
                          <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                          </button>
                      
                    @endif
                  </div>
                </li>
              </ul>
              
              @endif
              @endforeach
                
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span id=Cat3>Clubs <i class='fas fa-chess-knight'></i></span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  @php
                  $counter2=1;
                  $TitleToAvoid2;
                  $IdToAvoid2;
                @endphp
                @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "3" && $counter2<2 )
                @php
                  $counter2++;

                @endphp
                  <li>
                    <figure class="bsbig_fig"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" > 
                        <img src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}" class="Cat3P"> 
                        <span class="overlay"></span> 
                      </a>
                      <figcaption> 
                        <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                           @php
                        $TitleToAvoid2=$NewsInfos['Title'] ;
                        $IdToAvoid2=$NewsInfos['id'] ;
                        @endphp
                        {!! Str::limit($NewsInfos['Title'], 60, $end='...') !!}
                        </a> 
                      </figcaption>
                      <p>
                        {!! Str::limit($NewsInfos['Description'], 155, $end='...') !!}<a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" style="color: #003311;">Read more</a>
                      </p>
                    </figure>
                    @if(Auth::user()->Category==2)

                    <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                       
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                          </button>
                      
                    @endif
                    <hr>
                  </li>
                  @endif
                @endforeach
                </ul>
                <ul class="spost_nav">
                  @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "3" && $NewsInfos['Title'] != $TitleToAvoid2 && $NewsInfos['id'] != $IdToAvoid2)
                  <li>
                    <div class="media wow fadeInDown"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                        <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                      </a>
                      <div class="media-body"> 
                        <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                          {!! Str::limit($NewsInfos['Title'], 50, $end='...') !!}
                        </a>
                      </div>
                      @if(Auth::user()->Category==2)
                      <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button> 
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                    </div>
                  </li>
                  @endif
              @endforeach
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span id=Cat4>SGA <i class='fas fa-handshake'></i></span></h2>
                <ul class="business_catgnav">
                @php
                  $counter3=1;
                  $TitleToAvoid3;
                  $IdToAvoid3;
                @endphp
                  @foreach($Info as $NewsInfos)
                  @if($NewsInfos['NewsCategory'] == "4" && $counter3<2 )
                @php
                  $counter3++;


                @endphp
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}"> 
                        <img src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}" class="Cat4P"> 
                        <span ></span> 
                      </a>
                      <figcaption> 
                        <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                          @php
                        $TitleToAvoid3=$NewsInfos['Title'] ;
                        $IdToAvoid3=$NewsInfos['id'] ;
                        @endphp
                        {!! Str::limit($NewsInfos['Title'], 55, $end='...') !!}
                        </a> 
                      </figcaption>
                      <p>
                        {!! Str::limit($NewsInfos['Description'], 155, $end='...') !!}<a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" style="color: #003311;">Read more</a>
                      </p>

                    </figure>
                    @if(Auth::user()->Category==2)
                    <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                       
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                      
                    @endif
                    <hr>
                  </li>
                  @endif
                @endforeach
                </ul>
                
                <ul class="spost_nav">
                   @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "4" && $NewsInfos['Title'] != $TitleToAvoid3 && $NewsInfos['id'] != $IdToAvoid3)
                  <li>
                    <div class="media wow fadeInDown"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                        <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                      </a>
                      <div class="media-body"> 
                        <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                          {!! Str::limit($NewsInfos['Title'], 50, $end='...') !!}
                        </a> 
                      </div>
                      @if(Auth::user()->Category==2)
                      <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button> 
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                    </div>
                  </li>
                  @endif
              @endforeach
                  
                </ul>
              </div>

            </div>

          </div>
          <div class="single_post_content">
            <h2><span id=Cat5>Events <i class='fas fa-volume-up'></i></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                 @php
                  $counter4=1;
                  $TitleToAvoid4;
                  $IdToAvoid4;
                @endphp
                @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "5" && $counter4<2 )
                @php
                  $counter4++;

                @endphp
                <li>
                  <figure class="bsbig_fig  wow fadeInDown">
                    <a class="featured_img" href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                      <img src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}" class="Cat5P" > 
                      <span class=""></span> 
                    </a>
                    <figcaption> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}">
                        @php
                        $TitleToAvoid4=$NewsInfos['Title'] ;
                        $IdToAvoid4=$NewsInfos['id'] ;
                        @endphp
                        {!! Str::limit($NewsInfos['Title'], 55, $end='...') !!}
                      </a> 
                    </figcaption>
                    <p>
                      {!! Str::limit($NewsInfos['Description'], 155, $end='...')!!}<a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" style="color: #003311;">Read more</a>
                    </p>
                  </figure>
                  @if(Auth::user()->Category==2)
                  <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button> 
                       
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                </li>
                @endif
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach($Info as $NewsInfos)
                @if($NewsInfos['NewsCategory'] == "5" && $NewsInfos['Title'] != $TitleToAvoid4 && $NewsInfos['id'] != $IdToAvoid4)
                <li>
                  <div class="media wow fadeInDown"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                      <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                    </a>
                    <div class="media-body"> 
                      <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                        {!! Str::limit($NewsInfos['Title'], 45, $end='...') !!}
                        
                      </a> 
                    </div>
                    @if(Auth::user()->Category==2)
                    <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button> 
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                  </div>
                </li>
                @endif
              @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <!-- i AM GOING TO KNOW POPULAR POSTS BY NUMBER OF LIKES -->
            <h2><span id=Cat6>Trips <i class='fas fa-skiing-nordic'></i></span></h2>
            <ul class="spost_nav">
              @foreach($Info as $NewsInfos)
              @if($NewsInfos['NewsCategory'] == "6")
              <li>
                <div class="media wow fadeInDown"> 
                  <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                    <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                  </a>
                  <div class="media-body"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                      {!! Str::limit($NewsInfos['Title'], 35, $end='...') !!}
                    </a> 
                  </div>
                  @if(Auth::user()->Category==2)
                  <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button> 
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                </div>
              </li>
              @endif
              @endforeach
              
            </ul>
          </div>
          <div class="single_sidebar">
            <!-- i AM GOING TO KNOW POPULAR POSTS BY NUMBER OF LIKES -->
            <h2><span id=Cat7>Sport <i class='fas fa-futbol'></i></span></h2>
            <ul class="spost_nav">
              @foreach($Info as $NewsInfos)
              @if($NewsInfos['NewsCategory'] == "7")
              <li>
                <div class="media wow fadeInDown"> 
                  <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                    <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                  </a>
                  <div class="media-body"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                      {!! Str::limit($NewsInfos['Title'], 35, $end='...') !!}
                    </a> 
                  </div>
                  @if(Auth::user()->Category==2)
                  <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                </div>
              </li>
              @endif
              @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <!-- i AM GOING TO KNOW POPULAR POSTS BY NUMBER OF LIKES -->
            <h2><span id=Cat8>Others <i class='fas fa-book-reader'></i></span></h2>
            <ul class="spost_nav">
              @foreach($Info as $NewsInfos)
              @if($NewsInfos['NewsCategory'] == "8")
              <li>
                <div class="media wow fadeInDown"> 
                  <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="media-left"> 
                    <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsInfos['Picture']}}"> 
                  </a>
                  <div class="media-body"> 
                    <a href="{{route('View_SinglePageNews',['id'=>$NewsInfos['id']])}}" class="catg_title"> 
                      {!! Str::limit($NewsInfos['Title'], 35, $end='...') !!}
                    </a> 
                  </div>
                  @if(Auth::user()->Category==2)
                  <button type="button" value="{{$NewsInfos['id']}}" class="btn btn-primary editbtn" onclick="myFunctionnnnnn()" style="background-color: #003311; width: 40px;" >
                        <i class="fa fa-edit" style="font-size: 15px; color: white;"></i>
                    </button>
                       &nbsp;
                      <button type="button" class="btn btn-danger" onclick="return REMOVE_News('{{route('Delete_SinglePageNews',['id'=>$NewsInfos['id']])}}')">
                            <i class="fa fa-trash" style="font-size: 15px;"></i>
                      </button>
                    @endif
                </div>
              </li>
              @endif
              @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <!-- i AM GOING TO KNOW POPULAR POSTS BY NUMBER OF LIKES -->
            <h2><span>Meteo <i class='fas fa-cloud-sun-rain'></i></span></h2>
            <ul class="spost_nav">
              
      <?php 
      $city_name = 'Ifrane';
      $api_key= 'd189c8caa9d3c6d5c048d39846d32403';
      $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='. $api_key;
      $weather_data = json_decode(file_get_contents($api_url), true) ;
      $temperature = $weather_data['main']['temp'];
      $temperature_in_celsius = $temperature -273.15;
      $max_temperature_in_celsius = $weather_data['main']['temp_max']-273.15;
      $min_temperature_in_celsius = $weather_data['main']['temp_min']-273.15;
      $feels_like_temperature_in_celsius = $weather_data['main']['feels_like']-273.15;
      $weather_description = $weather_data['weather'][0]['description'];
      $weather_icon = $weather_data['weather'][0]['icon'];
      // echo "<pre>";
      // print_r($weather_data);
      // echo ($weather_description);
     
      ?>
      
      

<div class="wrapper">
  <div class="weather">
    <div class="city"><h1>Ifrane, Morocco</h1></div>
          <div class="clearfix"></div>

    <div class="cont">
      <div class="icon" style="">
        <!-- <i class="fa fa-sun-o spin glow"></i>
        <i class="fa fa-cloud wind"></i>
        <i class="fa fa-cloud two"></i> -->
        <div class="wind glow two">
        <?php
        
         echo "<img src='http://openweathermap.org/img/wn/".$weather_icon."@2x.png' />";
        ?>
        </div>
      </div>
      
      <div class="temp">
        <div class="current">
        <?php
          echo intval($temperature_in_celsius);
        ?>°
        </div>
        <div  style= "font-size: 18px; ">
        <?php
        echo ($weather_description);
        ?>
        </div>
        <div class="high" style= "font-size: 12px; ">
          
          Feels like: <?php
echo intval($feels_like_temperature_in_celsius);
?>° 
          
        </div>
        
        
      </div>
      
      <div class="clearfix"></div>
      
      <div class="date"><p><?php
$DateAndTime = date('m/d/Y h:i a', time());  
echo "$DateAndTime";
?></p></div>
      
    </div>
  </div> <!-- weather -->
</div> <!-- wrapper -->
<style>
 
.wrapper::before{
  
  position: absolute;
  top:0;
  left:0;
  height:100%;
  width: 100%;
}
.weather{
  position: relative;
  height: 60%;
  width: 100%;

background: -moz-radial-gradient(center, ellipse cover,  #7abcff 0%, #60abf8 44%, #4096ee 100%); /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#7abcff), color-stop(44%,#60abf8), color-stop(100%,#4096ee)); /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  #7abcff 0%,#60abf8 44%,#4096ee 100%); /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  #7abcff 0%,#60abf8 44%,#4096ee 100%); /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  #7abcff 0%,#60abf8 44%,#4096ee 100%); /* IE10+ */
background: radial-gradient(ellipse at center,  #7abcff 0%,#60abf8 44%,#4096ee 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

  border-radius: 15px;
  
  border: 3px solid #FFFFFF;
  /* padding: 10px 20px; */
  
  padding-top:10px;
  padding-left:5px;
  padding-right:5px;
}

.city h1{
  padding: 0;
  margin: 5px 0px;
  text-align: center;
  font-size: 14pt;
  text-transform: uppercase;
  color: #FFFFFF;
  font-weight: normal;
}
.icon{
  width: 50%;
  height:auto;
  float: left;
  padding: 10px;
  color: gold;
  margin: 10px 0;
  position: relative;
  
}
/* .icon .fa-sun-o{
  font-size: 88pt;
  position: absolute;
  text-shadow: 0 0 20px #fff;
}
.icon .fa-cloud{
  font-size: 58pt;
  position: absolute;
  top: 25px;
  right: 25px;
  color: rgba(255,255,255,0.90);
}
.icon .fa-cloud + .two{
  top: 15px;
  right: 5px;
  font-size: 48pt;
  color: #fff;
} */
.temp{
  width: 50%;
  float: left;
  padding: 5px;
  color: #FFFFFF;
  margin: 5px 0;
}
.current{
  font-size: 35pt;
  text-align: center;
  font-weight: lighter;
}
.clearfix{
  clear:both;
  width: 100%;
  border-top: 3px solid #FFFFFF;

}

.date{
  text-align: center;
  position: relative;
  
  color: #FFFFFF;
  font-size: 11pt;
  
}

.spin {
  animation: spin 60s linear infinite,
    glow 10s linear infinite;
}
@keyframes spin{
  100%{
    transform: rotate(360deg);
  }
}
.wind{
  animation: wind 7.5s ease-in-out infinite;
}
@keyframes wind{
  50%{
     top: 30px;
     right: 15px;
  }
}
.glow{
  animation: ;
}
@keyframes glow{
  50%{
     text-shadow: 0 0 5px #fff; 
  }
}
  </style>
     
            </ul>
          </div>
        </aside>
      </div>

    </div>
  </section>

  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <span style="font-size: 26px; text-align: center;">About Us</span>
            <hr style="background-color: white;">
            <!-- <img src="../../../../../../dist/img/logoAPP3.png" width="100%" style="padding-top: 0px;">
            <br> -->
            <!-- <hr style="background-color: grey;"> -->
            <p>Breaking news is a platform, primarily web-based, that collects facts from selected authentic sources. It targets specific individuals and works to gain customers by providing credible and legitimate information, to aid their perspective.</p>
             
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <span style="font-size: 26px; text-align: center;">Follow Us</span>
            <hr style="background-color: white;">
            
            <p><i class="fa fa-instagram" style="font-size: 27px;"></i>
              Instagram &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-globe" style="font-size: 27px;"></i> Website
            </p>
            <hr style="background-color: grey;">
            <p><i class="fa fa-facebook-square" style="font-size: 26px;"></i>
              Facebook &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter-square" style="font-size: 27px;"></i> Twitter
            </p>
            <hr style="background-color: grey;">
            <p><i class="fa fa-linkedin" style="font-size: 27px;"></i>
              linkedin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-youtube " style="font-size: 27px;"></i> Youtube
            </p>
          
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <span style="font-size: 26px; text-align: center;">Contact Information</span>
            <hr style="background-color: white;">
            <!-- <p> <i class="fa fa-envelope"></i> Email</p>
             <p>H.waled@aui.ma</p>
            <hr style="background-color: grey;"> -->
            <p><i class="fa fa-phone"></i> Phone</p>
           <p>+212 (0)-643-085-998</p>
            <hr style="background-color: grey;">
            <address>
            <p><i class="fa fa-map-marker"></i> Address</p>
             <p>P.O. Box 104, Hassan II Avenue, 53000, Ifrane - Morocco  </p>
            </address>

          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2022 Al Akhawayn University - Capstone Project</p>
      <p class="developer">Developed By Hamza Waled</p>
    </div>
  </footer>
  
          
</div>
<!-- edit pop up -->
<div class="form-popupEdit" id="myFormEditModel">
      <div class="wrapper bg-light">
            <button type="button" class="btn cancel" onclick="closeFormEdit()"><i class="fa fa-close" style="font-size:20px;color:red; padding-left:500px;"></i></button>
            <div class="h5 font-weight-bold" style="color: #003311;"> &nbsp; Update News</div>
            <hr>
            <form action="{{url('Update_News')}}" method="POST" class="form-container" enctype="multipart/form-data" style="width: 100%; height: 100%;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="stud_id" id="stud_id">
                           
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                            <label  for="NewspicForm">&nbsp;&nbsp;&nbsp;News Picture </label> 
                            <div class="profile-pic-div" >
                               
                            <img src="../../../../../../uploads/NewsPic/updatenews.jpg"  id="photo" alt="Admin" class="rounded-circle" width="100" height="100">
                    
                                <input type="file" id="file" name="Picture" >
                                <label for="file" id="uploadBtn">Update Picture</label>
                            </div>
                            <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                                <div class="form-group col-md-12"> 
                                    
                                    <label for="NewsTitleForm">Title</label> 
                                    <input type="textarea" class="form-control" name="NewsTitleForm" id="NewsTitleForm"> 
                                </div>
                            </div>
                        </div> 
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                            <div class="form-group col-md-8"> 
                                <label  for="NewsDescriptionForm">Description </label>
                                <br>
                                <textarea name="NewsDescriptionForm" id="NewsDescriptionForm" cols="60"></textarea>
                            </div>
                        </div>   
                        <div class="d-flex align-items-center justify-content-sm-end button-section"> 
                          <button type="submit" class="btn btn-primary mx-4" style="background-color:#003300;">
                            Update
                          </button> 
                        </div>                       
            </form>
      </div>

<!-- fdd -->
 
<style>


.profile-pic-div{
    
    
    transform: translate(0%,-5%);
    border-radius: 50%;
    overflow: hidden;
    
}

#file{
    display: none;
}

#uploadBtn{
    height: 20px;
    width: 100%;
    position: absolute;
    
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    background: rgba(0, 0, 0, 0.7);
    color: wheat;
    
    font-size:10px;
    cursor: pointer;
    display: none;
}
.form-popupEdit {
  display: none;
  position: fixed;

  top: 30%;

   left: 30%;
  border: 3px solid #f1f1f1;
  
}
.PictureTopNews{
  min-width: 150px;
   min-height: 110px;
  
}

}
@media (max-width: 768px) {
    .TitleTopNews{
      display:none;
    }
    .photo{
            height:5%;
            width:30%;
            float:left;
          }
    .PictureTopNews{
      
      min-width: 130px;
   min-height: 110px;
}
}
@media (max-width: 820px) {
  .TitleTopNews{
      display:none;
    } 
    .photo{
            height:5%;
            width:30%;
            float:left;
          }
    .PictureTopNews{
      
      min-width: 130px;
   min-height: 110px;
}
}
@media (max-width: 600px) {
    .TitleTopNews{
      display:inline;
    }
    .PictureTopNews{
      
      min-width: 130px;
   min-height:104px;
}
.header_top_right{
            display:none;
          }
}       
</style>
                            <!-- end form to edit  -->
@endsection

@section('script')
<script>
  function startDate() {
    var d = new Date();
    var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    document.getElementById("date").innerHTML = days[d.getDay()]+" , "+d.getDate()+" "+months[d.getMonth()]+" "+d.getFullYear();
  }
startDate();
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function closeFormEdit() {
  document.getElementById("myFormEditModel").style.display = "none";
}
</script>

<script>

//declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload

file.addEventListener('change', function(){
    //this refers to file
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

    }
});

</script>

@endsection

    <!-- edit news script -->


