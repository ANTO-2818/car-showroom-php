<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BMW M4 Details</title>
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
                box-shadow: 0 0 20px rgba(239, 68, 68, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(239, 68, 68, 0.6);
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

        @keyframes shine {
            0% {
                left: -100%;
            }
            20%, 100% {
                left: 100%;
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
            box-shadow: 0 0 30px rgba(239, 68, 68, 0.3);
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
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .gallery-btn:hover {
            background: rgba(239, 68, 68, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(239, 68, 68, 0.5);
            box-shadow: 0 0 30px rgba(239, 68, 68, 0.5);
        }
        
        .gallery-btn.left {
            left: 10px;
        }
        
        .gallery-btn.right {
            right: 10px;
        }
        
        .gallery-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        
        .gallery-btn:disabled:hover {
            background: rgba(0, 0, 0, 0.7);
            transform: translateY(-50%);
            box-shadow: none;
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
            background: rgba(239, 68, 68, 0.7);
            transform: scale(1.3);
        }
        
        .indicator-dot.active {
            background: #ef4444;
            transform: scale(1.2);
            box-shadow: 0 0 15px #ef4444;
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
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .modal-btn:hover {
            background: rgba(239, 68, 68, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(239, 68, 68, 0.5);
            box-shadow: 0 0 40px rgba(239, 68, 68, 0.6);
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
            background: rgba(239, 68, 68, 0.7);
            transform: scale(1.3);
        }
        
        .modal-dot.active {
            background: #ef4444;
            transform: scale(1.2);
            box-shadow: 0 0 20px #ef4444;
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
            border: 1px solid rgba(255, 255, 255, 0.2);
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
            z-index: 1;
            pointer-events: none;
        }

        .gallery-img:hover::before {
            left: 100%;
        }

        .gallery-img:hover {
            transform: scale(1.08) rotate(1deg);
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.4);
        }

        /* Enhanced Card Styles */
        .info-card {
            background: linear-gradient(145deg, #1a1a1a, #111827);
            border: 1px solid rgba(239, 68, 68, 0.1);
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
            background: linear-gradient(45deg, #4744ef, #be0bf5, #44dbef);
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
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.3);
        }

        /* Spec item hover effects */
        .spec-item {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-item:hover {
            background: rgba(239, 68, 68, 0.1);
            transform: translateX(10px);
            color: #ef4444;
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
            content: '•';
            position: absolute;
            left: 0.5rem;
            color: #ef4444;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(239, 68, 68, 0.1);
            transform: translateX(10px);
            color: #ef4444;
        }

        .feature-item:hover::before {
            transform: scale(1.5);
            color: #f59e0b;
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
            background: rgba(239, 68, 68, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .perf-card:hover {
            transform: scale(1.1) translateY(-5px);
            border-color: #ef4444;
        }

        .perf-card:hover::after {
            width: 300px;
            height: 300px;
        }

        .perf-card:hover h4 {
            color: #ef4444;
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

        /* Navbar hover effects */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #ef4444;
            transform: translateY(-2px);
        }

        /* Back button hover */
        .back-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #ef4444;
            text-shadow: 0 0 10px rgba(239, 68, 68, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(239, 68, 68, 0.5);
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
            background: linear-gradient(90deg, #4463ef, #f59e0b);
            transition: width 0.3s ease;
        }

        .section-heading:hover::after {
            width: 100%;
        }

        .section-heading:hover {
            transform: translateX(10px);
            color: #b93737;
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
            border: 1px solid rgba(239, 68, 68, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23ef4444'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
        }
        
        .model-selector select:hover {
            border-color: rgba(239, 68, 68, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #ef4444;
            box-shadow: 0 0 20px rgba(239, 68, 68, 0.3);
        }
        
        .model-selector option {
            background: #1f2937;
            color: white;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-red-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <!-- Model Selector Dropdown -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="bmw-m4">🏎️ BMW M4 Competition (Current)</option>
                    <option value="bmw-m3">🏎️ BMW M3 Competition</option>
                    <option value="bmw-m5">🏎️ BMW M5 Competition</option>
                    <option value="bmw-m8">🏎️ BMW M8 Competition</option>
                    <option value="bmw-i7">🏎️ BMW i7 M70</option>
                    <option value="bmw-x6m">🏎️ BMW X6 M Competition</option>
                </select>
            </div>
            <a href="bmw.php" class="back-btn text-red-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to BMW Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">BMW M4 Competition</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Image Gallery with Sliding Navigation -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <!-- Main Gallery Grid -->
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.topgear.com/sites/default/files/2024/10/1-BMW-M4-review-2024-UK.jpg?w=892&h=502"
                    onclick="openFullscreen(0)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="0"
                    alt="BMW M4 Front">

                <img src="https://www.topgear.com/sites/default/files/2024/10/2-BMW-M4-review-2024-UK.jpg?w=892&h=502"
                    onclick="openFullscreen(1)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="1"
                    alt="BMW M4 Side">

                <img src="https://www.topgear.com/sites/default/files/2024/10/3-BMW-M4-review-2024-UK.jpg?w=892&h=502"
                    onclick="openFullscreen(2)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="2"
                    alt="BMW M4 Rear">
            </div>
            
            <!-- Navigation Buttons for Gallery -->
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
            
            <!-- Image Indicators for Gallery -->
            <div class="image-indicator">
                <span class="indicator-dot active" onclick="jumpToImage(0)"></span>
                <span class="indicator-dot" onclick="jumpToImage(1)"></span>
                <span class="indicator-dot" onclick="jumpToImage(2)"></span>
                <span class="indicator-dot" onclick="jumpToImage(3)"></span>
                <span class="indicator-dot" onclick="jumpToImage(4)"></span>
                <span class="indicator-dot" onclick="jumpToImage(5)"></span>
            </div>
        </div>

        <!-- Detailed Information Section -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Overview</h2>
            <p class="text-gray-300 leading-relaxed animate-fadeUp delay-3 hover:text-white transition-colors">
                The BMW M4 is a high-performance sports coupe developed by BMW's M division.
                It combines aggressive styling, track-ready engineering, and everyday usability.
                Designed for driving enthusiasts, the M4 delivers exceptional handling,
                precise steering feedback, and powerful turbocharged performance.
            </p>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300 animate-fadeUp delay-4">

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-red-400">Manufacturer:</strong> BMW M GmbH</p>
                    <p class="spec-item"><strong class="text-red-400">Production:</strong> 2014 – Present</p>
                    <p class="spec-item"><strong class="text-red-400">Body Style:</strong> 2-door Coupe / Convertible</p>
                    <p class="spec-item"><strong class="text-red-400">Layout:</strong> Front-engine, Rear-wheel drive</p>
                    <p class="spec-item"><strong class="text-red-400">Transmission:</strong> 6-speed Manual / 8-speed Automatic</p>
                </div>

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-red-400">Fuel Type:</strong> Petrol</p>
                    <p class="spec-item"><strong class="text-red-400">Drivetrain:</strong> RWD / AWD (Competition xDrive)</p>
                    <p class="spec-item"><strong class="text-red-400">Seating Capacity:</strong> 4</p>
                    <p class="spec-item"><strong class="text-red-400">Fuel Tank Capacity:</strong> 59 Litres</p>
                    <p class="spec-item"><strong class="text-red-400">Emission Standard:</strong> BS6 / Euro 6</p>
                </div>

            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Dimensions</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-red-400">Length:</strong> 4,794 mm</p>
                <p class="spec-item"><strong class="text-red-400">Width:</strong> 1,887 mm</p>
                <p class="spec-item"><strong class="text-red-400">Height:</strong> 1,393 mm</p>
                <p class="spec-item"><strong class="text-red-400">Wheelbase:</strong> 2,857 mm</p>
                <p class="spec-item"><strong class="text-red-400">Curb Weight:</strong> Approx. 1,725 kg</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">12.3-inch Digital Instrument Cluster</li>
                <li class="feature-item">14.9-inch Curved Infotainment Display</li>
                <li class="feature-item">Harman Kardon Surround Sound System</li>
                <li class="feature-item">Carbon Fiber Interior Trim</li>
                <li class="feature-item">Wireless Apple CarPlay & Android Auto</li>
                <li class="feature-item">Heated M Sport Seats</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">Adaptive Cruise Control</li>
                <li class="feature-item">Lane Departure Warning</li>
                <li class="feature-item">Blind Spot Detection</li>
                <li class="feature-item">Multiple Airbags</li>
                <li class="feature-item">Dynamic Stability Control (DSC)</li>
                <li class="feature-item">Parking Assistant with Reversing Camera</li>
            </ul>

            <!-- Performance Highlights Section -->
            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center animate-fadeUp delay-4">
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">473 HP</h4>
                    <p class="text-gray-400 text-sm">Base Power</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">3.8s</h4>
                    <p class="text-gray-400 text-sm">0–100 km/h</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">290 km/h</h4>
                    <p class="text-gray-400 text-sm">Top Speed</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">550 Nm</h4>
                    <p class="text-gray-400 text-sm">Torque</p>
                </div>
            </div>

            <!-- Additional Info Section with hover effects -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all">
                    <h3 class="text-xl font-bold text-red-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Acceleration
                    </h3>
                    <p class="text-gray-300">0-200 km/h: 11.8s | 0-250 km/h: 16.5s</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all">
                    <h3 class="text-xl font-bold text-red-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Fuel Economy
                    </h3>
                    <p class="text-gray-300">Combined: 10.1 L/100km | CO2: 229 g/km</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-red-500/20">
        <p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>
    
    <!-- Fullscreen Image Viewer with Navigation -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50">
        <!-- Close button -->
        <span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-red-500 transition-all hover:scale-110 z-60" onclick="closeFullscreen()">×</span>
        
        <!-- Image counter -->
        <div class="modal-counter" id="modalCounter">1 / 6</div>
        
        <!-- Navigation buttons for fullscreen -->
        <button class="modal-btn left" onclick="navigateFullscreen('prev')" id="modalPrevBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </button>
        
        <button class="modal-btn right" onclick="navigateFullscreen('next')" id="modalNextBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18l6-6-6-6"/>
            </svg>
        </button>
        
        <!-- Main fullscreen image -->
        <img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float">
        
        <!-- Image indicators for fullscreen -->
        <div class="modal-indicator" id="modalIndicators"></div>
    </div>

    <script>
        // Jump to other BMW models
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            
            const modelPages = {
                'bmw-m4': 'bmw-m4-details.php',
                'bmw-m3': 'bmw-m3-details.php',
                'bmw-m5': 'bmw-m5-details.php',
                'bmw-m8': 'bmw-m8-details.php',
                'bmw-i7': 'bmw-i7-details.php',
                'bmw-x6m': 'bmw-x6m-details.php'
            };
            
            if (modelId && modelPages[modelId]) {
                // Add loading effect to button if needed
                window.location.href = modelPages[modelId];
            }
            // Reset select
            select.value = '';
        }

        // All available images (full collection)
        const allImages = [
            "https://www.topgear.com/sites/default/files/2024/10/1-BMW-M4-review-2024-UK.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2024/10/2-BMW-M4-review-2024-UK.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2024/10/3-BMW-M4-review-2024-UK.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2024/10/8-BMW-M4-review-2024-UK.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2024/10/9-BMW-M4-review-2024-UK.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2024/10/6-BMW-M4-review-2024-UK.jpg?w=892&h=502"
        ];
        
        // Gallery state
        let currentGalleryIndex = 0;
        let isAnimating = false;
        const galleryGrid = document.getElementById('galleryGrid');
        const galleryImages = document.querySelectorAll('.gallery-img');
        const indicatorDots = document.querySelectorAll('.indicator-dot');
        
        // Fullscreen state
        let currentFullscreenIndex = 0;
        const modalImg = document.getElementById('modalImg');
        const modalCounter = document.getElementById('modalCounter');
        const modalIndicators = document.getElementById('modalIndicators');
        
        // Update gallery display with sliding animation
        function updateGallery(index, direction) {
            if (isAnimating) return;
            isAnimating = true;
            
            // Add slide animation class based on direction
            if (direction === 'left') {
                galleryGrid.style.animation = 'slideOutRight 0.3s ease-out forwards';
            } else if (direction === 'right') {
                galleryGrid.style.animation = 'slideOutLeft 0.3s ease-out forwards';
            } else {
                // Initial load - just fade in
                galleryGrid.style.animation = 'fadeUp 0.5s ease-out forwards';
            }
            
            // Update after animation
            setTimeout(() => {
                currentGalleryIndex = index;
                
                // Update image sources
                galleryImages.forEach((img, i) => {
                    const newIndex = (index + i) % allImages.length;
                    img.src = allImages[newIndex];
                    img.setAttribute('data-index', newIndex);
                });
                
                // Reset animation and apply slide-in
                galleryGrid.style.animation = '';
                if (direction === 'left') {
                    galleryGrid.style.animation = 'slideInLeft 0.3s ease-out forwards';
                } else if (direction === 'right') {
                    galleryGrid.style.animation = 'slideInRight 0.3s ease-out forwards';
                } else {
                    galleryGrid.style.animation = 'fadeUp 0.5s ease-out forwards';
                }
                
                // Update active dot
                indicatorDots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
                
                // Clear animation after completion
                setTimeout(() => {
                    galleryGrid.style.animation = '';
                    isAnimating = false;
                }, 300);
            }, direction ? 300 : 0);
        }
        
        // Navigate gallery
        function navigateGallery(direction) {
            if (isAnimating) return;
            
            let newIndex;
            if (direction === 'prev') {
                newIndex = (currentGalleryIndex - 1 + indicatorDots.length) % indicatorDots.length;
                updateGallery(newIndex, 'right');
            } else if (direction === 'next') {
                newIndex = (currentGalleryIndex + 1) % indicatorDots.length;
                updateGallery(newIndex, 'left');
            }
        }
        
        // Jump to specific gallery image set
        function jumpToImage(index) {
            if (isAnimating || index === currentGalleryIndex) return;
            
            const direction = index > currentGalleryIndex ? 'left' : 'right';
            updateGallery(index, direction);
        }
        
        // Open fullscreen viewer
        function openFullscreen(index) {
            currentFullscreenIndex = index;
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            document.getElementById("imageModal").classList.remove("hidden");
            document.getElementById("imageModal").classList.add("flex");
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }
        
        // Close fullscreen viewer
        function closeFullscreen() {
            document.getElementById("imageModal").classList.remove("flex");
            document.getElementById("imageModal").classList.add("hidden");
            document.body.style.overflow = 'auto'; // Restore scrolling
        }
        
        // Navigate fullscreen images
        function navigateFullscreen(direction) {
            if (direction === 'prev') {
                currentFullscreenIndex = (currentFullscreenIndex - 1 + allImages.length) % allImages.length;
            } else if (direction === 'next') {
                currentFullscreenIndex = (currentFullscreenIndex + 1) % allImages.length;
            }
            
            // Add slide animation to modal image
            modalImg.style.animation = direction === 'prev' ? 'slideInRight 0.3s ease-out' : 'slideInLeft 0.3s ease-out';
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            
            // Clear animation
            setTimeout(() => {
                modalImg.style.animation = '';
            }, 300);
        }
        
        // Update fullscreen indicators
        function updateFullscreenIndicators() {
            // Update counter
            modalCounter.textContent = `${currentFullscreenIndex + 1} / ${allImages.length}`;
            
            // Generate indicator dots
            let dotsHTML = '';
            for (let i = 0; i < allImages.length; i++) {
                dotsHTML += `<span class="modal-dot ${i === currentFullscreenIndex ? 'active' : ''}" onclick="jumpToFullscreen(${i})"></span>`;
            }
            modalIndicators.innerHTML = dotsHTML;
        }
        
        // Jump to specific fullscreen image
        function jumpToFullscreen(index) {
            if (index === currentFullscreenIndex) return;
            
            const direction = index > currentFullscreenIndex ? 'right' : 'left';
            currentFullscreenIndex = index;
            
            // Add slide animation
            modalImg.style.animation = direction === 'right' ? 'slideInLeft 0.3s ease-out' : 'slideInRight 0.3s ease-out';
            modalImg.src = allImages[currentFullscreenIndex];
            updateFullscreenIndicators();
            
            setTimeout(() => {
                modalImg.style.animation = '';
            }, 300);
        }
        
        // Keyboard navigation for fullscreen
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('imageModal');
            if (modal.classList.contains('flex')) {
                if (e.key === 'ArrowLeft') {
                    navigateFullscreen('prev');
                } else if (e.key === 'ArrowRight') {
                    navigateFullscreen('next');
                } else if (e.key === 'Escape') {
                    closeFullscreen();
                }
            }
        });
        
        // Initialize gallery
        updateGallery(0, null);
    </script>
</body>

</html>