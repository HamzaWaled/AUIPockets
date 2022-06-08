
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
            
              <img src="../../../../../../assets2/images/AuiBanner.jpg"  >
            
          </span>
        </div>
      </div>
    </div>
  </header>
  
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
      
        <div class="latest_newsarea"> <span>More News</span>
          <ul id="ticker01" class="news_sticker">
           @foreach($Info2 as $NewsInf)
            <li>
              <a href="{{route('View_SinglePageNews',['id'=>$NewsInf['id']])}}">
                <img src="../../../../../../uploads/NewsPic/{{$NewsInf['Picture']}}">
                {!! Str::limit($NewsInf['Title'], 20, $end='...') !!}
              </a>
            </li>
             @endforeach
          </ul>
       </div>
      </div>
    </div>
<!-- form to display information -->
  <div class="testbox">


      <form>
        <h1 class="titleT">{{$NewsDetail['Title']}}</h1>

        <p>{{ \Carbon\Carbon::parse($NewsDetail['updated_at'])->format('m.d.Y')}} </p>
       <div class="banner">
          <img alt="" src="../../../../../../uploads/NewsPic/{{$NewsDetail['Picture']}}" class="ImageCs">
        
       </div>  

        <br>
        <span class="descriptionText"> {{$NewsDetail['Description']}}</span>
       
        <hr>
        
        
               <!-- start comments -->
 
    <div class="d-flex justify-content-center row">
        <div class="col-md-12">
            <div class="d-flex flex-column comment-section" id="myGroup">         
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                        
                        @if($CheckIfUserLiked == 0)
                        <span class=" p-2 ">
                          <button type="button" value="{{$like_id['id']}}" class=" likecounter" style=" background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          ">
                          <i id=likes_icon class="fa fa-thumbs-o-up" style="font-size: 18px;"></i>  
                          </button>
                        </span>
                        @endif  
                        @if($CheckIfUserLiked == 1)
                        <span class=" p-2 ">
                          <button type="button" value="{{$like_id['id']}}" class=" likecounter" style=" background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          ">
                          <i id=likes_icon class="fa fa-thumbs-up liked" ></i>  
                          </button>
