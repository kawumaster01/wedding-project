<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Safiyanu 💖 Asmau Wedding</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <style>
        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
        }

        .love-font{
            font-family:'Great Vibes',cursive;
        }

        .hero-overlay{
            background:rgba(0,0,0,.55);
        }

        .glass{
            backdrop-filter:blur(10px);
            background:rgba(255,255,255,.12);
            border:1px solid rgba(255,255,255,.2);
        }

        .btn{
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }
    </style>

</head>

<body class="bg-pink-50 overflow-x-hidden">


<!-- HERO -->

<section
class="relative min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center px-6"

style="background-image:url('/images/invite-bg.png');">

<div class="absolute inset-0 hero-overlay"></div>


<div class="relative z-10 text-center text-white max-w-4xl mx-auto">

<p class="uppercase tracking-[6px] text-sm md:text-base mb-4">
Wedding Invitation
</p>

<h1
class="love-font text-5xl sm:text-6xl md:text-7xl lg:text-8xl">

Kawumster 💖 Nanah

</h1>

<p class="mt-8 text-xl md:text-3xl font-light">

We're Getting Married

</p>

<p class="mt-4 text-lg">

on

</p>

<h2 class="love-font text-4xl md:text-6xl mt-2">

11 July 2026

</h2>


<p class="mt-8 text-sm md:text-lg text-pink-100 max-w-xl mx-auto">

With the blessings of Almighty Allah,
we joyfully invite you to celebrate the beginning
of our forever.

Your presence and prayers will make our day even more special.

</p>


<div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">

<a href="#countdown"

class="btn bg-pink-600 hover:bg-pink-700
px-8 py-4 rounded-full font-semibold shadow-lg">

Countdown 💍

</a>

<a href="#wishForm"

class="btn glass px-8 py-4 rounded-full font-semibold">

Send Wishes ❤️

</a>

</div>

<div class="mt-16 animate-bounce">

<svg xmlns="http://www.w3.org/2000/svg"
class="w-8 h-8 mx-auto"
fill="none"
viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"
stroke-linejoin="round"
stroke-width="2"
d="M19 9l-7 7-7-7"/>

</svg>

</div>

</div>

</section>

<!-- ========================= -->
<!-- COUNTDOWN SECTION -->
<!-- ========================= -->

<section id="countdown" class="py-16 px-5 bg-gradient-to-b from-pink-50 to-white">

    <div class="max-w-6xl mx-auto text-center">

        <h2 class="text-3xl md:text-5xl font-bold text-pink-700 mb-3">
            Counting Down to Our Big Day 💍
        </h2>

        <p class="text-gray-600 mb-10 text-lg">
            Every second brings us closer to forever ❤️
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

            <!-- Days -->
            <div class="bg-pink-600 text-white rounded-2xl shadow-xl p-6">

                <span
                    id="days"
                    class="block text-4xl md:text-6xl font-bold">
                    0
                </span>

                <span class="uppercase tracking-widest text-sm">
                    Days
                </span>

            </div>

            <!-- Hours -->
            <div class="bg-purple-600 text-white rounded-2xl shadow-xl p-6">

                <span
                    id="hours"
                    class="block text-4xl md:text-6xl font-bold">
                    0
                </span>

                <span class="uppercase tracking-widest text-sm">
                    Hours
                </span>

            </div>

            <!-- Minutes -->
            <div class="bg-rose-500 text-white rounded-2xl shadow-xl p-6">

                <span
                    id="minutes"
                    class="block text-4xl md:text-6xl font-bold">
                    0
                </span>

                <span class="uppercase tracking-widest text-sm">
                    Minutes
                </span>

            </div>

            <!-- Seconds -->
            <div class="bg-yellow-500 text-white rounded-2xl shadow-xl p-6">

                <span
                    id="seconds"
                    class="block text-4xl md:text-6xl font-bold">
                    0
                </span>

                <span class="uppercase tracking-widest text-sm">
                    Seconds
                </span>

            </div>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- ACTION BUTTONS -->
