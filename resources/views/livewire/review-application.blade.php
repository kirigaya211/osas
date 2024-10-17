
<div>

    <div>
        Application ID: {{ $user->ApplicationID }}
        Status ID: {{ $user->StatusID }}
        Representative Name: {{ $user->application->representativeName ?? 'N/A' }}
        Organization Name: {{ $user->application->OrganizationName ?? 'N/A' }}
        Email: {{ $user->application->representativeEmail ?? 'N/A' }}
 
    </div>
</div>

