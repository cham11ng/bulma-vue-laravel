@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="panel column is-6 is-offset-3">
        <p class="panel-heading">Register</p>
        <div class="panel-block">
            <div class="column is-8 is-offset-2">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <label for="name" class="label">Name</label>
                    <p class="control {{ $errors->has('name') ? ' has-icon has-icon-right' : '' }}">
                        <input id="name" type="name" class="input {{ $errors->has('name') ? ' is-danger' : '' }}" name="name" value="{{ old('name') }}" autofocus="autofocus">

                        @if ($errors->has('name'))
                            <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                            <span class="help is-danger">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </p>

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
                    <p class="control">
                        <input id="password-confirm" type="password-confirm" class="input" name="password-confirm">
                    </p>

                    <button type="submit" class="button">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>
@endsection
