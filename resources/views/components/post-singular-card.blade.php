@props(['post'])

<div class="post-card">
    <div class="post-card-img">
        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/no-image.jpg') }}" alt="">
    </div>
    @if (auth()->check() && auth()->user()->isAdmin())
        <div class="edit-delete-line small-margin">
            <a href="/posts/{{ $post->id }}/edit"><h2 class="lighter-text white-link">Edit</h2></a>
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <input class="button-link white-link" type="submit" value="Delete">
            </form>
        </div>
    @endif

    <h2 class="lighter-text small-margin">{{ $post->title }}</h2>
    <div class="sb-line-left small-margin">
        <h3 class="lighter-text small-margin">{{ $post->categories }}</h3>
        <h3 class="lighter-text small-margin">{{ date_format($post->created_at, 'd F Y') }}</h3>
    </div>
    <h3 class="lighter-text small-margin"></h3>
    <p class="small-margin">{{ $post->text }}</p>
</div>