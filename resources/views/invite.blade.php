<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
            font-family: 'DejaVu Sans', sans-serif;
            background: #fffaf0;
        }

        .card {
            border: 5px solid gold;
            padding: 40px;
            margin: 50px;
        }

        h1 {
            color: #d63384;
            font-size: 40px;
        }

        .names {
            font-size: 28px;
            margin: 20px 0;
        }

        .details {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="card">
    <h1>Wedding Invitation</h1>

    <p class="names">
        {{ $groom }} <br> ?? <br> {{ $bride }}
    </p>

    <div class="details">
        <p><strong>Date:</strong> {{ $date }}</p>
        <p><strong>Venue:</strong> {{ $venue }}</p>
    </div>

    <p style="margin-top:30px;">
        You are warmly invited to celebrate with us ??
    </p>
</div>

</body>
</html>