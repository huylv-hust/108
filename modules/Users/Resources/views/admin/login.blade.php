@extends('users::layouts.login')

@section('content')
        {{Form::open(array('url'=> route('admin_login'), 'class'=>'form-signin', 'method'=>'post'))}}
        <div class="login-form">
            <div>
                <p class="title">Quán 108</p>
            </div>
            @if(Session::has('error'))
                <div class="alert alert-danger message-error">
                    <a data-dismiss="alert" class="close">×</a>
                    <p>{{ Session::get('error') }}</p>
                </div>
            @endif
            <div class="form-group ">
                <input type="text" class="form-control" placeholder="Tên Đăng Nhập " name="username" maxlength="25">
                <i class="fa fa-user"></i>
                @if ($errors->has('username'))
                    <label class="label label-danger">
                        {{ $errors->first('username') }}
                    </label>
                @endif
            </div>
            <div class="form-group log-status">
                <input type="password" class="form-control" placeholder="Mật Khẩu" name="password" maxlength="25">
                <i class="fa fa-lock"></i>
                @if ($errors->has('password'))
                    <label class="label label-danger">
                        {{ $errors->first('password') }}
                    </label>
                @endif
            </div>
            <a class="link" href="#">Quên mật khẩu?</a>
            <button type="submit" class="log-btn">Đăng Nhập</button>
        </div>
        {{Form::close()}}

@stop