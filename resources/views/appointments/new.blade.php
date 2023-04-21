@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 px-2 h-screen">
        <div class="row">
            <div class="col-2 offset-1 back-container">
                <a href="/doctor/{{$doctor->id}}/appointments">
                    <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back my-2">
                </a>
            </div>
        </div>
        <div class="row justify-content-center mx-4">
            <div class="col-6 text-center my-4">
                <img src="{{asset('assets/images/image1.png')}}" alt="">
                <h1 class="mt-3">Book Appointment</h1>
            </div>
            <form method="POST" action="/doctor/{{$doctor->id}}/appointment/create">
                @csrf
                <div class="col-12 col-lg-6 mx-auto">
                    <input type="date" class="form-control custom-field" name="date" required>
                </div>
                <br>
                <div class="col-12 col-lg-6 mx-auto">
                    <select name="time" class="form-control custom-field" required>
                    <option value="" disabled selected hidden>Choose time</option>
                        @foreach ($times as $time)
                            @if (!in_array($time, $unavailable_times))
                                <option value="{{$time}}">{{$time}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <input type="hidden" value="{{$doctor->id}}" name="doctor_id">
                <div class="col-12 col-lg-6 mx-auto my-4">
                    <select name="payment_id" class="form-control custom-field" required>
                    <option value="" disabled selected hidden>Choose payment type</option>
                        @foreach ($payment_types as $pt)
                            <option value="{{$pt->id}}">{{$pt->payment_method}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 offset-md-4 my-4">
                    <button type="submit" class="custom-btn">Create</button>
                </div>
            </form>    
        </div>
    </div>
@endsection