<!-- ========================= -->

<section class="py-12 px-5">

    <div class="max-w-5xl mx-auto">

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

            <!-- View Invitation -->

            <a
                href="/view-card-image"

                class="bg-green-600 hover:bg-green-700
                text-white
                rounded-xl
                py-4
                px-6
                shadow-lg
                transition
                duration-300
                hover:scale-105">

                <div class="text-3xl mb-2">
                    🖼️
                </div>

                <h3 class="font-bold text-lg">
                    View Card Image
                </h3>

                <p class="text-sm opacity-90 mt-1">
                    Preview the invitation card.
                </p>

            </a>


            <!-- Download Invitation -->

            <a
                href="/download-image"

                class="bg-blue-600 hover:bg-blue-700
                text-white
                rounded-xl
                py-4
                px-6
                shadow-lg
                transition
                duration-300
                hover:scale-105">

                <div class="text-3xl mb-2">
                    📥
                </div>

                <h3 class="font-bold text-lg">
                    Download Invitation
                </h3>

                <p class="text-sm opacity-90 mt-1">
                    Save the image invitation.
                </p>

            </a>


            <!-- Download PDF -->

            <a
                href="/download-invite"

                class="bg-pink-600 hover:bg-pink-700
                text-white
                rounded-xl
                py-4
                px-6
                shadow-lg
                transition
                duration-300
                hover:scale-105">

                <div class="text-3xl mb-2">
                    📄
                </div>

                <h3 class="font-bold text-lg">
                    Download PDF Card
                </h3>

                <p class="text-sm opacity-90 mt-1">
                    Get the printable PDF version.
                </p>

            </a>

        </div>

    </div>

</section>

<!-- ========================= -->
<!-- AFRICAN VOICE TTS -->
<!-- ========================= -->

<section class="py-20 px-5 bg-gradient-to-b from-pink-50 to-white">
            
<div class="bg-white rounded-3xl shadow-xl p-6 md:p-10">

    <div class="text-center mb-8">

        <div class="text-5xl mb-4">
            🎙️
        </div>

        <h2 class="text-3xl md:text-4xl font-bold text-pink-700">
            Listen to Our Message
        </h2>

        <p class="text-gray-600 mt-3">
            Choose a language and listen to our wedding message.
        </p>

    </div>


    <label
        for="ttsText"
        class="block text-left font-semibold text-gray-700 mb-2">

        Message

    </label>

    <textarea
        id="ttsText"
        rows="5"
        maxlength="2000"
        class="w-full border border-gray-300 rounded-xl p-4
        focus:outline-none focus:ring-2 focus:ring-pink-500
        resize-none"
        placeholder="Write your wedding message here..."
    >We are happy to invite you to celebrate our wedding. May Allah bless our union and make our day beautiful and memorable.</textarea>


    <label
        for="ttsLanguage"
        class="block text-left font-semibold text-gray-700 mt-5 mb-2">

        Language

    </label>

    <select
        id="ttsLanguage"
        class="w-full border border-gray-300 rounded-xl p-4
        focus:outline-none focus:ring-2 focus:ring-pink-500">

        <option value="english">
            English
        </option>

        <option value="hausa">
            Hausa
        </option>

        <option value="igbo">
            Igbo
        </option>

        <option value="yoruba">
            Yoruba
        </option>

        <option value="pidgin">
            Pidgin
        </option>

    </select>


    <button
        id="generateVoiceBtn"
        type="button"
        class="w-full mt-6 bg-pink-600 hover:bg-pink-700
        text-white font-semibold py-4 rounded-xl
        transition">

        🎙️ Generate Voice

    </button>


    <div
        id="ttsLoading"
        class="hidden text-center mt-5 text-gray-600">

        <div class="animate-pulse">
            🎙️ Generating your voice...
        </div>

    </div>


    <div
        id="ttsAudioContainer"
        class="hidden mt-6">

        <div class="bg-pink-50 rounded-2xl p-5">

            <p class="font-semibold text-pink-700 mb-3">
                Your Voice Message 🎧
            </p>

            <audio
                id="ttsAudio"
                controls
                class="w-full">
            </audio>

        </div>

    </div>


    <div
        id="ttsError"
        class="hidden mt-5 bg-red-50 text-red-600
        rounded-xl p-4 text-sm">
    </div>

