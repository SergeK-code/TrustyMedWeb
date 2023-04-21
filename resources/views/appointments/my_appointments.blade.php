@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        @include('layouts.header')
        <div class="categories m-3 m-md-4 ">
            <h3 class="category-text mx-4 my-3 text-md-center">My Appointments</h3>
        </div>
        <div class="doctors my-3">
            @forelse($appointments as $appointment)
            <div class="card doctor-card m-2 my-4">
                <div class="doctor">
                    <div class="row">
                        <div class="col-10 my-auto">
                            <p class="text-center">
                                You have an appointment with Dr. <span class="text-custom-blue">{{$appointment->doctor->name}}</span> on <span class="text-custom-blue">{{$appointment->date}}</span> at <span class="text-custom-blue">{{$appointment->time}}</span>
                            </p>
                        </div>
                        <div class="col-2 my-auto">
                            <a href="/appointment/{{$appointment->id}}/delete" class="btn btn-danger m-2">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="empty text-center">
                    No appointments Yet...<br><br><br>
                    <a href="/doctors" class="btn-custom">Get Started</a>
                </div>
            @endforelse
        </div>
        {{-- end doctors --}}
    </div>

    <br><br><br>
    @include('layouts.nav')
@endsection
