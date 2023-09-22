<x-layout>
    <div class="container post-page post-edit-page">
        <form method="POST" action="/posts" enctype="multipart/form-data">
            @csrf
            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text">Title:</h3>
                <input class="input-text superlong-text" type="text" name="title" value="{{ old('title') }}">
    
                <h3 class="lighter-text margin-top-3">Category:</h3>
                <input class="input-text superlong-text" type="text" name="categories" value="{{ old('categories') }}">

                <h3 class="lighter-text margin-top-3">Image:</h3>
                <input class="input-button" type="file" name="image">
    
                <textarea class="text-edit margin-top-3" name="text" cols="30" rows="10">{{ old('text') }}</textarea>
            </div>
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>