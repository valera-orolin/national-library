<x-layout>
    <div class="container page-container">
        <form class="filter-form line-right" method="GET" action="/books">
            @csrf
            <input class="input-text superlong-text" type="text" name="search_text" placeholder="Search book...">
            <div class="c-line">
                <h2 class="lighter-text">Published from</h2>
                <input class="input-text" type="date" name="date_from">
                <h2 class="lighter-text margin-left-3vh">to</h2>
                <input class="input-text" type="date" name="date_to">
            </div>
            <div class="c-line">
                <h2 class="lighter-text">Sort by</h2>
                <select class="input-text">
                    <option value="value1">Popularity</option>
                    <option value="value2">Rating</option>
                </select>
            </div>
            <input class="input-button" type="submit" value="Search">
        </form>
        <div class="line-right">
            <a class="new-publication-link" href="/books/create"><h2 class="lighter-text">New Book</h2></a>
        </div>
    
        <div class="elements-list">
            @foreach ($books as $book)
                <x-book-multiple-card :book="$book"/>   
            @endforeach
        </div>
    </div>
</x-layout>