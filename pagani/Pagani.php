<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagani Collection - Anto's Car Showroom</title>
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

        /* Pagani Car Card Styles */
        .pagani-card {
            background: linear-gradient(145deg, #1a1a1a, #111827);
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .pagani-card::before {
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

        .pagani-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .pagani-card:hover::before {
            opacity: 0.3;
        }

        .pagani-card:hover {
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.3);
        }

        .pagani-card img {
            transition: transform 0.5s ease;
        }

        .pagani-card:hover img {
            transform: scale(1.1);
        }

        .pagani-card::after {
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

        .pagani-card:hover::after {
            left: 100%;
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #ef4444;
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

        /* Spec item hover */
        .spec-detail {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-detail:hover {
            background: rgba(239, 68, 68, 0.1);
            transform: translateX(10px);
            color: #ef4444;
        }

        /* Model Selector Styles */
        .model-selector {
            position: relative;
            z-index: 100;
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
            color: white;
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
            <a href="../Showroom.php" class="back-btn text-red-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
                <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
            <!-- Model Selector Dropdown -->
            <div class="model-selector">
                <select id="modelSelect" onchange="jumpToModel()">
                    <option value="">🔍 Jump to Model</option>
                    <option value="pagani-huayra">🏎️ Pagani Huayra</option>
                    <option value="pagani-huayra-bc">🏎️ Pagani Huayra BC</option>
                    <option value="pagani-huayra-roadster">🏎️ Pagani Huayra Roadster</option>
                    <option value="pagani-huayra-r">🏎️ Pagani Huayra R</option>
                    <option value="pagani-utopia">🏎️ Pagani Utopia</option>
                    <option value="pagani-utopia-roadster">🏎️ Pagani Utopia Roadster</option>
                </select>
            </div>
        </div>
        <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">Pagani Collection</h1>
    </div>

    <!-- Pagani Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <div class="text-7xl mb-4 animate-float">🇮🇹</div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Italian Automotive Art</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our collection of Pagani hypercars - masterpieces of engineering and design from Modena, Italy. Each model is handcrafted with obsessive attention to detail and powered by Mercedes-AMG V12 engines.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Pagani Cars Grid - 6 Models (No Zonda) -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- 1. Pagani Huayra -->
            <div id="pagani-huayra" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2016/04/s11_6756_ambientefanghi.jpg?w=892&h=502" 
                         alt="Pagani Huayra" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Twin-Turbo V12</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Huayra</h3>
                        <span class="text-red-500 font-bold text-xl">₹25.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L Twin-Turbo V12 (Mercedes-AMG)</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 730 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.2 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 370 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-huayra')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- 2. Pagani Huayra BC -->
            <div id="pagani-huayra-bc" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2016/02/392cde542962b755a164d50a2ede8464/1.jpg?w=892&h=502" 
                         alt="Pagani Huayra BC" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Track Focused</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Huayra BC</h3>
                        <span class="text-red-500 font-bold text-xl">₹32.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L Twin-Turbo V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 800 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 380 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-huayra-bc')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- 3. Pagani Huayra Roadster -->
            <div id="pagani-huayra-roadster" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2017/08/2018-pagani-huayra-roadster-001.jpg?w=892&h=502" 
                         alt="Pagani Huayra Roadster" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Open Top</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Huayra Roadster</h3>
                        <span class="text-red-500 font-bold text-xl">₹30.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L Twin-Turbo V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 764 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.0 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 350 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-huayra-roadster')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- 4. Pagani Huayra R -->
            <div id="pagani-huayra-r" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2021/03/121.jpg?w=892&h=502" 
                         alt="Pagani Huayra R" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Track Only</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Huayra R</h3>
                        <span class="text-red-500 font-bold text-xl">₹38.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L V12 (Naturally Aspirated)</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 850 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 350+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-huayra-r')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- 5. Pagani Utopia -->
            <div id="pagani-utopia" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2022/09/1-utopia_0.jpg?w=892&h=502" 
                         alt="Pagani Utopia" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">New Era</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Utopia</h3>
                        <span class="text-red-500 font-bold text-xl">₹35.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L Twin-Turbo V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 864 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 370+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-utopia')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- 6. Pagani Utopia Roadster -->
            <div id="pagani-utopia-roadster" class="pagani-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/07/PAGANI_UTOPIA_ROADSTER_1.jpg?w=892&h=502" 
                         alt="Pagani Utopia Roadster" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Open Air</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Pagani Utopia Roadster</h3>
                        <span class="text-red-500 font-bold text-xl">₹38.00 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.0L Twin-Turbo V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 864 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 350+ km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('pagani-utopia-roadster')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Pagani Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏭</div>
                <h4 class="text-2xl font-bold text-white">Handcrafted</h4>
                <p class="text-gray-400">Each car takes 6+ months</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 2.5 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">V12 Power</h4>
                <p class="text-gray-400">Mercedes-AMG engines</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🎨</div>
                <h4 class="text-2xl font-bold text-white">Art & Science</h4>
                <p class="text-gray-400">Form meets function</p>
            </div>
        </div>

        <!-- Pagani Heritage Section -->
        <div class="mt-16 grid md:grid-cols-2 gap-8 animate-fadeUp delay-3">
            <div class="bg-gradient-to-r from-red-900/30 to-orange-900/30 p-8 rounded-2xl border border-red-500/30 text-center hover:scale-105 transition-all duration-300">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-2xl font-bold text-white mb-3">Horacio Pagani</h3>
                <p class="text-gray-300">Founded in 1992 in Modena, Italy, Pagani Automobili is the dream of Horacio Pagani, a former Lamborghini engineer. His philosophy combines Renaissance artistry with Formula 1 technology, creating cars that are both sculptures and engineering marvels.</p>
            </div>
            <div class="bg-gradient-to-r from-red-900/30 to-orange-900/30 p-8 rounded-2xl border border-red-500/30 text-center hover:scale-105 transition-all duration-300">
                <div class="text-6xl mb-4">🌍</div>
                <h3 class="text-2xl font-bold text-white mb-3">Carbon Fiber Mastery</h3>
                <p class="text-gray-300">Pagani was one of the first manufacturers to extensively use carbon fiber in road cars. Their proprietary Carbon-Titanium composite is lighter and stronger than conventional carbon fiber, providing unmatched structural integrity.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a Pagani?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a personalized consultation or to schedule a private viewing</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Pagani%20Inquiry" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-red-500/20">
        <p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>

    <script>
        // Model to ID mapping for jumping
        const modelToId = {
            'pagani-huayra': 'pagani-huayra',
            'pagani-huayra-bc': 'pagani-huayra-bc',
            'pagani-huayra-roadster': 'pagani-huayra-roadster',
            'pagani-huayra-r': 'pagani-huayra-r',
            'pagani-utopia': 'pagani-utopia',
            'pagani-utopia-roadster': 'pagani-utopia-roadster'
        };

        // Jump to specific model
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelValue = select.value;
            
            if (modelValue && modelToId[modelValue]) {
                const element = document.getElementById(modelToId[modelValue]);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    // Reset select to default
                    select.value = '';
                    
                    // Add highlight effect
                    element.style.transition = 'all 0.3s ease';
                    element.style.boxShadow = '0 0 30px rgba(239, 68, 68, 0.5)';
                    setTimeout(() => {
                        element.style.boxShadow = '';
                    }, 1500);
                }
            }
        }

        // Car details function - opens individual car page
        function viewCarDetails(carModel) {
            const carData = {
                'pagani-huayra': {
                    name: 'Pagani Huayra',
                    page: 'pagani-huayra-details.php'
                },
                'pagani-huayra-bc': {
                    name: 'Pagani Huayra BC',
                    page: 'pagani-huayra-bc-details.php'
                },
                'pagani-huayra-roadster': {
                    name: 'Pagani Huayra Roadster',
                    page: 'pagani-huayra-roadster-details.php'
                },
                'pagani-huayra-r': {
                    name: 'Pagani Huayra R',
                    page: 'pagani-huayra-r-details.php'
                },
                'pagani-utopia': {
                    name: 'Pagani Utopia',
                    page: 'pagani-utopia-details.php'
                },
                'pagani-utopia-roadster': {
                    name: 'Pagani Utopia Roadster',
                    page: 'pagani-utopia-roadster-details.php'
                }
            };
            
            const car = carData[carModel];
            if (car && car.page) {
                // Find the button that was clicked
                const btn = event.target;
                const originalText = btn.innerHTML;
                btn.innerHTML = '<span class="inline-block w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin mr-2"></span>Loading...';
                btn.disabled = true;
                
                setTimeout(() => {
                    window.location.href = car.page;
                }, 800);
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

        // Reset select dropdown after page load
        window.addEventListener('load', function() {
            const select = document.getElementById('modelSelect');
            if (select) {
                select.value = '';
            }
        });
    </script>
</body>

</html>