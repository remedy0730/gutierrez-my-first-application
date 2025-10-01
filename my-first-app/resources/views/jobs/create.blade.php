<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-6">

            <!-- Job Title -->
            <div class="sm:col-span-4">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        value="{{ old('title') }}"
                        class="block w-full rounded-md border-2 border-gray-300 bg-gray-50 py-2 px-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50 sm:text-sm sm:leading-6"
                        placeholder="Shift Leader"
                        required
                    >
                </div>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                    <input 
                        type="text" 
                        name="salary" 
                        id="salary" 
                        value="{{ old('salary') }}"
                        class="block w-full rounded-md border-2 border-gray-300 bg-gray-50 py-2 px-3 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50 sm:text-sm sm:leading-6"
                        placeholder="$50,000 Per Year"
                        required
                    >
                </div>
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <!-- Submit button -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Save</button>
        </div>
    </form>
</x-layout>
