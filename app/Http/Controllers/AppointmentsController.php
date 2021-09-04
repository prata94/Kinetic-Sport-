<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $user = auth()->user();
        $appointments = $user->appointments()->paginate(3);        
        return view('appointments.index',
        [
            'appointments' => $appointments
        ]);
    }

    public function book()
    {
       return view('appointments.book');
    }   

    public function show()
    {
        return view('appointments.show');
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $newAppointment = $user->appointments()->create( $request->all());

        $request->session()->flash('success','The booking has been sent to our office. We will contact you soon to confirm. You can check if your appointments have been confirmed below');

        return redirect()->route('appointments.index');
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);

        return view('appointments.edit', ['appointment' => $appointment]);
    }

    public function update()
    {
        return redirect()->route('appointments.index');
    }

    public function destroy(Request $request, $id)
    {
        $appointment = Appointment::find($id);

        $appointment->delete();

        $request->session()->flash('success', 'The appointment has been cancelled');

        return redirect()->route('appointments.index');
    }

}
