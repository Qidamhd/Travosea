<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/icon/hiro.png">
    <style>
        @font-face {
            font-family: "Outfit";
            src: url(../assets/font/outfit/Outfit-Regular.ttf) format("truetype");
        }

        body {
            font-family: "Outfit";
            display: flex;
            margin: 0;
            padding: 0;

        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .verifikasi {
            margin: auto;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }

        .verifikasi h3 {
            margin-top: -20px;
        }

        .verifikasi svg {
            width: 30%;
            margin-bottom: -1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="verifikasi">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="#00c227"></path>
                </g>
            </svg>
            <h1>Feedback Terkirim</h1>
            <h3>Terima Kasih...</h3>
            <a href="<?php echo base_url() ?>travosea">Kembali</a>
        </div>
    </div>


</body>

</html>
