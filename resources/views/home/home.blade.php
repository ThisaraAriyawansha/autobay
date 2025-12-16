<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobay 🚗 - Vehicle Service Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); }
        .gradient-card { background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); }
        .shadow-soft { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02); }
        .shadow-strong { box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }
        .status-pending { background-color: #fef3c7; color: #92400e; }
        .status-completed { background-color: #d1fae5; color: #065f46; }
        .status-processing { background-color: #dbeafe; color: #1e40af; }
        .transition-all { transition: all 0.3s ease; }
    </style>
</head>
<body class="text-gray-800 bg-gray-50">
    <!-- Modern Navbar -->
    <nav class="sticky top-0 z-50 bg-white shadow-soft">
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-10 h-10 rounded-xl gradient-bg">
                        <i class="text-lg text-white fas fa-car"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900">
                        Autobay<span class="text-blue-600">.</span>
                    </h1>
                </div>

                <!-- Desktop Navigation -->
                <div class="items-center hidden space-x-1 md:flex">
                    <a href="#" class="px-4 py-2 text-gray-700 transition-all rounded-lg hover:text-blue-600 hover:bg-blue-50">
                        <i class="mr-2 fas fa-home"></i>Home
                    </a>
                    <a href="#" class="px-4 py-2 text-gray-700 transition-all rounded-lg hover:text-blue-600 hover:bg-blue-50">
                        <i class="mr-2 fas fa-concierge-bell"></i>Services
                    </a>
                    <a href="#" class="px-4 py-2 text-gray-700 transition-all rounded-lg hover:text-blue-600 hover:bg-blue-50">
                        <i class="mr-2 fas fa-calendar-alt"></i>Bookings
                    </a>
                    <a href="#" class="px-4 py-2 text-gray-700 transition-all rounded-lg hover:text-blue-600 hover:bg-blue-50">
                        <i class="mr-2 fas fa-user"></i>Profile
                    </a>
                    <button class="px-5 py-2 ml-4 font-medium text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-700">
                        <i class="mr-2 fas fa-sign-in-alt"></i>Login
                    </button>
                </div>

                <!-- Mobile menu button -->
                <button class="text-gray-700 md:hidden focus:outline-none">
                    <i class="text-xl fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Navigation (hidden by default) -->
            <div class="hidden p-4 mt-2 rounded-lg md:hidden bg-gray-50">
                <a href="#" class="block py-3 text-gray-700 border-b border-gray-100 hover:text-blue-600">
                    <i class="mr-3 fas fa-home"></i>Home
                </a>
                <a href="#" class="block py-3 text-gray-700 border-b border-gray-100 hover:text-blue-600">
                    <i class="mr-3 fas fa-concierge-bell"></i>Services
                </a>
                <a href="#" class="block py-3 text-gray-700 border-b border-gray-100 hover:text-blue-600">
                    <i class="mr-3 fas fa-calendar-alt"></i>Bookings
                </a>
                <a href="#" class="block py-3 text-gray-700 hover:text-blue-600">
                    <i class="mr-3 fas fa-user"></i>Profile
                </a>
                <button class="w-full px-5 py-3 mt-4 font-medium text-white transition-all bg-blue-600 rounded-lg hover:bg-blue-700">
                    <i class="mr-2 fas fa-sign-in-alt"></i>Login
                </button>
            </div>
        </div>
    </nav>

    <!-- Modern Hero Section -->
    <section class="text-white gradient-bg">
        <div class="container px-4 py-16 mx-auto md:py-24">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-10 md:w-1/2 md:mb-0">
                    <span class="inline-block px-4 py-1.5 bg-white/20 rounded-full text-sm font-medium mb-4">
                        <i class="mr-2 fas fa-bolt"></i>Revolutionizing Vehicle Care
                    </span>
                    <h2 class="mb-6 text-4xl font-bold leading-tight md:text-5xl">
                        Vehicle Service Booking
                        <span class="block text-blue-200">Made Simple</span>
                    </h2>
                    <p class="max-w-xl mb-8 text-lg text-blue-100">
                        Book, track, and manage your vehicle services online with our intuitive platform. 
                        Get real-time updates and premium service at your convenience.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row">
                        <button class="px-6 py-3.5 bg-white text-blue-600 rounded-xl font-semibold hover:bg-gray-100 transition-all shadow-strong">
                            <i class="mr-2 fas fa-calendar-plus"></i>Book a Service
                        </button>
                        <button class="px-6 py-3.5 bg-transparent border-2 border-white/40 text-white rounded-xl font-semibold hover:bg-white/10 transition-all">
                            <i class="mr-2 fas fa-play-circle"></i>How It Works
                        </button>
                    </div>
                </div>
                <div class="flex justify-center md:w-2/5">
                    <div class="relative">
                        <div class="flex items-center justify-center w-80 h-80 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl shadow-strong">
                            <i class="text-white fas fa-car text-8xl opacity-80"></i>
                        </div>
                        <div class="absolute flex flex-col items-center justify-center w-40 h-40 -top-4 -right-4 bg-gradient-to-tr from-yellow-400 to-orange-500 rounded-2xl shadow-strong">
                            <span class="text-3xl font-bold">24/7</span>
                            <span class="text-sm font-medium">Service Support</span>
                        </div>
                        <div class="absolute max-w-xs p-4 text-gray-800 bg-white -bottom-6 -left-6 rounded-xl shadow-strong">
                            <div class="flex items-center">
                                <div class="flex items-center justify-center w-10 h-10 mr-3 bg-green-100 rounded-lg">
                                    <i class="text-green-600 fas fa-check"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">95+ Completed</p>
                                    <p class="text-sm text-gray-500">Services this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Stats -->
    <section class="container px-4 mx-auto -mt-10 md:-mt-16">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="p-6 border border-gray-100 gradient-card rounded-2xl shadow-strong">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-gray-500">Total Bookings</p>
                        <p class="text-3xl font-bold text-gray-900">120</p>
                        <p class="mt-2 text-sm text-green-600">
                            <i class="mr-1 fas fa-arrow-up"></i>12% from last month
                        </p>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl">
                        <i class="text-xl text-blue-600 fas fa-calendar-check"></i>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="p-6 border border-gray-100 gradient-card rounded-2xl shadow-strong">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-gray-500">Pending Services</p>
                        <p class="text-3xl font-bold text-gray-900">8</p>
                        <p class="mt-2 text-sm text-yellow-600">
                            <i class="mr-1 fas fa-clock"></i>Awaiting service
                        </p>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 bg-yellow-100 rounded-xl">
                        <i class="text-xl text-yellow-600 fas fa-clock"></i>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="p-6 border border-gray-100 gradient-card rounded-2xl shadow-strong">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-gray-500">Completed</p>
                        <p class="text-3xl font-bold text-gray-900">95</p>
                        <p class="mt-2 text-sm text-green-600">
                            <i class="mr-1 fas fa-check-circle"></i>94% satisfaction
                        </p>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-xl">
                        <i class="text-xl text-green-600 fas fa-check-double"></i>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="p-6 border border-gray-100 gradient-card rounded-2xl shadow-strong">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-gray-500">Active Vehicles</p>
                        <p class="text-3xl font-bold text-gray-900">42</p>
                        <p class="mt-2 text-sm text-blue-600">
                            <i class="mr-1 fas fa-car"></i>3 being serviced
                        </p>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 bg-purple-100 rounded-xl">
                        <i class="text-xl text-purple-600 fas fa-car"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container px-4 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <!-- Booking Form -->
            <div class="overflow-hidden bg-white rounded-2xl shadow-strong">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="flex items-center text-2xl font-bold text-gray-900">
                        <i class="mr-3 text-blue-600 fas fa-calendar-plus"></i>
                        Book a Vehicle Service
                    </h2>
                    <p class="mt-1 text-gray-500">Schedule your service in under 2 minutes</p>
                </div>
                <div class="p-6">
                    <form>
                        <div class="mb-6">
                            <label class="block mb-2 font-medium text-gray-700">
                                <i class="mr-2 text-gray-400 fas fa-car"></i>Vehicle Number
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       class="w-full p-4 transition-all border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                       placeholder="e.g. CAB-1234">
                                <div class="absolute text-gray-400 right-4 top-4">
                                    <i class="fas fa-edit"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 font-medium text-gray-700">
                                <i class="mr-2 text-gray-400 fas fa-cogs"></i>Service Type
                            </label>
                            <div class="relative">
                                <select class="w-full p-4 transition-all border border-gray-300 appearance-none rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option>Oil Change - $59.99</option>
                                    <option>Full Service - $199.99</option>
                                    <option>Engine Check - $89.99</option>
                                    <option>Brake Service - $149.99</option>
                                    <option>Tire Rotation - $39.99</option>
                                </select>
                                <div class="absolute text-gray-400 right-4 top-4">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block mb-2 font-medium text-gray-700">
                                <i class="mr-2 text-gray-400 fas fa-calendar-alt"></i>Preferred Service Date
                            </label>
                            <div class="relative">
                                <input type="date" 
                                       class="w-full p-4 transition-all border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <div class="absolute text-gray-400 right-4 top-4">
                                    <i class="fas fa-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <button class="w-full py-4 font-semibold text-white transition-all shadow-md gradient-bg rounded-xl hover:opacity-95">
                            <i class="mr-2 fas fa-paper-plane"></i>Schedule Service
                        </button>
                    </form>
                </div>
            </div>

            <!-- Recent Bookings -->
            <div class="overflow-hidden bg-white rounded-2xl shadow-strong">
                <div class="flex items-center justify-between p-6 border-b border-gray-100">
                    <div>
                        <h2 class="flex items-center text-2xl font-bold text-gray-900">
                            <i class="mr-3 text-blue-600 fas fa-history"></i>
                            Recent Bookings
                        </h2>
                        <p class="mt-1 text-gray-500">Your latest service requests</p>
                    </div>
                    <button class="px-4 py-2 font-medium text-blue-600 transition-all rounded-lg bg-blue-50 hover:bg-blue-100">
                        View All
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="p-4 font-medium text-left text-gray-600 rounded-tl-xl">Vehicle</th>
                                <th class="p-4 font-medium text-left text-gray-600">Service</th>
                                <th class="p-4 font-medium text-left text-gray-600">Date</th>
                                <th class="p-4 font-medium text-left text-gray-600 rounded-tr-xl">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="transition-all border-t border-gray-100 hover:bg-gray-50">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-blue-100 rounded-lg">
                                            <i class="text-blue-600 fas fa-car"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">CAB-1234</p>
                                            <p class="text-sm text-gray-500">Toyota Camry</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 font-medium">Oil Change</td>
                                <td class="p-4">
                                    <p>Nov 15, 2023</p>
                                    <p class="text-sm text-gray-500">10:30 AM</p>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 text-sm font-medium rounded-full status-pending">
                                        <i class="mr-1 fas fa-clock"></i>Pending
                                    </span>
                                </td>
                            </tr>
                            <tr class="transition-all border-t border-gray-100 hover:bg-gray-50">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-blue-100 rounded-lg">
                                            <i class="text-blue-600 fas fa-car"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">CAA-9876</p>
                                            <p class="text-sm text-gray-500">Honda Accord</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 font-medium">Full Service</td>
                                <td class="p-4">
                                    <p>Nov 12, 2023</p>
                                    <p class="text-sm text-gray-500">2:00 PM</p>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 text-sm font-medium rounded-full status-completed">
                                        <i class="mr-1 fas fa-check"></i>Completed
                                    </span>
                                </td>
                            </tr>
                            <tr class="transition-all border-t border-gray-100 hover:bg-gray-50">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-blue-100 rounded-lg">
                                            <i class="text-blue-600 fas fa-car"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">CAD-5567</p>
                                            <p class="text-sm text-gray-500">Ford Escape</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 font-medium">Brake Service</td>
                                <td class="p-4">
                                    <p>Nov 10, 2023</p>
                                    <p class="text-sm text-gray-500">9:00 AM</p>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 text-sm font-medium rounded-full status-processing">
                                        <i class="mr-1 fas fa-tools"></i>In Progress
                                    </span>
                                </td>
                            </tr>
                            <tr class="transition-all border-t border-gray-100 hover:bg-gray-50">
                                <td class="p-4">
                                    <div class="flex items-center">
                                        <div class="flex items-center justify-center w-10 h-10 mr-3 bg-blue-100 rounded-lg">
                                            <i class="text-blue-600 fas fa-car"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">CAE-3345</p>
                                            <p class="text-sm text-gray-500">BMW X5</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 font-medium">Engine Check</td>
                                <td class="p-4">
                                    <p>Nov 8, 2023</p>
                                    <p class="text-sm text-gray-500">11:45 AM</p>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 text-sm font-medium rounded-full status-completed">
                                        <i class="mr-1 fas fa-check"></i>Completed
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 text-center border-t border-gray-100">
                    <a href="#" class="font-medium text-blue-600 transition-all hover:text-blue-800">
                        <i class="mr-2 fas fa-arrow-right"></i>Load More Bookings
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="pt-12 pb-6 mt-12 text-white bg-gray-900">
        <div class="container px-4 mx-auto">
            <div class="grid grid-cols-1 gap-8 mb-8 md:grid-cols-4">
                <div>
                    <div class="flex items-center mb-6 space-x-2">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl gradient-bg">
                            <i class="text-lg text-white fas fa-car"></i>
                        </div>
                        <h2 class="text-2xl font-bold">Autobay<span class="text-blue-400">.</span></h2>
                    </div>
                    <p class="mb-6 text-gray-400">
                        Revolutionizing vehicle service management with cutting-edge technology and customer-centric solutions.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-all bg-gray-800 rounded-lg hover:bg-blue-600">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-all bg-gray-800 rounded-lg hover:bg-blue-600">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-all bg-gray-800 rounded-lg hover:bg-blue-600">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 transition-all bg-gray-800 rounded-lg hover:bg-blue-600">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Oil Change</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Full Service</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Brake Service</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Engine Diagnostics</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Tire Services</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Press</a></li>
                        <li><a href="#" class="text-gray-400 transition-all hover:text-white">Partners</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="mb-6 text-lg font-semibold">Contact</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start text-gray-400">
                            <i class="mt-1 mr-3 text-blue-400 fas fa-map-marker-alt"></i>
                            <span>123 Auto Street, Service City, SC 12345</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="mr-3 text-blue-400 fas fa-phone"></i>
                            <span>(555) 123-4567</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="mr-3 text-blue-400 fas fa-envelope"></i>
                            <span>support@autobay.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 text-center text-gray-400 border-t border-gray-800">
                <p>&copy; <span id="currentYear"></span> Autobay. All rights reserved.</p>
                <p class="mt-2 text-sm">Designed with <i class="mx-1 text-red-500 fas fa-heart"></i> for vehicle owners everywhere</p>
            </div>
        </div>
    </footer>

    <script>
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Mobile menu toggle
        const menuButton = document.querySelector('button.md\\:hidden');
        const mobileMenu = document.querySelector('.md\\:hidden + div');
        
        if(menuButton) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Add animation to stats cards on load
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.gradient-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>