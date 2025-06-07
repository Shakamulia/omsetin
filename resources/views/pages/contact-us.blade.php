@extends('layout.app') <!-- Gunakan layout utama -->

@section('title', 'Home - Omsetin')

@section('content')
<section class="relative w-full py-16 bg-[url('/images/topography-pattern.svg')] bg-cover bg-center">
    <!-- Center Rectangle Box -->
    <div class="max-w-6xl mx-auto bg-[#205B50] relative rounded-2xl overflow-hidden px-6 md:px-16 py-12 md:py-16 z-10">
        <!-- Dot Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('/images/dot-pattern.svg')] opacity-30 z-0"></div>

        <div class="relative z-10 flex flex-col md:flex-row items-center gap-10">
            <!-- Left: Image -->
            <div class="w-full md:w-1/2">
                <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a"
                     alt="Contact Person"
                     class="rounded-xl w-full h-[400px] object-cover shadow-lg">
            </div>

            <!-- Right: Text Info -->
            <div class="w-full md:w-1/2 text-white">
                <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-gray-100 mb-6">
                    Apapun yang ada pertanyaan terkait mengenai omsetin pasti akan kami jawab
                </p>
                <p class="text-sm text-gray-200 mb-6 leading-relaxed">
                    Jl. Arciko Gg Harapan II No 60 Rt 01 Rw 13<br />
                    Kel Sayang Cianjur, kota cianjur, jawa barat
                </p>

                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2 0v.01L12 13 20 4.01V4H4zm0 16h16V6.236l-8 7.999-8-8V20z"/>
                        </svg>
                        omsetin@gmail.com
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.004 1.004 0 011.11-.21 11.36 11.36 0 004.52.9 1 1 0 011 1v3.4a1 1 0 01-1 1A18 18 0 013 5a1 1 0 011-1h3.4a1 1 0 011 1c0 1.59.31 3.11.9 4.52a1.003 1.003 0 01-.21 1.11l-2.2 2.2z"/>
                        </svg>
                        +6283126459845
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-white w-5 h-5 inline-block">@</span>
                        @omsetin.digital
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-white w-5 h-5 inline-block">🎵</span>
                        @omsetin.digital
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-white w-5 h-5 inline-block">📘</span>
                        omsetin.digital
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
