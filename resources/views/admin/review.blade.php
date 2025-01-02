@extends('admin.dashboard')

@section('content')
        <livewire:review-application :userID="$userID"/>
@endsection
