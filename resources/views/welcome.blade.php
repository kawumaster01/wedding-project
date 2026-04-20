<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safiyanu 💖 Asmau Wedding</title>

    @vite('resources/css/app.css')

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body class="bg-pink-50 text-center">

<!-- HERO SECTION -->
<section class="relative bg-cover bg-center text-white py-32"
    style="background-image: url('/images/invite-bg.png');">

    <div class="absolute inset-0 bg-black opacity-60"></div>

    <div class="relative z-10">
        <h1 class="text-6xl md:text-7xl"
            style="font-family: 'Great Vibes', cursive;">
            Kawumster 💖 Nanah
        </h1>

        <p class="mt-4 text-2xl">We're Getting Married</p>
        <p class="text-lg mt-2">on</p><br>
        <p class="text-2xl md:text-5xl" style="font-family: 'Great Vibes', cursive;">11- July- 2026</p>
    </div>
</section>


<!-- COUNTDOWN SECTION -->
<section class="mt-16 text-center">

    <h2 class="text-3xl text-pink-700 mb-6">
        Counting Down to Our Big Day 💍
    </h2>

    <div id="countdown"
        class="flex justify-center gap-6 text-white">

        <!-- Days -->
        <div class="bg-pink-600 p-6 rounded-lg shadow-lg w-24">
            <span id="days" class="text-3xl font-bold block">0</span>
            <span class="text-sm">Days</span>
        </div>

        <!-- Hours -->
        <div class="bg-purple-600 p-6 rounded-lg shadow-lg w-24">
            <span id="hours" class="text-3xl font-bold block">0</span>
            <span class="text-sm">Hours</span>
        </div>

        <!-- Minutes -->
        <div class="bg-rose-500 p-6 rounded-lg shadow-lg w-24">
            <span id="minutes" class="text-3xl font-bold block">0</span>
            <span class="text-sm">Minutes</span>
        </div>

        <!-- Seconds -->
        <div class="bg-yellow-500 p-6 rounded-lg shadow-lg w-24">
            <span id="seconds" class="text-3xl font-bold block">0</span>
            <span class="text-sm">Seconds</span>
        </div>

    </div>
</section>
<!-- COUNTDOWN -->


<!-- ACTION BUTTONS -->

<div class="mt-8 space-x-4">
 <a href="/view-card-image"
       class="bg-green-600 text-white px-6 py-3 rounded">
       View card Image
    </a>

    <a href="/download-image"
       class="bg-blue-600 text-white px-6 py-3 rounded">
       Download General Invitation
    </a>

    <a href="/download-invite"
       class="bg-green-600 text-white px-6 py-3 rounded">
       Download PDF card
    </a>
</div>

<!-- WISH FORM -->
<section class="mt-16">
    <h2 class="text-3xl mb-4 text-pink-700">Send Your Wishes 💌</h2>

    <form id="wishForm"
          class="max-w-lg mx-auto bg-white p-6 rounded shadow">

        @csrf

        <input name="name" placeholder="Your Name"
            class="w-full p-3 mb-3 border rounded" required>

        <textarea name="wish" placeholder="Write your wishes..."
            class="w-full p-3 mb-3 border rounded" required></textarea>

        <button class="bg-pink-600 text-white px-6 py-3 rounded w-full">
            Send Wishes
        </button>
    </form>
</section>

<!-- POPUP -->
<div id="popup"
     class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center">

    <div class="bg-white p-8 rounded text-center w-80">

        <h2 class="text-2xl mb-4">Thank You 💍</h2>

        <p>Your wishes mean a lot to us!</p>

        <a id="downloadBtn"
           class="bg-green-600 text-white px-5 py-2 mt-4 inline-block rounded">
           Download Your Invitation 📥
        </a>

        <br><br>

        <button onclick="closePopup()" class="text-gray-500">
            Close
        </button>
    </div>
</div>

<!-- GALLERY -->
<section class="mt-16">
    <h2 class="text-3xl mb-6 text-pink-700">Our Moments</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-10">
        <img src="/images/invite-bg.png" class="rounded shadow">
        <img src="/images/invite-bg.png" class="rounded shadow">
        <img src="/images/invite-bg.png" class="rounded shadow">
        <img src="/images/invite-bg.png" class="rounded shadow">
    </div>
</section>

<!-- VENUE -->
<section class="mt-16">
    <h2 class="text-3xl mb-4 text-pink-700">Venue</h2>
    <p class="mb-4">Itas Gadau, Bauchi State</p>

    <iframe class="w-full h-64"
        src="https://maps.google.com/maps?q=Bauchi&t=&z=13&ie=UTF8&iwloc=&output=embed">
    </iframe>
</section>

<!-- SCRIPT -->
<script>
document.getElementById('wishForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('/submit-wish', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById('popup').classList.remove('hidden');

        document.getElementById('downloadBtn').href =
            "/download-card/" + data.token;
    });
});

function closePopup() {
    document.getElementById('popup').classList.add('hidden');
}

// Countdown

const weddingDate = new Date("July 11, 2026 00:00:00").getTime();

setInterval(() => {
    const now = new Date().getTime();
    const gap = weddingDate - now;

    const days = Math.floor(gap / (1000 * 60 * 60 * 24));
    const hours = Math.floor((gap % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((gap % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((gap % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
}, 1000);

</script>

</body>
</html>