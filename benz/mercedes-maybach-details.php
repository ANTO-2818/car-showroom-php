<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mercedes-Maybach S-Class - Anto's Car Showroom | Pinnacle of Luxury</title>
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
                box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(212, 175, 55, 0.6);
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

        @keyframes luxuryGlow {
            0%, 100% {
                text-shadow: 0 0 5px rgba(212, 175, 55, 0.3);
            }
            50% {
                text-shadow: 0 0 20px rgba(212, 175, 55, 0.6);
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

        .luxury-glow {
            animation: luxuryGlow 2s ease-in-out infinite;
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
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.3);
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
            border: 1px solid rgba(212, 175, 55, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .gallery-btn:hover {
            background: rgba(212, 175, 55, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 0 30px rgba(212, 175, 55, 0.5);
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
            background: rgba(212, 175, 55, 0.7);
            transform: scale(1.3);
        }
        
        .indicator-dot.active {
            background: #d4af37;
            transform: scale(1.2);
            box-shadow: 0 0 15px #d4af37;
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
            border: 1px solid rgba(212, 175, 55, 0.2);
            backdrop-filter: blur(5px);
        }
        
        .modal-btn:hover {
            background: rgba(212, 175, 55, 0.9);
            transform: translateY(-50%) scale(1.2);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 0 40px rgba(212, 175, 55, 0.6);
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
            background: rgba(212, 175, 55, 0.7);
            transform: scale(1.3);
        }
        
        .modal-dot.active {
            background: #d4af37;
            transform: scale(1.2);
            box-shadow: 0 0 20px #d4af37;
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
            border: 1px solid rgba(212, 175, 55, 0.2);
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
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.2), transparent);
            transition: left 0.5s ease;
            z-index: 1;
            pointer-events: none;
        }

        .gallery-img:hover::before {
            left: 100%;
        }

        .gallery-img:hover {
            transform: scale(1.08) rotate(1deg);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.4);
        }

        /* Enhanced Card Styles */
        .info-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(212, 175, 55, 0.1);
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
            background: linear-gradient(45deg, #d4af37, #f0d060, #d4af37);
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
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.3);
        }

        /* Spec item hover effects */
        .spec-item {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-item:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateX(10px);
            color: #d4af37;
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
            content: '✦';
            position: absolute;
            left: 0.5rem;
            color: #d4af37;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateX(10px);
            color: #d4af37;
        }

        .feature-item:hover::before {
            transform: scale(1.3);
            color: #f0d060;
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
            background: rgba(212, 175, 55, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .perf-card:hover {
            transform: scale(1.1) translateY(-5px);
            border-color: #d4af37;
        }

        .perf-card:hover::after {
            width: 300px;
            height: 300px;
        }

        .perf-card:hover h4 {
            color: #d4af37;
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
            color: #d4af37;
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(212, 175, 55, 0.5);
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
            background: linear-gradient(90deg, #d4af37, #f0d060);
            transition: width 0.3s ease;
        }

        .section-heading:hover::after {
            width: 100%;
        }

        .section-heading:hover {
            transform: translateX(10px);
            color: #d4af37;
        }

        /* Mercedes-Maybach Logo */
        .maybach-logo {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .maybach-icon {
            font-size: 48px;
            filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.5));
            transition: all 0.3s ease;
        }
        
        .maybach-icon:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 0 20px rgba(212, 175, 55, 0.8));
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
            border: 1px solid rgba(212, 175, 55, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23d4af37'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
        }
        
        .model-selector select:hover {
            border-color: rgba(212, 175, 55, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #d4af37;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
        }
        
        .model-selector option {
            background: #1f2937;
            color: white;
        }

        .glow-btn {
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
        }
        .glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.6);
            background-color: #b8960c;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-yellow-600/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <!-- Model Selector Dropdown -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="mercedes-amg-gt">🏎️ Mercedes-AMG GT</option>
                    <option value="mercedes-c63">🏎️ Mercedes-AMG C63</option>
                    <option value="mercedes-e63">🏎️ Mercedes-AMG E63 S</option>
                    <option value="mercedes-g63">🏎️ Mercedes-AMG G63</option>
                    <option value="mercedes-s-class" >🏎️ Mercedes-Maybach S-Class (Current)</option>
                </select>
            </div>
            <a href="benz.php" class="back-btn text-yellow-600 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Mercedes Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-yellow-600 animate-fadeUp delay-1">Mercedes-Maybach S-Class</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Maybach Logo -->
        <div class="maybach-logo">
            <div class="maybach-icon">👑</div>
        </div>

        <!-- Luxury Badge -->
        <div class="flex justify-center mb-6">
            <span class="bg-yellow-600/20 text-yellow-500 px-6 py-2 rounded-full text-sm font-semibold border border-yellow-600/30 animate-glow luxury-glow">👑 ULTIMATE LUXURY | V12 | MAYBACH 👑</span>
        </div>

        <!-- Image Gallery with Sliding Navigation - Updated Premium Maybach Images -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.topgear.com/sites/default/files/2023/04/2%20Mercedes-Maybach%20S-Class%20review%20%282%29.jpg?w=892&h=502"
                    onclick="openFullscreen(0)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="0"
                    alt="Mercedes-Maybach S-Class Front">

                <img src="https://www.topgear.com/sites/default/files/2023/04/3%20Mercedes-Maybach%20S-Class%20review%20%283%29.jpg?w=892&h=502"
                    onclick="openFullscreen(1)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="1"
                    alt="Mercedes-Maybach S-Class Side">

                <img src="https://www.topgear.com/sites/default/files/2023/04/4%20Mercedes-Maybach%20S-Class%20review%20%284%29.jpg?w=892&h=502"
                    onclick="openFullscreen(2)"
                    class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img"
                    data-index="2"
                    alt="Mercedes-Maybach S-Class Rear">
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

        <!-- Detailed Information Section (Enhanced with Maybach-specific content) -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Overview</h2>
            <p class="text-gray-300 leading-relaxed animate-fadeUp delay-3 hover:text-white transition-colors">
                The Mercedes-Maybach S-Class is the pinnacle of automotive luxury - a chauffeur-driven masterpiece that 
                redefines what a luxury sedan can be. Powered by a legendary 6.0L V12 biturbo engine producing 612 horsepower, 
                this magnificent vehicle glides from 0-100 km/h in just 4.5 seconds while offering unparalleled comfort 
                and opulence. The Maybach S-Class features the longest wheelbase in its class, executive rear seats 
                with massage functions, and the most advanced technology Mercedes-Benz has to offer. Every detail, from 
                the handcrafted leather to the optional champagne cooler, is designed to provide the ultimate travel 
                experience for discerning dignitaries, celebrities, and business leaders worldwide.
            </p>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300 animate-fadeUp delay-4">

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-yellow-500">Manufacturer:</strong> Mercedes-Maybach</p>
                    <p class="spec-item"><strong class="text-yellow-500">Production:</strong> 2015 – Present (Z223)</p>
                    <p class="spec-item"><strong class="text-yellow-500">Body Style:</strong> 4-door Ultra-Luxury Sedan</p>
                    <p class="spec-item"><strong class="text-yellow-500">Layout:</strong> Front-engine, Rear-wheel drive / 4MATIC</p>
                    <p class="spec-item"><strong class="text-yellow-500">Transmission:</strong> 9-speed 9G-TRONIC Automatic</p>
                </div>

                <div class="space-y-2">
                    <p class="spec-item"><strong class="text-yellow-500">Fuel Type:</strong> Petrol</p>
                    <p class="spec-item"><strong class="text-yellow-500">Drivetrain:</strong> RWD / 4MATIC AWD</p>
                    <p class="spec-item"><strong class="text-yellow-500">Seating Capacity:</strong> 4 / 5</p>
                    <p class="spec-item"><strong class="text-yellow-500">Fuel Tank Capacity:</strong> 76 Litres</p>
                    <p class="spec-item"><strong class="text-yellow-500">Emission Standard:</strong> BS6 / Euro 6</p>
                </div>

            </div>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Dimensions</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-yellow-500">Length:</strong> 5,469 mm (Maybach-specific)</p>
                <p class="spec-item"><strong class="text-yellow-500">Width:</strong> 1,921 mm (without mirrors)</p>
                <p class="spec-item"><strong class="text-yellow-500">Height:</strong> 1,510 mm</p>
                <p class="spec-item"><strong class="text-yellow-500">Wheelbase:</strong> 3,396 mm (+180mm over standard S-Class)</p>
                <p class="spec-item"><strong class="text-yellow-500">Curb Weight:</strong> Approx. 2,350 kg</p>
                <p class="spec-item"><strong class="text-yellow-500">Trunk Capacity:</strong> 510 Litres</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2 animate-fadeUp delay-4">
                <p class="spec-item"><strong class="text-yellow-500">Engine Type:</strong> 6.0L Twin-Turbo V12 (M279)</p>
                <p class="spec-item"><strong class="text-yellow-500">Horsepower:</strong> 612 HP @ 5,250-5,750 rpm</p>
                <p class="spec-item"><strong class="text-yellow-500">Torque:</strong> 900 Nm @ 2,000-4,000 rpm</p>
                <p class="spec-item"><strong class="text-yellow-500">Redline:</strong> 6,500 rpm</p>
                <p class="spec-item"><strong class="text-yellow-500">Compression Ratio:</strong> 9.0:1</p>
                <p class="spec-item"><strong class="text-yellow-500">Engine Layout:</strong> Front-engine, Longitudinal</p>
                <p class="spec-item"><strong class="text-yellow-500">0-200 km/h:</strong> 14.2 seconds</p>
            </div>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Maybach-Exclusive Interior</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">Executive Rear Seats with Recline Function (up to 43.5°)</li>
                <li class="feature-item">Rear Seat Massage with 6 Programs & Heating/Ventilation</li>
                <li class="feature-item">First-Class Rear Executive Lounge with Footrests</li>
                <li class="feature-item">Neck and Shoulder Heating System</li>
                <li class="feature-item">Rear Seat Comfort Package with Power Adjustable Seats</li>
                <li class="feature-item">Exclusive Nappa Leather with Maybach Embossing</li>
                <li class="feature-item">MANUFAKTUR Exclusive Paint and Leather Options</li>
                <li class="feature-item">Wood and Nappa Leather Trim Elements</li>
                <li class="feature-item">Thermoelectric Cup Holder (Heating/Cooling)</li>
                <li class="feature-item">Champagne Cooler in Rear (Optional)</li>
                <li class="feature-item">Silver Champagne Flutes (Optional)</li>
                <li class="feature-item">Power Closing Doors for All Doors</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Technology & Entertainment</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">12.8-inch OLED Central Display</li>
                <li class="feature-item">12.3-inch Digital Instrument Cluster</li>
                <li class="feature-item">Two 11.6-inch Rear Seat Entertainment Displays</li>
                <li class="feature-item">MBUX Rear Tablet (7-inch) for Rear Controls</li>
                <li class="feature-item">Burmester High-End 4D Surround Sound (1,750W, 31 speakers)</li>
                <li class="feature-item">MBUX Voice Assistant with "Hey Mercedes"</li>
                <li class="feature-item">Augmented Reality Navigation</li>
                <li class="feature-item">Wireless Apple CarPlay & Android Auto</li>
                <li class="feature-item">Mercedes me connect services</li>
                <li class="feature-item">Over-the-air (OTA) updates</li>
                <li class="feature-item">Head-Up Display with AR Content</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Luxury Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">Maybach-specific Radiator Grille with Vertical Struts</li>
                <li class="feature-item">Power Closing Doors</li>
                <li class="feature-item">Panoramic Sliding Sunroof</li>
                <li class="feature-item">Ambient Lighting with 64 Colors + Maybach-specific Modes</li>
                <li class="feature-item">ENERGIZING Comfort Control</li>
                <li class="feature-item">Air Balance Cabin Fragrancing System</li>
                <li class="feature-item">Active Ambient Lighting</li>
                <li class="feature-item">Heated Steering Wheel</li>
                <li class="feature-item">Heated Armrests (Front and Rear)</li>
                <li class="feature-item">Exclusive 20-inch or 21-inch Maybach Wheels</li>
                <li class="feature-item">Two-tone Paint Options</li>
            </ul>

            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300 animate-fadeUp delay-4">
                <li class="feature-item">DRIVE PILOT (Level 3 Autonomous Driving - Conditional)</li>
                <li class="feature-item">Active Brake Assist with cross-traffic function</li>
                <li class="feature-item">Active Lane Keeping Assist</li>
                <li class="feature-item">Active Blind Spot Assist</li>
                <li class="feature-item">Adaptive Highbeam Assist Plus</li>
                <li class="feature-item">PRE-SAFE® System</li>
                <li class="feature-item">PRE-SAFE® Impulse Side</li>
                <li class="feature-item">PRE-SAFE® PLUS (Rear-end collision protection)</li>
                <li class="feature-item">Multiple airbags (front, side, curtain, knee)</li>
                <li class="feature-item">360° camera and parking package</li>
                <li class="feature-item">Active Parking Assist</li>
                <li class="feature-item">Rear Airbags (Optional)</li>
            </ul>

            <!-- Performance Highlights Section -->
            <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center animate-fadeUp delay-4">
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-yellow-500">612 HP</h4>
                    <p class="text-gray-400 text-sm">Max Power</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-yellow-500">4.5s</h4>
                    <p class="text-gray-400 text-sm">0–100 km/h</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-yellow-500">250 km/h</h4>
                    <p class="text-gray-400 text-sm">Top Speed</p>
                </div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700">
                    <h4 class="text-3xl font-bold text-yellow-500">900 Nm</h4>
                    <p class="text-gray-400 text-sm">Peak Torque</p>
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-yellow-600 transition-all">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Acceleration
                    </h3>
                    <p class="text-gray-300">0-200 km/h: 14.2s</p>
                    <p class="text-gray-300">80-120 km/h: 2.5s</p>
                    <p class="text-gray-300">1/4 Mile: 12.5s @ 185 km/h</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-yellow-600 transition-all">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Fuel Economy
                    </h3>
                    <p class="text-gray-300">Combined: 13.0 L/100km</p>
                    <p class="text-gray-300">City: 18.5 L/100km</p>
                    <p class="text-gray-300">Highway: 9.8 L/100km</p>
                    <p class="text-gray-300">CO2 Emissions: 296 g/km</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-yellow-600 transition-all">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        Suspension
                    </h3>
                    <p class="text-gray-300">AIRMATIC Air Suspension</p>
                    <p class="text-gray-300">Active Body Control (ABC)</p>
                    <p class="text-gray-300">Road Surface Scan (Cameras)</p>
                    <p class="text-gray-300">Curve Tilting Function</p>
                </div>
            </div>

            <!-- Maybach Exclusive Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-yellow-600 transition-all">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4"></path></svg>
                        Maybach Signature Features
                    </h3>
                    <p class="text-gray-300">Maybach-specific radiator grille</p>
                    <p class="text-gray-300">Maybach hood ornament</p>
                    <p class="text-gray-300">Maybach logos on C-pillars</p>
                    <p class="text-gray-300">Maybach-branded puddle lights</p>
                    <p class="text-gray-300">Exclusive Maybach wheels</p>
                    <p class="text-gray-300">MANUFAKTUR two-tone paint</p>
                </div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-yellow-600 transition-all">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                        Practicality
                    </h3>
                    <p class="text-gray-300">510L Boot Space</p>
                    <p class="text-gray-300">Pass-through to Trunk from Rear</p>
                    <p class="text-gray-300">4-Seater Executive Configuration</p>
                    <p class="text-gray-300">ISOFIX Child Seat Anchors</p>
                </div>
            </div>

            <!-- Driving Modes -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">Driving Modes</h2>
                <div class="flex flex-wrap gap-3 mt-4 text-gray-300">
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-yellow-600 transition-all duration-300 cursor-default hover:scale-105">COMFORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-yellow-600 transition-all duration-300 cursor-default hover:scale-105">SPORT</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-yellow-600 transition-all duration-300 cursor-default hover:scale-105">ECO</span>
                    <span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-yellow-600 transition-all duration-300 cursor-default hover:scale-105">INDIVIDUAL</span>
                </div>
            </div>

            <!-- Available Colors -->
            <div class="pt-4">
                <h2 class="section-heading text-3xl font-bold text-yellow-600 animate-fadeUp">MANUFAKTUR Exclusive Colors</h2>
                <div class="flex flex-wrap gap-4 mt-4">
                    <div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Obsidian Black"></div>
                    <div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Polar White"></div>
                    <div class="w-12 h-12 bg-gray-500 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Rubellite Red"></div>
                    <div class="w-12 h-12 bg-blue-900 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Sodalite Blue"></div>
                    <div class="w-12 h-12 bg-silver-400 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Cashmere White"></div>
                    <div class="w-12 h-12 bg-green-900 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Emerald Green"></div>
                    <div class="w-12 h-12 bg-brown-700 rounded-full hover:scale-125 transition-all duration-300 cursor-pointer border-2 border-gray-500" title="Espresso Brown"></div>
                </div>
                <p class="text-gray-400 text-sm text-center mt-4">*Two-tone paint options available on request</p>
            </div>

            <!-- Price Section -->
            <div class="bg-gradient-to-r from-yellow-900/30 to-yellow-600/30 p-6 rounded-xl border border-yellow-600/30 mt-4">
                <h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3>
                <div class="flex justify-between items-center flex-wrap gap-4">
                    <div>
                        <p class="text-gray-300"><strong class="text-yellow-500">Ex-Showroom Price:</strong> ₹2.70 Crore</p>
                        <p class="text-gray-300"><strong class="text-yellow-500">On-Road Price (Mumbai):</strong> ₹3.25 Crore</p>
                        <p class="text-gray-300"><strong class="text-yellow-500">EMI Starting From:</strong> ₹3.80 Lakh/month</p>
                    </div>
                    <button onclick="inquireNow()" class="glow-btn bg-yellow-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">
                        Inquire Now →
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-yellow-600/20">
        <p class="hover:text-yellow-500 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>
    
    <!-- Fullscreen Image Viewer -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50">
        <span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-yellow-500 transition-all hover:scale-110 z-60" onclick="closeFullscreen()">×</span>
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

        // High-quality Mercedes-Maybach S-Class image set (curated)
        const allImages = [
            "https://www.topgear.com/sites/default/files/2023/04/1%20Mercedes-Maybach%20S-Class%20review%20%281%29.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/04/2%20Mercedes-Maybach%20S-Class%20review%20%282%29.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/04/3%20Mercedes-Maybach%20S-Class%20review%20%283%29.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/04/4%20Mercedes-Maybach%20S-Class%20review%20%284%29.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/04/5%20Mercedes-Maybach%20S-Class%20review%20%285%29.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2023/04/6%20Mercedes-Maybach%20S-Class%20review%20%286%29.jpg?w=892&h=502"
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
            alert("Thank you for your interest in the Mercedes-Maybach S-Class! Our luxury vehicle specialists will contact you shortly.");
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