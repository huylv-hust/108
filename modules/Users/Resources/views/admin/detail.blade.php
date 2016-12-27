@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Thông Tin Người Dùng</h2>
                <hr class="colorgraph">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2">Tên Đăng Nhập</label>
                        <div class="col-sm-10">
                            {{$user->username}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Tên Người Dùng</label>
                        <div class="col-sm-10">
                            {{$user->firstname . ' ' . $user->lastname}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                            {{$user->email}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Số Điện Thoại</label>
                        <div class="col-sm-10">
                            {{$user->tel}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Địa Chỉ</label>
                        <div class="col-sm-10">
                            {{$user->addr}}
                        </div>
                    </div>
                    @if($user->birthday)
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2">Ngày Sinh</label>
                            <div class="col-sm-10">
                                {{$user->birthday}}
                            </div>
                        </div>
                    @endif
                    @if($user->gender)
                        <div class="form-group">
                            <label class="col-sm-2">Giới Tính</label>
                            <div class="col-sm-10">
                                {{\App\Helpers\Constant::$gender[$user->gender]}}
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="col-sm-2">Chức Vụ</label>
                        <div class="col-sm-10">
                            {{\App\Helpers\Constant::$role[$user->role]}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2">Ngày Tạo</label>
                        <div class="col-sm-10">
                            {{$user->created_at}}
                        </div>
                    </div>
                </form>
                <div>
                    <a href="{{ URL::previous() }}" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-arrow-left"></i> Quay Lại
                    </a>
                    <a href="{{ route('edit_user', ['id' => $user->id]) }}" class="btn btn-success btn-sm">
                        <i class="glyphicon glyphicon-edit"></i> Chỉnh Sửa
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop