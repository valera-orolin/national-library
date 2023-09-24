@props(['book'])

<div class="book-card">
    <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('img/no-image.jpg') }}" alt="">
    <a href="/books/{{ $book->id }}"><h3 class="lighter-text">{{ $book->title }}</h3></a>
    <h4 class="lighter-text">{{ $book->authors }}</h4>
    <hr>
    <h4 class="lighter-text">{{ $book->genres }}</h4>
    <h4 class="rating-text lighter-text">5 (86)</h4>
</div>