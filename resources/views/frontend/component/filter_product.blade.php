<div class="shop-page-title category-page-title page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
        <div class="is-large">
            <nav class="woocommerce-breadcrumb breadcrumbs">
            <a href="{{route('showHome')}}">Trang chủ</a>
            <span class="divider">&#47;</span> Danh sách sản phẩm
            </nav>
        </div>
        <div class="category-filtering category-filter-row">
            <div data-open="#shop-sidebar" data-pos="left" class="filter-button uppercase plain" >
            <i class="icon-menu"></i>
            <strong>Lọc</strong>
            </div>
            <div class="inline-block"></div>
        </div>
        </div>
        <!-- .flex-left -->

        <div class="flex-col medium-text-center">
        <p class="woocommerce-result-count hide-for-medium">
            Hiển thị 1&ndash;12 trên 15 sản phẩm
        </p>
        <a style="cursor:pointer; display:inline; padding:4px; background-color:#999;color:#fff; margin:0 4px; border-radius:3px;" class=" primary"  onclick="window.location.href=`{{request()->fullUrlWithQuery(['created_at' => 'desc'])}}`">Mới nhất </a> 
        <a style="cursor:pointer; display:inline; padding:4px; background-color:#999;color:#fff; margin:0 4px; border-radius:3px;" class=" primary"  onclick="window.location.href=`{{request()->fullUrlWithQuery(['created_at' => 'asc'])}}`">Cũ nhất </a> 
        <a style="cursor:pointer; display:inline; padding:4px; background-color:#999;color:#fff; margin:0 4px; border-radius:3px;" class=" primary"  onclick="window.location.href=`{{request()->fullUrlWithQuery(['price' => 'desc'])}}`">Giá từ cao xuống thấp </a> 
        <a style="cursor:pointer; display:inline; padding:4px; background-color:#999;color:#fff; margin:0 4px; border-radius:3px;" class=" primary"  onclick="window.location.href=`{{request()->fullUrlWithQuery(['price' => 'asc'])}}`">Giá từ thấp tới cao </a> 
        <a style="cursor:pointer; display:inline; padding:4px; background-color:#cb2b2b;color:#fff; margin:0 4px; border-radius:3px;" class=" primary"  onclick="window.location.href=`{{Request::URL()}}`"> Xóa bộ lọc</a>
        </div>
        <!-- .flex-right -->
    </div>
    <!-- flex-row -->
</div>