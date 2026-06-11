<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynapseHR — Администрација</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#F8FAFC] font-sans antialiased">

    <main class="min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">
        
        <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] rounded-full bg-[#5B52A3]/5 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] rounded-full bg-[#5BA3A1]/5 blur-3xl pointer-events-none"></div>

        <div class="max-w-md w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(91,82,163,0.06)] border border-gray-100 overflow-hidden relative">
            
            <div class="h-2 w-full bg-[#5B52A3]"></div>
            
            <div class="p-8 md:p-10">
                
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#5B52A3]/10 text-[#5B52A3] mb-4 text-xl font-bold tracking-tight">
                        S<span>HR</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-[#1E293B] tracking-tight">Заштитен Пристап</h1>
                    <p class="text-sm font-light text-gray-500 mt-1">Внесете ја администраторската лозинка за да продолжите</p>
                </div>

                <form action="{{ route('admin.login') }}" method="POST" class="space-y-5" x-data="{ showPassword: false }">
                    @csrf

                    <div>
                        <label encoding for="password" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Админ Лозинка</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 text-sm">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            
                            <input :type="showPassword ? 'text' : 'password'" 
                                   id="password" 
                                   name="password" 
                                   required 
                                   autofocus
                                   placeholder="Внесете ја лозинката..."
                                   class="w-full pl-11 pr-12 py-3.5 bg-[#F8FAFC] border @error('password') border-rose-400 focus:border-rose-500 focus:bg-white @else border-gray-200 focus:border-[#5B52A3] focus:bg-white @enderror rounded-xl text-sm text-[#1E293B] placeholder-gray-400 focus:outline-none transition-all duration-200">
                            
                            <button type="button" @click="showPassword = !showPassword" 
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#5B52A3] transition-colors cursor-pointer text-sm">
                                <i class="fa-regular" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                            </button>
                        </div>

                        @error('password')
                            <p class="text-xs text-rose-500 font-medium mt-2 pl-1 flex items-center gap-1.5 animate-pulse">
                                <i class="fa-solid fa-circle-exclamation text-[11px]"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit" 
                            class="w-full bg-[#5B52A3] hover:bg-[#4f4794] text-white text-sm py-3.5 px-6 rounded-xl font-semibold shadow-md shadow-[#5B52A3]/10 hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer pt-2">
                        <span>Влези во панел</span>
                        <i class="fa-solid fa-arrow-right-to-bracket text-xs opacity-85"></i>
                    </button>
                </form>

                <div class="text-center mt-8 pt-6 border-t border-gray-100">
                    <a href="/" class="inline-flex items-center gap-2 text-xs font-semibold text-gray-500 hover:text-[#5B52A3] transition-colors">
                        <i class="fa-solid fa-arrow-left text-[10px]"></i>
                        <span>Назад кон почетна</span>
                    </a>
                </div>

            </div>
        </div>
    </main>

</body>
</html>