</div>
            

</section>

<!-- ========================= -->
<!-- WISH FORM -->
<!-- ========================= -->

<section id="wishForm" class="py-20 px-5 bg-white">

    <div class="max-w-2xl mx-auto">

        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-10">

            <h2 class="text-4xl font-bold text-pink-700 mb-3 text-center">
                Send Your Wishes 💌
            </h2>

            <p class="text-gray-600 text-center mb-8">
                We'd love to hear your prayers and kind wishes.
            </p>

            <form id="wishForm">

                @csrf

                <input
                    name="name"
                    placeholder="Your Name"
                    required
                    class="w-full border border-gray-300 rounded-xl p-4 mb-5 focus:outline-none focus:ring-2 focus:ring-pink-500">

                <textarea
                    name="wish"
                    rows="5"
                    placeholder="Write your wishes..."
                    required
                    class="w-full border border-gray-300 rounded-xl p-4 mb-5 resize-none focus:outline-none focus:ring-2 focus:ring-pink-500"></textarea>

                <button
                    class="w-full bg-pink-600 hover:bg-pink-700 transition text-white font-semibold py-4 rounded-xl">

                    💖 Send Wishes

                </button>

            </form>

        </div>

    </div>

</section>



<!-- ========================= -->
<!-- THANK YOU POPUP -->
<!-- ========================= -->

<div
id="popup"
class="fixed inset-0 hidden bg-black/70 z-50 flex items-center justify-center px-4">

<div class="bg-white rounded-3xl shadow-2xl max-w-md w-full p-8 text-center">

<h2 class="text-3xl font-bold text-pink-600 mb-4">

Thank You 💍

</h2>

<p class="text-gray-600 mb-8">

Your wishes mean a lot to us.
May Almighty Allah reward you abundantly.

</p>

<a
id="downloadBtn"
class="inline-block bg-green-600 hover:bg-green-700 transition text-white px-8 py-4 rounded-xl">

Download Your Invitation 📥

</a>

<div class="mt-6">

<button
onclick="closePopup()"
class="text-gray-500 hover:text-black">

Close

</button>

</div>

</div>

</div>



<!-- ========================= -->
<!-- GALLERY -->
<!-- ========================= -->

<section class="py-20 bg-pink-50 px-5">

<div class="max-w-7xl mx-auto">

<h2 class="text-4xl font-bold text-center text-pink-700 mb-4">

Our Moments ❤️

</h2>

<p class="text-center text-gray-600 mb-12">

A few memories before our forever begins.

</p>

<div class="grid md:grid-cols-2 gap-8">

<!-- Invitation Video -->

<div class="bg-white rounded-3xl shadow-xl overflow-hidden">

<video
controls
poster="/images/invite-bg.png"
class="w-full h-full">

<source
src="/videos/invitation.mp4"
type="video/mp4">

Your browser doesn't support video.

</video>

<div class="p-5">

<h3 class="font-bold text-xl">

Wedding Invitation Video 🎥

</h3>

<p class="text-gray-500 mt-2">

Watch our special invitation video.

</p>

</div>

</div>

<!-- Images -->

<div class="grid grid-cols-2 gap-4">

<img
src="/images/invite-bg.png"
class="rounded-2xl shadow-lg object-cover h-52 w-full hover:scale-105 transition">

<img
src="/images/IMG-20260624-WA0007.jpg"
class="rounded-2xl shadow-lg object-cover h-52 w-full hover:scale-105 transition">

<img
src="/images/invite-bg.png"
class="rounded-2xl shadow-lg object-cover h-52 w-full hover:scale-105 transition">

