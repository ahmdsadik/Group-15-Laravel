<div>
    <h1>All Posts</h1>
    <hr>

    @forelse ($posts as $post)
        <div>
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['content'] }}</p>
        </div>
    @empty
        <div>
            <p>No Post Available</p>
        </div>
    @endforelse
</div>
