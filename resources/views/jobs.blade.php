<x-layout>
    <x-slot:heading>
        About page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="no-underline block px-4 py-4 border border-gray-300 rounded">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
