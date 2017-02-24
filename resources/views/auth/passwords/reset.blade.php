@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="panel column is-6 is-offset-3">
        <p class="panel-heading">Rest Password</p>
        <div class="panel-block">
            <div class="column is-8 is-offset-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <label for="email" class="label">E-mail Address</label>
                    <p class="control {{ $errors->has('email') ? ' has-icon has-icon-right' : '' }}">
                        <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                            <span class="help is-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </p>

                    <label for="password" class="label">Password</label>
                    <p class="control {{ $errors->has('password') ? ' has-icon has-icon-right' : '' }}">
                        <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password">

                        @if ($errors->has('password'))
                            <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                            <span class="help is-danger">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </p>

                    <label for="password-confirm" class="label">Confirm Password</label>
                    <p class="control {{ $errors->has('password') ? ' has-icon has-icon-right' : '' }}">
                        <input id="password-confirm" type="password" class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                            <span class="help is-danger">
                                {{ $errors->first('password_confirmation') }}
                            </span>
                        @endif
                    </p>

                    <button type="submit" class="button">
                        Reset Password
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>
@endsection
