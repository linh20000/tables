<aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
    <span class="widget-title"><span>Bài viết &#8211; Tin tức</span></span>
    <div class="is-divider small"></div>
    <ul>
        @foreach ($blog as $item)
            <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                    <div class="flex-col mr-half">
                        <div class="badge post-date badge-square">
                            <div class="badge-inner bg-fill"
                                style="
                                background: linear-gradient(
                                    rgba(0, 0, 0, 0.5),
                                    rgba(0, 0, 0, 0.2)
                                    ),
                                    url({{$item->image}});
                                color: #fff;
                                text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
                                border: 0;
                                ">
                                <span class="post-date-day">{{$item->created_at->format('d')}}</span><br />
                                <span class="post-date-month is-xsmall">{{$item->created_at->format('M')}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- .flex-col -->
                    <div class="flex-col flex-grow">
                        <a href="{{route('detailBlog',[$item->id, Str::slug($item->name)])}}" title="{{$item->name}}">{{$item->name}}</a>
                        <span class="post_comments oppercase op-7 block is-xsmall">
                        </span>
                    </div>
                </div>
                <!-- .flex-row -->
            </li>
        @endforeach
    </ul>
</aside>