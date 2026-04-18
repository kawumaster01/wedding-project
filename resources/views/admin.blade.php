<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-10">

    <h1 class="text-3xl font-bold mb-6">Guest List</h1>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-pink-500 text-white">
            <tr>
                <th class="p-3">Name</th>
                <th>Email</th>
                <th>Guests</th>
                <th>Message</th>
            </tr>
        </thead>

        <tbody>
            @foreach($guests as $guest)
            <tr class="border-b">
                <td class="p-3">{{ $guest->name }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->guests }}</td>
                <td>{{ $guest->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>