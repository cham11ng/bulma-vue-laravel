@extends('layouts.app')

@section('content')
	<section class="section">
		<div class="container">
			<nav class="panel" id="task-app">
				<p class="panel-heading">
					Total Tasks
				</p>
				<div class="panel-block">
					<p class="control has-icon">
						<input class="input is-small" type="text" placeholder="Search">
						<span class="icon is-small">
							<i class="fa fa-search"></i>
						</span>
					</p>
				</div>
				<p class="panel-tabs">
					<a class="is-active">All</a>
					<a>Completed</a>
					<a>Remaining</a>
				</p>
				<tasks></tasks>
				<!-- <tasks :list="{{ $tasks }}"></tasks> -->
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
		</div>
	</section>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/tasks.js') }}"></script>
@endsection