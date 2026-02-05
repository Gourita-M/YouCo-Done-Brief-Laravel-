{{$data}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TableBooky – Your Favorites</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <h1 class="text-2xl font-bold text-orange-500">TableBooky</h1>
      <nav class="hidden md:flex gap-8 text-sm font-medium">
        <a href="#" class="hover:text-orange-500">Dashboard</a>
        <a href="/Restaurants" class="hover:text-orange-500">Restaurants</a>
        <a href="/favorites" class="hover:text-orange-500 font-semibold text-orange-600">Favorites</a>
      </nav>
      <div class="flex gap-3">
        <a href="./login" class="text-sm font-medium">Sign in</a>
        <a href="./register" class="bg-orange-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-orange-600">Register</a>
      </div>
    </div>
  </header>

  <!-- Favorites Section -->
  <section class="max-w-7xl mx-auto px-6 py-16">
    <div class="flex justify-between items-center mb-10">
      <h3 class="text-2xl font-semibold">Your Favorite Restaurants</h3>
      <a href="/Restaurants" class="text-orange-500 font-medium">Browse More</a>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

    @foreach($data as $da)
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
        <div class="p-5">
          <h4 class="font-semibold text-lg">Villa Napoli</h4>
          <p class="text-sm text-gray-500">Italian • Downtown</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-orange-500 font-semibold">⭐ 4.7</span>
            <button class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-red-600">Remove</button>
          </div>
        </div>
      </div>
    @endforeach
      <p class="text-center text-gray-500 col-span-full mt-20">You haven't added any favorite restaurants yet.</p>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400">
    <div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-8">
      <div>
        <h4 class="text-white font-semibold text-lg mb-3">TableBooky</h4>
        <p class="text-sm">Smart restaurant booking platform for customers and owners.</p>
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
          <li>Terms of Service</li>
        </ul>
      </div>
    </div>
    <div class="text-center text-sm py-4 border-t border-gray-800">© 2026 TableBooky. All rights reserved.</div>
  </footer>

</body>
</html>
