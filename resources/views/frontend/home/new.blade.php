 <section class="section">
     <div class="bg section-bg fill bg-fill  bg-loaded"></div><!-- .section-bg -->
     <div class="section-content relative">
         <div class="row row-small align-center sp-ban-chay" id="row-1673049309">
             <div class="col small-12 large-12" data-animate="fadeInLeft">
                 <div class="col-inner text-center">
                     <h3 class="tieu-de"><b></b>Tin tức<b></b></h3>
                     <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                         data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                         @foreach ($blog as $item)
                            <div class="col post-item">
                                <div class="col-inner">
                                    <a href="" class="plain">
                                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                    <img width="752" height="397"
                                                        src="{{$item->image}}"
                                                        class="attachment-original size-original wp-post-image"
                                                        alt=""
                                                        srcset="{{$item->image}}"
                                                        sizes="(max-width: 752px) 100vw, 752px" />
                                                </div>
                                            </div><!-- .box-image -->
                                            <div class="box-text text-center">
                                                <div class="box-text-inner blog-post-inner">
                                                    <h5 style="min-height:70px;" class="post-title is-large uppercase">{{$item->name}}
                                                    </h5>
                                                    <div class="is-divider">{{$item->subname}}</div>
                                                    <div class="from_the_blog_excerpt " style="display:-webkit-box; overflow:hidden; text-overflow:ellipsis;-webkit-box-orient:vertical;-webkit-line-clamp:3;">
                                                        {!! $item->description !!}
                                                    </div>
                                                </div><!-- .box-text-inner -->
                                            </div><!-- .box-text -->
                                        </div><!-- .box -->
                                    </a><!-- .link -->
                                </div><!-- .col-inner -->
                            </div><!-- .col -->
                         @endforeach
                     </div>
                     <div class="gap-element" style="display:block; height:auto; padding-top:20px" class="clearfix">
                     </div>
                     <div class="row large-columns-4 medium-columns- small-columns-2 row-normal"></div>
                 </div>
             </div>
         </div>
     </div><!-- .section-content -->
 </section>
