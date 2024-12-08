<div id="m-viewed" class="container tab-pane active">
    @forelse ($most_viewd_posts as $post)
        <div class="tn-news">
            <div class="tn-img">
                <img src="{{$post->images->first()->path}}" />
            </div>
            <div class="tn-title">
                <a href="">{{ $post->title }}</a>
                @if ($post->views)
                    <span class="text-success">{{ $post->views }}</span>
                @endif
            </div>
        </div>
    @empty

        <div class="alert alert-warning">
            No Data
        </div>
    @endforelse

</div>
