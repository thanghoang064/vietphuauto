@extends('admin::layouts.master')
@section('titlePage','Danh sách Admin')
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
                                    <div class="card-header">
                                        <a class="btn btn-primary btn-sm" href="{{ route('get.create.admin') }}">
                                            <i class="icon-plus icons"></i> Thêm mới
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th width="2%">[id]</th>
                                                <th width="8%">Hình ảnh</th>
                                                <th width="15%">Tên</th>
                                                <th width="15%">Email</th>
                                                <th width="20%">Phone</th>
                                                <th width="20%">Vai trò</th>
                                                <th width="20%">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($admins as $admin)
                                        
                                                <tr data-id="{{ $admin->id }}">
                                                    <td>[{{ $admin->id }}]</td>
                                                    <td><img src="{{ asset('images/placeholder.png') }}" alt="" class="w-h-80 "></td>
                                                    <td>{{ $admin->name }} </td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->phone }}</td>
                                                    <td>
                                                        @foreach($admin->role as $role)
                                                            <lable class="badge badge-danger p-1">{{ $role->name }}</lable>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('get.edit.admin',$admin->id) }}" class="btn btn-sm btn-outline-success p-0-10"><i class="fa fa-edit"></i> Sửa</a>

                                                        <a data-type ='delete' href="{{ route('ajax.post.delete.admin',$admin->id) }}" class="comfirm_delete_ajax btn btn-sm btn-outline-danger p-0-10"><i class="fa fa-trash-o"></i> Xoá</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <p> Dữ liệu đang được cập nhật</p>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=" col-sm-12 pull-right">
                                        {{ $admins->links() }}
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
@endsection