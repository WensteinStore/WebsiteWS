<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wenstein Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importing Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Besley:ital,wght@0,400;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


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

        /* Responsive Design */
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
            flex-wrap: nowrap;
            display: block;
        }

        /* Content Styles */
        .content {
            text-align: center;
            padding: 20px;
            padding-top: 80px; /* Adjust to the height of the fixed header */
            box-sizing: border-box;
        }

        .content img {
            width: 300px;
            margin: 20px 0;
        }

        .content .judul {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 24px;
            color: var(--abu-gelap);
            margin: 10px 0;
        }

        .content .since {
            font-family: 'Pacifico', sans-serif;
            color: var(--abu);
            margin: 5px 0;
        }

        .content .cek {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 20px;
            color: var(--abu);
            margin: 15px 0;
        }

        .content .text {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: var(--abu-gelap);
            font-style: italic;
            position: relative;
            white-space: normal; 
        }

        /* Container untuk animasi ketikan */
        .typing-container {
            display: inline-block;
            overflow: hidden; /* Menyembunyikan bagian teks yang melampaui batas */
            /* border-right: 2px solid #333;  /* Garis cursor */
            font-family: 'Roboto', sans-serif;
            /* animation: typing 6s steps(62, end) forwards, blink-caret 0.75s step-end infinite; */
        }

        /*
        @keyframes typing {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes blink-caret {
            0%, 100% {
                border-color: transparent;
            }
            50% {
                border-color: transparent;
            }
        }
        */

        /* Search Container Styles */
        .search {
            display: flex;
            align-items: center;
            max-width: 500px;
            margin: 20px auto;
            box-sizing: border-box;
        }

        /* Search Input Styles */
        .search-input {
            flex: 1;
            min-width: 200px;
            padding: 10px;
            border: 1px solid var(--abu-gelap);
            border-radius: 5px 0 0 5px;
            font-size: 16px;
            box-sizing: border-box;
            height: 40px;
        }

        /* Search Button Styles */
        .search-button {
            background-color: var(--abu-gelap);
            border: 1px solid var(--abu-gelap);
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            box-sizing: border-box;
            width: 50px;
        }

        /* Search Icon Styles */
        .search-icon {
            font-size: 24px;
            color: var(--putih);
        } 

        /* Button Styles */
        .button {
            margin: 20px 0;
        }

        .button a {
            text-decoration: none;
        }

        .button button {
            background-color: var(--abu-gelap);
            color: var(--putih);
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .button button:hover {
            background-color: var(--abu);
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
        
        /* Dark Mode Styles */
        body.darkmode .content .judul {
            color: var(--putih);
        }

        body.darkmode .content .since {
            color: var(--putih-gelap);
        }

        body.darkmode .content .cek {
            color: var(--putih);
        }

        body.darkmode .content .text {
            color: var(--putih-gelap);
        }

        body.darkmode .header .menu-icon .bar {
            background-color: var(--putih);
        }

        body.darkmode .header .links a:hover {
            color: var(--kuning)
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

        body.darkmode .button button {
            background-color: var(--putih);
            color: var(--abu-gelap);
        }

        body.darkmode .button button:hover {
            background-color: var(--putih-gelap);
        }

        body.darkmode .search-button {
            background-color: var(--putih);
            border: 1px solid var(--putih);
        }

        body.darkmode .search-icon {
            color: var(--abu-gelap);
        }

        body.darkmode .search-input {
            border: 1px solid var(--putih);
        }

        body.darkmode .content .links .texts {
            color: var(--putih);
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            opacity: 0;
            visibility: hidden; /* Hide by default */
            transition: opacity 0.5s ease-in-out;
            pointer-events: none; /* Prevent interaction */
            padding-top: 200px; /* Tambahkan padding atas untuk memberi ruang */
        }

        .modal.show {
            display: block;
            opacity: 1;
            visibility: visible; /* Show when modal is active */
            pointer-events: auto; /* Allow interaction */
        }

        .modal-content {
            background-color: #333;
            color: white;
            margin: -120px auto;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transform: translateY(-100%); /* Start off the screen */
            transition: transform 0.8s ease-out, opacity 0.5s ease-out;
        }

        .modal.show .modal-content {
            transform: translateY(0); /* Slide down into view */
        }

        .alert {
            text-align: center;
            transform: translateY(-50px); /* Start slightly above */
            opacity: 0; /* Start invisible */
            transition: transform 0.8s ease-out, opacity 0.5s ease-out;
        }

        .modal.show .alert {
            transform: translateY(0); /* Slide down into view */
            opacity: 1; /* Fade in */
        }

        .alert-image {
            width: 100%;
        }

        .alert-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: -10px;
        }

        .checkbox-label {
            display: flex;
            gap: 5px; /* Spasi antara checkbox dan teks */
            width: auto; /* Hindari pengaturan lebar penuh */
            align-items: center;
            margin-top: 15px;
        }

        .close-btn-action {
            margin-left: auto;
            padding: 5px 10px;
            background-color: #f44336; /* Warna background tombol */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkbox-text {
            margin-right: auto; /* Menjaga teks tetap di sebelah checkbox dan menjauhkan dari tombol */
        }

        .close-btn-action:hover {
                background-color: #4a57d4;
        }

        input[type="checkbox"] {
            cursor: pointer; /* Pastikan kursor berubah saat berada di checkbox */
            width: 18px; /* Ukuran standar checkbox */
            height: 18px;
        }

        .content .links .texts {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 18px;
            position: relative;
            white-space: normal;
            margin-bottom: -15px;
        }

        .cara-container {
            display: flex; /* Use flexbox to align items side by side */
            justify-content: center; /* Center the content horizontally */
            gap: 20px; /* Space between the boxes */
            margin: 0 auto; /* Center the container */
            max-width: 1200px; /* Set a maximum width for the container */
            flex-wrap: wrap; /* Allow items to wrap to the next line */
        }

        .carabeli, .carajual, .carainformasi {
            background-color: var(--putih); /* Light background color */
            border: 1px solid var(--putih); /* Light border */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 20px; /* Space inside the container */
            font-family: 'Roboto', sans-serif; /* Font style */
        }

        body.darkmode .carabeli,
        body.darkmode .carajual,
        body.darkmode .carainformasi {
            background-color: var(--abu); /* Dark background color */
            border: 1px solid var(--abu); /* Dark border */
        }

        .carabeli, .carajual {
            flex: 1; /* Make both boxes take up equal space */
            min-width: 300px; /* Minimum width to prevent items from getting too small */
        }

        .carainformasi {
            flex-basis: 100%; /* Make this box take up the full width of the container */
        }

        .carabeli .text, .carajual .text, .carainformasi .text {
            font-size: 24px; /* Larger font size for the title */
            font-weight: bold; /* Bold text */
            color: var(--abu-gelap); /* Darker text color */
            margin-bottom: 10px; /* Space below the title */
            text-align: center; /* Center the title */
        }

        body.darkmode .carabeli .text, 
        body.darkmode .carajual .text,
        body.darkmode .carainformasi .text {
            color: var(--putih); /* Lighter text color */
        }

        .carabeli .subtext, .carajual .subtext, .carainformasi .subtext {
            text-align: left; /* Align the subtext content to the left */
        }

        .carabeli .subtext ol, .carajual .subtext ol {
            padding-left: 20px; /* Indent the list */
            margin: 0; /* Remove default margin */
            list-style-position: inside; /* Place numbers closer to text */
        }

        .carabeli .subtext li, .carajual .subtext li {
            font-size: 16px; /* Standard font size for list items */
            color: var(--abu-gelap); /* Slightly lighter text color */
            line-height: 1.6; /* Increase line spacing */
            margin-bottom: 8px; /* Space between list items */
            padding-left: 5px; /* Adjust padding to make numbers closer to text */
        }

        body.darkmode .carabeli .subtext li, 
        body.darkmode .carajual .subtext li {
            color: var(--putih);
        }

        .carabeli .subtext li::marker, .carajual .subtext li::marker {
            color: var(--abu-gelap); /* Color for list item markers */
        }

        body.darkmode .carabeli .subtext li::marker, 
        body.darkmode .carajual .subtext li::marker {
            color: var(--putih); /* Color for list item markers */
        }

        .carainformasi .subtext li {
            font-size: 16px; /* Standard font size for paragraph */
            color: var(--abu-gelap); /* Slightly lighter text color */
            line-height: 1.6; /* Increase line spacing */
            margin: 0; /* Remove default margin */
        }

        body.darkmode .carainformasi .subtext li {
            color: var(--putih);
        }

        .carainformasi .subtext li::marker {
            color: var(--abu-gelap);
        }

        body.darkmode .carainformasi .subtext li::marker {
            color: var(--putih);
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .cara-container {
                flex-direction: column; /* Stack items vertically */
                align-items: center; /* Center items */
            }

            .carabeli, .carajual, .carainformasi {
                max-width: 100%; /* Allow full width for each box */
            }
        }

        html {
            scroll-behavior: smooth;
        }

        #kontak {
            margin-top: 80px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Menyelaraskan elemen ke tengah secara horizontal */
        }

        #kontak .waadmin, 
        #kontak .grupjb, 
        #kontak .grupmabar {
            border: 2px solid var(--abu-gelap); /* Menggunakan warna hitam sebagai contoh, bisa diubah sesuai kebutuhan */
            padding: 10px; /* Menambahkan padding agar border tidak terlalu dekat dengan konten */
            margin-bottom: 10px; /* Menambahkan jarak antar elemen */
            border-radius: 5px; /* Menambahkan sudut border yang melengkung, bisa dihapus jika ingin border yang tajam */
            width: 80%; /* Atur lebar sesuai kebutuhan, misalnya 80% dari lebar kontainer */
            max-width: 600px; /* Opsional: membatasi lebar maksimum agar tidak terlalu lebar pada layar besar */
        }

        body.darkmode #kontak .waadmin, 
        body.darkmode #kontak .grupjb, 
        body.darkmode #kontak .grupmabar {
            border: 2px solid var(--putih); /* Menggunakan warna putih sebagai contoh, bisa diubah sesuai kebutuhan */
        }

        #kontak .waadmin .texts, 
        #kontak .grupjb .texts, 
        #kontak .grupmabar .texts {
            margin-top: 10px; /* Menambahkan jarak di atas elemen .texts */
        }

        .ig-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .ige {
            font-size: 20px;
            font-weight: bold;
            color: #ff4500;
            display: inline-block;
            animation: pulseGlow 2.5s ease-in-out infinite;
            text-align: center; /* Center the text */
        }

        /* Button Styling */
        .ig-button {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #ff4500;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Hover Animation */
        .ig-button:hover {
            background-color: #ff0000;
            transform: scale(1.1);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Pulse and glow for text */
        @keyframes pulseGlow {
            0% {
                transform: scale(1);
                text-shadow: none;
            }
            50% {
                transform: scale(1.1);
                text-shadow: 0 0 15px rgba(255, 69, 0, 0.8);
            }
            100% {
                transform: scale(1);
                text-shadow: none;
            }
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

        .rekber-container {
            margin-left: auto; /* Agar container bisa terpusat */
            margin-right: auto; /* Agar container bisa terpusat */
            background-color: var(--putih);
            border: 1px solid var(--putih);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            max-width: 1200px; /* Set a maximum width for the container */
            font-family: 'Roboto', sans-serif;
        }

        .rekber-content {
            padding: 20px; /* Alihkan padding ke konten dalam */
        }

        body.darkmode .rekber-container {
            background-color: var(--abu);
            border: 1px solid var(--abu);
        }

        .rekber-container .judul {
            text-align: center;
            font-size: 24px;
            color: var(--abu-gelap);
            font-weight: bold;
            font-style: italic;
        }

        .rekber-content .textdalam, .rekber-content .textfee {
            margin-top: 20px;
            font-weight: 500;
            font-size: 18px;
            color: var(--abu-gelap);
        }

        .rekber-content .textdalam {
            text-align: left;
        }

        .rekber-content .textfee {
            text-align: center;
        }

        body.darkmode .rekber-container .textdalam,
        body.darkmode .rekber-container .textfee {
            color: var(--putih);
        }

        .rekber-container .subtext {
            margin-top: -10px;
            text-align: left;
            color: var(--abu-gelap);
        }

        body.darkmode .rekber-container .subtext {
            color: var(--putih);
        }

        .rekber-container table {
            margin-top: 15px;
            width: 100%;
            border-collapse: collapse;
        }

        .rekber-container table, .rekber-container th, .rekber-container td {
            border: 1px solid var(--abu-gelap);
            padding: 8px;
            text-align: left;
        }

        body.darkmode .rekber-container table, 
        body.darkmode .rekber-container th, 
        body.darkmode .rekber-container td {
            border: 1px solid var(--putih);
        }

        .rekber-container th {
            font-weight: bold;
            text-align: center;
        }

        .rekber-container td {
            background-color: var(--putih);
            text-align: center;
        }

        body.darkmode .rekber-container td {
            background-color: var(--abu);
        }

        /* faq section */

        .faq-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .faq-title {
            text-align: center;
            margin: 1rem 0;
            color: var(--abu-gelap);
        }

        body.darkmode .faq-title {
            color: var(--putih);
        }

        .faq-item {
            border-radius: 8px;
        }

        .faq-item .question {
            padding: 0.1rem 0.5rem; /* Lebih kecil lagi padding */
            font-size: 0.9rem; /* Kecilkan ukuran font */
            cursor: pointer;
            background-color: var(--putih-gelap);
            color: var(--abu-gelap);
            border-radius: 8px;
            margin-bottom: 5px;
        }

        body.darkmode .faq-item .question {
            background-color: var(--abu-gelap);
            color: var(--putih);
        }
        
        .faq-item .question h3 {
            position: relative;
            text-align: left;
            padding-left: 3rem; /* Tambahkan jarak di sebelah kiri */
            padding-right: 3rem; /* Tambahkan jarak di sebelah kanan */
        }
        
        .faq-item .question h3 svg {
            position: absolute;
            right: 5%;
            top: 30%;
            transition: 0.5s;
        }
        .faq-item .question.active h3 svg {
            transform: rotate(180deg);
        }

        .faq-item .answer {
            max-height: 0;
            overflow: hidden;
            transition: 0.5s ease;
            text-align: left;
            color: var(--abu-gelap);
        }

        .faq-item .answer p {
            padding: 0.3rem 0.8rem; /* Kurangi padding di bagian jawaban */
            color: var(--abu-gelap);
        }

        body.darkmode .faq-item .answer p {
            color: var(--putih);
        }

        .answer.active {
            max-height: 200px;
            animation: fade 0.5s ease;
        }

        @keyframes fade {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        

    </style>
</head>
<body>
    <!-- Modal -->
    <div id="customModal" class="modal">
        <div class="modal-content">
            <div class="alert">
                <img src="{{ asset('img/pp-wenstein.png') }}" alt="Information Image" class="alert-image">
                <p class="alert-title">PENGUMUMAN</p>
                <p>Admin Wenstein Store tidak melayani transaksi melalui Telegram, hati-hati clone/penipu!</p>
                <label class="checkbox-label">
                    <input type="checkbox" id="dontShowAgain">
                    <span class="checkbox-text">Jangan tampilkan lagi</span>
                    <button class="close-btn-action">Tutup</button>
                </label>          
            </div>
        </div>
    </div>

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
                <li><a href="#home">Home</a></li>
                <li><a href="#cara">Cara Jual/Beli</a></li>
                <li><a href="#info">Info Penting</a></li>
                <li><a href="#rekber">Rekber</a></li>
                <li><a href="#kontak">Kontak Kami</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
            </ul>
        </div>
    </div>

    <div class="menu">
        <ul class="menu-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#cara">Cara Jual/Beli</a></li>
            <li><a href="#info">Info Penting</a></li>
            <li><a href="#rekber">Rekber</a></li>
            <li><a href="#kontak">Kontak Kami</a></li>
            <li><a href="#tentang">Tentang Kami</a></li>
        </ul>
    </div>

    <div id="home" class="content">
        <a href="{{ url('/') }}"> 
            <img src="{{ asset('img/logowssearch.png') }}" alt="Wenstein Store">
        </a>
      <div class="judul">Tempat Jual Beli Akun MLBB Aman dan Terpercaya</div>
        <div class="since"><em>Since 2021</em></div>
        <br><div class="cek">Cek Keamanan Akun</div>
        <div class="text">
            <div class="typing-container">
                <span>Untuk mengecek apakah akun memiliki riwayat bermasalah atau tidak.</span>
            </div>
        </div>
        <form action="{{ url('search') }}" method="get" class="search-form">
            <div class="search">
                <input class="search-input" type="search" name="query" placeholder="Masukkan ID atau Server Akun Mobile Legends">
                <button type="submit" class="search-button">
                    <span class="search-icon material-symbols-outlined">search</span>
                </button>
            </div>
        </form>

        <div class="ig-container">
            <div class="ige">IG Wenstein Store yang asli hanya @wensteinstore.backup selain itu penipu/clone!</div>
            <a href="https://www.instagram.com/wensteinstore.backup" target="_blank" class="ig-button">Follow on Instagram</a>
        </div>


        <div id="kontak" class="links">
            <div class="waadmin">
                <div class="texts">Kontak Admin</div>
                <div class="button">
                    <a href="https://wa.me/6285297976565?text=Mau+rekber+min"><button>WhatsApp Admin Rekber</button></a>
                    <a href="https://wa.me/6289630503634?text=Mau+post+min"><button>WhatsApp Admin Post</button></a><br>
                </div>
            </div>
            <div class="grupjb">
                <div class="texts">Grup Jual Beli Akun</div>
                <div class="button">
                    <a href="#"><button>JB WENSTEIN STORE #1</button></a><br>
                    <a href="#"><button>JB WENSTEIN STORE #2</button></a><br>
                    <a href="#"><button>JB WENSTEIN STORE #3</button></a><br>
                    <a href="#"><button>JB WENSTEIN STORE #4</button></a><br>
                    <a href="#"><button>JB WENSTEIN STORE #5</button></a><br>
                    <a href="#"><button>JB WENSTEIN STORE #6</button></a><br>
                </div>
            </div>
            <div class="grupmabar">
                <div class="texts">Grup Mabar</div>
                <div class="button">
                    <a href="https://chat.whatsapp.com/HDYNCcyAX8rK6eBZWul63t"><button>Grup Mabar Mobile Legends</button></a>
                </div>
            </div>
        </div>

        <div id="cara" class="cara-container">
            <div class="carabeli">
                <div class="text">Cara Beli Akun</div>
                <div class="subtext">
                    <ol>
                        <li>Hubungi kontak Penjual,</li>
                        <li>Negosiasi hingga mencapai kesepakatan,</li>
                        <li>Jika sudah sepakat, hubungi Admin Rekber untuk melakukan transaksi,</li>
                        <li>Buat grup di WhatsApp yang berisikan Admin, Penjual, dan Pembeli.</li>
                    </ol>
                </div>
            </div>

            <div class="carajual">
                <div class="text">Cara Jual Akun</div>
                <div class="subtext">
                    <ol>
                        <li>Hubungi kontak Pembeli,</li>
                        <li>Negosiasi hingga mencapai kesepakatan,</li>
                        <li>Jika sudah sepakat, hubungi Admin Rekber untuk melakukan transaksi,</li>
                        <li>Buat grup di WhatsApp yang berisikan Admin, Penjual, dan Pembeli.</li>
                    </ol>
                </div>
            </div>

            <div id="info" class="carainformasi">
                <div class="text">Informasi Penting</div>
                <div class="subtext">
                    <ul>
                        <li>Gunakan jasa rekber agar proses transaksi berjalan dengan aman dan terhindar dari penipuan.</li>
                        <li>Admin Wenstein Store hanya melayani rekber melalui WhatsApp 0852-9797-6565, selain nomor tersebut = clone/penipu. Waspada terhadap clone yang mengatasnamakan Admin Wenstein Store!</li>
                        <li>JANGAN TRANSFER LANGSUNG KE PENJUAL, wajib rekber Wenstein Store! </li>
                        <li>Laporkan ke Admin, Penjual yang tidak mau rekber/minta transfer langsung/ngajak rekber tempat lain dengan alasan menjelekkan toko ini.</li>
                        <li>Laporkan ke Admin, Pembeli yang mengajak rekber tempat lain dengan modus kalau reff uang nambah atau menjelekkan toko ini dengan mengirimkan bukti palsu. JANGAN MAU, langsung skip aja karena itu modus penipuan!</li>
                        <li>Hati-hati terhadap berbagai modus penipuan salah satunya alasan menuduh toko ini penipu dan mengajak rekber tempat lain, atau alasan tentang sistem reff disini ribet dibanding tempat lain. DEPOSIT/UANG JAMINAN=SCAM!</li>
                        <li>Tidak disarankan rekber di tempat yang tidak dikenal, bukan bermaksud menuduh tempat lain tidak aman, mungkin bisa cek keamanan tempat tersebut lebih lanjut atau tanya Admin. Hati-hati modus penipuan Admin palsu!</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="rekber" class="rekber-container">
            <div class="rekber-content">
                <div class="judul">REKBER</div>
                <div class="textdalam">Apa itu Rekber?</div>
                <div class="subtext">
                    <p>Rekber adalah transaksi dengan Admin Wenstein Store sebagai pihak ketiga agar proses transaksi berjalan dengan aman dan terhindar dari penipuan.</p>
                </div>

                <div class="textfee">Fee/Biaya Rekber</div>
                <div class="subtext">
                    <table>
                        <tr>
                            <th>Harga Akun (Rp)</th>
                            <th>Fee Rekber (Rp)</th>
                        </tr>
                        <tr>
                            <td>0-100.000</td>
                            <td>5.000</td>
                        </tr>
                        <tr>
                            <td>100.001-250.000</td>
                            <td>10.000</td>
                        </tr>
                        <tr>
                            <td>250.001-500.000</td>
                            <td>15.000</td>
                        </tr>
                        <tr>
                            <td>500.001-700.000</td>
                            <td>20.000</td>
                        </tr>
                        <tr>
                            <td>700.001-1.000.000</td>
                            <td>30.000</td>
                        </tr>
                        <tr>
                            <td>1.000.001+</td>
                            <td>40.000</td>
                        </tr>
                    </table>
                </div>

                <div class="textdalam">Peraturan Rekber</div>
                <div class="subtext">
                    <ul>
                        <li>Hanya melayani rekber akun MLBB yang berstatus bind Monsep/Monkos/Galver (Moonton Sepaket Gmail/bisa CE/Moonton Kosong bisa dimonsepin/Galver bisa dimonsepin).</li>
                        <li>1 Akun = 1x Rekber, apabila ketahuan 1x rekber untuk 2 atau lebih akun maka fee berlaku kelipatan sesuai harga per 1 akun. Misal 1x rekber untuk 2 akun, harga akun pertama 90k, harga akun kedua 150k, maka fee rekber 5k+10k.</li>
                        <li>Minus Sekunder tidak ngaruh. Sekunder itu hanya sebagai pengamanan ketika login akun memerlukan kode verif dari Email Moonton.</li>
                        <li>Sistem Reff/Garansi. Penjual & Pembeli kirim identitas ke Admin. Admin sebagai penyimpan identitas Penjual & Pembeli, jika setelah Rekber selesai ternyata akun bermasalah itu urusan Penjual & Pembeli, Admin tidak bertanggung jawab jika Rekber sudah selesai.</li>
                        <li>Sistem Reff (garansi) berlaku jika setelah rekber selesai terdapat masalah akun seperti di-HB maka Penjual wajib bertanggung jawab atas masalah tersebut. Apabila masalah akun itu disebabkan oleh kesalahan Pembeli sendiri seperti di-scam melalui web phising dan sebagainya, maka sistem reffund tidak akan berlaku. Admin hanya sebatas membantu mengamankan uang, penyimpan identitas, serta menyebar nomor dan identitas yang nipu/drama. Jadi jangan salah paham bahwa reff itu garansi dari Admin.</li>
                        <li>Sistem reff terbagi menjadi 2 yaitu Refful dan Reffplayer. Refful adalah garansi selamanya, meskipun Pembeli sudah jual akunnya, garansi masih berlaku jika terjadi HB (tidak ada alasan akun sudah berpindah tangan). Reffplayer adalah garansi yang hanya berlaku bagi Pembeli pertama, garansi habis apabila Pembeli menjual akunnya ke orang lain.</li>
                        <li>Noreff? Noreff yaitu hanya transaksi biasa tanpa garansi, segala masalah akun yang terjadi setelah rekber selesai bukan tanggung jawab Admin.</li>
                        <li>Jual beli ada resikonya, beli = mengerti. Admin tidak menjamin akun 100% aman.</li>
                        <li>Rekber cancel, fee tidak kembali/hangus</li>
                        <li>Pembeli tidak dapat cancel dengan alasan yang tidak berhubungan dengan akun, seperti alasan ragu, takut di-HB, ada keperluan mendadak, dan sebagainya. Kecuali ada bukti, misalnya terdaftar akun HB, akun hasil scam, akun tidak sesuai postingan atau yang ditawarkan.</li>
                        <li>Rekber selesai, admin lepas tanggung jawab</li>
                    </ul>
                </div>

                <div class="textdalam">Tata Cara Rekber</div>
                <div class="subtext">
                    <ol>
                        <li>Penjual isi formulir rekber yang dikasih Admin,</li>
                        <li>Pembeli mengirimkan uang ke Admin,</li>
                        <li>Tunggu sampai Admin konfirmasi uang masuk,</li>
                        <li>Jika Admin sudah konfirmasi uang masuk, lanjut proses penyerahan akun (nanti ada tata cara penyerahan akun),</li>
                        <li>Penjual kirim bukti serah terima data akun ke grup,</li>
                        <li>Pembeli konfirmasi DONE apabila akun sudah diamankan,</li>
                        <li>Admin cairkan uang ke Penjual.</li>
                    </ol>
                    <p style="margin-bottom: -10px;"><strong>Keterangan :</strong></p>
                    <ul>
                        <li>Konfirmasi ke Grup jikalau ingin rekber dengan sistem reff!</li>
                        <li>Admin Wenstein Store hanya melayani rekber melalui WhatsApp 0852-9797-6565, selain itu clone/penipu!</li>
                        <li>HATI-HATI PENIPUAN. Modus nipu dengan kick Admin lalu invite Admin palsu/clone.</li>
                        <li>Hati-hati chat palsu yang dibuat penipu dengan buat QR WENSTEIN REFFUL. Lebih baik chat grup dan konfirmasi ke Admin lagi.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="faq-container">
            <h1 class="faq-title">FAQ</h1>
            <div id="faqs"></div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3 id="tentang">Tentang Kami</h3>
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

            const modal = document.getElementById("customModal");
            const checkbox = document.getElementById("dontShowAgain");

            window.onload = function() {
                if (!sessionStorage.getItem('dontShowModal')) {
                    modal.classList.add("show");

                    // Trigger the alert animation after the modal is shown
                    setTimeout(() => {
                        const alertElement = document.querySelector('.alert');
                        alertElement.style.transform = 'translateY(0)';
                        alertElement.style.opacity = '1';
                    }, 50); // Delay slightly for the alert to animate
                }
            };

            function closeModal() {
                modal.classList.remove("show");
                if (checkbox.checked) {
                    sessionStorage.setItem('dontShowModal', true);
                }
            }

            document.querySelector('.close-btn-action').onclick = closeModal;

            window.onclick = function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            };
  
            // Function to handle scroll offset
            function scrollToHash() {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetId = window.location.hash;
                
                if (targetId) {
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                        const offsetPosition = elementPosition - headerHeight;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            }

            // Scroll when clicking internal anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    // Update the URL hash without default scroll
                    history.pushState(null, null, targetId);
                });
            });

            // Scroll to hash if page loads with a hash in the URL
            window.addEventListener('load', function() {
                scrollToHash(); // Scroll to the target on page load
            });

            // Handle browser back/forward buttons
            window.addEventListener('hashchange', function() {
                scrollToHash();
            });

            const Data = [
                {
                    question: `Bedanya Ex dengan Inc apa min?`,
                    answer: `Ex atau Exclude Fee, Pembeli yang nanggung fee rekber, misal rekber 90k ex berarti Pembeli bayar total 95k. Sedangkan, Inc atau Include Fee, Penjual yang nanggung fee rekber, misal rekber 90k inc berarti Pembeli bayar total tetap 90k dan cair ke Penjual 85k.`,
                },
                {
                    question: `Akun sudah di-CE ke email Saya kok masih bisa di-HB min?`,
                    answer: `Meskipun Kamu sudah mengikuti tata cara penyerahan akun sebagaimana pada umumnya dilakukan, akun tetap ada resiko ke hackback. Mau Kamu beli akun dimanapun tetap ada resiko HB, akun beli tidak ada jaminan aman 100%.`,
                },
                // ... (tambahkan pertanyaan dan jawaban lainnya)
            ];

            const faqs = document.getElementById("faqs");
            Data.forEach((item, index) => {
                const faq = document.createElement("div");
                faq.classList.add("faq-item");
                faq.innerHTML = `<div class="question"><h3>${index + 1}. ${item.question} <svg width="19" height="16" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.46875 7.03125C5.75 7.3125 6.21875 7.3125 6.5 7.03125L10.75 2.78125C11.0625 2.46875 11.0625 2 10.75 1.71875L10.0625 1C9.75 0.71875 9.28125 0.71875 9 1L5.96875 4.03125L2.96875 1C2.6875 0.71875 2.21875 0.71875 1.90625 1L1.21875 1.71875C0.90625 2 0.90625 2.46875 1.21875 2.78125L5.46875 7.03125Z" fill="currentColor"/>
                </svg></h3></div>
                <div class="answer"><p>${item.answer}</p></div>`;
                faqs.appendChild(faq);
            });

            const question = document.querySelectorAll(".question");
            const answer = document.querySelectorAll(".answer");
            question.forEach((faq, index) => {
                faq.addEventListener("click", () => {
                    faq.classList.toggle("active");
                    answer[index].classList.toggle("active");
                });
            });

    </script>
</body>
</html>