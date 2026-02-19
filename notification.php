<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
</head>
<body>
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
    <div class="p-8 space-y-8 bg-slate-50/50 min-h-screen">
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-indigo-500 transition-all duration-300">
            <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-bullhorn"></i>
            </div>
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Total Sent</p>
                <h3 class="text-2xl font-black text-slate-800">1,250</h3>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-emerald-500 transition-all duration-300">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Seen Rate</p>
                <h3 class="text-2xl font-black text-slate-800">88%</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-amber-500 transition-all duration-300">
            <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Pending</p>
                <h3 class="text-2xl font-black text-slate-800">12</h3>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-sm border border-slate-100 flex items-center gap-5 group hover:border-rose-500 transition-all duration-300">
            <div class="w-14 h-14 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center text-2xl group-hover:scale-110 transition-transform">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Failed</p>
                <h3 class="text-2xl font-black text-slate-800">02</h3>
            </div>
        </div>
    </div>

    <div class="bg-white p-5 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-wrap gap-4 items-center">
        <div class="relative flex-1 min-w-[300px]">
            <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="text" placeholder="Search notifications..." class="w-full pl-12 pr-6 py-4 bg-slate-50 border-none rounded-[1.5rem] text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
        </div>
        
        <select class="px-6 py-4 bg-slate-50 border-none rounded-[1.5rem] text-sm font-bold text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
            <option>Filter by Role</option>
            <option>Vendors</option>
            <option>Riders</option>
            <option>Customers</option>
        </select>

        <input type="date" class="px-6 py-4 bg-slate-50 border-none rounded-[1.5rem] text-sm font-bold text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500">

        <button class="bg-slate-900 text-white px-10 py-4 rounded-[1.5rem] font-bold text-sm hover:bg-indigo-600 transition-all shadow-lg active:scale-95">
            Apply Filter
        </button>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest">Recipient</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest">Content</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-center">Type</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-center">Status</th>
                        <th class="px-8 py-5 text-[10px] font-black uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-black text-xs">V</div>
                                <div>
                                    <h4 class="text-sm font-black text-slate-800">FreshCuts Store</h4>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase">Vendor • ID: 9920</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <h4 class="text-sm font-bold text-slate-800 mb-1">New Order Received</h4>
                            <p class="text-xs text-slate-500 max-w-[250px] truncate italic">"You have a new order from Adil Hussain..."</p>
                            <span class="text-[9px] font-bold text-indigo-500 mt-2 block tracking-tighter"><i class="fa-regular fa-clock me-1"></i>10 Min Ago</span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="bg-indigo-50 text-indigo-600 text-[10px] px-4 py-1.5 rounded-full font-black uppercase">Order</span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span class="text-[11px] font-black text-emerald-600 uppercase">Delivered</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="w-9 h-9 rounded-xl bg-slate-100 text-slate-600 hover:bg-indigo-600 hover:text-white transition-all transform active:scale-90">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </button>
                                <button class="w-9 h-9 rounded-xl bg-slate-100 text-slate-600 hover:bg-rose-500 hover:text-white transition-all transform active:scale-90">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
        
        <div class="px-8 py-6 bg-slate-50/50 flex justify-between items-center border-t border-slate-100">
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Showing 1 to 10 of 240 notifications</p>
            <div class="flex gap-2">
                <button class="p-3 rounded-xl bg-white border border-slate-200 text-slate-400 hover:border-indigo-500 hover:text-indigo-600 transition-all"><i class="fa-solid fa-chevron-left text-xs"></i></button>
                <button class="p-3 rounded-xl bg-indigo-600 border border-indigo-600 text-white hover:bg-indigo-700 transition-all shadow-md shadow-indigo-100">1</button>
                <button class="p-3 rounded-xl bg-white border border-slate-200 text-slate-600 hover:border-indigo-500 hover:text-indigo-600 transition-all">2</button>
                <button class="p-3 rounded-xl bg-white border border-slate-200 text-slate-400 hover:border-indigo-500 hover:text-indigo-600 transition-all"><i class="fa-solid fa-chevron-right text-xs"></i></button>
            </div>
        </div>
    </div>
</div>
<div 
  id="sendNotificationModal" 
  class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300"
>
  <div 
    class="bg-white w-full max-w-lg rounded-[3rem] shadow-2xl transform scale-95 transition-transform duration-300 overflow-hidden"
  >
    <div class="bg-slate-900 p-10 text-white relative">
      <h3 class="text-2xl font-black italic tracking-tight">Broadcast Message</h3>
      <p class="text-indigo-400 text-[10px] font-black uppercase tracking-widest mt-2">
        Send instant push notification
      </p>
      <button 
        onclick="toggleModal('sendNotificationModal')" 
        class="absolute top-8 right-8 text-white/50 hover:text-white transition-colors"
      >
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>

    <div class="p-10 bg-white space-y-8">
      <div class="space-y-4">
        <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-2">Select Audience</label>
        <div class="grid grid-cols-3 gap-3">
          <button class="py-4 rounded-2xl border-2 border-slate-100 text-[10px] font-black uppercase text-slate-500 hover:border-indigo-500 hover:text-indigo-600 transition-all focus:bg-indigo-600 focus:text-white focus:border-indigo-600">Vendors</button>
          <button class="py-4 rounded-2xl border-2 border-slate-100 text-[10px] font-black uppercase text-slate-500 hover:border-indigo-500 hover:text-indigo-600 transition-all focus:bg-indigo-600 focus:text-white focus:border-indigo-600">Riders</button>
          <button class="py-4 rounded-2xl border-2 border-slate-100 text-[10px] font-black uppercase text-slate-500 hover:border-indigo-500 hover:text-indigo-600 transition-all focus:bg-indigo-600 focus:text-white focus:border-indigo-600">Users</button>
        </div>
      </div>

      <div class="space-y-4">
        <div class="relative">
          <input 
            type="text" 
            placeholder="Notification Title" 
            class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl font-bold text-slate-800 focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
          >
        </div>

        <div class="relative">
          <textarea 
            rows="4" 
            placeholder="Type your message here..." 
            class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-medium text-slate-600 focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
          ></textarea>
        </div>
      </div>

      <button class="w-full py-5 bg-indigo-600 text-white rounded-[2rem] font-black uppercase tracking-[0.2em] text-xs shadow-xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 active:scale-95 transition-all">
        Blast Notification
      </button>
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
</main>
</body>
</html>