@extends('admin.dashboard')

@section('content')
<div>
    <div>
        Application ID: {{ $user->ApplicationID ?? 'N/A' }}
    </div>

    <div>
        Status ID: {{ $user->StatusID ?? 'N/A' }}
    </div>
</div>

@endsection