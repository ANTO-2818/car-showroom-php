<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Koenigsegg Jesko - Anto's Hypercar Showroom</title>
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
                box-shadow: 0 0 20px rgba(6, 182, 212, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(6, 182, 212, 0.6);
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
            background-image: url("https://images.unsplash.com/photo-1533105079780-92b9be482077?q=80&w=1974&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-blend-mode: overlay;
            background-color: #0a0a0a;
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
        .gallery-container:hover { box-shadow: 0 0 30px rgba(6, 182, 212, 0.3); }
        .gallery-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; transition: transform 0.5s ease-in-out; }
        
        .gallery-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 20; transition: all 0.3s ease;
            border: 1px solid rgba(6, 182, 212, 0.2); backdrop-filter: blur(5px);
        }
        .gallery-btn:hover { background: rgba(6, 182, 212, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 30px rgba(6, 182, 212, 0.5); }
        .gallery-btn.left { left: 10px; }
        .gallery-btn.right { right: 10px; }
        
        .image-indicator { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 20; }
        .indicator-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .indicator-dot:hover { background: rgba(6, 182, 212, 0.7); transform: scale(1.3); }
        .indicator-dot.active { background: #06b6d4; transform: scale(1.2); box-shadow: 0 0 15px #06b6d4; }
        
        .modal-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.7); color: white; border: none;
            width: 50px; height: 50px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; z-index: 60; transition: all 0.3s ease;
            border: 1px solid rgba(6, 182, 212, 0.2); backdrop-filter: blur(5px);
        }
        .modal-btn:hover { background: rgba(6, 182, 212, 0.9); transform: translateY(-50%) scale(1.2); box-shadow: 0 0 40px rgba(6, 182, 212, 0.6); }
        .modal-btn.left { left: 20px; }
        .modal-btn.right { right: 20px; }
        
        .modal-indicator { position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 60; }
        .modal-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255, 255, 255, 0.5); cursor: pointer; transition: all 0.3s ease; }
        .modal-dot:hover { background: rgba(6, 182, 212, 0.7); transform: scale(1.3); }
        .modal-dot.active { background: #06b6d4; transform: scale(1.2); box-shadow: 0 0 20px #06b6d4; }
        
        .modal-counter { position: absolute; top: 20px; left: 20px; color: white; font-size: 1rem; background: rgba(0, 0, 0, 0.7); padding: 8px 16px; border-radius: 20px; z-index: 60; backdrop-filter: blur(5px); }
        #imageModal { transition: opacity 0.3s ease; }
        #imageModal.flex { opacity: 1; }
        #imageModal.hidden { opacity: 0; pointer-events: none; }

        .gallery-img { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .gallery-img::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.2), transparent); transition: left 0.5s ease; z-index: 1; pointer-events: none; }
        .gallery-img:hover::before { left: 100%; }
        .gallery-img:hover { transform: scale(1.08) rotate(1deg); box-shadow: 0 20px 40px rgba(6, 182, 212, 0.4); }

        .info-card { background: linear-gradient(145deg, #0f172a, #020617); border: 1px solid rgba(6, 182, 212, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; overflow: hidden; }
        .info-card::before { content: ''; position: absolute; top: -2px; left: -2px; right: -2px; bottom: -2px; background: linear-gradient(45deg, #06b6d4, #3b82f6, #06b6d4); border-radius: 16px; opacity: 0; transition: opacity 0.4s ease; z-index: -1; }
        .info-card:hover { transform: translateY(-10px) scale(1.02); border-color: transparent; }
        .info-card:hover::before { opacity: 0.3; }
        .info-card:hover { box-shadow: 0 20px 40px rgba(6, 182, 212, 0.3); }

        .spec-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; }
        .spec-item:hover { background: rgba(6, 182, 212, 0.1); transform: translateX(10px); color: #06b6d4; }

        .feature-item { transition: all 0.3s ease; padding: 0.5rem; border-radius: 8px; list-style-type: none; position: relative; padding-left: 2rem; }
        .feature-item::before { content: '⚡'; position: absolute; left: 0.5rem; color: #06b6d4; font-size: 1rem; transition: all 0.3s ease; }
        .feature-item:hover { background: rgba(6, 182, 212, 0.1); transform: translateX(10px); color: #06b6d4; }
        .feature-item:hover::before { transform: scale(1.3); color: #3b82f6; }

        .perf-card { transition: all 0.4s ease; position: relative; overflow: hidden; background: linear-gradient(145deg, #1e293b, #0f172a); }
        .perf-card::after { content: ''; position: absolute; top: 50%; left: 50%; width: 0; height: 0; border-radius: 50%; background: rgba(6, 182, 212, 0.2); transform: translate(-50%, -50%); transition: width 0.6s, height 0.6s; }
        .perf-card:hover { transform: scale(1.1) translateY(-5px); border-color: #06b6d4; }
        .perf-card:hover::after { width: 300px; height: 300px; }
        .perf-card:hover h4 { color: #06b6d4; transform: scale(1.1); }
        .perf-card h4 { transition: all 0.3s ease; position: relative; z-index: 1; }
        .perf-card p { transition: all 0.3s ease; position: relative; z-index: 1; }

        .back-btn { transition: all 0.3s ease; position: relative; overflow: hidden; }
        .back-btn:hover { transform: translateX(-5px); color: #06b6d4; text-shadow: 0 0 10px rgba(6, 182, 212, 0.5); }

        .page-title { transition: all 0.3s ease; position: relative; display: inline-block; }
        .page-title:hover { transform: scale(1.05); text-shadow: 0 0 20px rgba(6, 182, 212, 0.5); }

        .section-heading { transition: all 0.3s ease; position: relative; display: inline-block; }
        .section-heading::after { content: ''; position: absolute; bottom: -5px; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #06b6d4, #3b82f6); transition: width 0.3s ease; }
        .section-heading:hover::after { width: 100%; }
        .section-heading:hover { transform: translateX(10px); color: #06b6d4; }

        .model-selector { position: relative; z-index: 100; margin-right: 20px; }
        .model-selector select {
            background: rgba(15, 23, 42, 0.9); backdrop-filter: blur(8px);
            border: 1px solid rgba(6, 182, 212, 0.3); padding: 8px 32px 8px 16px;
            border-radius: 12px; font-size: 0.9rem; font-weight: 500;
            cursor: pointer; transition: all 0.3s ease; appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2306b6d4'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 8px center; background-size: 16px;
            color: white;
        }
        .model-selector select:hover { border-color: rgba(6, 182, 212, 0.6); background-color: rgba(15, 23, 42, 1); box-shadow: 0 0 15px rgba(6, 182, 212, 0.2); }
        .model-selector select:focus { outline: none; border-color: #06b6d4; box-shadow: 0 0 20px rgba(6, 182, 212, 0.3); }
        .model-selector option { background: #0f172a; color: white; }

        .ghost-icon { font-size: 48px; filter: drop-shadow(0 0 10px rgba(6, 182, 212, 0.5)); transition: all 0.3s ease; display: flex; justify-content: center; margin-bottom: 20px; }
        .ghost-icon:hover { transform: scale(1.2); filter: drop-shadow(0 0 20px rgba(6, 182, 212, 0.8)); }
        .glow-btn {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
            transition: all 0.3s ease;
        }
        .glow-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(6, 182, 212, 0.5);
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
                    <option value="koenigsegg-jesko" >🏎️ Koenigsegg Jesko (Current)</option>
                    <option value="koenigsegg-regera">🏎️ Koenigsegg Regera</option>
                    <option value="koenigsegg-cc850">🏎️ Koenigsegg CC850</option>
                    <option value="koenigsegg-gemera">🏎️ Koenigsegg Gemera</option>
                    <option value="koenigsegg-ccr">🏎️ Koenigsegg CCR</option>
                    <option value="koenigsegg-ccx">🏎️ Koenigsegg CCX</option>
                </select>
            </div>
            <a href="Koenigsegg.php" class="back-btn text-cyan-400 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Koenigsegg Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-cyan-400 animate-fadeUp delay-1">Koenigsegg Jesko</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Ghost Logo (Koenigsegg emblem style) -->
        <div class="ghost-icon">👻⚡</div>

        <!-- Badge -->
        <div class="flex justify-center mb-6">
            <span class="bg-cyan-500/20 text-cyan-300 px-6 py-2 rounded-full text-sm font-semibold border border-cyan-500/30 animate-glow">🏁 5.0L Twin-Turbo V8 | 1600 HP | 9-Speed LST 🏁</span>
        </div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://cdn.motor1.com/images/mgl/0ZZPGl/s3/koenigsegg-jesko-2023.jpg" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="Jesko Front">
                <img src="https://www.koenigsegg.com/wp-content/uploads/2020/12/2.jpg" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="Jesko Side">
                <img src="https://www.topgear.com/sites/default/files/images/gallery-migration/2019-03/1f0b237e-9bf0-4f8c-8b6b-6b4f2f5e5c0e.jpg" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="Jesko Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content - Jesko Specifications -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-cyan-400">The Jesko Legacy</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">Named after Jesko von Koenigsegg, the company's founder, the Jesko is an engineering marvel designed to dominate both track and top-speed records. Powered by a 5.0L twin-turbocharged V8 producing up to 1600 HP on E85, the Jesko features the revolutionary 9-speed Light Speed Transmission (LST) and active aerodynamics producing over 1400 kg of downforce. With a theoretical top speed exceeding 300 mph, the Jesko redefines the limits of automotive performance.</p>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-cyan-400">Manufacturer:</strong> Koenigsegg Automotive AB</p><p class="spec-item"><strong class="text-cyan-400">Production:</strong> 2020 – Present</p><p class="spec-item"><strong class="text-cyan-400">Body Style:</strong> 2-door Coupe</p><p class="spec-item"><strong class="text-cyan-400">Layout:</strong> Mid-engine, Rear-wheel drive</p><p class="spec-item"><strong class="text-cyan-400">Transmission:</strong> 9-speed LST (Light Speed Transmission)</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-cyan-400">Fuel Type:</strong> Petrol / E85</p><p class="spec-item"><strong class="text-cyan-400">Drivetrain:</strong> RWD with electronic diff</p><p class="spec-item"><strong class="text-cyan-400">Seating Capacity:</strong> 2</p><p class="spec-item"><strong class="text-cyan-400">Fuel Tank Capacity:</strong> 72 Litres</p><p class="spec-item"><strong class="text-cyan-400">Emissions:</strong> Ultra-low carbon options</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Dimensions & Aerodynamics</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Length:</strong> 4,610 mm</p><p class="spec-item"><strong class="text-cyan-400">Width:</strong> 2,030 mm</p><p class="spec-item"><strong class="text-cyan-400">Height:</strong> 1,110 mm</p><p class="spec-item"><strong class="text-cyan-400">Wheelbase:</strong> 2,700 mm</p><p class="spec-item"><strong class="text-cyan-400">Dry Weight:</strong> 1,320 kg (ultra-light carbon chassis)</p><p class="spec-item"><strong class="text-cyan-400">Downforce:</strong> 1,400 kg @ 250 km/h</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Engine & Powertrain</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Engine Type:</strong> 5.0L Twin-Turbo V8 (Hot-V configuration)</p><p class="spec-item"><strong class="text-cyan-400">Horsepower:</strong> 1280 HP (gasoline) / 1600 HP (E85) @ 7800 rpm</p><p class="spec-item"><strong class="text-cyan-400">Torque:</strong> 1100 lb-ft (1500 Nm) @ 5100 rpm</p><p class="spec-item"><strong class="text-cyan-400">Redline:</strong> 8,500 rpm</p><p class="spec-item"><strong class="text-cyan-400">Compression Ratio:</strong> 9.5:1</p><p class="spec-item"><strong class="text-cyan-400">Specific Output:</strong> 320 HP per liter (E85)</p><p class="spec-item"><strong class="text-cyan-400">0-300 km/h:</strong> Under 11 seconds</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Revolutionary LST Gearbox</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Design:</strong> 9-speed multi-clutch transmission</p><p class="spec-item"><strong class="text-cyan-400">Shift Speed:</strong> Near-instantaneous (Ultrafast)</p><p class="spec-item"><strong class="text-cyan-400">Weight:</strong> Just 90 kg</p><p class="spec-item"><strong class="text-cyan-400">Unique Feature:</strong> Can shift from 7th to 4th directly</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Active Aerodynamics</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-cyan-400">Front Splitter:</strong> Active dual-element</p><p class="spec-item"><strong class="text-cyan-400">Rear Wing:</strong> Large active top-mounted wing</p><p class="spec-item"><strong class="text-cyan-400">Underbody:</strong> Venturi tunnels with active flaps</p><p class="spec-item"><strong class="text-cyan-400">Drag Coefficient:</strong> Variable from 0.28 to 0.48</p></div>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">SmartCluster Reconfigurable Display</li><li class="feature-item">9-inch Portrait Infotainment</li><li class="feature-item">Apple CarPlay & Android Auto</li><li class="feature-item">Premium Audio by Koenigsegg</li><li class="feature-item">Full Carbon Fiber Interior Trim</li><li class="feature-item">Racing Seats with 6-point harness</li><li class="feature-item">Track Telemetry System</li><li class="feature-item">Automatic Climate Control</li></ul>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Safety & Chassis</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Carbon Fiber Monocoque (Koenigsegg Direct Drive)</li><li class="feature-item">Electronic Stability Control (ESC)</li><li class="feature-item">Ceramic Carbon Brakes (CCB)</li><li class="feature-item">Traction Control with 6 modes</li><li class="feature-item">Triplex Suspension (rear)</li><li class="feature-item">Adaptive Damping System</li><li class="feature-item">Rear-view camera & sensors</li></ul>

            <h2 class="section-heading text-3xl font-bold text-cyan-400">Performance Metrics</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center"><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">1600 HP</h4><p class="text-gray-400 text-sm">Max Power (E85)</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">2.5s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">300+ mph</h4><p class="text-gray-400 text-sm">Top Speed (Theoretical)</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-cyan-400">1500 Nm</h4><p class="text-gray-400 text-sm">Peak Torque</p></div></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">⚡ Acceleration Kings</h3><p class="text-gray-300">0-200 km/h: 5.5s<br>0-300 km/h: 11.0s<br>0-400 km/h: ~19s<br>1/4 Mile: 9.4s @ 260 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">⛽ Fuel Economy</h3><p class="text-gray-300">Combined: 18.0 L/100km (est)<br>City: 25 L/100km<br>Highway: 12 L/100km<br>E85 consumption higher</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">🛞 Braking & Grip</h3><p class="text-gray-300">100-0 km/h: 28m<br>Lateral G: 2.0g+ (with wing)<br>Brake discs: 410mm ceramic</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">✨ Jesko Absolutes</h3><p class="text-gray-300">Light Speed Transmission (LST)<br>Ultra-light carbon chassis (1320 kg)<br>Active rear-wheel steering<br>Twin-turbo 5.0L V8 (1600 HP)<br>Top speed targeting 530 km/h<br>Downforce exceeding car weight</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-cyan-500 transition-all"><h3 class="text-xl font-bold text-cyan-400 mb-3">🚀 Engineering Marvels</h3><p class="text-gray-300">Front luggage: 100 litres<br>Hydraulic lift system<br>Autoskin (remote doors)<br>Carbon fiber wheels (optional)</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-cyan-400">Drive Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">NORMAL</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">WET</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">TRACK</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-cyan-600 transition-all cursor-default hover:scale-105">TOP SPEED</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-cyan-400">Signature Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-cyan-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Cyan Racing"></div><div class="w-12 h-12 bg-orange-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Ghost Orange"></div><div class="w-12 h-12 bg-slate-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Matte Carbon"></div><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Pearl White"></div><div class="w-12 h-12 bg-red-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Candy Red"></div><div class="w-12 h-12 bg-blue-900 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Deep Blue"></div><div class="w-12 h-12 bg-green-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Jade Green"></div></div></div>

            <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">The Ultimate Hypercar</h3><p class="text-gray-300">The Jesko is not merely a car; it's a declaration of engineering audacity. From its revolutionary Light Speed Transmission to its record-shattering power-to-weight ratio, every component is optimized for absolute performance. It stands as a tribute to the relentless pursuit of speed.</p></div>

            <div class="bg-gradient-to-r from-cyan-900/30 to-blue-900/30 p-6 rounded-xl border border-cyan-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-cyan-400">Ex-Showroom Price:</strong> $3.0 Million USD</p><p class="text-gray-300"><strong class="text-cyan-400">On-Road Price (approx):</strong> ₹25 Crore</p><p class="text-gray-300"><strong class="text-cyan-400">Production Limit:</strong> 125 units (Sold out)</p></div><button onclick="inquireNow()" class="glow-btn bg-cyan-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105 shadow-lg">Request Jesko Info →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-cyan-500/20"><p class="hover:text-cyan-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-cyan-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        // Updated image set for Koenigsegg Jesko
        const allImages = [
            "https://www.topgear.com/sites/default/files/2021/07/segg_0.jpg?w=827&h=465",
            "https://www.topgear.com/sites/default/files/2021/07/segg_1.jpg?w=827&h=465",
            "https://www.topgear.com/sites/default/files/2021/07/segg_3.jpg?w=827&h=465",
            "https://www.topgear.com/sites/default/files/2021/07/segg_5.jpg?w=827&h=465",
            "https://www.topgear.com/sites/default/files/2021/07/segg_7.jpg?w=827&h=465",
            "https://www.topgear.com/sites/default/files/2021/07/segg_10.jpg?w=827&h=465"
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
        function inquireNow() { alert("Thank you for your interest in the Koenigsegg Jesko! Our hypercar specialists will contact you shortly."); }
        
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = {
                'koenigsegg-jesko': 'koenigsegg-jesko-details.php',
                'koenigsegg-regera': 'koenigsegg-regera-details.php',
                'koenigsegg-cc850': 'koenigsegg-cc850-details.php',
                'koenigsegg-gemera': 'koenigsegg-gemera-details.php',
                'koenigsegg-ccr': 'koenigsegg-ccr-details.php',
                'koenigsegg-ccx': 'koenigsegg-ccx-details.php'
            };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }
        
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>

</html>