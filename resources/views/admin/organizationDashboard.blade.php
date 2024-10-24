@extends('admin.dashboard')

@section('content')
        <livewire:organizationview :organizationID="$organizationID"/>
@endsection