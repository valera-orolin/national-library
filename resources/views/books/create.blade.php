<x-layout>
    <div class="container book-page">
        <form method="POST" action="/books" enctype="multipart/form-data">
            @csrf
            <div class="sb-line-left">
                <img src="{{ asset('img/no-image.jpg') }}" alt="">
                <div class="book-text-info">
                    <h3 class="lighter-text">Title:</h3>
                    <input class="input-text superlong-text" type="text" name="title" value="{{ old('title') }}">
    
                    <h3 class="lighter-text margin-top-3">Author:</h3>
                    <input class="input-text superlong-text" type="text" name="authors" value="{{ old('authors') }}">
    
                    <h3 class="lighter-text margin-top-3">Genre:</h3>
                    <input class="input-text superlong-text" type="text" name="genres" value="{{ old('genres') }}">

                    <h3 class="lighter-text margin-top-3">Release date:</h3>
                    <input class="input-text superlong-text" type="date" name="release_date" value="{{ old('release_date') }}">
    
                    <h2 class="rating-text lighter-text margin-top-3">5 (86)</h2>
    
                    <div class="edit-delete-line">
                        <input type="hidden" name="is_available" value="0">
                        <input class="checkbox" type="checkbox" name="is_available" value="1" {{ old('is_available') ? 'checked' : '' }}>
                        <h2 class="lighter-text margin-left-3vh">Is available for borrowing</h2>
                    </div>
                </div>
            </div>
            <textarea class="text-edit" cols="30" rows="10" name="description">{{ old('description') }}</textarea>
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>