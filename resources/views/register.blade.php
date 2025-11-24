<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Seller — {{ config('app.name', 'Campus Market') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen p-6">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-slate-900 text-3xl font-semibold mb-2">REGISTER AS SELLER</h1>
            <p class="text-sm text-gray-600 mt-2">Fill in the form below to register your store</p>
        </div>

        <div class="p-6 sm:p-8 rounded-2xl bg-white border border-gray-200 shadow-sm">
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Data Toko -->
                <div class="space-y-4">
                    <h2 class="text-slate-900 text-lg font-semibold border-b border-slate-300 pb-2 mb-4">Store Information</h2>
                    
                    <div>
                        <label for="nama_toko" class="text-slate-900 text-sm font-medium mb-2 block">
                            Store Name<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_toko" 
                            name="nama_toko"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter store name"
                            required
                        >
                    </div>

                    <div>
                        <label for="deskripsi_singkat" class="text-slate-900 text-sm font-medium mb-2 block">
                            Short Description
                        </label>
                        <input 
                            type="text" 
                            id="deskripsi_singkat" 
                            name="deskripsi_singkat"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Brief description of your store"
                        >
                    </div>
                </div>

                <!-- Data PIC -->
                <div class="space-y-4">
                    <h2 class="text-slate-900 text-lg font-semibold border-b border-slate-300 pb-2 mb-4">Person In Charge (PIC)</h2>
                    
                    <div>
                        <label for="nama_pic" class="text-slate-900 text-sm font-medium mb-2 block">
                            PIC Name<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_pic" 
                            name="nama_pic"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter PIC name"
                            required
                        >
                    </div>

                    <div>
                        <label for="no_hp_pic" class="text-slate-900 text-sm font-medium mb-2 block">
                            Phone Number<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="no_hp_pic" 
                            name="no_hp_pic"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter phone number"
                            required
                        >
                    </div>

                    <div>
                        <label for="email_pic" class="text-slate-900 text-sm font-medium mb-2 block">
                            Email<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email_pic" 
                            name="email_pic"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter email address"
                            required
                        >
                    </div>
                </div>

                <!-- Alamat PIC -->
                <div class="space-y-4">
                    <h2 class="text-slate-900 text-lg font-semibold border-b border-slate-300 pb-2 mb-4">Address</h2>
                    
                    <div>
                        <label for="jalan" class="text-slate-900 text-sm font-medium mb-2 block">
                            Street<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="jalan" 
                            name="jalan"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter street address"
                            required
                        >
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="rt" class="text-slate-900 text-sm font-medium mb-2 block">
                                RT<span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="rt" 
                                name="rt"
                                class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                                placeholder="RT"
                                required
                            >
                        </div>

                        <div>
                            <label for="rw" class="text-slate-900 text-sm font-medium mb-2 block">
                                RW<span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="rw" 
                                name="rw"
                                class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                                placeholder="RW"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="kelurahan" class="text-slate-900 text-sm font-medium mb-2 block">
                            Kelurahan<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kelurahan" 
                            name="kelurahan"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter kelurahan"
                            required
                        >
                    </div>

                    <div>
                        <label for="kab_kota" class="text-slate-900 text-sm font-medium mb-2 block">
                            City/Regency<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kab_kota" 
                            name="kab_kota"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter city/regency"
                            required
                        >
                    </div>

                    <div>
                        <label for="provinsi" class="text-slate-900 text-sm font-medium mb-2 block">
                            Province<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="provinsi" 
                            name="provinsi"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter province"
                            required
                        >
                    </div>
                </div>

                <!-- Dokumen Identitas PIC -->
                <div class="space-y-4">
                    <h2 class="text-slate-900 text-lg font-semibold border-b border-slate-300 pb-2 mb-4">Identity Documents</h2>
                    
                    <div>
                        <label for="no_ktp_pic" class="text-slate-900 text-sm font-medium mb-2 block">
                            ID Card Number<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="no_ktp_pic" 
                            name="no_ktp_pic"
                            class="w-full text-slate-900 text-sm border border-slate-300 px-4 py-3 rounded-md outline-blue-600"
                            placeholder="Enter ID card number"
                            required
                        >
                    </div>

                    <div>
                        <label for="foto_pic" class="text-slate-900 text-sm font-medium mb-2 block">
                            Photo (jpg/png, ≤2MB)
                        </label>
                        <input 
                            type="file" 
                            id="foto_pic" 
                            name="foto_pic"
                            accept="image/jpeg,image/png"
                            class="w-full text-sm text-slate-900 border border-slate-300 rounded-md file:mr-4 file:py-3 file:px-4 file:border-0 file:text-sm file:font-medium file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200"
                        >
                        <p class="mt-1 text-xs text-gray-500">Format: JPG/PNG, Max: 2MB</p>
                    </div>

                    <div>
                        <label for="file_ktp" class="text-slate-900 text-sm font-medium mb-2 block">
                            ID Card File (jpg/png/pdf, ≤5MB)
                        </label>
                        <input 
                            type="file" 
                            id="file_ktp" 
                            name="file_ktp"
                            accept="image/jpeg,image/png,application/pdf"
                            class="w-full text-sm text-slate-900 border border-slate-300 rounded-md file:mr-4 file:py-3 file:px-4 file:border-0 file:text-sm file:font-medium file:bg-slate-100 file:text-slate-700 hover:file:bg-slate-200"
                        >
                        <p class="mt-1 text-xs text-gray-500">Format: JPG/PNG/PDF, Max: 5MB</p>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="!mt-8">
                    <button 
                        type="submit"
                        class="w-full py-3 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer"
                    >
                        Register as Seller
                    </button>
                </div>

                <p class="text-slate-900 text-sm !mt-6 text-center">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline ml-1 whitespace-nowrap font-semibold">Login here</a>
                </p>
            </form>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="/" class="text-sm text-gray-600 hover:underline">← Back to Home</a>
        </div>
    </div>
</body>
</html>
