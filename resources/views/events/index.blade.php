<x-layout>
    <div class="container page-container">
        <form class="filter-form line-right" method="GET" action="/events">
            @csrf
            <input class="input-text superlong-text" type="text" name="search_text" placeholder="Search event...">
            <div class="c-line">
                <h2 class="lighter-text">Will take place from</h2>
                <input class="input-text" type="date" name="date_from">
                <h2 class="lighter-text margin-left-3vh">to</h2>
                <input class="input-text" type="date" name="date_to">
            </div>
            <input class="input-button" type="submit" value="Search">
        </form>
        @if (auth()->check() && auth()->user()->isAdmin())
            <div class="line-right">
                <a class="new-publication-link" href="/events/create"><h2 class="lighter-text">New Event</h2></a>
            </div>
        @endif
    
        <div class="elements-list">
            @foreach ($events as $event)
                <x-event-multiple-card :event="$event" />
            @endforeach
        </div>

        {{ $events->links() }}
    </div>
</x-layout>