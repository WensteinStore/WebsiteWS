<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Penipu</title>
 
    <!-- Importing Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Besley:ital,wght@0,400;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="shortcut icon" href="{{ asset('img/logowssearch.png') }}" type="image/png">


    <!-- ICONS CDN FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
        --kuning: #F4B446;
        --abu: #363636;
        --abu-gelap: #292929;
        --putih: #f5f5f5;
        --putih-gelap: #e0e0e0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: var(--putih);
            color: var(--abu-gelap);
            padding-top: 75px;
        }

        .header {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--putih);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 2%;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed; /* Fixed position for sticky header */
            top: 0; /* Align it to the top */
            left: 0; /* Align it to the left */
            width: 100%; /* Make sure it spans the full width */
            z-index: 1000; /* Ensure it's above other content */
        }

        .header .left {
            display: flex;
            align-items: center;
        }

        .header .logo img {
            height: 50px;
        }

        .header .btn {
            margin-left: 20px; /* Jarak antara logo dan tombol dark mode */
            cursor: pointer;
        }

        .header .right {
            display: flex;
            align-items: center;
        }

        .header .menu-icon {
            display: none;
            cursor: pointer;
            font-size: 24px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 25px;
            margin-left: 20px; /* Jarak antara menu icon dan link menu */
        }

        .header .menu-icon .bar {
            width: 30px;
            height: 3px;
            background-color: var(--abu);
            margin: 3px 0;
        }

        .header .links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .header .links a:hover{
            color: var(--kuning);
        }   

        .header .links li {
            margin-right: 20px;
        }

        .header .links a {
            color: var(--abu-gelap);
            text-decoration: none;
            font-weight: 600;
        }

        /* Menu Styles */
        .menu {
            padding-top: 15px;
            display: none;
            position: fixed; /* Fixed position for sticky menu */
            top: 60px; /* Adjust based on the height of the header */
            right: 0;
            background-color: var(--putih);
            width: 100%;
            z-index: 1000; /* Ensure it's above other content */
        }

        .menu .menu-links {
            list-style: none;
            padding: 0;
            margin: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .menu .menu-links li:last-child {
            border-bottom: none;
        }

        .menu .menu-links a {
            display: block;
            padding: 10px 20px;
            color: var(--abu);
            text-decoration: none;
        }

        .menu .menu-links a:hover {
            background-color: var(--putih-gelap);
        }

        @media screen and (max-width: 1000px) { 
            .header .links {
                display: none;
            }
            .header .menu-icon {
                display: flex;
            }
            .menu {
                width: 100%;
                top: 60px;
                right: 0;
            }
        }

        @media screen and (min-width: 1000px) {
            .menu {
                display: none;
            }
        }

        .menu-active {
            display: block;
            flex-wrap: nowrap;
        }

        /* -------------- BUTTON -------------- */
        .btn{
        background-color: var(--kuning);
        width: 60px;
        height: 30px;
        border-radius: 15px;
        padding: 0 5px;
        position: relative;
        display: flex;
        align-items: center;
        cursor: pointer;
        }

        .btn__indicator{
        background-color: var(--putih);
        width: 25px;
        height: 25px;
        border-radius: 50%;
        position: absolute;
        transition: transform .3s ease;
        }

        .btn__icon-container{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .btn__icon{
        color: var(--abu-gelap);
        font-size: 1rem;
        }

        /* -------------- ANIMATION ------------ */
        .btn__icon.animated{
        animation: spin 0.5s;
        }

        @keyframes spin{
        to {
            transform: rotate(360deg);
        }
        }

        /* -------------- DARKMODE -------------- */
        body.darkmode{
        background-color: var(--abu);
        }
        
        body.darkmode .header {
            background-color: var(--abu);
        }

        .darkmode .btn__indicator{
        transform: translateX(35px);
        background-color: var(--abu-gelap);
        }

        .darkmode .btn__icon{
        color: var(--putih);
        }

        nores {
            color: var(--abu-gelap);
        }

        body.darkmode .nores {
            color: var(--putih);
        }

        .nores-container {
            display: flex;
            flex-direction: column;
            justify-content: center; /* Vertically center */
            align-items: center; /* Horizontally center */
            text-align: center; /* Center align text */
        }

        .lottie-player {
            margin-bottom: 20px; /* Add space between the animation and text */
        }

        body.darkmode .contact-link {
            color: var(--abu-gelap);    
        }

        .image-container img {
            width: 80%; /* Atur sesuai kebutuhan */
            height: auto; /* Menjaga rasio gambar */
            margin: 5px; /* Jarak antar gambar */
        }

        .result-container {
            margin: 20px;
            padding: 10px;
            border: 1px solid var(--abu-gelap);
            border-radius: 5px;
        }

        body.darkmode .result-container {
            margin: 20px;
            padding: 10px;
            border: 1px solid var(--putih);
            border-radius: 5px;
        }

        .result-container p {
            margin: 0;
            padding: 5px 0;
            display: flex;
            color: var(--abu-gelap);
        }

        body.darkmode .result-container p {
            color: var(--putih);
        }

        .result-label {
            width: 150px; /* Lebar label bisa disesuaikan */
            text-align: left;
        }

        .result-colon {
            width: 1em; /* Ukuran lebar untuk titik dua */
            text-align: center; /* Menjaga agar titik dua rata tengah */
        }

        .result-value {
            flex: 1; /* Mengisi sisa ruang */
            text-align: left; /* Menjaga agar nilai rata kiri */
        }

        .form-container {
            text-align: center;
            margin: 20px 0;
        }

        .contact-link-container {
            display: flex;
            justify-content: center;
            margin: 20px 0; /* Jarak atas dan bawah */
        }

        .contact-link {
            font-size: 20px;
            color: var(--abu-gelap);
            text-decoration: none;
            font-weight: bold;
        }

        body.darkmode .contact-link {
            color: var(--putih);
        }

        .contact-link:hover {
            text-decoration: underline;
        }

       
        body.darkmode .header .menu-icon .bar {
            background-color: var(--putih);
        }

        body.darkmode .header .links a {
            color: var(--putih);
        }

        body.darkmode .menu {
            background-color: var(--abu);
        }

        body.darkmode .menu .menu-links a {
            color: var(--putih);
        }

        body.darkmode .menu .menu-links a:hover {
            background-color: var(--abu-gelap);
        }

        body.darkmode .header .links a:hover {
            color: var(--kuning)
        }

        .footer {
            background-color: var(--putih);
            color: var(--abu-gelap);
            padding: 2rem 0;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        body.darkmode .footer {
            background-color: var(--abu);
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            color: var(--putih);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-section {
            flex: 1;
            margin: 1rem;
            min-width: 200px;
        }

        .footer-section h3 {
            color: var(--abu-gelap);
            margin-bottom: 1rem;
        }

        body.darkmode .footer-section h3 {
            color: var(--putih);
        }

        .footer-section p, .footer-section ul {
            margin: 0;
            padding: 0;
        }

        .footer-section ul {
            list-style-type: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
            color: var(--abu-gelap);
        }

        body.darkmode .footer-section ul li {
            color: var(--putih);
        }

        .footer-section ul li:hover {
            color: var(--kuning);
        }

        body.darkmode .footer-section ul li:hover {
            color: var(--kuning);
        }

        .footer-section ul li a {
            color: var(--abu-gelap);
            text-decoration: none;
        }

        body.darkmode .footer-section ul li a {
            color: var(--putih);
        }

        .footer-section ul li a:hover {
            color: var(--kuning);
        }

        body.darkmode .footer-section ul li a:hover {
            color: var(--kuning);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icons a {
            color: var(--abu-gelap);
            font-size: 1rem;
            text-decoration: none;
        }

        body.darkmode .social-icons a {
            color: var(--putih);
        }

        .social-icons a:hover {
            color: var(--kuning);
        }

        body.darkmode .social-icons a:hover {
            color: var(--kuning);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            color: var(--abu-gelap);
        }

        body.darkmode .copyright {
            color: var(--putih);
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            gap: 1rem; /* Jarak antar kontak */
            align-items: flex-start; /* Kontak disusun dari kiri */
        }

        .contact {
            display: flex;
            align-items: flex-start; /* Align icons and text at the start */
            text-decoration: none;
            color: var(--abu-gelap);
        }

        .contact div {
            text-align: left; /* Align text to the left */
        }

        .contact i,
        .contact svg {
            margin-right: 0.5rem; /* Jarak antara ikon dan teks */
            font-size: 1.6rem; /* Increase the size of the icons */
            line-height: 1.5; /* Adjust line height for better alignment */
        }

        .contact i:hover, .contact svg:hover {
            color: var(--kuning); /* Warna ikon saat di-hover */
        }
        
        .contact:hover {
            color:var(--kuning);
        }

        .footer-section ul.contact-list {
            padding: 0;
            margin: 0;
        }
        
        .hatiyangluka {
            text-align: left;
            font-size: 0.6rem;
            text-decoration: none;
            display: column;
            color: var(--abu-gelap);
        }

        body.darkmode .hatiyangluka {
            color: var(--putih);
        }

        a svg {
            color: var(--abu-gelap);
        }

        a svg:hover {
            color: var(--kuning);
        }

        a:hover svg {
            color: var(--kuning); /* Warna ikon saat di-hover */
        }

        body.darkmode a:hover svg {
            color: var(--kuning); /* Warna ikon saat di-hover */
        }

        body.darkmode a svg {
            color: var(--putih);
        }

        body.darkmode a svg:hover {
            color: var(--kuning);
        }

        a:hover .hatiyangluka {
            color: var(--kuning);
        }

        body.darkmode a:hover .hatiyangluka {
            color: var(--kuning);
        }

        /* Responsiveness untuk layar kecil */
        @media screen and (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .footer-section {
                margin: 1rem 0;
            }

            .contact {
                justify-content: center;
            }

            .social-icons {
                justify-content: center;
            }

            .hatiyangluka {
                font-size: 0.8rem;
            }

            
        }

        /* Responsiveness untuk layar lebih lebar */
        @media screen and (min-width: 769px) {
            .footer-content {
                flex-direction: row;
                text-align: left;
            }

            .hatiyangluka {
                font-size: 1rem;
            }
        }

        
    </style>
</head>
<body>
    <div class="header">
        <div class="left">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logows.png') }}" alt="Wenstein Store">
                </a>
            </div>
            <div class="btn">
                <div class="btn__indicator">
                    <div class="btn__icon-container">
                        <i class="btn__icon fa-solid fa-sun"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="links">
                <li><a href="/#home">Home</a></li>
                <li><a href="/#cara">Cara Jual/Beli</a></li>
                <li><a href="/#info">Info Penting</a></li>
                <li><a href="/#rekber">Rekber</a></li>
                <li><a href="/#kontak">Kontak Kami</a></li>
                <li><a href="/#tentang">Tentang Kami</a></li>
            </ul>
        </div>
    </div>

    <div class="menu">
        <ul class="menu-links">
        <li><a href="/#home">Home</a></li>
            <li><a href="/#cara">Cara Jual/Beli</a></li>
            <li><a href="/#info">Info Penting</a></li>
            <li><a href="/#rekber">Rekber</a></li>
            <li><a href="/#kontak">Kontak Kami</a></li>
            <li><a href="/#tentang">Tentang Kami</a></li>
        </ul>
    </div>

    <!-- Menampilkan hasil pencarian -->
    @if(isset($results))
    @if(count($results) > 0)
        @foreach($results as $result)
            <div class="result-container">
                <p><span class="result-label">ID</span><span class="result-colon">:</span><span class="result-value">{{ $result->id }}</span></p>
                <p><span class="result-label">Server</span><span class="result-colon">:</span><span class="result-value">{{ $result->server }}</span></p>
                <p><span class="result-label">Keterangan</span><span class="result-colon">:</span><span class="result-value">{{ $result->keterangan }}</span></p>
                <p><span class="result-label">Tanggal</span><span class="result-colon">:</span><span class="result-value">{{ $result->tanggal }}</span></p>
                <p><span class="result-label">Pelaku/Penipu</span><span class="result-colon">:</span><span class="result-value">{{ $result->pelaku }}</span></p>
                <p><span class="result-label">Korban/Pelapor</span><span class="result-colon">:</span><span class="result-value">{{ $result->korban }}</span></p>
                <div class="image-container">
                    @foreach(json_decode($result->image_urls) as $image_url)
                        <img src="{{ $image_url }}" alt="Gambar Penipu">
                    @endforeach
                </div>
            </div>
        @endforeach
    @else
        <div class="nores-container">
            <lottie-player 
                id="lottieAnimation"
                src="{{ asset('animations/Animation - 1727527291107.json') }}"
                background="transparent"  
                speed="1"  
                style="width: 300px; height: 300px ;" 
                autoplay>
            </lottie-player>
            <p class="nores">Tidak ada hasil yang ditemukan.
                <br>Terdapat 2 kemungkinan diantaranya, akun aman atau Admin belum melakukan input data akun yang dilapor.
            </p>
        </div>
    @endif
@endif
    <div class="contact-link-container">
    <a href="https://wa.me/6289504033918?text=Mau+lapor+akun+min" class="contact-link">Lapor Akun Disini!</a>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>Wenstein Store adalah forum jual beli akun yang melayani jasa rekber dan post dimana forum ini sudah berdiri sejak tahun 2021.</p>
            </div>
            <div class="footer-section">
                <h3>Kontak Admin</h3>
                <ul class="contact-list">
                    <li>
                        <a class="contact" href="wa.me/+6285297976565">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <span>WhatsApp Admin Rekber</span><br>
                                <span>0852-9797-6565</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="contact" href="wa.me/+6289630503634">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <span>WhatsApp Admin Rekber</span><br>
                                <span>0896-3634-3050</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="contact" href="mailto:wensteinstore@gmail.com">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span>Email</span><br>
                                <span>wensteinstore@gmail.com</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="#">Cara Jual/Beli</a></li>
                    <li><a href="#">Info Penting</a></li>
                    <li><a href="#">Rekber</a></li>
                    <li><a href="#">Grup JB & Mabar</a></li>
                    <li><a href="#">Tata Cara Penyerahan Akun</a></li>
                    <li><a href="#">TOP UP DISINI!</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="www.instagram.com/wensteinstore.backup" class="contact">
                        <i class="bi bi-instagram"></i>
                        <div>
                            <span>Instagram</span><br>
                            <span>@wensteinstore.backup</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright">
            &copy; 2021 Wenstein Store. All Rights Reserved.
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuIcon = document.querySelector('.menu-icon');
            const menu = document.querySelector('.menu');
            const menuLinks = document.querySelectorAll('.menu-links a');

            menuIcon.addEventListener('click', function() {
                menu.classList.toggle('menu-active');
            });

            // Function to check window width and close the menu if necessary
            function handleResize() {
                if (window.innerWidth > 768) { // adjust the width to your breakpoint
                    menu.classList.remove('menu-active');
                }
            }

            // Add resize event listener
            window.addEventListener('resize', handleResize);

            // Initial check
            handleResize();

            // Add click event listener to each menu link to close the menu
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) { // check the width to only apply on small screens
                        menu.classList.remove('menu-active');
                    }
                });
            });

            // Add scroll event listener to close the menu on scroll
            window.addEventListener('scroll', function() {
                if (window.innerWidth <= 768) { // check the width to only apply on small screens
                    menu.classList.remove('menu-active');
                }
            });
        });

            const body = document.querySelector('body');
            const btn = document.querySelector('.btn');
            const icon = document.querySelector('.btn__icon');

            // Function to save dark mode status in local storage
            function store(value) {
                localStorage.setItem('darkmode', value);
            }

            // Function to load dark mode status from local storage
            function load() {
                const darkmode = localStorage.getItem('darkmode');
                if (!darkmode) {
                    store(false);
                    icon.classList.add('fa-sun');
                } else if (darkmode === 'true') {
                    body.classList.add('darkmode');
                    icon.classList.add('fa-moon');
                    icon.classList.remove('fa-sun');
                } else {
                    icon.classList.add('fa-sun');
                    icon.classList.remove('fa-moon');
                }
            }
            load();

            btn.addEventListener('click', () => {
                body.classList.toggle('darkmode');
                icon.classList.add('animated');
                store(body.classList.contains('darkmode'));

                if (body.classList.contains('darkmode')) {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                } else {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                }

                setTimeout(() => {
                    icon.classList.remove('animated');
                }, 500);
            });

            const lottieAnimation = document.getElementById('lottieAnimation');

            // Function to restart the animation
            function restartAnimation() {
                lottieAnimation.stop(); // Stop the animation
                lottieAnimation.play(); // Play the animation again
            }

            // Ulangi animasi setiap 5 detik (5000 ms)
            setInterval(restartAnimation, 10000); 

    </script>
</body>
</html>
