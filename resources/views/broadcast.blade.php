@extends('layouts.app')

@section('content')
	<div id="broadcast-container">
	    @include('player')

		@include('submitquestion')

		@role('site-admin')
			@include('questions')
		@endrole


	</div>
@endsection



