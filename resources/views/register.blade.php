<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Data Penjual (Toko) — {{ config('app.name', 'Campus Market') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen p-6">
    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-6">
            <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-2">
                Formulir Registrasi Data Penjual (Toko)
            </h1>
            <div class="border-t-2 border-gray-900 dark:border-white my-4"></div>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Data Toko -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="nama_toko" class="block text-gray-900 dark:text-white font-medium">
                            Nama Toko<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_toko" 
                            name="nama_toko"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="deskripsi_singkat" class="block text-gray-900 dark:text-white font-medium">
                            Deskripsi Singkat
                        </label>
                        <input 
                            type="text" 
                            id="deskripsi_singkat" 
                            name="deskripsi_singkat"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                        >
                    </div>
                </div>
            </div>

            <!-- Data PIC -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b-2 border-gray-900 dark:border-white">
                    Data PIC
                </h2>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="nama_pic" class="block text-gray-900 dark:text-white font-medium">
                            Nama PIC<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_pic" 
                            name="nama_pic"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="no_hp_pic" class="block text-gray-900 dark:text-white font-medium">
                            No HP PIC<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="no_hp_pic" 
                            name="no_hp_pic"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="email_pic" class="block text-gray-900 dark:text-white font-medium">
                            Email PIC<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email_pic" 
                            name="email_pic"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>
                </div>
            </div>

            <!-- Alamat PIC -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b-2 border-gray-900 dark:border-white">
                    Alamat PIC
                </h2>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="jalan" class="block text-gray-900 dark:text-white font-medium">
                            Jalan<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="jalan" 
                            name="jalan"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="rt" class="block text-gray-900 dark:text-white font-medium">
                            RT<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="rt" 
                            name="rt"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="rw" class="block text-gray-900 dark:text-white font-medium">
                            RW<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="rw" 
                            name="rw"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="kelurahan" class="block text-gray-900 dark:text-white font-medium">
                            Kelurahan<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kelurahan" 
                            name="kelurahan"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="kab_kota" class="block text-gray-900 dark:text-white font-medium">
                            Kab/Kota<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kab_kota" 
                            name="kab_kota"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="provinsi" class="block text-gray-900 dark:text-white font-medium">
                            Provinsi<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="provinsi" 
                            name="provinsi"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>
                </div>
            </div>

            <!-- Dokumen Identitas PIC -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b-2 border-gray-900 dark:border-white">
                    Dokumen Identitas PIC
                </h2>
                <div class="space-y-4">
                    <div class="space-y-2">
                        <label for="no_ktp_pic" class="block text-gray-900 dark:text-white font-medium">
                            No. KTP PIC<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="no_ktp_pic" 
                            name="no_ktp_pic"
                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                            required
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="foto_pic" class="block text-gray-900 dark:text-white font-medium">
                            Foto PIC (jpg/png, ≤2MB)
                        </label>
                        <div>
                            <input 
                                type="file" 
                                id="foto_pic" 
                                name="foto_pic"
                                accept="image/jpeg,image/png"
                                class="block w-full text-sm text-gray-900 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-gray-700 dark:file:text-gray-300"
                            >
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Format: JPG/PNG, Max: 2MB</p>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="file_ktp" class="block text-gray-900 dark:text-white font-medium">
                            File KTP (jpg/png/pdf, ≤5MB)
                        </label>
                        <div>
                            <input 
                                type="file" 
                                id="file_ktp" 
                                name="file_ktp"
                                accept="image/jpeg,image/png,application/pdf"
                                class="block w-full text-sm text-gray-900 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-gray-700 dark:file:text-gray-300"
                            >
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Format: JPG/PNG/PDF, Max: 5MB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button 
                    type="submit"
                    class="px-6 py-2.5 bg-white border-2 border-gray-900 text-gray-900 dark:bg-gray-800 dark:border-white dark:text-white font-medium rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 transition"
                >
                    Registrasi Penjual
                </button>
            </div>
        </form>

        <!-- Back to Home -->
        <div class="text-center mt-8">
            <a href="/" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">← Back to Home</a>
        </div>
    </div>
</body>
</html>
