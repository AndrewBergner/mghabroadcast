@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
@section('content')

<div class="broadcast-container">
	<div class="title">
		<h3>Massachusetts General Hospital Psychiatry Academy</h3>
	</div>
</div>

<div class="broadcast-container" id="broadcast-container">
		<div class="player-container">
	    	@include('player')
	    </div>
</div>
	<div class="broadcast-container">
		<p class="help-tips">If the video does not start automatically, please click on the Play button located in the center of the player window or refresh the page.</p>
	</div>
<div class="broadcast-container">

		<div class="questions-container">

		@include('submitquestion')
		</div>

</div>


<div class="broadcast-container">
		<div class="questions-container">

		@role('site-admin')
			@include('questions')
		@endrole
	</div>
</div>
@endsection



