@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="panel column is-6 is-offset-3">
        <p class="panel-heading">Reset Password</p>
        <div class="panel-block">
            <div class="column is-8 is-offset-2">
                @if (session('status'))
                    <div class="notification is-primary">
                        {{ session('status') }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('password.email') }}">
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

                    <button type="submit" class="button">
                        Send Password Reset Link
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>
@endsection
