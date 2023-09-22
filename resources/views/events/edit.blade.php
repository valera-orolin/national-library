<x-layout>
    <div class="container post-page post-edit-page">
        <form method="POST" action="/events/{{ $event->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text">Title:</h3>
                <input class="input-text superlong-text" type="text" name="title" value="{{ $event->title }}">
    
                <h3 class="lighter-text margin-top-3">Date:</h3>
                <input class="input-text superlong-text" type="datetime" name="date" value="{{ $event->date }}">
    
                <h3 class="lighter-text margin-top-3">Place:</h3>
                <input class="input-text superlong-text" type="text" name="place" value="{{ $event->place }}">

                <h3 class="lighter-text margin-top-3">Image:</h3>
                <input class="input-button" type="file" name="image">
    
                <h2 class="lighter-text margin-top-3">42 users are coming</h2>
                <textarea class="text-edit" name="description" id="" cols="30" rows="10">{{ $event->description }}</textarea>
            </div>
            <input class="input-button margin-top-3" type="submit" value="Submit">
        </form>
    </div>
</x-layout>