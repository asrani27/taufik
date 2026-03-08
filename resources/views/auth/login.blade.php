<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMKN 2 SIMPANG EMPAT Tanah Bumbu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <!-- School Logo and Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-white rounded-full shadow-lg mb-4">
                <svg class="w-16 h-16 text-blue-900" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">SMKN 2 SIMPANG EMPAT</h1>
            <p class="text-yellow-400 text-lg font-semibold">Tanah Bumbu</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-blue-900 px-8 py-6">
                <h2 class="text-2xl font-bold text-white text-center">Selamat Datang</h2>
                <p class="text-blue-200 text-center mt-1">Silakan login untuk melanjutkan</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="px-8 py-8">
                @csrf

                <!-- Username Field -->
                <div class="mb-6">
                    <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-900 focus:outline-none transition-colors"
                            placeholder="Masukkan username" required autofocus>
                    </div>
                    @error('username')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <input type="password" id="password" name="password"
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-900 focus:outline-none transition-colors"
                            placeholder="Masukkan password" required>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 text-blue-900 border-gray-300 rounded focus:ring-blue-900">
                        <span class="ml-2 text-gray-600">Ingat saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-900 to-blue-800 text-white font-bold py-3 px-4 rounded-lg hover:from-blue-800 hover:to-blue-700 transition-all transform hover:scale-105 shadow-lg">
                    Masuk
                </button>
            </form>

            <!-- Footer -->
            <div class="bg-gray-50 px-8 py-4 border-t">
                <p class="text-center text-gray-600 text-sm">
                    © 2026 SMKN 2 SIMPANG EMPAT Tanah Bumbu
                </p>
            </div>
        </div>
    </div>

</body>

</html>