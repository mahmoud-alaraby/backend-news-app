<div id="latest" class="container tab-pane fade">
    @forelse ($posts->take(3) as $post)
        <div class="tn-news">
            <div class="tn-img">
                <img src="{{ $post->images->first()->path }}" />
            </div>
            <div class="tn-title">
                <a href="">{{ $post->title }}</a>
            </div>
        </div>
    @empty
        <div class="aler alert-warning">
            No Data
        </div>
    @endforelse
</div>
