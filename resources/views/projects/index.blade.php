<html>
    <head>
        <title>Projects</title>
    </head>
    <body>
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>Project Number</th>
                <th>Project Name</th>
                <th>Project Location</th>
                <th>Date</th>
                <th>Customer details</th>
                <th>Actions</th>
            </tr>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->project_name }}</td>
                <td>{{ $project->project_location }}</td>
                <td>{{ $project->date }}</td>
                <td>{{ $project->customer->customer_name }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
