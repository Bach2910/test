@extends('layout.account')
@section('title','Forget password')
@section('country')
        <select id="options-forgot" name="options" onchange="navigateToUrl()">
            <option value="option1">ENG</option>
            <option value="option2">VIE</option>
        </select>
@endsection
@section('form')
    <div class="note-pass w-100 text-left">Enter the email used to register your account, the system will send information to reset the password.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">confirm</button>
    <div class="note">
        <p>Did you remember the password? <a href="{{route('Login')}}"><b>Login</b></a></p>
    </div>
@endsection
<script src="{{asset('js/translate-vn-en/forgot-password.js')}}">

</script>