<img
src="/images/IMG-20260624-WA0007.jpg"
class="rounded-2xl shadow-lg object-cover h-52 w-full hover:scale-105 transition">

</div>

</div>

</div>

</section>



<!-- ========================= -->
<!-- VENUE -->
<!-- ========================= -->

<section class="py-20 px-5 bg-white">

<div class="max-w-6xl mx-auto">

<h2 class="text-4xl font-bold text-pink-700 text-center mb-4">

Venue 📍

</h2>

<p class="text-center text-gray-600 mb-12">

Itas Gadau, Bauchi State

</p>

<div class="grid md:grid-cols-2 gap-8">

<div
class="bg-pink-50 rounded-3xl p-8 shadow-lg">

<h3 class="font-bold text-2xl mb-6">

Wedding Details

</h3>

<div class="space-y-5">

<p>

📅

<strong>Date:</strong>

11 July 2026

</p>

<p>

🕒

<strong>Time:</strong>

10:00 AM

</p>

<p>

📍

<strong>Location:</strong>

Alhaji Abdulmalik Mahmood residence, Itas Gadau.

</p>

<p>

💖

We can't wait to celebrate with you.

</p>

</div>

</div>

<div class="rounded-3xl overflow-hidden shadow-xl">

<iframe
class="w-full h-[400px]"
loading="lazy"
allowfullscreen
src="https://maps.google.com/maps?q=Bauchi&t=&z=13&ie=UTF8&iwloc=&output=embed">

</iframe>

</div>

</div>

</div>

</section>

<!-- SCRIPT -->

<script>

//Awarri api integ...////

document.addEventListener('DOMContentLoaded', function () {

    const generateButton =
        document.getElementById('generateVoiceBtn');

    const textInput =
        document.getElementById('ttsText');

    const languageInput =
        document.getElementById('ttsLanguage');

    const loading =
        document.getElementById('ttsLoading');

    const audioContainer =
        document.getElementById('ttsAudioContainer');

    const audio =
        document.getElementById('ttsAudio');

    const errorBox =
        document.getElementById('ttsError');


    generateButton.addEventListener('click', async function () {

        const text = textInput.value.trim();
        const language = languageInput.value;


        /*
        |--------------------------------------------------------------------------
        | Reset previous result
        |--------------------------------------------------------------------------
        */

        errorBox.classList.add('hidden');
        errorBox.textContent = '';

        audioContainer.classList.add('hidden');
        audio.removeAttribute('src');
        audio.load();


        /*
        |--------------------------------------------------------------------------
        | Validate text
        |--------------------------------------------------------------------------
        */

        if (!text) {

            errorBox.textContent =
                'Please enter a message first.';

            errorBox.classList.remove('hidden');

            return;
        }


        /*
        |--------------------------------------------------------------------------
        | Loading
        |--------------------------------------------------------------------------
        */

        generateButton.disabled = true;

        generateButton.classList.add(
            'opacity-60',
            'cursor-not-allowed'
        );

        generateButton.innerHTML =
            '🎙️ Generating Voice...';

        loading.classList.remove('hidden');


        try {

            /*
            |--------------------------------------------------------------------------
            | Send request to Laravel
            |--------------------------------------------------------------------------
            */

            const response = await fetch(
                '{{ route("tts.synthesize") }}',
                {
                    method: 'POST',

                    headers: {
                        'Content-Type': 'application/json',

                        'Accept': 'application/json',

                        'X-CSRF-TOKEN':
                            '{{ csrf_token() }}'
                    },

                    body: JSON.stringify({
                        text: text,
                        language: language
                    })
                }
            );


            /*
            |--------------------------------------------------------------------------
            | Read response
            |--------------------------------------------------------------------------
            */

            const data = await response.json();


            /*
            |--------------------------------------------------------------------------
            | Handle Laravel / Awarri error
            |--------------------------------------------------------------------------
            */

            if (!response.ok || !data.success) {

                throw new Error(
                    data.message ||
                    'Unable to generate voice.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Check audio URL
            |--------------------------------------------------------------------------
            */

            if (!data.audioUrl) {

                throw new Error(
                    'Awarri did not return an audio URL.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Set audio
            |--------------------------------------------------------------------------
            */

            audio.src = data.audioUrl;

            audioContainer.classList.remove(
                'hidden'
            );


            /*
            |--------------------------------------------------------------------------
            | Load audio
            |--------------------------------------------------------------------------
            */

            audio.load();


        } catch (error) {

            console.error(
                'TTS Error:',
                error
            );

            errorBox.textContent =
                error.message ||
                'Something went wrong while generating the voice.';

            errorBox.classList.remove(
                'hidden'
            );

        } finally {

            /*
            |--------------------------------------------------------------------------
            | Reset button
            |--------------------------------------------------------------------------
            */

            loading.classList.add(
                'hidden'
            );

            generateButton.disabled = false;

            generateButton.classList.remove(
                'opacity-60',
                'cursor-not-allowed'
            );

            generateButton.innerHTML =
                '🎙️ Generate Voice';
        }

    });

});


////end Awarri//////


// ==============================
// WISH FORM SUBMIT
// ==============================
const wishForm = document.getElementById("wishForm");

if (wishForm) {
    wishForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch("/submit-wish", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {

            if (data.token) {

                document
                    .getElementById("popup")
                    .classList.remove("hidden");

                document
                    .getElementById("popup")
                    .classList.add("flex");

                document
                    .getElementById("downloadBtn")
                    .href = "/download-card/" + data.token;

                wishForm.reset();

            } else {
                alert("Something went wrong.");
            }

        })
        .catch(error => {

            console.log(error);
            alert("Unable to submit your wishes.");

        });

    });
}



// ==============================
// CLOSE POPUP
// ==============================

function closePopup() {

    document
        .getElementById("popup")
        .classList.remove("flex");

    document
        .getElementById("popup")
        .classList.add("hidden");

}



// ==============================
// COUNTDOWN
// ==============================

const weddingDate = new Date("July 11, 2026 00:00:00").getTime();

function updateCountdown() {

    const now = new Date().getTime();

    const gap = weddingDate - now;

    if (gap <= 0) {

        document.getElementById("days").innerText = 0;
        document.getElementById("hours").innerText = 0;
        document.getElementById("minutes").innerText = 0;
        document.getElementById("seconds").innerText = 0;

        return;

    }

    const days = Math.floor(
        gap / (1000 * 60 * 60 * 24)
    );

    const hours = Math.floor(
        (gap % (1000 * 60 * 60 * 24)) /
        (1000 * 60 * 60)
    );

    const minutes = Math.floor(
        (gap % (1000 * 60 * 60)) /
        (1000 * 60)
    );

    const seconds = Math.floor(
        (gap % (1000 * 60)) /
        1000
    );

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

}

updateCountdown();

setInterval(updateCountdown, 1000);



// ==============================
// SMOOTH SCROLL
// ==============================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        document.querySelector(this.getAttribute("href"))
            ?.scrollIntoView({

                behavior: "smooth"

            });

    });

});



// ==============================
// IMAGE ANIMATION
// ==============================

const galleryItems = document.querySelectorAll("img");

galleryItems.forEach(img => {

    img.addEventListener("mouseenter", () => {

        img.classList.add("scale-105");

    });

    img.addEventListener("mouseleave", () => {

        img.classList.remove("scale-105");

    });

});



// ==============================
// VIDEO AUTO PAUSE WHEN HIDDEN
// ==============================

const video = document.querySelector("video");

if(video){

    document.addEventListener("visibilitychange", () => {

        if(document.hidden){

            video.pause();

        }

    });

}



// ==============================
// BUTTON RIPPLE EFFECT
// ==============================

document.querySelectorAll("a, button").forEach(btn => {

    btn.addEventListener("click", function(){

        this.classList.add("scale-95");

        setTimeout(() => {

            this.classList.remove("scale-95");

        },120);

    });

});

</script>

</body>
</html>