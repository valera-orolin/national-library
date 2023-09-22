@props(['event'])

<div class="post-card">
    <div class="post-card-img">
        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/no-image.jpg') }}" alt="">
    </div>
    @if (auth()->check() && auth()->user()->isAdmin())
        <div class="edit-delete-line small-margin">
            <a href="/events/{{ $event->id }}/edit"><h2 class="lighter-text white-link">Edit</h2></a>
            <form method="POST" action="/events/{{ $event->id }}">
                @csrf
                @method('DELETE')
                <input class="button-link white-link" type="submit" value="Delete">
            </form>
        </div>
    @endif

    <h2 class="lighter-text small-margin">{{ $event->title }}</h2>
    <div class="sb-line-left small-margin">
        <h3 class="date-or-place lighter-text">{{ date_format($event->date, 'd M Y H:i') }}</h3>
        <h3 class="date-or-place lighter-text">{{ $event->place }}</h3>
    </div>
    <p class="small-margin">{{ $event->description }}</p>

    @if (auth()->check() && !auth()->user()->isAdmin())
        <form action="">
            <input class="input-button margin-top-3" type="submit" value="I'm coming!">
        </form>
    @endif
</div>