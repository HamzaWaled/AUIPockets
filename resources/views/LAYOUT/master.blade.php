<!DOCTYPE html>
<html>
<head>
    <title>Aui Pockets</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- this is to change to logo of the top of the page -->
<link rel="icon" type="image/png" href="../../../../../../dist/img/logo2.png" />
<link rel="stylesheet" href="../../../../../../dist/css/adminlte.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="icon" type="image/png" href="../../../../../../dist/img/logo2.png" /> -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/animate.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/font.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/slick.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/theme.css">
<link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/bootstrap.min.css"> -->


</head>

<!-- alert -->
@php

    $txt="";

    $txt_Error="";

@endphp

@if(Session::has('success'))

  @php($txt=Session::get('success'))

@endif

 
@if(Session::has('Error'))

  @php($txt_Error=Session::get('Error'))

@endif

<body>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble img-circle elevation-5" style="opacity: .9"src="https://seeklogo.com/images/U/universite-al-akhawayn-ifran-maroc-logo-470BF8AC59-seeklogo.com.png" alt="Capstone" height="200" width="200">
 </div>
<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">
  
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul> -->
      
      <span class="AUIStyle"> <img class="LogoCs" src="../../../../../../dist/img/logo2.png">AUI</span><span class="PacketStyle">Pockets</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/MainPage"> Home</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="/View/MainNewsPage" > Breaking News</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/View/MainCarpoolingPage"> Carpooling</a>
      </li>
      <li class="nav-item active DontShow">
      
          <a class="nav-link"> <i class='fa fa-gear'></i> Settings</a>
      </li>
      <li class="nav-item active DontShow">
      
        <a class="nav-link" href="{{route('View_Profile',['id'=>Auth::user()->id])}}"> <i class='fa fa-user'></i> See profile</a>
      </li>
      <li class="nav-item active DontShow">
      
        <a class="nav-link" href="/logout"> <i class='fa fa-sign-out'></i> Logout</a>
      </li>
      
    </ul>
  <form class="form-inline my-2 my-lg-0 DisplayNone">
    <div class="vl"></div>
        <span class="NamesFL" >{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</span> &nbsp;&nbsp;
        </div>
    <div class="CirclePicture" >
    <div class="dropdown">
        <div class="profile"> <img class="dropbtn ProfPicture" src="../../../../../../uploads/users/{{Auth::user()->Picture}}">
   
            <div class="dropdown-content">
                <ul>
                    <li>
                      <i class='fa fa-gear'></i>
                      <span>Settings</span>
                    </li>
                    <li>
                      <i class='fa fa-user'></i>
                      <a class="SeeProfileStyle" href="{{route('View_Profile',['id'=>Auth::user()->id])}}">See profile</a>
                    </li>
                    <li>
                      <i class='fa fa-sign-out'></i>
                      <a class="LogoutStyle" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </form>
  </div>
</nav>


 <!-- end navbar --> 
 @yield('content')
<script src="../../../../../../dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="../../../../../../plugins/jquery/jquery.min.js"></script>
<script src="../../../../../../dist/js/adminlte.min.js"></script>
<script src="../../../../../../assets2/js/jquery.min.js"></script> 
<script src="../../../../../../assets2/js/wow.min.js"></script> 
<script src="../../../../../../assets2/js/bootstrap.min.js"></script> 
<script src="../../../../../../assets2/js/slick.min.js"></script> 
<script src="../../../../../../assets2/js/jquery.li-scroller.1.0.js"></script> 
<script src="../../../../../../assets2/js/jquery.newsTicker.min.js"></script> 
<script src="../../../../../../assets2/js/jquery.fancybox.pack.js"></script> 
<script src="../../../../../../assets2/js/custom.js"></script>
<!-- comments -->

</body>


<style>

/*.profile {
    position: relative;
    text-align: center;
    
}*/

      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Noto Sans', sans-serif
      }

      html,
      body {
          height: 100%
      }

      body {
         background:#eeeeee;
      }
      .CirclePicture{
        padding-right: 40px;
      }
      .DontShow{
        display:none;
      }
      
      .chackbtn{
        font-size: 30px;
        color: black;
        float: left !important;
        line-height:80px;
        margin-right:40px;
        cursor:pointer;
      }
      #check{
        display: none;
      }

      .HomeStyle{
        color: black; 
        padding-right: 40px;
      }
      .PacketStyle{
        color:#003311; 
        font-family: Amasis MT Pro Blackfont-size;
        font-size:37px;
      } 
      .LogoutStyle{
        color: black;
        text-decoration: none;
      }
      .SeeProfileStyle{
        color: black;
        text-decoration: none;
      } 
      .AboutUsStyle{
        color: black; 
        padding-right: 40px;
       
      } 
      .AUIStyle{
        color:#001a00;
         font-size: 45px; 
         font-family:Algerian;
      }
      .LogoCs{
        
        height: 45px; 
        width: 45px;
      } 
      .WholeStyle{
        padding-left: 40px;
        padding-top: 0px;
      } 
