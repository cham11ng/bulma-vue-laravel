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

            <form role="form" method="POST" action="{{ url('reports') }}" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                <label class="label" for="url">Website Url</label>
                <p class="control">
                    <input v-model="form.url" id="url" type="text" class="input" name="url" autofocus="autofocus"/>
                    <span class="help is-danger" v-if="form.errors.has('url')">@{{ form.errors.get('url') }}</span>
                </p>

                <label class="label">Your message</label>
                <p class="control">
                    <textarea v-model="form.reason" class="textarea" placeholder="Please elaborate ..." name="reason"></textarea>
                    <span class="help is-danger" v-if="form.errors.has('reason')">@{{ form.errors.get('reason') }}</span>
                </p>

                <div class="control is-grouped">
                    <p class="control">
                        <button class="button is-primary" type="submit" :disabled="form.errors.any()">Submit</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        new Vue({
            el: '#app',
            data: {
                form: new Form({
                    url: '',
                    reason: '',
                }),
            },
            methods: {
                onSubmit() {
                    this.form.submit('post', '/reports')
                        .then(data => console.log(data))
                        .catch(errors => console.log(errors));
                },
            }
        });
    </script>
@endsection