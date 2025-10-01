<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body { height: 100%; margin: 0; }
    </style>
</head>
<body class="h-full font-sans bg-gray-100">
    <div class="min-h-full flex flex-col">

        <!-- Navigation -->
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between">
                
                <!-- Logo / Title -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-white text-2xl font-bold hover:text-indigo-400 transition">
                        Laravel App
                    </a>
                </div>

                <!-- Links -->
                <div class="flex space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs') || request()->is('jobs/*')">Jobs</x-nav-link>
                </div>

            </div>
        </nav>

        <!-- Page Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-900">
                    {{ $heading ?? '' }}
                </h1>

                <div class="flex space-x-3">
                    <a href="/" class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow hover:bg-gray-200 border border-gray-300 transition">
                        Home
                    </a>
                    <a href="/jobs" class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow hover:bg-gray-200 border border-gray-300 transition">
                        Jobs
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    {{ $slot }}
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 mt-auto">
            <div class="max-w-7xl mx-auto px-4 py-4 text-gray-400 text-sm text-center">
                &copy; {{ date('Y') }} Laravel App. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>
