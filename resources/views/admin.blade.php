<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-7xl mx-auto p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Admin Dashboard 💍
            </h1>
            <p class="text-gray-500 text-sm">
                Manage guests & wishes
            </p>
        </div>

        <a href="/admin/logout"
           onclick="return confirm('Logout now?')"
           class="bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-red-700 transition">
            Logout 🚪
        </a>
    </div>

    <!-- STATS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-gray-500 text-sm">Total Guests</h2>
            <p class="text-3xl font-bold text-pink-600 mt-2">
                {{ $total }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-gray-500 text-sm">Wishes Submitted</h2>
            <p class="text-3xl font-bold text-purple-600 mt-2">
                {{ $guests->count() }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-gray-500 text-sm">Event Date</h2>
            <p class="text-xl font-semibold text-gray-700 mt-2">
                11 July 2026
            </p>
        </div>

    </div>

    <!-- SUCCESS MESSAGE -->
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- TABLE -->
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <div class="p-4 border-b flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-700">
                Guest List
            </h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="p-4">Name</th>
                        <th class="p-4">Wish</th>
                        <th class="p-4">Invite</th>
                        <th class="p-4 text-center">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                    @foreach($guests as $guest)
                    <tr class="hover:bg-gray-50 transition">

                        <td class="p-4 font-medium text-gray-800">
                            {{ $guest->name }}
                        </td>

                        <td class="p-4 text-gray-600">
                            {{ $guest->wish }}
                        </td>

                        <!-- DOWNLOAD -->
                        <td class="p-4">
                            <a href="/download-card/{{ $guest->token }}"
                               class="text-blue-600 hover:underline">
                               Download
                            </a>
                        </td>

                        <!-- ACTIONS -->
                        <td class="p-4">
                            <div class="flex justify-center gap-2">

                                <!-- COPY -->
                                <button onclick="copyLink('{{ url('/invite/'.$guest->token) }}')"
                                    class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600">
                                    Copy
                                </button>

                                <!-- DELETE -->
                                <form action="/guest/{{ $guest->id }}" method="POST"
                                      onsubmit="return confirm('Delete this guest?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- SCRIPT -->
<script>
function copyLink(link) {
    navigator.clipboard.writeText(link);
    alert("Invite link copied!");
}
</script>

</body>
</html>