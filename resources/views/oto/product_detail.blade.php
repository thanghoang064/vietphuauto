@inject('mobiledetect','Mobile_Detect')
@extends('oto.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ mix('frontend_static/css/product_detail_insight.min.css') }}">
    <style>

     @media only screen and (max-width: 414px)
    {
        .comments-container {
            width: 414px !important;
        }
    }

    @media only screen and (max-width: 375px)
    {
        .comments-container{  width: 80% !important;}
    }

    </style>
@endsection
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="wrapper clearfix">
                <div class="breadcrumb-box">
                    <i class="fa fa-home" aria-hidden="true" style=""></i>
                    <ul class="breadcrumb" style="">
                        <li><a href="/">Trang chủ</a></li>
                        <li>
                            <a href="{{ route('get.menu.action',[str_slug_fix($product->menu->m_title),$product->pro_menu_id]) }}">{{ $product->menu->m_title }}</a>
                        </li>
                        <li><a href="#">{{ $product->pro_name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="main-content" style="margin-top: 20px;">
        <div class="container">

            <div class="row main-height" >
                <div class="col-md-10">
                    <div id="gioi-thieu" class="tab-content-item zing-content">
                        <h1 class="tab-content-title text-left"><strong>{{ $product->pro_name }}</strong></h1>
                        <div class="image-preview-container">
                            <div class="row" id="info">
                                <div class="col-sm-8">
                                    @if( !$mobiledetect->isMobile())
                                        @if (isset($product->images))
                                            <div class="list__image__product">
                                                @foreach($product->images as $image)
                                                    <div class="mySlides">
                                                        <div class="numbertext">1 / 6</div>
                                                        <img data-src="{{ pare_url_file($image->pi_name) }}" src="{{ asset('images/preloader.gif') }}" class="lazy" alt="{{ $product->pro_name }}" style="width:100% !important;height: 350px !important;">
                                                    </div>
                                                @endforeach
                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                                <div class="list__image__product-nav" style="margin-top: 10px;">
                                                    @foreach($product->images as $key => $image)
                                                        <div class="column" style="margin-bottom: 5px;">
                                                            <img class="demo cursor lazy" src="{{ asset('images/preloader.gif') }}" data-src="{{ pare_url_file($image->pi_name) }}" style="width:100% !important;height: 90px !important;" onclick="currentSlide({{ $key + 1 }})" alt="{{ $product->pro_name }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @else
                                        <img src="" alt="">
                                    @endif
                                </div>

                                <div class="col-sm-4">
                                    <div class="info__product">
                                        <h4>Thông tin cơ bản</h4>
                                        <div class="info__product-price" style="padding: 20px;border-radius: 5px;">
                                            <div class="info__product-item">
                                                <span><i class="fa fa-check"></i> Giá </span><span><b>{{ number_format($product->pro_price,0,',','.') }} VNĐ</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info__contact" >
                                        <h4>Đặt lịch xem xe <i class="fa fa-phone fa-spin fa-3x fa-fw"></i></h4>
                                        <form action="" id="info__contact-form" style="background-color: #e0e1e3;padding: 20px;border-radius: 5px;">
                                            <input type="text" name="name" value="{{ isset($user) ? $user->name : '' }}" placeholder="Mời nhập tên" class="form-control">
                                            <input type="email" name="email" value="{{ isset($user) ? $user->email : '' }}" placeholder="Mời nhập email" class="form-control">
                                            <input type="number" placeholder="Số điện thoại" value="{{ isset($user) ? $user->phone : '' }}" name="number" class="form-control">
                                            <input type="date" name="date" min="{{ \Carbon\Carbon::now()->format('Y-m-d')  }}" class="form-control">
                                            <input type="text" name="messages" placeholder="Ghi chú" class="form-control">
                                            <button class="btn btn-default" id="submit--info" data-url="{{ route('ajax.post.guest.saveinfo') }}" data-id="{{ $product->id }}">
                                                <i class="fa fa-save"></i> Xác nhận thông tin
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ .image-preview-container -->
                        <div class="row" id="content" style="margin-top: 20px;">
                            <div class="col-md-12">
                                <!-- Nav tabs -->
                                <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a data-href="#moTa_tab" class="tab_menu_replate" aria-controls="moTa" role="tab" data-toggle="tab">Mô tả</a>
                                        </li>
                                        <li role="presentation">
                                            <a data-href="#detail_tab" class="tab_menu_replate" aria-controls="home" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                                        </li>
                                        <li role="presentation">
                                            <a data-href="#info_tab" class="tab_menu_replate" aria-controls="profile" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="moTa_tab">
                                            <table>
                                                <tr>
                                                    <th>Kiểu dáng</th>
                                                    <th>Màu nội thất</th>
                                                    <th>Dung tích động cơ</th>
                                                    <th>Xuất xứ</th>
                                                    <th>Nhiên liệu</th>
                                                    <th>Năm SX</th>
                                                    <th>Hộp số</th>
                                                    <th>Số chỗ ngồi</th>
                                                    <th>KM đã đi</th>
                                                    <th>Dẫn động</th>
                                                    <th>Màu xe</th>
                                                    <th>Số cửa</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $productValue->designs }}</td>
                                                    <td>{{ $productValue->interior_color }}</td>
                                                    <td>{{ $productValue->engine_capacity }}</td>
                                                    <td>{{ $productValue->getOrigin() }}</td>
                                                    <td>{{ $productValue->getFuel() }}</td>
                                                    <td>{{ $productValue->year_of_manufacturing }}</td>
                                                    <td>{{ $productValue->gear }}</td>
                                                    <td>{{ $productValue->number_of_seats }}</td>
                                                    <td>{{ $productValue->went }}</td>
                                                    <td>{{ $productValue->drive }}</td>
                                                    <td>{{ $productValue->car_color }}</td>
                                                    <td>{{ $productValue->door_number }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane " id="detail_tab">{!! $product->pro_content !!}</div>
                                        <div role="tabpanel" class="tab-pane" id="info_tab">{!! $product->pro_specifications !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="comment">
                            <div class="comments-container">
                                @auth('web')
                                <form style="padding: 20px;">
                                    <div class="form-group">
                                        </ul>
                                        <label for="comment">Bình luận của bạn</label>
                                        <ul class="list-inline" title="Average Rating">
                                            @for($count = 1; $count <= 5; $count++)
                                            @php
                                                $color = 'color:#ccc;';
                                            @endphp
                                            <li title="Đánh giá"
                                            name="raiting"
                                            id="{{$product->id}}-{{$count}}"
                                            data-index="{{$count}}"
                                            data-products_id="{{$product->id}}"
                                            data-rating="{{$rating}}"
                                            class="rating"
                                            style="cursor:pointer; {{$color}}; font-size:30px;">
                                               &#9733
                                            </li>
                                            @endfor
                                    </ul>
                                    @endif
                                    <label for="comment">Bình luận của bạn</label>
                                    <textarea name="comment" id="content--comment" class="form-control"
                                        rows="3"></textarea>
                                </div>
                                <button type="submit" data-url="{{ route('ajax.comment.add') }}"
                                    data-id="{{$product->id}}" data-type="1" data-parent="0" id="post--comment"
                                    class="btn btn-success">Gửi bình luận</button>
                            </form>
                            <h4> Bình luận và đánh giá của khách hàng </h4>
                            @else
                            <a target="_blank" href="{{ route('get.login') }}">Đăng nhập để bình luận tại đây</a>
                            @endauth
                            @if (\Auth::check())
                            <ul class="list-inline" title="Average Rating">
                                @for($count = 1; $count <= 5; $count++) @php if ($count <=$rating) {
                                    $color='color:#ffcc00;' ; }else { $color='color:#ccc;' ; } @endphp <li
                                    title="Đánh giá" {{-- id="{{$product->id}}-{{$count}}" data-index="{{$count}}"
                                    data-products_id="{{$product->id}}" --}} data-rating="{{$rating}}" class="rating"
                                    style="{{$color}}; font-size:20px;">
                                    &#9733
                                    </li>
                                    @endfor
                            </ul>

                            <ul id="comments-list" class="comments-list">
                                @foreach($comments as $item)
                                @if ($item->com_type === 1)
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar">
                                            <img src="{{ $item->user->avatar }}"
                                                onerror="this.onerror=null;this.src='/images/placeholder.png';" alt="">
                                        </div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><b>{{$item->user->name}}</b></h6>
                                                <span>{{$item->created_at}}</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content" style="font-size: 14px;">
                                                {{$item->com_message}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Respuestas de los comentarios -->

                                                    <ul class="comments-list reply-list">
                                                        <li>
                                                            <!-- Avatar -->
                                                            <div class="comment-avatar">
                                                                <img src="{{ asset('favicon.png') }}" alt="avatar">
                                                            </div>
                                                            <!-- Contenedor del Comentario -->
                                                            <div class="comment-box">
                                                                <div class="comment-head">
                                                                    <h6 class="comment-name"><b href="#">Admin</b></h6>
                                                                    <span>{{ $item->created_at }}</span>
                                                                </div>
                                                                <div class="comment-content">Cảm ơn bạn đã quan tâm sản phẩm. Nhân viên chăm sóc khách hàng sẽ liên hệ với bạn hoạc hãy liên hệ với hotline : {{ isset($information) ? $information->if_phone : '' }} để được tư vấn nhanh nhất</div>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @endif
                                             
                                            @endforeach
                                            
                                        </ul>
                                          @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sidebar-widget widget-gia-xe">
                        <div class="widget-sub">
                            <div class="nav__product clearfix">
                                <ul>
                                    <li><a href="#info"><span>1.</span> Thông tin cơ bản</a></li>
                                    <li><a href="#content"><span>2.</span> Nội dung</a></li>
                                    <li><a href="#comment"><span>3.</span> Comment</a></li>
                                    <li><a href="#product_sugget"><span>4.</span>Sản phẩm liên quan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price-car" id="product_sugget">
        <div class="container">
            <h3 class="box-title">
                <strong>Sản phẩm liên quan</strong>
            </h3>
            <div class="slider-car">
                <div class="our-product-gird tab-content">
                    <div class="tab-pane fade in active">
                        <div class="owl-carousel">
                            @if ($productMenu)
                                @foreach($productMenu as $product)

                                    @php
                                        $product_slug_m = $product->pro_slug ? $product->pro_slug : str_slug_fix($product->pro_name);
                                    @endphp

                                    <div class="item-col-product">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="{{ route('get.product.detail',[$product_slug_m,$product->id]) }}" title="{{ $product->pro_name }}">
                                                <img data-src="{{ pare_url_file($product->pro_avatar) }}" src="{{ asset('images/preloader.gif') }}" alt="{{ $product->pro_name }}" class="img-responsive lazy" style="height: 180px;width: 100%">
                                                </a>
                                            </div>
                                            <div class="product-text">
                                                <div class="product-name">
                                                    <h3 class="product-title">
                                                        <a href="{{ route('get.product.detail',[$product_slug_m,$product->id]) }}" title="{{ $product->pro_name }}" class="color-setting">{{ $product->pro_name }}</a>
                                                    </h3>
                                                    <div class="product-price-one">
                                                        <span class="color-setting" style="color: red;">{{ number_format($product->pro_price,0,',','.') }} VNĐ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>var HREF_CSS = "{{  mix('frontend_static/css/product_detai.min.css') }}"</script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script>
        
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }        
    </script>  
    <script>

        //remove_bgr
        function remove_bgr(products_id)
        {
            for (var count = 1; count <=5; count++) {
                $('#'+products_id+'-'+count).css("color", "#ccc");                
            }
        }
    
        // hover 
        $(document).on('click','.rating', function () {
            var index = $(this).data("index");
            var products_id = $(this).data("products_id");
        
           remove_bgr(products_id);
           for (var count = 1; count <=index; count++) {
                $('#'+products_id+'-' +count).css("color", "#ffcc00");                
            }      
        });
  
        $(document).on('click', '.rating', function(){
            var index = $(this).data("index");
            var products_id = $(this).data("products_id");     
           
            fetch("insert_rating", {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json, text-plain, */*",
                            "X-Requested-With": "XMLHttpRequest",
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        body: JSON.stringify({
                            index: index,
                            products_id: products_id
                        })
                    })
                    .then(function(res) {
                        return res.json();
                    })
                    .then(function(data) {
                        if (data.status) {
                            return res.json();
                        }
                    })

            })        
        </script>
        <script>
        let increaseViewUrl = "{{route('product.tangView')}}";
        const data = {
            id: {{$product->id}},
            _token: "{{csrf_token()}}"
        };
        setTimeout(() => {
            fetch(increaseViewUrl, {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(responseData => responseData.json())
                .then(productObj => {
                   
                    // document.querySelector('#viewNumber').innerText = "Lượt xen : "+productObj.view;
                })
        }, 3000);
    </script>
@endsection
