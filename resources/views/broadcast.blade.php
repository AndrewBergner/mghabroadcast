@extends('layouts.app')

@section('content')
<div id="broadcast-container">
    <div>
        <iframe src="//iframe.dacast.com/b/85834/c/432557" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        <br>
    </div>

    <div id="question-container" class="form-group">
        @include('partials.submitquestion')
    </div>
</div>
@endsection

@push('script-foot')
    <script type="text/javascript" src="/js/broadcast.js"></script>
@endpush

