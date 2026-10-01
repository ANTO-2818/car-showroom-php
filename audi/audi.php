<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi Cars - Anto's Car Showroom</title>
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
                box-shadow: 0 0 20px rgba(0, 100, 200, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(0, 100, 200, 0.6);
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

        /* Audi Car Card Styles - Silver/Blue theme */
        .audi-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(0, 150, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .audi-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #0096ff, #00c3ff, #0096ff);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .audi-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .audi-card:hover::before {
            opacity: 0.3;
        }

        .audi-card:hover {
            box-shadow: 0 20px 40px rgba(0, 150, 255, 0.3);
        }

        .audi-card img {
            transition: transform 0.5s ease;
        }

        .audi-card:hover img {
            transform: scale(1.1);
        }

        .audi-card::after {
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

        .audi-card:hover::after {
            left: 100%;
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #0096ff;
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
            color: #0096ff;
            text-shadow: 0 0 10px rgba(0, 150, 255, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(0, 150, 255, 0.5);
        }

        /* Spec item hover */
        .spec-detail {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-detail:hover {
            background: rgba(0, 150, 255, 0.1);
            transform: translateX(10px);
            color: #0096ff;
        }

        /* Ring decoration for Audi */
        .audi-rings {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        .ring {
            width: 30px;
            height: 30px;
            border: 2px solid #0096ff;
            border-radius: 50%;
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        
        .ring:hover {
            opacity: 1;
            transform: scale(1.1);
            border-color: #00c3ff;
        }

        /* Model Selector Styles */
        .model-selector {
            position: relative;
            z-index: 100;
        }
        
        .model-selector select {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 150, 255, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%230096ff'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
        }
        
        .model-selector select:hover {
            border-color: rgba(0, 150, 255, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(0, 150, 255, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #0096ff;
            box-shadow: 0 0 20px rgba(0, 150, 255, 0.3);
        }
        
        .model-selector option {
            background: #1f2937;
            color: white;
        }
        
        /* Scroll margin for smooth jump */
        .scroll-mt-24 {
            scroll-margin-top: 100px;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-blue-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <a href="../Showroom.php" class="back-btn text-blue-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
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
                    <option value="audi-r8">🏎️ Audi R8</option>
                    <option value="audi-rs7">🏎️ Audi RS7 Sportback</option>
                    <option value="audi-rs6">🏎️ Audi RS6 Avant</option>
                    <option value="audi-rs3">🏎️ Audi RS3 Sedan</option>
                    <option value="audi-etron-gt">🏎️ Audi e-tron GT RS</option>
                    <option value="audi-q8">🏎️ Audi Q8</option>
                </select>
            </div>
            <h1 class="page-title text-2xl font-bold text-blue-500 animate-fadeUp delay-1">Audi Collection</h1>
        </div>
    </div>

    <!-- Audi Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Audi Rings Logo -->
        <div class="audi-rings">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Vorsprung durch Technik</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our premium collection of Audi luxury and performance vehicles. Each model combines German engineering with quattro all-wheel drive excellence.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-blue-400 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Audi Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- Audi R8 -->
            <div id="audi-r8" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/06/1%20Audi%20R8%20GT%20review.jpg?w=892&h=502" 
                         alt="Audi R8" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-blue-600 px-3 py-1 rounded-full text-sm font-bold">Featured</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi R8</h3>
                        <span class="text-blue-500 font-bold text-xl">₹2.30 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> 5.2L Naturally Aspirated V10</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 562 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 3.1 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Top Speed:</strong> 324 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-r8')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Audi RS7 Sportback -->
            <div id="audi-rs7" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2023/09/33136-RS7PERFORMANCEASCARIBLUEJORDANBUTTERS208.jpg?w=892&h=502" 
                         alt="Audi RS7 Sportback" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi RS7 Sportback</h3>
                        <span class="text-blue-500 font-bold text-xl">₹1.90 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 591 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 3.4 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Top Speed:</strong> 305 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-rs7')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Audi RS6 Avant -->
            <div id="audi-rs6" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/gallery-migration/2012-12/0B032F28-2D20-4540-AF0B-8D0F630DD4CC_1.jpg?w=892&h=502" 
                         alt="Audi RS6 Avant" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi RS6 Avant</h3>
                        <span class="text-blue-500 font-bold text-xl">₹1.85 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 591 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 3.6 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Top Speed:</strong> 305 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-rs6')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Audi RS3 Sedan -->
            <div id="audi-rs3" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2018/06/2c1db9ddd11660f7266722fcdb3bb964/01_abt_audi_rs3_sedan_front_diagonal.jpg?w=892&h=502" 
                         alt="Audi RS3 Sedan" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi RS3 Sedan</h3>
                        <span class="text-blue-500 font-bold text-xl">₹85 Lakh*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> 2.5L Turbo Inline-5</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 401 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 3.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Top Speed:</strong> 290 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-rs3')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Audi e-tron GT RS -->
            <div id="audi-etron-gt" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/11/38438-2025RSETRONGTPROGRESSIVEREDJORDANBUTTERS46.jpg?w=892&h=502" 
                         alt="Audi e-tron GT RS" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-green-600 px-3 py-1 rounded-full text-sm font-bold">Electric</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi e-tron GT RS</h3>
                        <span class="text-blue-500 font-bold text-xl">₹2.10 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> Dual Electric Motors</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 637 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 3.1 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Range:</strong> 488 km</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-etron-gt')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Audi Q8 -->
            <div id="audi-q8" class="audi-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/02/1%20Audi%20Q8%20e-tron%20US%20review.jpg?w=892&h=502" 
                         alt="Audi Q8" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-blue-500 transition">Audi Q8</h3>
                        <span class="text-blue-500 font-bold text-xl">₹1.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Engine:</strong> 3.0L Turbo V6</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Horsepower:</strong> 335 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">0-100 km/h:</strong> 5.6 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Top Speed:</strong> 250 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-blue-400">Drivetrain:</strong> Quattro AWD</p>
                    </div>
                    <button onclick="viewCarDetails('audi-q8')" 
                        class="glow-btn w-full bg-gradient-to-r from-blue-600 to-blue-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Audi Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-blue-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏆</div>
                <h4 class="text-2xl font-bold text-white">quattro®</h4>
                <p class="text-gray-400">Legendary All-Wheel Drive</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-blue-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 3.1 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-blue-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">Electric Options</h4>
                <p class="text-gray-400">e-tron series available</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-blue-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🌍</div>
                <h4 class="text-2xl font-bold text-white">German Precision</h4>
                <p class="text-gray-400">Engineering Excellence</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in an Audi?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a test drive or personalized quote</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-blue-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Audi%20Inquiry" class="glow-btn bg-blue-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-blue-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-blue-500/20">
        <p class="hover:text-blue-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
    </footer>

    <script>
        // Jump to specific model
        function jumpToModel() {
            const select = document.getElementById('modelSelect');
            const modelId = select.value;
            
            if (modelId) {
                const element = document.getElementById(modelId);
                if (element) {
                    // Smooth scroll to the element
                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    
                    // Reset select to default
                    select.value = '';
                    
                    // Add highlight effect
                    element.style.transition = 'all 0.3s ease';
                    element.style.boxShadow = '0 0 30px rgba(0, 150, 255, 0.5)';
                    element.style.border = '1px solid rgba(0, 150, 255, 0.5)';
                    
                    setTimeout(() => {
                        element.style.boxShadow = '';
                        element.style.border = '';
                    }, 1500);
                }
            }
        }

        // Car details function - opens individual car page
        function viewCarDetails(carModel) {
            const carData = {
                'audi-r8': {
                    name: 'Audi R8',
                    page: 'audi-r8-details.php'
                },
                'audi-rs7': {
                    name: 'Audi RS7 Sportback',
                    page: 'audi-rs7-details.php'
                },
                'audi-rs6': {
                    name: 'Audi RS6 Avant',
                    page: 'audi-rs6-details.php'
                },
                'audi-rs3': {
                    name: 'Audi RS3 Sedan',
                    page: 'audi-rs3-details.php'
                },
                'audi-etron-gt': {
                    name: 'Audi e-tron GT RS',
                    page: 'audi-etron-gt-details.php'
                },
                'audi-q8': {
                    name: 'Audi Q8',
                    page: 'audi-q8-details.php'
                }
            };
            
            const car = carData[carModel];
            if (car && car.page) {
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