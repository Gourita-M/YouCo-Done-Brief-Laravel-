<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        return View('Restaurant.addRestaurant');
    }

    public function addRestaurant(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'cuisine_type' => 'required|max:255',
            'adress' => 'required|max:255',
            'capacity' => 'required',
            'openhours' => 'required',
            'closehours' => 'required',

        ]);
        
        $inserted = Restaurants::create([
            'name' => $data['name'],
            'city' => $data['city'],
            'cuisine_type' => $data['cuisine_type'],
            'adress' => $data['adress'],
            'capacity' => $data['capacity'],
            'openhours' => $data['openhours'],
            'closehours' => $data['closehours'],
            'users_id' => Auth::user()->id ,
        ]);
        
        $lastinsterted = $inserted->id;

        if ($request->hasFile('restuarant_image')) {

        $image = $request->file('restuarant_image');

        $imageName = time() . '.' . $image->extension();

        $image->storeAs('restaurants', $imageName, 'public');

        Images::create([
            'restuarant_image' => $imageName,
            'restaurants_id' => $lastinsterted,
        ]);

        }

        return redirect('/dashboard');
        
    }

    public function showRestaurantsByUserId($id)
    {

        return Restaurants::where('users_id', $id)->with('images')->get();

    }

    public function deleteRestaurant($id)
    {
        Images::Where('restaurants_id', $id);
        Restaurants::where('id', $id)->delete();

        return Redirect('/dashboard');
    }

    public function editRestaurant()
    {
        return View('Restaurant.editRestaurant');
    }

}
