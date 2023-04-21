@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        <div class="d-flex justify-content-between p-5">
            <div class="back-container">
                <a href="/doctors">
                    <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back m-2">
                </a>
            </div>
            <h3>Doctor Details</h3>
            <div></div>
        </div>

        <div class="doctor-details">
            <div class="row">
                <div class="col-4 col-md-3">
                    <div class="doctor-container w-100 d-flex justify-content-center">
                        @if($doctor->image)
                            <img src="{{asset($doctor->image)}}" alt="" class="doctor-image img-fluid">
                        @else
                            <img src="{{asset('assets/images/doctor1.png')}}" alt="" class="doctor-image img-fluid">
                        @endif
                    </div>
                </div>
                <div class="col-4 col-md-9">
                    <div class="m-1 m-md-3">
                        <h5 class="doctor-name">Dr. {{$doctor->name}}</h5>
                        <div class="doctor-speciality">
                            {{$doctor->speciality->name}}
                        </div>
                        <div class="rating text-black">
                            <img src="{{asset('assets/images/Star.png')}}" alt="" class="star">{{$doctor->rating}}
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="details">
                <h4 class="details-h4 mt-4">Biography</h4>
                <p class="details-p">{{$doctor->bio}}</p>
            
                <h4 class="details-h4 mt-4">Specialities</h4>
                <div class="d-flex w-auto overflow-x-auto">
                    <div class="speciality-card m-2 mx-3">
                        {{$doctor->speciality->name}}
                    </div>
                </div>
                
                <h4 class="details-h4 mt-4">Working Time</h4>
                <div class="working-time">
                    Mon - Sat (08:30 AM - 09:00 PM)
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <a href="/doctor/{{$doctor->id}}/appointments" class="btn-custom">See Availability</a>
        </div>
    </div>

    <br><br><br>
    @include('layouts.nav')
@endsection