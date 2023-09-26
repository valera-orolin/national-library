<x-layout>
    <div class="container post-page">
        <x-post-singular-card :post="$post" />

        <h2 class="margin-top-3">Comments</h2>
        <hr class="margin-top-3">
        @if (auth()->check())
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                @csrf
                <textarea class="text-edit" name="body"></textarea>
                @error('body')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <button class="input-button margin-top-2" type="submit">Add Comment</button>
            </form>
        @endif
        @foreach ($comments as $comment)
            <h3 style="margin-top: 3vh; margin-bottom: 0;">{{ $comment->user->name }}</h3>
            <div class="edit-delete-line">
                <h3 class="lighter-text margin-0 white-link">{{ date_format($comment->created_at, 'd M Y H:i') }}</h3>
                @if (auth()->check() && auth()->user()->isAdmin())
                    <form method="POST" action="/posts/{{ $comment->id }}/comments">
                        @csrf
                        @method('DELETE')
                        <input class="button-link2 white-link" type="submit" value="Delete">
                    </form>
                @endif
            </div>
            <p class="margin-0">{{ $comment->body }}</p>
        @endforeach
    </div>
</x-layout>