.profile img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid green;
    
}

.dropdown-content {
    display: none;
    position: fixed;
    
    min-width: 200px;
    
    z-index: 1;
    transition: all 10s
}

/*.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block
}
*/
.dropdown-content a:hover {
    background-color: #ddd
}

.dropdown:hover .dropdown-content {
    display: block
}

.profile ul {
    background-color: #fff;
    width: 130px;
    height: 140px;
    border-radius: 10px;
    right: 25px;
    top: 7px;
    position: relative;
    padding: 8px;
    transition: all 10s;
    z-index: 1
}

.profile ul::before {
    content: '';
    position: relative;
    background-color: #fff;
    height: 10px;
    width: 10px;
    top: -5px;
    transform: rotate(45deg)
}

.profile ul li {
    list-style: none;
    text-align: right;
    font-size: 15px;
    padding: 10px;
    display: flex;
    align-items: center;
    
    cursor: pointer;
    border-radius: 4px
}

.profile ul li:hover {
    background-color: #d9d9d9
}

.profile ul li i {
    margin-right: 7px
}
@media screen and (max-width: 820px) {
  .DisplayNone{
    display:none;
  }
  .NamesFL{
    display:none;
  }
  .AUIStyle{
        color:#001a00;
         font-size: 30px; 
         font-family:Algerian;
      }
      .LogoCs{
        
        height: 35px; 
        width: 35px;
      } 
      .PacketStyle{
        color:#003311; 
        font-family: Amasis MT Pro Blackfont-size;
        font-size:23px;
      } 
  .AboutUsStyle{
    backgroud-color:none;
    float:right;
  }
  .vl{
    display:none;
  }
  .DontShow{
    display: block;
      }
  .column {
    width: 100%;
  }
  .profile{
        display:none;
      }
  .ProfPicture{
   height:10px;
   width:10px;
  
  }
 
  .HomeStyle{
        display:none;
      }
}
@media screen and (max-width: 768px) {
  .DisplayNone{
    display:none;
  }
  .NamesFL{
    display:none;
  }
  
  .AUIStyle{
        color:#001a00;
         font-size: 30px; 
         font-family:Algerian;
      }
      .LogoCs{
        
        height: 35px; 
        width: 35px;
      } 
      .PacketStyle{
        color:#003311; 
        font-family: Amasis MT Pro Blackfont-size;
        font-size:23px;
      } 
  .AboutUsStyle{
    backgroud-color:none;
    float:right;
  }
  .vl{
    display:none;
  }
  .DontShow{
    display: block;
      }
  .column {
    width: 100%;
  }
  .profile{
        display:none;
      }
  .ProfPicture{
   height:10px;
   width:10px;
  
  }
 
  .HomeStyle{
        display:none;
      }
}
@media screen and (max-width: 600px) {
  .DisplayNone{
    display:none;
  }
  .NamesFL{
    display:none;
  }
  .AUIStyle{
        color:#001a00;
         font-size: 30px; 
         font-family:Algerian;
      }
      .LogoCs{
        
        height: 35px; 
        width: 35px;
      } 
      .PacketStyle{
        color:#003311; 
        font-family: Amasis MT Pro Blackfont-size;
        font-size:23px;
      } 
  .AboutUsStyle{
    backgroud-color:none;
    float:right;
  }
  .vl{
    display:none;
  }
  .DontShow{
    display: block;
      }
  .column {
    width: 100%;
  }
  .profile{
        display:none;
      }
  .ProfPicture{
   height:10px;
   width:10px;
  
  }
 
  .HomeStyle{
        display:none;
      }
}
</style>
<style>
.vl {
  border-left: 4px solid #003311;
  height: 55px;
  padding-right: 30px;
}
</style>
 
 
 <!-- ALERT -->
 <script>
