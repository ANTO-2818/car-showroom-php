<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mercedes-EQ EQS - Anto's Car Showroom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes glowPulse {
            0%, 100% { box-shadow: 0 0 20px rgba(0, 200, 100, 0.3); }
            50% { box-shadow: 0 0 40px rgba(0, 200, 100, 0.6); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes electricPulse {
            0%, 100% { text-shadow: 0 0 5px rgba(0, 200, 100, 0.5); }
            50% { text-shadow: 0 0 20px rgba(0, 200, 100, 0.8); }
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
        .electric-glow { animation: electricPulse 2s ease-in-out infinite; }
        .slide-left { animation: slideInLeft 0.5s ease-out forwards; }
        .slide-right { animation: slideInRight 0.5s ease-out forwards; }
        .delay-1 { animation-delay: 0.2s; opacity: 0; }
        .delay-2 { animation-delay: 0.4s; opacity: 0; }
        .delay-3 { animation-delay: 0.6s; opacity: 0; }
        .delay-4 { animation-delay: 0.8s; opacity: 0; }
        
        .gallery-container { position: relative; overflow: hidden; border-radius: 0.75rem; transition: all 0.3s ease; }
        .gallery-container:hover { box-shadow: 0 0 30px rgba(0, 200, 100, 0.3); }
        .gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; transition: transform 0.5s ease-in-out; }
        
        .gallery-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 20; transition: all 0.3s ease;
            border: 1px solid rgba(0, 200, 100, 0.2); backdrop-filter: blur(5px);
        }
        .gallery-btn:hover { background: rgba(0, 200, 100, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 30px rgba(0, 200, 100, 0.5); }
        .gallery-btn.left { left: 10px; }
        .gallery-btn.right { right: 10px; }
        
        .image-indicator { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 20; }
        .indicator-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .indicator-dot:hover { background: rgba(0, 200, 100, 0.7); transform: scale(1.3); }
        .indicator-dot.active { background: #00c864; transform: scale(1.2); box-shadow: 0 0 15px #00c864; }
        
        .modal-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 50px; height: 50px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 60; transition: all 0.3s ease;
            border: 1px solid rgba(0, 200, 100, 0.2); backdrop-filter: blur(5px);
        }
        .modal-btn:hover { background: rgba(0, 200, 100, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 40px rgba(0, 200, 100, 0.6); }
        .modal-btn.left { left: 20px; }
        .modal-btn.right { right: 20px; }
        
        .modal-indicator { position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 60; }
        .modal-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .modal-dot:hover { background: rgba(0, 200, 100, 0.7); transform: scale(1.3); }
        .modal-dot.active { background: #00c864; transform: scale(1.2); box-shadow: 0 0 20px #00c864; }
        
        .modal-counter { position: absolute; top: 20px; left: 20px; color: white; font-size: 1rem; background: rgba(0, 0, 0, 0.7); padding: 8px 16px; border-radius: 20px; z-index: 60; backdrop-filter: blur(5px); }
        #imageModal { transition: opacity 0.3s ease; }
        #imageModal.flex { opacity: 1; }
        #imageModal.hidden { opacity: 0; pointer-events: none; }

        .gallery-img { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .gallery-img::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(0, 200, 100, 0.2), transparent); transition: left 0.5s ease; z-index: 1; pointer-events: none; }
        .gallery-img:hover::before { left: 100%; }
        .gallery-img:hover { transform: scale(1.08) rotate(1deg); box-shadow: 0 20px 40px rgba(0, 200, 100, 0.4); }

        .info-card { background: linear-gradient(145deg, #1a1a2e, #111827); border: 1px solid rgba(0, 200, 100, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .info-card::before { content: ''; position: absolute; top: -2px; left: -2px; right: -2px; bottom: -2px; background: linear-gradient(45deg, #00c864, #00ff88, #00c864); border-radius: 16px; opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .info-card:hover { transform: translateY(-10px) scale(1.02); border-color: transparent; }
        .info-card:hover::before { opacity: 0.3; }
        .info-card:hover { box-shadow: 0 20px 40px rgba(0, 200, 100, 0.3); }

        .spec-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; }
        .spec-item:hover { background: rgba(0, 200, 100, 0.1); transform: translateX(10px); color: #00ff88; }

        .feature-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; list-style-type: none; position: relative; padding-left: 2rem; }
        .feature-item::before { content: '⚡'; position: absolute; left: 0.5rem; color: #00c864; font-size: 1rem; transition: all 0.3s ease; }
        .feature-item:hover { background: rgba(0, 200, 100, 0.1); transform: translateX(10px); color: #00ff88; }
        .feature-item:hover::before { transform: scale(1.3); color: #00ff88; }

        .perf-card { transition: all 0.4s ease; position: relative; overflow: hidden; background: linear-gradient(145deg, #1f2937, #111827); }
        .perf-card::after { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(0, 200, 100, 0.2); transform: translate(-50%, -50%); transition: width 0.6s, height 0.6s; }
        .perf-card:hover { transform: scale(1.1) translateY(-5px); border-color: #00c864; }
        .perf-card:hover::after { width: 300px; height: 300px; }
        .perf-card:hover h4 { color: #00ff88; transform: scale(1.1); }
        .perf-card h4 { transition: all 0.3s ease; position: relative; z-index: 1; }
        .perf-card p { transition: all 0.3s ease; position: relative; z-index: 1; }

        .back-btn { transition: all 0.3s ease; position: relative; overflow: hidden; }
        .back-btn:hover { transform: translateX(-5px); color: #00c864; text-shadow: 0 0 10px rgba(0, 200, 100, 0.5); }

        .page-title { transition: all 0.3s ease; position: relative; display: inline-block; }
        .page-title:hover { transform: scale(1.05); text-shadow: 0 0 20px rgba(0, 200, 100, 0.5); }

        .section-heading { transition: all 0.3s ease; position: relative; display: inline-block; }
        .section-heading::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #00c864, #00ff88); transition: width 0.3s ease; }
        .section-heading:hover::after { width: 100%; }
        .section-heading:hover { transform: translateX(10px); color: #00ff88; }

        .mercedes-star { display: flex; justify-content: center; gap: 5px; margin-bottom: 20px; }
        .star { width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 30px solid #00c864; position: relative; transform: rotate(180deg); opacity: 0.6; transition: all 0.3s ease; }
        .star::before { content: ''; position: absolute; top: 15px; left: -15px; width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 30px solid #00c864; transform: rotate(70deg); }
        .star::after { content: ''; position: absolute; top: 15px; left: -15px; width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 30px solid #00c864; transform: rotate(-70deg); }
        .star:hover { opacity: 1; transform: rotate(180deg) scale(1.1); }

        .model-selector { position: relative; z-index: 100; margin-right: 20px; }
        .model-selector select {
            background: rgba(17, 24, 39, 0.9); backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 200, 100, 0.3); padding: 8px 32px 8px 16px;
            border-radius: 12px; font-size: 0.9rem; font-weight: 500;
            cursor: pointer; transition: all 0.3s ease; appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2300c864'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 8px center; background-size: 16px;
            color: white;
        }
        .model-selector select:hover { border-color: rgba(0, 200, 100, 0.6); background-color: rgba(17, 24, 39, 1); box-shadow: 0 0 15px rgba(0, 200, 100, 0.2); }
        .model-selector select:focus { outline: none; border-color: #00ff88; box-shadow: 0 0 20px rgba(0, 200, 100, 0.3); }
        .model-selector option { background: #1f2937; color: white; }

        .glow-btn { transition: all 0.3s ease; box-shadow: 0 0 10px rgba(0, 200, 100, 0.3); }
        .glow-btn:hover { transform: scale(1.05); box-shadow: 0 0 25px rgba(0, 200, 100, 0.6); background-color: #00994d; }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-green-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="amg-gt">🏎️ Mercedes-AMG GT</option>
                    <option value="amg-e63">🏎️ AMG E63 S</option>
                    <option value="amg-c63">🏎️ AMG C63 S Coupe</option>
                    <option value="amg-g63">🏎️ AMG G63</option>
                    <option value="amg-gt63">🏎️ AMG GT 63 S 4-Door</option>
                    <option value="amg-s63">✨ AMG S63</option>
                    <option value="mercedes-eqs" >🏎️ Mercedes-EQ EQS (Current)</option>
                </select>
            </div>
            <a href="benz.php" class="back-btn text-green-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Mercedes Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-green-500 animate-fadeUp delay-1">Mercedes-EQ EQS</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">
        <div class="mercedes-star"><div class="star"></div><div class="star"></div><div class="star"></div></div>
        <div class="flex justify-center mb-6"><span class="bg-green-500/20 text-green-400 px-6 py-2 rounded-full text-sm font-semibold border border-green-500/30 animate-glow electric-glow">⚡ FULLY ELECTRIC | 658 HP | 4MATIC ⚡</span></div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.topgear.com/sites/default/files/2024/05/2-AMG-GT-UK-review-2024.jpg?w=892&h=502" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="EQS Front">
                <img src="https://www.topgear.com/sites/default/files/2024/05/3-AMG-GT-UK-review-2024.jpg?w=892&h=502" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="EQS Side">
                <img src="https://www.topgear.com/sites/default/files/2024/05/4-AMG-GT-UK-review-2024.jpg?w=892&h=502" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="EQS Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-green-500">Overview</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">The Mercedes-EQ EQS is the flagship electric luxury sedan from Mercedes-Benz, representing the pinnacle of electric mobility and automotive innovation. Powered by dual electric motors producing 658 horsepower (in 580 4MATIC form), this revolutionary machine can accelerate from 0-100 km/h in just 3.5 seconds while offering an impressive range of up to 780 km. The EQS features the groundbreaking MBUX Hyperscreen, spanning almost the entire width of the dashboard, and offers unparalleled luxury, comfort, and technology. The EQS represents the future of automotive excellence, combining sustainable mobility with the ultimate in luxury and performance.</p>

            <h2 class="section-heading text-3xl font-bold text-green-500">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-green-400">Manufacturer:</strong> Mercedes-EQ</p><p class="spec-item"><strong class="text-green-400">Production:</strong> 2021 – Present (V297)</p><p class="spec-item"><strong class="text-green-400">Body Style:</strong> 4-door Electric Luxury Sedan</p><p class="spec-item"><strong class="text-green-400">Layout:</strong> Dual-motor, All-wheel drive</p><p class="spec-item"><strong class="text-green-400">Transmission:</strong> Single-speed automatic</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-green-400">Fuel Type:</strong> Electric (Zero Emissions)</p><p class="spec-item"><strong class="text-green-400">Drivetrain:</strong> 4MATIC AWD</p><p class="spec-item"><strong class="text-green-400">Seating Capacity:</strong> 5</p><p class="spec-item"><strong class="text-green-400">Battery Capacity:</strong> 107.8 kWh (usable)</p><p class="spec-item"><strong class="text-green-400">Emission Standard:</strong> Zero Local Emissions</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Dimensions</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">Length:</strong> 5,216 mm</p><p class="spec-item"><strong class="text-green-400">Width:</strong> 1,926 mm</p><p class="spec-item"><strong class="text-green-400">Height:</strong> 1,512 mm</p><p class="spec-item"><strong class="text-green-400">Wheelbase:</strong> 3,210 mm</p><p class="spec-item"><strong class="text-green-400">Curb Weight:</strong> Approx. 2,585 kg</p><p class="spec-item"><strong class="text-green-400">Trunk Capacity:</strong> 610 Litres + 90L Frunk</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Electric Powertrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">Motor Type:</strong> Dual Permanently Excited Synchronous Motors</p><p class="spec-item"><strong class="text-green-400">Combined Power:</strong> 658 HP (480 kW)</p><p class="spec-item"><strong class="text-green-400">Combined Torque:</strong> 950 Nm</p><p class="spec-item"><strong class="text-green-400">0-100 km/h:</strong> 3.5 seconds</p><p class="spec-item"><strong class="text-green-400">Top Speed:</strong> 210 km/h (limited)</p><p class="spec-item"><strong class="text-green-400">Battery Type:</strong> Lithium-ion (107.8 kWh usable)</p><p class="spec-item"><strong class="text-green-400">Charge Time (DC Fast):</strong> 10-80% in 31 minutes (200 kW)</p><p class="spec-item"><strong class="text-green-400">Drag Coefficient:</strong> 0.20 Cd (world's most aerodynamic)</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Range & Efficiency</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">WLTP Range:</strong> Up to 780 km</p><p class="spec-item"><strong class="text-green-400">Energy Consumption:</strong> 15.8 - 17.8 kWh/100km</p><p class="spec-item"><strong class="text-green-400">Max Charging Speed:</strong> 200 kW DC</p><p class="spec-item"><strong class="text-green-400">Battery Warranty:</strong> 8 years / 160,000 km</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">MBUX Hyperscreen & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">56-inch MBUX Hyperscreen (3 displays)</li><li class="feature-item">12.3-inch Digital Instrument Cluster</li><li class="feature-item">17.7-inch Central Infotainment Display</li><li class="feature-item">12.3-inch Front Passenger Display</li><li class="feature-item">Burmester High-End 4D Surround Sound</li><li class="feature-item">MBUX Voice Assistant "Hey Mercedes"</li><li class="feature-item">Augmented Reality Navigation</li><li class="feature-item">Wireless Apple CarPlay & Android Auto</li><li class="feature-item">Over-the-air (OTA) updates</li></ul>

            <h2 class="section-heading text-3xl font-bold text-green-500">Interior & Luxury Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Nappa Leather Upholstery</li><li class="feature-item">Heated, Ventilated & Massaging Front Seats</li><li class="feature-item">Heated Rear Seats</li><li class="feature-item">4-Zone Automatic Climate Control</li><li class="feature-item">ENERGIZING Comfort Control</li><li class="feature-item">Air Balance Cabin Fragrancing</li><li class="feature-item">Panoramic Sliding Sunroof</li><li class="feature-item">64-color Ambient Lighting</li><li class="feature-item">Executive Rear Seat Package with Recline</li></ul>

            <h2 class="section-heading text-3xl font-bold text-green-500">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">DRIVE PILOT (Level 3 Autonomous Driving)</li><li class="feature-item">Active Brake Assist with cross-traffic</li><li class="feature-item">Active Lane Keeping Assist</li><li class="feature-item">Active Blind Spot Assist</li><li class="feature-item">Adaptive Highbeam Assist Plus</li><li class="feature-item">PRE-SAFE® System & Impulse Side</li><li class="feature-item">Multiple airbags</li><li class="feature-item">360° camera and parking package</li></ul>

            <h2 class="section-heading text-3xl font-bold text-green-500">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center"><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">658 HP</h4><p class="text-gray-400 text-sm">Max Power</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">3.5s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">780 km</h4><p class="text-gray-400 text-sm">WLTP Range</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">950 Nm</h4><p class="text-gray-400 text-sm">Peak Torque</p></div></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">⚡ Acceleration</h3><p class="text-gray-300">0-200 km/h: 12.5s<br>80-120 km/h: 2.1s<br>1/4 Mile: 11.0s @ 202 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🔋 Charging</h3><p class="text-gray-300">DC Fast: 200 kW max<br>10-80%: 31 minutes<br>AC Home: 11 kW (10 hours)<br>15-min charge: +250 km range</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🌊 Aerodynamics</h3><p class="text-gray-300">Drag Coefficient: 0.20 Cd<br>World's most aerodynamic production car<br>Active Air Suspension: Standard</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">✨ EQ Exclusive Features</h3><p class="text-gray-300">MBUX Hyperscreen (56-inch)<br>HEPA Air Filtration System<br>Intelligent Energy Recovery<br>ECO Charging Assistant<br>Heat Pump for Efficiency</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🚗 Practicality</h3><p class="text-gray-300">610L Boot Space + 90L Frunk<br>40/20/40 Split Folding Rear Seats<br>5-Seater Luxury Configuration<br>ISOFIX Child Seat Anchors</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-green-500">Driving Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">ECO</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">COMFORT</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">SPORT</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">INDIVIDUAL</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-green-500">Regenerative Braking Levels</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">DAUTO (Automatic)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">D+ (Coasting)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">D (Low)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">D- (Medium)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">D-- (High/One-Pedal)</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-green-500">Available Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-gray-400 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Selenite Grey"></div><div class="w-12 h-12 bg-blue-800 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Designo Blue"></div><div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Obsidian Black"></div><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Polar White"></div><div class="w-12 h-12 bg-green-800 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Emerald Green"></div><div class="w-12 h-12 bg-silver-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Iridium Silver"></div></div></div>

            <div class="bg-gradient-to-r from-green-900/30 to-green-600/30 p-6 rounded-xl border border-green-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-green-400">Ex-Showroom Price:</strong> ₹2.20 Crore</p><p class="text-gray-300"><strong class="text-green-400">On-Road Price (Mumbai):</strong> ₹2.65 Crore</p><p class="text-gray-300"><strong class="text-green-400">EMI Starting From:</strong> ₹3.10 Lakh/month</p></div><button onclick="inquireNow()" class="glow-btn bg-green-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">Inquire Now →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-green-500/20"><p class="hover:text-green-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-green-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = { 'amg-gt': 'amg-gt-details.php', 'amg-e63': 'amg-e63-details.php', 'amg-c63': 'amg-c63-details.php', 'amg-g63': 'amg-g63-details.php', 'amg-gt63': 'amg-gt63-details.php', 'amg-s63': 'amg-s63-details.php', 'mercedes-eqs': 'mercedes-eqs-details.php' };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }

        const allImages = ["https://www.topgear.com/sites/default/files/2022/07/Medium-40866-Mercedes-BenzEQE350.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2022/07/Medium-40867-Mercedes-BenzEQE350.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2022/07/Medium-40856-Mercedes-BenzEQE350.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2022/07/Medium-40882-Mercedes-BenzEQE350.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2022/07/40860-Mercedes-BenzEQE350.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/2022/07/Medium-40847-Mercedes-BenzEQE350.jpg?w=892&h=502"];
        
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
        function inquireNow() { alert("Thank you for your interest in the Mercedes-EQ EQS! Our EV specialists will contact you shortly."); window.location.href = "#contact"; }
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>
</html>