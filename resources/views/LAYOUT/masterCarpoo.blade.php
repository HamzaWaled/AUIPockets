<!DOCTYPE html>
<html>
<head>
    <title>Aui Pockets</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->

<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta name="description" content="Bootstrap.">  

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

<!-- bootstrap css -->
<link rel="stylesheet" href="../../../../../../assets3/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../../../../../../assets3/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../../../../../../assets3/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../../../../../../assets3/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!-- <link rel="stylesheet" type="text/css" href="../../../../../../assets2/css/bootstrap.min.css"> -->
<!-- EDIT TABLE IN MAINCARPOO -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<!-- end EDIT TABLE IN MAINCARPOO -->

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
    <img class="animation__wobble img-circle elevation-5" style="opacity: .9"src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/2eea7122617799.56315ac76eea4.gif" alt="Capstone" height="200" width="200">
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
        <a class="nav-link" href="/MainPage">Home</a>
        <!-- <a class="nav-link" href="/MainPage"><i class="fa fa-arrow-circle-left"></i> Home</a> -->
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="/View/MainNewsPage" > Breaking News</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/View/MainCarpoolingPage"> Carpooling</a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#"> <i class='fa fa-car'></i> Carpooling</a>
      </li> -->
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
        <div class="profile"> 
          <img class="dropbtn ProfPicture" src="../../../../../../uploads/users/{{Auth::user()->Picture}}">
   
            <div class="dropdown-content">
                <ul>
                    <li>
                      <i class='fa fa-gear'></i>
                      <span>Settings</span>
                    </li>
                    <li>
                      <i class='fa fa-user'></i>
                      <!-- <span>
                      <a class="SeeProfileStyle" href="{{route('View_Profile',['id'=>Auth::user()->id])}}">See profile</a>
                      </span> -->
                      <span>
                      <a class="SeeProfileStyle" href="{{route('View_Profile',['id'=>Auth::user()->id])}}">profile</a>
                      </span>
                    </li>
                    <li>
                      <i class='fa fa-sign-out'></i>
                      <span>
                      <a class="LogoutStyle" href="/logout">Logout</a>
                      </span>
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
 <!-- view carpoo available -->
 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
 <!-- end view carpoo available -->
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
<!-- Javascript files-->
<script src="../../../../../../assets3/js/jquery.min.js"></script>
      <script src="../../../../../../assets3/js/popper.min.js"></script>
      <script src="../../../../../../assets3/js/bootstrap.bundle.min.js"></script>
      <script src="../../../../../../assets3/js/jquery-3.0.0.min.js"></script>
      <script src="../../../../../../assets3/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../../../../../../assets3/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../../../../../assets3/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<!-- comments -->
<!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">    -->
<!-- pop up form manage or see you own carpool -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- end pop up form manage or see you own carpool -->
<!-- EDIT TABLE IN MAINCARPOO -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
<!-- end EDIT TABLE IN MAINCARPOO -->

</body>


<style>

/*.profile {
    position: relative;
    text-align: center;
    
}*/

      /* * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Noto Sans', sans-serif
      }

      html,
      body {
          height: 100%
      } */

      body {
         /* background:#eeeeee; */
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
      .LogoutStyle:hover{
        color: black;
        text-decoration: none;
      }
      .SeeProfileStyle{
        color: black;
        text-decoration: none;
      } 
      .SeeProfileStyle:hover{
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
    
    min-width: 300px;
    
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
    height: 180px;
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
 
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
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
  function REMOVECarpoo(url) {
    // body...
          swal({
          title: "This Carpool will be deleted immediately.",
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
   function REMOVE_ChosenCarpool(url) {
    // body...
          swal({
          title: "You are not going to travel with this person anymore.",
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
      
      var Carpoo_Id = $(this).val();
      $.ajax({
        type:"GET",
        url:"/likeCarpoo/"+Carpoo_Id,
        success: function(response){
          // alert(HeartLike_icon);
         
          if(response.ChangeHeartFlag == '1' ){
             
            //  document.write(Carpoo_Id);
            const likeCarpbutton = document.getElementById("HeartLike_icon");
            alert('You liked this person.');
            // likeCarpbutton.classList.remove("fa-heart-o");
            // likeCarpbutton.classList.add("fa-heart");
            // likeCarpbutton.classList.remove("Notliked");
            // likeCarpbutton.classList.add("liked");
            
              //  alert('liked');
              // document.getElementById("likes_icon").innerHTML =<i class="fa fa-thumbs-o-up" style="font-size: 18px;"></i>;
              // $(".likes_icon").find('.fa-heart').css('color', '#f7296a');

            } else {
              //  alert('not liked');
              const likeCarpbutton = document.getElementById("HeartLike_icon");
              alert('You do not like this person anymore.');
            //   likeCarpbutton.classList.remove("fa-heart");
            // likeCarpbutton.classList.add("fa-heart-o");
            //   likeCarpbutton.classList.remove("liked");
            //   likeCarpbutton.classList.add("Notliked");
            
            };
           
          // $(".likes_count").innerHtml = response.NumberOf_Likes;
          // console.log(response.NumberOf_Likes);
         
        }
      });
    });


</script>

@yield('script')