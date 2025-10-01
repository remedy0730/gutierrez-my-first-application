<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-indigo-500">
        <h2 class="font-bold text-3xl text-gray-800 mb-3">{{ $job->title }}</h2>
        <p class="text-xl text-gray-600 border-t pt-4 mt-4">
            This position offers a salary of <strong class="text-indigo-600">{{ $job->salary }}</strong> per year.
        </p>
        <p class="text-sm text-gray-500 mt-2">Employer: {{ $job->employer->name }}</p>

        <div class="mt-4">
            @foreach($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                    {{ $tag->name }}
                </span>
            @endforeach
        </div>

        <div class="mt-6 flex space-x-4">
            <a href="/jobs/{{ $job->id }}/edit" class="px-4 py-2 bg-indigo-600 text-white rounded">Edit Job</a>
            <a href="/jobs" class="px-4 py-2 bg-gray-200 rounded">Back to Jobs</a>
        </div>
    </div>
</x-layout>
