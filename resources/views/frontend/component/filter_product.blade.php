<div class="shop-page-title category-page-title page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
        <div class="is-large">
            <nav class="woocommerce-breadcrumb breadcrumbs">
            <a href="{{route('showHome')}}">Trang chủ</a>
            <span class="divider">&#47;</span> SẢN PHẨM
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
        <form class="woocommerce-ordering" method="get">
            <select name="orderby" class="orderby">
            <option value="menu_order" selected="selected">Mặc định</option>
            <option value="popularity">Xem nhiều nhất</option>
            <option value="rating">Đánh giá cao</option>
            <option value="date">Hàng mới nhất</option>
            <option value="price">Giá từ thấp đến cao</option>
            <option value="price-desc">Giá từ cao đến thấp</option>
            </select>
        </form>
        </div>
        <!-- .flex-right -->
    </div>
    <!-- flex-row -->
</div>