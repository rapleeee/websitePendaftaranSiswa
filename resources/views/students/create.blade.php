<x-app-layout>

    <div>
        <h1 class="text-center text-white text-2xl font-bold mb-6 mt-6">
         Data Pendaftaran Calon Peserta Didik Baru Sekolah Pesat IT XPRO
        </h1>
    </div>

    <div class="max-w-full mx-auto bg-transparent p-24 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-white">Pendaftaran Siswa Baru</h1>

        <!-- Pesan Error Validasi -->
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulir Pendaftaran -->
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-white font-semibold mb-2">
                    Nama lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" name="name" id="name" placeholder="Nama lengkap" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500 placeholder-gray-400" required>
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-white font-semibold mb-2">
                    Jenis Kelamin <span class="text-red-500">*</span>
                </label>
                <select name="gender" id="gender" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-white font-semibold mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" id="email" placeholder="Your email address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500 placeholder-gray-400" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-white font-semibold mb-2">
                    Nomor Telepon <span class="text-red-500">*</span>
                </label>
                <input type="text" name="phone" id="phone" placeholder="Your phone number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500 placeholder-gray-400" required>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-white font-semibold mb-2">
                    Alamat Domisili <span class="text-red-500">*</span>
                </label>
                <input type="text" name="address" id="address" placeholder="Alamat Lengkap" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500 placeholder-gray-400" required>
            </div>

            <div class="mb-4">
                <label for="school_origin" class="block text-white font-semibold mb-2">
                    Asal Sekolah <span class="text-red-500">*</span>
                </label>
                <input type="text" name="school_origin" id="school_origin" placeholder="Asal Sekolah Kamu" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500 placeholder-gray-400" required>
            </div>

            <div class="mb-4">
                <label for="unit" class="block text-white font-semibold mb-2">
                    Pilih Jurusan <span class="text-red-500">*</span>
                </label>
                <select name="unit" id="unit" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                    <option value="DKV">DKV</option>
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="registration_type" class="block text-white font-semibold mb-2">
                    Jenis Pendaftaran <span class="text-red-500">*</span>
                </label>
                <select name="registration_type" id="registration_type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                    <option value="Baru">Baru</option>
                    <option value="Pindahan">Pindahan</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                Daftar Sekarang
            </button>
        </form>
    </div>
</x-app-layout>
