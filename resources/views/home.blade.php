<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Mini Shop') }} — Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white min-h-screen">
        <header class="max-w-6xl mx-auto p-6 flex items-center justify-between border-b border-gray-200 dark:border-gray-700">
            <a href="/" class="text-2xl font-semibold text-gray-900 dark:text-white">{{ config('app.name', 'Mini Shop') }}</a>
            <nav class="flex items-center gap-6">
                <a href="#products" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Shop</a>
                <a href="#" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">About</a>
                <a href="{{ route('login') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Login</a>
                <a href="#" class="inline-block px-4 py-2 rounded-md bg-gray-900 dark:bg-white dark:text-gray-900 text-white text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-100 transition">Cart (0)</a>
            </nav>
        </header>

        <main class="max-w-6xl mx-auto p-6">
            {{-- Hero --}}
            <section class="bg-white dark:bg-gray-800 rounded-lg p-8 lg:p-12 mb-8 shadow-lg">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <div class="flex-1">
                        <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-gray-900 dark:text-white">Welcome to Mini Shop</h1>
                        <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">Simple demo store — browse products and try the layout. This is a small, responsive Home page for a mini ecommerce app.</p>
                        <div class="flex gap-4">
                            <a href="#products" class="inline-block px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-md font-medium transition">Shop Now</a>
                            <a href="#" class="inline-block px-6 py-3 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-900 dark:text-white rounded-md font-medium transition">Learn More</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-96">
                        <img src="https://via.placeholder.com/440x300?text=Mini+Shop+Hero" alt="Mini Shop" class="w-full rounded-lg shadow-md"/>
                    </div>
                </div>
            </section>

            {{-- Products grid --}}
            <section id="products">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Featured Products</h2>
                    <a href="#" class="text-sm text-red-600 hover:text-red-700 font-medium">View all →</a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    {{-- Product 1 --}}
                    <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://via.placeholder.com/400x300?text=Product+1" alt="Product 1" class="w-full h-48 object-cover"/>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Classic T-Shirt</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Comfortable cotton tee</p>
                            <div class="flex items-center justify-between">
                                <div class="text-xl font-bold text-gray-900 dark:text-white">$19.99</div>
                                <button class="px-4 py-2 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-md text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-100 transition">Add to Cart</button>
                            </div>
                        </div>
                    </article>

                    {{-- Product 2 --}}
                    <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://via.placeholder.com/400x300?text=Product+2" alt="Product 2" class="w-full h-48 object-cover"/>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Sneakers</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Everyday casual shoes</p>
                            <div class="flex items-center justify-between">
                                <div class="text-xl font-bold text-gray-900 dark:text-white">$49.99</div>
                                <button class="px-4 py-2 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-md text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-100 transition">Add to Cart</button>
                            </div>
                        </div>
                    </article>

                    {{-- Product 3 --}}
                    <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://via.placeholder.com/400x300?text=Product+3" alt="Product 3" class="w-full h-48 object-cover"/>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Leather Wallet</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Premium leather</p>
                            <div class="flex items-center justify-between">
                                <div class="text-xl font-bold text-gray-900 dark:text-white">$29.99</div>
                                <button class="px-4 py-2 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-md text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-100 transition">Add to Cart</button>
                            </div>
                        </div>
                    </article>

                    {{-- Product 4 --}}
                    <article class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <img src="https://via.placeholder.com/400x300?text=Product+4" alt="Product 4" class="w-full h-48 object-cover"/>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1 text-gray-900 dark:text-white">Ceramic Mug</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">Handmade mug</p>
                            <div class="flex items-center justify-between">
                                <div class="text-xl font-bold text-gray-900 dark:text-white">$12.00</div>
                                <button class="px-4 py-2 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-md text-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-100 transition">Add to Cart</button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <footer class="max-w-6xl mx-auto p-6 mt-12 border-t border-gray-200 dark:border-gray-700 text-center text-sm text-gray-600 dark:text-gray-400">
            &copy; {{ date('Y') }} {{ config('app.name', 'Mini Shop') }} — Demo E-commerce Site
        </footer>
    </body>
</html>
