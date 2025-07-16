<x-app-layout>
    <div class="py-12 px-4 max-w-3xl mx-auto">
        <img src="{{ $projects->thumbnail }}" alt="" class="rounded mb-4">
        <h1 class="text-3xl font-bold mb-2">{{ $project->title }}</h1>
        <p class="text-gray-700 dark:text-gray-300">{{ $project->description }}</p>
        <p class="mt-4"><strong>Tech Stack:</strong>{{ $project->tech_stack }}</p>
        <div class="mt-6 flex gap-4">
            @if ($project->github_link)
                <a href="{{ $project->github_link }}" class="text-blue-600">GitHub Repo</a>
            @endif
            @if ($project->live_link)
                <a href="{{ $project->live_link }}" class="text-blue-600">Live Demo</a>
            @endif
        </div>
    </div>
</x-app-layout>