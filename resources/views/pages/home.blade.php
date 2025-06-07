@extends('layout.app') <!-- Gunakan layout utama -->

@section('title', 'Home - Omsetin')

@section('content')
    <!-- Hero section -->
    <section class="relative min-h-[700px] overflow-hidden">
        {{-- resources/views/components/hero.blade.php --}}
        <div class="relative overflow-hidden bg-gradient-to-b from-white to-primary min-h-[700px]">
            <!-- 1. Background Curves -->
            <img src="{{ asset('img/gel7.jpg') }}" alt="Background Curves"
                class="absolute inset-0 w-full h-full opacity-20 object-cover pointer-events-none z-0" />

            {{-- 2. Container Utama --}}
            <div class="relative z-10 container mx-auto lg:mt-40 px-4 sm:px-6 lg:px-8 pt-24 pb-20 text-center">
                <!-- Judul Utama dengan vektor khusus di belakang teks 'Omzet Bisnis' -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-medium text-gray-900 leading-tight">
                    Tingkatkan
                    <span class="relative inline-block">
                        <img src="{{ asset('img/Vector-1.png') }}" alt="Highlight Vector"
                            class="absolute -bottom-5 -left-2 w-full h-full object-contain pointer-events-none z-0" />
                        <span class="relative z-10">Omzet Bisnis</span>
                    </span>
                    Anda dengan<br />
                    Aplikasi Kasir All-in-One
                </h1>

                <!-- Subjudul -->
                <p class="mt-4 lg:max-w-4xl mx-auto font-light text-lg sm:text-xl lg:text-2xl text-gray-600">
                    Kelola transaksi, stok, dan laporan penjualan hanya dari smartphone <br> Anda – cocok untuk UMKM dan
                    bisnis modern
                </p>

                <!-- Tombol CTA -->
                <div class="mt-12 ">
                    <a href="#"
                        class="inline-block w-[275px] h-[75px] bg-primary hover:bg-green-700 text-xl text-white font-medium py-6 px-8 transition">
                        Coba Gratis 14 Hari
                    </a>
                </div>
            </div>

            {{-- 3. Ilustrasi Handphone --}}
            <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    <img src="{{ asset('img/Phone.png') }}" alt="Phone Mockup OMSETin Stok"
                        class="w-72 sm:w-96 md:w-[28rem] lg:w-[32rem] object-contain drop-shadow-2xl" />
                </div>
            </div>

            {{-- 4. Ilustrasi Siluet --}}
            <img src="{{ asset('img/ilustrasi1.svg') }}" alt="Illustrasi Siluet Kiri"
                class="hidden lg:block z-10 absolute bottom-0 left-0 w-1/4 h-auto object-contain opacity-60" />
            <img src="{{ asset('img/ilustrasi2.svg') }}" alt="Illustrasi Siluet Kanan"
                class="hidden lg:block z-10 absolute bottom-0 right-0 w-1/4 h-auto object-contain opacity-60 transform" />
        </div>
    </section>

    <!-- Why us section -->

    <!-- Why Us 1 -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-48">
        <div class="flex flex-col-reverse lg:flex-row lg:items-center lg:gap-1.5">
            <!-- Teks -->
            <div class="mt-12 lg:mt-0 lg:w-1/2 flex flex-col justify-center">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-gray-900 leading-tight">
                    Kasir Tanpa Ribet,
                    <span class="block mt-2 text-primary">Untung Maksimal</span>
                </h2>
                <p class="mt-6 text-lg md:text-xl text-gray-600 max-w-lg">
                    Dirancang langsung oleh praktisi ritel online—agar setiap transaksi Anda lancar tanpa drama.
                </p>
                <a href="#"
                    class="mt-8 inline-block px-8 py-4 bg-primary hover:bg-primary-dark text-white font-medium  transition text-lg w-max">
                    Lihat Demo Transaksi
                </a>
            </div>

            <!-- Gambar -->
            <div class="flex justify-center lg:justify-end lg:w-1/2">
                <div class="relative">
                    <img src="{{ asset('img/why-us-mockup1.png') }}" alt="Contoh tampilan transaksi"
                        class="w-full max-w-md lg:max-w-2xl shadow-2xl transform lg:hover:scale-105 transition-transform duration-300">

                    <!-- Efek dekoratif -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-yellow-400 rounded-full -z-10 opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us 2 -->
    <section class="bg-gray-50">
        <div class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-48">
            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-16">
                <!-- Gambar -->
                <div class="flex justify-center lg:justify-start lg:w-1/2 pr-7">
                    <div class="relative">
                        <img src="{{ asset('img/why-us-mockup2.png') }}" alt="Tampilan fitur canggih"
                            class="w-full max-w-md lg:max-w-7xl transform lg:hover:scale-105 transition-transform duration-300">

                        <!-- Efek latar belakang -->
                        <div class="absolute -top-6 -left-6 w-full h-full bg-primary rounded-xl -z-10 opacity-10"></div>
                    </div>
                </div>

                <!-- Teks -->
                <div class="mt-12 lg:mt-0 lg:w-1/2 flex flex-col justify-center">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-gray-900 leading-tight">
                        Solusi Kasir Canggih,
                        <span class="block mt-2 text-primary">Bayar Sekali Seumur Hidup</span>
                    </h2>
                    <p class="mt-6 text-lg md:text-xl text-gray-600 max-w-lg">
                        Tidak ada biaya langganan—bayar satu kali, fokus urus omzet tanpa khawatir tagihan bulanan.
                    </p>
                    <a href="#"
                        class="mt-8 inline-block px-8 py-4 bg-primary hover:bg-primary-dark text-white font-medium  transition text-lg w-max">
                        Cek Paket & Harga
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <!-- Title -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span class="text-sm text-red-600 uppercase">solusi bisnis</span>
                    <h2 class="mt-1 text-3xl font-bold text-gray-900">
                        Pilihan Tepat <span class="border-b-4 border-red-600">Berbagai Jenis Bisnis</span>
                    </h2>
                    <p class="mt-2 text-gray-600">Ragam aplikasi yang cocok untuk semua wirausaha</p>
                </div>
                <!-- Controls -->
                <div class="space-x-2">
                    <button @click="prev()" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200">
                        &larr;
                    </button>
                    <button @click="next()" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200">
                        &rarr;
                    </button>
                </div>
            </div>

            <!-- Carousel -->
            <div x-data="carousel()`" class="relative">
                <div class="flex space-x-6 overflow-hidden" x-ref="viewport">
                    @foreach ($variants as $variant)
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                        <div class="flex-shrink-0 w-64 lg:w-80 bg-green-900 rounded-lg p-4 text-white">
                            <h3 class="text-2xl font-extrabold mb-2">{{ $variant['title'] }}</h3>
                            <p class="mb-4 text-sm opacity-80">{{ $variant['subtitle'] }}</p>
                            <img src="{{ asset($variant['image']) }}" alt="{{ $variant['title'] }}"
                                class="rounded-lg shadow-lg">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Alpine Carousel Script -->
        <script>
            function carousel() {
                return {
                    pos: 0,
                    width: 0,
                    init() {
                        // Ambil elemen card pertama dari viewport
                        const first = this.$refs.viewport.children[0];
                        // Hitung lebar card + margin kanan (gap Tailwind space-x-6 = 1.5rem)
                        const style = getComputedStyle(first);
                        const gap = parseFloat(style.marginRight);
                        this.width = first.clientWidth + gap;
                    },
                    prev() {
                        this.pos = Math.max(this.pos - this.width, 0);
                        this.$refs.viewport.scrollTo({
                            left: this.pos,
                            behavior: 'smooth'
                        });
                    },
                    next() {
                        const max = this.$refs.viewport.scrollWidth - this.$refs.viewport.clientWidth;
                        this.pos = Math.min(this.pos + this.width, max);
                        this.$refs.viewport.scrollTo({
                            left: this.pos,
                            behavior: 'smooth'
                        });
                    }
                }
            }
        </script>
    </section>

    <!-- Fitur Unggulan Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Judul Section --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                    Fitur <span class="text-primary underline decoration-blue-400">Unggulan</span> yang Membantu Bisnis
                    <br>
                    <span class="text-primary underline decoration-blue-400">Anda Bekerja Lebih Cepat</span>
                </h2>
                <p class="mt-4 text-gray-500 text-lg max-w-2xl mx-auto">
                    Semua kebutuhan kasir dalam satu aplikasi: dari input transaksi hingga analisis omzet. Lengkap, ringkas,
                    dan intuitif
                </p>
            </div>

            {{-- Grid Fitur --}}
            <div class="grid gap-12 md:grid-cols-3 md:grid-rows-2 items-center border-2 border-gray-200">
                {{-- Fitur 1 - Text Kiri, Gambar Kanan --}}
                <div class="border-2 border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900">
                        Transaksi <span class="text-yellow-400 font-bold">Cepat</span> & Sederhana
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Tambah produk cukup ketuk nama atau scan barcode, lalu proses pembayaran langsung selesai tanpa
                        ribet. Semua metode—tunai, kartu debit/kredit, dan e-wallet—tersedia dalam satu tampilan kasir.
                        Struk tercetak otomatis atau dikirim ke WhatsApp.
                    </p>
                </div>
                <div class="flex justify-center border-2 border-gray-200">
                    <img src="{{ asset('img/mockup-phone-right.png') }}" alt="Fitur Transaksi"
                        class="w-64 sm:w-80 md:w-96">
                </div>

                {{-- Fitur 2 - Gambar Kiri, Text Kanan --}}
                <div class="flex justify-center order-2 md:order-1 col-span-2 border-2 border-gray-200">
                    <img src="{{ asset('img/mockup-phone-left.png') }}" alt="Fitur Stok" class="w-64 sm:w-80 md:w-96">
                </div>
                <div class="order-1 md:order-2 border-2 border-gray-200">
                    <h3 class="text-xl font-medium text-gray-900">
                        <span class="text-teal-500 font-bold">Inventori</span> & Stok Otomatis
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Penjualan langsung memotong stok secara real-time. Sistem juga memberi peringatan saat stok menipis,
                        cukup dari aplikasi—tanpa repot hitung manual.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 md:py-24 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Fitur Unggulan yang Membantu Bisnis Anda Bekerja Lebih Cepat
                </h2>
                <p class="text-lg md:text-xl text-gray-600">
                    Semua kebutuhan kasir dalam satu aplikasi: dari input transaksi hingga analisis omset. Lengkap, ringkas,
                    dan intuitif
                </p>
            </div>

            <!-- Grid 3x2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                <!-- Fitur 1 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-bolt text-green-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Transaksi Cepat & Sederhana</h3>
                            <p class="text-gray-600">
                                Tambah produk cukup ketuk nama atau scan barcode, lalu proses pembayaran langsung selesai
                                tanpa ribet. Semua metode—tunai, kartu debit/kredit, dan e-wallet—tersedia dalam satu
                                tampilan kasir. Struk tercetak otomatis atau kirim e-struk ke WhatsApp pelanggan dalam
                                sekelap.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Laporan & Analitik Ringkas</h3>
                            <p class="text-gray-600">
                                Lihat ringkasan omzet harian, item terlaris, dan margin keuntungan dalam satu dashboard
                                intuitif. Grafik sederhana memudahkan kamu mengambil keputusan cepat—tanpa perlu tunggu
                                akhir bulan atau repot buka spreadsheet panjang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-boxes text-purple-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Inventori & Stok Otomatis</h3>
                            <p class="text-gray-600">
                                Setiap penjualan langsung memotong stok secara real-time—tidak perlu hitung manual. Sistem
                                akan mengirimkan peringatan saat bahan atau produk mulai menipis, sehingga kamu bisa restock
                                sebelum kehabisan. Cukup satu aplikasi, semua stok terpantau rapi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 4 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-users text-yellow-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Manajemen Pelanggan</h3>
                            <p class="text-gray-600">
                                Kelola database pelanggan dengan fitur membership dan poin belanja. Kirim promo
                                personalisasi berdasarkan riwayat pembelian untuk meningkatkan loyalitas pelanggan dan omzet
                                berulang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 5 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-red-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-cloud text-red-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Cloud Sync & Backup</h3>
                            <p class="text-gray-600">
                                Data bisnis Anda tersinkronisasi otomatis ke cloud dan aman dari kehilangan. Akses laporan
                                penjualan dari mana saja, kapan saja melalui dashboard web atau aplikasi mobile.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 6 -->
                <div
                    class="bg-white rounded-xl shadow-lg p-6 md:p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-start">
                        <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                            <i class="fas fa-sync-alt text-indigo-600 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Multi-Device Support</h3>
                            <p class="text-gray-600">
                                Gunakan aplikasi di beberapa perangkat sekaligus dengan sinkronisasi real-time. Kasir utama
                                di counter, pemilik bisa pantau penjualan dari smartphone, dan staff gudang update stok dari
                                tablet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16">
                <a href="#"
                    class="inline-block bg-primary hover:bg-secondary text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg text-lg">
                    Lihat Semua Fitur
                </a>
            </div>
        </div>
    </section>

    
    <section class="max-w-6xl mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold">
                <span class="bg-yellow-400 px-2 text-black">TESTIMONI</span>
            </h2>
            <p class="text-gray-500 mt-2">
                Dengarkan apa kata para pengguna Kasmini yang sudah membuktikan betapa hebatnya Aplikasi Kasmini dalam
                membantu proses bisnis mereka
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Testimoni 1 -->
            <div class="flex flex-col md:flex-row bg-green-900 text-white p-6">
                <div class="md:w-1/3 flex items-center justify-center">
                    <img src="/images/testimonials/sarah.jpg" alt="Sarah" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="md:w-2/3 mt-4 md:mt-0 md:ml-6">
                    <p class="mb-4">The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12
                        months battery life and modern design.</p>
                    <div>
                        <p class="font-semibold">Greg-heiger, Co-Founder</p>
                        <p class="text-sm">Sarah, SEO</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="flex flex-col md:flex-row bg-white text-black p-6 border border-gray-300">
                <div class="md:w-1/3 flex items-center justify-center">
                    <img src="/images/testimonials/sarah.jpg" alt="Sarah" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="md:w-2/3 mt-4 md:mt-0 md:ml-6">
                    <p class="mb-4 font-semibold">The Apollotech B340 is an affordable wireless mouse with reliable
                        connectivity, 12 months battery life and modern design.</p>
                    <div>
                        <p class="font-semibold">Greg-heiger, Co-Founder</p>
                        <p class="text-sm text-gray-500">Sarah, SEO</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="flex flex-col md:flex-row bg-white text-black p-6 border border-gray-300">
                <div class="md:w-1/3 flex items-center justify-center">
                    <img src="/images/testimonials/sarah.jpg" alt="Sarah" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="md:w-2/3 mt-4 md:mt-0 md:ml-6">
                    <p class="mb-4">The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12
                        months battery life and modern design.</p>
                    <div>
                        <p class="font-semibold">Greg-heiger, Co-Founder</p>
                        <p class="text-sm text-gray-500">Sarah, SEO</p>
                    </div>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="flex flex-col md:flex-row bg-green-900 text-white p-6">
                <div class="md:w-1/3 flex items-center justify-center">
                    <img src="/images/testimonials/sarah.jpg" alt="Sarah" class="w-20 h-20 rounded-full object-cover">
                </div>
                <div class="md:w-2/3 mt-4 md:mt-0 md:ml-6">
                    <p class="mb-4">The Apollotech B340 is an affordable wireless mouse with reliable connectivity, 12
                        months battery life and modern design.</p>
                    <div>
                        <p class="font-semibold">Greg-heiger, Co-Founder</p>
                        <p class="text-sm">Sarah, SEO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-footer></x-cta-footer>



@endsection
