@extends('master')

@section('content')
<div>

<h4>{{ $news->titlu }} <small><em>{{ $news->created_at }}</em></small></h4>

<p>{{ $news->body }}</p>

</div>
@endsection