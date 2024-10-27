<x-layout>
    <x-slot:heading>
        About page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"
                    class="text-blue-500 hover:text-blue-600 no-underline hover:underline">
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>


</x-layout>
