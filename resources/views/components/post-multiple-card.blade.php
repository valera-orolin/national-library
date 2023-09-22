@props(['post'])

<div class="post-card">
    <div class="post-card-img">
        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/no-image.jpg') }}" alt="">
    </div>
    <a href="/posts/{{ $post->id }}"><h2 class="lighter-text small-margin">{{ $post->title }}</h2></a>
    <div class="sb-line-left small-margin">
        <h3 class="lighter-text small-margin">{{ $post->categories }}</h3>
        <h3 class="lighter-text small-margin">{{ date_format($post->created_at, 'd F Y') }}</h3>
    </div>
    <h3 class="lighter-text small-margin"></h3>
    <p class="small-margin trim-text">{{ $post->text }}</p>
</div>