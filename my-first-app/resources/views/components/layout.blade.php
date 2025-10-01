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
html, body { height: 100%; margin: 0; }
</style>
</head>
<body class="h-full">
<div class="min-h-full">
<nav class="bg-gray-800">
<div class="flex items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">

<div class="flex-shrink-0">
<span class="text-white text-xl font-bold">Laravel App</span>
</div>

<div class="flex ml-10 space-x-4">
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
<x-nav-link href="/jobs" :active="request()->is('jobs') || request()->is('jobs/*')">Jobs</x-nav-link>
</div>

</div>
</nav>

<header class="bg-white shadow">
<div class="py-3 max-w-7xl mx-auto px-4 sm:px-6 lg-px-8 flex items-center">
<!-- FINAL FIX: Removing the heading text to eliminate the dynamic content flicker -->
<div class="flex-grow">
<h1 class="text-3xl font-bold tracking-tight text-gray-900 py-1 bg-transparent">
<!-- EMPTY HEADING TEXT -->
</h1>
</div>

<div class="flex space-x-4 flex-shrink-0">
<a href="/" class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-200 transition duration-150 ease-in-out border border-gray-300">
Home
</a>
<a href="/jobs" class="px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-md hover:bg-gray-200 transition duration-150 ease-in-out border border-gray-300">
Jobs
</a>
</div>
</div>
</header>
<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg-px-8">
<div class="bg-white p-6 rounded-xl shadow-lg">
{{ $slot }}
</div>
</div>
</main>
</div>
</body>
</html>