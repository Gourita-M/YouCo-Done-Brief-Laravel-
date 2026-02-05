<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All Restaurants – TableBooky</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow-sm sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-orange-500">TableBooky</h1>

    <nav class="hidden md:flex gap-8 text-sm font-medium">
      <a href="#" class="hover:text-orange-500">Dashboard</a>
      <a href="#" class="text-orange-500 font-semibold">Restaurants</a>
      <a href="#" class="hover:text-orange-500">For Owners</a>
      <a href="#" class="hover:text-orange-500">Contact</a>
    </nav>

    <div class="flex gap-3">
      <a href="./login" class="text-sm font-medium">Sign in</a>
      <a href="./register"
        class="bg-orange-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-orange-600">
        Register
      </a>
    </div>
  </div>
</header>


<!-- Page Header -->
<section class="bg-gradient-to-r from-orange-50 to-white py-16">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-4xl font-bold mb-4">Discover Restaurants</h2>
    <p class="text-gray-600 max-w-xl mx-auto">
      Browse all available restaurants, explore menus, and book your table easily.
    </p>
  </div>
</section>


<!-- Restaurants Grid -->
<section class="max-w-7xl mx-auto px-6 py-16">

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Restaurant Card -->
    @foreach($data as $dada)
    <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
      <img src="{{ asset('storage/restaurants/' . $dada->images[0]->restuarant_image) }} "
           class="h-48 w-full object-cover">

      <div class="p-5">
        <h4 class="font-semibold text-lg">{{$dada['name']}}</h4>
        <p class="text-sm text-gray-500">Food : {{$dada['cuisine_type']}} • {{$dada['city']}}</p>
        <p class="text-sm text-gray-500">{{$dada['adress']}}</p>

        <div class="flex justify-between items-center mt-4">
          <span class="text-orange-500 font-semibold">⭐ 4.7</span>
          <a href="./details/{{$dada['id']}}" class="bg-orange-500 text-white px-4 py-2 rounded-lg text-sm">
            View Details
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</section>


<!-- Footer -->
<footer class="bg-gray-900 text-gray-400">
  <div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-8">
    <div>
      <h4 class="text-white font-semibold text-lg mb-3">TableBooky</h4>
      <p class="text-sm">Smart restaurant booking platform.</p>
    </div>

    <div>
      <h5 class="text-white font-medium mb-3">Platform</h5>
      <ul class="space-y-2 text-sm">
        <li>How it works</li>
        <li>Restaurants</li>
        <li>For Owners</li>
      </ul>
    </div>

    <div>
      <h5 class="text-white font-medium mb-3">Support</h5>
      <ul class="space-y-2 text-sm">
        <li>Help Center</li>
        <li>FAQ</li>
        <li>Contact</li>
      </ul>
    </div>

    <div>
      <h5 class="text-white font-medium mb-3">Legal</h5>
      <ul class="space-y-2 text-sm">
        <li>Privacy Policy</li>
        <li>Terms</li>
      </ul>
    </div>
  </div>

  <div class="text-center text-sm py-4 border-t border-gray-800">
    © 2026 TableBooky
  </div>
</footer>

</body>
</html>