var valid = "{{$txt}}";

var erreur = "{{$txt_Error}}";

if(valid!=""){

  swal("Success!", valid, "success");//"success" IS THE IMAGE, "Operation done successfully !" IS THE MESSAGE DISPLAYED , valid
          

}

if(erreur!=""){

   swal("Incorrect Password!", valid, "error");

}
     
 </script>
 <!-- SEE PASSWORD -->
<script> 
function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
    x.type = "text";
} else{
    x.type = "password";
      }
}
</script>
<!-- delete -->
<script>
        $(function () {
          // Summernote
          $('#summernote').summernote()

          // CodeMirror
          /*CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
          });*/
        })
          function REMOVE(url) {
    // body...
          swal({
          title: "This account will be deleted immediately.",
          text: "Are you sure you want to continue?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {

            window.location.href=url;
            
          }else{
            return false;
          } 
      });
  }
        function REMOVE_News(url) {
    // body...
          swal({
          title: "The article will be deleted immediately.",
          text: "Are you sure you want to continue?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {

            window.location.href=url;
            
          }else{
            return false;
          } 
      });
  }
  var valid = "{{$txt}}";

var erreur = "{{$txt_Error}}";

if(valid!=""){

  swal("Success!", valid, "success");//"success" IS THE IMAGE, "Operation done successfully !" IS THE MESSAGE DISPLAYED , valid
          

}

if(erreur!=""){

   swal("Item not deleted!", valid, "error");

}
$('.duallistbox').bootstrapDualListbox()

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

      </script>
  
<script>
    function myFunctionnnnnn() {
  
    $(document).on('click','.editbtn',function(){
      var stud_id = $(this).val();
      // alert(stud_id);
      document.getElementById("myFormEditModel").style.display = "block";

      $.ajax({
        type:"GET",
        url:"/EditNews/"+stud_id,
        success: function(response){
          // console.log(response.NewsToEdit.Title);
          $('#stud_id').val(response.NewsToEdit.id);
          // $('#file').val(response.NewsToEdit.Picture);
          $('#NewsTitleForm').val(response.NewsToEdit.Title);
          $('#NewsDescriptionForm').val(response.NewsToEdit.Description);
        }

      });
    });

}
</script>

<script>

    $(document).on('click','.likecounter',function(){
      var Post_Id = $(this).val();
      $.ajax({
        type:"GET",
        url:"/like/"+Post_Id,
        success: function(response){
          //  alert(response.changeIconFlag);
          if(response.changeIconFlag == '1' ){
            // alert("hedre");
            
            const likebutton = document.getElementById("likes_icon");
            
            likebutton.classList.remove("fa-thumbs-o-up");
            likebutton.classList.add("fa-thumbs-up");
            likebutton.classList.remove("Notliked");
            likebutton.classList.add("liked");
            
              //  alert('liked');
              // document.getElementById("likes_icon").innerHTML =<i class="fa fa-thumbs-o-up" style="font-size: 18px;"></i>;
              // $(".likes_icon").find('.fa-heart').css('color', '#f7296a');

            } else {
              //  alert('not liked');
              const likebutton = document.getElementById("likes_icon");
              likebutton.classList.remove("fa-thumbs-up");
              likebutton.classList.add("fa-thumbs-o-up");
              likebutton.classList.remove("liked");
              likebutton.classList.add("Notliked");
            
            };
          document.getElementById("likes_count").innerHTML = response.NumberOf_Likes;
          // $(".likes_count").innerHtml = response.NumberOf_Likes;
          // console.log(response.NumberOf_Likes);
         
        }

      });
    });


</script>
@yield('script')