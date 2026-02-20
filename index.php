<?php include 'include/header.php'; ?>

       <main class="flex-1 flex flex-col min-w-0">
    <header class="h-20 bg-white border-b border-slate-200 sticky top-0 z-30 px-8 flex items-center justify-between">
        <div>
            <h1 class="text-xl font-extrabold text-mayview-dark">Master Dashboard</h1>
            <p class="text-xs text-slate-400 font-medium">Real-time Multi-vendor Monitoring</p>
        </div>

        <div class="flex items-center gap-6">
            <div class="relative hidden md:block">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                <input type="text" placeholder="Search Slugs, Orders, Vendors..." class="pl-10 pr-4 py-2 bg-slate-100 border-none rounded-xl text-sm focus:ring-2 focus:ring-mayview-blue w-64 outline-none transition-all">
            </div>
            
            <div class="flex items-center gap-4">
                    <div class="relative">
            <button id="notiBtn" class="relative w-11 h-11 flex items-center justify-center bg-slate-50 border border-slate-100 rounded-2xl text-slate-600 hover:bg-mayview-blue hover:text-white transition-all duration-300">
                <i class="fa-solid fa-bell"></i>
                <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
            </button>

            <div id="notiBar" class="hidden absolute right-0 mt-4 w-80 bg-white rounded-[2rem] shadow-2xl border border-slate-100 overflow-hidden z-[100] animate-in fade-in zoom-in duration-200">
                <div class="p-5 border-b border-slate-50 flex justify-between items-center bg-slate-50/50">
                    <h3 class="font-bold text-sm text-mayview-dark">Notifications</h3>
                    <span class="text-[10px] bg-mayview-blue text-white px-2 py-0.5 rounded-full font-bold">4 New</span>
                </div>
                <div class="max-h-[350px] overflow-y-auto custom-scrollbar">
                    <div class="p-4 hover:bg-slate-50 border-b border-slate-50 cursor-pointer transition-all flex gap-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-mayview-blue flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-shop text-xs"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-800">New Vendor Request</p>
                            <p class="text-[10px] text-slate-500 mt-0.5">"Fresh Organic" wants to join.</p>
                            <p class="text-[9px] text-mayview-blue font-bold mt-1 uppercase">2 mins ago</p>
                        </div>
                    </div>
                    <div class="p-4 hover:bg-slate-50 border-b border-slate-50 cursor-pointer transition-all flex gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-box text-xs"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-800">Large Order Placed</p>
                            <p class="text-[10px] text-slate-500 mt-0.5">Order #8492 by Adil Hussain.</p>
                            <p class="text-[9px] text-slate-400 font-bold mt-1 uppercase">1 hour ago</p>
                        </div>
                    </div>
                </div>
                <a href="notifications.html" class="block p-4 text-center text-xs font-bold text-mayview-blue hover:bg-slate-50 transition-all uppercase tracking-widest">View All Alerts</a>
            </div>
        </div>

                <div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
 <div class="relative">
            <button id="adminBtn" class="flex items-center gap-3 p-1 pr-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                <img src="./assets/images/profile-pic.png" class="w-11 h-11 rounded-xl object-cover shadow-sm ring-2 ring-white" onerror="this.src='https://ui-avatars.com/api/?name=Harry&background=1e40af&color=fff'">
                <div class="text-left hidden sm:block">
                    <p class="text-xs font-black text-mayview-dark leading-none">Harry Potter</p>
                    <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">Super Admin</span>
                </div>
                <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 ml-1"></i>
            </button>

            <div id="adminBar" class="hidden absolute right-0 mt-4 w-64 bg-white rounded-[2rem] shadow-2xl border border-slate-100 overflow-hidden z-[100] animate-in fade-in zoom-in duration-200">
                <div class="p-6 text-center border-b border-slate-50 bg-slate-50/50">
                    <img src="./assets/images/profile-pic.png" class="w-16 h-16 rounded-2xl mx-auto mb-3 border-4 border-white shadow-md" onerror="this.src='https://ui-avatars.com/api/?name=Harry&background=1e40af&color=fff'">
                    <h4 class="font-bold text-sm text-mayview-dark">Harry Potter</h4>
                    <p class="text-[10px] text-slate-400 font-medium">admin@mayviewhealth.com</p>
                </div>
                <div class="p-2">
                   <a href="settings.html" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 font-semibold hover:bg-slate-50 hover:text-mayview-blue rounded-xl transition-all">
                        <i class="fa-solid fa-gears opacity-50"></i> Account Settings
                    </a>
                    <div class="h-[1px] bg-slate-50 my-1 mx-4"></div>
                    <a href="login.html" class="flex items-center gap-3 px-4 py-3 text-sm text-red-500 font-bold hover:bg-red-50 rounded-xl transition-all">
                        <i class="fa-solid fa-power-off"></i> Sign Out
                    </a>
                </div>
            </div>
        </div>
            </div>
        </div>
    </header>

    <div class="p-8 space-y-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </div>
                    <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-lg">Real-time</span>
                </div>
                <h4 class="text-slate-500 text-xs font-bold uppercase tracking-widest">Total Customers</h4>
                <div class="flex items-end gap-2 mt-1">
                    <span class="text-3xl font-black">12,482</span>
                    <span class="text-xs text-green-500 font-bold mb-1">↑ 14%</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <span class="text-[10px] font-bold text-orange-600 bg-orange-50 px-2 py-1 rounded-lg">Today</span>
                </div>
                <h4 class="text-slate-500 text-xs font-bold uppercase tracking-widest">Total Orders</h4>
                <div class="flex items-end gap-2 mt-1">
                    <span class="text-3xl font-black">842</span>
                    <span class="text-xs text-slate-400 font-bold mb-1">Live</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">Commission</span>
                </div>
                <h4 class="text-slate-500 text-xs font-bold uppercase tracking-widest">Net Revenue</h4>
                <div class="flex items-end gap-2 mt-1">
                    <span class="text-3xl font-black">$4,280</span>
                    <span class="text-xs text-green-500 font-bold mb-1">↑ 8%</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-user-clock"></i>
                    </div>
                    <span class="text-[10px] font-bold text-red-600 bg-red-50 px-2 py-1 rounded-lg">Important</span>
                </div>
                <h4 class="text-slate-500 text-xs font-bold uppercase tracking-widest">Pending Vendors</h4>
                <div class="flex items-end gap-2 mt-1">
                    <span class="text-3xl font-black">07</span>
                    <span class="text-xs text-slate-400 font-bold mb-1">Approval</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-mayview-blue to-blue-700 p-6 rounded-[2rem] text-white flex justify-between items-center group cursor-pointer overflow-hidden relative">
                <div class="relative z-10">
                    <h3 class="font-bold text-lg leading-tight">Banner<br>Settings</h3>
                    <p class="text-[10px] text-blue-100 mt-2 font-medium opacity-80 uppercase tracking-widest italic">Update Homepage</p>
                </div>
                <i class="fa-solid fa-image-polaroids text-5xl opacity-20 group-hover:scale-110 transition-transform"></i>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex justify-between items-center group cursor-pointer hover:border-mayview-blue transition-all">
                <div>
                    <h3 class="font-bold text-lg text-mayview-dark">Global Slugs</h3>
                    <p class="text-[10px] text-slate-400 mt-1 font-bold uppercase tracking-widest">SEO Management</p>
                </div>
                <div class="w-12 h-12 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center group-hover:bg-mayview-blue group-hover:text-white transition-all">
                    <i class="fa-solid fa-link"></i>
                </div>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex justify-between items-center group cursor-pointer hover:border-orange-400 transition-all">
                <div>
                    <h3 class="font-bold text-lg text-mayview-dark">Promo Codes</h3>
                    <p class="text-[10px] text-slate-400 mt-1 font-bold uppercase tracking-widest">Coupons & Offers</p>
                </div>
                <div class="w-12 h-12 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center group-hover:bg-orange-400 group-hover:text-white transition-all">
                    <i class="fa-solid fa-ticket"></i>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="font-black text-lg tracking-tight">Earning Analytics</h3>
                    <select class="text-xs font-bold bg-slate-50 border-none outline-none rounded-lg px-3 py-2 text-slate-500">
                        <option>Last 30 Days</option>
                        <option>Last 6 Months</option>
                    </select>
                </div>
                <canvas id="vendorChart" class="max-h-[350px]"></canvas>
            </div>

            <div class="bg-mayview-dark rounded-[2.5rem] p-8 text-white relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-mayview-blue/10 rounded-full blur-3xl"></div>
                <h3 class="font-black text-lg mb-6 relative z-10">Top Vendors</h3>
                <div class="space-y-6 relative z-10">
                    <div class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center border border-slate-700">
                                <i class="fa-solid fa-store text-mayview-accent"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold">HealthMart</p>
                                <p class="text-[10px] text-slate-400 font-medium">420 Orders</p>
                            </div>
                        </div>
                        <p class="text-mayview-accent font-black text-sm">$2.4k</p>
                    </div>
                    <div class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-slate-800 flex items-center justify-center border border-slate-700">
                                <i class="fa-solid fa-store text-orange-400"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold">Elite Supplements</p>
                                <p class="text-[10px] text-slate-400 font-medium">315 Orders</p>
                            </div>
                        </div>
                        <p class="text-orange-400 font-black text-sm">$1.8k</p>
                    </div>
                </div>
                <button class="w-full mt-10 py-4 bg-slate-800 hover:bg-mayview-blue rounded-2xl text-xs font-bold transition-all relative z-10">VIEW ALL PARTNERS</button>
            </div>
        </div>
    </div>
<footer class="mt-auto bg-white border-t border-slate-100 px-8 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-center md:text-left">
                <p class="text-sm text-slate-500 font-medium tracking-tight">
                    &copy; 2026 <span class="text-mayview-blue font-bold">Mayview Health</span>. All rights reserved.
                </p>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 bg-slate-50 rounded-full border border-slate-100">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Design & Developed by</span>
                <span class="text-xs font-black text-mayview-dark tracking-tighter">BMDU</span>
                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            </div>
        </div>
    </footer>
    </div>
    
</main>
<?php include 'include/footer.php'; ?>