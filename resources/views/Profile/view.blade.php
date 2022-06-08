@extends('LAYOUT.master')
@section('content')


<div class="container">

    <div class="main-body">

    
        <div class="row gutters-sm">

            <div class="col-md-5 mb-3">
              <div class="card">
              	<br>
              	<span style="color:#003311; font-family: Amasis MT Pro Blackfont-size;font-size:27px; text-align: center;"><b> Profile</b></span>
              	<hr>
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  
                    <img src="../../../../../../uploads/users/{{Auth::user()->Picture}}" alt="Admin" class="rounded-circle" >
                    <div class="mt-3">
                      <h4>{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</h4>
                      <p class="text-secondary mb-1">
                        
                        <?php
                            if(Auth::user()->Category== 1) {
                              echo('Student');
                            }else if (Auth::user()->Category== 2){
                            echo('Administrator');
                          }
                        ?>
                      </p>
                      <p class="text-muted font-size-sm">Al Akhawayn University</p>
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              
              <hr>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                        <circle cx="12" cy="12" r="10">
                          
                        </circle>
                        <line x1="2" y1="12" x2="22" y2="12">
                          
                        </line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                          
                        </path>
                      </svg>
                      Website
                    </h6>
                    <span class="text-secondary">http://www.aui.ma/</span>
                  </li>
                  
                 
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                          
                        </rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                          
                        </path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5">
                          
                        </line>
                      </svg>
                      Instagram
                    </h6>
                    <span class="text-secondary">@ {{Auth::user()->FirstName}}{{Auth::user()->LastName}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                          
                        </path>
                      </svg>
                      Facebook
                    </h6>
                    <span class="text-secondary">{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->FirstName}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->LastName}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->StudentID}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">School</h6> 
                    </div>
                    <div class="col-sm-9 text-secondary">
                      @if(Auth::user()->School == Null)
                          No School
                          @else
                          {{Auth::user()->School}}
                          @endif
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Major</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      @if(Auth::user()->Major == Null)
                          No Major
                          @else
                          {{Auth::user()->Major}}
                          @endif
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php
                            if(Auth::user()->Gender== 1) {
                              echo('Male');
                            }Else if (Auth::user()->Gender== 2){
                            echo('Female');
                          }
                    ?>
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->BirthDate}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->PhoneNumber}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Country</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->Country}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">City</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->City}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{Auth::user()->email}}
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills" -->
                      <a class="btn btn-primary " style="background-color: #003311;" href="{{route('Profile.edit',['id'=>Auth::user()->id])}}">
                        <i class="fa fa-edit" style="font-size: 27px;"></i>
                      </a>
                      <button type="button" class="btn btn-danger" onclick="return REMOVE('{{route('Profile.delete',['id'=>Auth::user()->id])}}')">
                        <i class="fa fa-trash" style="font-size: 27px;"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>
</body>
</html>

<style>
body{
    /*margin-top:20px;*/
    color: #1a202c;
    text-align: left;
    /*background-color: #e2e8f0;    */
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0; 
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.shadow-none {
    box-shadow: none!important;
}
.rounded-circle{
  width:270px;
   height:281px;
}

</style>

@endsection