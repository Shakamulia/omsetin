<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ secure_asset('img/omsetinv2.png') }}" alt="Omsetin Logo" class="h-8 w-full">
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-primary font-medium transition">Home</a>

                <!-- Dropdown -->
                <div class="relative" x-data="{ open: false }" @click="open = !open" @click.away="open = false">
                    <button class="text-gray-700 hover:text-primary font-medium transition flex items-center">
                        <span>Tipe Bisnis</span>
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50"
                        style="display: none;">
                        <a href="/omsetin-stok"
                            @click="open = false"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-primary">Omsetin Stok</a>
                        <a href="/omsetin-stok"
                            @click="open = false"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-primary">Omsetin Service</a>
                        <a href="/omsetin-stok"
                            @click="open = false"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-primary">Omsetin Laundry</a>
                        <a href="/omsetin-stok"
                            @click="open = false"
                            class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-primary">
                            Omsetin Basic</a>
                    </div>
                </div>

                <a href="/prices" class="text-gray-700 hover:text-primary font-medium transition">Harga</a>
                <a href="/help" class="text-gray-700 hover:text-primary font-medium transition">Bantuan</a>
                <a href="/contact-us" class="text-gray-700 hover:text-primary font-medium transition">Kontak Kami</a>
            </div>

            <!-- Tombol CTA & Mobile Menu Toggle -->
            <div class="flex items-center">
                <button
                    class="hidden md:inline-block bg-primary text-white px-6 py-2 font-semibold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    Coba Gratis
                </button>

                <!-- Tombol Mobile Menu -->
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden text-gray-500 hover:text-primary ml-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" class="md:hidden" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Beranda</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Fitur</a>

            <!-- Dropdown Mobile -->
            <div class="relative">
                <button @click="priceDropdownOpen = !priceDropdownOpen"
                    class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">
                    <span>Harga</span>
                    <svg class="w-5 h-5" :class="{ 'transform rotate-180': priceDropdownOpen }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="priceDropdownOpen" class="pl-4" style="display: none;">
                    <a href="/omsetin-stok"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Paket
                        Starter</a>
                    <a href="/omsetin-stok"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Paket
                        Bisnis</a>
                    <a href="/omsetin-stok"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Paket
                        Enterprise</a>
                    <a href="/omsetin-stok"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Perbandingan
                        Paket</a>
                </div>
            </div>

            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Testimoni</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Blog</a>
            <a href="/contact-us"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-blue-50">Bantuan</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium bg-gradient-to-r from-primary to-indigo-700 text-white text-center mt-2">Coba
                Gratis</a>
        </div>
    </div>
</nav>
