<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaaptive Technologies - Innovative Software Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            }

            to {
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }
    </style>
</head>

<body class="font-inter bg-gray-900 text-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                        <span class="text-white font-bold text-xl">Z</span>
                    </div>
                    <span class="text-xl font-bold">Zaaptive Technologies</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-blue-400 transition-colors duration-300">Home</a>
                    <a href="#services" class="hover:text-blue-400 transition-colors duration-300">Services</a>
                    <a href="{{ route('zaaptive-technologies.career') }}" class="hover:text-blue-400 transition-colors duration-300">Careers</a>
                    <a href="#about" class="hover:text-blue-400 transition-colors duration-300">About</a>
                    <a href="#contact" class="hover:text-blue-400 transition-colors duration-300">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed top-0 left-0 w-full h-full bg-gray-900 z-40 md:hidden">
            <div class="flex flex-col items-center justify-center h-full space-y-8 text-2xl">
                <button id="close-menu" class="absolute top-6 right-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
                <a href="#home" class="mobile-nav-link hover:text-blue-400 transition-colors duration-300">Home</a>
                <a href="#services"
                    class="mobile-nav-link hover:text-blue-400 transition-colors duration-300">Services</a>
                <a href="#about" class="mobile-nav-link hover:text-blue-400 transition-colors duration-300">About</a>
                <a href="#contact"
                    class="mobile-nav-link hover:text-blue-400 transition-colors duration-300">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center gradient-bg relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div
                class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
            </div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="animate-slide-up">
                <h1
                    class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                    Zaaptive Technologies
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto">
                    Transforming ideas into powerful software solutions that drive innovation and accelerate business
                    growth
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="scrollToSection('services')"
                        class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 animate-glow">
                        Explore Our Services
                    </button>
                    <button onclick="scrollToSection('contact')"
                        class="border-2 border-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        Get In Touch
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Our Services
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    We deliver cutting-edge software solutions tailored to your business needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Custom Software Development</h3>
                    <p class="text-gray-300">Bespoke software solutions designed to meet your unique business
                        requirements and drive operational efficiency.</p>
                </div>

                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Mobile App Development</h3>
                    <p class="text-gray-300">Native and cross-platform mobile applications that deliver exceptional user
                        experiences across all devices.</p>
                </div>

                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Data Analytics</h3>
                    <p class="text-gray-300">Transform your data into actionable insights with our advanced analytics
                        and business intelligence solutions.</p>
                </div>

                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Cloud Solutions</h3>
                    <p class="text-gray-300">Scalable cloud infrastructure and migration services to optimize your
                        business operations and reduce costs.</p>
                </div>

                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">AI & Machine Learning</h3>
                    <p class="text-gray-300">Harness the power of artificial intelligence to automate processes and gain
                        competitive advantages.</p>
                </div>

                <div
                    class="glass-effect rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300 group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Technical Consulting</h3>
                    <p class="text-gray-300">Expert guidance on technology strategy, architecture decisions, and digital
                        transformation initiatives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <h2
                        class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                        About Zaaptive
                    </h2>
                    <p class="text-xl text-gray-300 mb-6">
                        Founded on the principle of turning innovative ideas into reality, Zaaptive Technologies is your
                        trusted partner in digital transformation.
                    </p>
                    <p class="text-gray-300 mb-8">
                        Our team of experienced developers, designers, and strategists work collaboratively to deliver
                        solutions that not only meet your current needs but also scale with your future growth. We
                        believe in the power of technology to transform businesses and create meaningful impact.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-400 mb-2">50+</div>
                            <div class="text-gray-300">Projects Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-400 mb-2">5+</div>
                            <div class="text-gray-300">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-400 mb-2">30+</div>
                            <div class="text-gray-300">Happy Clients</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-400 mb-2">24/7</div>
                            <div class="text-gray-300">Support</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="w-full h-96 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 rounded-3xl opacity-20 animate-float">
                    </div>
                    <div class="absolute inset-4 glass-effect rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <div
                                class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
                                <span class="text-white font-bold text-4xl">Z</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-2">Innovation First</h3>
                            <p class="text-gray-300">Cutting-edge solutions for tomorrow's challenges</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Get In Touch
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Ready to transform your ideas into reality? Let's discuss your project and explore how we can help
                    you achieve your goals.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Email Us</h3>
                            <p class="text-gray-300">hello@zaaptive.com</p>
                            <p class="text-gray-300">support@zaaptive.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Call Us</h3>
                            <p class="text-gray-300">+1 (555) 123-4567</p>
                            <p class="text-gray-300">+1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Visit Us</h3>
                            <p class="text-gray-300">123 Innovation Drive</p>
                            <p class="text-gray-300">Tech Valley, CA 94000</p>
                        </div>
                    </div>
                </div>

                <div class="glass-effect rounded-2xl p-8">
                    <form class="space-y-6" onsubmit="handleFormSubmit(event)">
                        <div>
                            <label class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" required
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" required
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Project Type</label>
                            <select
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                <option>Custom Software Development</option>
                                <option>Mobile App Development</option>
                                <option>Data Analytics</option>
                                <option>Cloud Solutions</option>
                                <option>AI & Machine Learning</option>
                                <option>Technical Consulting</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Message</label>
                            <textarea rows="4" required
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-xl">Z</span>
                        </div>
                        <span class="text-xl font-bold">Zaaptive Technologies</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Transforming ideas into powerful software solutions that drive innovation and accelerate
                        business growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001.012.001z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Custom Development</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Mobile Apps</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Data Analytics</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Cloud Solutions</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Zaaptive Technologies. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('open');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
        });

        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });
        });

        // Smooth scrolling function
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Navigation link smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                scrollToSection(targetId);
            });
        });

        // Form submission handler
        function handleFormSubmit(event) {
            event.preventDefault();

            // Get form data
            const formData = new FormData(event.target);
            const name = formData.get('name') || event.target.querySelector('input[type="text"]').value;
            const email = formData.get('email') || event.target.querySelector('input[type="email"]').value;
            const projectType = event.target.querySelector('select').value;
            const message = event.target.querySelector('textarea').value;

            // Show success message
            const button = event.target.querySelector('button[type="submit"]');
            const originalText = button.textContent;

            button.textContent = 'Message Sent! ✓';
            button.style.background = 'linear-gradient(to right, #10b981, #059669)';

            // Reset form
            event.target.reset();

            // Reset button after 3 seconds
            setTimeout(() => {
                button.textContent = originalText;
                button.style.background = '';
            }, 3000);

            // In a real application, you would send this data to your server
            console.log('Form submitted:', { name, email, projectType, message });
        }

        // Add scroll effect to navigation
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(17, 24, 39, 0.95)';
            } else {
                nav.style.background = 'rgba(255, 255, 255, 0.1)';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            observer.observe(el);
        });
    </script>
</body>

</html>
