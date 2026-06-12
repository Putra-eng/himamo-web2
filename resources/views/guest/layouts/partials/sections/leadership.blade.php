<section id="leadership" class="py-24 bg-zinc-50 dark:bg-slate-950 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 dark:text-white font-mono tracking-tight">
                    LINEAGE OF <span class="text-teal-500">LEADERS</span>
                </h2>
                <p class="text-slate-500 dark:text-slate-400 mt-2">Rekam jejak kepemimpinan Ketua Himpunan Mahasiswa
                    Teknik Otomasi Manufaktur & Mekatronika.</p>
            </div>

            {{-- Navigasi Hint untuk User Layar Sentuh / Desktop --}}
            <div class="text-xs text-slate-400 font-mono hidden md:block">
                [ Geser Horizontal <i class='bx bx-right-arrow-alt'></i> ]
            </div>
        </div>

        {{-- CSS Scroll Snap Container --}}
        <div class="flex overflow-x-auto scrollbar-none snap-x snap-mandatory gap-6 pb-6">

            {{-- Array Pemimpin dari Alwan (2025/2026) hingga Adnan (2012/2013) --}}
            @php
                $leaders = [
                    [
                        'name' => 'Alwan Pramudia',
                        'period' => '2025 s/d 2026',
                        'nim' => '223442076',
                        'image' => 'img-leader-2025-2026.webp',
                    ],
                    [
                        'name' => 'Rifqiaqil Mufahir E',
                        'period' => '2024 s/d 2025',
                        'nim' => '222442020',
                        'image' => 'img-leader-2024-2025.webp',
                    ],
                    [
                        'name' => 'Farhan Ali Madani',
                        'period' => '2023 s/d 2024',
                        'nim' => '221441030',
                        'image' => 'img-leader-2023-2024.webp',
                    ],
                    [
                        'name' => 'Yugi Prasetara',
                        'period' => '2022 s/d 2023',
                        'nim' => '220441023',
                        'image' => 'img-leader-2022-2023.webp',
                    ],
                    [
                        'name' => 'Hery Ardiyanto',
                        'period' => '2021 s/d 2022',
                        'nim' => '219441010',
                        'image' => 'img-leader-2021-2022.webp',
                    ],
                    [
                        'name' => 'Sendi Dika Prasenda',
                        'period' => '2020 s/d 2021',
                        'nim' => '218441046',
                        'image' => 'img-leader-2020-2021.webp',
                    ],
                    [
                        'name' => 'Riyadh Tsaniyadi D',
                        'period' => '2019 s/d 2020',
                        'nim' => '217341068',
                        'image' => 'img-leader-2019-2020.webp',
                    ],
                    [
                        'name' => 'Sulthan M . F',
                        'period' => '2018 s/d 2019',
                        'nim' => '216341069',
                        'image' => 'img-leader-2018-2019.webp',
                    ],
                    [
                        'name' => 'Eko Rahayu Tali Jiwa',
                        'period' => '2017 s/d 2018',
                        'nim' => '215341004',
                        'image' => 'img-leader-2017-2018.webp',
                    ],
                    [
                        'name' => 'Saptianhadi',
                        'period' => '2016 s/d 2017',
                        'nim' => '214341047',
                        'image' => 'img-leader-2016-2017.webp',
                    ],
                    [
                        'name' => 'Jefri Maulana',
                        'period' => '2015 s/d 2016',
                        'nim' => '210345003',
                        'image' => 'img-leader-pria.webp',
                    ],
                    [
                        'name' => 'Mohamed Iqbal',
                        'period' => '2014 s/d 2015',
                        'nim' => '212341042',
                        'image' => 'img-leader-2014-2015.webp',
                    ],
                    [
                        'name' => 'Dimas Nugraha',
                        'period' => '2013 s/d 2014',
                        'nim' => '211341007',
                        'image' => 'img-leader-2013-2014.webp',
                    ],
                    [
                        'name' => 'Adnan Maulana',
                        'period' => '2012 s/d 2013',
                        'nim' => '210345003',
                        'image' => 'img-leader-pria.webp',
                    ],
                ];
            @endphp

            @foreach ($leaders as $leader)
                <div
                    class="w-[280px] md:w-[320px] flex-shrink-0 snap-start bg-white dark:bg-slate-900 border border-slate-200 dark:border-white/5 p-6 rounded-2xl relative overflow-hidden group shadow-sm">
                    <div class="w-full h-48 bg-slate-100 dark:bg-slate-950 rounded-xl overflow-hidden mb-4 relative">
                        {{-- Ilustrasi Pengganti Jika Gambar Kosong/Mati --}}
                        <div
                            class="absolute inset-0 flex items-center justify-center text-slate-300 dark:text-slate-800">
                            <i class='bx bx-user-circle text-7xl'></i>
                        </div>
                        {{-- File gambar disesuaikan slug nama --}}
                        <img src="{{ asset('assets-guest/img/' . $leader['image']) }}" alt="{{ $leader['name'] }}"
                            class="w-full h-full object-cover relative z-10" onerror="this.style.opacity='0'">
                    </div>
                    <span class="text-[10px] font-bold text-teal-500 tracking-widest uppercase block mb-1">Ketua
                        Himpunan</span>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white font-mono line-clamp-1">
                        {{ $leader['name'] }}</h3>

                    <div
                        class="mt-4 pt-4 border-t border-slate-100 dark:border-white/5 space-y-1 text-xs text-slate-500 dark:text-slate-400 font-mono">
                        <p>Periode: {{ $leader['period'] }}</p>
                        <p>NIM: {{ $leader['nim'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Tambahkan utility CSS ini di app.css untuk menghilangkan scrollbar bawaan browser --}}
<style>
    .scrollbar-none::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-none {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
