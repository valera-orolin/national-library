<x-layout>
    <div class="container post-page post-edit-page">
        <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text">Title:</h3>
                <input class="input-text superlong-text" type="text" name="title" value="{{ $post->title }}">
                @error('title')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror
    
                <h3 class="lighter-text margin-top-3">Category:</h3>
                <input class="input-text superlong-text" type="text" name="categories" value="{{ $post->categories }}">
                @error('categories')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <h3 class="lighter-text margin-top-3">Image:</h3>
                <input class="input-button" type="file" name="image" tex>
    
                <textarea class="text-edit margin-top-3" name="text" cols="30" rows="10">{{ $post->text }}</textarea>
                @error('text')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror
            </div>
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>