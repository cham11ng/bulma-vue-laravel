@extends('layouts.app')

@section('content')
	<div class="container">
		<section class="section" id="notification-app">
			<notification type="danger">
				<span>Go to hell</span>
			</notification>
			<notification type="info">
				<span>Go to Heaven</span>
			</notification>
			<notification type="success">
				<span>Go no where</span>
			</notification>
		</section>

		<template id="notification-template">
			<div :class="notificationClasses" v-show="show">
				<button class="delete" @click="show = false"></button>
				<slot></slot>
			</div>
		</template>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/notification.js') }}"></script>
@endsection