<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Developer - Careers at Zaaptive</title>
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
            <a href="careers.html" class="hover:text-blue-400">Careers</a>
            <a href="index.html#about" class="hover:text-blue-400">About</a>
            <a href="index.html#contact" class="hover:text-blue-400">Contact</a>
        </div>
    </nav>

    <!-- Hero -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-700 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Frontend Developer</h1>
        <p class="mt-3 text-lg text-gray-200">Remote | 2+ years experience | ₹8–12 LPA</p>
        <a href="#apply"
            class="mt-6 inline-block bg-white text-gray-900 font-semibold px-6 py-3 rounded-lg hover:bg-gray-200">Apply
            Now</a>
    </header>

    <!-- Main Content -->
    <section class="max-w-5xl mx-auto py-16 px-6 space-y-12">

        <!-- About Role -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">About the Role</h2>
            <p class="text-gray-300">
                As a Frontend Developer at Zaaptive Technologies, you’ll craft scalable, elegant, and high-performance
                interfaces that power innovative business solutions.
                You’ll collaborate closely with designers, backend engineers, and product managers to create seamless
                user experiences.
            </p>
        </div>

        <!-- Responsibilities -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Responsibilities</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-300">
                <li>Develop and maintain responsive, accessible web applications using React and Tailwind CSS.</li>
                <li>Work with designers to implement beautiful and intuitive UIs.</li>
                <li>Optimize web apps for speed and performance across devices.</li>
                <li>Write clean, reusable, and testable code following best practices.</li>
                <li>Collaborate with backend engineers to integrate APIs.</li>
            </ul>
        </div>

        <!-- Requirements -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Requirements</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-300">
                <li>Bachelor’s degree in Computer Science, Engineering, or related field.</li>
                <li>2+ years of experience in frontend development.</li>
                <li>Proficiency in React.js, Tailwind CSS, and JavaScript/TypeScript.</li>
                <li>Experience with Git and agile workflows.</li>
            </ul>
        </div>

        <!-- Nice-to-Have -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Nice-to-Have Skills</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-300">
                <li>Experience with Next.js or Vue.js.</li>
                <li>Knowledge of CI/CD pipelines.</li>
                <li>Basic understanding of backend development.</li>
                <li>Open-source contributions or personal projects.</li>
            </ul>
        </div>

        <!-- Benefits -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Benefits & Perks</h2>
            <ul class="grid md:grid-cols-2 gap-4 text-gray-300">
                <li>💻 Remote-first culture & flexible hours</li>
                <li>🏥 Comprehensive health insurance</li>
                <li>📚 Learning budget for courses & certifications</li>
                <li>🌴 Paid time off + company holidays</li>
                <li>🎉 Team retreats, hackathons & fun Fridays</li>
                <li>📈 Performance bonuses & ESOPs</li>
            </ul>
        </div>

        <!-- Hiring Process -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Our Hiring Process</h2>
            <ol class="list-decimal list-inside space-y-2 text-gray-300">
                <li>Application review by our hiring team.</li>
                <li>Initial HR screening call.</li>
                <li>Technical interview with coding task.</li>
                <li>Final round with team lead & culture fit discussion.</li>
                <li>Offer & onboarding 🎉</li>
            </ol>
        </div>

        <!-- Culture -->
        <div>
            <h2 class="text-2xl font-semibold mb-4">Life at Zaaptive</h2>
            <p class="text-gray-300 mb-4">
                We believe in innovation, growth, and collaboration. Our culture encourages creativity, work-life
                balance, and team bonding.
            </p>
            <div class="grid md:grid-cols-3 gap-4">
                <img src="https://plus.unsplash.com/premium_photo-1742404275539-fdcb7915ecfe?w=500&auto=format&fit=crop&q=60" class="rounded-lg object-cover" alt="Team">
                <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=500&auto=format&fit=crop&q=60" class="rounded-lg object-cover"
                    alt="Office">
                <img src="https://plus.unsplash.com/premium_photo-1747133716324-e697abe02b41?w=500&auto=format&fit=crop&q=60" class="rounded-lg object-cover" alt="Fun">
            </div>
        </div>

        <!-- Apply Now -->
        <div id="apply" class="bg-gray-800 p-8 rounded-xl">
            <h2 class="text-2xl font-bold mb-6">Apply Now</h2>
            <form class="space-y-4">
                <input type="text" placeholder="Full Name"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded focus:ring-2 focus:ring-blue-500">
                <input type="email" placeholder="Email Address"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded focus:ring-2 focus:ring-blue-500">
                <input type="text" placeholder="Phone Number"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded focus:ring-2 focus:ring-blue-500">
                <input type="file" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded">
                <textarea placeholder="Cover Letter" rows="4"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded focus:ring-2 focus:ring-blue-500"></textarea>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 py-3 rounded font-semibold">Submit
                    Application</button>
            </form>
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

</body>

</html>
