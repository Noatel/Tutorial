@extends('master')

@section('content')

<div class="TutorialEdit">
    <h1> Wijzigen</h1>
    {{ Form::open(array('url' => 'tutorials','method' => 'PUT')) }}

    <div class="col-xs-">
        {{ Form::text('title', $title2)}}</br>
    </div>

    <div id="inhoud">
        {{ Form::textarea('body', $body2)}}</br>
    </div>
    <div id="button">
        {{ Form::submit('Edit') }}

    </div>

    {{ Form::close()}}
</div>


@stop