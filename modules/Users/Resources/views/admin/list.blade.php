@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Danh Sách Người Dùng</h2>
                <hr class="colorgraph">
                @if(Session::has('success'))
                    <div class="alert alert-danger message-success">
                        <a data-dismiss="alert" class="close">×</a>
                        <p> {{ Session::get('success') }}</p>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger message-error">
                        <a data-dismiss="alert" class="close">×</a>
                        <p> {{ Session::get('error') }}</p>
                    </div>
                @endif
                {{Form::open(array('url'=> route('list_user'), 'class'=>'form-inline', 'method'=>'get'))}}
                <div  style=" margin-bottom: 20px">
                    <div class="form-group">
                        <input style="height: 29px" class="form-control" name="username" id="username" placeholder="Tên Đăng Nhập" value="{{isset($filter['username']) ? $filter['username'] : ''}}">
                    </div>
                    <div class="form-group">
                        <input style="height: 29px" class="form-control" name="name" id="name" placeholder="Tên Người Dùng" value="{{isset($filter['name']) ? $filter['name'] : ''}}">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="hidden-sm glyphicon glyphicon-search"></i> Search
                    </button>
                </div>
                {{Form::close()}}
                <table class="table table-bordered table-responsive table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Tên Đăng Nhập</th>
                        <th>Người Dùng</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Sinh</th>
                        <th>Giới Tính</th>
                        <th>Chức Danh</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $v)
                        <tr>
                            <td><a href="{{route('detail_user', ['id' => $v->id])}}">{{ $v->username }}</a></td>
                            <td>{{ $v->firstname.' '.$v->lastname }}</td>
                            <td>{{ $v->email }}</td>
                            <td>{{ $v->tel }}</td>
                            <td>{{ $v->addr }}</td>
                            <td>{{ $v->birthday }}</td>
                            <td>{{ $v->gender ? \App\Helpers\Constant::$gender[$v->gender] : ''}}</td>
                            <td>{{ $v->role ? \App\Helpers\Constant::$role[$v->role] : ''}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop