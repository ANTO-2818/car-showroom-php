<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ferrari Roma - Anto's Car Showroom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes glowPulse {
            0%, 100% { box-shadow: 0 0 20px rgba(239, 68, 68, 0.3); }
            50% { box-shadow: 0 0 40px rgba(239, 68, 68, 0.6); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes slideInLeft {
            0% { opacity: 0; transform: translateX(-50px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInRight {
            0% { opacity: 0; transform: translateX(50px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideOutLeft {
            0% { opacity: 1; transform: translateX(0); }
            100% { opacity: 0; transform: translateX(50px); }
        }
        @keyframes slideOutRight {
            0% { opacity: 1; transform: translateX(0); }
            100% { opacity: 0; transform: translateX(-50px); }
        }

        body {
            background-image: url("https://www.nitprocomposites.com/assets/images/blog/can-carbon-fiber-be-transparent-the-science-behind-optical-composites-large.jpg");
            background-size: cover; background-position: top; background-attachment: fixed;
        }
        .animate-fadeUp { animation: fadeUp 0.8s ease-out forwards; }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-glow { animation: glowPulse 2s ease-in-out infinite; }
        .slide-left { animation: slideInLeft 0.5s ease-out forwards; }
        .slide-right { animation: slideInRight 0.5s ease-out forwards; }
        .delay-1 { animation-delay: 0.2s; opacity: 0; }
        .delay-2 { animation-delay: 0.4s; opacity: 0; }
        .delay-3 { animation-delay: 0.6s; opacity: 0; }
        .delay-4 { animation-delay: 0.8s; opacity: 0; }
        
        .gallery-container { position: relative; overflow: hidden; border-radius: 0.75rem; transition: all 0.3s ease; }
        .gallery-container:hover { box-shadow: 0 0 30px rgba(239, 68, 68, 0.3); }
        .gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; transition: transform 0.5s ease-in-out; }
        
        .gallery-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 20; transition: all 0.3s ease;
            border: 1px solid rgba(239, 68, 68, 0.2); backdrop-filter: blur(5px);
        }
        .gallery-btn:hover { background: rgba(239, 68, 68, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 30px rgba(239, 68, 68, 0.5); }
        .gallery-btn.left { left: 10px; }
        .gallery-btn.right { right: 10px; }
        
        .image-indicator { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 20; }
        .indicator-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .indicator-dot:hover { background: rgba(239, 68, 68, 0.7); transform: scale(1.3); }
        .indicator-dot.active { background: #ef4444; transform: scale(1.2); box-shadow: 0 0 15px #ef4444; }
        
        .modal-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 50px; height: 50px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 60; transition: all 0.3s ease;
            border: 1px solid rgba(239, 68, 68, 0.2); backdrop-filter: blur(5px);
        }
        .modal-btn:hover { background: rgba(239, 68, 68, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 40px rgba(239, 68, 68, 0.6); }
        .modal-btn.left { left: 20px; }
        .modal-btn.right { right: 20px; }
        
        .modal-indicator { position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 60; }
        .modal-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .modal-dot:hover { background: rgba(239, 68, 68, 0.7); transform: scale(1.3); }
        .modal-dot.active { background: #ef4444; transform: scale(1.2); box-shadow: 0 0 20px #ef4444; }
        
        .modal-counter { position: absolute; top: 20px; left: 20px; color: white; font-size: 1rem; background: rgba(0, 0, 0, 0.7); padding: 8px 16px; border-radius: 20px; z-index: 60; backdrop-filter: blur(5px); }
        #imageModal { transition: opacity 0.3s ease; }
        #imageModal.flex { opacity: 1; }
        #imageModal.hidden { opacity: 0; pointer-events: none; }

        .gallery-img { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .gallery-img::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(239, 68, 68, 0.2), transparent); transition: left 0.5s ease; z-index: 1; pointer-events: none; }
        .gallery-img:hover::before { left: 100%; }
        .gallery-img:hover { transform: scale(1.08) rotate(1deg); box-shadow: 0 20px 40px rgba(239, 68, 68, 0.4); }

        .info-card { background: linear-gradient(145deg, #1a1a2e, #111827); border: 1px solid rgba(239, 68, 68, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .info-card::before { content: ''; position: absolute; top: -2px; left: -2px; right: -2px; bottom: -2px; background: linear-gradient(45deg, #ef4444, #f59e0b, #ef4444); border-radius: 16px; opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .info-card:hover { transform: translateY(-10px) scale(1.02); border-color: transparent; }
        .info-card:hover::before { opacity: 0.3; }
        .info-card:hover { box-shadow: 0 20px 40px rgba(239, 68, 68, 0.3); }

        .spec-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; }
        .spec-item:hover { background: rgba(239, 68, 68, 0.1); transform: translateX(10px); color: #ef4444; }

        .feature-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; list-style-type: none; position: relative; padding-left: 2rem; }
        .feature-item::before { content: '●'; position: absolute; left: 0.5rem; color: #ef4444; font-size: 1rem; transition: all 0.3s ease; }
        .feature-item:hover { background: rgba(239, 68, 68, 0.1); transform: translateX(10px); color: #ef4444; }
        .feature-item:hover::before { transform: scale(1.3); color: #f59e0b; }

        .perf-card { transition: all 0.4s ease; position: relative; overflow: hidden; background: linear-gradient(145deg, #1f2937, #111827); }
        .perf-card::after { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(239, 68, 68, 0.2); transform: translate(-50%, -50%); transition: width 0.6s, height 0.6s; }
        .perf-card:hover { transform: scale(1.1) translateY(-5px); border-color: #ef4444; }
        .perf-card:hover::after { width: 300px; height: 300px; }
        .perf-card:hover h4 { color: #ef4444; transform: scale(1.1); }
        .perf-card h4 { transition: all 0.3s ease; position: relative; z-index: 1; }
        .perf-card p { transition: all 0.3s ease; position: relative; z-index: 1; }

        .back-btn { transition: all 0.3s ease; position: relative; overflow: hidden; }
        .back-btn:hover { transform: translateX(-5px); color: #ef4444; text-shadow: 0 0 10px rgba(239, 68, 68, 0.5); }

        .page-title { transition: all 0.3s ease; position: relative; display: inline-block; }
        .page-title:hover { transform: scale(1.05); text-shadow: 0 0 20px rgba(239, 68, 68, 0.5); }

        .section-heading { transition: all 0.3s ease; position: relative; display: inline-block; }
        .section-heading::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #ef4444, #f59e0b); transition: width 0.3s ease; }
        .section-heading:hover::after { width: 100%; }
        .section-heading:hover { transform: translateX(10px); color: #ef4444; }

        .prancing-horse { display: flex; justify-content: center; margin-bottom: 20px; }
        .horse-icon { font-size: 48px; filter: drop-shadow(0 0 10px rgba(239, 68, 68, 0.5)); transition: all 0.3s ease; }
        .horse-icon:hover { transform: scale(1.2); filter: drop-shadow(0 0 20px rgba(239, 68, 68, 0.8)); }

        .model-selector { position: relative; z-index: 100; margin-right: 20px; }
        .model-selector select {
            background: rgba(17, 24, 39, 0.9); backdrop-filter: blur(8px);
            border: 1px solid rgba(239, 68, 68, 0.3); padding: 8px 32px 8px 16px;
            border-radius: 12px; font-size: 0.9rem; font-weight: 500;
            cursor: pointer; transition: all 0.3s ease; appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23ef4444'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 8px center; background-size: 16px;
            color: white;
        }
        .model-selector select:hover { border-color: rgba(239, 68, 68, 0.6); background-color: rgba(17, 24, 39, 1); box-shadow: 0 0 15px rgba(239, 68, 68, 0.2); }
        .model-selector select:focus { outline: none; border-color: #ef4444; box-shadow: 0 0 20px rgba(239, 68, 68, 0.3); }
        .model-selector option { background: #1f2937; color: white; }

        .glow-btn { transition: all 0.3s ease; box-shadow: 0 0 10px rgba(239, 68, 68, 0.3); }
        .glow-btn:hover { transform: scale(1.05); box-shadow: 0 0 25px rgba(239, 68, 68, 0.6); background-color: #dc2626; }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector Dropdown -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-red-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="ferrari-488-gtb">🏎️ Ferrari 488 GTB</option>
                    <option value="ferrari-f8">🏎️ Ferrari F8 Tributo</option>
                    <option value="ferrari-sf90">🏎️ Ferrari SF90 Stradale</option>
                    <option value="ferrari-812">🏎️ Ferrari 812 Superfast</option>
                    <option value="ferrari-roma" >🏎️ Ferrari Roma (Current)</option>
                    <option value="ferrari-purosangue">🏎️ Ferrari Purosangue</option>
                </select>
            </div>
            <a href="ferrari.php" class="back-btn text-red-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Ferrari Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">Ferrari Roma</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">
        <div class="prancing-horse"><div class="horse-icon">🐎</div></div>
        <div class="flex justify-center mb-6"><span class="bg-red-500/20 text-red-400 px-6 py-2 rounded-full text-sm font-semibold border border-red-500/30 animate-glow">🏁 La Nuova Dolce Vita | 612 HP | 0-100 in 3.4s 🏁</span></div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2020/04/ferrari_roma_001.jpg?w=892&h=502" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="Ferrari Roma Front">
                <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2020/04/ferrari_roma_002.jpg?w=892&h=502" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="Ferrari Roma Side">
                <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2020/04/ferrari_roma_003.jpg?w=892&h=502" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="Ferrari Roma Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-red-500">Overview</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">The Ferrari Roma is a tribute to the "La Nuova Dolce Vita" - the new sweet life of 1950s and 60s Rome. This front-engined V8 GT represents a return to Ferrari's elegant, understated grand tourers, combining timeless Italian design with cutting-edge technology. Powered by a 3.9L twin-turbo V8 producing 612 horsepower, the Roma can accelerate from 0-100 km/h in just 3.4 seconds while offering a level of refinement and comfort suitable for grand touring. With its clean, minimalist design, sophisticated interior, and exhilarating performance, the Ferrari Roma appeals to drivers who appreciate style as much as speed.</p>

            <h2 class="section-heading text-3xl font-bold text-red-500">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-red-400">Manufacturer:</strong> Ferrari S.p.A.</p><p class="spec-item"><strong class="text-red-400">Production:</strong> 2020 – Present</p><p class="spec-item"><strong class="text-red-400">Body Style:</strong> 2+2 Coupe</p><p class="spec-item"><strong class="text-red-400">Layout:</strong> Front-engine, Rear-wheel drive</p><p class="spec-item"><strong class="text-red-400">Transmission:</strong> 8-speed dual-clutch F1 DCT</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-red-400">Fuel Type:</strong> Petrol</p><p class="spec-item"><strong class="text-red-400">Drivetrain:</strong> RWD</p><p class="spec-item"><strong class="text-red-400">Seating Capacity:</strong> 2+2 (4 seats)</p><p class="spec-item"><strong class="text-red-400">Fuel Tank Capacity:</strong> 80 Litres</p><p class="spec-item"><strong class="text-red-400">Emission Standard:</strong> Euro 6</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Dimensions</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Length:</strong> 4,656 mm</p><p class="spec-item"><strong class="text-red-400">Width:</strong> 1,974 mm</p><p class="spec-item"><strong class="text-red-400">Height:</strong> 1,301 mm</p><p class="spec-item"><strong class="text-red-400">Wheelbase:</strong> 2,670 mm</p><p class="spec-item"><strong class="text-red-400">Curb Weight:</strong> Approx. 1,470 kg (dry)</p><p class="spec-item"><strong class="text-red-400">Trunk Capacity:</strong> 270 Litres</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Engine Type:</strong> 3.9L Twin-Turbo V8 (F154 BH)</p><p class="spec-item"><strong class="text-red-400">Horsepower:</strong> 612 HP @ 5,750-7,500 rpm</p><p class="spec-item"><strong class="text-red-400">Torque:</strong> 760 Nm @ 3,000-5,750 rpm</p><p class="spec-item"><strong class="text-red-400">Redline:</strong> 7,500 rpm</p><p class="spec-item"><strong class="text-red-400">Specific Output:</strong> 157 HP per liter</p><p class="spec-item"><strong class="text-red-400">0-200 km/h:</strong> 9.3 seconds</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Design & Aerodynamics</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Design Language:</strong> Minimalist, elegant "La Nuova Dolce Vita"</p><p class="spec-item"><strong class="text-red-400">Front Grille:</strong> Sleek, understated mesh design</p><p class="spec-item"><strong class="text-red-400">Headlights:</strong> Full-LED with signature DRLs</p><p class="spec-item"><strong class="text-red-400">Active Aerodynamics:</strong> Adjustable rear spoiler</p><p class="spec-item"><strong class="text-red-400">Downforce:</strong> Optimized for stability</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">16-inch Curved Digital Instrument Cluster</li><li class="feature-item">8.4-inch Vertical Touchscreen Infotainment</li><li class="feature-item">Optional Passenger Display (8.8-inch)</li><li class="feature-item">Apple CarPlay & Android Auto</li><li class="feature-item">Wireless Charging</li><li class="feature-item">Manettino dial on steering wheel</li><li class="feature-item">Side Slip Control (SSC) 6.0</li><li class="feature-item">2+2 seating configuration</li><li class="feature-item">Premium leather and Alcantara upholstery</li></ul>

            <h2 class="section-heading text-3xl font-bold text-red-500">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Advanced front airbags and side airbags</li><li class="feature-item">Electronic Stability Control (ESC)</li><li class="feature-item">High-performance carbon-ceramic brakes</li><li class="feature-item">Tyre pressure monitoring system</li><li class="feature-item">Rear parking camera and sensors</li><li class="feature-item">Integrated roll-over protection</li><li class="feature-item">F1-Trac traction control system</li><li class="feature-item">E-Diff electronic differential</li></ul>

            <h2 class="section-heading text-3xl font-bold text-red-500">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center"><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">612 HP</h4><p class="text-gray-400 text-sm">Max Power</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">3.4s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">320 km/h</h4><p class="text-gray-400 text-sm">Top Speed</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">760 Nm</h4><p class="text-gray-400 text-sm">Peak Torque</p></div></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">⚡ Acceleration</h3><p class="text-gray-300">0-200 km/h: 9.3s<br>80-120 km/h: 2.0s<br>1/4 Mile: 10.9s @ 205 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">⛽ Fuel Economy</h3><p class="text-gray-300">Combined: 11.2 L/100km<br>City: 15.6 L/100km<br>Highway: 8.9 L/100km</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">🛞 Braking & Track</h3><p class="text-gray-300">100-0 km/h: 32m<br>Fiorano Lap: 1:22.5<br>Lateral G: 1.40g</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">✨ Roma Exclusive Features</h3><p class="text-gray-300">Manettino Driving Mode Selector<br>Side Slip Control (SSC) 6.0<br>F1-Trac Traction Control<br>E-Diff Electronic Differential<br>Active Rear Spoiler<br>Variable Boost Management (VBM)</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">🚗 Practicality</h3><p class="text-gray-300">270L Boot Space<br>2+2 Seating Configuration<br>Rear Seats (for occasional use)<br>Carbon Fiber Racing Seats</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-red-500">Manettino Driving Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">COMFORT</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">SPORT</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">RACE</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">ESC OFF</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-red-500">Available Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-red-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Rosso Corsa"></div><div class="w-12 h-12 bg-yellow-400 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Giallo Modena"></div><div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Nero Daytona"></div><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Bianco Avus"></div><div class="w-12 h-12 bg-blue-900 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Blu Tour de France"></div><div class="w-12 h-12 bg-gray-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Grigio Titanio"></div><div class="w-12 h-12 bg-green-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Verde British"></div><div class="w-12 h-12 bg-silver-400 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Argento Nurburgring"></div></div></div>

            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-6 rounded-xl border border-red-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">La Nuova Dolce Vita</h3><p class="text-gray-300">The Ferrari Roma embodies the spirit of "La Nuova Dolce Vita" - the new sweet life of 1950s and 60s Rome. Its clean, minimalist design represents a return to Ferrari's elegant grand touring heritage, while its advanced technology and exhilarating performance make it a thoroughly modern supercar.</p></div>

            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-6 rounded-xl border border-red-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-red-400">Ex-Showroom Price:</strong> ₹3.60 Crore</p><p class="text-gray-300"><strong class="text-red-400">On-Road Price (Mumbai):</strong> ₹4.32 Crore</p><p class="text-gray-300"><strong class="text-red-400">EMI Starting From:</strong> ₹5.05 Lakh/month</p></div><button onclick="inquireNow()" class="glow-btn bg-red-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">Inquire Now →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-red-500/20"><p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-red-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = { 'ferrari-488-gtb': 'ferrari-488-gtb-details.php', 'ferrari-f8': 'ferrari-f8-details.php', 'ferrari-sf90': 'ferrari-sf90-details.php', 'ferrari-812': 'ferrari-812-details.php', 'ferrari-roma': 'ferrari-roma-details.php', 'ferrari-purosangue': 'ferrari-purosangue-details.php' };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }

        const allImages = ["https://www.topgear.com/sites/default/files/2025/05/ACT_0981_06496_HR.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2025/05/ACT_0981_06857_HR.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2025/05/ACT_0981_05296_HR.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2025/05/ACT_0981_05303_HR.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2025/05/ACT_0981_05344_HR.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2025/05/ACT_0981_06154_HR.jpg?w=892&h=502"];
        
        let currentGalleryIndex = 0, isAnimating = false, currentFullscreenIndex = 0;
        const galleryGrid = document.getElementById('galleryGrid'), galleryImages = document.querySelectorAll('.gallery-img'), indicatorDots = document.querySelectorAll('.indicator-dot');
        const modalImg = document.getElementById('modalImg'), modalCounter = document.getElementById('modalCounter'), modalIndicators = document.getElementById('modalIndicators');
        
        function updateGallery(index, direction) {
            if (isAnimating) return;
            isAnimating = true;
            galleryGrid.style.animation = direction === 'left' ? 'slideOutRight 0.3s ease-out forwards' : direction === 'right' ? 'slideOutLeft 0.3s ease-out forwards' : 'fadeUp 0.5s ease-out forwards';
            setTimeout(() => {
                currentGalleryIndex = index;
                galleryImages.forEach((img, i) => { const newIndex = (index + i) % allImages.length; img.src = allImages[newIndex]; img.setAttribute('data-index', newIndex); });
                galleryGrid.style.animation = '';
                galleryGrid.style.animation = direction === 'left' ? 'slideInLeft 0.3s ease-out forwards' : direction === 'right' ? 'slideInRight 0.3s ease-out forwards' : 'fadeUp 0.5s ease-out forwards';
                indicatorDots.forEach((dot, i) => { if (i === index) dot.classList.add('active'); else dot.classList.remove('active'); });
                setTimeout(() => { galleryGrid.style.animation = ''; isAnimating = false; }, 300);
            }, direction ? 300 : 0);
        }
        function navigateGallery(d) { if (isAnimating) return; let ni = d === 'prev' ? (currentGalleryIndex - 1 + indicatorDots.length) % indicatorDots.length : (currentGalleryIndex + 1) % indicatorDots.length; updateGallery(ni, d === 'prev' ? 'right' : 'left'); }
        function jumpToImage(i) { if (isAnimating || i === currentGalleryIndex) return; updateGallery(i, i > currentGalleryIndex ? 'left' : 'right'); }
        function openFullscreen(i) { currentFullscreenIndex = i; modalImg.src = allImages[currentFullscreenIndex]; updateFullscreenIndicators(); document.getElementById("imageModal").classList.remove("hidden"); document.getElementById("imageModal").classList.add("flex"); document.body.style.overflow = 'hidden'; }
        function closeFullscreen() { document.getElementById("imageModal").classList.remove("flex"); document.getElementById("imageModal").classList.add("hidden"); document.body.style.overflow = 'auto'; }
        function navigateFullscreen(d) { currentFullscreenIndex = (currentFullscreenIndex + (d === 'prev' ? -1 : 1) + allImages.length) % allImages.length; modalImg.style.animation = d === 'prev' ? 'slideInRight 0.3s ease-out' : 'slideInLeft 0.3s ease-out'; modalImg.src = allImages[currentFullscreenIndex]; updateFullscreenIndicators(); setTimeout(() => { modalImg.style.animation = ''; }, 300); }
        function updateFullscreenIndicators() { modalCounter.textContent = `${currentFullscreenIndex + 1} / ${allImages.length}`; let dots = ''; for (let i = 0; i < allImages.length; i++) dots += `<span class="modal-dot ${i === currentFullscreenIndex ? 'active' : ''}" onclick="jumpToFullscreen(${i})"></span>`; modalIndicators.innerHTML = dots; }
        function jumpToFullscreen(i) { if (i === currentFullscreenIndex) return; const dir = i > currentFullscreenIndex ? 'right' : 'left'; currentFullscreenIndex = i; modalImg.style.animation = dir === 'right' ? 'slideInLeft 0.3s ease-out' : 'slideInRight 0.3s ease-out'; modalImg.src = allImages[currentFullscreenIndex]; updateFullscreenIndicators(); setTimeout(() => { modalImg.style.animation = ''; }, 300); }
        function inquireNow() { alert("Thank you for your interest in the Ferrari Roma! Our sales team will contact you shortly."); window.location.href = "#contact"; }
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>
</html>