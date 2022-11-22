@extends('admin::layouts.master')
@section('titlePage', 'Danh sách khách hàng')
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
            <li class="breadcrumb-item active">Order</li>
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
                                        <p style="font-size: 16px ; font-weight:bold">Thông tin trạng thái khách hàng đặt
                                            lịch xem xe trong thời gian qua
                                        </p>
                                        <table class="table table-responsive-sm" id="example2">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Tên khách hàng</th>
                                                    <th width="5%">Email</th>
                                                    <th width="7%">Phone</th>
                                                    <th width="10%%">Sản phẩm</th>
                                                    <th width="10%%">Ngày tạo</th>
                                                    <th width="10%">Trạng thái</th>
                                                    <th width="10%">Người xử lý</th>
                                                    <th width="5%">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($orders as $key =>  $order)

                                                    <tr data-url="">

                                                        <td class="component--guest-item">
                                                            <a href="{{ route('ajax.order.preview.order', $order->user->id) }}"
                                                                class=" component--preview--order">
                                                                {{ $order->user->name }}</a>
                                                        </td>
                                                        <td class="component--guest-item">{{ $order->user->email }}</td>
                                                        <td class="component--guest-item">{{ $order->user->phone }}</td>
                                                        <td class="component--guest-item">
                                                            {{ isset($order->product) ? $order->product->pro_name : '' }}
                                                        </td>
                                                        <td class="component--guest-item">{{ $order->created_at }}</td>
                                                        <td class="component--guest-item">
                                                            <a data-print={{ route('get.print', $order->id) }}
                                                                data-id={{ $order->id }}
                                                                data-deposit="{{ route('ajax.post.order.deposit') }}"
                                                                href="{{ route('ajax.order.preview.update', $order->id) }}"
                                                                class=" btn btn-outline-success  component--preview--order--update {{ $order->o_status == 5 || $order->o_status == 6  ? 'disabled' : '' }}"> 
                                                                @if ($order->o_status == 6)
                                                                    Đã hủy đơn
                                                                @elseif($order->o_status == 5)
                                                                    Đã mua 
                                                                @else 
                                                                    Edit
                                                                @endif
                                                            </a>

                                                        </td>
                                                        @if (Auth::user()->role[0]['id'] !== 1)
                                                            <td>
                                                                <select data-id="{{$order->id}}"  data-src="{{route('ajax.post.order.staff') }}" @if (Auth::user()->role[0]['id'] !== 1) disabled @endif
                                                                    class="form-select component--select" name="" id="">
                                                                    @foreach ($admins as $admin)
                                                                        @foreach ($admin->role as $role)
                                                                            @if ($role->id == Auth::user()->role[0]['id'])
                                                                                <option value="">
                                                                                    {{ Auth::user()->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                            </td>
                                                            </select>
                                                            </td>
                                                        @endif
                                                        
                                                        @if (Auth::user()->role[0]['id'] === 1)
                                                            <td> 
                                                                <select data-id="{{$order->id}}" data-src="{{route('ajax.post.order.staff')}}" class="p-2 form-select component--select" name="" id="">
                                                                
                                                                    @foreach ($admins as $admin)
                                                                    

                                                                        @if ($admin->id == $order->admin_id)
                                                                        <option value="{{$admin->id}}" selected>{{$admin->name}}</option>
                                                                        @else 
                                                                        <option value="{{$admin->id}}" >{{$admin->name}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                        @endif
                                                        <td>

                                                            <div class="box--action">
                                                                <div class="form-group">
                                                                    <a href="{{ route('get.edit.order', $order->id) }}"
                                                                        class="mb-3  btn btn-sm btn-outline-success p-0-10"><i
                                                                            class="fa fa-edit"></i> Chi tiết</a>


                                                                    <a data-type='delete'
                                                                        href="{{ route('ajax.post.order.delete', $order->id) }}"
                                                                        class="ropdown-item btn btn-sm btn-outline-danger comfirm_delete_ajax p-0-10"><i
                                                                            class="fa fa-trash-o"></i> Xoá</a>

                                                                    {{-- @if ($order->o_status == 2) --}}
                                                                    {{-- <a target="_blank"
                                                                        href="{{ route('get.print', $order->id) }}"
                                                                        @if ($order->o_status != 2 && $order->o_status != 5) style="display:none;" @endif
                                                                        class="ropdown-item btn btn-sm hopdong hopdong-{{ $order->id }} btn btn-outline-success c p-0-10">
                                                                        In hợp đồng đặt cọc</a> --}}
                                                                    {{-- @endif --}}
                                                                </div>
                                                            </div>


                                                        </td>
                                                    </tr>
                                                @empty
                                                    <p> Dữ liệu đang được cập nhật</p>
                                                @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                          <div class="text-center">
                            {{ $orders->links() }}
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="box--modal"></div>





@endsection

