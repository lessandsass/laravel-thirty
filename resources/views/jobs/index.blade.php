<x-layout>

    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="px-4 py-6 block border-2 border-gray-300 bg-gray-100 rounded-lg">
                <div class="text-blue-500 font-bold">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <span class="text-xl">{{ $job['title'] }}</span> : pays
                    {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>

    </div>

</x-layout>

