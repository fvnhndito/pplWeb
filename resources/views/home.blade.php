<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    @include('layouts.header')
    
    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Welcome to Campus Market
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Your one-stop shop for campus essentials
            </p>
        </div>

        <!-- Product Catalog -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Campus Notebook</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Premium quality notebook for your studies</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$8.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Campus Backpack</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Durable backpack for daily use</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$34.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Study Guide Set</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Complete study materials collection</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$24.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Campus T-Shirt</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Official campus merchandise</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$19.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Stationery Set</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Complete pen and pencil set</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$12.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Desk Lamp</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">LED desk lamp for studying</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$29.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Wall Clock</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Modern minimalist wall clock</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$15.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="aspect-square bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 dark:text-white mb-2">Lunch Box</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Eco-friendly lunch container</p>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold text-xl">$14.99</span>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
       
    @include('layouts.footer')
</body>
</html>
