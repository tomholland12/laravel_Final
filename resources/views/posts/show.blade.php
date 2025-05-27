<x-app-layout>
    <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
    <p class="mt-2">{{ $post->content }}</p>

    <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 mt-4 inline-block">Edit</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-2">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are you sure?')" class="bg-red-500 text-white px-4 py-2 rounded">
            Delete
        </button>
    </form>

    <a href="{{ route('posts.index') }}" class="text-gray-600 mt-4 block">← Back to Posts</a>
</x-app-layout>
