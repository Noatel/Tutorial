@extends('master')

@section('content')

<p>

    @section('content')

<ul>

    @foreach($Tutorials as $Tutorial)
    <li>
        {{ link_to_route('tutorials.show', $Tutorial->title, $Tutorial->id) }}
    </li>
    {{ Form::open(['method' => 'DELETE', 'route' => ['tutorials.destroy', $Tutorial->id]]) }}
    {{ Form::submit('Delete') }}
    {{ Form::close() }}

    {{ Form::open(['method' => 'EDIT', 'route' => ['tutorials.edit', $Tutorial->id]]) }}
    {{ Form::submit('Edit') }}
    {{ Form::close() }}

    @endforeach

</ul>


   {{ Session::get('message'); }}
</p>

<!-- Ingelogt -->
<h1> Create a tutorial</h1>
<br>{{ HTML::link('tutorials/create', 'Hier komt een create button') }}


<!-- Ingelogt -->

@stop
