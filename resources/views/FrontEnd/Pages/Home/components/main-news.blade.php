<div class="row">
    @forelse ($posts as $post)
        <div class="col-md-4">
            <div class="mn-img">
                <img src="{{ $post->images->first()->path }}" />
                <div class="mn-title">
                    <a href="">{{ $post->title }}</a>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning">No Data</div>
    @endforelse
</div>
<div class="d-felx justify-content-center">
    <div>
        {{ $posts->links() }}
    </div>
</div>
