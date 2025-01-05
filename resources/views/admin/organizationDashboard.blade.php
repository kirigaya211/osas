@extends('admin.dashboard')

@section('content')
        <livewire:organization-view :organizationID="$organizationID"/>
@endsection