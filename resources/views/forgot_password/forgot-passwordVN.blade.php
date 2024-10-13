@extends('layout.account')
@section('title','Quên mật khẩu')
@section('country')
    <select id="options-forgot" name="options" onchange="navigateToUrl()">
        <option value="option1">ENG</option>
        <option value="option2">VIE</option>
    </select>
@endsection
@section('form')
    <div class="note-pass w-100 text-left">Nhập email mà bạn đã sử dụng để đăng kí tài khoản, hệ thống sẽ gửi lại thông tin để cập nhật mật khẩu.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control"  id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">Xác nhận</button>
    <div class="note">
        <p>Bạn đã nhớ lại <a href="{{route('LoginVN')}}"><b>Đăng nhập</b></a></p>
    </div>
@endsection
<script src="{{asset('js/translate-vn-en/forgot-password.js')}}">
</script>
