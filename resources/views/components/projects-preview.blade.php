<div class="py-12 px-4 bg-gray-100 dark:bg-gray-800">
  <h2 class="text-2xl font-semibold text-center mb-6">Featured Projects</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($projects as $project)
      <div class="bg-white dark:bg-gray-900 p-4 rounded-xl shadow hover:shadow-lg transition">
        <img src="{{ $project->thumbnail }}" class="rounded-md" alt="{{ $project->title }}">
        <h3 class="mt-4 text-xl font-bold">{{ $project->title }}</h3>
        <p class="text-sm text-gray-500">{{ Str::limit($project->description, 100) }}</p>
        <a href="{{ route('projects.show', $project->slug) }}" class="text-blue-600 mt-2 inline-block">View Details →</a>
      </div>
    @endforeach
  </div>
</div>