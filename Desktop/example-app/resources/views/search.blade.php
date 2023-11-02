@extends('shop')
@section('content')
    <!-- Breadcrumb Section Begin -->
    
    <!-- Breadcrumb Section End -->

    <!-- Search Section Begin -->
    
            <div class="row">
                @if(count($baitap) > 0)
                    @foreach($baitap as $pro)
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{ asset('Template/img/products/' . $pro->image_path) }}" alt="{{ $pro->na_me }}">
                                    <!-- Hiển thị thông tin sản phẩm tại đây -->
                                </div>
                                <div class="pi-text">
                                        <div class="catagory-name">Towel</div> 
                                        <a href="#">
                                            <h5>{{ $pro->na_me}}</h5>
                                        </a>
                                        <div class="product-price">
                                            <p>{{$pro->price}}$</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12">
                        <div class="alert alert-info">
                            No products found for '{{ $query }}'.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Search Section End -->

    <!-- ... (Mã HTML khác) ... -->

@endsection
