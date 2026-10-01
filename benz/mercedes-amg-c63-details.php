<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mercedes-AMG C63 - Anto's Car Showroom | Handcrafted V8 Beast</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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

        @keyframes glowPulse {
            0%, 100% {
                box-shadow: 0 0 20px rgba(0, 180, 200, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(0, 180, 200, 0.6);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Slide animations */
        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideOutLeft {
            0% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
                transform: translateX(50px);
            }
        }

        @keyframes slideOutRight {
            0% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
                transform: translateX(-50px);
            }
        }

        /* Full Page Background Image */
        body {
            background-image: url("https://www.nitprocomposites.com/assets/images/blog/can-carbon-fiber-be-transparent-the-science-behind-optical-composites-large.jpg");
            background-size: cover;
            background-position: top;
            background-attachment: fixed;
        }

        .animate-fadeUp {
            animation: fadeUp 0.8s ease-out forwards;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-glow {
            animation: glowPulse 2s ease-in-out infinite;
        }

        .slide-left {
            animation: slideInLeft 0.5s ease-out forwards;
        }

        .slide-right {
            animation: slideInRight 0.5s ease-out forwards;
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
        
        .gallery-container {
            position: relative;
            overflow: hidden;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .gallery-container:hover {
            box-shadow: 0 0 30px rgba(0, 180, 200, 0.3);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            transition: transform 0.5s ease-in-out;
        }
        
        .gallery-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 20;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 180, 200, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .gallery-btn:hover {
            background: rgba(0, 180, 200, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(0, 180, 200, 0.5);
            box-shadow: 0 0 30px rgba(0, 180, 200, 0.5);
        }
        
        .gallery-btn.left {
            left: 10px;
        }
        
        .gallery-btn.right {
            right: 10px;
        }
        
        .image-indicator {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 20;
        }
        
        .indicator-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .indicator-dot:hover {
            background: rgba(0, 180, 200, 0.7);
            transform: scale(1.3);
        }
        
        .indicator-dot.active {
            background: #00b4d8;
            transform: scale(1.2);
            box-shadow: 0 0 15px #00b4d8;
        }
        
        /* Fullscreen Modal Styles */
        .modal-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 60;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 180, 200, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .modal-btn:hover {
            background: rgba(0, 180, 200, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(0, 180, 200, 0.5);
            box-shadow: 0 0 40px rgba(0, 180, 200, 0.6);
        }
        
        .modal-btn.left {
            left: 20px;
        }
        
        .modal-btn.right {
            right: 20px;
        }
        
        .modal-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 60;
        }
        
        .modal-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .modal-dot:hover {
            background: rgba(0, 180, 200, 0.7);
            transform: scale(1.3);
        }
        
        .modal-dot.active {
            background: #00b4d8;
            transform: scale(1.2);
            box-shadow: 0 0 20px #00b4d8;
        }
        
        .modal-counter {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.7);
            padding: 8px 16px;
            border-radius: 20px;
            z-index: 60;
            border: 1px solid rgba(0, 180, 200, 0.2);
            backdrop-filter: blur(5px);
        }
        
        #imageModal {
            transition: opacity 0.3s ease;
        }
        
        #imageModal.flex {
            opacity: 1;
        }
        
        #imageModal.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .gallery-img {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .gallery-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 180, 200, 0.2), transparent);
            transition: left 0.5s ease;
            z-index: 1;
            pointer-events: none;
        }

        .gallery-img:hover::before {
            left: 100%;
        }

        .gallery-img:hover {
            transform: scale(1.08) rotate(1deg);
            box-shadow: 0 20px 40px rgba(0, 180, 200, 0.4);
        }

        /* Enhanced Card Styles */
        .info-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(0, 180, 200, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00b4d8, #00e5ff, #00b4d8);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .info-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: transparent;
        }

        .info-card:hover::before {
            opacity: 0.3;
        }

        .info-card:hover {
            box-shadow: 0 20px 40px rgba(0, 180, 200, 0.3);
        }

        /* Spec item hover effects */
        .spec-item {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-item:hover {
            background: rgba(0, 180, 200, 0.1);
            transform: translateX(10px);
            color: #00e5ff;
        }

        /* List item hover effects */
        .feature-item {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
            list-style-type: none;
            position: relative;
            padding-left: 2rem;
        }

        .feature-item::before {
            content: '●';
            position: absolute;
            left: 0.5rem;
            color: #00b4d8;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(0, 180, 200, 0.1);
            transform: translateX(10px);
            color: #00e5ff;
        }

        .feature-item:hover::before {
            transform: scale(1.3);
            color: #00e5ff;
        }

        /* Performance card hover effects */
        .perf-card {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            background: linear-gradient(145deg, #1f2937, #111827);
        }

        .perf-card::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(0, 180, 200, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .perf-card:hover {
            transform: scale(1.1) translateY(-5px);
            border-color: #00b4d8;
        }

        .perf-card:hover::after {
            width: 300px;
            height: 300px;
        }

        .perf-card:hover h4 {
            color: #00e5ff;
            transform: scale(1.1);
        }

        .perf-card h4 {
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .perf-card p {
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        /* Back button hover */
        .back-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #00b4d8;
            text-shadow: 0 0 10px rgba(0, 180, 200, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(0, 180, 200, 0.5);
        }

        /* Section heading hover */
        .section-heading {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #00b4d8, #00e5ff);
            transition: width 0.3s ease;
        }

        .section-heading:hover::after {
            width: 100%;
        }

        .section-heading:hover {
            transform: translateX(10px);
            color: #00e5ff;
        }

        /* Mercedes Star Logo */
        .mercedes-star {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 20px;
        }
        
        .star {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            position: relative;
            transform: rotate(180deg);
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        
        .star::before {
            content: '';
            position: absolute;
            top: 15px;
            left: -15px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            transform: rotate(70deg);
        }
        
        .star::after {
            content: '';
            position: absolute;
            top: 15px;
            left: -15px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            transform: rotate(-70deg);
        }
        
        .star:hover {
            opacity: 1;
            transform: rotate(180deg) scale(1.1);
        }

        /* Model Selector Styles */
        .model-selector {
            position: relative;
            z-index: 100;
            margin-right: 20px;
        }
        
        .model-selector select {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 180, 200, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2300b4d8'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
        }
        
        .model-selector select:hover {
            border-color: rgba(0, 180, 200, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(0, 180, 200, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #00b4d8;
            box-shadow: 0 0 20px rgba(0, 180, 200, 0.3);
        }
        
        .model-selector option {
            background: #1f2937;
            color: white;
        }

        .glow-btn {
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 180, 200, 0.3);
        }
        .glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 180, 200, 0.6);
            background-color: #008c9e;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-teal-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <!-- Model Selector Dropdown -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="mercedes-amg-gt">🏎️ Mercedes-AMG GT</option>
                    <option value="mercedes-c63" >🏎️ Mercedes-AMG C63 (Current)</option>
                    <option value="mercedes-e63">🏎️ Mercedes-AMG E63 S</option>
                    <option value="mercedes-g63">🏎️ Mercedes-AMG G63</option>
                    <option value="mercedes-s-class">🏎️ Mercedes S-Class</option>
                </select>
            </div>
            <a href="benz.php" class="back-btn text-teal-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Mercedes Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-teal-500 animate-fadeUp delay-1">Mercedes-AMG C63</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Mercedes Star Logo -->
        <div class="mercedes-star">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>

        <!-- Badge -->
        <div class="flex justify-center mb-6">
            <span class="bg-teal-500/20 text-teal-400 px-6 py-2 rounded-full text-sm font-semibold border border-teal-500/30 animate-glow">🏁 Handcrafted V8 | 503 HP | AMG Speedshift 🏁</span>
        </div>

        <!-- Image Gallery with Sliding Navigation - Updated Premium C63 Images -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.topgear.com/sites/default/files/2023/11/1%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502"
                    onclick="openFullscreen(0)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="0"
                    alt="Mercedes-AMG C63 Front">

                <img src="https://www.topgear.com/sites/default/files/2023/11/2%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502"
                    onclick="openFullscreen(1)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="1"
                    alt="Mercedes-AMG C63 Side">

                <img src="https://www.topgear.com/sites/default/files/2023/11/3%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502"
                    onclick="openFullscreen(2)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="2"
                    alt="Mercedes-AMG C63 Rear">
            </div>
            
            <button class="gallery-btn left" onclick="navigateGallery('prev')" id="prevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
            
            <button class="gallery-btn right" onclick="navigateGallery('next')" id="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </button>
            
            <div class="image-indicator">
                <span class="indicator-dot active" onclick="jumpToImage(0)"></span>
                <span class="indicator-dot" onclick="jumpToImage(1)"></span>
                <span class="indicator-dot" onclick="jumpToImage(2)"></span>
                <span class="indicator-dot" onclick="jumpToImage(3)"></span>
                <span class="indicator-dot" onclick="jumpToImage(4)"></span>
                <span class="indicator-dot" onclick="jumpToImage(5)"></span>
            </div>
        </div>

        <!-- Detailed Information Section (Enhanced with richer content) -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Overview</h2>
            <p class="text-gray-300 leading-relaxed animate-fadeUp delay-3 hover:text-white transition-colors">
                The Mercedes-AMG C63 is the ultimate performance sedan - a compact executive car that transforms into 
                a track-ready beast at the push of a button. Powered by a handcrafted 4.0L V8 biturbo engine producing 
                503 horsepower, this magnificent machine can rocket from 0-100 km/h in just 3.9 seconds while maintaining 
                the comfort and sophistication of a luxury sedan. Every engine is built by a single master technician 
                following the "One Man, One Engine" philosophy, making each C63 a unique masterpiece of engineering.
            </p>

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300 animate-fadeUp delay-4">

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-teal-400">Manufacturer:</strong> Mercedes-AMG GmbH</p>
                    <p class="spec-item"><strong class="text-teal-400">Production:</strong> 2015 – Present (W205)</p>
                    <p class="spec-item"><strong class="text-teal-400">Body Style:</strong> 4-door Sedan / Coupe / Wagon</p>
                    <p class="spec-item"><strong class="text-teal-400">Layout:</strong> Front-engine, Rear-wheel drive</p>
                    <p class="spec-item"><strong class="text-teal-400">Transmission:</strong> 9-speed AMG Speedshift MCT</p>
                </div>

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-teal-400">Fuel Type:</strong> Petrol</p>
                    <p class="spec-item"><strong class="text-teal-400">Drivetrain:</strong> RWD</p>
                    <p class="spec-item"><strong class="text-teal-400">Seating Capacity:</strong> 5</p>
                    <p class="spec-item"><strong class="text-teal-400">Fuel Tank Capacity:</strong> 66 Litres</p>
                    <p class="spec-item"><strong class="text-teal-400">Emission Standard:</strong> BS6 / Euro 6</p>
                </div>

            </div>

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Dimensions</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-teal-400">Length:</strong> 4,759 mm</p>
                <p class="spec-item"><strong class="text-teal-400">Width:</strong> 1,839 mm (without mirrors)</p>
                <p class="spec-item"><strong class="text-teal-400">Height:</strong> 1,426 mm</p>
                <p class="spec-item"><strong class="text-teal-400">Wheelbase:</strong> 2,840 mm</p>
                <p class="spec-item"><strong class="text-teal-400">Curb Weight:</strong> Approx. 1,800 kg</p>
                <p class="spec-item"><strong class="text-teal-400">Trunk Capacity:</strong> 435 Litres</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-teal-400">Engine Type:</strong> 4.0L Twin-Turbo V8 (M177)</p>
                <p class="spec-item"><strong class="text-teal-400">Horsepower:</strong> 503 HP @ 6,250 rpm</p>
                <p class="spec-item"><strong class="text-teal-400">Torque:</strong> 700 Nm @ 1,750-4,500 rpm</p>
                <p class="spec-item"><strong class="text-teal-400">Redline:</strong> 7,000 rpm</p>
                <p class="spec-item"><strong class="text-teal-400">Compression Ratio:</strong> 10.5:1</p>
                <p class="spec-item"><strong class="text-teal-400">Engine Layout:</strong> Front-mid, Dry sump lubrication</p>
                <p class="spec-item"><strong class="text-teal-400">0-200 km/h:</strong> 12.5 seconds</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">AMG Performance Steering Wheel in Nappa leather</li>
                <li class="feature-item">12.3-inch Digital Instrument Cluster</li>
                <li class="feature-item">10.25-inch Central Infotainment Display</li>
                <li class="feature-item">Burmester High-End Surround Sound System</li>
                <li class="feature-item">Carbon Fiber / AMG-specific Interior Trim</li>
                <li class="feature-item">AMG Sport Seats with Nappa Leather</li>
                <li class="feature-item">Wireless Apple CarPlay & Android Auto</li>
                <li class="feature-item">AMG Track Pace Data Logger</li>
                <li class="feature-item">Ambient Lighting with 64 Colors</li>
                <li class="feature-item">Head-Up Display with AMG-specific content</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">Active Brake Assist with cross-traffic function</li>
                <li class="feature-item">Attention Assist and Lane Keeping Assist</li>
                <li class="feature-item">Blind Spot Assist with exit warning</li>
                <li class="feature-item">Adaptive Highbeam Assist</li>
                <li class="feature-item">Multiple airbags (front, side, curtain, knee)</li>
                <li class="feature-item">AMG TRACTION CONTROL</li>
                <li class="feature-item">360° camera and parking package</li>
                <li class="feature-item">Active Parking Assist</li>
            </ul>

            <!-- Performance Highlights Section -->
            <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center animate-fadeUp delay-4">
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-teal-400">503 HP</h4>
                    <p class="text-gray-400 text-sm">Max Power</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-teal-400">3.9s</h4>
                    <p class="text-gray-400 text-sm">0–100 km/h</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-teal-400">290 km/h</h4>
                    <p class="text-gray-400 text-sm">Top Speed*</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-teal-400">700 Nm</h4>
                    <p class="text-gray-400 text-sm">Peak Torque</p>
                </div>
            </div>
            <p class="text-gray-500 text-xs text-center mt-2">*Electronically limited</p>

            <!-- Additional Info Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-teal-500 transition-all">
                    <h3 class="text-xl font-bold text-teal-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Acceleration
                    </h3>
                    <p class="text-gray-300">0-200 km/h: 12.5s</p>
                    <p class="text-gray-300">0-250 km/h: 21.5s</p>
                    <p class="text-gray-300">80-120 km/h: 2.4s</p>
                    <p class="text-gray-300">1/4 Mile: 11.8s @ 195 km/h</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-teal-500 transition-all">
                    <h3 class="text-xl font-bold text-teal-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Fuel Economy
                    </h3>
                    <p class="text-gray-300">Combined: 11.2 L/100km</p>
                    <p class="text-gray-300">City: 15.4 L/100km</p>
                    <p class="text-gray-300">Highway: 8.7 L/100km</p>
                    <p class="text-gray-300">CO2 Emissions: 255 g/km</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-teal-500 transition-all">
                    <h3 class="text-xl font-bold text-teal-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        Braking & Track
                    </h3>
                    <p class="text-gray-300">100-0 km/h: 33m</p>
                    <p class="text-gray-300">Nürburgring Lap: 7:45</p>
                    <p class="text-gray-300">Lateral G: 1.05g</p>
                    <p class="text-gray-300">Brake Discs: Carbon Ceramic (390mm front)</p>
                </div>
            </div>

            <!-- AMG Specific Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-teal-500 transition-all">
                    <h3 class="text-xl font-bold text-teal-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4"></path></svg>
                        AMG Exclusive Features
                    </h3>
                    <p class="text-gray-300">AMG Performance Exhaust System</p>
                    <p class="text-gray-300">AMG Ride Control Sports Suspension</p>
                    <p class="text-gray-300">AMG Rear Axle Locking Differential</p>
                    <p class="text-gray-300">AMG DYNAMIC SELECT driving modes</p>
                    <p class="text-gray-300">Handcrafted engine with signature plate</p>
                    <p class="text-gray-300">AMG high-performance composite brakes</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-teal-500 transition-all">
                    <h3 class="text-xl font-bold text-teal-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                        Practicality
                    </h3>
                    <p class="text-gray-300">435L Boot Space</p>
                    <p class="text-gray-300">40/20/40 Split Folding Rear Seats</p>
                    <p class="text-gray-300">5-Seater Configuration</p>
                    <p class="text-gray-300">ISOFIX Child Seat Anchors</p>
                </div>
            </div>

            <!-- Driving Modes -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">AMG DYNAMIC SELECT Modes</h2>
                <div class="flex flex-wrap gap-3 mt-4 text-gray-300">
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-teal-600 transition-all duration-300 cursor-default hover:scale-105">COMFORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-teal-600 transition-all duration-300 cursor-default hover:scale-105">SPORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-teal-600 transition-all duration-300 cursor-default hover:scale-105">SPORT+</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-teal-600 transition-all duration-300 cursor-default hover:scale-105">RACE</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-teal-600 transition-all duration-300 cursor-default hover:scale-105">INDIVIDUAL</span>
                </div>
            </div>

            <!-- Available Colors -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-teal-500 animate-fadeUp">Available Colors</h2>
                <div class="flex flex-wrap gap-4 mt-4">
                    <div class="w-12 h-12 bg-gray-400 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Selenite Grey"></div>
                    <div class="w-12 h-12 bg-blue-800 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Designo Blue"></div>
                    <div class="w-12 h-12 bg-red-700 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Designo Red"></div>
                    <div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Obsidian Black"></div>
                    <div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Polar White"></div>
                    <div class="w-12 h-12 bg-green-800 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Green Hell Magno"></div>
                    <div class="w-12 h-12 bg-silver-500 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Iridium Silver"></div>
                    <div class="w-12 h-12 bg-yellow-600 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Solar Beam Yellow"></div>
                </div>
            </div>

            <!-- Price Section -->
            <div class="bg-gradient-to-r from-teal-900/30 to-teal-600/30 p-6 rounded-xl border border-teal-500/30 mt-4">
                <h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3>
                <div class="flex justify-between items-center flex-wrap gap-4">
                    <div>
                        <p class="text-gray-300"><strong class="text-teal-400">Ex-Showroom Price:</strong> ₹1.50 Crore</p>
                        <p class="text-gray-300"><strong class="text-teal-400">On-Road Price (Mumbai):</strong> ₹1.80 Crore</p>
                        <p class="text-gray-300"><strong class="text-teal-400">EMI Starting From:</strong> ₹2.10 Lakh/month</p>
                    </div>
                    <button onclick="inquireNow()" class="glow-btn bg-teal-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">
                        Inquire Now →
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-teal-500/20">
        <p class="hover:text-teal-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>
    
    <!-- Fullscreen Image Viewer -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50">
        <span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-teal-500 transition-all hover:scale-110 z-60" onclick="closeFullscreen()">×</span>
        <div class="modal-counter" id="modalCounter">1 / 6</div>
        <button class="modal-btn left" onclick="navigateFullscreen('prev')" id="modalPrevBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button class="modal-btn right" onclick="navigateFullscreen('next')" id="modalNextBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </button>
        <img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float">
        <div class="modal-indicator" id="modalIndicators"></div>
    </div>

    <script>
        // Jump to other Mercedes models - navigation hub
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            
            const modelPages = {
                'mercedes-amg-gt': 'mercedes-amg-gt-details.php',
                'mercedes-c63': 'mercedes-c63-details.php',
                'mercedes-e63': 'mercedes-e63-details.php',
                'mercedes-g63': 'mercedes-g63-details.php',
                'mercedes-s-class': 'mercedes-s-class-details.php'
            };
            
            if (modelId && modelPages[modelId]) {
                window.location.href = modelPages[modelId];
            }
            if(!modelId) select.value = "";
        }

        // High-quality Mercedes-AMG C63 image set (curated)
        const allImages = [
            "https://www.topgear.com/sites/default/files/2023/11/1%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/11/2%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/11/3%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/11/4%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/11/5%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/11/6%20Mercedes-AMG%20C63%20S%20E%20Performance.jpg?w=892&h=502"
        ];
        
        let currentGalleryIndex = 0;
        let isAnimating = false;
        const galleryGrid = document.getElementById('galleryGrid');
        const galleryImages = document.querySelectorAll('.gallery-img');
        const indicatorDots = document.querySelectorAll('.indicator-dot');
        
        let currentFullscreenIndex = 0;
        const modalImg = document.getElementById('modalImg');
        const modalCounter = document.getElementById('modalCounter');
        const modalIndicators = document.getElementById('modalIndicators');
        
        function updateGallery(index, direction) {
            if (isAnimating) return;
            isAnimating = true;
            
            if (direction === 'left') {
                galleryGrid.style.animation = 'slideOutRight 0.3s ease-out forwards';
            } else if (direction === 'right') {
                galleryGrid.style.animation = 'slideOutLeft 0.3s ease-out forwards';
            } else {
                galleryGrid.style.animation = 'fadeUp 0.5s ease-out forwards';
            }
            
            setTimeout(() => {
                currentGalleryIndex = index;
                
                galleryImages.forEach((img, i) => {
                    const newIndex = (index + i) % allImages.length;
                    img.src = allImages[newIndex];
                    img.setAttribute('data-index', newIndex);
                });
                
                galleryGrid.style.animation = '';
                if (direction === 'left') {
                    galleryGrid.style.animation = 'slideInLeft 0.3s ease-out forwards';
                } else if (direction === 'right') {
                    galleryGrid.style.animation = 'slideInRight 0.3s ease-out forwards';
                } else {
                    galleryGrid.style.animation = 'fadeUp 0.5s ease-out forwards';
                }
                
                indicatorDots.forEach((dot, i) => {
                    if (i === index) dot.classList.add('active');
                    else dot.classList.remove('active');
                });
                
                setTimeout(() => {
                    galleryGrid.style.animation = '';
                    isAnimating = false;
                }, 300);
            }, direction ? 300 : 0);
        }
        
        function navigateGallery(direction) {
            if (isAnimating) return;
            let newIndex;
            if (direction === 'prev') {
                newIndex = (currentGalleryIndex - 1 + indicatorDots.length) % indicatorDots.length;
                updateGallery(newIndex, 'right');
            } else {
                newIndex = (currentGalleryIndex + 1) % indicatorDots.length;
                updateGallery(newIndex, 'left');
            }
        }
        
        function jumpToImage(index) {
            if (isAnimating || index === currentGalleryIndex) return;
            const direction = index > currentGalleryIndex ? 'left' : 'right';
            updateGallery(index, direction);
        }
        
        function openFullscreen(index) {
            currentFullscreenIndex = index;
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            document.getElementById("imageModal").classList.remove("hidden");
            document.getElementById("imageModal").classList.add("flex");
            document.body.style.overflow = 'hidden';
        }
        
        function closeFullscreen() {
            document.getElementById("imageModal").classList.remove("flex");
            document.getElementById("imageModal").classList.add("hidden");
            document.body.style.overflow = 'auto';
        }
        
        function navigateFullscreen(direction) {
            if (direction === 'prev') {
                currentFullscreenIndex = (currentFullscreenIndex - 1 + allImages.length) % allImages.length;
            } else {
                currentFullscreenIndex = (currentFullscreenIndex + 1) % allImages.length;
            }
            modalImg.style.animation = direction === 'prev' ? 'slideInRight 0.3s ease-out' : 'slideInLeft 0.3s ease-out';
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            setTimeout(() => { modalImg.style.animation = ''; }, 300);
        }
        
        function updateFullscreenIndicators() {
            modalCounter.textContent = `${currentFullscreenIndex + 1} / ${allImages.length}`;
            let dotsHTML = '';
            for (let i = 0; i < allImages.length; i++) {
                dotsHTML += `<span class="modal-dot ${i === currentFullscreenIndex ? 'active' : ''}" onclick="jumpToFullscreen(${i})"></span>`;
            }
            modalIndicators.innerHTML = dotsHTML;
        }
        
        function jumpToFullscreen(index) {
            if (index === currentFullscreenIndex) return;
            const direction = index > currentFullscreenIndex ? 'right' : 'left';
            currentFullscreenIndex = index;
            modalImg.style.animation = direction === 'right' ? 'slideInLeft 0.3s ease-out' : 'slideInRight 0.3s ease-out';
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            setTimeout(() => { modalImg.style.animation = ''; }, 300);
        }
        
        function inquireNow() {
            alert("Thank you for your interest in the Mercedes-AMG C63! Our sales team will contact you shortly.");
            window.location.href = "#contact";
        }
        
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('flex')) {
                if (e.key === 'ArrowLeft') navigateFullscreen('prev');
                else if (e.key === 'ArrowRight') navigateFullscreen('next');
                else if (e.key === 'Escape') closeFullscreen();
            }
        });
        
        updateGallery(0, null);
    </script>
</body>

</html>