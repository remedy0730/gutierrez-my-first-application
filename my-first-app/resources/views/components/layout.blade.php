<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Dynamic Site</title>
  <!-- Part 3, Step 1: Add Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Simple styling to ensure the full height works well */
    html, body {
      height: 100%;
      margin: 0;
    }

    /* ULTIMATE FIX: Create a text-shadow utility to make the text visible 
       even if a dark background flashes */
    .text-flicker-fix {
      /* White text shadow to ensure the black text is visible against
         any momentary dark background */
      text-shadow: 0 0 1px white, 0 0 1px white, 0 0 1px white;
    }
  </style>
</head>
<body class="h-full">
  <div class="min-h-full">

    <!-- NAVBAR -->
    <nav class="bg-gray-800">
      <!-- FIX: Removed 'h-16' from nav to prevent reserving space for phantom elements -->
      <div class="flex items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">

        <div class="flex-shrink-0">
          <span class="text-white text-xl font-bold">Laravel App</span>
        </div>

        <!-- FIX: Final structural cleanup of the nav links -->
        <div class="flex ml-10 space-x-4">
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>

      </div>
    </nav>

    <!-- HEADER -->
    <header class="bg-white shadow">
      <div class="py-3 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
        
        <!-- Final Cleanup of Heading Slot -->
        <div class="flex-grow">
          <!-- APPLIED TEXT-SHADOW FIX -->
          <h1 class="text-3xl font-bold tracking-tight text-gray-900 py-1 text-flicker-fix">
            {{ $heading }}
          </h1>
        </div>

        <!-- NEW: Dynamic Buttons -->
        <div class="flex space-x-4 flex-shrink-0">
          <a href="/" 
             class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-md 
                    hover:bg-gray-200 transition duration-150 ease-in-out border border-gray-300">
            Home
          </a>
          <a href="/about" 
             class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-md 
                    hover:bg-gray-200 transition duration-150 ease-in-out border border-gray-300">
            About
          </a>
          <a href="/contact" 
             class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-md 
                    hover:bg-gray-200 transition duration-150 ease-in-out border border-gray-300">
            Contact
          </a>
        </div>
        <!-- END NEW BUTTONS -->

      </div>
    </header>

    <!-- MAIN -->
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Part 2, Step 4 & Part 3, Step 4: Default Slot for Content -->
        <div class="bg-white p-6 rounded-xl shadow-lg">
          {{ $slot }}
        </div>
      </div>
    </main>

  </div>
</body>
</html>
