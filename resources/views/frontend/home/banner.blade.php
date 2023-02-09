<div class="slider-wrapper relative " id="slider-1503839533">
    <div class="slider slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal"
        data-flickity-options='{
        "cellAlign": "center",
        "imagesLoaded": true,
        "lazyLoad": 1,
        "freeScroll": false,
        "wrapAround": true,
        "autoPlay": 2500,
        "pauseAutoPlayOnHover" : true,
        "prevNextButtons": true,
        "contain" : true,
        "adaptiveHeight" : true,
        "dragThreshold" : 5,
        "percentPosition": true,
        "pageDots": false,
        "rightToLeft": false,
        "draggable": true,
        "selectedAttraction": 0.1,
        "parallax" : 0,
        "friction": 0.6        }'>
        @foreach ($banner as $item)
            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1221083562">
                <div class="img-inner image-cover dark" style="padding-top:38.25%;">
                    <img width="1920" height="745" src="{{ $item->thumbnail }}"
                        class="attachment-original size-original" alt="{{ $item->name }}"
                        srcset="{{ $item->thumbnail }}" sizes="(max-width: 1920px) 100vw, 1920px" />
                </div>
            </div>
        @endforeach

    </div>
    <div class="loading-spin dark large centered"></div>
</div><!-- .ux-slider-wrapper -->
