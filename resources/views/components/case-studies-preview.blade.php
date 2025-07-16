<div class="py-12 px-4">
  <h2 class="text-2xl font-semibold text-center mb-6">Case Studies</h2>
  <div class="space-y-6">
    @foreach($studies as $study)
      <div class="p-6 bg-white dark:bg-gray-900 rounded-xl shadow">
        <h3 class="text-lg font-bold">{{ $study->title }}</h3>
        <p class="text-sm text-gray-500">{{ Str::limit($study->summary, 120) }}</p>
        <a href="{{ route('case-studies.show', $study->slug) }}" class="text-blue-600">Read More →</a>
      </div>
    @endforeach
  </div>
</div>