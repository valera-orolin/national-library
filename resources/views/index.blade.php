<x-layout>

@include('/partials/_hero')

<div class="books-section">
    <div class="container">
        <div class="sb-line">
            <h1>Reading Spotlight</h1>
            <a class="link-animation" href="/books"><h2>SEE ALL BOOKS</h2></a>
        </div>
        <div class="sb-line-top margin-top-3">
            @foreach ($books as $book)
                <div class="book-card">
                    <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('img/no-image.jpg') }}" alt="">
                    <a href="/books/{{ $book->id }}"><h2 class="lighter-text">{{ $book->title }}</h2></a>
                    <h3 class="lighter-text">{{ $book->authors }}</h3>
                    <hr>
                    <h3 class="lighter-text">{{ $book->genres }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="quote">
    <p class="marquee margin-top-3">A reader lives a thousand lives before he dies</p>
</div>

<div class="events-section">
    <div class="container">
        <div class="sb-line">
            <h1>What's On</h1>
            <a class="link-animation link-animation-white" href="/events"><h2>SEE ALL EVENTS</h2></a>
        </div>
        <div class="sb-line-top">
            <div class="event-card margin-top-3">
                @if (!empty($events) && isset($events[0]))
                    <div class="event-card-img">
                        <img src="{{ $events[0]->image ? asset('storage/' . $events[0]->image) : asset('img/no-image.jpg') }}" alt="">
                    </div>
                    <a href="/events/{{ $events[0]->id }}"><h2 class="lighter-text small-margin">{{ $events[0]->title }}</h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="date-or-place lighter-text small-margin">{{ date_format($events[0]->date, 'd M Y H:i') }}</h3>
                        <h3 class="date-or-place lighter-text small-margin">{{ $events[0]->place }}</h3>
                    </div>
                    <p class="small-margin trim-text">{{ $events[0]->description }}</p>
                @endif
            </div>

            <div class="small-event-cards">
                @for ($i = 1; $i < count($events); $i++)
                    <div class="small-event-card margin-top-3">
                        <a href="/events/{{ $events[$i]->id }}"><h2 class="lighter-text small-margin">{{ $events[$i]->title }}</h2></a>
                        <div class="sb-line-left small-margin">
                            <h3 class="date-or-place lighter-text small-margin">{{ date_format($events[$i]->date, 'd M Y H:i') }}</h3>
                            <h3 class="date-or-place lighter-text small-margin">{{ $events[$i]->place }}</h3>
                        </div>
                    </div>
                    @if ($i != count($events) - 1)
                        <hr class="white-line">
                    @endif
                @endfor
            </div>
        </div>
    </div>
</div>

<div class="posts-section">
    <div class="container">
        <div class="sb-line">
            <h1>From the Blog</h1>
            <a class="link-animation" href="/posts"><h2>SEE ALL POSTS</h2></a>
        </div>

        <div class="sb-line-top margin-top-3">
            @foreach ($posts as $post)
                <div class="post-card">
                    <div class="post-card-img">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/no-image.jpg') }}" alt="">
                    </div>
                    <a href="/posts/{{ $post->id }}"><h2 class="lighter-text small-margin">{{ $post->title }}</h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="lighter-text small-margin">{{ $post->categories }}</h3>
                        <h3 class="lighter-text small-margin">{{ date_format($post->created_at, 'd F Y') }}</h3>
                    </div>
                    <p class="small-margin trim-text">{{ $post->text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script src="js/text-trimmer.js"></script>

</x-layout>