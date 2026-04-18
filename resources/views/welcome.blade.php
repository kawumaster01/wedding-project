<!DOCTYPE html>
<html>
<head>
    <title>Safiyan & Asmau Wedding</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-rose-100 to-pink-200 text-center">

<section class="py-20">
    <h1 class="text-6xl font-extrabold text-pink-700">
        KawuMaster 💖 Nanah
    </h1>

    <p class="mt-4 text-2xl">We're Getting Married!</p>
    <p class="text-lg mt-2">11 July 2026</p>
	
	<a href="/download-invite"
   class="bg-green-600 text-white px-6 py-3 rounded mt-6 inline-block">
   Download Invitation Card ??
</a>
</section>

<!-- SUCCESS MESSAGE -->
@if(session('success'))
    <p class="text-green-600 font-bold">
        {{ session('success') }}
    </p>
@endif


<div id="countdown" class="text-3xl font-bold mt-10"></div>

<script>
const weddingDate = new Date("July 11, 2026 00:00:00").getTime();

setInterval(() => {
    const now = new Date().getTime();
    const gap = weddingDate - now;

    const days = Math.floor(gap / (1000*60*60*24));
    const hours = Math.floor((gap % (1000*60*60*24)) / (1000*60*60));

    document.getElementById("countdown").innerHTML =
        `${days} Days ${hours} Hours ??`;
}, 1000);
</script>



<section class="mt-16">
    <h2 class="text-3xl mb-6">Our Moments</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-10">
        <img src="/resources/k3.JPG" class="rounded">
		<img src="/k3.JPG" class="rounded">
        <img src="https://via.placeholder.com/300" class="rounded">
        <img src="https://via.placeholder.com/300" class="rounded">
        <img src="https://via.placeholder.com/300" class="rounded">
    </div>
</section>

<section class="mt-16">
    <h2 class="text-3xl mb-4">Venue</h2>
	<h3 class="text-3xl mb-4">Itas Gadau, BAUCHI BAUCHI STATE</h3>
	

    <iframe
        class="w-full h-64"
        src="https://maps.google.com/maps?q=Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed">
    </iframe>
</section>

<!-- RSVP -->
<form action="/rsvp" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    @csrf

    <input name="name" placeholder="Full Name"
        class="w-full p-3 mb-3 border rounded">

    <input name="email" placeholder="Email"
        class="w-full p-3 mb-3 border rounded">

    <input name="guests" type="number" placeholder="Number of Guests"
        class="w-full p-3 mb-3 border rounded">

    <textarea name="message" placeholder="Message"
        class="w-full p-3 mb-3 border rounded"></textarea>

    <button class="bg-pink-600 text-white px-6 py-3 rounded w-full">
        Confirm Attendance
    </button>
</form>

</body>
</html>