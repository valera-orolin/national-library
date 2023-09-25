<x-layout>
    <div class="container post-page post-edit-page">
        <form method="POST" action="/events" enctype="multipart/form-data">
            @csrf
            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text">Title:</h3>
                <input class="input-text superlong-text" type="text" name="title" value="{{ old('title') }}">
                @error('title')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror
    
                <h3 class="lighter-text margin-top-3">Date:</h3>
                <input class="input-text superlong-text" type="datetime" name="date" value="{{ old('date') }}">
                @error('date')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror
    
                <h3 class="lighter-text margin-top-3">Place:</h3>
                <input class="input-text superlong-text" type="text" name="place" value="{{ old('place') }}">
                @error('place')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <h3 class="lighter-text margin-top-3">Image:</h3>
                <input class="input-button" type="file" name="image">
    
                <textarea class="text-edit" name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror
            </div>
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>