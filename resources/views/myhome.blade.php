<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/tailwind.css'])
    <style>
        .fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            transition: background-color 0.3s;
            z-index: 1000;
        }
        .active-bg {
            background-color: white !important;
            color: black;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {background-color: #f1f1f1}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body class="font-sans antialiased text-gray-900" onload="window.onscroll = function() {scrollFunction()}">

    <!-- Navigation -->
    <nav class="p-4 text-white bg-gray-800 fixed-top">
        <div class="container flex items-center justify-between mx-auto">
            <a href="#" class="text-xl font-semibold">Brand</a>
            <div class="flex items-center justify-center gap-4">
                <a href="#" class="px-4 hover:text-gray-300">Home</a>
                <div class="dropdown">
                    <a href="#" class="px-4 hover:text-gray-300 dropbtn">Services</a>
                    <div class="dropdown-content">
                        <a href="#">Subitem 1</a>
                        <a href="#">Subitem 2</a>
                    </div>
                </div>
                <a href="#" class="px-4 hover:text-gray-300">About</a>
                <a href="#" class="px-4 hover:text-gray-300">Contact</a>
                <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    Send Manuscript
                </button>
            </div>
        </div>
    </nav>

<!-- Hero Section -->
<section class="py-20 text-gray-800 bg-gray-200">
    <div class="container flex flex-col items-center mx-auto">
        <h1 class="mb-4 text-5xl font-bold">Welcome to Our Website</h1>
        <p class="mb-8 text-xl">Discover our services and offers.</p>
        <a href="#" class="px-6 py-3 text-white bg-blue-500 rounded hover:bg-blue-600">Get Started</a>
    </div>
</section>

<!-- Features Section -->
<section class="container py-20 mx-auto">
    <h2 class="mb-12 text-3xl font-bold text-center">Our Features</h2>

To have the first tab active when a user visits the site, you'll need to adjust the HTML to show the first tab's content by default and slightly modify the JavaScript so that it also sets the first tab as active on page load. Here's how you can implement these changes:

1. Adjusted HTML
You'll need to remove the hidden class from the first tab's content and add an active class to the first tab link in the HTML.

html
Copy code
<div class="flex">
  <!-- Tab Links -->
  <div class="flex flex-col w-40 p-4 space-y-2 bg-gray-200">
    <button class="tab-link focus:outline-none active" onclick="openTab(event, 'Tab1')">Tab 1</button>
    <button class="tab-link focus:outline-none" onclick="openTab(event, 'Tab2')">Tab 2</button>
    <button class="tab-link focus:outline-none" onclick="openTab(event, 'Tab3')">Tab 3</button>
  </div>

  <!-- Tab Content -->
  <div id="Tab1" class="p-4 tab-content">
    <h2>Tab 1 Content</h2>
    <p>Content for Tab 1...</p>
  </div>
  <div id="Tab2" class="hidden p-4 tab-content">
    <h2>Tab 2 Content</h2>
    <p>Content for Tab 2...</p>
  </div>
  <div id="Tab3" class="hidden p-4 tab-content">
    <h2>Tab 3 Content</h2>
    <p>Content for Tab 3...</p>
  </div>
</div>

    <div class="flex flex-wrap justify-around">
        <div class="max-w-sm">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold">Feature One</h3>
                <p class="text-gray-700">This is a description of the first feature. It's really awesome.</p>
            </div>
        </div>
        <div class="max-w-sm">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold">Feature Two</h3>
                <p class="text-gray-700">This is a description of the second feature. It's even more awesome.</p>
            </div>
        </div>
        <div class="max-w-sm">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <h3 class="mb-4 text-xl font-semibold">Feature Three</h3>
                <p class="text-gray-700">This is a description of the third feature. It's the most awesome.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="p-4 text-center text-white bg-gray-800">
    <p>Copyright &copy; 2024 Your Brand</p>
</footer>
<script>
    function scrollFunction() {
        var navbar = document.querySelector('.fixed-top');
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            navbar.classList.add('active-bg');
        } else {
            navbar.classList.remove('active-bg');
        }
    }
</script>
<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabName).style.display = "block";
  if (evt) evt.currentTarget.className += " active";
}

// Initialize the first tab open
document.addEventListener("DOMContentLoaded", function() {
  openTab(null, 'Tab1');
});

</script>
</body>
</html>
