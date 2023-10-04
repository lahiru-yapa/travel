<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tower;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('Pages.admin.index');
    }
    
    public function add_new_tour(Request $request)
    {
        return view('Pages.admin.home');
    }

    public function create_tour(Request $request)
    {
       
  
        $tour = new Tower();
        
        $tour->title = $request->input('title');
        $tour->days = $request->input('days');
        $tour->location_map_link = $request->input('location_map_link');
        $tour->location = $request->input('location');
        $tour->Included = $request->input('Included');
        $tour->excluded = $request->input('excluded');
        $tour->group_size = $request->input('group_size');
        $tour->category =  $request->input('category');
        $tour->price = $request->input('price');
        $tour->description = $request->input('editor1');
      
        // Handling file uploads
        if ($request->hasFile('home_image')) {
            $homeImage = $request->file('home_image');
            $homeImage->move(public_path('images'), $homeImage->getClientOriginalName());
             $tour->home_image = 'images/' . $homeImage->getClientOriginalName();
        }

        if ($request->hasFile('destination_details_main_image')) {
            $homeImage = $request->file('destination_details_main_image');
            $homeImage->move(public_path('images'), $homeImage->getClientOriginalName());
             $tour->destination_details_main_image = 'images/' . $homeImage->getClientOriginalName();
        }

        if ($request->hasFile('destination')) {
            $destinationImage = $request->file('destination');
            $destinationImage->move(public_path('images'), $destinationImage->getClientOriginalName());
             $tour->destination_image = 'images/' . $destinationImage->getClientOriginalName();
        }
    
        if ($request->hasFile('destination_details')) {
            $destinationDetails = $request->file('destination_details');
            $destinationDetailsPaths = [];
    
            foreach ($destinationDetails as $image) {
                $image->move(public_path('images'), $image->getClientOriginalName());
                $destinationDetailsPaths[] = 'images/' . $image->getClientOriginalName();
            }
    
            $tour->destination_details_image = json_encode($destinationDetailsPaths);
        }
    
        $tour->save();
    
        return redirect()->route('dashboard'); // Assuming you have a route named 'tour_list'
    }
}
