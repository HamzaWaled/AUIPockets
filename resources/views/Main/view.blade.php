@extends('LAYOUT.master')
@section('content')
<br>
<span style="color: #003311; padding-left: 110px; ">Welcome back {{Auth::user()->FirstName}}, </span>
<div class="container d-flex justify-content-center" >
    <!-- <div class="row" >
        <div class="col-md-4" >
            <div class="card p-3 py-4 mt-5 mb-5" style="background-color:white;">
                <div class="text-center"> 
                <a href="#"><img src="../../../../../../dist/img/logoAPP1.jpg" width="100%"></a>
                  <hr>
                  <a href="#" style="text-align:center; color: #003311; font-size: 30px;">Sell & Buy</a>
                  <br><br>
                    <div style="text-align:left;">
                    To buy when others are despondently selling and sell when others are greedily buying requires the greatest fortitude and pays the greatest reward.
                  </div>
                    <br>
                    
                </div>
            </div>
        </div> -->
        <div class="col-md-6">
            <div class="card p-3 py-4 mt-5" style="background-color:white;">
                <div class="text-center"> 
                <a href="/View/MainNewsPage"><img src="../../../../../../dist/img/logoAPP3.jpg" width="100%"></a>
                  <hr>
                  <a href="/View/MainNewsPage" style="text-align:center; color: #003311; font-size: 30px;">Breaking News</a>
                  <br><br>
                    <div style="text-align:left;">
                    Breaking news refers to events that are currently happening at Al Akhwayn University. It is the information that is just emerging and may continue to change.
                  </div>
                    <br>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3 py-4 mt-5" style="background-color:white;">
                <div class="text-center"> 
                <a href="/View/MainCarpoolingPage"><img src="../../../../../../dist/img/logoAPP2.jpg" width="100%" > </a>
                  
                  <hr>
                  <a href="/View/MainCarpoolingPage" style="text-align:center; color: #003311; font-size: 30px;">Carpooling</a>
                  <br>
                  <br>
                  <div style="text-align:left;">
                  Carpooling is the sharing of car journeys so that more than one person travels in a car, and prevents the need for others to have to drive to a location themselves. 
                  </div>
                    <br>
                    
                    
                    
                </div>
            </div>
        </div>
        
    </div>
</div>




</body>
</html>
<style>
    
      .card {
          border-radius: 20px;
          background:#f2f2f2;
          /*box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #e6e6e6;*/
          border: none
      }

      .card img {
          /*border-radius: 50%;*/
          background-color: #f2f2f2;
        /*  background: linear-gradient(145deg, #e6e6e6,#ffffff);*/
          /*box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #e6e6e6*/
      }

      .neo-button {
          width: 40px;
          height: 40px;
          outline: 0 !important;
          cursor: pointer;
          color: #fff;
          font-size: 15px;
          border: none;
          margin-right: 10px;
          border-radius: 50%;
          background: linear-gradient(145deg, #d6d6d6, #ffffff);
          box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #ffffff
      }

      .neo-button:active {
          
          background: linear-gradient(145deg, #d6d6d6, #ffffff);
         
      }

</style>



@endsection