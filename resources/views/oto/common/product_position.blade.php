<div class="widget-sub">
    <div class="gia-xe-menu">

        @if (isset($products))
            <h2 style="font-size: 16px;padding-bottom: 10px;text-transform: uppercase;font-weight: bold;padding-left: 25px;">Sản phẩm nổi bật</h2>
            @foreach($products as $product)

                @php
                    $image = 'images/placeholder.png';

                    if (isset($product->images))
                    {
                        $list_image_product = $product->images->toArray();
                        $image = pare_url_file(array_pop($list_image_product)['pi_name']);
                    }
                       $product_slug_po = $product->pro_slug ? $product->pro_slug : str_slug_fix($product->pro_name);
                @endphp

                <div class="text-center product-possion-item" style="box-shadow: 0 5px 20px rgba(0,0,0,.05);margin-bottom: 20px;padding: 10px 0">
                    <a href="{{ route('get.product.detail',[$product_slug_po,$product->id]) }}" style="display: flex;justify-content: center" class="clearfix" title="{{ $product->pro_name }}">
                        <img src="{{ asset('images/preloader.gif') }}" data-src="{{ $image }}" alt="{{ $product->pro_name }}" class="img lazy" style="width: 80%;height: 180px;display: block">
                    </a>
                    <h2><a href="{{ route('get.product.detail',[$product_slug_po,$product->id]) }}" title="{{ $product->pro_name }}"  style="font-size: 14px;text-transform: capitalize;color: #333;font-weight: 500">{{ $product->pro_name }}</a></h2>
                    <p style="font-size: 14px;color: #FF0000">{{ number_format($product->pro_price,0,',','.') }} VNĐ</p>
                </div>
            @endforeach
        @endif
    </div>
</div>