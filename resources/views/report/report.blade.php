@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-8 is-offset-2">
            <h1 class="title">Report Section</h1>
            <h2 class="subtitle">Copy and paste the url you want to report</h2>

            @if (session('status'))
                <div class="notification is-{{ session('status_type') }}">
                    {{ session('status') }}
                </div>
            @endif

            <form role="form" method="POST" action="{{ url('reports') }}">
                {{ csrf_field() }}
                <label class="label">Url</label>
                <p class="control {{ $errors->has('url') ? ' has-icon has-icon-right' : '' }}">
                    <input type="text" class="input {{ $errors->has('url') ? ' is-danger' : '' }}" name="url" value="{{ old('url') }}" autofocus="autofocus">

                    @if ($errors->has('url'))
                        <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                        <span class="help is-danger">
                                {{ $errors->first('url') }}
                            </span>
                    @endif
                </p>

                <label class="label">Your message</label>
                <p class="control {{ $errors->has('reason') ? ' has-icon has-icon-right' : '' }}">
                    <textarea class="textarea  {{ $errors->has('reason') ? ' is-danger' : '' }}" placeholder="Textarea" name="reason">{{ old('reason') }}</textarea>
                    @if ($errors->has('reason'))
                        <span class="icon is-small">
                                <i class="fa fa-warning"></i>
                            </span>
                        <span class="help is-danger">
                                {{ $errors->first('reason') }}
                            </span>
                    @endif
                </p>

                <p class="control">
                    <label class="radio">
                        <input type="radio" name="question">
                        Yes
                    </label>
                    <label class="radio">
                        <input type="radio" name="question">
                        No
                    </label>
                </p>

                <div class="control is-grouped">
                    <p class="control">
                        <button class="button is-primary">Submit</button>
                    </p>
                    <p class="control">
                        <button class="button is-link">Cancel</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection