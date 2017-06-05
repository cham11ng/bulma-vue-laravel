@extends('layouts.app')

@section('content')
    <nav class="panel column is-6 is-offset-3" id="task-app">
        <p class="panel-heading">
            Total Tasks
        </p>
        <p class="panel-tabs">
            <a class="is-active">All</a>
            <a>Completed</a>
            <a>Remaining</a>
        </p>
        <tasks></tasks>
        {{--<tasks :list="@{{ $tasks }}"></tasks>--}}
        <template id="tasks-template">
            <a class="panel-block" v-for="task in list">
                <span class="panel-icon">
                    <i class="delete" @click="deleteTask(task)"></i>
                </span>
                @{{ task.body }}
            </a>
        </template>
        <div class="panel-block">
            <button class="button is-primary is-outlined is-fullwidth">
                Clear Completed Task
            </button>
        </div>
    </nav>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/tasks.js') }}"></script>
@endsection