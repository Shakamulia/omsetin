@extends('layout.app') <!-- Gunakan layout utama -->

@section('title', 'Home - Omsetin')

@section('content')

<!-- Search Section -->
    <section class="bg-primary text-white py-10 px-4 rounded-lg relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">Hai, ada yang bisa kami bantu ?</h2>
            <div class="flex justify-center">
                <input type="text" placeholder="🔍 Mencari..." class="w-full md:w-3/4 px-6 py-3 rounded-l-full text-black bg-amber-50 focus:outline-none" />
                <button class="bg-green-800 px-6 py-3 rounded-r-full text-white hover:bg-green-700">Cari</button>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 mt-16 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="space-y-4 font-semibold text-gray-800">
            <p>Informasi Umum</p>
            <p>Pengiriman Paket</p>
            <p>Printer</p>
            <p>Scanner</p>
            <p>Cara Pembelian</p>
        </aside>

        <!-- FAQ List -->
        <main class="md:col-span-3 space-y-6">
            @for ($i = 0; $i < 10; $i++)
                <div class="border-b border-dashed py-2 text-blue-900 hover:underline cursor-pointer">
                    Apa saja fitur utama dari aplikasi POS Omsetin?
                </div>
            @endfor

            <!-- Pagination -->
            <div class="flex space-x-2 pt-4">
                <button class="bg-blue-500 text-white px-3 py-1 rounded">1</button>
                <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded hover:bg-gray-300">2</button>
                <button class="bg-gray-200 text-gray-600 px-3 py-1 rounded hover:bg-gray-300">3</button>
            </div>
        </main>
    </div>

    <!-- CTA Section -->
    <x-cta-footer></x-cta-footer>
@endsection
