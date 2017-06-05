@extends('layouts.app')

@section('content')
	<section class="section">
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
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/notification.js') }}"></script>
@endsection