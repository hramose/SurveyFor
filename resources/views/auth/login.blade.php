@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <form class="col s12" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class='row'>
                <div class='input-field col s12'>
                    <input id="email" type="email" name="email" value="{{ old('email') }}">
                    <label for="email">E-Mail Address</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <input id="password" type="password" name="password">
                    <label for="password">Password</label>
                </div>
                <div class='input-field col s12'>
                    <a href="{{ url('/password/reset') }}"><b>Forgot Password?</b></a>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <button type='submit' name='btn_login' class='col s12 btn'>Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection