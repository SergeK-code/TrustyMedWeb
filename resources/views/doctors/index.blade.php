@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        @include('layouts.header')
        <div class="categories m-3 m-md-4 ">
            <h3 class="category-text mx-4 my-3 text-md-center">Categories</h3>
            <div class="category-images d-flex justify-content-center my-1">
                <div class="category-container mx-2 {{(Str::contains(url()->current(), 'doctors/cardiologist')) ? 'active' : '' }}">
                    <a href="/doctors/cardiologist">
                        <img src="{{asset('assets/images/heart_rate.png')}}" alt="" class="category-image">
                    </a>
                </div>
                <div class="category-container mx-2 {{(Str::contains(url()->current(), 'doctors/general%20health')) ? 'active' : '' }}">
                    <a href="/doctors/general health">
                        <img src="{{asset('assets/images/Pil.png')}}" alt="" class="category-image">
                    </a>
                </div>
                <div class="category-container mx-2 {{(Str::contains(url()->current(), 'doctors/dentist')) ? 'active' : '' }}">
                    <a href="/doctors/dentist">
                        <img src="{{asset('assets/images/Dentist.png')}}" alt="" class="category-image">
                    </a>
                </div>
                <div class="category-container mx-2 {{(Str::contains(url()->current(), 'doctors/pregnancy')) ? 'active' : '' }}">
                    <a href="/doctors/pregnancy">
                        <img src="{{asset('assets/images/Pregnant.png')}}" alt="" class="category-image">
                    </a>
                </div>
            </div>
        </div>
        <div class="doctors my-3">
            @forelse($doctors as $doctor)
            <div class="card doctor-card m-2 my-4">
                <div class="doctor">
                    <a href="/doctor/{{$doctor->id}}" class="nav-link">
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
                                    <div class="rating">
                                        <img src="{{asset('assets/images/Star.png')}}" alt="" class="star">{{$doctor->rating}} <small>({{$doctor->consultation_cost}}$)</small>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                <div class="empty">
                    No Doctors Found...
                </div>
            @endforelse
            <div class="d-flex flex-row justify-content-center">
                {{$doctors->appends(['search' => request()->query('search')])->links()}}
            </div>
        </div>
        {{-- end doctors --}}
    </div>

    <br><br><br>
    @include('layouts.nav')
@endsection