<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">All Posts</h1>

    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</a>

    @if(session('success'))
        <div class="text-green-500 mt-4">{{ session('success') }}</div>
    @endif

    <ul class="mt-6 space-y-2">
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}" class="text-lg text-blue-600">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>

    <div class="mt-4">
        {{ $posts->links() }} <!-- Ensure $posts is paginated correctly -->
    </div>
</x-app-layout>