<div class="space-y-10 mt-4">

    @if ($posts->count())
        <h1 class="font-extrabold text-3xl text-center font-raleway">Posts</h1>
        @foreach ($posts as $post)
            <x-post :post="$post" />
        @endforeach
        {{ $posts->links() }}
    @else
        <p class="text-center text-2xl">Posts not found!!</p>
    @endif
</div>
