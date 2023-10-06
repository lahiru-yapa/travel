<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tower;
use App\Models\Booking;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tours = Tower::all();
        return view('Pages.index', compact('tours'));
        
    }

    public function destination1($id)
    {
        $tours = Tower::where('category', $id)->get();
        return view('Pages.destination.destination1', compact('tours'));
    }

    public function destinatioDetails($id)
    {
        $towersList = Tower::latest()->take(5)->get();
     
      $tour = Tower::where('id', $id)->first();
        return view('Pages.destination.destinationDetails', compact('tour','towersList'));
    }

    public function create_booking(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required',
            'message' => 'required|string',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'date.required' => 'Date is required.',
            'message.required' => 'Message is required.',
        ]
    
    );

       // Create a new FormSubmission instance
    $formSubmission = new Booking;
    $formSubmission->name = $validatedData['name'];
    $formSubmission->email = $validatedData['email'];
    $formSubmission->adult = $request['adult_quantity'];
    $formSubmission->child = $request['child_quantity'];
    $formSubmission->date = $validatedData['date'];
    $formSubmission->message = $validatedData['message'];
    $formSubmission->tower_id = $request['tower_id'];
    
    // Save the data to the database
    $formSubmission->save();

    return response()->json(['message' => 'Form submitted successfully']);
    }
   

}
