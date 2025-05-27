<!-- Add Posts Links -->
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-black">
    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
        {{ __('All Posts') }}
    </x-nav-link>
    <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
        {{ __('Create Post') }}
    </x-nav-link>
</div>