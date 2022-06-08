@extends('LAYOUT.master')
@section('content')
<br><br>
<div class="container">
    <div class="main-body">
      <form action="" method="POST" enctype="multipart/form-data">
              @csrf
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <br>
                <span style="color:#003311; font-family: Amasis MT Pro Blackfont-size;font-size:27px; text-align: center;"><b>Edit Profile</b></span>
                <hr>
            <div class="card-body">
              <div class=" d-flex flex-column align-items-center text-center">
                <div class="profile-pic-div" >
                  
                <img src="../../../../../../uploads/users/{{Auth::user()->Picture}}"  id="photo" alt="Admin" class="rounded-circle" width="320" height="354">
                      <!-- <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Profile Picture</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <label for="img"><i class="fa fa-image" style="font-size:36px"></i></label>
                          <input type="file" id="img" name="Picture" value="{{Auth::user()->Picture}}" style="display:none"> -->
                          <!-- <input type="file" class="form-control" name="Picture" value="{{Auth::user()->Picture}}">
                        </div>
                      </div> -->
                       <input type="file" id="file" name="Picture" value="{{Auth::user()->Picture}}">
                        <label for="file" id="uploadBtn">Choose Photo</label>
                      <!-- <label for="img" class="btn btn-info">Try me</label> -->
                    <!-- <input type="file" id="img" name="Picture" value="{{Auth::user()->Picture}}" style="display:none"> -->
                    </div>
                <div class="mt-3">
                   <h4>{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</h4>
                      <p class="text-secondary mb-1">
                        
                        <?php
                            if(Auth::user()->Category== 1) {
                              echo('Student');
                            }Else if (Auth::user()->Category== 2){
                            echo('Administrator');
                          }
                        ?>
                      </p>
                      <p class="text-muted font-size-sm">Al Akhawayn University</p>
                  
                  
                </div>
              </div>
              <hr class="my-4">
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
        </div>
        <div class="col-lg-8">
          <div class="card">
            
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">First Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="FNameFormEdit" value="{{Auth::user()->FirstName}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Last Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="LNameFormEdit" value="{{Auth::user()->LastName}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="IDFormEdit" value="{{Auth::user()->StudentID}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">School</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          @if(Auth::user()->School == Null)
                          <input type="text" class="form-control" name="SchoolFormEdit" value="No School">
                          @else
                          <input type="text" class="form-control" name="SchoolFormEdit" value="{{Auth::user()->School}}">
                          @endif
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Major</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           @if(Auth::user()->Major == Null)
                          <input type="text" class="form-control" name="MajorFormEdit" value="No Major">
                          @else
                          <input type="text" class="form-control" name="MajorFormEdit" value="{{Auth::user()->Major}}">
                          @endif
                          
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           @if(Auth::user()->Gender==1)
                           <select name="GenderFormEdit" id="GenderForm" class="GenderForm form-control" required>
                                              <option selected disabled>Male</option>
                                              <option value="1">Male</option>
                                              <option value="2">Female</option>
                                 
                                        </select>
                                      
                                  @else 
                                  <select name="GenderFormEdit" id="GenderForm" class="GenderForm form-control" required>
                                              <option selected disabled>Female</option>
                                              <option value="1">Male</option>
                                              <option value="2">Female</option>
                                 
                                        </select>
                                  @endif
                          
                        </div>
                      </div>
                      <!-- user is not able to modify the category, so it will be hidden input -->
                      <input type="hidden" class="form-control" name="CategoryFormEdit" value="{{Auth::user()->Category}}">
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date of birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="date" class="form-control" name="BirthDateFormEdit" value="{{Auth::user()->BirthDate}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="PhoneNumberFormEdit" value="{{Auth::user()->PhoneNumber}}">
                        </div>
                      </div>
                      
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="CountryFormEdit" value="{{Auth::user()->Country}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="CityFormEdit" value="{{Auth::user()->City}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="email" name="EmailFormEdit" class="form-control" value="{{Auth::user()->email}}">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="Password" class="form-control" name="PasswordFormEdit" placeholder="***********" >
                        </div>
                      </div>
                      
                      
                      <br>
                      <div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                          <input type="submit" class="btn btn-primary px-4" style="background-color: #003311;" value="Save Changes">

                        </div>
                        <br>
                        <span class="text-secondary LastUpdate" >Last Update: {{ \Carbon\Carbon::parse(Auth::user()->updated_at)->format('m/d/Y - H:i')}} </span>

                    </div>
                  </div>
                </form>
               </div>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<style>
body{
    background: #f7f7ff;
    
}
.LastUpdate{
  padding-left: 450px;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>
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
    height: 60px;
    width: 100%;
    position: absolute;
    /*top: 50%;*/
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    background: rgba(0, 0, 0, 0.7);
    color: wheat;
    line-height: 60px;
    font-family: sans-serif;
    font-size: 20px;
    cursor: pointer;
    display: none;
}
@media screen and (max-width: 820px) {
  .LastUpdate{
    display:none;
}
}
@media screen and (max-width: 768px) {
  .LastUpdate{
  display:none;
}
}
@media screen and (max-width: 600px) {
  .LastUpdate{
  display:none;
}
   
      }
.LastUpdate{
  padding-left: 450px;
}
</style>
@endsection
@section('script')
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