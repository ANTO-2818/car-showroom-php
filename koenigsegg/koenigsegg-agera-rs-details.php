<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Koenigsegg Agera RS - Anto's Hypercar Showroom</title>
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
                box-shadow: 0 0 20px rgba(0, 200, 255, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(0, 200, 255, 0.6);
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

        body {
            background-image: url("https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?q=80&w=1974&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-blend-mode: overlay;
            background-color: #05050a;
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
        .gallery-container:hover { box-shadow: 0 0 30px rgba(0, 200, 255, 0.3); }
        .gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; transition: transform 0.5s ease-in-out; }
        
        .gallery-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 20; transition: all 0.3s ease;
            border: 1px solid rgba(0, 200, 255, 0.2); backdrop-filter: blur(5px);
        }
        .gallery-btn:hover { background: rgba(0, 200, 255, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 30px rgba(0, 200, 255, 0.5); }
        .gallery-btn.left { left: 10px; }
        .gallery-btn.right { right: 10px; }
        
        .image-indicator { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 20; }
        .indicator-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .indicator-dot:hover { background: rgba(0, 200, 255, 0.7); transform: scale(1.3); }
        .indicator-dot.active { background: #00c8ff; transform: scale(1.2); box-shadow: 0 0 15px #00c8ff; }
        
        .modal-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 50px; height: 50px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 60; transition: all 0.3s ease;
            border: 1px solid rgba(0, 200, 255, 0.2); backdrop-filter: blur(5px);
        }
        .modal-btn:hover { background: rgba(0, 200, 255, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 40px rgba(0, 200, 255, 0.6); }
        .modal-btn.left { left: 20px; }
        .modal-btn.right { right: 20px; }
        
        .modal-indicator { position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 60; }
        .modal-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .modal-dot:hover { background: rgba(0, 200, 255, 0.7); transform: scale(1.3); }
        .modal-dot.active { background: #00c8ff; transform: scale(1.2); box-shadow: 0 0 20px #00c8ff; }
        
        .modal-counter { position: absolute; top: 20px; left: 20px; color: white; font-size: 1rem; background: rgba(0, 0, 0, 0.7); padding: 8px 16px; border-radius: 20px; z-index: 60; backdrop-filter: blur(5px); }
        #imageModal { transition: opacity 0.3s ease; }
        #imageModal.flex { opacity: 1; }
        #imageModal.hidden { opacity: 0; pointer-events: none; }

        .gallery-img { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .gallery-img::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(0, 200, 255, 0.2), transparent); transition: left 0.5s ease; z-index: 1; pointer-events: none; }
        .gallery-img:hover::before { left: 100%; }
        .gallery-img:hover { transform: scale(1.08) rotate(1deg); box-shadow: 0 20px 40px rgba(0, 200, 255, 0.4); }

        .info-card { background: linear-gradient(145deg, #0f0f1a, #03030a); border: 1px solid rgba(0, 200, 255, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .info-card::before { content: ''; position: absolute; top: -2px; left: -2px; right: -2px; bottom: -2px; background: linear-gradient(45deg, #00c8ff, #00e5ff, #00c8ff); border-radius: 16px; opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .info-card:hover { transform: translateY(-10px) scale(1.02); border-color: transparent; }
        .info-card:hover::before { opacity: 0.3; }
        .info-card:hover { box-shadow: 0 20px 40px rgba(0, 200, 255, 0.3); }

        .spec-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; }
        .spec-item:hover { background: rgba(0, 200, 255, 0.1); transform: translateX(10px); color: #00c8ff; }

        .feature-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; list-style-type: none; position: relative; padding-left: 2rem; }
        .feature-item::before { content: '⚡'; position: absolute; left: 0.5rem; color: #00c8ff; font-size: 1rem; transition: all 0.3s ease; }
        .feature-item:hover { background: rgba(0, 200, 255, 0.1); transform: translateX(10px); color: #00c8ff; }
        .feature-item:hover::before { transform: scale(1.3); color: #00e5ff; }

        .perf-card { transition: all 0.4s ease; position: relative; overflow: hidden; background: linear-gradient(145deg, #1a1a2e, #0a0a15); }
        .perf-card::after { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(0, 200, 255, 0.2); transform: translate(-50%, -50%); transition: width 0.6s, height 0.6s; }
        .perf-card:hover { transform: scale(1.1) translateY(-5px); border-color: #00c8ff; }
        .perf-card:hover::after { width: 300px; height: 300px; }
        .perf-card:hover h4 { color: #00c8ff; transform: scale(1.1); }
        .perf-card h4 { transition: all 0.3s ease; position: relative; z-index: 1; }
        .perf-card p { transition: all 0.3s ease; position: relative; z-index: 1; }

        .back-btn { transition: all 0.3s ease; position: relative; overflow: hidden; }
        .back-btn:hover { transform: translateX(-5px); color: #00c8ff; text-shadow: 0 0 10px rgba(0, 200, 255, 0.5); }

        .page-title { transition: all 0.3s ease; position: relative; display: inline-block; }
        .page-title:hover { transform: scale(1.05); text-shadow: 0 0 20px rgba(0, 200, 255, 0.5); }

        .section-heading { transition: all 0.3s ease; position: relative; display: inline-block; }
        .section-heading::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #00c8ff, #00e5ff); transition: width 0.3s ease; }
        .section-heading:hover::after { width: 100%; }
        .section-heading:hover { transform: translateX(10px); color: #00c8ff; }

        .model-selector { position: relative; z-index: 100; margin-right: 20px; }
        .model-selector select {
            background: rgba(15, 15, 26, 0.9); backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 200, 255, 0.3); padding: 8px 32px 8px 16px;
            border-radius: 12px; font-size: 0.9rem; font-weight: 500;
            cursor: pointer; transition: all 0.3s ease; appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2300c8ff'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 8px center; background-size: 16px;
            color: white;
        }
        .model-selector select:hover { border-color: rgba(0, 200, 255, 0.6); background-color: rgba(15, 15, 26, 1); box-shadow: 0 0 15px rgba(0, 200, 255, 0.2); }
        .model-selector select:focus { outline: none; border-color: #00c8ff; box-shadow: 0 0 20px rgba(0, 200, 255, 0.3); }
        .model-selector option { background: #0f0f1a; color: white; }

        .agera-icon { font-size: 48px; filter: drop-shadow(0 0 10px rgba(0, 200, 255, 0.5)); transition: all 0.3s ease; display: flex; justify-content: center; margin-bottom: 20px; }
        .agera-icon:hover { transform: scale(1.2); filter: drop-shadow(0 0 20px rgba(0, 200, 255, 0.8)); }
        .glow-btn {
            background: linear-gradient(135deg, #00c8ff, #0099cc);
            transition: all 0.3s ease;
        }
        .glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 200, 255, 0.5);
        }
        .record-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
            color: #00c8ff;
            border: 1px solid #00c8ff;
            z-index: 15;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900/90 flex justify-between items-center z-50 border-b border-cyan-500/20 shadow-lg backdrop-blur-md">
        <div class="flex items-center gap-4">
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="koenigsegg-jesko">🏎️ Koenigsegg Jesko</option>
                    <option value="koenigsegg-regera">🏎️ Koenigsegg Regera</option>
                    <option value="koenigsegg-agera-rs" >🏎️ Koenigsegg Agera RS (Current)</option>
                    <option value="koenigsegg-gemera">🏎️ Koenigsegg Gemera</option>
                    <option value="koenigsegg-cc850">🏎️ Koenigsegg CC850</option>
                    <option value="koenigsegg-one1">🏎️ Koenigsegg One:1</option>
                </select>
            </div>
            <a href="Koenigsegg.php" class="back-btn text-cyan-400 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Koenigsegg Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-cyan-400 animate-fadeUp delay-1">Koenigsegg Agera RS</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Agera Icon -->
        <div class="agera-icon">👻🏆⚡</div>

        <!-- Badge -->
        <div class="flex justify-center mb-6">
            <span class="bg-cyan-500/20 text-cyan-300 px-6 py-2 rounded-full text-sm font-semibold border border-cyan-500/30 animate-glow">🏁 WORLD RECORD HOLDER | 447 km/h | 1360 HP 🏁</span>
        </div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://exclusivecarregistry.com/images/cars/preview/thumb_4102.jpg" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="Agera RS Front">
                <img src="https://www.koenigsegg.com/wp-content/uploads/2017/11/Agera-RS-1-of-1-2.jpg" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="Agera RS Side">
                <img src="https://www.topgear.com/sites/default/files/images/gallery-migration/2017-11/agera_rs_1.jpg" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="Agera RS Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content - Agera RS Specifications -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-cyan-400">The World Record King</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">The Koenigsegg Agera RS is a legendary hypercar that shocked the automotive world by becoming the fastest production car in the world in 2017. With a two-way average top speed of 447 km/h (277.9 mph) on a public road in Nevada, USA, the Agera RS dethroned the Bugatti Veyron Super Sport. Powered by a 5.0L twin-turbo V8 producing 1,360 HP, the Agera RS combines blistering speed with remarkable aerodynamic efficiency and lightweight construction. Only 25 units were ever built, making it one of the most exclusive hypercars ever created.</p>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-cyan-400">Manufacturer:</strong> Koenigsegg Automotive AB</p><p class="spec-item"><strong class="text-cyan-400">Production:</strong> 2015 – 2018 (25 units)</p><p class="spec-item"><strong class="text-cyan-400">Body Style:</strong> 2-door Targa (removable roof)</p><p class="spec-item"><strong class="text-cyan-400">Layout:</strong> Mid-engine, Rear-wheel drive</p><p class="spec-item"><strong class="text-cyan-400">Transmission:</strong> 7-speed dual-clutch</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-cyan-400">Fuel Type:</strong> Petrol / E85</p><p class="spec-item"><strong class="text-cyan-400">Production Run:</strong> 2015-2018</p><p class="spec-item"><strong class="text-cyan-400">Seating Capacity:</strong> 2</p><p class="spec-item"><strong class="text-cyan-400">World Record:</strong> 447 km/h (277.9 mph)</p><p class="spec-item"><strong class="text-cyan-400">Units Built:</strong> 25 (Ultra-rare)</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Dimensions & Weight</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Length:</strong> 4,293 mm</p><p class="spec-item"><strong class="text-cyan-400">Width:</strong> 1,996 mm</p><p class="spec-item"><strong class="text-cyan-400">Height:</strong> 1,120 mm</p><p class="spec-item"><strong class="text-cyan-400">Wheelbase:</strong> 2,662 mm</p><p class="spec-item"><strong class="text-cyan-400">Dry Weight:</strong> 1,395 kg (Incredibly light)</p><p class="spec-item"><strong class="text-cyan-400">Power-to-Weight Ratio:</strong> 975 HP/ton</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Engine Type:</strong> 5.0L Twin-Turbo V8 (Koenigsegg Agera V8)</p><p class="spec-item"><strong class="text-cyan-400">Horsepower:</strong> 1,360 HP (1,160 HP on pump gas) @ 7,800 rpm</p><p class="spec-item"><strong class="text-cyan-400">Torque:</strong> 1,371 Nm (1,011 lb-ft) @ 4,500 rpm</p><p class="spec-item"><strong class="text-cyan-400">Redline:</strong> 8,250 rpm</p><p class="spec-item"><strong class="text-cyan-400">Compression Ratio:</strong> 9.0:1</p><p class="spec-item"><strong class="text-cyan-400">Specific Output:</strong> 272 HP per liter</p><p class="spec-item"><strong class="text-cyan-400">Turbochargers:</strong> Two variable-geometry turbochargers</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Transmission & Drivetrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Gearbox:</strong> 7-speed dual-clutch (LSD)</p><p class="spec-item"><strong class="text-cyan-400">Shift Speed:</strong> 30 milliseconds</p><p class="spec-item"><strong class="text-cyan-400">Drivetrain:</strong> Rear-wheel drive with electronic differential</p><p class="spec-item"><strong class="text-cyan-400">Clutch:</strong> Dual wet carbon fiber clutch</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Aerodynamics & Design</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Active Aerodynamics:</strong> Front splitter & rear wing</p><p class="text-gray-300"><strong class="text-cyan-400">Downforce:</strong> 450 kg @ 250 km/h</p><p class="spec-item"><strong class="text-cyan-400">Drag Coefficient:</strong> 0.33 – 0.45 (adjustable)</p><p class="spec-item"><strong class="text-cyan-400">Record Configuration:</strong> Unique 1M wing for record run</p><p class="spec-item"><strong class="text-cyan-400">Roof:</strong> Removable carbon fiber hardtop</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Digital Instrument Cluster</li><li class="feature-item">9-inch Infotainment Screen</li><li class="feature-item">Apple CarPlay Support</li><li class="feature-item">Premium Sound System</li><li class="feature-item">Full Carbon Fiber Interior Trim</li><li class="feature-item">Racing Seats with Alcantara</li><li class="feature-item">Telemetry & Performance Recording</li><li class="feature-item">Automatic Climate Control</li></ul>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Chassis & Safety</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Carbon Fiber Monocoque (Koenigsegg Proprietary)</li><li class="feature-item">Electronic Stability Control (ESC) with 5 modes</li><li class="feature-item">Carbon Ceramic Brakes (CCB)</li><li class="feature-item">Traction Control System</li><li class="feature-item">Triplex Spring Rear Suspension</li><li class="feature-item">Active Damping (Öhlins)</li><li class="feature-item">Front Lift System for ramps</li><li class="feature-item">Roll-over Protection Structure</li></ul>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">1360 HP</h4><p class="text-gray-400 text-sm">Max Power (E85)</p></div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">2.5s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">447 km/h</h4><p class="text-gray-400 text-sm">World Record Top Speed</p></div>
                <div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">1371 Nm</h4><p class="text-gray-400 text-sm">Peak Torque</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">⚡ Record-Breaking Acceleration</h3><p class="text-gray-300">0-200 km/h: 6.5s<br>0-300 km/h: 12.8s<br>0-400 km/h: 19.5s<br>1/4 Mile: 9.5s @ 250 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">⛽ Fuel Economy</h3><p class="text-gray-300">Combined: 18.0 L/100km<br>City: 26 L/100km<br>Highway: 13 L/100km<br>Fuel capacity: 82 Litres</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">🛞 Braking Performance</h3><p class="text-gray-300">100-0 km/h: 30.5m<br>200-0 km/h: 120m<br>Brake discs: 397mm CCB<br>6-piston calipers (front)</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">✨ Agera RS Exclusive Features</h3><p class="text-gray-300">World Record Holder (447 km/h)<br>1:1 Power-to-Weight Ratio potential<br>Active Aerodynamics with 1M wing<br>Twin-turbo 5.0L V8 (1360 HP)<br>Carbon fiber wheels (optional)<br>Limited to 25 units worldwide</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">🚗 Practicality & Usability</h3><p class="text-gray-300">Front luggage: 100 litres<br>Hydraulic front lift system<br>Removable hardtop (Targa)<br>Air conditioning & sound insulation<br>Electric power steering</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-cyan-400">Drive Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">NORMAL</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">WET</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">TRACK</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">TOP SPEED MODE</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-cyan-400">Signature Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-cyan-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Cyan Racing"></div><div class="w-12 h-12 bg-orange-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Pearl Orange"></div><div class="w-12 h-12 bg-gray-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Matte Carbon"></div><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Arctic White"></div><div class="w-12 h-12 bg-red-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Crimson Red"></div><div class="w-12 h-12 bg-blue-800 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Deep Blue"></div><div class="w-12 h-12 bg-green-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Emerald Green"></div></div></div>

            <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">🏆 The 447 km/h Record Run</h3><p class="text-gray-300">On November 4, 2017, on a closed section of Nevada State Route 160, the Koenigsegg Agera RS achieved a two-way average top speed of 447 km/h (277.9 mph). The car also recorded 458 km/h (284.5 mph) on one of the runs, making it the fastest production car ever tested. This record solidified Koenigsegg's place in automotive history.</p></div>

            <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Rarity</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-cyan-400">Original Price:</strong> $2.5 Million USD</p><p class="text-gray-300"><strong class="text-cyan-400">Current Market Value:</strong> $5M+ USD (Appreciating)</p><p class="text-gray-300"><strong class="text-cyan-400">Production:</strong> Only 25 units ever made</p><p class="text-gray-300"><strong class="text-cyan-400">Ownership:</strong> Highly exclusive collector's item</p></div><button onclick="inquireNow()" class="glow-btn bg-cyan-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105 shadow-lg">Inquire About Agera RS →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-cyan-500/20"><p class="hover:text-cyan-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-cyan-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        // High-quality Koenigsegg Agera RS image collection
        const allImages = [
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/6.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/1.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/5.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/7.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/8.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/2.jpg?w=892&h=502"
        ];
        
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
        function inquireNow() { alert("Thank you for your interest in the Koenigsegg Agera RS! Our hypercar specialists will contact you shortly with exclusive details about this legendary record-holder."); }
        
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = {
                'koenigsegg-jesko': 'koenigsegg-jesko-details.php',
                'koenigsegg-regera': 'koenigsegg-regera-details.php',
                'koenigsegg-agera-rs': 'koenigsegg-agera-rs-details.php',
                'koenigsegg-gemera': 'koenigsegg-gemera-details.php',
                'koenigsegg-cc850': 'koenigsegg-cc850-details.php',
                'koenigsegg-one1': 'koenigsegg-one1-details.php'
            };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }
        
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>

</html>