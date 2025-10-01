<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Available Positions</h2>
        
        <ul class="divide-y divide-gray-200 border border-gray-200 rounded-xl overflow-hidden">
            @foreach ($jobs as $job)
                <li class="p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                    
                    <!-- Job Card -->
                    <div>
                        <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                            <!-- Employer -->
                            <div class="font-bold text-blue-500 text-sm">
                                {{ $job->employer->name }}
                            </div>

                            <!-- Job Title & Salary -->
                            <div>
                                <strong class="text-laracasts">{{ $job->title }}:</strong> 
                                Pays {{ $job->salary }} per year.
                            </div>
                        </a>
                    </div>

                    <!-- Tags -->
                    <div class="px-4 py-4">
                        @foreach($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
