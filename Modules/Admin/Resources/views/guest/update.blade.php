@extends('admin::layouts.master')
@section('titlePage','Cập nhật thông tin khách hàng')
@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                <a href="#">Menu</a>
            </li>
            <li class="breadcrumb-item active">Create</li>

        </ol>
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="animated fadeIn">
                        @include('admin::guest.form')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection