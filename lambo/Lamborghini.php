<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamborghini Cars - Anto's Car Showroom</title>
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
                box-shadow: 0 0 20px rgba(255, 100, 0, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(255, 100, 0, 0.6);
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

        /* Lamborghini Car Card Styles - Yellow/Orange theme */
        .lambo-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(255, 100, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .lambo-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff6600, #ffcc00, #ff6600);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .lambo-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .lambo-card:hover::before {
            opacity: 0.3;
        }

        .lambo-card:hover {
            box-shadow: 0 20px 40px rgba(255, 100, 0, 0.3);
        }

        .lambo-card img {
            transition: transform 0.5s ease;
        }

        .lambo-card:hover img {
            transform: scale(1.1);
        }

        .lambo-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.7s ease;
            z-index: 1;
            pointer-events: none;
        }

        .lambo-card:hover::after {
            left: 100%;
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #ff6600;
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
            color: #ff6600;
            text-shadow: 0 0 10px rgba(255, 100, 0, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(255, 100, 0, 0.5);
        }

        /* Spec item hover */
        .spec-detail {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-detail:hover {
            background: rgba(255, 100, 0, 0.1);
            transform: translateX(10px);
            color: #ff6600;
        }

        /* Model Selector Styles */
        .model-selector {
            position: relative;
            z-index: 100;
        }
        
        .model-selector select {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 100, 0, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23ff6600'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
            color: white;
        }
        
        .model-selector select:hover {
            border-color: rgba(255, 100, 0, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(255, 100, 0, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #ff6600;
            box-shadow: 0 0 20px rgba(255, 100, 0, 0.3);
        }
        
        .model-selector option {
            background: #1f2937;
            color: white;
        }

        .bull-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .bull-icon {
            font-size: 48px;
            filter: drop-shadow(0 0 10px rgba(255, 100, 0, 0.5));
            transition: all 0.3s ease;
        }
        
        .bull-icon:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 0 20px rgba(255, 100, 0, 0.8));
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-orange-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <a href="../Showroom.php" class="back-btn text-orange-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
            <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
        </a>
        <div class="flex items-center gap-4">
            <!-- Model Selector Dropdown -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="lamborghini-aventador">🏎️ Lamborghini Aventador</option>
                    <option value="lamborghini-huracan">🏎️ Lamborghini Huracán</option>
                    <option value="lamborghini-revuelto">🏎️ Lamborghini Revuelto</option>
                    <option value="lamborghini-urus">🏎️ Lamborghini Urus</option>
                    <option value="lamborghini-sian">🏎️ Lamborghini Sián</option>
                    <option value="lamborghini-countach">🏎️ Lamborghini Countach</option>
                </select>
            </div>
            <h1 class="page-title text-2xl font-bold text-orange-500 animate-fadeUp delay-1">Lamborghini Collection</h1>
        </div>
    </div>

    <!-- Lamborghini Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Bull Logo -->
        <div class="bull-logo">
            <div class="bull-icon">🐂</div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Italian Bulls of Sant'Agata</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our collection of Lamborghini supercars - aggressive styling, thunderous V12 engines, and uncompromising performance that defines Italian automotive passion.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-yellow-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Lamborghini Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- Lamborghini Aventador -->
            <div id="lamborghini-aventador" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/gallery-migration/2013-04/C147403D-39A5-429A-9EBE-42CF4899FFA9_1.jpg?w=892&h=502" 
                         alt="Lamborghini Aventador" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-orange-600 px-3 py-1 rounded-full text-sm font-bold">V12</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Aventador</h3>
                        <span class="text-orange-500 font-bold text-xl">₹5.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 6.5L Naturally Aspirated V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 691 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 2.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 350 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-aventador')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Lamborghini Huracán -->
            <div id="lamborghini-huracan" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2017/03/a9f95caa40bebabe4dd8488f5433568f/huracn_performante_high_3.jpg?w=892&h=502" 
                         alt="Lamborghini Huracán" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Huracán</h3>
                        <span class="text-orange-500 font-bold text-xl">₹3.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 5.2L Naturally Aspirated V10</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 631 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 3.2 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 325 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD / RWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-huracan')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Lamborghini Revuelto -->
            <div id="lamborghini-revuelto" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2023/03/TG%20LAMBO230309_0013.jpg?w=892&h=502" 
                         alt="Lamborghini Revuelto" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-orange-600 px-3 py-1 rounded-full text-sm font-bold">Hybrid</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Revuelto</h3>
                        <span class="text-orange-500 font-bold text-xl">₹8.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 6.5L V12 + Hybrid</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 1001 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 350+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-revuelto')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Lamborghini Urus -->
            <div id="lamborghini-urus" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2022/10/1-Lamborghini-Urus-Performante.jpg?w=892&h=502" 
                         alt="Lamborghini Urus" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-orange-600 px-3 py-1 rounded-full text-sm font-bold">SUV</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Urus</h3>
                        <span class="text-orange-500 font-bold text-xl">₹4.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 641 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 3.6 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 305 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-urus')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Lamborghini Sián -->
            <div id="lamborghini-sian" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2021/02/_k4a5906.jpg?w=892&h=502" 
                         alt="Lamborghini Sián" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-orange-600 px-3 py-1 rounded-full text-sm font-bold">Limited</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Sián</h3>
                        <span class="text-orange-500 font-bold text-xl">₹12.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 6.5L V12 + Supercapacitor</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 819 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 2.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 350 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-sian')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Lamborghini Countach -->
            <div id="lamborghini-countach" class="lambo-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2022/07/1-Lamborghini-Countach.jpg?w=892&h=502" 
                         alt="Lamborghini Countach" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-orange-600 px-3 py-1 rounded-full text-sm font-bold">Iconic</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-orange-500 transition">Lamborghini Countach</h3>
                        <span class="text-orange-500 font-bold text-xl">₹15.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Engine:</strong> 6.5L V12 + Hybrid</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Horsepower:</strong> 802 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">0-100 km/h:</strong> 2.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Top Speed:</strong> 355 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-orange-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('lamborghini-countach')" 
                        class="glow-btn w-full bg-gradient-to-r from-orange-600 to-orange-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Lamborghini Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-orange-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🐂</div>
                <h4 class="text-2xl font-bold text-white">Raging Bull</h4>
                <p class="text-gray-400">Legendary Logo</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-orange-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 2.5 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-orange-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">V12 Legacy</h4>
                <p class="text-gray-400">Naturally Aspirated</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-orange-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏎️</div>
                <h4 class="text-2xl font-bold text-white">Super SUV</h4>
                <p class="text-gray-400">Urus Performance</p>
            </div>
        </div>

        <!-- Lamborghini Gallery Section -->
        <div class="mt-16 grid md:grid-cols-2 gap-8 animate-fadeUp delay-3">
            <div class="bg-gradient-to-r from-orange-900/30 to-orange-600/30 p-8 rounded-2xl border border-orange-500/30 text-center hover:scale-105 transition-all duration-300">
                <div class="text-6xl mb-4">🏭</div>
                <h3 class="text-2xl font-bold text-white mb-3">Sant'Agata Bolognese</h3>
                <p class="text-gray-300">Since 1963, Lamborghini has been producing the world's most extreme supercars from their headquarters in Sant'Agata Bolognese, Italy, where every vehicle is crafted with uncompromising passion.</p>
            </div>
            <div class="bg-gradient-to-r from-orange-900/30 to-orange-600/30 p-8 rounded-2xl border border-orange-500/30 text-center hover:scale-105 transition-all duration-300">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-2xl font-bold text-white mb-3">The Miura Legacy</h3>
                <p class="text-gray-300">The 1966 Lamborghini Miura is widely considered the world's first supercar, establishing the mid-engine layout that has become the standard for high-performance automobiles.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a Lamborghini?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a test drive or personalized quote</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-orange-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Lamborghini%20Inquiry" class="glow-btn bg-orange-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-orange-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-orange-500/20">
        <p class="hover:text-orange-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>

    <script>
        // Jump to specific model
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            
            if (modelId) {
                const element = document.getElementById(modelId);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // Reset select to default
                    select.value = '';
                    
                    // Add highlight effect
                    element.style.transition = 'all 0.3s ease';
                    element.style.boxShadow = '0 0 30px rgba(255, 100, 0, 0.5)';
                    setTimeout(() => {
                        element.style.boxShadow = '';
                    }, 1500);
                }
            }
        }

        // Car details function - opens individual car page
        function viewCarDetails(carModel) {
            const carData = {
                'lamborghini-aventador': {
                    name: 'Lamborghini Aventador',
                    page: 'lamborghini-aventador-details.php'
                },
                'lamborghini-huracan': {
                    name: 'Lamborghini Huracán',
                    page: 'lamborghini-huracan-details.php'
                },
                'lamborghini-revuelto': {
                    name: 'Lamborghini Revuelto',
                    page: 'lamborghini-revuelto-details.php'
                },
                'lamborghini-urus': {
                    name: 'Lamborghini Urus',
                    page: 'lamborghini-urus-details.php'
                },
                'lamborghini-sian': {
                    name: 'Lamborghini Sián',
                    page: 'lamborghini-sian-details.php'
                },
                'lamborghini-countach': {
                    name: 'Lamborghini Countach',
                    page: 'lamborghini-countach-details.php'
                }
            };
            
            const car = carData[carModel];
            if (car && car.page) {
                // Simulate loading effect
                const btn = event.target;
                const originalText = btn.innerHTML;
                btn.innerHTML = '<span class="inline-block w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></span>Loading...';
                btn.disabled = true;
                
                setTimeout(() => {
                    window.location.href = car.page;
                }, 800);
            } else {
                alert('Details page coming soon!');
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
    </script>
</body>

</html>