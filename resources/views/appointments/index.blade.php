@extends('layouts.app')
@section('content')

<div class="container-fluid min-vh-100" style="background-image:url({{url('images/134.jpg')}})">

<div class="container d-flex justify-content-center mb-5">
    <div class="card w-75 m-3">
        <div class="card-header bg-warning bg-gradient text-dark text-center">
        <strong>Upcoming Appointments</strong>
        </div>
        <div class="card-body d-flex flex-column mb-2">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success')}}
                        </div>
                    @endif

                    @foreach($appointments as $appointment)
                    <div class="card mb-3">
                    <div class="card-header text-muted"><small><em>Date: {{$appointment['date_time']}} </em></small></div>
                    <div class="card-body row">
                        <div class="col col-lg-8 border">
                            <div class="text-muted">
                            <small><em>Physician:</em></small>
                            </div>
                            <div class="h5">
                            {{$appointment['physician']}}
                            </div>
                        </div>
                        <div class="col-lg-2 border">
                            <div class="text-muted">
                            <small><em>Procedures:</em></small>
                            </div>
                            <div>
                            {{$appointment['procedures']}}
                            </div>
                        </div>
                        <div class="col col-lg-2 border">
                            <div class="text-muted">
                            <small><em>Status:</em></small>
                            </div>
                            @if($appointment['confirmed'])
                            <div class="text-success">
                                <strong>Confirmed</strong>
                            </div>
                                @else
                            <div class="text-danger">
                                <strong>Not Confirmed</strong>
                            </div>
                            @endif
                        </div> 
                    </div>
                    <div class="row text-center">
                        <div class="col col-lg-5 mb-2">
                        <a href="{{ route('appointments.edit', $appointment['id']) }}" class="text-decoration-none mb-2 btn btn-outline-primary"><strong><em>Reschedule Appointment</em></strong></a>
                        </div>
                        <form action="{{ route('appointments.destroy', $appointment['id']) }}" method="post" class="col col-lg-5 ms-auto mb-2">
                        @csrf
                        @method('delete')
                        <button type="submit" class="text-decoration-none mb-2 btn btn-outline-danger"><strong><em>Cancel Appointment</em></strong></button>
                        </form>
                    </div> 
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <div>{{ $appointments->appends(request()->query())->links() }}</div>
                </div>
        </div>
    </div>


        </div>
    </div>
</div>
</div>


@endsection