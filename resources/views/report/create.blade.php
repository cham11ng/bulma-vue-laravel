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

            <form role="form" method="POST" action="{{ url('reports') }}" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
                <label class="label" for="url">Website Url</label>
                <p class="control">
                    <input v-model="url" id="url" type="text" class="input" name="url" autofocus="autofocus"/>
                    <span class="help is-danger" v-if="errors.has('url')">@{{ errors.get('url') }}</span>
                </p>

                <label class="label">Your message</label>
                <p class="control">
                    <textarea v-model="reason" class="textarea" placeholder="Please elaborate ..." name="reason"></textarea>
                    <span class="help is-danger" v-if="errors.has('reason')">@{{ errors.get('reason') }}</span>
                </p>

                <div class="control is-grouped">
                    <p class="control">
                        <button class="button is-primary" type="submit" :disabled="errors.any()">Submit</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        class Errors {
            constructor() {
                this.errors = {};
            }

            has(field) {
                return this.errors.hasOwnProperty(field);
            }

            get(field) {
                if (this.errors[field]) {
                    return this.errors[field][0];
                }
            }

            record(errors) {
                this.errors = errors;
            }

            any() {
                return Object.keys(this.errors).length > 0;
            }

            clear(field) {
                delete this.errors[field];
            }
        }

        new Vue({
            el: '#app',
            data: {
                url: '',
                reason: '',
                errors: new Errors()
            },
            methods: {
                onSubmit() {
                    axios.post('/reports', this.$data)
                        .then(response => alert('Success'))
                        .catch(error => this.errors.record(error.response.data))
                }
            }
        });
    </script>
@endsection