<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/tailwind.css'])
</head>
<body class="font-sans antialiased text-gray-900">

<!-- Navigation -->
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-xl font-semibold">Brand</a>
        <div>
            <a href="#" class="px-4 hover:text-gray-300">Home</a>
            <a href="#" class="px-4 hover:text-gray-300">About</a>
            <a href="#" class="px-4 hover:text-gray-300">Services</a>
            <a href="#" class="px-4 hover:text-gray-300">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-gray-200 text-gray-800 py-20">
    <div class="container mx-auto flex flex-col items-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to Our Website</h1>
        <p class="text-xl mb-8">Discover our services and offers.</p>
        <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Get Started</a>
    </div>
</section>

<!-- Features Section -->
<section class="container mx-auto py-20">
    <h2 class="text-3xl text-center font-bold mb-12">Our Features</h2>
    <div class="flex justify-around flex-wrap">
        <div class="max-w-sm">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl mb-4 font-semibold">Feature One</h3>
                <p class="text-gray-700">This is a description of the first feature. It's really awesome.</p>
            </div>
        </div>
        <div class="max-w-sm">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl mb-4 font-semibold">Feature Two</h3>
                <p class="text-gray-700">This is a description of the second feature. It's even more awesome.</p>
            </div>
        </div>
        <div class="max-w-sm">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl mb-4 font-semibold">Feature Three</h3>
                <p class="text-gray-700">This is a description of the third feature. It's the most awesome.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white p-4 text-center">
    <p>Copyright &copy; 2024 Your Brand</p>
</footer>

</body>
</html>
