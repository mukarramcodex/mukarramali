<x-app-layout>
    <div class="py-12 px-4 max-w-3xl mx-auto">
        <img src="{{ $study->thumbnail }}" alt="" class="rounded mb-4">
        <h1 class="text-3xl font-bold mb-2">{{ $study->title }}</h1>
        <p class="text-gray-700 dark:text-gray-300">{{ $study->summary }}</p>
        <div class="mt-6 prose dark:prose-invert max-w-none">
            {!! nl2br(e($study->content)) !!}
        </div>
        <p class="mt-4"><strong>Tech Stack:</strong>{{ $study->tech_stack }}</p>
    </div>
</x-app-layout>