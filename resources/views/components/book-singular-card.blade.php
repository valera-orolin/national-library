@props(['book'])

<div class="container book-page">
    <div class="sb-line-left">
        <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('img/no-image.jpg') }}" alt="">
        <div class="book-text-info">
            <h1 class="lighter-text">{{ $book->title }}</h1>
            <h2 class="lighter-text">{{ $book->authors }}</h2>
            <h2 class="lighter-text">{{ $book->genres }}</h2>
            <h2 class="lighter-text">First published {{ date_format($book->release_date, 'F d, Y') }}</h2>
            <h2 class="rating-text lighter-text">5 (86)</h2>
            
            @if (auth()->check() && !auth()->user()->isAdmin())
                <form class="rating-form">
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"><i class="fas fa-star"></i></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"><i class="fas fa-star"></i></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"><i class="fas fa-star"></i></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"><i class="fas fa-star"></i></label>
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"><i class="fas fa-star"></i></label>
                    <input class="input-button rating-button" type="submit" value="Rate">
                </form>
            @endif

            @if ($book->is_available)
                <h2 class="lighter-text"><i class="fas fa-check" style="color: #26a269;"></i></i> Available for borrowing</h2>
            @else
                <h2 class="lighter-text"><i class="fas fa-times" style="color: #a23526;"></i></i> Not available for borrowing</h2>
            @endif

            @if (auth()->check() && auth()->user()->isAdmin())
                <div class="edit-delete-line">
                    <a href="/books/{{ $book->id }}/edit"><h2 class="lighter-text white-link">Edit</h2></a>
                    <form class="margin-left-3vh" method="POST" action="/books/{{ $book->id }}">
                        @csrf
                        @method('DELETE')
                        <input class="button-link white-link" type="submit" value="Delete">
                    </form>
                </div>
            @endif
        </div>
    </div>
    <p>{{ $book->description }}</p>
</div>

<script src="/js/rating-form.js"></script>