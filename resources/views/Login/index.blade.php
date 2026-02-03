<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login – TableBooky</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <h1 class="text-2xl font-bold text-orange-500">TableBooky</h1>
      <nav class="hidden md:flex gap-8 text-sm font-medium">
        <a href="#" class="hover:text-orange-500">Home</a>
        <a href="#" class="hover:text-orange-500">Restaurants</a>
        <a href="#" class="hover:text-orange-500">For Owners</a>
        <a href="#" class="hover:text-orange-500">Contact</a>
      </nav>
      <div class="flex gap-3">
        <a href="login.html" class="text-sm font-medium text-orange-500">Sign in</a>
        <a href="register.html" class="bg-orange-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-orange-600">Register</a>
      </div>
    </div>
  </header>

  <!-- Login Form -->
  <section class="max-w-md mx-auto mt-20 bg-white rounded-2xl shadow-lg p-8">
    <h2 class="text-3xl font-bold mb-8 text-center text-orange-500">Sign In to TableBooky</h2>
    <form>
      <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email</label>
      <input id="email" type="email" required placeholder="you@example.com" class="w-full px-4 py-3 mb-5 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" />

      <label class="block mb-2 text-sm font-medium text-gray-700" for="password">Password</label>
      <input id="password" type="password" required placeholder="••••••••" class="w-full px-4 py-3 mb-6 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" />

      <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
        Sign In
      </button>
    </form>
    <p class="mt-6 text-center text-sm text-gray-600">
      Don't have an account?
      <a href="register.html" class="text-orange-500 hover:underline">Register here</a>
    </p>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 mt-20">
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
