<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BMW M8 Competition Details</title>
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
            background: linear-gradient(45deg, #ef4444, #f59e0b, #ef4444);
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
            background: linear-gradient(90deg, #ef4444, #f59e0b);
            transition: width 0.3s ease;
        }

        .section-heading:hover::after {
            width: 100%;
        }

        .section-heading:hover {
            transform: translateX(10px);
            color: #ef4444;
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
                    <option value="bmw-m4">🏎️ BMW M4 Competition</option>
                    <option value="bmw-m3">🏎️ BMW M3 Competition</option>
                    <option value="bmw-m5">🏎️ BMW M5 Competition</option>
                    <option value="bmw-m8">🏎️ BMW M8 Competition (Current)</option>
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
        <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">BMW M8 Competition</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Image Gallery with Sliding Navigation -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.bmw-m.com/content/dam/bmw/marketBMW_M/www_bmw-m_com/fastlane/motorsport/M4-GT3-EVO/2025/bmw-m4-gt3-evo-hd-06-2.jpg?imwidth=1280"
                    onclick="openFullscreen(0)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="0"
                    alt="BMW M8 Front">

                <img src="https://www.topgear.com/sites/default/files/2024/10/8-BMW-M4-review-2024-UK.jpg?w=892&h=502"
                    onclick="openFullscreen(1)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="1"
                    alt="BMW M8 Side">

                <img src="https://www.topgear.com/sites/default/files/2024/10/9-BMW-M4-review-2024-UK.jpg?w=892&h=502"
                    onclick="openFullscreen(2)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="2"
                    alt="BMW M8 Rear">
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

        <!-- Detailed Information Section -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Overview</h2>
            <p class="text-gray-300 leading-relaxed animate-fadeUp delay-3 hover:text-white transition-colors">
                The BMW M8 Competition is the ultimate grand tourer - a perfect fusion of luxury, power, and prestige. 
                Powered by a 4.4L Twin-Turbo V8 producing 617 horsepower, this magnificent machine can rocket from 
                0-100 km/h in just 3.0 seconds while cocooning its occupants in unparalleled luxury. The M8 Competition 
                represents BMW's flagship performance model, combining breathtaking speed with exceptional comfort 
                for long-distance cruising.
            </p>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300 animate-fadeUp delay-4">

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-red-400">Manufacturer:</strong> BMW M GmbH</p>
                    <p class="spec-item"><strong class="text-red-400">Production:</strong> 2019 – Present (G15)</p>
                    <p class="spec-item"><strong class="text-red-400">Body Style:</strong> 2-door Coupe / Convertible / Gran Coupe</p>
                    <p class="spec-item"><strong class="text-red-400">Layout:</strong> Front-engine, All-wheel drive</p>
                    <p class="spec-item"><strong class="text-red-400">Transmission:</strong> 8-speed M Steptronic Automatic</p>
                </div>

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-red-400">Fuel Type:</strong> Petrol</p>
                    <p class="spec-item"><strong class="text-red-400">Drivetrain:</strong> M xDrive AWD (2WD mode available)</p>
                    <p class="spec-item"><strong class="text-red-400">Seating Capacity:</strong> 4</p>
                    <p class="spec-item"><strong class="text-red-400">Fuel Tank Capacity:</strong> 68 Litres</p>
                    <p class="spec-item"><strong class="text-red-400">Emission Standard:</strong> BS6 / Euro 6</p>
                </div>

            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Dimensions</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-red-400">Length:</strong> 4,867 mm (Coupe) / 5,098 mm (Gran Coupe)</p>
                <p class="spec-item"><strong class="text-red-400">Width:</strong> 1,907 mm</p>
                <p class="spec-item"><strong class="text-red-400">Height:</strong> 1,362 mm</p>
                <p class="spec-item"><strong class="text-red-400">Wheelbase:</strong> 2,827 mm</p>
                <p class="spec-item"><strong class="text-red-400">Curb Weight:</strong> Approx. 1,995 kg</p>
                <p class="spec-item"><strong class="text-red-400">Trunk Capacity:</strong> 420 Litres</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-red-400">Engine Type:</strong> S63 4.4L Twin-Turbo V8</p>
                <p class="spec-item"><strong class="text-red-400">Horsepower:</strong> 617 HP @ 6,000 rpm</p>
                <p class="spec-item"><strong class="text-red-400">Torque:</strong> 750 Nm @ 1,800-5,800 rpm</p>
                <p class="spec-item"><strong class="text-red-400">Redline:</strong> 7,200 rpm</p>
                <p class="spec-item"><strong class="text-red-400">Compression Ratio:</strong> 10.0:1</p>
                <p class="spec-item"><strong class="text-red-400">0-200 km/h:</strong> 10.5 seconds</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">12.3-inch Digital Instrument Cluster</li>
                <li class="feature-item">12.3-inch Central Infotainment Display</li>
                <li class="feature-item">Bowers & Wilkins Diamond Surround Sound (1,400W)</li>
                <li class="feature-item">Full Merino Leather Upholstery</li>
                <li class="feature-item">M Sport Seats with Heating, Ventilation & Massage</li>
                <li class="feature-item">4-Zone Automatic Climate Control</li>
                <li class="feature-item">Carbon Fiber Roof (Coupe)</li>
                <li class="feature-item">Sky Lounge Panoramic Sunroof</li>
                <li class="feature-item">Gesture Control & Voice Assistant</li>
                <li class="feature-item">Ambient Lighting with 11 Colors</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">Driving Assistant Professional Package</li>
                <li class="feature-item">Active Cruise Control with Stop & Go</li>
                <li class="feature-item">Lane Keeping Assistant with Active Side Collision Protection</li>
                <li class="feature-item">Crossroads Warning & Crossing Traffic Warning</li>
                <li class="feature-item">Evasive Aid & Steering Intervention</li>
                <li class="feature-item">Parking Assistant Plus with 3D View</li>
                <li class="feature-item">BMW Head-Up Display with M-specific Content</li>
                <li class="feature-item">Night Vision with Animal Detection (Optional)</li>
                <li class="feature-item">360° Surround View Camera</li>
            </ul>

            <!-- Performance Highlights Section -->
            <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center animate-fadeUp delay-4">
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">617 HP</h4>
                    <p class="text-gray-400 text-sm">Max Power</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">3.0s</h4>
                    <p class="text-gray-400 text-sm">0–100 km/h</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">305 km/h</h4>
                    <p class="text-gray-400 text-sm">Top Speed*</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-red-400">750 Nm</h4>
                    <p class="text-gray-400 text-sm">Peak Torque</p>
                </div>
            </div>
            <p class="text-gray-500 text-xs text-center mt-2">*With M Driver's Package</p>

            <!-- Additional Info Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all">
                    <h3 class="text-xl font-bold text-red-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Acceleration
                    </h3>
                    <p class="text-gray-300">0-200 km/h: 10.5s</p>
                    <p class="text-gray-300">0-250 km/h: 17.5s</p>
                    <p class="text-gray-300">80-120 km/h: 2.0s</p>
                    <p class="text-gray-300">1/4 Mile: 10.7s @ 215 km/h</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all">
                    <h3 class="text-xl font-bold text-red-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Fuel Economy
                    </h3>
                    <p class="text-gray-300">Combined: 11.5 L/100km</p>
                    <p class="text-gray-300">City: 15.2 L/100km</p>
                    <p class="text-gray-300">Highway: 9.2 L/100km</p>
                    <p class="text-gray-300">CO2 Emissions: 262 g/km</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all">
                    <h3 class="text-xl font-bold text-red-400 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        Braking & Track
                    </h3>
                    <p class="text-gray-300">100-0 km/h: 31.0m</p>
                    <p class="text-gray-300">Nürburgring Lap: 7:32</p>
                    <p class="text-gray-300">Lateral G: 1.12g</p>
                    <p class="text-gray-300">Brake Discs: 395mm (front) / 380mm (rear)</p>
                </div>
            </div>

            <!-- Driving Modes -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">M Driving Modes</h2>
                <div class="flex flex-wrap gap-3 mt-4 text-gray-300">
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all duration-300 cursor-default hover:scale-105">COMFORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all duration-300 cursor-default hover:scale-105">SPORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all duration-300 cursor-default hover:scale-105">SPORT+</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all duration-300 cursor-default hover:scale-105">TRACK</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all duration-300 cursor-default hover:scale-105">2WD MODE</span>
                </div>
            </div>

            <!-- Available Colors -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-red-500 animate-fadeUp">Available Colors</h2>
                <div class="flex flex-wrap gap-4 mt-4">
                    <div class="w-12 h-12 bg-blue-900 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Frozen Bluestone"></div>
                    <div class="w-12 h-12 bg-red-700 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Frozen Barcelona Red"></div>
                    <div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Frozen Black"></div>
                    <div class="w-12 h-12 bg-gray-400 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Frozen Dark Silver"></div>
                    <div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Alpine White"></div>
                    <div class="w-12 h-12 bg-green-800 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Frozen Deep Green"></div>
                </div>
            </div>

            <!-- Price Section -->
            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-6 rounded-xl border border-red-500/30 mt-4">
                <h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3>
                <div class="flex justify-between items-center flex-wrap gap-4">
                    <div>
                        <p class="text-gray-300"><strong class="text-red-400">Ex-Showroom Price:</strong> ₹2.20 Crore</p>
                        <p class="text-gray-300"><strong class="text-red-400">On-Road Price (Mumbai):</strong> ₹2.65 Crore</p>
                        <p class="text-gray-300"><strong class="text-red-400">EMI Starting From:</strong> ₹3.10 Lakh/month</p>
                    </div>
                    <button onclick="inquireNow()" class="glow-btn bg-red-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">
                        Inquire Now →
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-red-500/20">
        <p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>
    
    <!-- Fullscreen Image Viewer -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50">
        <span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-red-500 transition-all hover:scale-110 z-60" onclick="closeFullscreen()">×</span>
        <div class="modal-counter" id="modalCounter">1 / 6</div>
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
        <img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float">
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
                window.location.href = modelPages[modelId];
            }
            select.value = '';
        }

        // All available images for BMW M8
        const allImages = [
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_033.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_054.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_098.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_005.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_025.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_029.jpg?w=892&h=502"
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
            alert("Thank you for your interest in the BMW M8 Competition! Our sales team will contact you shortly.");
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