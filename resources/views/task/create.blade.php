@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column is-6 is-offset-3">
            <h1 class="title">Task Section</h1>
            <label class="label" for="task-name">Task Name</label>
            <p class="control {{ $errors->has('name') ? ' has-icon has-icon-right' : '' }}">
                <input id="task-name" v-model="name" type="text" class="input {{ $errors->has('name') ? ' is-danger' : '' }}" name="url" value="{{ old('url') }}" autofocus="autofocus">

                @{{ name }}
                @if ($errors->has('name'))
                    <span class="icon is-small">
                        <i class="fa fa-warning"></i>
                    </span>
                    <span class="help is-danger">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </p>

            <label class="label" for="type">Type</label>
            <p class="control {{ $errors->has('type') ? ' has-icon has-icon-right' : '' }}">
                <span class="select">
                    <select name="type" id="type">
                        <option selected="selected" disabled="disabled">Select Type of Task</option>
                        <option value="apple">Long Term</option>
                        <option value="ball">Medium Term</option>
                        <option value="cat">Short Term</option>
                    </select>
                </span>
            </p>

            <div class="control is-grouped">
                <p class="control">
                    <button class="button is-primary" type="submit">Submit</button>
                </p>
            </div>

            <button class="button" @click="showModal = true">Click ME</button>
            <modal v-show="showModal" @close="showModal = false">
                <p>This is Awesome</p>
            </modal>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/task.js') }}"></script>
@endsection