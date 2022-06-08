
@extends('LAYOUT.masterCarpoo')
@section('content')

<div class="Everything">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="../../../../../../assets3/images/Loadiingg.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      
      <section class="banner_main Everything">
      
         <div class="container">
         <!-- <img src="../../../../../../dist/img/logoAPP2.png" style="width:20%;float:right;margin-top:20px;"> -->
            <div class="row d_flex">
            
               <div class="col-md-12">
               
                  <div class="text-bg">
                  
                 
                     <br>
                     
                     
                     
                     <button style="float:left; 
                      margin-top:425px;
                        background: transparent;
                        box-shadow: 0px 0px 0px transparent;
                        border: 0px solid transparent;
                        text-shadow: 0px 0px 0px transparent;
                        color:white;
                        font-size:20px;" onclick="openFormManageCarpool()">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-taxi"></i> Your Carpoo?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     </button>
                     
                     <h1></h1>
                     <button style="float:left; 
                        margin-top:390px;
                        background: transparent;
                        box-shadow: 0px 0px 0px transparent;
                        border: 0px solid transparent;
                        text-shadow: 0px 0px 0px transparent;
                        color:white;
                        font-size:20px;" onclick="openForm()">
                        <i class="fa fa-plus-circle"></i> Publish a Ride
                     </button>
                     <a href="#GoToCarForm" style="background-color:#00802d;color:white;top:55%;
       left:55%;position: absolute;">Find a Ride</a>
                  <!-- <img src="../../../../../../dist/img/C logo.png" width="30%"> -->
                  <br><br><br>
                     <h1></h1>
                     <!-- <strong style="color:#333333;">Ridesharing can save you time and money.</strong>
                     <span style="color:#333333;" >Rethink your ride, Let’s out those empty seats to work</span> -->
                     
                     <p>
                        
                        <head></head>
                     </p>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- pop up form manage or see you own carpool -->
<div class="form-popup" id="myFormManageCarpool">
   <div class="wrapper bg-light">
      <button type="button" class="btn cancel" onclick="closeFormManageCarpool()"><i class="fa fa-close" style="font-size:20px;color:red; float:right;"></i></button>
      <!-- <div class="h5 font-weight-bold" style="color: #003311; ">&nbsp;&nbsp;  </div>
      <hr> -->
      <div class="container">
         <!-- <div class="row header" style="text-align:center;color:green">
         <h3>Manage your Carpool</h3>
         </div> -->
         <hr>
         <table id="myTable" class="table table-striped" >  
                     <thead>  
                        <tr>  
                           <th>From</th>
                           <th>To</th>
                           <th>Date</th>
                           <th> Starting</th>
                           <th>Arriving</th>
                           <!-- <th>Passengers</th> -->
                           <th>Price</th> 
                           <th>Action</th> 
                        </tr>  
                     </thead>  
                     <tbody> 
                     @foreach($ManageYourOwnCarpoo as $ManageCarpo)
                        @if($ManageCarpo['User_Who_Added_This_Carpoo_id'] ==Auth::user()->id)
                           <tr>  
                              <td>{{$ManageCarpo['CityFrom']}}</td>  
                              <td>{{$ManageCarpo['CityTo']}}</td>  
                              <td>{{$ManageCarpo['CarpooDate']}}</td>  
                              <td>{{$ManageCarpo['StartingTime']}}</td>  
                              <td>{{$ManageCarpo['ArrivingTime']}}</td>  
                              <td>{{$ManageCarpo['Price']}} MAD</td>  
                              <td>
                                 
                                 <button type="button" class="btn btn-danger" onclick="return REMOVECarpoo('{{route('Carpool.delete',['id'=>$ManageCarpo['id']])}}')" style="font-size:2px; width:100%;">
                                    <i class="fa fa-trash" style="font-size: 12px;"></i>
                                 </button>
                              </td>
                           </tr> 
                        @endif   
                     @endforeach
                     </tbody>  
         </table>  
      </div>    

   </div>
</div>
              <!-- manage a ride -->
<style>
   