</span>
                        @endif
                        @if($InitialNumberOfLikes < 2)
                          <div class="like p-2 cursor LikeSize">
                            Like (<span id=likes_count>{{$InitialNumberOfLikes}}</span>)
                          </div>
                        @endif
                        @if($InitialNumberOfLikes >= 2)
                          <div class="like p-2 cursor">
                            Likes (<span id=likes_count>{{$InitialNumberOfLikes}}</span>)
                        
                        </div>
                        @endif
                        
                        
              
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        
                        <div class="like p-2 cursor action-collapse ShareFB" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2"><span class="ml-1"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https://chillyfacts.com/create-facebook-share-button-for-website-webpages/&layout=button&size=small&mobile_iframe=true&width=60&height=20&appId" width="80" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></span></div>
                        <!-- share button should be dynamic once I host the application https://chillyfacts.com/create-facebook-share-button-for-website-webpages/-->
                    </div>
                </div>          
                <div id="collapse-1" class="bg-light p-2 collapse" data-parent="#myGroup">
                    <div class="d-flex flex-row align-items-start">
                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="../../../../../../uploads/users/{{Auth::user()->Picture}}" width="40" height="40">
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="font-weight-bold name">{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</span>
                                <span class="date text-black-50"><?php echo date('m.d.Y');?></span>
                            </div>
                        </div>
                        
                    </div>
                    <br>
                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button>
                        
                    </div>
                    <hr>
                    <div class="container justify-content-center">
                        <div class="justify-content-center">
                            <div class="col-md-12">
                                <div class="text-left">
                                    <h6>All comments (3)</h6>
                                </div>
                                <div class="card p-3 mb-12">
                                    <div class="d-flex flex-row"> <img src="../../../../../../uploads/NewsPic/tr.png" height="40" width="40" class="rounded-circle">
                                    &nbsp; 
                                    <div class="d-flex flex-column ms-12">
                                            <h6 class="mb-1 text-primary">Khalid Mousalim</h6>
                                            <p class="comment-text">This is a very important article. </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                          <div class="d-flex align-items-center"> <i class="fa fa-heart-o"></i> <span class="ms-1 fs-10"> </span> </div>
                                            
                                        </div>
                                        <div class="d-flex flex-row"> <span class="text-muted fw-normal fs-10">April 12,2022 12:10 PM</span> </div>
                                    </div>
                                </div>
                                <div class="card p-3 mb-2">
                                    <div class="d-flex flex-row"> <img src="../../../../../../uploads/NewsPic/tot.jpg" height="40" width="40" class="rounded-circle">
                                    &nbsp; 
                                    <div class="d-flex flex-column ms-2">
                                            <h6 class="mb-1 text-primary">Amal Meghraoui</h6>
                                            <p class="comment-text">I agree with you Khalid, I really like this article too.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                            <div class="d-flex align-items-center"> <i class="fa fa-heart-o"></i> <span class="ms-1 fs-10"></span> </div>
                                            
                                        </div>
                                        <div class="d-flex flex-row"> <span class="text-muted fw-normal fs-10">April 19,2022 1:10 PM</span> </div>
                                    </div>
                                </div>
                                <div class="card p-3 mb-2">
                                    <div class="d-flex flex-row"> <img src="../../../../../../uploads/NewsPic/jh.jpeg" height="40" width="40" class="rounded-circle">
                                    &nbsp; 
                                    <div class="d-flex flex-column ms-2">
                                            <h6 class="mb-1 text-primary">Walid fehdi</h6>
                                            <p class="comment-text">That is great!</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row gap-3 align-items-center">
                                            <div class="d-flex align-items-center"> <i class="fa fa-heart-o"></i> <span class="ms-1 fs-10"></span> </div>
                                            
                                        </div>
                                        <div class="d-flex flex-row"> <span class="text-muted fw-normal fs-10">April 20,2022 12:10 PM</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end comments -->

</form>
      
      
</div>

  </section>
  
<footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <span style="font-size: 26px; text-align: center;">About Us</span>
            <hr style="background-color: white;">
            
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
<!-- comment style -->
<style>
  .ImageCs{
    width: 800px; 
    object-fit: contain;
    text-align: center;
    right: 50%;
  }
  .photo{
  height:5%;
  width:20%;
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
  background-color: white;
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
</style>
<style>
  .date {
    font-size: 11px
}

.comment-text {
    font-size: 12px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}

.fa {
    cursor: pointer
}
.liked{
  color: #003311;
  font-size: 20px !important;
}
.Notliked{
  color: none;
  font-size: 18px !important;
}
</style>

<!-- end comments -->

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');

body {
    background-color: #eee;
    font-family: 'Poppins', sans-serif
}

.card {
    /*border: none;*/
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);

}

.comment-text {
    font-size: 12px
}

.fs-10 {
    font-size: 12px
}
</style>
<!-- end comment style -->
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      /*padding: 0;
      margin: 0;*/
      /*outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;*/
      }
      h1 {
     
      font-size: 30px;
      color: #003311;
     
      
      }
      
      form {
      /* width: 100%; */
      padding: 20px;
      padding-top:20px;
      border-radius: 6px;
      /* background: #fff; */
      /*box-shadow: 0 0 8px  #003311; */
      }
      .banner {
      position: relative;
      height: 100%;
        
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      /*background-color: rgba(0, 0, 0, 0.2); */
      position: absolute;
      width: 100%;
      height: 100%;
      }
      .fa-home{
        
              font-size: 16px;
          }
          .banner-pic{
      padding-top: 20px;
    }
    @media only screen and (max-width: 820px) {
          .titleT{
            font-size:16px;
            font-weight: bold;
          }
          .photo{
            height:5%;
            width:30%;
            float:left;
          }
          
          .banner-pic{
              padding-top:0;
              width:280px;
              text-align:center;
          }
          .ImageCs{
            width: 500px; 
            object-fit: contain;
            text-align: center;
            right: 50%;
          }
          .descriptionText{
            font-size:14px;
          }
          
      }
      @media only screen and (max-width: 768px) {
          .titleT{
            font-size:16px;
            font-weight: bold;
          }
          .photo{
            height:5%;
            width:30%;
            float:left;
          }
          
          .banner-pic{
              padding-top:0;
              width:400px;
              text-align:center;
          }
          .ImageCs{
            width: 400px; 
            object-fit: contain;
            text-align: center;
            right: 50%;
          }
          .descriptionText{
            font-size:14px;
          }
          
      }
      @media only screen and (max-width: 600px) {
          .titleT{
            font-size:16px;
            font-weight: bold;
          }
          .photo{
            height:5%;
            width:30%;
            float:left;
          }
          .ShareFB{
            display:none;
          }
          .fa-home{
            float:right;
            padding-left:90px;
            font-size: 14px;
          }
          .LikeSize{
            font-size: 5px;
          }
          .liked{
  color: #003311;
  font-size: 15px !important;
}
.Notliked{
  color: none;
  font-size: 13px !important;
}
          .banner-pic{
              padding-top:0;
              width:280px;
              text-align:center;
          }
          .header_top_right{
            display:none;
          }
          .ImageCs{
            width: 250px; 
            object-fit: contain;
            text-align: center;
            right: 50%;
          }
          .descriptionText{
            font-size:10px;
          }
          
      }
      
    </style>

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
</script>
<script type="text/javascript"></script>
@endsection
