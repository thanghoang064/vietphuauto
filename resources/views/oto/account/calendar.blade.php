@inject('mobiledetect','Mobile_Detect')
@extends('oto.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ mix('frontend_static/css/home_insight.min.css') }}">

@endsection
@section('content')
    <div class="container" style="margin-bottom: 50px">
        <div class="col-md-3">
            @include('oto.account.menu')
        </div>
        <div class="col-md-9">
            <a href="#" class="list-group-item list-group-item-action active" style="color:#FFF !important; ">
                Danh sách lịch xem xe
            </a>
            <div style="margin-top: 15px">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Sản phẩm </th>
                            <th scope="col">Ngày xem xe</th>
                            <th scope="col">Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $key => $order)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ isset($order->product) ? $order->product->pro_name : '' }}</td>
                                <td>{{ $order->car_viewing_day }}</td>
                                <td>{{ $order->o_messages }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $orders->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>var HREF_CSS = "{{  mix('frontend_static/css/home.min.css') }}"</script>
@endsection
