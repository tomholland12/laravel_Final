<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Edit Post</h2>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full p-2 border mb-2" />
        @error('title')<div class="text-red-500">{{ $message }}</div>@enderror

        <textarea name="content" class="w-full p-2 border mb-2">{{ old('content', $post->content) }}</textarea>
        @error('content')<div class="text-red-500">{{ $message }}</div>@enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</x-app-layout>
