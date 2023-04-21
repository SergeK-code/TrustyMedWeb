@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        <div class="d-flex justify-content-between p-5">
            <div class="back-container">
                <a href="/doctor/{{$doctor->id}}">
                    <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back m-2">
                </a>
            </div>
            <h3>Book Appointment</h3>
            <div></div>
        </div>

        <div class="doctor-details">
            <h2 class="date mt-3">Date</h2>
            <div class="month my-3">
                <form action="/doctor/{{$doctor->id}}/appointments" method="get"></form>
                    @csrf
                    <select name="search" class="month-input">
                        @foreach ($months as $index=>$month )
                            <option value="{{$index+1}}" {{$month == $current_month ? 'selected' : ''}}>{{$month}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn">
                        <img src="{{asset('assets/images/Search.png')}}" alt="" class="icon-2">
                    </button>
                </form>
            </div>
            <div class="d-flex justify-content-around w-100 px-4 overflow-x-scroll">
                <a href="/doctor/{{$doctor->id}}/appointments/{{$today->day}}" class="nav-link">
                    <div class="day-card text-center day-active">
                        <div class="day-num text-white">{{$today->day}}</div>
                        <div class="day-str text-white">{{$today->format('D')}}</div>
                    </div>
                </a>
                <a href="/doctor/{{$doctor->id}}/appointments/{{$tomorrow->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$tomorrow->day}}</div>
                        <div class="day-str">{{$tomorrow->format('D')}}</div>
                    </div>
                </a>
                <a href="/doctor/{{$doctor->id}}/appointments/{{$day_3->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_3->day}}</div>
                        <div class="day-str">{{$day_3->format('D')}}</div>
                    </div>
                </a>
                <a href="/doctor/{{$doctor->id}}/appointments/{{$day_4->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_4->day}}</div>
                        <div class="day-str">{{$day_4->format('D')}}</div>
                    </div>
                </a>
                <a href="/doctor/{{$doctor->id}}/appointments/{{$day_5->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_5->day}}</div>
                        <div class="day-str">{{$day_5->format('D')}}</div>
                    </div>
                </a>
            </div>

            <h2 class="time mt-5">Available Time</h2>
            <div class="row my-3">
                @foreach ($time as $t)
                    @php
                        $isTaken = false;
                        $isActive = false;
                        $appointmentId = null;
                        
                        foreach ($appointments as $appointment) {
                            if (Str::contains($appointment->date, $today->day) && Str::contains($appointment->time, $t)) {
                                $isTaken = true;
                                if ($appointment->user_id == auth()->user()->id) {
                                    $isActive = true;
                                    $appointmentId = $appointment->id;
                                }
                            }
                        }
                    @endphp
                    
                    <div class="col-4 col-md-3 p-1">
                        <div class="time-card {{ $isTaken ? 'time-taken' : '' }} {{ $isActive ? 'time-active' : '' }}">
                            <div class="time-txt {{ $isActive ? 'text-white' : '' }}">
                                @if ($isTaken)
                                    {{ $t }}:00 (Taken)
                                @else
                                    {{ $t }}:00 (Available)
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center my-5">
            <a href="/doctor/{{$doctor->id}}/appointment/new" class="btn-custom">Book Appointment</a>
        </div>
    </div>

    <br><br><br>
    @include('layouts.nav')
@endsection