@extends('admin.dashboard')

@section('content')
        <livewire:data-table :statuss="$status"/>
@endsection
