<article id="post-1466" class="post-1466 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-bai-viet">
	<div class="article-inner ">
		<header class="entry-header">
            <div class="entry-header-text entry-header-text-top  text-left">
                <h6 class="entry-category is-xsmall">
                    <a href="{{route('showNewTitle')}}" rel="category tag">Tin tức - bài viết</a>
                </h6>
                <h1 class="entry-title">{{$details_blog->name}}</h1>
                <div class="entry-divider is-divider small"></div>
                <div class="entry-meta uppercase is-xsmall">
                    <span class="posted-on">Posted on 
                        <a href="" rel="bookmark">
                            <time class="entry-date published" datetime="{{$details_blog->created_at}}">{{$details_blog->created_at->format('d/m/Y')}}</time>
                            <time class="updated" datetime="{{$details_blog->updated_at}}">{{$details_blog->updated_at->format('d/m/Y')}}</time>
                        </a>
                    </span>
                    <span class="byline"> by 
                        <span class="meta-author vcard">
                            <a class="url fn n">admin</a>
                        </span>
                    </span>
                </div><!-- .entry-meta -->
            </div><!-- .entry-header -->
            <div class="entry-image relative">
                <a>
                    <img width="752" height="397" src="{{$details_blog->image}}" class="attachment-large size-large wp-post-image" alt="" srcset="{{$details_blog->image}}" sizes="(max-width: 752px) 100vw, 752px">
                </a>
                <div class="badge absolute top post-date badge-square">
                    <div class="badge-inner">
                        <span class="post-date-day">{{$details_blog->created_at->format('d')}}</span><br>
                        <span class="post-date-month is-small">Th{{$details_blog->created_at->format('m')}}</span>
                    </div>
                </div>	
            </div><!-- .entry-image -->
        </header><!-- post-header -->
		<div class="entry-content single-page">
            <p>{!! $details_blog->description !!}</p>
            {{-- <div class="blog-share text-center">
                <div class="is-divider medium"></div>
                <div class="social-icons share-icons share-row relative icon-style-outline ">
                    <a href="" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium tooltipstered">
                        <i class="icon-phone"></i>
                    </a>
                    <a href="" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered">
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered">
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="" rel="nofollow" class="icon button circle is-outline tooltip email tooltipstered">
                        <i class="icon-envelop"></i>
                    </a>
                    <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest tooltipstered">
                        <i class="icon-pinterest"></i>
                    </a>
                    <a href="" target="_blank" class="icon button circle is-outline tooltip google-plus tooltipstered" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow">
                        <i class="icon-google-plus"></i>
                    </a>
                    <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin tooltipstered">
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div> --}}
        </div><!-- .entry-content2 -->
        {{-- <footer class="entry-meta text-left">
            This entry was posted in 
            <a href="" rel="category tag">Tin tức - bài viết</a>
            . Bookmark the 
            <a href="" title="Permalink to Tổng quan sản phẩm bàn KD19" rel="bookmark">permalink</a>.
        </footer><!-- .entry-meta --> --}}
        <nav role="navigation" id="nav-below" class="navigation-post">
            <div class="flex-row next-prev-nav bt bb">
                <div class="flex-col flex-grow nav-prev text-left">
                    <div class="nav-previous">
                        <a href="http://banhocthongminh.namdinhweb.com/chon-ban-hoc-cho-tre-nhung-dieu-can-luu-y/" rel="prev">
                            <span class="hide-for-small">
                                <i class="icon-angle-left"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex-col flex-grow nav-next text-right"></div>
            </div>
	    </nav><!-- #nav-below -->
    </div><!-- .article-inner -->
</article><!-- #-1466 -->