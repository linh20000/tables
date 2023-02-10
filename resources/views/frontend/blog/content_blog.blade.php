<div id="row-1499381707" class="row large-columns-3 medium-columns- small-columns-1 row-masonry" data-packery-options="{&quot;itemSelector&quot;: &quot;.col&quot;, &quot;gutter&quot;: 0, &quot;presentageWidth&quot; : true}" style="position: relative; height: 312.236px;">
    @foreach ($blog as $item)
        <div class="col post-item" style="position: absolute; left: 0px; top: 0px;">
            <div class="col-inner">
                <a href="{{route('detailBlog', [$item->id, Str::slug($item->name)])}}" class="plain">
                    <div class="box box-text-bottom box-blog-post has-hover">
                        <div class="box-image">
                            <div class="image-cover" style="padding-top:56%;">
                                <img width="300" height="158" src="{{$item->image}}" class="attachment-medium size-medium wp-post-image" alt="" srcset="" sizes="(max-width: 300px) 100vw, 300px">  							  							  						
                            </div>
                        </div><!-- .box-image -->
                        <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                                <h5 class="post-title is-large " style="display:-webkit-box; overflow:hidden; text-overflow:ellipsis;-webkit-box-orient:vertical;-webkit-line-clamp:1; ">{{$item->name}}</h5>
                                <div class="is-divider"></div>
                                <div style="display:-webkit-box; overflow:hidden; text-overflow:ellipsis;-webkit-box-orient:vertical;-webkit-line-clamp:3;  ">
                                    <p class="from_the_blog_excerpt ">{!! $item->description !!}</p>
                                </div>
                            </div><!-- .box-text-inner -->
                        </div><!-- .box-text -->
                        <div class="badge absolute top post-date badge-square">
                            <div class="badge-inner">
                                <span class="post-date-day">{{$item->created_at->format('d')}}</span><br>
                                <span class="post-date-month is-xsmall">Th{{$item->created_at->format('m')}}</span>
                            </div>
                        </div>
                    </div><!-- .box -->
                </a><!-- .link -->
            </div><!-- .col-inner -->
        </div><!-- .col -->
    @endforeach
</div>
