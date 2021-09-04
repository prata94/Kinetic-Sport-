@extends('layouts.app')
@section('content')

    <div class="row justify-content-center min-vh-100" style="background-image:url({{url('images/134.jpg')}})"> 
        <div class="col-md-8 mt-5">
            <div class="card card-default">
                <div class="card-header bg-warning bg-gradient text-dark text-center"> <strong>Update Appointment</strong></div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('appointments.update', $appointment['id']) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <input type="datetime-local" name="date_time" class="form-control" placeholder="Date-Time" value="{{ $appointment['date_time'] }}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="physician" class="form-control" placeholder="Physician" value="{{ $appointment['physician'] }}">
                            </div>
                            <div class="form-group">
                                <input type="procedures" name="procedures" class="form-control" placeholder="Procedures" value="{{ $appointment['procedures'] }}">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success bg-gradient">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection