<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ferrari SF90 Stradale - Anto's Car Showroom</title>
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
        .info-card::before { content: ''; position: absolute; top: -2px; left: -2px; right: -2px; bottom: -2px; background: linear-gradient(45deg, #00c864, #00ff88, #ef4444); border-radius: 16px; opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
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

        .prancing-horse { display: flex; justify-content: center; margin-bottom: 20px; }
        .horse-icon { font-size: 48px; filter: drop-shadow(0 0 10px rgba(0, 200, 100, 0.5)); transition: all 0.3s ease; }
        .horse-icon:hover { transform: scale(1.2); filter: drop-shadow(0 0 20px rgba(0, 200, 100, 0.8)); }

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

    <!-- Navbar with Model Selector Dropdown -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-green-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="ferrari-488-gtb">🏎️ Ferrari 488 GTB</option>
                    <option value="ferrari-f8">🏎️ Ferrari F8 Tributo</option>
                    <option value="ferrari-sf90" >🏎️ Ferrari SF90 Stradale (Current)</option>
                    <option value="ferrari-812">🏎️ Ferrari 812 Superfast</option>
                    <option value="ferrari-roma">🏎️ Ferrari Roma</option>
                    <option value="ferrari-purosangue">🏎️ Ferrari Purosangue</option>
                </select>
            </div>
            <a href="ferrari.php" class="back-btn text-green-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Ferrari Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-green-500 animate-fadeUp delay-1">Ferrari SF90 Stradale</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">
        <div class="prancing-horse"><div class="horse-icon">🐎</div></div>
        <div class="flex justify-center mb-6"><span class="bg-green-500/20 text-green-400 px-6 py-2 rounded-full text-sm font-semibold border border-green-500/30 animate-glow electric-glow">⚡ HYBRID | 986 HP | 0-100 in 2.5s ⚡</span></div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://cdn.dealeraccelerate.com/bagauction/18/3226/151563/1920x1440/2019-ferrari-488-pista-piloti-ferrari.webp" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="SF90 Front">
                <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2018/12/24d2cd24075ab0af9b7691eaeb5018a4/ferrari.jpg?w=892&h=502" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="SF90 Side">
                <img src="https://www.yasmarinacircuit.com/documents/2642013/3383119/Ferrari-488-1920x694.jpg/8fd0ae12-e91a-8208-3f00-2ac0e13f08c1?version=2.0&t=1750240011148" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="SF90 Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-green-500">Overview</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">The Ferrari SF90 Stradale is the most powerful production Ferrari ever built - a revolutionary plug-in hybrid that represents the future of automotive performance. Combining a 4.0L twin-turbo V8 with three electric motors, the SF90 produces an astonishing 986 horsepower, making it the first Ferrari to break the 1000 HP barrier (metric). This magnificent machine can rocket from 0-100 km/h in just 2.5 seconds and complete the 0-200 km/h sprint in a breathtaking 6.7 seconds. The SF90 Stradale features advanced aerodynamics, all-wheel drive capability, and an electric-only range of 25 km, representing the perfect fusion of Ferrari's racing heritage with cutting-edge hybrid technology.</p>

            <h2 class="section-heading text-3xl font-bold text-green-500">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-green-400">Manufacturer:</strong> Ferrari S.p.A.</p><p class="spec-item"><strong class="text-green-400">Production:</strong> 2019 – Present</p><p class="spec-item"><strong class="text-green-400">Body Style:</strong> 2-door Berlinetta</p><p class="spec-item"><strong class="text-green-400">Layout:</strong> Mid-engine, All-wheel drive</p><p class="spec-item"><strong class="text-green-400">Transmission:</strong> 8-speed dual-clutch F1 DCT</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-green-400">Fuel Type:</strong> Petrol + Plug-in Hybrid</p><p class="spec-item"><strong class="text-green-400">Drivetrain:</strong> RWD + Electric Front Axle (e-AWD)</p><p class="spec-item"><strong class="text-green-400">Seating Capacity:</strong> 2</p><p class="spec-item"><strong class="text-green-400">Fuel Tank Capacity:</strong> 68 Litres</p><p class="spec-item"><strong class="text-green-400">Emission Standard:</strong> Euro 6</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Dimensions</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">Length:</strong> 4,710 mm</p><p class="spec-item"><strong class="text-green-400">Width:</strong> 1,972 mm</p><p class="spec-item"><strong class="text-green-400">Height:</strong> 1,186 mm</p><p class="spec-item"><strong class="text-green-400">Wheelbase:</strong> 2,650 mm</p><p class="spec-item"><strong class="text-green-400">Curb Weight:</strong> Approx. 1,570 kg (dry)</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Engine & Hybrid Powertrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">Engine Type:</strong> 4.0L Twin-Turbo V8 (F154 FA)</p><p class="spec-item"><strong class="text-green-400">Engine Power:</strong> 769 HP @ 7,500 rpm</p><p class="spec-item"><strong class="text-green-400">Electric Motors:</strong> 3 (1x Rear, 2x Front)</p><p class="spec-item"><strong class="text-green-400">Electric Power:</strong> 217 HP (combined)</p><p class="spec-item"><strong class="text-green-400">Combined Power:</strong> 986 HP</p><p class="spec-item"><strong class="text-green-400">Torque:</strong> 800 Nm + electric torque vectoring</p><p class="spec-item"><strong class="text-green-400">Battery Capacity:</strong> 7.9 kWh</p><p class="spec-item"><strong class="text-green-400">Electric Range:</strong> 25 km</p><p class="spec-item"><strong class="text-green-400">0-200 km/h:</strong> 6.7 seconds</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Hybrid System & e-AWD</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">e-AWD:</strong> Electric motors power front wheels</p><p class="spec-item"><strong class="text-green-400">Torque Vectoring:</strong> Individual wheel control</p><p class="spec-item"><strong class="text-green-400">Regenerative Braking:</strong> Up to 100 kW</p><p class="spec-item"><strong class="text-green-400">Charge Time:</strong> 2.5 hours (AC)</p><p class="spec-item"><strong class="text-green-400">Driving Modes:</strong> eDrive, Hybrid, Performance, Qualify</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Aerodynamics</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-green-400">Downforce:</strong> 390 kg at 250 km/h</p><p class="spec-item"><strong class="text-green-400">Active Aerodynamics:</strong> Adjustable rear wing</p><p class="spec-item"><strong class="text-green-400">Front Downforce:</strong> Optimized by S-Duct</p><p class="spec-item"><strong class="text-green-400">Underbody:</strong> Active diffuser</p></div>

            <h2 class="section-heading text-3xl font-bold text-green-500">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">16-inch Curved Digital Instrument Cluster</li><li class="feature-item">Head-Up Display</li><li class="feature-item">Manettino dial with eManettino (4 driving modes)</li><li class="feature-item">Apple CarPlay (standard)</li><li class="feature-item">Carbon fiber racing seats</li><li class="feature-item">Side Slip Control (SSC) 6.0</li><li class="feature-item">Ferrari's first-ever electric power steering</li><li class="feature-item">8-speed dual-clutch transmission</li></ul>

            <h2 class="section-heading text-3xl font-bold text-green-500">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Advanced front airbags and side airbags</li><li class="feature-item">Electronic Stability Control (ESC) with track calibration</li><li class="feature-item">High-performance carbon-ceramic brakes (CCM)</li><li class="feature-item">Tyre pressure monitoring system</li><li class="feature-item">Rear parking camera and sensors</li><li class="feature-item">Integrated roll-over protection</li><li class="feature-item">F1-Trac traction control system</li><li class="feature-item">E-Diff electronic differential</li></ul>

            <h2 class="section-heading text-3xl font-bold text-green-500">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center"><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">986 HP</h4><p class="text-gray-400 text-sm">Combined Power</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">2.5s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">340 km/h</h4><p class="text-gray-400 text-sm">Top Speed</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-green-400">800 Nm</h4><p class="text-gray-400 text-sm">Peak Torque</p></div></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">⚡ Acceleration</h3><p class="text-gray-300">0-200 km/h: 6.7s<br>0-250 km/h: 10.5s<br>1/4 Mile: 9.5s @ 240 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🔋 Hybrid Efficiency</h3><p class="text-gray-300">Electric Range: 25 km<br>Charge Time: 2.5 hours<br>Combined: 6.9 L/100km</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🛞 Braking & Track</h3><p class="text-gray-300">100-0 km/h: 29.5m<br>Fiorano Lap: 1:16.5<br>Lateral G: 1.50g</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">✨ SF90 Exclusive Features</h3><p class="text-gray-300">eManettino with 4 driving modes<br>e-AWD Electric Front Axle<br>Torque Vectoring by Brake<br>Side Slip Control (SSC) 6.0<br>Virtual Short Wheelbase</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-green-500 transition-all"><h3 class="text-xl font-bold text-green-400 mb-3">🚗 Practicality</h3><p class="text-gray-300">Frunk Capacity: 70 Litres<br>2-Seater Sports Configuration<br>Plug-in Charging Port</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-green-500">eManettino Driving Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">eDRIVE (Electric)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">HYBRID</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">PERFORMANCE</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-green-600 transition-all cursor-default hover:scale-105">QUALIFY</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-green-500">Available Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-red-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Rosso Corsa"></div><div class="w-12 h-12 bg-yellow-400 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Giallo Modena"></div><div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Nero Daytona"></div><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Bianco Avus"></div><div class="w-12 h-12 bg-blue-900 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Blu Tour de France"></div><div class="w-12 h-12 bg-green-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Verde British"></div><div class="w-12 h-12 bg-gray-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Grigio Titanio"></div></div></div>

            <div class="bg-gradient-to-r from-green-900/30 to-green-600/30 p-6 rounded-xl border border-green-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Assetto Fiorano Package (Optional)</h3><div class="grid md:grid-cols-2 gap-4"><div><p class="text-gray-300"><strong class="text-green-400">Multimatic Dampers:</strong> Racing suspension</p><p class="text-gray-300"><strong class="text-green-400">Carbon Fiber:</strong> Lightweight components</p><p class="text-gray-300"><strong class="text-green-400">Weight Reduction:</strong> -30 kg</p></div><div><p class="text-gray-300"><strong class="text-green-400">Aerodynamic Pack:</strong> High downforce kit</p><p class="text-gray-300"><strong class="text-green-400">Racing Seats:</strong> Carbon fiber seats</p><p class="text-gray-300"><strong class="text-green-400">Track Tires:</strong> Michelin Pilot Sport Cup 2</p></div></div></div>

            <div class="bg-gradient-to-r from-green-900/30 to-green-600/30 p-6 rounded-xl border border-green-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-green-400">Ex-Showroom Price:</strong> ₹6.50 Crore</p><p class="text-gray-300"><strong class="text-green-400">On-Road Price (Mumbai):</strong> ₹7.80 Crore</p><p class="text-gray-300"><strong class="text-green-400">EMI Starting From:</strong> ₹9.15 Lakh/month</p></div><button onclick="inquireNow()" class="glow-btn bg-green-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">Inquire Now →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-green-500/20"><p class="hover:text-green-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-green-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = { 'ferrari-488-gtb': 'ferrari-488-gtb-details.php', 'ferrari-f8': 'ferrari-f8-details.php', 'ferrari-sf90': 'ferrari-sf90-details.php', 'ferrari-812': 'ferrari-812-details.php', 'ferrari-roma': 'ferrari-roma-details.php', 'ferrari-purosangue': 'ferrari-purosangue-details.php' };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }

        const allImages = ["https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc09285.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc09868.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc01738-1.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc00015.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc01818.jpg?w=892&h=502","https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc01871.jpg?w=892&h=502"];
        
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
        function inquireNow() { alert("Thank you for your interest in the Ferrari SF90 Stradale! Our hybrid specialists will contact you shortly."); window.location.href = "#contact"; }
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>
</html>