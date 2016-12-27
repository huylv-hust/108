@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Chỉnh Sửa Thông Tin Người Dùng</h2>
                <hr class="colorgraph">
                {{Form::open(array('url'=> route('edit_user', $user->id), 'class'=>'', 'method'=>'post'))}}
                <div class="form-group">
                    <label>Tên Đăng Nhập</label><span class="red"> * </span>
                    <p>{{$user->username}}</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Tên</label><span class="red"> * </span>
                            {{Form::text('firstname', $user->firstname , array('class'=>'form-control', 'placeholder' => 'Tên'))}}
                            @if($errors->first('firstname'))
                                <label class="text-danger">{{$errors->first('firstname')}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Họ</label><span class="red"> * </span>
                            {{Form::text('lastname', $user->lastname , array('class'=>'form-control', 'placeholder' => 'Họ'))}}
                            @if($errors->first('lastname'))
                                <label class="text-danger">{{$errors->first('lastname')}}</label>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    {{Form::text('addr', $user->email , array('class'=>'form-control', 'placeholder' => 'Email'))}}
                    @if($errors->first('addr'))
                        <label class="text-danger">{{$errors->first('addr')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    {{Form::text('addr', $user->addr , array('class'=>'form-control', 'placeholder' => 'Địa Chỉ'))}}
                    @if($errors->first('addr'))
                        <label class="text-danger">{{$errors->first('addr')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label>Điện Thoại</label><span class="red"> * </span>
                    {{Form::text('tel', $user->tel , array('class'=>'form-control', 'placeholder' => 'Điện Thoại'))}}
                    @if($errors->first('tel'))
                        <label class="text-danger">{{$errors->first('tel')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label>Mật Khẩu</label><span class="red"> * </span>
                    {{Form::text('password', $user->password , array('class'=>'form-control', 'placeholder' => 'Mật Khẩu'))}}
                    @if($errors->first('password'))
                        <label class="text-danger">{{$errors->first('password')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nhập Lại Mật Khẩu</label><span class="red"> * </span>
                    {{Form::text('password_confirm', $user->password , array('class'=>'form-control', 'placeholder' => 'Nhập Lại Mật Khẩu'))}}
                    @if($errors->first('password_confirm'))
                        <label class="text-danger">{{$errors->first('password_confirm')}}</label>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <label>Ngày Sinh</label>
                        <div class="form-group">
                            {{Form::text('birthday', $user->password , array('class'=>'form-control', 'placeholder' => 'Ngày Sinh', 'id' => 'birthday'))}}
                            <script>
                                $('#birthday').datepicker({
                                    format: 'yyyy-mm-dd',
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="form-group">
                            <label>Gender</label>
                            {{Form::select('gender',\App\Helpers\Constant::$gender, $user->gender, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="{{ URL::previous() }}" class="btn btn-success btn-sm">
                        <i class="glyphicon glyphicon-arrow-left"></i> Quay Lại
                    </a>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="glyphicon glyphicon-edit"></i> Chỉnh Sửa
                    </button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>

@stop