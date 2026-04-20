<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .card {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .text {
            position: absolute;
            width: 100%;
            text-align: center;
            font-family: 'Times New Roman', serif;
            color: #000;
        }

        .top-text {
            top: 180px;
            font-size: 18px;
            letter-spacing: 2px;
        }

        .names {
            top: 340px;
            font-size: 40px;
            font-weight: bold;
        }

        .amp {
            font-size: 60px;
            font-style: italic;
        }

        .date {
            top: 460px;
            font-size: 24px;
            letter-spacing: 3px;
        }

        .footer {
            top: 550px;
            font-size: 16px;
            font-style: italic;
        }

        .hash {
            top: 590px;
            font-size: 18px;
            font-weight: bold;
        }

        .top-text { top: 220px; }

    </style>
</head>

<body>

    <div class="line" style="
    position:absolute;
    top:420px;
    left:20%;
    width:60%;
    border-top:1px solid #000;">
</div>

<div class="card">

    <!-- BACKGROUND IMAGE -->
    <img src="{{ public_path('images/card-template.png') }}" class="bg">

    <!-- TEXT OVERLAY -->
    <div class="text top-text">
        TOGETHER WITH THEIR FAMILIES
    </div>

    <div class="text names">
        {{ $groom }}
        <span class="amp">&</span>
        {{ $bride }}
    </div>

    <div class="text date">
        {{ $date }}
    </div>

    <div class="text footer">
        {{$venue}}
    </div>

    <div class="text footer">
        Formal Invitation to follow
    </div>

    <div class="text hash">
        #SAFASMAU2026
    </div>

</div>

</body>
</html>