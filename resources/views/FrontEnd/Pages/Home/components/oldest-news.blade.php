<div id="oldest" class="container tab-pane active">
    @forelse ($oldest as $post)
        <div class="tn-news">
            <div class="tn-img">
                <img src="{{$post->images->first()->path}}" />
            </div>
            <div class="tn-title">
                <a href="">{{$post->title}}</a>
            </div>
        </div>
        @empty
        nodata
    @endforelse
</div>
