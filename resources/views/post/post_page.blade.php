<x-layout.layout>
    <div class="shadow-md rounded-md px-4 py-3 border border-slate-200 bg-slate-50">
        <div class="sm:h-[400px]">
            <img class="rounded-md block mx-auto shadow-md border border-slate-200"
                src="https://source.unsplash.com/random/700x400?space&{{ mt_rand(1, 100) }}" alt="">
        </div>
        <div class="mt-4">
            <div class="flex justify-between items-center mt-4">
                <h2 class="text-xl truncate font-raleway font-bold">
                    {{ $post->title }}
                </h2>
                <time class="text-nowrap max-sm:text-sm">{{ $post->created_at->diffForHumans() }}</time>
            </div>

            <h3 class="text-gray-900 font-mono text-sm w-1/2 truncate">By
                <a class="hover:text-blue-700"
                    href="/authors/author/{{ $post->author->name }}">{{ $post->author->name }}</a>
            </h3>

            <x-button href="/categories/category/{{ $post->category->slug }}" class="mt-2 inline-block">
                {{ $post->category->slug }}
            </x-button>
            <div class="post text-gray-600 font-inter mt-10 space-y-6">{!! $post->body !!}</div>
        </div>
    </div>
</x-layout.layout>
