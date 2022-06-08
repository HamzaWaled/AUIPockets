@extends('LAYOUT.masterCarpoo')
@section('content')

<!------ Include the above in your HEAD tag ---------->



<div id="contact" class="bestCar EverythingForViewSinglePage">

<!-- <div style="padding-left:10px; font-size:20px; ">
<button type="button" class="btn btn-success" ><a href="/View/MainCarpoolingPage" style="color:white;"> <i class="fa fa-angle-left"></i> Back</a> </button>

</div>  -->
         <div class="container">
         
            <div class="Everything" id="GoToCarForm">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-12 offset-md-12" >
                        <form action="AvailableCarpooPage" class="main_form" method="get" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;">
                        @csrf
                           <!-- <div class="titlepage">
                           <h2>Place in another seat of the passenger</h2>
                           
                           </div>
                           <hr> -->
                           
                           <div class="row">
                           
                           <div class="col-md-3">
                          
                           <label for="LeavingDisplayForm" style="font-size:18px; color:#001a09;">From ...</label>
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
                           
                           <div class="col-md-3">
                           <label for="GoingDisplayForm" style="font-size:18px; color:#001a09;">To ...</label>
                                 
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
                              
                           <div class="col-md-3">
                           <label for="DateDisplayForm" class="mandatory" style="font-size:18px; color:#001a09;" required>Date</label> 
                                <input type="date" class="form-control" name="DateDisplayForm" required> 
                                                         
                           </div>
                              <div class="col-sm-3" style="color:white;">
                                 <button type="submit" class="find_btnn" style="color:white;">Find Another Ride</button>
                              </div>
                              
                              
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

<style>
 
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<div id="gohere" style="font-weight:bold;font-size:20px; margin-left:22%;margin-top:2%; ">
  Results : 
    </div>
      <div class="box">
        {{$Dateee}}
          <div style="text-align:center;">
          {{$PlaceComingFrom}} → {{$PlaceToGo}}:
          <br>
          @if($NumberOfAvailableCarpoo < 2 )
          {{$NumberOfAvailableCarpoo}} ride available
          @endif
          @if($NumberOfAvailableCarpoo >= 2 )
          {{$NumberOfAvailableCarpoo}} rides available
          @endif
         
          </div> 
          
          </div> 
          <br>
          @if($NumberOfAvailableCarpoo == 0 )
          <img src="../../../../../../dist/img/nomatch.gif" style="display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;">
          @endif
  @foreach($DisplaySpecificCarpoo as $DisplayCarpooling)
    @foreach($PersonWhoPublishedInCarpoo as $PersonWhoPublishedInCarpooling)
    @if($PersonWhoPublishedInCarpooling['id'] == $DisplayCarpooling['User_Who_Added_This_Carpoo_id'])
    <div class="product_container">
    

    
    
        <div class="image_container">
          <div class="category">{{$PersonWhoPublishedInCarpooling['FirstName']}}</div>
          <img src="../../../../../../uploads/users/{{$PersonWhoPublishedInCarpooling['Picture']}}" />
        </div>
        <i class='fa fa-comments' style='font-size:20px;color:green'></i>
    &nbsp;&nbsp;&nbsp;
    <div class="vll"></div>
   
   <div>
   
