<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tüm Postlar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Burası Tüm Postlar Sayfasıdır
            <br>
            <ul class="shadow list-disc">
                @foreach($posts as $post)
                <li>
                    <a href="#">{{ $post->title }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