table {
  /* font-family: arial, sans-serif; */
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<style>
         #myInput {
         box-sizing: border-box;
         background-image: url('searchicon.png');
         background-position: 14px 12px;
         background-repeat: no-repeat;
         font-size: 16px;
         padding: 14px 20px 12px 45px;
         border: none;
         border-bottom: 1px solid #ddd;
         }

         #myInput:focus {outline: 3px solid #ddd;}

         .dropdownn {
         position: relative;
         display: inline-block;
         }

         .dropdownn-content {
         display: none;
         position: absolute;
         background-color: #f6f6f6;
         min-width: 230px;
         overflow: auto;
         border: 1px solid #ddd;
         z-index: 1;
         }

         .dropdownn-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
         }

         .dropdownn a:hover {background-color: #ddd;}

         .show {display: block;}
         </style>
                     
         <style>
            .Everything{
               
            }
            

            .car{
               
               padding-top:0px;
            }
            .form-popup {
         display: none;
         position: fixed;

         
         /* right: 20%; */
            left: 40%;
         border: 3px solid #f1f1f1;
         
         }
            .form-popup {
               height:100%;
         display: none;
         position: fixed;
         bottom: 0;
         right: 15px;
         border: 3px solid #f1f1f1;
         z-index: 9;
         }
</style>
<!-- manage a ride style  -->
      <!-- end banner -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style="color:#333333; ">Golden Tips For Drivers</h2>
                    
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="choose_box">
                     <span>01</span>
                     <p style="font-family:Sans-serif;">
                     If you’re driving, you should stay in your lane and avoid swerving. Only merge lanes if you’ve used your indicators to let another driver know that you’re entering their lane. Before doing anything on the road, though, you should make sure you check your surroundings.
                   </p>
                     
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="choose_box">
                     <span>02</span>
                     <p style="font-family:Sans-serif;" >
                     You can’t always prevent a crash when other drivers act negligently. However, you can focus on your safety by wearing a seat belt. If you experience a crash, a seat belt can reduce the risk of death. It may not help you avoid an accident but it may minimize your injury severity.                     
                  </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="choose_box">
                     <span>03</span>
                     <p style="font-family:Sans-serif;">
                    When you cut in front of someone, you can frustrate the driver. It can lead to tailgating and other reckless behavior that can cause a severe crash. If you intend to merge lanes, make sure you can get over safely by remaining far enough in front of the other vehicle.
                  </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- car -->
      <!-- <div class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage" style="">
                     <h2 style="color:#333333;">VARIETY OF CARS </h2>
                     <span>Same destination, more companions</span> <br>
                     <span style="font-size:14px;">Let’s hit the road together</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 padding_leri">
                  <div class="car_box">
                     <figure><img src="../../../../../../assets3/images/taxi2.png" alt="#"/></figure>
                     <h3 style="color:#fff;">TaxiCab</h3>
                  </div>
               </div>
               <div class="col-md-6 padding_leri">
                  <div class="car_box">
                     <figure><img src="../../../../../../assets3/images/car_img2.png" alt="#"/></figure>
                     <h3 style="color:#fff;">Students' Cars</h3>
                  </div>
               </div>
               
            </div>
         </div>
      </div> -->
      <!-- end car -->
      <!-- bestCar -->
      <!-- <div id="contact" class="bestCar2 Everything">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="Everything">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                       <div style="color:white;">Where do you want a ride to? </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style="color:#333333;">Best drivers?</h2>
                     
                     <br>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     
                     <div class="carousel-inner">
                     
                        <!-- <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="images/cross_img.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                    <div style="float:left;">
                                    <span style="font-size:60px;font-weight: bold;color:#001a09;" >01</span>
                                 </div>
                                 <br>
                                 <h3>Hamza ger</h3>
                                       
                                       
                                      
                                      
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->

                    
                     
                        <div class="carousel-item active">
                        
                           <div class="container">
                              <div class="carousel-caption">
                              
                                
                                
                                
                                 <div class="our cross_layout">
                                 
                                    <div class="test_box">
                                    <div style="float:left;">
                                    
                                 </div>
                                 <br>
                                 
                                 <h3>The Carpool system works best when both drivers and passengers uphold the Carpool Pact.

Drivers: Do your best to arrive on time, communicate any specifics or changes with your passengers, and above all, drive safely.

Passengers: Respect your driver’s time and efforts, arrive on time to the pickup location. Remember, this is not a taxi service and do not expect the driver to change his/her route for you. Respect your driver choices when it comes to music and smoking in the car.</h3>
                                       
                                
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @foreach($checkuser as $checkUserCreatedCarpoo)
                        @foreach($CountTop3likedCarpoo as $top3)
                                    @if($top3->LikedCarpoo_id == $checkUserCreatedCarpoo->id)
                                       @foreach($EveryUser as $EVERYUSER)
                                          @if($checkUserCreatedCarpoo->User_Who_Added_This_Carpoo_id == $EVERYUSER->id)
                        <div class="carousel-item ">
                        
                           <div class="container">
                              <div class="carousel-caption">
                              
                              
                                
                                
                                 <div class="our cross_layout">
                                 
                                    <div class="test_box">
                                    <div style="float:left;">
                                    <span style="font-size:60px;font-weight: bold;color:#001a09;" >0{{$count++}}</span>
                                 </div>
                                 <h3>{{$EVERYUSER->FirstName}} {{$EVERYUSER->LastName}}</h3>
                                 <div class="cross_img" >
                                 <figure> <img style="height:150px;width:150px; border-radius: 50%;" src="../../../../../../uploads/users/{{$EVERYUSER->Picture}}"></figure>
                                
                                 </div>
                                 <br>
                                 
                                 
                                          
                                          
                                         
                                       
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endif
                                       @endforeach
                                    @endif
                                 @endforeach 
                        @endforeach
                        <!-- <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="images/cross_img.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                    <div style="float:left;">
                                    <span style="font-size:60px;font-weight: bold;color:#001a09;" >03</span>
                                 </div>
                                 <br>
                                       <h3>Achraf Soualhia</h3>
                                       
                                       <p>Car: </p>
                                       <p>more information: </p>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style="color:#333333;" >Why Carpooling</h2>
                    
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="choose_box">
                  <img src="../../../../../../assets3/images/bh.jpg" alt="#"/>
                     
                  </div>
               </div>
               <div class="col-md-6">
               <br><br><br><br>
                  <div class="choose_box">
                  
                     <p style=" font-family:Sans-serif;">
                     Carpooling means more people in a single car, means less number of individual cars on the road; and what does that lead to? Less pollution! Less air pollution, less noise pollution, less carbon emission, less greenhouse gas emission.
                   </p>
                  </div>
               </div>
               <div class="col-md-6">
               <br><br><br>
                  <div class="choose_box">
                  
                     <p style="font-family:Sans-serif;">
                     Carpooling is a direct step towards a cleaner and greener environment. We can block out sound and hence prevent noise pollution from affecting us. We can purify the water we drink and hence escape from the effects of water pollution.
                   </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="choose_box">
                  <img src="../../../../../../assets3/images/Sans titre-2.jpg" alt="#"/>
                     
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <div id="GoToCarForm" class="bestCar Everythingg">
      <!-- <img src="../../../../../../assets3/images/bb.jpg" alt="description of gif" />  -->
         <div class="container" >
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="Everything" >
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                        <form action="AvailableCarpooPage" class="main_form" method="get" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                                 @csrf
                                    <div class="titlepage">
                                       <h2>Place in the seat of the passenger</h2>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    
                                    <div class="col-md-6">
                                 
                                    <label for="LeavingDisplayForm" style="font-size:18px; color:#001a09;">Leaving From ...</label>
                                             <select class="form-control" id="exampleFormControlSelect1" name="LeavingDisplayForm">
                                             <option disabled selected>Choose City</option>
                                          <option value="Casablanca">Casablanca</option>
                                          <option value="Fez">Fez</option>
                                          <option value="Tangier">Tangier</option>
                                          <option value="Marrakesh">Marrakesh</option>
                                          <option value="Salé">Salé</option>
                                          <option value="Meknes">Meknes</option>
                                          <option value="Rabat">Rabat</option>
                                          <option value="Oujda">Oujda</option>
                                          <option value="Kenitra">Kenitra</option>
                                          <option value="Agadir">Agadir</option>
                                          <option value="Tetouan">Tetouan</option>
                                          <option value="Temara">Temara</option>
                                          <option value="Safi">Safi</option>
                                          <option value="Mohammedia">Mohammedia</option>
                                          <option value="Khouribga">Khouribga</option>
                                          <option value="El Jadida">	El Jadida</option>
                                          <option value="Beni Mellal">Beni Mellal</option>
                                          <option value="Aït Melloul">Aït Melloul</option>
                                          <option value="Nador">Nador</option>
                                          <option value="Dar Bouazza">Dar Bouazza</option>
                                          <option value="Taza">Taza</option>
                                          <option value="Settat">	Settat</option>
                                          <option value="Berrechid">Berrechid</option>
                                          <option value="Khemisset">Khemisset</option>
                                          <option value="Inezgane">Inezgane</option>
                                          <option value="Ksar El Kebir">Ksar El Kebir</option>
                                          <option value="Larache">Larache</option>
                                          <option value="Guelmim">Guelmim</option>
                                          <option value="Khenifra">Khenifra</option>
                                          <option value="Berkane">Berkane</option>
                                          <option value="Taourirt">Taourirt</option>
                                          <option value="Bouskoura">Bouskoura</option>
                                          <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                                          <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                                          <option value="Oued Zem">Oued Zem</option>
                                          <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                                          <option value="Sidi Slimane">Sidi Slimane</option>
                                          <option value="Errachidia">Errachidia</option>
                                          <option value="Guercif">Guercif</option>
                                          <option value="Oulad Teima">Oulad Teima</option>
                                          <option value="Ben Guerir">Ben Guerir</option>
                                          <option value="Tifelt">Tifelt</option>
                                          <option value="Lqliaa">Lqliaa</option>
                                          <option value="Taroudant">Taroudant</option>
                                          <option value="Sefrou">Sefrou</option>
                                          <option value="Essaouira">Essaouira</option>
                                          <option value="Fnideq">Fnideq</option>
                                          <option value="Sidi Kacem">Sidi Kacem</option>
                                          <option value="Tiznit">Tiznit</option>
                                          <option value="Tan-Tan">Tan-Tan</option>
                                          <option value="Ouarzazate">Ouarzazate</option>
                                          <option value="Souk El Arbaa">Souk El Arbaa</option>
                                          <option value="Youssoufia">Youssoufia</option>
                                          <option value="Lahraouyine">Lahraouyine</option>
                                          <option value="Martil">Martil</option>
                                          <option value="Ain Harrouda">Ain Harrouda</option>
                                          <option value="Suq as-Sabt Awlad an-Nama">Suq as-Sabt Awlad an-Nama	</option>
                                          <option value="Skhirat">Skhirat</option>
                                          <option value="Ouazzane">Ouazzane</option>
                                          <option value="Benslimane">Benslimane</option>
                                          <option value="Al Hoceima">Al Hoceima</option>
                                          <option value="Beni Ansar">Beni Ansar</option>
                                          <option value="M'diq">M'diq</option>
                                          <option value="Sidi Bennour">Sidi Bennour</option>
                                          <option value="Midelt">Midelt</option>
                                          <option value="Azrou">Azrou</option>
                                          <option value="Drargua">Drargua</option>
                                          <option value="Ifrane">Ifrane</option>
                                             </select>
                                       </div>
                                    
                                    <div class="col-md-6">
                                    <label for="GoingDisplayForm" style="font-size:18px; color:#001a09;">Going to ...</label>
                                          
                                          <select class="form-control" id="exampleFormControlSelect1" name="GoingDisplayForm" >
                                             <option disabled selected>Choose City</option>
                                          <option value="Casablanca">Casablanca</option>
                                          <option value="Fez">Fez</option>
                                          <option value="Tangier">Tangier</option>
                                          <option value="Marrakesh">Marrakesh</option>
                                          <option value="Salé">Salé</option>
                                          <option value="Meknes">Meknes</option>
                                          <option value="Rabat">Rabat</option>
                                          <option value="Oujda">Oujda</option>
                                          <option value="Kenitra">Kenitra</option>
                                          <option value="Agadir">Agadir</option>
                                          <option value="Tetouan">Tetouan</option>
                                          <option value="Temara">Temara</option>
                                          <option value="Safi">Safi</option>
                                          <option value="Mohammedia">Mohammedia</option>
                                          <option value="Khouribga">Khouribga</option>
                                          <option value="El Jadida">	El Jadida</option>
                                          <option value="Beni Mellal">Beni Mellal</option>
                                          <option value="Aït Melloul">Aït Melloul</option>
                                          <option value="Nador">Nador</option>
                                          <option value="Dar Bouazza">Dar Bouazza</option>
                                          <option value="Taza">Taza</option>
                                          <option value="Settat">	Settat</option>
                                          <option value="Berrechid">Berrechid</option>
                                          <option value="Khemisset">Khemisset</option>
                                          <option value="Inezgane">Inezgane</option>
                                          <option value="Ksar El Kebir">Ksar El Kebir</option>
                                          <option value="Larache">Larache</option>
                                          <option value="Guelmim">Guelmim</option>
                                          <option value="Khenifra">Khenifra</option>
                                          <option value="Berkane">Berkane</option>
                                          <option value="Taourirt">Taourirt</option>
                                          <option value="Bouskoura">Bouskoura</option>
                                          <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                                          <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                                          <option value="Oued Zem">Oued Zem</option>
                                          <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                                          <option value="Sidi Slimane">Sidi Slimane</option>
                                          <option value="Errachidia">Errachidia</option>
                                          <option value="Guercif">Guercif</option>
                                          <option value="Oulad Teima">Oulad Teima</option>
                                          <option value="Ben Guerir">Ben Guerir</option>
                                          <option value="Tifelt">Tifelt</option>
                                          <option value="Lqliaa">Lqliaa</option>
                                          <option value="Taroudant">Taroudant</option>
                                          <option value="Sefrou">Sefrou</option>
                                          <option value="Essaouira">Essaouira</option>
                                          <option value="Fnideq">Fnideq</option>
                                          <option value="Sidi Kacem">Sidi Kacem</option>
                                          <option value="Tiznit">Tiznit</option>
                                          <option value="Tan-Tan">Tan-Tan</option>
                                          <option value="Ouarzazate">Ouarzazate</option>
                                          <option value="Souk El Arbaa">Souk El Arbaa</option>
                                          <option value="Youssoufia">Youssoufia</option>
                                          <option value="Lahraouyine">Lahraouyine</option>
                                          <option value="Martil">Martil</option>
                                          <option value="Ain Harrouda">Ain Harrouda</option>
                                          <option value="Suq as-Sabt Awlad an-Nama">Suq as-Sabt Awlad an-Nama	</option>
                                          <option value="Skhirat">Skhirat</option>
                                          <option value="Ouazzane">Ouazzane</option>
                                          <option value="Benslimane">Benslimane</option>
                                          <option value="Al Hoceima">Al Hoceima</option>
                                          <option value="Beni Ansar">Beni Ansar</option>
                                          <option value="M'diq">M'diq</option>
                                          <option value="Sidi Bennour">Sidi Bennour</option>
                                          <option value="Midelt">Midelt</option>
                                          <option value="Azrou">Azrou</option>
                                          <option value="Drargua">Drargua</option>
                                          <option value="Ifrane">Ifrane</option>
                                             


                                             </select>              
                                    </div>
                                       
                                    <div class="col-md-12">
                                    <label for="DateDisplayForm" class="mandatory" style="font-size:18px; color:#001a09;" required>Date</label> 
                                       <input type="date" class="form-control" name="DateDisplayForm" required> 
                                                                  
                                    </div>
                                       <div class="col-sm-12">
                                          <button type="submit" class="find_btn">Find Now</button>
                                       </div>
                                    </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      
      <!-- end choose  section -->
      <!-- cutomer -->
       <div class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage" style="">
                     <h2 style="color:#333333;">VARIETY OF CARS </h2>
                     <span style="font-family:Sans-serif;">Same destination, more companions</span> <br>
                     <span style="font-family:Sans-serif; font-size:14px;">Let’s hit the road together</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 padding_leri">
                  <div class="car_box">
                     <figure><img src="../../../../../../assets3/images/taxi2.jpg" alt="#"/></figure>
                     <h3 style="color:#fff;">TaxiCab</h3>
                  </div>
               </div>
               <div class="col-md-6 padding_leri">
                  <div class="car_box">
                     <figure><img src="../../../../../../assets3/images/car_img2.jpg" alt="#"/></figure>
                     <h3 style="color:#fff;">Students' Cars</h3>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <br>
      <!-- end cutomer -->
      <!--  footer -->
      <footer >
         <div class="footer" style="background-color:#23262d;">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang">Aui </strong><strong class="multi color_chang">Carpooling</strong><br>
                        
                        </h3>
                     </div>
                     <!-- <div class="cont">
                        <h3> <strong class="multi"> Our Application is</strong> 
                           bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                        </h3>
                        
                     </div> -->
                     <div class="cont">
                        <h3> <strong class="multi"> </strong> 
                           Contact Us: +212 (0)-643-085-998
                        </h3>
                        
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="copyright">
               <div class="container">
               <hr>
                  <div class="row">
                  
                     <div class="col-md-12">
                     <p>Copyright &copy; 2022 Al Akhawayn University - Capstone Project</p>
      <p class="developer">Developed By Hamza Waled</p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      
</div>

 <!-- pop up form to add new ride -->
 <div class="form-popup" id="myForm">
                <div class="wrapper bg-light">
                  <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-close" style="font-size:20px;color:red; padding-left:750px;"></i></button>
                      <div class="h5 font-weight-bold" style="color: #003311; ">&nbsp;&nbsp;  Add a Ride</div>
                      <hr>
                            <form action="save-carpoo" class="form-container" method="POST" enctype="multipart/form-data" style="width: 100%; height: 100%;">
                            @csrf
                            <input type="hidden" name="btn_sub" id="btn_sub" value="no">
                            
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                        <div class="form-group col-md-3">
                           <label for="CarpooFromForm">From</label>
                              <select class="form-control" id="CarpooFromForm" name="CarpooFromForm">
                              <option disabled selected>Leaving From...</option>
                                 <option value="Casablanca">Casablanca</option>
                                 <option value="Fez">Fez</option>
                                 <option value="Tangier">Tangier</option>
                                 <option value="Marrakesh">Marrakesh</option>
                                 <option value="Salé">Salé</option>
                                 <option value="Meknes">Meknes</option>
                                 <option value="Rabat">Rabat</option>
                                 <option value="Oujda">Oujda</option>
                                 <option value="Kenitra">Kenitra</option>
                                 <option value="Agadir">Agadir</option>
                                 <option value="Tetouan">Tetouan</option>
                                 <option value="Temara">Temara</option>
                                 <option value="Safi">Safi</option>
                                 <option value="Mohammedia">Mohammedia</option>
                                 <option value="Khouribga">Khouribga</option>
                                 <option value="El Jadida">	El Jadida</option>
                                 <option value="Beni Mellal">Beni Mellal</option>
                                 <option value="Aït Melloul">Aït Melloul</option>
                                 <option value="Nador">Nador</option>
                                 <option value="Dar Bouazza">Dar Bouazza</option>
                                 <option value="Taza">Taza</option>
                                 <option value="Settat">	Settat</option>
                                 <option value="Berrechid">Berrechid</option>
                                 <option value="Khemisset">Khemisset</option>
                                 <option value="Inezgane">Inezgane</option>
                                 <option value="Ksar El Kebir">Ksar El Kebir</option>
                                 <option value="Larache">Larache</option>
                                 <option value="Guelmim">Guelmim</option>
                                 <option value="Khenifra">Khenifra</option>
                                 <option value="Berkane">Berkane</option>
                                 <option value="Taourirt">Taourirt</option>
                                 <option value="Bouskoura">Bouskoura</option>
                                 <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                                 <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                                 <option value="Oued Zem">Oued Zem</option>
                                 <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                                 <option value="Sidi Slimane">Sidi Slimane</option>
                                 <option value="Errachidia">Errachidia</option>
                                 <option value="Guercif">Guercif</option>
                                 <option value="Oulad Teima">Oulad Teima</option>
                                 <option value="Ben Guerir">Ben Guerir</option>
                                 <option value="Tifelt">Tifelt</option>
                                 <option value="Lqliaa">Lqliaa</option>
                                 <option value="Taroudant">Taroudant</option>
                                 <option value="Sefrou">Sefrou</option>
                                 <option value="Essaouira">Essaouira</option>
                                 <option value="Fnideq">Fnideq</option>
                                 <option value="Sidi Kacem">Sidi Kacem</option>
                                 <option value="Tiznit">Tiznit</option>
                                 <option value="Tan-Tan">Tan-Tan</option>
                                 <option value="Ouarzazate">Ouarzazate</option>
                                 <option value="Souk El Arbaa">Souk El Arbaa</option>
                                 <option value="Youssoufia">Youssoufia</option>
                                 <option value="Lahraouyine">Lahraouyine</option>
                                 <option value="Martil">Martil</option>
                                 <option value="Ain Harrouda">Ain Harrouda</option>
                                 <option value="Suq as-Sabt Awlad an-Nama">Suq as-Sabt Awlad an-Nama	</option>
                                 <option value="Skhirat">Skhirat</option>
                                 <option value="Ouazzane">Ouazzane</option>
                                 <option value="Benslimane">Benslimane</option>
                                 <option value="Al Hoceima">Al Hoceima</option>
                                 <option value="Beni Ansar">Beni Ansar</option>
                                 <option value="M'diq">M'diq</option>
                                 <option value="Sidi Bennour">Sidi Bennour</option>
                                 <option value="Midelt">Midelt</option>
                                 <option value="Azrou">Azrou</option>
                                 <option value="Drargua">Drargua</option>
                                 <option value="Ifrane">Ifrane</option>


                                 </select>
                           </div>
                           <div class="form-group col-md-3">
                           <label for="CarpooFromTO">To</label>
                           <select class="form-control" id="CarpooFromTO" name="CarpooFromTO">
                           <option disabled Selected>Going To...</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Fez">Fez</option>
                                    <option value="Tangier">Tangier</option>
                                    <option value="Marrakesh">Marrakesh</option>
                                    <option value="Salé">Salé</option>
                                    <option value="Meknes">Meknes</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Oujda">Oujda</option>
                                    <option value="Kenitra">Kenitra</option>
                                    <option value="Agadir">Agadir</option>
                                    <option value="Tetouan">Tetouan</option>
                                    <option value="Temara">Temara</option>
                                    <option value="Safi">Safi</option>
                                    <option value="Mohammedia">Mohammedia</option>
                                    <option value="Khouribga">Khouribga</option>
                                    <option value="El Jadida">	El Jadida</option>
                                    <option value="Beni Mellal">Beni Mellal</option>
                                    <option value="Aït Melloul">Aït Melloul</option>
                                    <option value="Nador">Nador</option>
                                    <option value="Dar Bouazza">Dar Bouazza</option>
                                    <option value="Taza">Taza</option>
                                    <option value="Settat">	Settat</option>
                                    <option value="Berrechid">Berrechid</option>
                                    <option value="Khemisset">Khemisset</option>
                                    <option value="Inezgane">Inezgane</option>
                                    <option value="Ksar El Kebir">Ksar El Kebir</option>
                                    <option value="Larache">Larache</option>
                                    <option value="Guelmim">Guelmim</option>
                                    <option value="Khenifra">Khenifra</option>
                                    <option value="Berkane">Berkane</option>
                                    <option value="Taourirt">Taourirt</option>
                                    <option value="Bouskoura">Bouskoura</option>
                                    <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                                    <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                                    <option value="Oued Zem">Oued Zem</option>
                                    <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                                    <option value="Sidi Slimane">Sidi Slimane</option>
                                    <option value="Errachidia">Errachidia</option>
                                    <option value="Guercif">Guercif</option>
                                    <option value="Oulad Teima">Oulad Teima</option>
                                    <option value="Ben Guerir">Ben Guerir</option>
                                    <option value="Tifelt">Tifelt</option>
                                    <option value="Lqliaa">Lqliaa</option>
                                    <option value="Taroudant">Taroudant</option>
                                    <option value="Sefrou">Sefrou</option>
                                    <option value="Essaouira">Essaouira</option>
                                    <option value="Fnideq">Fnideq</option>
                                    <option value="Sidi Kacem">Sidi Kacem</option>
                                    <option value="Tiznit">Tiznit</option>
                                    <option value="Tan-Tan">Tan-Tan</option>
                                    <option value="Ouarzazate">Ouarzazate</option>
                                    <option value="Souk El Arbaa">Souk El Arbaa</option>
                                    <option value="Youssoufia">Youssoufia</option>
                                    <option value="Lahraouyine">Lahraouyine</option>
                                    <option value="Martil">Martil</option>
                                    <option value="Ain Harrouda">Ain Harrouda</option>
                                    <option value="Suq as-Sabt Awlad an-Nama">Suq as-Sabt Awlad an-Nama	</option>
                                    <option value="Skhirat">Skhirat</option>
                                    <option value="Ouazzane">Ouazzane</option>
                                    <option value="Benslimane">Benslimane</option>
                                    <option value="Al Hoceima">Al Hoceima</option>
                                    <option value="Beni Ansar">Beni Ansar</option>
                                    <option value="M'diq">M'diq</option>
                                    <option value="Sidi Bennour">Sidi Bennour</option>
                                    <option value="Midelt">Midelt</option>
                                    <option value="Azrou">Azrou</option>
                                    <option value="Drargua">Drargua</option>
                                    <option value="Ifrane">Ifrane</option>


                                    </select>
                              </div>
                              <div class="form-group col-md-3"> 
                                
                                <label for="MeetingPointForm" class="mandatory" required>Meeting Point</label> 
                                <input type="texte" class="form-control" name="MeetingPointForm" required> 
                            </div>
                            <div class="form-group col-md-3"> 
                                
                                <label for="DATEEForm" class="mandatory" required>Date</label> 
                                <input type="date" class="form-control" name="DATEEForm" required> 
                            </div>
                            
                            
                        </div>
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1" >
                        <div class="form-group col-md-4" > 
                                
                                <label for="CINForm" class="mandatory" required>CIN</label> 
                                <input type="text" class="form-control" name="CINForm" required> 
                            </div>
                            <div class="form-group col-md-4">
                           <label for="CARTYPEForm">Type of car</label>
                           <select class="form-control" id="CARTYPEForm" name="CARTYPEForm" >
                           <option disabled selected>Choose Car...</option>
                                    <option value="Student's Car">Student's Car</option>
                                    <option value="TaxiCab">TaxiCab</option>
                                    


                                    </select>
                              </div>
                            <div class="form-group col-md-4"> 
                                
                                <label for="PassengerForm" class="mandatory" required>Number of passengers</label> 
                                <input class="form-control" name="PassengerForm" type="number" min="1" max="6" required> 
                            </div>
                            
                        </div>
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
                           <div class="form-group col-md-4"> 
                                
                                <label for="StartTimeForm" class="mandatory" required>Estimated starting time</label> 
                                <input type="time" class="form-control" name="StartTimeForm" required> 
                            </div>
                            <div class="form-group col-md-4"> 
                                
                                <label for="ArriveTimeForm" class="mandatory" required>Estimated ariving time</label> 
                                <input type="time" class="form-control" name="ArriveTimeForm" required> 
                            </div>
                            <div class="form-group col-md-4"> 
                                
                                <label for="PriceForm" class="mandatory" required>Price</label> 
                                <input type="text" class="form-control" name="PriceForm" required> 
                            </div>
                            
                        </div>
                        
                            <!-- <label class="mandatory "></label> Required field -->
                            <div class="d-flex align-items-center justify-content-sm-end button-section"> 
                                <button type="submit" name="user-save" class="btn btn-primary mx-4" style="background-color:#003300;" id="submitButton"onclick="validateSignupForm()">Add</button> 
                            </div>
                                 
                            
                    </form>

              </div>
              <!-- search drop down -->
              <style>
/* .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
} */

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdownn {
  position: relative;
  display: inline-block;
}

.dropdownn-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdownn-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdownn a:hover {background-color: #ddd;}

.show {display: block;}
</style>
              
<style>
   .Everything{
      
   }
   

   .car{
      
      padding-top:0px;
   }
   .form-popup {
  display: none;
  position: fixed;

  
  /* right: 20%; */
   left: 40%;
  border: 3px solid #f1f1f1;
  
}
   .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
</style>
<!-- add a ride style  -->

   @endsection
   @section('script')
<script>
   function openForm() {
   document.getElementById("myForm").style.display = "block";
   }

   function closeForm() {
   document.getElementById("myForm").style.display = "none";
   }
   function closeFormEdit() {
   document.getElementById("myForm").style.display = "none";
   }
</script>
<script>
function openFormManageCarpool() {
  document.getElementById("myFormManageCarpool").style.display = "block";
}

function closeFormManageCarpool() {
  document.getElementById("myFormManageCarpool").style.display = "none";
}
function closeFormManageCarpool() {
  document.getElementById("myFormManageCarpool").style.display = "none";
}
</script>

@endsection
