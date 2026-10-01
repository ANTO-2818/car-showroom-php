<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koenigsegg Cars - Anto's Car Showroom</title>
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

        /* Koenigsegg Car Card Styles - Cyan/Blue theme */
        .koenigsegg-card {
            background: linear-gradient(145deg, #0a0a1a, #0a0a2a);
            border: 1px solid rgba(0, 200, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .koenigsegg-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00c8ff, #00e5ff, #00c8ff);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .koenigsegg-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .koenigsegg-card:hover::before {
            opacity: 0.3;
        }

        .koenigsegg-card:hover {
            box-shadow: 0 20px 40px rgba(0, 200, 255, 0.3);
        }

        .koenigsegg-card img {
            transition: transform 0.5s ease;
        }

        .koenigsegg-card:hover img {
            transform: scale(1.1);
        }

        .koenigsegg-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 200, 255, 0.1), transparent);
            transition: left 0.7s ease;
            z-index: 1;
            pointer-events: none;
        }

        .koenigsegg-card:hover::after {
            left: 100%;
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #00c8ff;
            transform: scale(1.05);
        }

        /* Back button hover */
        .back-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #00c8ff;
            text-shadow: 0 0 10px rgba(0, 200, 255, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(0, 200, 255, 0.5);
        }

        /* Spec item hover */
        .spec-detail {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-detail:hover {
            background: rgba(0, 200, 255, 0.1);
            transform: translateX(10px);
            color: #00c8ff;
        }

        /* Ghost Logo */
        .ghost-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .ghost-icon {
            font-size: 48px;
            filter: drop-shadow(0 0 10px rgba(0, 200, 255, 0.5));
            transition: all 0.3s ease;
        }
        
        .ghost-icon:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 0 20px rgba(0, 200, 255, 0.8));
        }

        /* Model Selector Dropdown Styles */
        .model-selector {
            position: relative;
            z-index: 100;
        }
        .model-selector select {
            background: rgba(10, 10, 30, 0.95);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 200, 255, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2300c8ff'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
            color: white;
            font-family: inherit;
        }
        .model-selector select:hover {
            border-color: rgba(0, 200, 255, 0.6);
            background-color: rgba(10, 10, 30, 1);
            box-shadow: 0 0 15px rgba(0, 200, 255, 0.2);
        }
        .model-selector select:focus {
            outline: none;
            border-color: #00c8ff;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.3);
        }
        .model-selector option {
            background: #0a0a1a;
            color: white;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar with Model Selector -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-cyan-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <div class="flex items-center gap-4">
            <!-- Model Selector Dropdown (Jump to Model) -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="koenigsegg-jesko">🏁 Koenigsegg Jesko</option>
                    <option value="koenigsegg-regera">🏁 Koenigsegg Regera</option>
                    <option value="koenigsegg-agera-rs">🏁 Koenigsegg Agera RS</option>
                    <option value="koenigsegg-gemera">🏁 Koenigsegg Gemera</option>
                    <option value="koenigsegg-cc850">🏁 Koenigsegg CC850</option>
                    <option value="koenigsegg-one1">🏁 Koenigsegg One:1</option>
                </select>
            </div>
            <a href="../Showroom.php" class="back-btn text-cyan-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
        </div>
        <h1 class="page-title text-2xl font-bold text-cyan-500 animate-fadeUp delay-1">Koenigsegg Collection</h1>
    </div>

    <!-- Koenigsegg Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Ghost Logo -->
        <div class="ghost-logo">
            <div class="ghost-icon">👻</div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Swedish Hypercar Excellence</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our collection of Koenigsegg hypercars - engineering marvels from Sweden that push the boundaries of speed, innovation, and performance with record-breaking achievements.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Koenigsegg Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2">
            
            <!-- Koenigsegg Jesko -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-jesko">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2021/07/segg_0.jpg?w=827&h=465" 
                         alt="Koenigsegg Jesko" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">Record Hunter</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg Jesko</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹25.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 5.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,600 HP (E85)</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 500+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-jesko')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Koenigsegg Regera -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-regera">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/12/TG_DSC0155.jpg?w=892&h=502" 
                         alt="Koenigsegg Regera" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">Hybrid</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg Regera</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹18.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 5.0L Twin-Turbo V8 + 3 Electric Motors</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,500 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 2.7 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 410+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-regera')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Koenigsegg Agera RS -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-agera-rs">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/08/ebbd65d4df6ef3c16b3e168ba14f002e/6.jpg?w=892&h=502" 
                         alt="Koenigsegg Agera RS" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">World Record</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg Agera RS</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹20.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 5.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,360 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 2.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 447 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-agera-rs')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Koenigsegg Gemera -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-gemera">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2023/07/runway%20%281%29.jpg?w=892&h=502" 
                         alt="Koenigsegg Gemera" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">4-Seater</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg Gemera</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹22.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 2.0L Twin-Turbo 3-cyl + 3 Electric Motors</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,700 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 1.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 400 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-gemera')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Koenigsegg CC850 -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-cc850">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2022/08/ac80a1f0b4c3bbf2_org_1.jpg?w=892&h=502" 
                         alt="Koenigsegg CC850" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">Anniversary</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg CC850</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹28.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 5.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,385 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 400+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-cc850')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Koenigsegg One:1 -->
            <div class="koenigsegg-card rounded-xl overflow-hidden" data-model="koenigsegg-one1">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2015/08/e7002007f0d48a579a1f3560529b9e8e/koen1.jpg?w=892&h=502" 
                         alt="Koenigsegg One:1" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-cyan-600 px-3 py-1 rounded-full text-sm font-bold">1:1 Ratio</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-cyan-500 transition">Koenigsegg One:1</h3>
                        <span class="text-cyan-500 font-bold text-xl">₹30.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Engine:</strong> 5.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Horsepower:</strong> 1,360 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Top Speed:</strong> 440 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-cyan-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('koenigsegg-one1')" 
                        class="glow-btn w-full bg-gradient-to-r from-cyan-600 to-cyan-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Koenigsegg Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-cyan-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏆</div>
                <h4 class="text-2xl font-bold text-white">World Record</h4>
                <p class="text-gray-400">447 km/h Production Car</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-cyan-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 1.9 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-cyan-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">Innovation</h4>
                <p class="text-gray-400">Direct Drive Technology</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-cyan-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🔧</div>
                <h4 class="text-2xl font-bold text-white">Handcrafted</h4>
                <p class="text-gray-400">Made in Sweden</p>
            </div>
        </div>

        <!-- Koenigsegg Gallery Section -->
        <div class="mt-16 grid md:grid-cols-2 gap-8 animate-fadeUp delay-3">
            <div class="bg-gradient-to-r from-cyan-900/30 to-cyan-600/30 p-8 rounded-2xl border border-cyan-500/30 text-center">
                <div class="text-6xl mb-4">🇸🇪</div>
                <h3 class="text-2xl font-bold text-white mb-3">Ängelholm, Sweden</h3>
                <p class="text-gray-300">Founded in 1994 by Christian von Koenigsegg, the company has become synonymous with pushing the boundaries of automotive engineering, creating some of the fastest and most innovative hypercars in the world.</p>
            </div>
            <div class="bg-gradient-to-r from-cyan-900/30 to-cyan-600/30 p-8 rounded-2xl border border-cyan-500/30 text-center">
                <div class="text-6xl mb-4">🛠️</div>
                <h3 class="text-2xl font-bold text-white mb-3">Ghost Squadron</h3>
                <p class="text-gray-300">The Koenigsegg Ghost logo originated from the "Ghost Squadron" of the Swedish Air Force, honoring the fighter pilots who operated from the same facility where Koenigsegg now builds their hypercars.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a Koenigsegg?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a personalized consultation</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-cyan-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Koenigsegg%20Inquiry" class="glow-btn bg-cyan-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-cyan-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-cyan-500/20">
        <p class="hover:text-cyan-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>

    <script>
        // Mapping of model IDs to their detail pages
        const modelPages = {
            'koenigsegg-jesko': 'koenigsegg-jesko-details.php',
            'koenigsegg-regera': 'koenigsegg-regera-details.php',
            'koenigsegg-agera-rs': 'koenigsegg-agera-rs-details.php',
            'koenigsegg-gemera': 'koenigsegg-gemera-details.php',
            'koenigsegg-cc850': 'koenigsegg-cc850-details.php',
            'koenigsegg-one1': 'koenigsegg-one1-details.php'
        };

        // Jump to Model Function - navigates to selected car's detail page
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const selectedValue = select.value;
            
            if (selectedValue && modelPages[selectedValue]) {
                // Show loading effect on dropdown
                const originalText = select.options[select.selectedIndex].text;
                select.style.opacity = '0.7';
                select.disabled = true;
                
                // Navigate after a brief delay for visual feedback
                setTimeout(() => {
                    window.location.href = modelPages[selectedValue];
                }, 200);
            } else if (selectedValue === '') {
                // Reset the select if they chose the placeholder
                select.value = '';
            }
        }

        // Car details function - opens individual car page (with loading effect)
        function viewCarDetails(carModel) {
            if (carModel && modelPages[carModel]) {
                // Find the button that was clicked
                const btns = document.querySelectorAll('.koenigsegg-card button');
                let targetBtn = null;
                
                for (let btn of btns) {
                    if (btn.innerHTML.includes('View Details')) {
                        targetBtn = btn;
                        break;
                    }
                }
                
                if (targetBtn) {
                    const originalText = targetBtn.innerHTML;
                    targetBtn.innerHTML = '<span class="inline-block w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></span>Loading Details...';
                    targetBtn.disabled = true;
                    
                    setTimeout(() => {
                        window.location.href = modelPages[carModel];
                    }, 400);
                } else {
                    window.location.href = modelPages[carModel];
                }
            } else {
                alert('📄 Details page for this model is coming soon! Stay tuned.');
            }
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Optional: Reset select dropdown after page load (if coming from a detail page)
        window.addEventListener('load', function() {
            const select = document.getElementById('modelSelect');
            if (select) {
                select.value = '';
                select.disabled = false;
                select.style.opacity = '1';
            }
        });
    </script>
</body>

</html>