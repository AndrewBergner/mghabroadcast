@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
@section('content')
	<div id="broadcast-container">
	    @include('player')

		@include('submitquestion')

		@role('site-admin')
			@include('questions')
		@endrole


	</div>
@endsection



