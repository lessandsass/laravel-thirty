<x-layout>

    <x-slot:heading>
        Home page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <h1>{{ $job['title'] }}</h1>
        <span>{{ $job['salary'] }}</span>
        <br>
        <br>
    @endforeach

</x-layout>
