<?php 

use App\Http\Controllers\RestaurantController;


  $Restaurant = new RestaurantController;

  $data = $Restaurant->showRestaurantsByUserId(Auth::user()->id);

?>

<section class="max-w-7xl mx-auto px-6 py-14">

  <div class="flex flex-col md:flex-row justify-between md:items-center mb-10 gap-6">
    <div>
      <h2 class="text-3xl font-bold">My Restaurants</h2>
      <p class="text-gray-500 mt-1">Manage and publish your restaurants</p>
    </div>
    <a href="./addRestaurant" class="bg-orange-500 text-white px-6 py-3 rounded-xl font-medium hover:bg-orange-600">
      + Publish New Restaurant
    </a>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
 
  @foreach($data as $dada)
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('storage/restaurants/' . $dada->images[0]->restuarant_image) }} " class="h-48 w-full object-cover">
      <div class="p-5">
        <h3 class="font-semibold text-lg">{{$dada['name']}}</h3>
        <p class="text-sm text-gray-500">{{$dada['cuisine_type']}} • {{$dada['city']}}</p>
        <p class="text-sm text-gray-500">{{$dada['adress']}}</p>
        
        <div class="flex justify-between items-center mt-5">
          <a href="editRestaurant" class="text-orange-500 font-medium text-sm">Edit</a>
          <a href="addMenu/{{$dada['id']}}" class="text-red-500 text-sm font-medium">Add Menu Items</a>
          <a href="delete/{{$dada['id']}}" class="text-red-500 text-sm font-medium" onclick="return confirm('Are you sure You Want To Delete This Restaurant ?')">Delete</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>


