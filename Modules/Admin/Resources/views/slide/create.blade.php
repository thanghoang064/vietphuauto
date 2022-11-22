@extends('admin::layouts.master')
@section('titlePage','Thêm mới slide')
@section('content')
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                <a href="#">Slide</a>
            </li>
            <li class="breadcrumb-item active">Create</li>

        </ol>
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="animated fadeIn">
                        @include('admin::slide.form')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection