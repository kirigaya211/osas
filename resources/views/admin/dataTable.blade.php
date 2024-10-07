@extends('admin.dashboard')

@section('content')
        <livewire:datatable :statuss="$status"/>
@endsection
