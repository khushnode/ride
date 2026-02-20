<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayview Health | Super Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mayview-blue': '#1e40af',    // Royal Blue
                        'mayview-dark': '#0f172a',    // Deep Navy
                        'mayview-light': '#3b82f6'    // Sky Blue accent
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
        }
        /* Phle wali Background Image (Corporate Meeting Room) */
        .bg-login {
            background: linear-gradient(rgba(15, 23, 42, 0.75), rgba(30, 64, 175, 0.45)), 
                        url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1600');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-login h-screen flex items-center justify-center p-4 font-sans">

    <div class="glass-effect w-full max-w-[440px] rounded-3xl shadow-2xl overflow-hidden border border-white/20">
        
        <div class="bg-mayview-dark p-10 text-center relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            
            <div class="relative z-10">
                <div class="w-full mb-4 flex items-center justify-center">
                    <img src="assets/images/logo.png" alt="Mayview Health" class="h-20 w-auto object-contain drop-shadow-lg border-radius-lg" onerror="this.src='https://ui-avatars.com/api/?name=Mayview+Health&background=1e40af&color=fff'">
                </div>
                <h1 class="text-2xl font-bold text-white tracking-tight ">Super Admin Portal</h1>
                <div class="h-1 w-12 bg-mayview-light mx-auto mt-2 rounded-full"></div>
            </div>
        </div>

        <div class="p-8 md:p-10">
            <form id="loginForm" class="space-y-6">
                <div>
                    <label class="block text-xs font-bold text-mayview-dark uppercase tracking-wider mb-2">Email Id</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 group-focus-within:text-mayview-blue transition-colors"></i>
                        </div>
                        <input type="email" id="email" required
                            class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-xl bg-gray-50/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-mayview-blue/20 focus:border-mayview-blue transition-all"
                            placeholder="admin@mayviewhealth.com">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-mayview-dark uppercase tracking-wider mb-2">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 group-focus-within:text-mayview-blue transition-colors"></i>
                        </div>
                        <input type="password" id="password" required
                            class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-xl bg-gray-50/50 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-mayview-blue/20 focus:border-mayview-blue transition-all"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between text-sm font-medium">
                    <label class="flex items-center cursor-pointer text-gray-600 hover:text-mayview-blue">
                        <input type="checkbox" class="rounded border-gray-300 text-mayview-blue focus:ring-mayview-blue">
                        <span class="ml-2">Keep me logged in</span>
                    </label>
                    <a href="#" class="text-mayview-blue hover:underline">Recover Access?</a>
                </div>

                <button type="submit" id="submitBtn"
                    class="w-full flex justify-center items-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-sm font-extrabold text-white bg-mayview-blue hover:bg-mayview-dark focus:outline-none focus:ring-4 focus:ring-mayview-blue/30 transition-all duration-300 shadow-blue-500/20">
                   LOGIN TO PANEL
                </button>
            </form>

            <div id="alertBox" class="hidden mt-6 p-4 rounded-xl text-sm text-center font-bold"></div>
        </div>

        <div class="px-8 py-6 bg-gray-50 border-t border-gray-100 text-center">
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">
                &copy; 2026 May View Health &bull; Multi-Vendor Ecosystem
            </p>
        </div>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const btn = document.getElementById("submitBtn");
            const alertBox = document.getElementById("alertBox");
            
            btn.innerHTML = `<svg class="animate-spin h-5 w-5 mr-3 text-white inline" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> VERIFYING...`;
            btn.disabled = true;

            setTimeout(() => {
                alertBox.classList.remove('hidden');
                alertBox.classList.add('bg-blue-50', 'text-mayview-blue', 'border', 'border-blue-100');
                alertBox.innerText = "Access Granted. Opening Dashboard...";
                
                setTimeout(() => {
                    window.location.href = "index.html";
                }, 800);
            }, 1200);
        });
    </script>
</body>
</html>