</div>
<br>

   <div class="name"><br></div>
   
   {{\Carbon\Carbon::parse($DisplayCarpooling['StartingTime'])->format('H:i')}}<br> <br>{{\Carbon\Carbon::parse($DisplayCarpooling['ArrivingTime'])->format('H:i')}}
   <img src="../../../../../../dist/img/test Line.png" style="height:73px; width:13px;">
   
   {{$DisplayCarpooling['CityFrom']}} <br> <br>{{$DisplayCarpooling['CityTo']}}
  
   
 
   
   <!-- <div class="heart"><i class="fa fa-heart"></i>(5)</div> -->
                    <!-- like -->
                    
                    <span class=" heart ">
                          <button type="button" value="{{$DisplayCarpooling['id']}}" class=" likecounter" style=" background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          ">
                          <i id=HeartLike_icon class="fa fa-heart"></i> 
                          </button>
                    </span>
                    
                    
                        <!-- end like -->
                        @if($DisplayCarpooling['Passengers'] == 0)
                            @if($PersonWhoPublishedInCarpooling['id'] !=Auth::user()->id)
                              <button disabled type="button" class="btn btn-secondary heart6">Full</button>
                              @else
                              <button type="button" class="btn btn-danger heart6" onclick="return REMOVECarpoo('{{route('Carpool2.delete',['id'=>$DisplayCarpooling['id']])}}')"><a href="#" style="color:white;">Delete</a></button>
                            @endif
                        @endif
                        @if($DisplayCarpooling['Passengers'] > 0)
                            @if($PersonWhoPublishedInCarpooling['id'] !=Auth::user()->id)
                            <!-- if the method payment is cash  -->
                              <button type="button" class="btn btn-success heart6">
                                <a href="{{route('Update_AvailableCarpooPage',['id'=>$DisplayCarpooling['id']])}}" style="color:white;">Select</a>
                              </button>
                              <!-- if the method payment is credit card  -->
                            
                              @else
                              <button type="button" class="btn btn-danger heart6" onclick="return REMOVECarpoo('{{route('Carpool2.delete',['id'=>$DisplayCarpooling['id']])}}')"><a href="#" style="color:white;">Delete</a></button>
                            @endif
                        @endif
                        @foreach($UserWhoHasChosenThisCarpoo as $UserWhoHasChosenThisCarpooling)
                          @if($DisplayCarpooling['id'] == $UserWhoHasChosenThisCarpooling['CarpooId'] && $UserWhoHasChosenThisCarpooling['User_Who_HasChosen_This_Carpoo'] == Auth::user()->id)
                            <button type="button" class="btn btn-warning heart6" onclick="return REMOVE_ChosenCarpool('{{route('ChosenCarpooling.delete',['id'=>$UserWhoHasChosenThisCarpooling['id']])}}')">Chosen</button>
                            <!-- todo don t choose it anymore
                          
                          -->
                          @endif
                        @endforeach
                        
                        

   <!-- @if($PersonWhoPublishedInCarpooling['id'] !=Auth::user()->id)
   <button type="button" class="btn btn-success heart6"><a href="#" style="color:white;">Select</a></button>
   @endif -->

   <div class="bank">
   {{$DisplayCarpooling['Price']}} MAD
   </div>
   <div class="heart40">
   <!-- <input type="" id="" name="" value="{{$DisplayCarpooling['id']}}"> -->
   @foreach($UserWhoHasChosenThisCarpoo as $UserWhoHasChosenThisCarpooling)
      @if($DisplayCarpooling['id'] == $UserWhoHasChosenThisCarpooling['CarpooId'] && $UserWhoHasChosenThisCarpooling['User_Who_HasChosen_This_Carpoo'] == Auth::user()->id)
        Check your email to contact {{$PersonWhoPublishedInCarpooling['FirstName']}}.
      @endif
  @endforeach
                              
                            
                        
                        </div> 
   <div class="heart2">{{$DisplayCarpooling['CarType']}}</div> 
   <div class="heart4">{{$DisplayCarpooling['Passengers']}} Available seats</div> 
   <div class="heart20">Meeting Point: {{$DisplayCarpooling['MeetingPoint']}} </div> 
   <div class="heart3">
      <span class="CarpooStyleee">
         Carpooling 
      </span>
      <span class="AUIStyleee" >
      AUI 
      </span>
      

   </div> 
</div>
@endif
  @endforeach

  
@endforeach
   <!--  footer -->
   <footer >
         <div class="footer" style="background-color:#23262d;">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang anotherColor">Aui </strong><strong class="multi color_chang">Carpooling</strong><br>
                        
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
<style>
  button:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
}
.liked{
  color: red;
  font-size: 22px !important;
}
.Notliked{
  color: none;
  font-size: 18px !important;
}
  .box{  
  background-color: #e6e6e6; 
  border-radius: 5px;
 padding:7px;
  margin-left:38%;
  height: 10%; 
  width: 25%; 
  left: 20%; 
  top: 110%; 
} 
        body {
         background:#fff;
      }
