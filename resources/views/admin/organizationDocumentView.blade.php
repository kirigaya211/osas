@extends('admin.dashboard')

@section('content')
    <iframe style="height: 800px; width:100%" src="/DocumentFolder/{{ $file }}" frameborder="0"></iframe>
@endsection