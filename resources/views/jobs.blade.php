<x-layout>

    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <span class="text-xl text-blue-500">{{ $job['title'] }}</span> : pays
                    {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>

