 <section class="section">
     <div class="bg section-bg fill bg-fill  bg-loaded"></div><!-- .section-bg -->
     <div class="section-content relative">
         <div class="row row-small align-center sp-ban-chay" id="row-1673049309">
             <div class="col small-12 large-12" data-animate="fadeInLeft">
                 <div class="col-inner text-center">
                     <h3 class="tieu-de"><b></b>Đánh giá khách hàng<b></b></h3>
                     <div class="row large-columns-2 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                         data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                         @foreach ($feedback as $item)
                             <div class="col hide-for-small medium-6 small-12 large-6">
                                 <div class="col-inner">
                                     <div class="icon-box featured-box icon-box-left text-left">
                                         <div class="icon-box-img" style="width: 60px">
                                             <div class="icon">
                                                 <div class="icon-inner" style="color:rgb(0, 0, 0);">
                                                     <img width="242" height="239" src="{{ $item->avatar }}"
                                                         srcset="{{ $item->avatar }}"
                                                         class="attachment-medium size-medium" alt="" />
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="icon-box-text last-reset">
                                             <p>
                                                 <span style="font-size: 85%;">{{ $item->comment }}</span>
                                             </p>
                                         </div>
                                     </div><!-- .icon-box -->
                                 </div>
                             </div>
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
