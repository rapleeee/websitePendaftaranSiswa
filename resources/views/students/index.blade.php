<x-app-layout>

<section class="bg-gray-50 dark:bg-gray-900 mt-6 mb-6 flex items-center">
    <div class="px-4 mx-auto lg:px-12 w-full">
        <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                <!-- Form Pencarian -->
                <div class="w-full md:w-1/2">
                    <form class="flex items-center" method="GET" action="{{ route('students.index') }}">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="search" value="{{ request('search') }}" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search by name">
                        </div>
                    </form>
                </div>

                <!-- Form Filter -->
                <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                    <!-- Filter jenis kelamin -->
                    <form method="GET" action="{{ route('students.index') }}">
                        <select name="gender" class="text-sm border rounded-lg">
                            <option value="">All</option>
                            <option value="Laki-laki" {{ request('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ request('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>

                        <!-- Filter jenis pendaftaran -->
                        <select name="registration_type" class="text-sm p-2 rounded-lg">
                            <option value="">All</option>
                            <option value="Baru" {{ request('registration_type') == 'Baru' ? 'selected' : '' }}>Baru</option>
                            <option value="Pindahan" {{ request('registration_type') == 'Pindahan' ? 'selected' : '' }}>Pindahan</option>
                        </select>

                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Filter</button>
                    </form>
                </div>

                <!-- Tombol Daftar Siswa Baru -->
                <div>
                    <a href="{{ route('students.create') }}" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Daftar Siswa Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="px-4 mx-auto lg:px-12 w-full">
    <div class="bg-gray-800 p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-300">Daftar Siswa Terdaftar</h1>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel siswa terdaftar -->
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Jenis Kelamin</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Telepon</th>
                    <th class="py-3 px-6 text-left">Asal Sekolah</th>
                    <th class="py-3 px-6 text-left">Unit Tujuan</th>
                    <th class="py-3 px-6 text-left">Jenis Pendaftaran</th>
                    <th class="py-3 px-6 text-left">Aksi</th> <!-- Kolom untuk aksi (hapus) -->
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($students as $student)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6">{{ $student->name }}</td>
                        <td class="py-3 px-6">{{ $student->gender }}</td>
                        <td class="py-3 px-6">{{ $student->email }}</td>
                        <td class="py-3 px-6">{{ $student->phone }}</td>
                        <td class="py-3 px-6">{{ $student->school_origin }}</td>
                        <td class="py-3 px-6">{{ $student->unit }}</td>
                        <td class="py-3 px-6">{{ $student->registration_type }}</td>
                        <td class="py-3 px-6">
                            <!-- Tombol Hapus dengan konfirmasi -->
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus siswa ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


</x-app-layout>
