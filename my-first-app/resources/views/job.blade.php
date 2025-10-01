<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-indigo-500">
        <!-- Employer Name -->
        <p class="text-sm text-gray-500 mb-2">{{ $job->employer->name }}</p>

        <!-- Job Title -->
        <h2 class="font-bold text-3xl text-gray-800 mb-3">{{ $job['title'] }}</h2>

        <!-- Salary -->
        <p class="text-xl text-gray-600 border-t pt-4 mt-4">
            This position offers a salary of 
            <strong class="text-indigo-600">{{ $job['salary'] }}</strong> per year.
        </p>

        <!-- Tags -->
        <div class="mt-4">
            @foreach($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                    {{ $tag->name }}
                </span>
            @endforeach
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="/jobs" 
               class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium 
                      rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none 
                      focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                &larr; Back to all Jobs
            </a>
        </div>
    </div>
</x-layout>
