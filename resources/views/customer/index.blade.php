<html>
    <head>
        <title>Customers</title></head>
    <body>
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>id</th>
                <th>Customer Name</th>
                <th>Contact Person</th>
            </tr>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->contact_person }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
