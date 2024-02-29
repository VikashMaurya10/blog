@props(['post'])

<a href="/posts/post/{{ $post->slug }}" class="block">
    <div class="shadow-md w-full sm:flex items-center gap-5 rounded-md px-4 py-3 border border-slate-200 bg-slate-50">
        <div class="sm:w-1/3">
            <img class="rounded-md" src="https://source.unsplash.com/random/500x300?space&{{ mt_rand(1, 100) }}"
                alt="">
        </div>
        <div class="sm:w-2/3">
            <div class="flex justify-between items-center max-sm:gap-4">
                <h2 class="text-xl truncate font-raleway font-semibold">
                    {{ $post->title }}
                </h2>
                <time class="text-nowrap max-sm:text-sm">{{ $post->created_at->diffForHumans() }}</time>
            </div>
            <div class="line-clamp-6 text-gray-600 font-inter mt-5 ">
                {!! $post->body !!}
            </div>
        </div>
    </div>

</a>
