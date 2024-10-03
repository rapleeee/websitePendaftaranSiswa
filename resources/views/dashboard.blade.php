<x-app-layout>

    <section class="bg-white dark:bg-gray-900 mt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mx-auto">
                <div class="flex flex-col-reverse space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 items-center">
                    <div class="mt-4 md:mt-0 sm:w-1/2">
                        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">SMK Pesat IT XPRO</p>
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Jadi IT Expert dan Profesional Bersertifikasi Internasional
                        </h2>
                        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                            Sekolah Umum Berbasis Keagamaan, Berkarakter Akhlak Mulia, Pilihan Anak – Anak Terpilih
                            untuk Menjadi Seorang Profesional di dunia pekerjaan
                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 flex justify-center">
                        <img src="img/home-img.png" alt="Logo Pesat" class="w-full h-auto max-w-xs">
                    </div>
                </div>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('students.create') }}"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Daftar Sekarang
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
    <div class="text-center mb-8">
        <h2 class="text-sm font-medium text-gray-500">SMK INFORMATIKA PESAT IT XPRO</h2>
        <h2 class="text-4xl font-bold text-white mt-2">3 Program Keahlian</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-gray-800 rounded-lg shadow-lg p-6">
        <img src="img/dkv.jpg" alt="Our first office" class="w-full h-40 object-cover rounded-lg">
        <h3 class="text-xl font-semibold text-white mt-6">Desain Komunikasi Visual</h3>
        <p class="text-gray-500 mb-4">
            Berfokus pada kompetensi di bidang Desain, Fotografi, Sinematografi, 3D Modelling, dan Visual Effect,
            Lulusan dapat bekerja sebagai Designer, Sinematografer, 3D Artist dan Visual Effect.
        </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-800 rounded-lg shadow-lg p-6">
            <img src="img/tkj.jpg" alt="Our first office" class="w-full h-40 object-cover rounded-lg">
            <h3 class="text-xl font-semibold text-white mt-6">Teknik Komputer Jaringan</h3>
            <p class="text-gray-500 mb-4">
                Berfokus pada kompetensi di bidang Engineering, dan Network Infrastruktur. Lulusan dapat bekerja sebagai
                IT Support, Server Administrator, Cyber Security dan Network Engineer.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-gray-800 rounded-lg shadow-lg p-6">
            <img src="img/rpl.jpg" alt="Our first office" class="w-full h-40 object-cover rounded-lg">
            <h3 class="text-xl font-semibold text-white mt-6">Rekayasa Perangkat Lunak</h3>
            <p class="text-gray-500 mb-4">
                Berfokus pada kompetensi siswa di bidang : Website, Aplikasi berbasis Dekstop, dan Android.
                Lulusan dapat bekerja sebagai Developer Application.
            </p>
        </div>
    </div>
</section>

</x-app-layout>