.daTee{
   padding-right:500px;
}
.CarpooStyleee{
    color: #001a00;
    font-family: Bradley Hand ITC; 
    font-size:40px;
}
.AUIStyleee{
    color: #006600;
    font-family: Bradley Hand ITC;
    font-size:20px;
}

.vll {
  border-left: 1px solid #d9d9d9;
  height: 150px;
  padding-left: 5px;
  
}
.product_container {
    background-color:white;
   border-radius: 25px;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.product_container2 {
    background-color:white;
   border-radius: 25px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.image_container img
{
 width:110px;
  height:110px;
  border-radius:100%;
  /* border-radius: 15px;
   margin-top:0;
  float:left;
  width:100%;
  max-height:100px; */
}

.category
{
   
   text-align:center;
  color:#666;
  font-weight:bold;
  font-size:15px;

}

.name{
   padding-left:40px;
}



.heart 
{
   position:absolute;
    bottom:10px;
    padding-left:850px;
  color:red;
}
.heart2
{
   font-size:17px;
   position:absolute;
    bottom:75px;
    padding-left:450px;
  color:black;
}
.heart20
{
   font-size:17px;
   position:absolute;
    bottom:100px;
    padding-left:450px;
  color:black;
}
.bank
{
padding-left:150px;

color:#003311;
margin-top:7px;
font-weight:800;
}
.heart6
{
  
   margin-left:740px;
   width:12%;
   font-size:17px;
   position:absolute;
    bottom:135px;
    
  color:black;
}
.heart4
{
   font-size:17px;
   position:absolute;
    bottom:50px;
    padding-left:450px;
  color:black;
}
.heart40
{
   font-size:17px;
   position:absolute;
    bottom:25px;
    padding-left:450px;
  color:black;
}
.heart3
{
   font-size:23px;
   position:absolute;
    bottom:0px;
    padding-left:160px;
  color:black;
}


.heart i
{
  font-size:22px;
}

.quick
{
  display:none;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#003311;
  width:70px;
  height:70px;
  border-radius:100%;
  line-height:70px;
  text-align:center;
  font-size:15px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}
.quick:hover
{
  display:none;
  
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#009933;
  width:60px;
  height:60px;
  border-radius:100%;
  line-height:60px;
  text-align:center;
  font-size:13px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}

.product_container:hover .quick
{
  display:block;
}
.heart7
{
  
   
   display:none;
}

@media (max-width: 820px) and (min-width: 767px)
{
    body {
         background:#fff;
      }
.heart6
{
  
   margin-left:360px;
   width:12%;
   font-size:17px;
   position:absolute;
    bottom:135px;
    
  color:black;
}
.heart7
{
  
   
   display:none;
}
      .box{  
  background-color: #e6e6e6; 
  border-radius: 5px;
 padding:7px;
  margin-left:25%;
  height: 10%; 
  width: 50%; 
  left: 20%; 
  top: 110%; 
} 
.daTee{
   padding-right:500px;
}
.vll {
  border-left: 1px solid #d9d9d9;
  height: 150px;
  padding-left: 5px;
  
}
.product_container {
    background-color:white;
   border-radius: 25px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.product_container2 {
    background-color:white;
   border-radius: 25px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.image_container img
{
 width:75px;
  height:75px;
  border-radius:100%;
  /* border-radius: 15px;
   margin-top:0;
  float:left;
  width:100%;
  max-height:100px; */
}

.category
{
  text-align:center;
  color:#666;
  font-weight:bold;
  font-size:15px;

}

.name{
   padding-left:0px;
}

.bank
{
padding-left:330px;
font-size:12px;
color:#003311;
margin-top:7px;
font-weight:800;
}

.heart
{
   position:absolute;
    bottom:10px;
    padding-left:540px;
  color:black;
}
.heart2
{
   font-size:15px;
   position:absolute;
    bottom:60px;
    padding-left:305px;
  color:black;
}
.heart4
{
   font-size:15px;
   position:absolute;
    bottom:40px;
    padding-left:305px;
  color:black;
}
.heart3
{
    
   font-size:18px;
   position:absolute;
    bottom:0px;
    padding-left:150px;
  color:red;
}


.heart i
{
  font-size:15px;
}

.quick
{
  display:none;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#003311;
  width:70px;
  height:70px;
  border-radius:100%;
  line-height:70px;
  text-align:center;
  font-size:15px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}
.CarpooStyleee{
    color: #001a00;
    font-family: Bradley Hand ITC; 
    font-size:18px;
}
.AUIStyleee{
    color: #006600;
    font-family: Bradley Hand ITC;
    font-size:15px;
}

.quick:hover
{
  display:none;
  
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#009933;
  width:60px;
  height:60px;
  border-radius:100%;
  line-height:60px;
  text-align:center;
  font-size:13px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}

.product_container:hover .quick
{
  display:block;
}

}
@media (max-width: 767px) 
{
  .product_container
  {
    width:60%;
    padding:10px;
    box-sizing:border-box;
    margin-left:0px;
    margin-top:10px;
    box-shadow:0px 0px 1px #333;
  }
}
@media (max-width: 600px) 
{
    body {
         background:#fff;
      }
      .heart6
{
  
   display:none;
}
.heart7
{
  width:30%;
   font-size:10px;
   
  color:black;
}
      .box{  
  background-color: #e6e6e6; 
  border-radius: 5px;
 padding:7px;
  margin-left:25%;
  height: 10%; 
  width: 50%; 
  left: 20%; 
  top: 110%; 
} 
.daTee{
   padding-right:500px;
}
.vll {
  border-left: 1px solid #d9d9d9;
  height: 150px;
  padding-left: 5px;
  
}
.product_container {
    background-color:white;
   border-radius: 25px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.product_container2 {
    background-color:white;
   border-radius: 25px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
   box-sizing: border-box; 
    position: relative;

  /* justify-content: center; */
    /* float: right; */
    /* padding-right: 50px; */
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    transition: all ease-in-out 0.3s;
}
.image_container img
{
 width:75px;
  height:75px;
  border-radius:100%;
  /* border-radius: 15px;
   margin-top:0;
  float:left;
  width:100%;
  max-height:100px; */
}

.category
{
  text-align:center;
  color:#666;
  font-weight:bold;
  font-size:15px;

}

.name{
   padding-left:0px;
}

.bank
{
padding-left:10px;
font-size:12px;
color:#003311;
margin-top:7px;
font-weight:800;
}

.heart
{
   position:absolute;
    bottom:10px;
    padding-left:210px;
  color:black;
}
.heart2
{
   font-size:13px;
   position:absolute;
    bottom:60px;
    padding-left:105px;
  color:black;
}
.heart4
{
   font-size:13px;
   position:absolute;
    bottom:40px;
    padding-left:105px;
  color:black;
}
.heart3
{
    
   font-size:5px;
   position:absolute;
    bottom:0px;
    padding-left:100px;
  color:red;
}


.heart i
{
  font-size:15px;
}

.quick
{
  display:none;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#003311;
  width:70px;
  height:70px;
  border-radius:100%;
  line-height:70px;
  text-align:center;
  font-size:15px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}
.CarpooStyleee{
    color: #001a00;
    font-family: Bradley Hand ITC; 
    font-size:15px;
}
.AUIStyleee{
    color: #006600;
    font-family: Bradley Hand ITC;
    font-size:10px;
}

.quick:hover
{
  display:none;
  
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  background:#009933;
  width:60px;
  height:60px;
  border-radius:100%;
  line-height:60px;
  text-align:center;
  font-size:13px;
  color:#fff;
  font-weight:800;
  transition:all ease-in-out 0.3s;
  cursor:pointer;
}

.product_container:hover .quick
{
  display:block;
}

}

</style>
@endsection