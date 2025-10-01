<x-layout>
<x-slot:heading>
Jobs Page
</x-slot:heading>

<div class="space-y-4">
<h2 class="text-2xl font-semibold text-gray-800 mb-6">Available Positions</h2>
<ul class="divide-y divide-gray-200 border border-gray-200 rounded-xl overflow-hidden">
@foreach ($jobs as $job)
<li class="p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
<!-- Link to the single job page using the job's ID -->
<a href="/jobs/{{ $job['id'] }}" class="block text-blue-600 hover:text-blue-800 hover:underline">
<strong class="text-lg font-medium text-gray-900">{{ $job['title'] }}</strong>
<span class="text-sm text-gray-600 block">Pays {{ $job['salary'] }} per year.</span>
</a>
</li>
@endforeach
</ul>
</div>

</x-layout>