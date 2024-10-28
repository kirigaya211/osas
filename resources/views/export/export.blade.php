<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Excel-like styling for the table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .header-section {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        h3 {
            margin: 5px 0;
        }

        table {
            width: 100%;
            table-layout: auto; /* Allows columns to adjust width based on content */
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            white-space: nowrap; /* Prevents text wrapping for long text */
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e8f4ff;
        }

        .footer-section {
            margin-top: 20px;
            text-align: right;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="10" class="header-section">
                <h3>Office Name: Office of the Student Affairs and Services</h3>
                <h3>Campus Name: Obrero Campus</h3>
                <h3>Covered Period From: {{ \Carbon\Carbon::parse($DateStart)->format('F d, Y') }}</h3>
                <h3>Covered Period To: {{ \Carbon\Carbon::parse($DateEnd)->format('F d, Y') }}</h3>
                <h3>Service Name: Application for Recognition and/or Re-accreditation of Student Organization</h3>
            </td>
        </tr>
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
                    <td>{{ $data->created_at ?? 'NA' }}</td>
                    <td>{{ $data->updated_at ?? 'NA' }}</td>
                    <td>{{ $data->created_at && $data->updated_at ? \Carbon\Carbon::parse($data->created_at)->diffInDays($data->updated_at) : 'NA' }}</td>
                    <td>{{ $data->created_at && $data->updated_at ? \Carbon\Carbon::parse($data->created_at)->diffInMinutes($data->updated_at) : 'NA' }}</td>
                    <td>{{ $data->StatusType == 1 ? 'Pending' : ($data->StatusType == 2 ? 'Denied' : ($data->StatusType == 3 ? 'Accepted' : 'NA')) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer-section">
        <h3>Prepared by: {{ Auth::user()->name }}</h3>
    </div>
</body>

</html>
