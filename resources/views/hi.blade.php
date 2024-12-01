<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: linear-gradient(to bottom, #87CEEB, #fff);
            font-family: Arial, sans-serif;
        }

        .sky {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .baby {
            position: absolute;
            bottom: 20%;
            left: -300px;
            width: 150px;
            animation: fly 8s linear infinite;
        }

        .baby img {
            width: 100%;
        }

        .banner {
            position: absolute;
            top: -35px;
            left: 130%;
            transform: translateX(-50%);
            color: #333;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1.2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            font-weight: bold;
        }

        @keyframes fly {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(200px, -50px) rotate(10deg);
            }
            50% {
                transform: translate(400px, -100px) rotate(-10deg);
            }
            75% {
                transform: translate(600px, -50px) rotate(5deg);
            }
            100% {
                transform: translate(100vw, -200px) rotate(0deg);
            }
        }
    </style>
</head>
<body>
<div class="sky">
    <div class="baby">
        <img  style="background: none" src="images/pibe2.png" alt="Bebé volando">
        <div class="banner">¡Voy a ser papá!</div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const baby = document.querySelector(".baby");
        baby.style.animationDelay = "1s";
    });
</script>
</body>
</html>
