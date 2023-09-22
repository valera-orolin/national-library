<x-layout>
    <div class="container page-container">
        <form class="filter-form line-right" method="GET" action="/posts">
            @csrf
            <input class="input-text superlong-text" type="text" name="search_text" placeholder="Search post...">
            <div class="c-line">
                <h2 class="lighter-text">Published from</h2>
                <input class="input-text" type="date" name="date_from">
                <h2 class="lighter-text margin-left-3vh">to</h2>
                <input class="input-text" type="date" name="date_to">
            </div>
            <input class="input-button" type="submit" value="Search">
        </form>
        @if (auth()->check() && auth()->user()->isAdmin())
            <div class="line-right">
                <a class="new-publication-link" href="/posts/create"><h2 class="lighter-text">New Post</h2></a>
            </div>
        @endif

        <div class="elements-list">
            @foreach ($posts as $post)
                <x-post-multiple-card :post="$post" />
            @endforeach
        </div>

        {{ $posts->links() }}
        {{--{{ $posts->links('components/pagination') }}--}}
    </div>
</x-layout>