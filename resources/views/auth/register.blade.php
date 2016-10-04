@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <form class="col s12" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class='row'>
                <div class='input-field col s12'>
                    <input id="name" type="text" name="name" value="{{ old('name') }}">
                    <label for="email">Name</label>
                </div>
            </div>

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
                    <button type='submit' name='btn_register' class='col s12 btn'>Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
