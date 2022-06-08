<!DOCTYPE html>
<html>
<head>
	<title>Aui Pockets</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="../../../../../../dist/img/logo2.png" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
	<div class="wrapper bg-light ">
		<div style="text-align: center;">
				<span style="color: #001a00; font-size: 60px; font-family:Algerian;"> <img src="../../../../../../dist/img/logo2.png" style="height:40px; width: 40px;">AUI</span>
				<span style="color:#003311; font-family: Amasis MT Pro Blackfont-size;font-size:50px;">Pockets</span>
			</div>
			
			<hr>                        
			
			<div class="h5 font-weight-bold" style="color: #003311;">Registration</div>
			
			<br>
			<form action="save-user" method="POST" enctype="multipart/form-data" class="formy">
				@csrf
				<input type="hidden" name="btn_sub" id="btn_sub" value="no">
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					<div class="form-group col-md-4"> 
						
						<label for="FNameForm" class="mandatory">First Name</label> 
						<input type="textarea" class="form-control" name="FNameForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') " > 
					</div>
					<div class="form-group col-md-4"> 
						<label  for="LNameForm" class="mandatory">Last Name</label> 
						<input type="textarea" class="form-control" name="LNameForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
						<div class="form-group col-md-4"> 
						<label  for="IDForm" class="mandatory">ID</label> 
						<input type="textarea" class="form-control" name="IDForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
					
					
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					<div class="form-group col-md-4"> 
						
						<label for="SchoolForm">School</label> 
						<input type="textarea" class="form-control" name="SchoolForm"> 
					</div>
					<div class="form-group col-md-8"> 
						<label  for="MajorForm">Major</label> 
						<input type="textarea" class="form-control" name="MajorForm"> 
					</div>
					<!-- <div class="form-group col-md-4">
						<div> 
							<label class="mandatory">Category</label> 
						</div>
							<select name="CategoryForm" id="CategoryForm" class="CategoryForm form-control" required>
								<option selected disabled>Student/Administrator ..</option>
								<option value="1">Student</option>
								<option value="2">Administrator</option>
										
							</select>
					</div> -->
					
					
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					<div class="form-group col-md-4">
						<div> 
							<label class="mandatory">Gender</label> 
						</div>
						<select name="GenderForm" id="GenderForm" class="GenderForm form-control" required>
													<option selected disabled>M/F ..</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
										
												</select>
					</div>
					<div class="form-group col-md-4"> 
						<label for="BirthDateForm" class="mandatory ">Date of Birth</label> 
						<input type="date" class="form-control" name="BirthDateForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
					<div class="form-group col-md-4"> 
						<label for="PhoneNumberForm" class="mandatory">Phone Number</label> 
						<input type="tel"  class="form-control" name="PhoneNumberForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					
					<div class="form-group col-md-6"> 
						<label for="CountryForm" class="mandatory ">Country</label> 
						<input type="textarea" class="form-control" name="CountryForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
					<div class="form-group col-md-6"> 
						<label for="CityForm" class="mandatory ">City</label> 
						<input type="textarea" class="form-control" name="CityForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
					</div>
					
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					
					<div class="form-group col-md-6"> 
						<label for="Picture">Profile Picture</label> 

						<input type="File" id="myFile" class="form-control" name="Picture"> 
					</div>
					<div class="form-group col-md-6"> 
							<label  for="EmailForm" class="mandatory">Email Address</label> 
							<input type="email" class="form-control" name="EmailForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('') "> 
						</div>
				</div>
				
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
					
					<div class="form-group col-md-12"> 
						<label style="color: black;" for="password" class="mandatory">Password</label> 
						<input type="password" id="password" name="password" class="form-control" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('')" onkeyup="validatePassword(this.value);"> 
						
				<span id="msg"></span>
				
					</div>
					

				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
				<div class="form-group col-md-12"> 
						<label style="color: black;" for="confirmPassword" class="mandatory">Confirm Password</label> 
						<input type="password" id="confirm_password" class="form-control" name="PasswordForm" required oninvalid="setCustomValidity('Please fill out this field.')" oninput="this.setCustomValidity('')"> 

						<span id='message'></span>

					</div>
					</div>


					<label class="mandatory "></label> Required field
					<div class="d-flex align-items-center justify-content-sm-end button-section REGISTERR"> 
						<button type="submit" name="user-save" class="btn btn-primary mx-4" style="background-color:#003300;" id="submitButton"onclick="validateSignupForm()">Register</button> 
					</div>
						
					
					<a href="/login" >Already have an account?</a>
			</form>
		
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');



	body {
	    /* float: left;
	    margin-left: 440px;
	    font-family: 'Poppins', sans-serif; */
	    
	    background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.9)) , url(https://www.moroccoworldnews.com/wp-content/uploads/2014/04/Al-Akhawayn-University1.jpg); 
	    background-size: cover;
	    background-repeat: no-repeat;
	    
	}
	

	.wrapper {
	    max-width: 550px;
	    border-radius: 10px;
	    margin: 50px auto;
	    padding: 10px;
	    
	}

	.h2 {
	    font-family: 'Kaushan Script', cursive;
	    font-size: 3.0rem;
	    font-weight: bold;
	    color: #001a00;
	    text-shadow: 0 0 2px #001a00;
	    font-style: italic
	}

	.h5 {
	    color: #555;
	    margin: 0
	}

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

	.remember {
	    border: 1px solid #001a00
	}

	.gender-l {
	    margin: 0
	}

	#male {
	    display: none
	}

	input[type="radio"] {
	    visibility: hidden
	}

	input[type='radio']:checked {
	    background-color: #002b80
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

	
	@media screen and (max-width: 600px) {
	    .btn-group {
	        width: 100%
	    }
		.wrapper {
	    max-width: 400px;
	    border-radius: 10px;
	    margin: 50px auto;
	    padding: 10px;
	    
	}
	    .btn-group>.btn {
	        flex: 50%
	    }

	    .wrapper {
	        margin: 10px
	    }
				.REGISTERR{
					padding-top:20px;
					padding-bottom:20px;
					float:right;
				}
	    .h5 {
	        padding-top: 10px
	    }
		body {
	    float: right;
	    margin-left: 0px;
	    font-family: 'Poppins', sans-serif;
	    
	    background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.9)) , url(https://www.moroccoworldnews.com/wp-content/uploads/2014/04/Al-Akhawayn-University1.jpg); 
	    background-size: cover;
	    background-repeat: no-repeat;
	    
	}
	#submitButton{
		
		float:right;
	}
		.BackgroudEveryThing{
			
    /* background-image:url(https://www.moroccoworldnews.com/wp-content/uploads/2014/04/Al-Akhawayn-University1.jpg); */
	background-repeat: no-repeat;
			background-size: cover;
			position: relative;
}
	
}
</style>


<script>
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching <i class="fa fa-check"></i>' ).css('color', 'green');
  } else 
    $('#message').html('Not Matching <i class="fa fa-times"></i>').css('color', 'red');

});
</script>
<script>
            function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = " Very Weak Password";
                        // backgroundColor = "";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium Password ";
                        // backgroundColor = "";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong Password";
                        // backgroundColor = "";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
                document.getElementById("msg").style.backgroundColor = backgroundColor;
            }
        </script>



        

