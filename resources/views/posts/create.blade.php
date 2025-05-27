<x-app-layout>
    <h2 class="text-xl font-bold mb-4">Create Post</h2>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="w-full p-2 border mb-2" />
        @error('title')<div class="text-red-500">{{ $message }}</div>@enderror

        <textarea name="content" placeholder="Content" class="w-full p-2 border mb-2">{{ old('content') }}</textarea>
        @error('content')<div class="text-red-500">{{ $message }}</div>@enderror

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
</x-app-layout>
