@extends('master')

<div class="TutorialCreate">
<h1> Toevoegen</h1>
{{ Form::open(array('url' => 'tutorials','method' => 'POST')) }}

<div class="col-xs-">
{{ Form::text('title', '', array('placeholder' => 'Titel'))}}</br>
</div>

<div id="inhoud">
{{ Form::textarea('body', '', array('placeholder' => 'Inhoud')) }}</br>
</div>
<div id="button">
{{ Form::submit('Verzenden') }}

</div>

    {{ Form::close()}}
</div>