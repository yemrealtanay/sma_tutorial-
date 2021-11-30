<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('$post->title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1>{{ $post->title }}</h1>
            <h1>{{ $post->content }}</h1>

        </div>
    </div>
</x-app-layout>
