@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <form class="col s12" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <div class='row'>
                <div class='input-field col s12'>
                    <input id="email" type="email" name="email" value="{{ old('email') }}">
                    <label for="email">E-Mail Address</label>
                </div>
            </div>

            <div class='row'>
                <div class='input-field col s12'>
                    <button type='submit' name='btn_password_mail' class='col s12 btn'>Send password reset link</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
