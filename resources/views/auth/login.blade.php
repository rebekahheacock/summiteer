@extends('layouts.master')

@section('title', 'Log In')

@section('content')

    <div class="centerbox">

        @if(count($errors) > 0)
            <ul class='errors'>
                @foreach ($errors->all() as $error)
                    <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        <form method='POST' action='/login'>

            {!! csrf_field() !!}

            <div class='form-group'>
                <label for='login'>Email or Username*</label>
                <input type='text' class='form-control' name='login' id='login' value='{{ old('login') }}'>
            </div>

            <div class='form-group'>
                <label for='password'>Password*</label>
                <input type='password' class='form-control' name='password' id='password' value='{{ old('password') }}'>
            </div>

            <div class='form-group'>
                <input type='checkbox' name='remember' id='remember'>
                <label for='remember' class='checkboxLabel'>Remember me</label>
            </div>

            <button type='submit' class='btn btn-primary'>Login</button>

        </form>

        <p>No account? <a href='register'>Sign up &raquo;</a></p>
    </div>
@stop