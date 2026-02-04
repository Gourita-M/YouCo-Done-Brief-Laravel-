<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Menu Item - Restaurant</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <div class="bg-white rounded-xl shadow-md max-w-lg w-full p-8">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Add Menu Item</h1>
    <form class="space-y-6" action="#" method="POST" enctype="multipart/form-data">
      <div>
        <label for="dish-name" class="block text-sm font-medium text-gray-700 mb-1">Dish Name</label>
        <input
          type="text"
          id="dish-name"
          name="dish_name"
          required
          placeholder="Ex: Grilled Chicken Salad"
          class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
        />
      </div>

      <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea
          id="description"
          name="description"
          rows="3"
          placeholder="Describe the dish"
          class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 resize-none"
          required
        ></textarea>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
          <input
            type="number"
            id="price"
            name="price"
            step="0.01"
            min="0"
            required
            placeholder="12.50"
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
          />
        </div>

        <div>
          <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
          <select
            id="category"
            name="category"
            required
            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
          >
            <option value="" disabled selected>Select category</option>
            <option value="appetizer">Appetizer</option>
            <option value="main">Main Course</option>
            <option value="dessert">Dessert</option>
            <option value="drink">Drink</option>
          </select>
        </div>
      </div>

      <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Dish Image</label>
        <input
          type="file"
          id="image"
          name="image"
          accept="image/*"
          class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                 file:rounded-md file:border-0
                 file:text-sm file:font-semibold
                 file:bg-orange-100 file:text-orange-700
                 hover:file:bg-orange-200
                 cursor-pointer"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-orange-500 text-white font-semibold py-3 rounded-md hover:bg-orange-600 transition"
      >
        Add Menu Item
      </button>
    </form>
  </div>
</body>
</html>
