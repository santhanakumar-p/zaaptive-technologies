<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Zaaptive Technologies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white font-inter">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
        <a href="index.html" class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded flex items-center justify-center">
                <span class="font-bold">Z</span>
            </div>
            <span class="font-bold">Zaaptive Technologies</span>
        </a>
        <div class="space-x-6 hidden md:flex">
            <a href="index.html#home" class="hover:text-blue-400">Home</a>
            <a href="{{ route('zaaptive-technologies.career') }}" class="hover:text-blue-400">Careers</a>
            <a href="index.html#about" class="hover:text-blue-400">About</a>
            <a href="index.html#contact" class="hover:text-blue-400">Contact</a>
        </div>
    </nav>

    <!-- Hero -->
    <header class="py-20 text-center bg-gradient-to-r from-blue-600 to-purple-700">
        <h1 class="text-5xl font-bold">Careers at Zaaptive</h1>
        <p class="mt-4 text-lg text-gray-200 max-w-2xl mx-auto">
            Join a passionate team shaping the future of software innovation. We’re building products that transform
            businesses worldwide.
        </p>
    </header>

    <!-- Why Join -->
    <section class="max-w-6xl mx-auto py-16 px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">Why Join Us?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-xl">
                <h3 class="text-xl font-semibold mb-2">Innovation First</h3>
                <p class="text-gray-400">Work with cutting-edge tech stacks on projects that challenge and inspire.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl">
                <h3 class="text-xl font-semibold mb-2">Flexible Work</h3>
                <p class="text-gray-400">Hybrid and remote-friendly culture with focus on work-life balance.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-xl">
                <h3 class="text-xl font-semibold mb-2">Growth & Learning</h3>
                <p class="text-gray-400">Mentorship, upskilling, and leadership opportunities to accelerate your career.
                </p>
            </div>
        </div>
    </section>

    <!-- Open Roles -->
    <section class="max-w-6xl mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold mb-8 text-center">Open Positions</h2>

        <!-- Engineering Jobs -->
        @if ($engineerings->count())
            <h3 class="text-2xl font-semibold mb-6">{{ Str::title($engineerings->first()->category) }}</h3>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                @foreach ($engineerings as $engineering)
                    <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2">{{ Str::title($engineering->position) }}</h4>
                        <p class="text-gray-400 mb-3">{{ Str::title($engineering->location) }}</p>
                        <p class="text-sm text-gray-500">{{ Str::title($engineering->experience) }} |
                            {{ Str::title($engineering->salary) }}</p>
                        <div class="mt-4 flex space-x-2">
                            <span
                                class="px-3 py-1 bg-purple-600 text-xs rounded">{{ Str::title($engineering->skills) }}</span>
                        </div>
                        <a href="{{ route('zaaptive-technologies.career-details', $engineering->id) }}"
                            class="inline-block mt-4 px-5 py-2 bg-blue-600 rounded hover:bg-blue-700">View Details</a>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Design Jobs -->
        @if ($designs->count())
            <h3 class="text-2xl font-semibold mb-6">{{ Str::title($designs->first()->category) }}</h3>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                @foreach ($designs as $design)
                    <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2">{{ Str::title($design->position) }}</h4>
                        <p class="text-gray-400 mb-3">{{ Str::title($design->location) }}</p>
                        <p class="text-sm text-gray-500">{{ Str::title($design->experience) }} |
                            {{ Str::title($design->salary) }}</p>
                        <div class="mt-4 flex space-x-2">
                            <span
                                class="px-3 py-1 bg-purple-600 text-xs rounded">{{ Str::title($design->skills) }}</span>
                        </div>
                        <a href="{{ route('zaaptive-technologies.career-details', $design->id) }}"
                            class="inline-block mt-4 px-5 py-2 bg-blue-600 rounded hover:bg-blue-700">View Details</a>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Operation Jobs -->
        @if ($operations->count())
            <h3 class="text-2xl font-semibold mb-6">{{ Str::title($operations->first()->category) }}</h3>
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                @foreach ($operations as $operation)
                    <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                        <h4 class="text-xl font-semibold mb-2">{{ Str::title($operation->position) }}</h4>
                        <p class="text-gray-400 mb-3">{{ Str::title($operation->location) }}</p>
                        <p class="text-sm text-gray-500">{{ Str::title($operation->experience) }} |
                            {{ Str::title($operation->salary) }}</p>
                        <div class="mt-4 flex space-x-2">
                            <span
                                class="px-3 py-1 bg-purple-600 text-xs rounded">{{ Str::title($operation->skills) }}</span>
                        </div>
                        <a href="{{ route('zaaptive-technologies.career-details', $operation->id) }}"
                            class="inline-block mt-4 px-5 py-2 bg-blue-600 rounded hover:bg-blue-700">View Details</a>
                    </div>
                @endforeach
            </div>
        @endif

    </section>

    <!-- Life at Zaaptive -->
    <section class="max-w-6xl mx-auto py-16 px-6">
        <h2 class="text-3xl font-bold mb-8 text-center">Life at Zaaptive</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-800 rounded-xl overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1742404275539-fdcb7915ecfe?w=500&auto=format&fit=crop&q=60"
                    alt="Team" class="w-full h-48 object-cover">
                <div class="p-4">Collaborative team culture with hackathons & workshops.</div>
            </div>
            <div class="bg-gray-800 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=500&auto=format&fit=crop&q=60"
                    alt="Office" class="w-full h-48 object-cover">
                <div class="p-4">Modern workplace with flexible hybrid setup.</div>
            </div>
            <div class="bg-gray-800 rounded-xl overflow-hidden">
                <img src="https://plus.unsplash.com/premium_photo-1747133716324-e697abe02b41?w=500&auto=format&fit=crop&q=60"
                    alt="Fun" class="w-full h-48 object-cover">
                <div class="p-4">We believe in fun Fridays, team outings & celebrations.</div>
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
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Custom
                                Development</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Mobile Apps</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Data
                                Analytics</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Cloud
                                Solutions</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">About Us</a>
                        </li>
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
</body>

</html>
