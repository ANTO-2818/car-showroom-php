<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW Cars - Anto's Car Showroom</title>
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

        /* BMW Car Card Styles */
        .bmw-card {
            background: linear-gradient(145deg, #1a1a1a, #111827);
            border: 1px solid rgba(239, 68, 68, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }

        .bmw-card::before {
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

        .bmw-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: transparent;
        }

        .bmw-card:hover::before {
            opacity: 0.3;
        }

        .bmw-card:hover {
            box-shadow: 0 20px 40px rgba(239, 68, 68, 0.3);
        }

        .bmw-card img {
            transition: transform 0.5s ease;
        }

        .bmw-card:hover img {
            transform: scale(1.1);
        }

        .bmw-card::after {
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

        .bmw-card:hover::after {
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
                    <option value="bmw-m4">🏎️ BMW M4 Competition</option>
                    <option value="bmw-m3">🏎️ BMW M3 Competition</option>
                    <option value="bmw-m5">🏎️ BMW M5 Competition</option>
                    <option value="bmw-m8">🏎️ BMW M8 Competition</option>
                    <option value="bmw-i7">🏎️ BMW i7 M70</option>
                    <option value="bmw-x6m">🏎️ BMW X6 M Competition</option>
                </select>
            </div>
            <h1 class="page-title text-2xl font-bold text-red-500 animate-fadeUp delay-1">BMW Collection</h1>
        </div>
    </div>

    <!-- BMW Cars Grid Section -->
    <div class="max-w-6xl mx-auto p-8 pt-24">
        
        <!-- Header Section -->
        <div class="text-center mb-12 animate-fadeUp delay-1">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">The Ultimate Driving Machine</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our premium collection of BMW luxury and performance vehicles. Each model combines German engineering excellence with unparalleled driving dynamics.</p>
            <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-red-400 mx-auto mt-6 rounded-full"></div>
        </div>

        <!-- BMW Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 animate-fadeUp delay-2" id="carsGrid">
            
            <!-- BMW M4 Competition -->
            <div id="bmw-m4" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2024/10/1-BMW-M4-review-2024-UK.jpg?w=892&h=502" 
                         alt="BMW M4 Competition" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-red-600 px-3 py-1 rounded-full text-sm font-bold">Featured</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW M4 Competition</h3>
                        <span class="text-red-500 font-bold text-xl">₹1.5 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 3.0L Twin-Turbo Inline-6</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 503 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 290 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> AWD / RWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-m4-competition')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- BMW M3 Competition -->
            <div id="bmw-m3" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://images.pistonheads.com/nimg/43852/_DSF3440-Edit.jpg" 
                         alt="BMW M3 Competition" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW M3 Competition</h3>
                        <span class="text-red-500 font-bold text-xl">₹1.3 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 3.0L Twin-Turbo Inline-6</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 503 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.9 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 290 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> AWD / RWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-m3-competition')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- BMW M5 Competition -->
            <div id="bmw-m5" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://4kwallpapers.com/images/walls/thumbs_3t/1423.jpg" 
                         alt="BMW M5 Competition" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW M5 Competition</h3>
                        <span class="text-red-500 font-bold text-xl">₹1.8 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 4.4L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 617 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.2 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 305 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> M xDrive AWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-m5-competition')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- BMW M8 Competition -->
            <div id="bmw-m8" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/cars-car/carousel/2019/10/bmw_m8_coupe_fire_red_033.jpg?w=892&h=502" 
                         alt="BMW M8 Competition" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW M8 Competition</h3>
                        <span class="text-red-500 font-bold text-xl">₹2.2 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 4.4L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 617 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.0 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 305 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> M xDrive AWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-m8-competition')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- BMW i7 M70 -->
            <div id="bmw-i7" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://www.topgear.com/sites/default/files/2023/04/P90500803_highRes_the-bmw-i7-m70-xdriv.jpg?w=892&h=502" 
                         alt="BMW i7 M70" 
                         class="w-full h-full object-cover transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-blue-600 px-3 py-1 rounded-full text-sm font-bold">Electric</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW i7 M70</h3>
                        <span class="text-red-500 font-bold text-xl">₹2.5 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> Dual Electric Motors</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 650 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.5 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Range:</strong> 560 km</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> AWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-i7-m70')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>

            <!-- BMW X6 M Competition -->
            <div id="bmw-x6m" class="bmw-card rounded-xl overflow-hidden scroll-mt-24">
                <div class="relative overflow-hidden h-64">
                    <img src="https://media.ed.edmunds-media.com/bmw/x6-m/2026/oem/2026_bmw_x6-m_4dr-suv_competition_fq_oem_9_1600.jpg" 
                         alt="BMW X6 M Competition" 
                         class="w-full h-full object-cover transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-2xl font-bold text-white hover:text-red-500 transition">BMW X6 M Competition</h3>
                        <span class="text-red-500 font-bold text-xl">₹2.1 Cr*</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Engine:</strong> 4.4L Twin-Turbo V8</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Horsepower:</strong> 617 HP</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">0-100 km/h:</strong> 3.8 seconds</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Top Speed:</strong> 290 km/h</p>
                        <p class="spec-detail text-gray-300"><strong class="text-red-400">Drivetrain:</strong> M xDrive AWD</p>
                    </div>
                    <button onclick="viewCarDetails('bmw-x6m-competition')" 
                        class="glow-btn w-full bg-gradient-to-r from-red-600 to-red-500 py-3 rounded-lg font-semibold transition-all duration-300 hover:scale-105">
                        View Details →
                    </button>
                </div>
            </div>
        </div>

        <!-- BMW Facts Section -->
        <div class="mt-16 grid md:grid-cols-4 gap-6 animate-fadeUp delay-3">
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🏆</div>
                <h4 class="text-2xl font-bold text-white">100+ Years</h4>
                <p class="text-gray-400">of Engineering Excellence</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🚀</div>
                <h4 class="text-2xl font-bold text-white">0-100 km/h</h4>
                <p class="text-gray-400">as fast as 3.0 seconds</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">⚡</div>
                <h4 class="text-2xl font-bold text-white">Electric Options</h4>
                <p class="text-gray-400">i Series available</p>
            </div>
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-xl border border-gray-800 text-center hover:border-red-500 transition-all duration-300 hover:scale-105">
                <div class="text-4xl mb-3">🌍</div>
                <h4 class="text-2xl font-bold text-white">Global Brand</h4>
                <p class="text-gray-400">Trusted Worldwide</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="mt-16 bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl p-8 text-center animate-fadeUp delay-4">
            <h3 class="text-2xl font-bold text-white mb-3">Interested in a BMW?</h3>
            <p class="text-gray-400 mb-6">Contact our experts for a test drive or personalized quote</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+919344119956" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">📞 Call Now</a>
                <a href="mailto:info@antoworld.com?subject=BMW%20Inquiry" class="glow-btn bg-red-600 px-6 py-3 rounded-lg font-semibold transition-all hover:scale-105">✉️ Email Us</a>
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
                'bmw-m4-competition': {
                    name: 'BMW M4 Competition',
                    page: 'bmw-m4-details.php'
                },
                'bmw-m3-competition': {
                    name: 'BMW M3 Competition',
                    page: 'bmw-m3-details.php'
                },
                'bmw-m5-competition': {
                    name: 'BMW M5 Competition',
                    page: 'bmw-m5-details.php'
                },
                'bmw-m8-competition': {
                    name: 'BMW M8 Competition',
                    page: 'bmw-m8-details.php'
                },
                'bmw-i7-m70': {
                    name: 'BMW i7 M70',
                    page: 'bmw-i7-details.php'
                },
                'bmw-x6m-competition': {
                    name: 'BMW X6 M Competition',
                    page: 'bmw-x6m-details.php'
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