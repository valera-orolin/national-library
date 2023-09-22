@props(['event'])

<div class="post-card">
    <div class="post-card-img">
        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/no-image.jpg') }}" alt="">
    </div>
    <a href="/events/{{ $event->id }}"><h2 class="lighter-text small-margin">{{ $event->title }}</h2></a>
    <div class="sb-line-left small-margin">
        <h3 class="date-or-place lighter-text">{{ date_format($event->date, 'd M Y H:i') }}</h3>
        <h3 class="date-or-place lighter-text">{{ $event->place }}</h3>
    </div>
    <p class="small-margin trim-text">{{ $event->description }}</p>
</div>