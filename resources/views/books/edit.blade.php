<x-layout>
    <div class="container book-page">
        <form method="POST" action="/books/{{ $book->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="sb-line-left">
                <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('img/no-image.jpg') }}" alt="">
                <div class="book-text-info">
                    <h3 class="lighter-text">Title:</h3>
                    <input class="input-text superlong-text" type="text" name="title" value="{{ $book->title }}">
                    @error('title')
                        <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                    @enderror
    
                    <h3 class="lighter-text margin-top-3">Author:</h3>
                    <input class="input-text superlong-text" type="text" name="authors" value="{{ $book->authors }}">
                    @error('authors')
                        <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                    @enderror
    
                    <h3 class="lighter-text margin-top-3">Genre:</h3>
                    <input class="input-text superlong-text" type="text" name="genres" value="{{ $book->genres }}">
                    @error('genres')
                        <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                    @enderror

                    <h3 class="lighter-text margin-top-3">First published on:</h3>
                    <input class="input-text superlong-text" type="date" name="release_date" value="{{ $book->release_date->format('Y-m-d') }}">
                    @error('release_date')
                        <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                    @enderror

                    <h3 class="lighter-text margin-top-3">Image:</h3>
                    <input class="input-button" type="file" name="cover">
    
                    <h2 class="rating-text lighter-text margin-top-3">5 (86)</h2>
    
                    <div class="edit-delete-line">
                        <input type="hidden" name="is_available" value="0">
                        <input class="checkbox" type="checkbox" name="is_available" value="1" {{ $book->is_available ? 'checked' : '' }}>
                        <h2 class="lighter-text margin-left-3vh">Is available for borrowing</h2>
                    </div>
                </div>
            </div>
            <textarea class="text-edit" cols="30" rows="10" name="description">{{ $book->description }}</textarea>
            @error('description')
                <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
            @enderror
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>