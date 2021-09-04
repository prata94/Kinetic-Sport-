@extends('layouts.app')
@section('content')

<div class="row justify-content-center min-vh-100" style="background-image:url({{url('images/134.jpg')}})">
    <div class="col-md-8 mt-5">
        <div class="card card-default">
            <div class="card-header text-center text-dark bg-warning bg-gradient"> <strong>Book Appointment</strong></div>

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
                <form action="{{ route('appointments.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Select date & time</label>
                        <input type="datetime-local" name="date_time" class="form-control"  min="2021-10-01T00:00" max="2024-06-14T00:00" required/>
                    </div>
                    <div class="form-group">
                        <label>Optional: Choose your preferred physician:</label>
                        <input type="text" name="physician" class="form-control" placeholder="Physician" />
                    </div>
                    <div class="form-group">
                        <label>Optional: Tell us about the procedures you are interested in:</label>
                        <input type="text" name="procedures" class="form-control" placeholder="Procedures" />
                    </div>
                    <div class="form-group text-center mt-2">
                        <button class="btn btn-success bg-gradient">Confirm Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
