@extends('layouts.backend')

@section('title','Room')

@section('content')
<style>
  <style>


.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 10px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 30px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- /.row -->
<!-- Main row -->
<div class="row" style="">
    <div class="col-lg-12">
        <div class="card" style="background-color:salmon; width:100%;box-shadow: 10px 10px;">
            <div class="card-body">
    
              <div class="col-lg-12" style="display:flex; flex-direction:row;flex-wrap:wrap">
                <div class="col-lg-5">
                    <img src="{{ asset('frontend/img/room/room-1.jpg') }}" alt="" style="width:400px;height:290px;">
                </div>

                <div class="col-lg-3">
                    <div class="card" style="background-color:rgb(212, 135, 212);">
                        <div class="card-body">
                            <h5> <b>Room Name</b> </h5>
                            Applied for <b style="color:white;">DELUXE ROOM</b> 

                        </div>
                        <div class="card-body">
                            <h5> <b>Rate Plan</b> </h5>
                            
                            <div class=""> <i class="fa fa-check"></i>  With Meal</div>

                        </div>
                        <div class="card-body">
                            <h5> <b>Cancellation Policy</b> </h5>
                            3 days before check in
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="background-color:rgb(212, 135, 212);">
                        <div class="card-body">
                            <h5> <b>Room Name</b> </h5>
                            Applied for <b style="color:white;">DELUXE ROOM</b> 

                        </div>
                        <div class="card-body">
                            <h5> <b>Rate Plan</b> </h5>
                            
                            <div class=""> <i class="fa fa-check"></i>  With Meal</div>

                        </div>
                        <div class="card-body">
                            <h5> <b>Cancellation Policy</b> </h5>
                            3 days before check in
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="background-color:rgb(212, 135, 212);">
                        <div class="card-body">
                            <h5> <b>Room Name</b> </h5>
                            Applied for <b style="color:white;">DELUXE ROOM</b> 

                        </div>
                        <div class="card-body">
                            <h5> <b>Rate Plan</b> </h5>
                            
                            <div class=""> <i class="fa fa-check"></i>  With Meal</div>

                        </div>
                        <div class="card-body">
                            <h5> <b>Cancellation Policy</b> </h5>
                            3 days before check in
                        </div>
                    </div>
                </div>
                
              </div>

    
            </div>
        </div>
    </div>

</div>
<!-- /.row (main row) -->

@endsection