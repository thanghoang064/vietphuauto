@extends('admin::layouts.master')
@section('titlePage','Cập nhật thông tin khách hàng')
@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                <a href="#">Order</a>
            </li>
        </ol>
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="animated fadeIn">
                        @include('admin::order.form')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection