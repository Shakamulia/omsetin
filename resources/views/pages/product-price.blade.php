@extends('layout.app') <!-- Gunakan layout utama -->

@section('title', 'product-price - Omsetin')

@section('content')

<section class="bg-white py-12 px-4 md:px-12">
    <div class="text-center mb-12">
        <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">
            Aplikasi Kasir Dengan Fitur Lengkap Tanpa Biaya Langganan
        </h2>
        <p class="text-gray-500 mt-2 max-w-xl mx-auto">
            Temukan Paket Yang Paling Tepat Untuk Memajukan Bisnismu Dengan Berbagai Pilihan Harga Terbaik.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        @for ($i = 0; $i < 8; $i++)
            <div class="border rounded-xl shadow hover:shadow-lg transition duration-300 bg-white p-6 flex flex-col">
                <img src="https://dummyimage.com/300x600/ccc/000&text=Mockup" alt="Mockup" class="h-64 object-contain mx-auto mb-4" />

                <h3 class="text-sm font-bold text-gray-900">OMSETIN DIGITAL</h3>
                <p class="text-red-600 font-semibold text-md mt-1">RP. 99.000</p>
                <p class="text-gray-600 text-sm mt-3 leading-relaxed flex-grow">
                    Aplikasi Kasirmu Dengan Fitur Basic Yang Cocok Untuk Berbagai Jenis Usaha Yang Hanya Membutuhkan Kemudahan Proses Catat Dan Cetak Struk Untuk Kecepatan Transaksi Di Bisnisnya.
                </p>

                <div class="flex justify-between items-center mt-6">
                    <button class="bg-green-700 hover:bg-green-800 text-white text-xs px-4 py-2 rounded-md font-semibold">
                        BELI SEKARANG
                    </button>
                    <a href="#" class="text-sm text-gray-600 hover:underline">Link Detail</a>
                </div>
            </div>
        @endfor

        {{-- Slot CTA Khusus --}}
        <div class="border rounded-xl p-6 bg-white flex items-center justify-center text-center">
            <div>
                <h4 class="text-lg font-bold text-gray-900">Tunggu Apalagi Beli Sekarang Juga!</h4>
                <p class="text-gray-500 mt-2">Jadikan Pengelolaan Transaksi Kasir Semakin Mudah, Profesional Dan Bebas Ribet!</p>
            </div>
        </div>
    </div>
</section>


@endsection
