<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 8px 12px;
            text-align: left;
        }

        h3 {
            margin: 5px 0;
        }

        .footer-section {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h3>Office Name: Office of the Student Affairs and Services</h3>
    <h3>Campus Name: Obrero Campus</h3>
    <h3>Covered Period From: {{ \Carbon\Carbon::parse($DateStart)->format('F d, Y') }}</h3>
    <h3>Covered Period To: {{ \Carbon\Carbon::parse($DateEnd)->format('F d, Y') }}</h3>
    <h3>Service Name: Application for Recognition and/or Re-accreditation of Student Organization</h3>

    <table>
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Status ID</th>
                <th>Client</th>
                <th>Representative</th>
                <th>Request Type</th>
                <th>Request Received</th>
                <th>Request Completed</th>
                <th>Total Service Time (Days)</th>
                <th>Total Number of Minutes</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->ApplicationID ?? 'NA' }}</td>
                    <td>{{ $data->StatusID ?? 'NA' }}</td>
                    <td>{{ $data->application->OrganizationName ?? 'NA' }}</td>
                    <td>{{ $data->application->representativeName ?? 'NA' }}</td>
                    <td>{{ $data->application->Type ?? 'NA' }}</td>
                    <td>{{ $data->created_at ? \Carbon\Carbon::parse($data->created_at)->format('Y-m-d H:i') : 'NA' }}</td>
                    <td>{{ $data->updated_at ? \Carbon\Carbon::parse($data->updated_at)->format('Y-m-d H:i') : 'NA' }}</td>
                    <td>{{ $data->created_at && $data->updated_at ? \Carbon\Carbon::parse($data->created_at)->diffInDays($data->updated_at) : 'NA' }}</td>
                    <td>{{ $data->created_at && $data->updated_at ? \Carbon\Carbon::parse($data->created_at)->diffInMinutes($data->updated_at) : 'NA' }}</td>
                    <td>{{ $data->StatusType == 1 ? 'Pending' : ($data->StatusType == 2 ? 'Denied' : ($data->StatusType == 3 ? 'Approved' : 'NA')) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer-section">
        <h5>Prepared by: {{ Auth::user()->name }}</h5>
    </div>
</body>

</html>
