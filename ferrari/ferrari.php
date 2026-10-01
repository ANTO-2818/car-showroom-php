<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferrari Cars - Anto's Car Showroom</title>
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

        /* Ferrari Car Card Styles - Red/Gold theme */
        .ferrari-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .ferrari-card::before {
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

        .ferrari-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .ferrari-card:hover::before {
            opacity: 0.3;
        }

        .ferrari-card:hover {
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.3);
        }

        .ferrari-card img {
            transition: transform 0.5s ease;
        }

        .ferrari-card:hover img {
            transform: scale(1.1);
        }

        .ferrari-card::after {
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

        .ferrari-card:hover::after {
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

        /* Ferrari Prancing Horse */
        .prancing-horse {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .horse-icon {
            font-size: 48px;
            filter: drop-shadow(0 0 10px rgba(239, 68, 68, 0.5));
            transition: all 0.3s ease;
        }
        
        .horse-icon:hover {
            transform: scale(1.2);
            filter: drop-shadow(0 0 20px rgba(239, 68, 68, 0.8));
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
        
        /* Scroll margin for smooth jump */
        .scroll-mt-24 {
            scroll-margin-top: 100px;
        }
    </style>
</head>

<body class="bg-black text-white">

    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-red-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <a href="../Showroom.php" class="back-btn text-red-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
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
                    <option value="ferrari-488">🏎️ Ferrari 488 GTB</option>
                    <option value="ferrari-f8">🏎️ Ferrari F8 Tributo</option>
                    <option value="ferrari-sf90">🏎️ Ferrari SF90 Stradale</option>
                    <option value="ferrari-812">🏎️ Ferrari 812 Superfast</option>
                    <option value="ferrari-roma">🏎️ Ferrari Roma</option>
                    <option value="ferrari-purosangue">🏎️ Ferrari Purosangue</option>
                </select>
            </div>
            <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">Ferrari Collection</h1>
        </div>
    </div>

    <!-- Ferrari Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Prancing Horse Logo -->
        <div class="prancing-horse">
            <div class="horse-icon">🐎</div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Italian Passion & Performance</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our collection of Ferrari supercars - masterpieces of Italian engineering that combine breathtaking performance with stunning design and racing heritage.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-red-400 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Ferrari Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- Ferrari 488 GTB -->
            <div id="ferrari-488" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-road-test/carousel/2015/06/Large%20Image_3.jpg?w=892&h=502" 
                         alt="Ferrari 488 GTB" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Featured</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari 488 GTB</h3>
                        <span class="text-red-500 font-bold text-xl">₹3.80 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 3.9L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 661 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.0 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 330 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-488')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Ferrari F8 Tributo -->
            <div id="ferrari-f8" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2019/09/tg_-_ferrari_f8_tributo_-091.jpg?w=892&h=502" 
                         alt="Ferrari F8 Tributo" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari F8 Tributo</h3>
                        <span class="text-red-500 font-bold text-xl">₹4.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 3.9L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 710 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 340 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-f8')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Ferrari SF90 Stradale -->
            <div id="ferrari-sf90" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2020/07/dsc09285.jpg?w=892&h=502" 
                         alt="Ferrari SF90 Stradale" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Hybrid</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari SF90 Stradale</h3>
                        <span class="text-red-500 font-bold text-xl">₹6.50 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 4.0L Twin-Turbo V8 + Hybrid</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 986 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 340 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-sf90')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Ferrari 812 Superfast -->
            <div id="ferrari-812" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2017/02/0c7c9c32cfebe27fd17f88914899602d/812_superfast_1.jpg?w=892&h=502" 
                         alt="Ferrari 812 Superfast" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">V12</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari 812 Superfast</h3>
                        <span class="text-red-500 font-bold text-xl">₹5.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.5L Naturally Aspirated V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 789 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 2.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 340 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-812')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Ferrari Roma -->
            <div id="ferrari-roma" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2025/05/ACT_0981_06496_HR.jpg?w=892&h=502" 
                         alt="Ferrari Roma" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari Roma</h3>
                        <span class="text-red-500 font-bold text-xl">₹3.60 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 3.9L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 612 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.4 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 320 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> RWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-roma')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Ferrari Purosangue -->
            <div id="ferrari-purosangue" class="ferrari-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2023/12/1%20Ferrari%20Purosangue%20review.jpg?w=892&h=502" 
                         alt="Ferrari Purosangue" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">SUV</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">Ferrari Purosangue</h3>
                        <span class="text-red-500 font-bold text-xl">₹7.50 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 6.5L Naturally Aspirated V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 715 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.3 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 310 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('ferrari-purosangue')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Ferrari Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏆</div>
                <h4 class="text-2xl font-bold text-white">Scuderia Ferrari</h4>
                <p class="text-gray-400">F1 Racing Heritage</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 2.5 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">Hybrid Power</h4>
                <p class="text-gray-400">SF90 Stradale</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏎️</div>
                <h4 class="text-2xl font-bold text-white">V12 Legacy</h4>
                <p class="text-gray-400">Naturally Aspirated</p>
            </div>
        </div>

        <!-- Ferrari Gallery Section -->
        <div class="mt-16 grid md:grid-cols-2 gap-8 animate-fadeUp delay-3">
            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-8 rounded-2xl border border-red-500/30 text-center">
                <div class="text-6xl mb-4">🏎️</div>
                <h3 class="text-2xl font-bold text-white mb-3">The Prancing Horse Legacy</h3>
                <p class="text-gray-300">Founded in 1947 by Enzo Ferrari, the prancing horse has become the most iconic symbol in automotive history, representing passion, performance, and Italian excellence.</p>
            </div>
            <div class="bg-gradient-to-r from-red-900/30 to-red-600/30 p-8 rounded-2xl border border-red-500/30 text-center">
                <div class="text-6xl mb-4">🏆</div>
                <h3 class="text-2xl font-bold text-white mb-3">Racing Pedigree</h3>
                <p class="text-gray-300">Ferrari is the most successful team in Formula 1 history with 16 Constructors' Championships and 15 Drivers' Championships, embodying the spirit of competition.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a Ferrari?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a test drive or personalized quote</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Ferrari%20Inquiry" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-red-500/20">
        <p class="hover:text-red-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
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
                    element.style.boxShadow = '0 0 30px rgba(239, 68, 68, 0.5)';
                    element.style.border = '1px solid rgba(239, 68, 68, 0.5)';
                    
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
                'ferrari-488': {
                    name: 'Ferrari 488 GTB',
                    page: 'ferrari-488-details.php'
                },
                'ferrari-f8': {
                    name: 'Ferrari F8 Tributo',
                    page: 'ferrari-f8-details.php'
                },
                'ferrari-sf90': {
                    name: 'Ferrari SF90 Stradale',
                    page: 'ferrari-sf90-details.php'
                },
                'ferrari-812': {
                    name: 'Ferrari 812 Superfast',
                    page: 'ferrari-812-details.php'
                },
                'ferrari-roma': {
                    name: 'Ferrari Roma',
                    page: 'ferrari-roma-details.php'
                },
                'ferrari-purosangue': {
                    name: 'Ferrari Purosangue',
                    page: 'ferrari-purosangue-details.php'
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