
    <!-- Breadcrumb Section Begin -->
   
    <!-- Breadcrumb Section End -->

    <!-- Product Detail Section Begin -->
    <section class="product-detail spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic">
					<img src="{{ asset('Template/img/products/' . $baitap->image_path) }}" alt="{{ $baitap->na_me }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details">
                        <h2 class="product-name">{{ $baitap->na_me }}</h2>
                        <div class="product-price">
                            <span class="new-price">${{ $baitap->price }}</span>
                        </div>
                        <p class="product-description"></p>

                        <!-- Thêm các thông tin khác về sản phẩm (mô tả, giá, ...) tại đây -->

                        <!-- Nút thêm vào giỏ hàng -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail Section End -->

    <!-- ... (Mã HTML khác) ... -->
