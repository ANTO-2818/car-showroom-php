<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lamborghini Countach - Anto's Car Showroom</title>
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

        .bull-icon { font-size: 48px; filter: drop-shadow(0 0 10px rgba(239, 68, 68, 0.5)); transition: all 0.3s ease; display: flex; justify-content: center; margin-bottom: 20px; }
        .bull-icon:hover { transform: scale(1.2); filter: drop-shadow(0 0 20px rgba(239, 68, 68, 0.8)); }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-red-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="lamborghini-aventador">🏎️ Lamborghini Aventador</option>
                    <option value="lamborghini-huracan">🏎️ Lamborghini Huracán</option>
                    <option value="lamborghini-revuelto">🏎️ Lamborghini Revuelto</option>
                    <option value="lamborghini-urus">🏎️ Lamborghini Urus</option>
                    <option value="lamborghini-sian">🏎️ Lamborghini Sián</option>
                    <option value="lamborghini-countach" >🏎️ Lamborghini Countach LPI 800-4 (Current)</option>
                </select>
            </div>
            <a href="Lamborghini.php" class="back-btn text-red-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Lamborghini Models
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">Lamborghini Countach LPI 800-4</h1>
    </div>

    <!-- Car Details Section -->
    <div class="max-w-4xl mx-auto p-8 pt-24">

        <!-- Bull Logo -->
        <div class="bull-icon">🐂</div>

        <!-- Hybrid V12 Badge -->
        <div class="flex justify-center mb-6">
            <span class="bg-red-500/20 text-red-400 px-6 py-2 rounded-full text-sm font-semibold border border-red-500/30 animate-glow">🏁 V12 HYBRID | 802 HP | ICONIC REBIRTH 🏁</span>
        </div>

        <!-- Gallery -->
        <div class="gallery-container mb-12 animate-fadeUp delay-2">
            <div class="gallery-grid" id="galleryGrid">
                <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/countach/2021/countach_landing_gateway.png" onclick="openFullscreen(0)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="0" alt="Countach Front">
                <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/countach/2021/countach_landing_gateway_side.png" onclick="openFullscreen(1)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="1" alt="Countach Side">
                <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/countach/2021/countach_landing_gateway_rear.png" onclick="openFullscreen(2)" class="h-56 w-full object-cover rounded-xl transition duration-500 cursor-pointer gallery-img" data-index="2" alt="Countach Rear">
            </div>
            <button class="gallery-btn left" onclick="navigateGallery('prev')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button>
            <button class="gallery-btn right" onclick="navigateGallery('next')"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button>
            <div class="image-indicator"><span class="indicator-dot active" onclick="jumpToImage(0)"></span><span class="indicator-dot" onclick="jumpToImage(1)"></span><span class="indicator-dot" onclick="jumpToImage(2)"></span><span class="indicator-dot" onclick="jumpToImage(3)"></span><span class="indicator-dot" onclick="jumpToImage(4)"></span><span class="indicator-dot" onclick="jumpToImage(5)"></span></div>
        </div>

        <!-- Info Content -->
        <div class="mt-12 info-card p-8 rounded-2xl shadow-2xl border border-gray-800 space-y-8 animate-fadeUp">
            <h2 class="section-heading text-3xl font-bold text-red-500">Overview</h2>
            <p class="text-gray-300 leading-relaxed hover:text-white transition-colors">The Lamborghini Countach LPI 800-4 is a stunning tribute to one of the most iconic supercars of all time. Celebrating the 50th anniversary of the original Countach, this limited-edition hybrid supercar combines the spirit of the 1970s legend with modern technology. Powered by a 6.5L V12 engine combined with a 48-volt supercapacitor hybrid system, the Countach produces 802 horsepower and rockets from 0-100 km/h in just 2.8 seconds. With only 112 units produced (referencing the LP112 project code of the original), the Countach LPI 800-4 is an instant classic that honors its wedge-shaped, scissor-doored predecessor while embracing the future.</p>

            <h2 class="section-heading text-3xl font-bold text-red-500">General Specifications</h2>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <div class="space-y-2"><p class="spec-item"><strong class="text-red-400">Manufacturer:</strong> Lamborghini S.p.A.</p><p class="spec-item"><strong class="text-red-400">Production:</strong> 2022 (112 units)</p><p class="spec-item"><strong class="text-red-400">Body Style:</strong> 2-door Coupe</p><p class="spec-item"><strong class="text-red-400">Layout:</strong> Mid-engine, All-wheel drive</p><p class="spec-item"><strong class="text-red-400">Transmission:</strong> 7-speed ISR automated manual</p></div>
                <div class="space-y-2"><p class="spec-item"><strong class="text-red-400">Fuel Type:</strong> Petrol + Mild Hybrid</p><p class="spec-item"><strong class="text-red-400">Drivetrain:</strong> AWD</p><p class="spec-item"><strong class="text-red-400">Seating Capacity:</strong> 2</p><p class="spec-item"><strong class="text-red-400">Fuel Tank Capacity:</strong> 80 Litres</p><p class="spec-item"><strong class="text-red-400">Production Run:</strong> Only 112 units (LP112 tribute)</p></div>
            </div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Dimensions</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Length:</strong> 4,870 mm</p><p class="spec-item"><strong class="text-red-400">Width:</strong> 2,099 mm</p><p class="spec-item"><strong class="text-red-400">Height:</strong> 1,139 mm</p><p class="spec-item"><strong class="text-red-400">Wheelbase:</strong> 2,700 mm</p><p class="spec-item"><strong class="text-red-400">Curb Weight:</strong> Approx. 1,595 kg</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Engine & Supercapacitor Hybrid System</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Engine Type:</strong> 6.5L Naturally Aspirated V12</p><p class="spec-item"><strong class="text-red-400">Engine Power:</strong> 769 HP @ 8,500 rpm</p><p class="spec-item"><strong class="text-red-400">Electric Motor:</strong> 48-volt supercapacitor hybrid</p><p class="spec-item"><strong class="text-red-400">Electric Power:</strong> 34 HP</p><p class="spec-item"><strong class="text-red-400">Combined Power:</strong> 802 HP</p><p class="spec-item"><strong class="text-red-400">Torque:</strong> 720 Nm + electric boost</p><p class="spec-item"><strong class="text-red-400">Redline:</strong> 8,500 rpm</p><p class="spec-item"><strong class="text-red-400">Supercapacitor:</strong> 3x power density of Li-ion</p><p class="spec-item"><strong class="text-red-400">0-200 km/h:</strong> 8.6 seconds</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Iconic Design Features</h2>
            <div class="text-gray-300 space-y-2"><p class="spec-item"><strong class="text-red-400">Scissor Doors:</strong> The legendary Countach door design</p><p class="spec-item"><strong class="text-red-400">Wedge Shape:</strong> Angular, futuristic silhouette</p><p class="spec-item"><strong class="text-red-400">NACA Intakes:</strong> Iconic side air intakes</p><p class="spec-item"><strong class="text-red-400">Periscopio Line:</strong> Central ridge from front to rear</p><p class="spec-item"><strong class="text-red-400">Hexagon Wheels:</strong> Inspired by original Countach</p><p class="spec-item"><strong class="text-red-400">Quad Exhaust:</strong> Rear-exit exhaust layout</p></div>

            <h2 class="section-heading text-3xl font-bold text-red-500">Interior & Technology</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">8.4-inch Touchscreen Infotainment</li><li class="feature-item">TFT Digital Instrument Cluster</li><li class="feature-item">Apple CarPlay</li><li class="feature-item">Premium Audio System</li><li class="feature-item">Carbon Fiber Interior Trim</li><li class="feature-item">Sport Seats with Heritage Stitching</li><li class="feature-item">Countach Badging throughout</li><li class="feature-item">Drive Mode Selector</li></ul>

            <h2 class="section-heading text-3xl font-bold text-red-500">Safety Features</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300"><li class="feature-item">Advanced airbags system</li><li class="feature-item">Electronic Stability Control (ESP)</li><li class="feature-item">High-performance carbon-ceramic brakes (CCM)</li><li class="feature-item">Tyre pressure monitoring system</li><li class="feature-item">Rear parking camera and sensors</li><li class="feature-item">Integrated roll-over protection</li><li class="feature-item">Lamborghini Dynamic Steering (LDS)</li></ul>

            <h2 class="section-heading text-3xl font-bold text-red-500">Performance Highlights</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center"><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">802 HP</h4><p class="text-gray-400 text-sm">Combined Power</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">2.8s</h4><p class="text-gray-400 text-sm">0–100 km/h</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">355 km/h</h4><p class="text-gray-400 text-sm">Top Speed</p></div><div class="perf-card bg-gray-800 p-4 rounded-xl border border-gray-700"><h4 class="text-3xl font-bold text-red-400">720 Nm</h4><p class="text-gray-400 text-sm">Engine Torque</p></div></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">⚡ Acceleration</h3><p class="text-gray-300">0-200 km/h: 8.6s<br>0-250 km/h: 12.2s<br>1/4 Mile: 10.1s @ 238 km/h</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">🔋 Supercapacitor</h3><p class="text-gray-300">Instant torque fill<br>3x power density<br>Self-charging via braking<br>Lightweight technology</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">🛞 Braking & Track</h3><p class="text-gray-300">100-0 km/h: 30m<br>Fiorano Lap: 1:15.5<br>Lateral G: 1.48g</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">✨ Countach Exclusive Features</h3><p class="text-gray-300">Iconic scissor doors<br>Original Countach design cues<br>112-unit limited production<br>V12 hybrid powertrain<br>NACA air intakes<br>Periscopio line</p></div>
                <div class="info-card p-6 rounded-xl border border-gray-700 hover:border-red-500 transition-all"><h3 class="text-xl font-bold text-red-400 mb-3">🚗 Legacy</h3><p class="text-gray-300">50th anniversary tribute<br>Original Countach (1974-1990)<br>Defined the supercar genre<br>Collector's dream</p></div>
            </div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-red-500">Drive Modes</h2><div class="flex flex-wrap gap-3 mt-4"><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">STRADA (Street)</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">SPORT</span><span class="bg-gray-800 px-5 py-2 rounded-full hover:bg-red-600 transition-all cursor-default hover:scale-105">CORSA (Race)</span></div></div>

            <div class="pt-4"><h2 class="section-heading text-3xl font-bold text-red-500">Available Colors</h2><div class="flex flex-wrap gap-4 mt-4"><div class="w-12 h-12 bg-white rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Bianco Siderale"></div><div class="w-12 h-12 bg-red-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Rosso Mars"></div><div class="w-12 h-12 bg-blue-700 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Blu Caelum"></div><div class="w-12 h-12 bg-black rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Nero Noctis"></div><div class="w-12 h-12 bg-yellow-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Giallo Inti"></div><div class="w-12 h-12 bg-green-500 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Verde Mantis"></div><div class="w-12 h-12 bg-orange-600 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Arancio Borealis"></div><div class="w-12 h-12 bg-gray-400 rounded-full hover:scale-125 transition-all cursor-pointer border-2 border-gray-500" title="Grigio Lynx"></div></div></div>

            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-6 rounded-xl border border-red-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">The Legend Returns</h3><p class="text-gray-300">The original Countach, launched in 1974, redefined the supercar genre with its outrageous wedge shape, scissor doors, and mid-engine V12 layout. It became the poster car of a generation and an automotive icon. The Countach LPI 800-4 pays homage to this legacy, combining the unmistakable design language of the original with modern hybrid technology and breathtaking performance.</p></div>

            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-6 rounded-xl border border-red-500/30 mt-4"><h3 class="text-2xl font-bold text-white mb-2">Pricing & Availability</h3><div class="flex justify-between items-center flex-wrap gap-4"><div><p class="text-gray-300"><strong class="text-red-400">Ex-Showroom Price:</strong> ₹15.00 Crore</p><p class="text-gray-300"><strong class="text-red-400">On-Road Price (Mumbai):</strong> ₹18.00 Crore</p><p class="text-gray-300"><strong class="text-red-400">EMI Starting From:</strong> ₹21.00 Lakh/month</p><p class="text-gray-300 text-yellow-400 text-sm mt-2">⚠️ Only 112 units produced worldwide - ALL SOLD OUT</p></div><button onclick="inquireNow()" class="glow-btn bg-red-600 px-8 py-3 rounded-lg font-bold transition-all hover:scale-105">Inquire for Resale →</button></div></div>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 animate-fadeUp delay-2 border-t border-red-500/20"><p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p></footer>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-95 hidden items-center justify-center z-50"><span class="absolute top-6 right-10 text-white text-5xl cursor-pointer hover:text-red-500 transition-all hover:scale-110" onclick="closeFullscreen()">×</span><div class="modal-counter" id="modalCounter">1 / 6</div><button class="modal-btn left" onclick="navigateFullscreen('prev')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg></button><button class="modal-btn right" onclick="navigateFullscreen('next')"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></button><img id="modalImg" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl object-contain animate-float"><div class="modal-indicator" id="modalIndicators"></div></div>

    <script>
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            const pages = { 'lamborghini-aventador': 'lamborghini-aventador-details.php', 'lamborghini-huracan': 'lamborghini-huracan-details.php', 'lamborghini-revuelto': 'lamborghini-revuelto-details.php', 'lamborghini-urus': 'lamborghini-urus-details.php', 'lamborghini-sian': 'lamborghini-sian-details.php', 'lamborghini-countach': 'lamborghini-countach-details.php' };
            if (modelId && pages[modelId]) window.location.href = pages[modelId];
            if (!modelId) select.value = "";
        }

        const allImages = [
            "https://www.topgear.com/sites/default/files/2022/07/1-Lamborghini-Countach.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2022/07/2-Lamborghini-Countach.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2022/07/3-Lamborghini-Countach.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2022/07/16-Lamborghini-Countach.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2022/07/14-Lamborghini-Countach.jpg?w=892&h=502",
            "https://www.topgear.com/sites/default/files/2022/07/6-Lamborghini-Countach.jpg?w=892&h=502"
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
        function inquireNow() { alert("Thank you for your interest in the Lamborghini Countach LPI 800-4! Due to limited production, our VIP sales team will contact you about availability."); window.location.href = "#contact"; }
        document.addEventListener('keydown', e => { if (document.getElementById('imageModal').classList.contains('flex')) { if (e.key === 'ArrowLeft') navigateFullscreen('prev'); else if (e.key === 'ArrowRight') navigateFullscreen('next'); else if (e.key === 'Escape') closeFullscreen(); } });
        updateGallery(0, null);
    </script>
</body>
</html>