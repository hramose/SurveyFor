@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <form class="col s12" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
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
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <input id="password_confirmation" type="password" name="password_confirmation">
                    <label for="password_confirmation">Confirm Password</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <button type='submit' name='btn_reset_password' class='col s12 btn'>Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
