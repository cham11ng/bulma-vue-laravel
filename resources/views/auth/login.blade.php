@extends('layouts.app')

@section('content')
    <div class="panel column is-6 is-offset-3">
        <p class="panel-heading">Login</p>
        <div class="panel-block">
            <div class="column is-8 is-offset-2">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <label for="email" class="label">E-Mail Address</label>
                    <p class="control {{ $errors->has('email') ? ' has-icon has-icon-right' : '' }}">
                        <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" autofocus="autofocus">

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

                    <p class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                        </label>
                    </p>

                    <div class="block">
                        <button type="submit" class="button">
                            Login
                        </button>

                        <a class="button is-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
