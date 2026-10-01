<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercedes-Benz Cars - Anto's Car Showroom</title>
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
                box-shadow: 0 0 20px rgba(0, 150, 200, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(0, 150, 200, 0.6);
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

        /* Mercedes Car Card Styles - Silver/Teal theme */
        .mercedes-card {
            background: linear-gradient(145deg, #1a1a2e, #111827);
            border: 1px solid rgba(0, 180, 200, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .mercedes-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00b4d8, #00e5ff, #00b4d8);
            border-radius: 16px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .mercedes-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .mercedes-card:hover::before {
            opacity: 0.3;
        }

        .mercedes-card:hover {
            box-shadow: 0 20px 40px rgba(0, 180, 200, 0.3);
        }

        .mercedes-card img {
            transition: transform 0.5s ease;
        }

        .mercedes-card:hover img {
            transform: scale(1.1);
        }

        .mercedes-card::after {
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

        .mercedes-card:hover::after {
            left: 100%;
        }

        .glow-btn {
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 20px #00b4d8;
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
            color: #00b4d8;
            text-shadow: 0 0 10px rgba(0, 180, 200, 0.5);
        }

        /* Title hover */
        .page-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .page-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(0, 180, 200, 0.5);
        }

        /* Spec item hover */
        .spec-detail {
            transition: all 0.3s ease;
            padding: 0.5rem;
            border-radius: 8px;
        }

        .spec-detail:hover {
            background: rgba(0, 180, 200, 0.1);
            transform: translateX(10px);
            color: #00b4d8;
        }

        /* Mercedes Star Logo */
        .mercedes-star {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 20px;
        }
        
        .star {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            position: relative;
            transform: rotate(180deg);
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        
        .star::before {
            content: '';
            position: absolute;
            top: 15px;
            left: -15px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            transform: rotate(70deg);
        }
        
        .star::after {
            content: '';
            position: absolute;
            top: 15px;
            left: -15px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid #00b4d8;
            transform: rotate(-70deg);
        }
        
        .star:hover {
            opacity: 1;
            transform: rotate(180deg) scale(1.1);
        }

        /* Model Selector Styles */
        .model-selector {
            position: relative;
            z-index: 100;
        }
        
        .model-selector select {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 180, 200, 0.3);
            padding: 8px 32px 8px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2300b4d8'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 16px;
        }
        
        .model-selector select:hover {
            border-color: rgba(0, 180, 200, 0.6);
            background-color: rgba(17, 24, 39, 1);
            box-shadow: 0 0 15px rgba(0, 180, 200, 0.2);
        }
        
        .model-selector select:focus {
            outline: none;
            border-color: #00b4d8;
            box-shadow: 0 0 20px rgba(0, 180, 200, 0.3);
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
    <div class="fixed top-0 left-0 w-full p-6 bg-gray-900 flex justify-between items-center z-50 border-b border-teal-500/20 shadow-lg backdrop-blur-md bg-opacity-90">
        <a href="../Showroom.php" class="back-btn text-teal-500 font-bold hover:underline animate-fadeUp delay-1 flex items-center group">
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
                    <option value="mercedes-amg-gt">🏎️ Mercedes-AMG GT</option>
                    <option value="mercedes-amg-c63">🏎️ Mercedes-AMG C63</option>
                    <option value="mercedes-amg-e63">🏎️ Mercedes-AMG E63</option>
                    <option value="mercedes-amg-g63">🏎️ Mercedes-AMG G63</option>
                    <option value="mercedes-eqs">🏎️ Mercedes-EQ EQS</option>
                    <option value="mercedes-maybach">🏎️ Mercedes-Maybach S-Class</option>
                </select>
            </div>
            <h1 class="page-title text-2xl font-bold text-teal-500 animate-fadeUp delay-1">Mercedes-Benz Collection</h1>
        </div>
    </div>

    <!-- Mercedes Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Mercedes Star Logo -->
        <div class="mercedes-star">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">The Best or Nothing</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our premium collection of Mercedes-Benz luxury and performance vehicles. Each model combines German engineering with unparalleled elegance and innovation.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-teal-500 to-teal-400 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- Mercedes Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- Mercedes-AMG GT -->
            <div id="mercedes-amg-gt" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2017/09/17c678_011.jpg?w=892&h=502" 
                         alt="Mercedes-AMG GT" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-teal-600 px-3 py-1 rounded-full text-sm font-bold">Featured</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-AMG GT</h3>
                        <span class="text-teal-500 font-bold text-xl">₹2.40 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 469 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 3.2 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Top Speed:</strong> 304 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> RWD / 4MATIC+</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-amg-gt')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Mercedes-AMG C63 -->
            <div id="mercedes-amg-c63" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/cars-road-test/carousel/2015/11/3e80d955cf6694066bbf1b204eb0b7b8/15c_1402_052.jpg?w=892&h=502" 
                         alt="Mercedes-AMG C63" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-AMG C63</h3>
                        <span class="text-teal-500 font-bold text-xl">₹1.50 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 503 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 3.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Top Speed:</strong> 290 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> RWD / 4MATIC+</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-amg-c63')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Mercedes-AMG E63 -->
            <div id="mercedes-amg-e63" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2020/09/20c0543_005.jpg?w=892&h=502" 
                         alt="Mercedes-AMG E63" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-AMG E63</h3>
                        <span class="text-teal-500 font-bold text-xl">₹1.60 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 603 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 3.4 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Top Speed:</strong> 300 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> 4MATIC+ AWD</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-amg-e63')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Mercedes-AMG G63 -->
            <div id="mercedes-amg-g63" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/cars-road-test/carousel/2019/08/80a8f00f48698eb664b3ba1760cbcf0c/row06563.jpg?w=892&h=502" 
                         alt="Mercedes-AMG G63" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-teal-600 px-3 py-1 rounded-full text-sm font-bold">SUV</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-AMG G63</h3>
                        <span class="text-teal-500 font-bold text-xl">₹3.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> 4.0L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 577 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 4.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Top Speed:</strong> 240 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> 4MATIC AWD</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-amg-g63')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Mercedes-EQ EQS -->
            <div id="mercedes-eqs" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2022/07/Medium-40866-Mercedes-BenzEQE350.jpg?w=892&h=502" 
                         alt="Mercedes-EQ EQS" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-green-600 px-3 py-1 rounded-full text-sm font-bold">Electric</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-EQ EQS</h3>
                        <span class="text-teal-500 font-bold text-xl">₹2.20 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> Dual Electric Motors</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 658 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 3.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Range:</strong> 780 km</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> 4MATIC AWD</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-eqs')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- Mercedes-Maybach S-Class -->
            <div id="mercedes-maybach" class="mercedes-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/images/news-article/carousel/2020/11/9e57369ebfc2c3e6348095465ba6a95f/20c0535_179.jpg?w=892&h=502" 
                         alt="Mercedes-Maybach S-Class" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-teal-600 px-3 py-1 rounded-full text-sm font-bold">Luxury</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-teal-500 transition">Mercedes-Maybach S-Class</h3>
                        <span class="text-teal-500 font-bold text-xl">₹2.70 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Engine:</strong> 6.0L Twin-Turbo V12</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Horsepower:</strong> 612 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">0-100 km/h:</strong> 4.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Top Speed:</strong> 250 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-teal-400">Drivetrain:</strong> RWD / 4MATIC</p>
                    </div>
                    <button onclick="viewCarDetails('mercedes-maybach')" 
                        class="glow-btn w-full bg-gradient-to-r from-teal-600 to-teal-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- Mercedes Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-teal-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏆</div>
                <h4 class="text-2xl font-bold text-white">130+ Years</h4>
                <p class="text-gray-400">of Automotive Excellence</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-teal-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 3.2 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-teal-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">EQ Electric</h4>
                <p class="text-gray-400">Sustainable Luxury</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-teal-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⭐</div>
                <h4 class="text-2xl font-bold text-white">AMG Performance</h4>
                <p class="text-gray-400">One Man, One Engine</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a Mercedes-Benz?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a test drive or personalized quote</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-teal-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=Mercedes-Benz%20Inquiry" class="glow-btn bg-teal-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
                <a href="#contact" class="glow-btn bg-teal-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📋 Contact Form</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center p-6 text-gray-400 mt-12 border-t border-teal-500/20">
        <p class="hover:text-teal-400 transition-colors">© 2026 Anto World | All Rights Reserved | Designed with ❤️ using Tailwind</p>
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
                    element.style.boxShadow = '0 0 30px rgba(0, 180, 200, 0.5)';
                    setTimeout(() => {
                        element.style.boxShadow = '';
                    }, 1500);
                }
            }
        }

        // Car details function - opens individual car page
        function viewCarDetails(carModel) {
            const carData = {
                'mercedes-amg-gt': {
                    name: 'Mercedes-AMG GT',
                    page: 'mercedes-amg-gt-details.php'
                },
                'mercedes-amg-c63': {
                    name: 'Mercedes-AMG C63',
                    page: 'mercedes-amg-c63-details.php'
                },
                'mercedes-amg-e63': {
                    name: 'Mercedes-AMG E63',
                    page: 'mercedes-amg-e63-details.php'
                },
                'mercedes-amg-g63': {
                    name: 'Mercedes-AMG G63',
                    page: 'mercedes-amg-g63-details.php'
                },
                'mercedes-eqs': {
                    name: 'Mercedes-EQ EQS',
                    page: 'mercedes-eqs-details.php'
                },
                'mercedes-maybach': {
                    name: 'Mercedes-Maybach S-Class',
                    page: 'mercedes-maybach-details.php'
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