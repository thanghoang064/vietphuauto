@extends('admin::layouts.master')
@section('titlePage', 'Danh sách ')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

@section('content')

    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="./">
                        <i class="icon-graph"></i> &nbsp;Dashboard</a>
                    <a class="btn" href="#">
                        <i class="icon-settings"></i> &nbsp;Settings</a>
                </div>
            </li>
        </ol>

        <div class="container-fluid">
            <div id="ui-view" style="font-size: 13px;">
                <div>
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-responsive-sm datatable" id="example2" class="display"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Đánh giá trung bình</th>
                                                    <th>Thời gian</th>
                                                    
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($rating)
                                                    @foreach ($rating as $index => $item)
                                                        <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $item['product']['pro_name'] }}</td>
                                                           
                                                            <td>
                                                                <ul style="display: flex" class="list-inline"
                                                                    title="Average Rating">
                                                                    @for ($count = 1; $count <= 5; $count++)
                                                                        @php
                                                                            if ($count <= $item['avg_rating']) {
                                                                                $color = 'color:#ffcc00;';
                                                                            } else {
                                                                                $color = 'color:#ccc;';
                                                                            }
                                                                        @endphp
                                                                        <li title="Đánh giá" class="rating"
                                                                            style="{{ $color }}; font-size:20px;">
                                                                            &#9733
                                                                        </li>
                                                                    @endfor
                                                                </ul>
                                                            </td>
                                                            {{-- <td>
                                                                <span
                                                                    class="badge badge-success">{{ $item->created_at }}</span>
                                                            </td> --}}


                                                            <td>
                                                                <a data-type='delete'
                                                                href="{{ route('ajax.post.rating.delete', $item['product']['id']) }}"
                                                                class="ropdown-item btn btn-sm btn-outline-danger comfirm_delete_ajax p-0-10"><i
                                                                    class="fa fa-trash-o"></i> Xoá</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <div id="box--modal"></div>



    <script>
        $(document).ready(function() {

            $("#example2").on('click', '#btn-status', function() {
                $(this).closest('tr').remove();
                location.reload(true);
            });

            $("#example").on('click', '#btnAll', function() {
                $(this).closest('tr').remove();
                location.reload(true);
            });


        });
    </script>
@endsection
