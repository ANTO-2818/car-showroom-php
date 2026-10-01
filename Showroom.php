<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anto's Car Showroom · Luxury Cars</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* ====== ALL ORIGINAL STYLES PRESERVED ====== */
        @keyframes spark {

            0%,
            100% {
                opacity: 0;
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }

        .group:hover .spark {
            animation: spark 0.6s ease-out;
        }

        .delay-150 {
            animation-delay: 0.15s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeUp {
            animation: fadeUp 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .delay-2 {
            animation-delay: 0.4s;
            opacity: 0;
        }

        .delay-3 {
            animation-delay: 0.6s;
            opacity: 0;
        }

        .delay-4 {
            animation-delay: 0.8s;
            opacity: 0;
        }

        body {
            background-image: url("https://wallpapercave.com/dwp1x/wp4566460.jpg");
            background-size: cover;
            background-position: top;
            background-attachment: fixed;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.65);
        }

        .card {
            transition: all 0.4s ease;
        }

        .card:hover {
            transform: translateY(-12px) scale(1.05);
            box-shadow: 0 20px 40px rgba(111, 0, 255, 0.4);
        }

        .card img {
            transition: transform 0.5s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #ef4444;
            transform: scale(1.05);
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            background: #ef4444;
            left: 0;
            bottom: -4px;
            transition: 0.4s;
        }

        .car {
            position: absolute;
            right: -100px;
            animation: moveCar 8s linear infinite;
        }

        @keyframes moveCar {
            0% {
                right: -100px;
            }

            100% {
                right: 100%;
            }
        }

        button[type="submit"]:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }

            70% {
                transform: scale(0.9);
                opacity: 0.9;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-bounceIn {
            animation: bounceIn 0.6s ease-out forwards;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        .bg-grid-pattern {
            background-image: linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* enhanced card overrides */
        .card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.7s ease;
            z-index: 1;
            pointer-events: none;
        }

        .card:hover::before {
            left: 100%;
        }

        .card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 30px 50px rgba(239, 68, 68, 0.3);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .card:hover img {
            transform: scale(1.15) rotate(2deg);
        }

        .card h3 {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .card:hover h3 {
            color: #ef4444;
            transform: translateX(5px);
            letter-spacing: 1px;
        }

        .card h3::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ef4444;
            transition: width 0.3s ease;
        }

        .card:hover h3::after {
            width: 100%;
        }

        .card p {
            transition: all 0.3s ease;
        }

        .card:hover p {
            color: #d1d5db;
            transform: translateX(3px);
        }

        .card a.glow-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .card a.glow-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
            z-index: -1;
        }

        .card a.glow-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .card a.glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px #ef4444;
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }

        .card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            padding: 2px;
            background: linear-gradient(45deg, transparent, #ef4444, transparent);
            -webkit-mask: linear-gradient(#ffffff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card .p-6 {
            position: relative;
            z-index: 2;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7));
        }

        @keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: floatIn 0.6s ease-out forwards;
        }

        .card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .card:nth-child(5) {
            animation-delay: 0.5s;
        }

        .card:nth-child(6) {
            animation-delay: 0.6s;
        }

        .card:nth-child(7) {
            animation-delay: 0.7s;
        }

        .card .button-container {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        /* Loader animation for buttons */
        .btn-loader {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, .3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 0.8s linear infinite;
            margin-right: 8px;
            vertical-align: middle;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .card a.loading {
            pointer-events: none;
            opacity: 0.7;
            cursor: wait;
        }
    </style>
</head>

<body class="text-white animate-fadeUp delay">

    <!-- overlay -->
    <div class="overlay min-h-screen animate-fadeUp delay">

        <!-- Navbar -->
        <nav
            class="sticky top-0 left-0 w-full z-50 flex justify-between items-center px-6 py-4 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 bg-opacity-95 backdrop-blur-md border-b border-red-500/20 shadow-lg transition-all duration-500 animate-fadeUp delay hover:shadow-2xl hover:shadow-red-500/20 hover:border-red-500/40">
            <a href="#home" class="group relative overflow-hidden">
                <h1
                    class="text-xl md:text-2xl font-bold bg-gradient-to-r from-red-500 to-red-400 bg-clip-text text-transparent transition-all duration-300 group-hover:scale-105 group-hover:from-red-400 group-hover:to-red-500 relative z-10">
                    Anto's Car Showroom
                </h1>
                <span
                    class="absolute inset-0 bg-red-500/20 blur-xl scale-0 group-hover:scale-100 transition-transform duration-500 rounded-full"></span>
                <span
                    class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-gradient-to-r from-red-500 to-red-400 group-hover:w-full group-hover:left-0 transition-all duration-300"></span>
                <span
                    class="absolute -top-2 -right-2 w-1 h-1 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping"></span>
                <span
                    class="absolute -bottom-2 left-1/2 w-1.5 h-1.5 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-300"></span>
            </a>
            <ul class="hidden md:flex items-center space-x-2 lg:space-x-4">
                <li><a href="#home"
                        class="relative text-gray-300 hover:text-red-500 transition-all duration-300 px-4 py-2.5 group font-medium rounded-lg overflow-hidden"><span
                            class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-lg"></span><span
                            class="relative z-10 flex items-center space-x-1"><svg
                                class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg><span>Home</span></span><span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 via-red-400 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                            class="absolute -top-1 -right-1 w-1.5 h-1.5 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping"></span><span
                            class="absolute -bottom-1 left-1/2 w-1 h-1 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-150"></span><span
                            class="absolute top-0 left-0 w-2 h-2 border-t-2 border-l-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span><span
                            class="absolute top-0 right-0 w-2 h-2 border-t-2 border-r-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span></a>
                </li>
                <li><a href="#cars"
                        class="relative text-gray-300 hover:text-red-500 transition-all duration-300 px-4 py-2.5 group font-medium rounded-lg overflow-hidden"><span
                            class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-lg"></span><span
                            class="relative z-10 flex items-center space-x-1"><svg
                                class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg><span>Cars</span></span><span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 via-red-400 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                            class="absolute -top-1 -right-1 w-1.5 h-1.5 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping"></span><span
                            class="absolute -top-1 -left-1 w-1 h-1 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-150"></span><span
                            class="absolute -bottom-1 right-1 w-1 h-1 bg-orange-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-300"></span><span
                            class="absolute bottom-0 left-0 w-2 h-2 border-b-2 border-l-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span><span
                            class="absolute bottom-0 right-0 w-2 h-2 border-b-2 border-r-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span></a>
                </li>
                <li><a href="#contact"
                        class="relative text-gray-300 hover:text-red-500 transition-all duration-300 px-4 py-2.5 group font-medium rounded-lg overflow-hidden"><span
                            class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-lg"></span><span
                            class="relative z-10 flex items-center space-x-1"><svg
                                class="w-4 h-4 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg><span>Contact</span></span><span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-red-500 via-red-400 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                            class="absolute -top-1 left-1/2 w-2 h-2 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping"></span><span
                            class="absolute -bottom-1 right-0 w-1.5 h-1.5 bg-orange-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-200"></span><span
                            class="absolute top-1/2 -right-1 w-1 h-1 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:animate-ping delay-400"></span><span
                            class="absolute top-0 left-0 w-2 h-2 border-t-2 border-l-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span><span
                            class="absolute bottom-0 right-0 w-2 h-2 border-b-2 border-r-2 border-red-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span></a>
                </li>
            </ul>
            <button id="mobileMenuBtn" class="md:hidden text-white focus:outline-none group"
                onclick="toggleMobileMenu()" aria-label="Toggle menu">
                <div class="w-6 h-5 relative flex flex-col justify-between"><span
                        class="w-full h-0.5 bg-gradient-to-r from-red-500 to-red-400 rounded-full transform transition-all duration-300 group-hover:scale-x-110 menu-bar-1"></span><span
                        class="w-full h-0.5 bg-gradient-to-r from-red-500 to-red-400 rounded-full transition-all duration-300 group-hover:scale-x-110 menu-bar-2"></span><span
                        class="w-full h-0.5 bg-gradient-to-r from-red-500 to-red-400 rounded-full transform transition-all duration-300 group-hover:scale-x-110 menu-bar-3"></span>
                </div>
            </button>
            <div id="mobileMenu"
                class="hidden md:hidden fixed top-[72px] left-0 w-full bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 bg-opacity-98 backdrop-blur-md border-t border-red-500/20 shadow-2xl">
                <ul class="flex flex-col items-center py-6 space-y-3">
                    <li><a href="#home" onclick="closeMobileMenu()"
                            class="relative block text-white hover:text-red-500 transition-all duration-300 px-8 py-4 text-lg font-medium w-64 text-center rounded-xl overflow-hidden group"><span
                                class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                                class="relative z-10 flex items-center justify-center space-x-2"><svg class="w-5 h-5"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg><span>Home</span></span></a></li>
                    <li><a href="#cars" onclick="closeMobileMenu()"
                            class="relative block text-white hover:text-red-500 transition-all duration-300 px-8 py-4 text-lg font-medium w-64 text-center rounded-xl overflow-hidden group"><span
                                class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                                class="relative z-10 flex items-center justify-center space-x-2"><svg class="w-5 h-5"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg><span>Cars</span></span></a></li>
                    <li><a href="#contact" onclick="closeMobileMenu()"
                            class="relative block text-white hover:text-red-500 transition-all duration-300 px-8 py-4 text-lg font-medium w-64 text-center rounded-xl overflow-hidden group"><span
                                class="absolute inset-0 bg-gradient-to-r from-red-500/20 to-red-600/20 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span><span
                                class="relative z-10 flex items-center justify-center space-x-2"><svg class="w-5 h-5"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg><span>Contact</span></span></a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home"
            class="h-screen flex flex-col justify-center items-center text-center px-6 animate-fadeUp delay">
            <h2 class="text-5xl md:text-7xl font-bold mb-6 animate-bounce animate-fadeUp delay">Luxury Meets Performance
            </h2>
            <p class="text-lg mb-8 text-gray-300 animate-fadeUp delay">Find Your Dream Car Today</p>
            <a href="#cars"
                class="glow-btn bg-red-500 px-8 py-4 rounded-full font-bold animate-pulse animate-fadeUp delay">Explore
                Collection</a>
        </section>

        <!-- Animated Car -->
        <div class="mt-12 px-6">
            <div class="relative w-full h-28 overflow-hidden mt-6 animate-fadeUp delay">
                <div class="absolute bottom-8 w-full h-1 bg-white opacity-40 animate-fadeUp delay"></div>
                <div class="car absolute bottom-8 text-5xl animate-fadeUp delay">🚗</div>
            </div>
        </div>

        <!-- Stats Card -->
        <div
            class="max-w-4xl mx-auto bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl border border-white/20 text-center hover:bg-white/20 transform transition-all duration-500 ease-in-out hover:scale-105 hover:-translate-y-3 hover:shadow-[0_20px_50px_rgba(0,0,0,0.7)] animate-fadeUp delay">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 animate-fadeUp delay">🚘 Drive Your Dream Today 🚘
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8 animate-fadeUp delay">Explore premium cars from top global
                brands. Experience luxury, performance, and innovation in one place.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white animate-fadeUp delay">
                <div>
                    <h3 class="text-4xl font-bold text-red-500 animate-fadeUp delay">50+</h3>
                    <p class="text-gray-300 mt-2 animate-fadeUp delay">Premium Brands</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-red-500 animate-fadeUp delay">500+</h3>
                    <p class="text-gray-300 mt-2 animate-fadeUp delay">Luxury Cars</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-red-500 animate-fadeUp delay">100000+</h3>
                    <p class="text-gray-300 mt-2 animate-fadeUp delay">Happy Customers</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CARS SECTION - Each card opens a brand page with multiple car models -->
    <section id="cars" class="py-20 px-6 bg-black bg-opacity-65 animate-fadeUp delay">
        <h2 class="text-4xl font-bold text-center mb-12 hover:text-red-500 transition animate-fadeUp delay">Featured
            Cars</h2>
        <div class="grid md:grid-cols-3 gap-10 animate-fadeUp delay" id="carsGrid">

            <!-- Car 1 - BMW -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://cloud.exclusiveresorts.com/exclusive-resorts/image/upload/f_auto/q_auto:eco/v1641962649/erassets/Club%20Journal/THE-NEW-BMW-M4-COUPE/BMW%20M4%20001_ut2z6l?_a=BBDAADAD0"
                    class="w-full h-56 object-cover" alt="BMW M4">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">BMW</h3>
                    <p class="text-gray-400 mb-4">Ultimate Driving Machine - Explore all BMW models</p>
                    <div class="button-container">
                        <a href="bmw/bmw.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View BMW Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 2 - Audi -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://www.topgear.com/sites/default/files/2024/06/1%20Audi%20R8%20GT%20review.jpg?w=892&h=502"
                    class="w-full h-56 object-cover" alt="Audi R8">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Audi</h3>
                    <p class="text-gray-400 mb-4">Vorsprung durch Technik - Explore all Audi models</p>
                    <div class="button-container">
                        <a href="audi/audi.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Audi Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 3 - Mercedes -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://media.assettype.com/thequint%2F2020-05%2F06103b53-9cf9-4e72-b9d4-10b7b0a41380%2FWhatsApp_Image_2020_05_27_at_12_23_57.jpeg?rect=0%2C0%2C1091%2C614&auto=format%2Ccompress&fmt=webp&width=720"
                    class="w-full h-56 object-cover" alt="Mercedes AMG">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Mercedes-Benz</h3>
                    <p class="text-gray-400 mb-4">The Best or Nothing - Explore all Mercedes models</p>
                    <div class="button-container">
                        <a href="benz/benz.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Mercedes Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 4 - Ferrari - FIXED: Correct href path -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Ferrari_488_GTB_%28cropped%29.jpg/960px-Ferrari_488_GTB_%28cropped%29.jpg"
                    class="w-full h-56 object-cover" alt="Ferrari 488">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Ferrari</h3>
                    <p class="text-gray-400 mb-4">Italian Passion - Explore all Ferrari models</p>
                    <div class="button-container">
                        <a href="ferrari/ferrari.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Ferrari Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 5 - Lamborghini -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/2023_Lamborghini_Aventador_Ultimae.jpg/330px-2023_Lamborghini_Aventador_Ultimae.jpg"
                    class="w-full h-56 object-cover" alt="Lamborghini Aventador">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Lamborghini</h3>
                    <p class="text-gray-400 mb-4">Italian Excellence - Explore all Lamborghini models</p>
                    <div class="button-container">
                        <a href="lambo/Lamborghini.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Lamborghini Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 6 - Koenigsegg -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/2015_Koenigsegg_Agera_N_%2819886243212%29.jpg/330px-2015_Koenigsegg_Agera_N_%2819886243212%29.jpg"
                    class="w-full h-56 object-cover" alt="Koenigsegg Agera">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Koenigsegg</h3>
                    <p class="text-gray-400 mb-4">Swedish Hypercars - Explore all Koenigsegg models</p>
                    <div class="button-container">
                        <a href="koenigsegg/Koenigsegg.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Koenigsegg Models →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Car 7 - Pagani -->
            <div class="card bg-black bg-opacity-70 backdrop-blur-md rounded-xl overflow-hidden">
                <img src="https://www.tomhartleyjnr.com/wp-content/uploads/2019/05/76107-000_1024x768.jpg"
                    class="w-full h-56 object-cover" alt="Pagani Zonda">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2 hover:text-green-500 transition">Pagani</h3>
                    <p class="text-gray-400 mb-4">Italian Art - Explore all Pagani models</p>
                    <div class="button-container">
                        <a href="pagani/Pagani.php"
                            class="glow-btn bg-red-500 px-5 py-2 rounded-lg font-semibold animate-pulse text-white text-center inline-flex items-center justify-center gap-2">
                            View Pagani Models →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about"
        class="py-20 px-6 text-center bg-black bg-opacity-65 hover:text-yellow-500 transition animate-fadeUp delay">
        <h2 class="text-4xl font-bold mb-6 animate-fadeUp delay">About Anto World</h2>
        <p class="max-w-3xl mx-auto text-gray-300 hover:text-yellow-500 transition animate-fadeUp delay">We provide
            premium luxury and sports cars with exceptional service. Experience innovation, speed, and comfort like
            never before.</p>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="relative py-20 px-6 overflow-hidden bg-black bg-opacity-75 animate-fadeUp delay">
        <div class="absolute inset-0 overflow-hidden">
            <div
                class="absolute top-20 left-10 w-72 h-72 bg-red-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse">
            </div>
            <div
                class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse animation-delay-2000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse animation-delay-4000">
            </div>
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        </div>
        <div class="relative z-10">
            <h2 class="text-5xl md:text-6xl font-bold text-center mb-4 animate-fadeUp delay-1"><span
                    class="bg-gradient-to-r from-red-500 via-red-400 to-red-500 bg-clip-text text-transparent hover:scale-110 inline-block transition-transform duration-300 cursor-default">Get
                    In Touch</span></h2>
            <div class="flex justify-center mb-12">
                <div class="w-24 h-1 bg-red-500 rounded-full animate-pulse"></div>
                <div class="w-12 h-1 bg-red-400 rounded-full mx-2 animate-pulse animation-delay-1000"></div>
                <div class="w-24 h-1 bg-red-500 rounded-full animate-pulse animation-delay-2000"></div>
            </div>
            <p
                class="text-center text-gray-400 mb-10 max-w-2xl mx-auto animate-fadeUp delay-2 hover:text-yellow-500 transition">
                Have questions? We'd love to hear from you. Send us a message or reach out directly.</p>
        </div>
        <div class="relative z-10 max-w-xl mx-auto">
            <div
                class="absolute -inset-1 bg-gradient-to-r from-red-600 via-red-500 to-red-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-500">
            </div>
            <form id="contactForm" method="POST" action="submit_contact.php"
                class="relative space-y-6 p-8 rounded-2xl bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-700 shadow-2xl hover:shadow-red-500/20 transition-all duration-500 hover:scale-[1.02] backdrop-blur-sm">
                <div
                    class="absolute top-0 left-0 w-16 h-16 border-t-2 border-l-2 border-red-500 rounded-tl-2xl opacity-50">
                </div>
                <div
                    class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-red-500 rounded-tr-2xl opacity-50">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-red-500 rounded-bl-2xl opacity-50">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 border-b-2 border-r-2 border-red-500 rounded-br-2xl opacity-50">
                </div>

                <div id="formError" class="hidden p-3 rounded-lg bg-red-500/20 border border-red-500 text-red-300 text-sm"></div>

                <div class="relative group animate-fadeUp delay-2"><label
                        class="block text-gray-300 mb-2 font-medium group-hover:text-red-400 transition-colors duration-300">Your
                        Name</label>
                    <div class="relative"><input id="name" name="name" type="text" placeholder="Your Name" required maxlength="150"
                            class="w-full p-4 pl-12 rounded-xl bg-gray-800/50 border-2 border-gray-700 focus:border-red-500 focus:ring-4 focus:ring-red-500/20 outline-none transition-all duration-300 hover:bg-gray-700/50 hover:border-red-400 text-white placeholder-gray-400">
                        <div
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-500 group-focus-within:w-full transition-all duration-500">
                    </div>
                </div>

                <div class="relative group animate-fadeUp delay-3"><label
                        class="block text-gray-300 mb-2 font-medium group-hover:text-red-400 transition-colors duration-300">Email
                        Address</label>
                    <div class="relative"><input id="email" name="email" type="email" placeholder="Email Address" required maxlength="190"
                            class="w-full p-4 pl-12 rounded-xl bg-gray-800/50 border-2 border-gray-700 focus:border-red-500 focus:ring-4 focus:ring-red-500/20 outline-none transition-all duration-300 hover:bg-gray-700/50 hover:border-red-400 text-white placeholder-gray-400">
                        <div
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-red-500 group-focus-within:w-full transition-all duration-500">
                    </div>
                </div>

                <div class="relative group animate-fadeUp delay-4"><label
                        class="block text-gray-300 mb-2 font-medium group-hover:text-red-400 transition-colors duration-300">Your
                        Message</label>
                    <div class="relative"><textarea id="message" name="message" rows="5" placeholder="Tell us about your dream car..."
                            required maxlength="500"
                            class="w-full p-4 pl-12 rounded-xl bg-gray-800/50 border-2 border-gray-700 focus:border-red-500 focus:ring-4 focus:ring-red-500/20 outline-none transition-all duration-300 hover:bg-gray-700/50 hover:border-red-400 text-white placeholder-gray-400 resize-none"></textarea>
                        <div
                            class="absolute left-4 top-6 transform -translate-y-1/2 text-gray-400 group-hover:text-red-400 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute right-0 -bottom-6 text-xs text-gray-500"><span id="charCount">0</span>/500
                    </div>
                </div>

                <div class="relative pt-4 animate-fadeUp delay-4">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-red-600 via-red-500 to-red-600 rounded-xl blur opacity-75 group-hover:opacity-100 transition-opacity duration-500 animate-pulse">
                    </div>
                    <button type="submit"
                        class="glow-btn relative w-full py-4 px-6 bg-gradient-to-r from-red-600 to-red-500 text-white font-bold text-lg rounded-xl overflow-hidden transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-red-500/30 active:scale-95">
                        <span
                            class="absolute inset-0 bg-white opacity-0 hover:opacity-20 transition-opacity duration-300"></span>
                        <span class="relative flex items-center justify-center space-x-3"><span>Send
                                Message</span></span>
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
                    </button>
                </div>
                <div id="successMessage"
                    class="hidden mt-6 p-4 bg-green-500/20 border border-green-500 rounded-xl text-green-400 text-center animate-bounceIn">
                    <i class="fas fa-check-circle mr-2"></i> Message sent successfully! Thanks for your message!
                </div>
            </form>
        </div>

        <!-- Contact Cards -->
        <div class="relative z-10 max-w-4xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 animate-fadeUp delay-3">
            <a href="tel:+919344119956"
                class="group bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 hover:border-red-500 transition-all duration-500 hover:scale-105 hover:shadow-xl hover:shadow-red-500/10">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div
                        class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center group-hover:bg-red-500/20 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Phone</h3>
                    <p class="text-gray-400 group-hover:text-red-400 transition-colors duration-300">+91 9344119956</p>
                </div>
            </a>

            <a href="mailto:info@antoworld.com?subject=Inquiry%20from%20Anto's%20Car%20Showroom"
                class="group bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 hover:border-red-500 transition-all duration-500 hover:scale-105 hover:shadow-xl hover:shadow-red-500/10">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div
                        class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center group-hover:bg-red-500/20 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Email</h3>
                    <p class="text-gray-400 group-hover:text-red-400 transition-colors duration-300">info@antoworld.com
                    </p>
                </div>
            </a>

            <a href="https://maps.google.com/?q=Pollachi+Tamil+Nadu+India" target="_blank" rel="noopener noreferrer"
                class="group bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 hover:border-red-500 transition-all duration-500 hover:scale-105 hover:shadow-xl hover:shadow-red-500/10">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div
                        class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center group-hover:bg-red-500/20 transition-colors duration-300">
                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Location</h3>
                    <p class="text-gray-400 group-hover:text-red-400 transition-colors duration-300">Pollachi, Tamil
                        Nadu, India</p>
                </div>
            </a>
        </div>
    </section>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay">© 2026 Anto World | All
        Rights Reserved | Designed with ❤️ using Tailwind</footer>

    <script>
        // Toggle mobile menu
        window.toggleMobileMenu = function () {
            const menu = document.getElementById('mobileMenu');
            if (menu) menu.classList.toggle('hidden');
        };

        window.closeMobileMenu = function () {
            const menu = document.getElementById('mobileMenu');
            if (menu) menu.classList.add('hidden');
        };

        // Form submission and other functions
        const messageInput = document.getElementById('message');
        const charCount = document.getElementById('charCount');
        if (messageInput && charCount) {
            messageInput.addEventListener('input', function () {
                const count = this.value.length;
                charCount.textContent = count;
                if (count > 450) charCount.style.color = '#ef4444';
                else if (count > 400) charCount.style.color = '#f59e0b';
                else charCount.style.color = '#6b7280';
            });
        }

        // Contact form: submit to submit_contact.php via fetch and store in the database
        const contactForm = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');
        const formError = document.getElementById('formError');

        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();

                if (formError) {
                    formError.classList.add('hidden');
                    formError.textContent = '';
                }

                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = `<span class="flex items-center justify-center space-x-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><span>Sending...</span></span>`;
                submitBtn.disabled = true;

                const formData = new FormData(this);

                fetch('submit_contact.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;

                        if (data.success) {
                            if (successMessage) {
                                successMessage.classList.remove('hidden');
                                successMessage.classList.add('animate-bounceIn');
                            }
                            contactForm.reset();
                            if (charCount) charCount.textContent = '0';
                            setTimeout(() => {
                                if (successMessage) successMessage.classList.add('hidden');
                            }, 5000);
                        } else {
                            const msg = data.error || Object.values(data.errors || {}).join(' ') || 'Something went wrong. Please try again.';
                            if (formError) {
                                formError.textContent = msg;
                                formError.classList.remove('hidden');
                            }
                        }
                    })
                    .catch(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        if (formError) {
                            formError.textContent = 'Network error. Please check your connection and try again.';
                            formError.classList.remove('hidden');
                        }
                    });
            });
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    </script>
</body>

</html>