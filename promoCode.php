<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promocode</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    <div class="p-6 bg-slate-50 min-h-screen">
  
  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-slate-800">Vendors Details</h1>

    <div class="flex items-center gap-2">
      <button class="p-2.5 bg-white border rounded-full text-emerald-600 hover:bg-emerald-50 transition shadow-sm" title="Excel">
        <i class="fa-solid fa-file-excel text-xl"></i>
      </button>
      <button class="p-2.5 bg-white border rounded-full text-red-500 hover:bg-red-50 transition shadow-sm" title="PDF">
        <i class="fa-solid fa-file-pdf text-xl"></i>
      </button>
      <button class="p-2.5 bg-white border rounded-full text-blue-500 hover:bg-blue-50 transition shadow-sm" title="Print">
        <i class="fa-solid fa-print text-xl"></i>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col items-center text-center">
      <div class="w-12 h-12 bg-purple-600 rounded-2xl flex items-center justify-center mb-3 shadow-lg shadow-purple-100">
        <i class="bi bi-people text-white text-xl"></i>
      </div>
      <div class="flex justify-between items-center w-full px-2">
        <span class="text-slate-500 text-sm font-medium">Total Orders</span>
        <span class="text-2xl font-bold text-slate-800">6</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col items-center text-center">
      <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center mb-3 shadow-lg shadow-emerald-100">
        <i class="bi bi-person-check text-white text-xl"></i>
      </div>
      <div class="flex justify-between items-center w-full px-2">
        <span class="text-slate-500 text-sm font-medium">Active Partners</span>
        <span class="text-2xl font-bold text-slate-800">6</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col items-center text-center">
      <div class="w-12 h-12 bg-red-500 rounded-2xl flex items-center justify-center mb-3 shadow-lg shadow-red-100">
        <i class="bi bi-person-x text-white text-xl"></i>
      </div>
      <div class="flex justify-between items-center w-full px-2">
        <span class="text-slate-500 text-sm font-medium">Inactive Partners</span>
        <span class="text-2xl font-bold text-slate-800">0</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col items-center text-center">
      <div class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center mb-3 shadow-lg shadow-indigo-100">
        <i class="bi bi-person-gear text-white text-xl"></i>
      </div>
      <div class="flex justify-between items-center w-full px-2">
        <span class="text-slate-500 text-sm font-medium">Total Admin</span>
        <span class="text-2xl font-bold text-slate-800">5</span>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-3 mb-6 bg-white p-4 rounded-2xl border shadow-sm">
    <input type="text" placeholder="Search" class="w-full px-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 transition outline-none">
    <input type="text" placeholder="Category" class="w-full px-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 transition outline-none">
    <select class="w-full px-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 transition outline-none appearance-none">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
    </select>
    <input type="date" class="w-full px-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 transition outline-none" title="From Date">
    <input type="date" class="w-full px-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-indigo-500 transition outline-none" title="To Date">
    
    <div class="flex gap-2">
      <button class="flex-1 px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-medium hover:bg-indigo-700 transition">Reset</button>
      <button 
  onclick="openModal('addPromoCodeModal')" 
  class="flex-1 px-4 py-2 bg-amber-400 text-slate-900 rounded-full text-sm font-bold hover:bg-amber-500 transition shadow-sm"
>
  + Add
</button>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left">
        <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
          <tr>
            <th class="px-4 py-4 font-semibold">Sr. No.</th>
            <th class="px-4 py-4 font-semibold">Promo Code</th>
            <th class="px-4 py-4 font-semibold">Title / Description</th>
            <th class="px-4 py-4 font-semibold">Type</th>
            <th class="px-4 py-4 font-semibold">Value</th>
            <th class="px-4 py-4 font-semibold">Valid From</th>
            <th class="px-4 py-4 font-semibold">Valid To</th>
            <th class="px-4 py-4 font-semibold text-center">Usage</th>
            <th class="px-4 py-4 font-semibold">Status</th>
            <th class="px-4 py-4 text-right">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          <tr class="hover:bg-slate-50 transition">
            <td class="px-4 py-4 text-slate-600">1</td>
            <td class="px-4 py-4 font-bold text-indigo-700">SAVE50</td>
            <td class="px-4 py-4 text-slate-600 max-w-xs truncate">Flat ₹50 off on orders > ₹299</td>
            <td class="px-4 py-4 text-slate-600">Flat</td>
            <td class="px-4 py-4 font-medium text-slate-900">₹50</td>
            <td class="px-4 py-4 text-slate-500">01-Jun-2025</td>
            <td class="px-4 py-4 text-slate-500">30-Jun-2025</td>
            <td class="px-4 py-4 text-center">
               <span class="font-semibold text-slate-700 text-xs">312 / 500</span>
               <div class="w-16 bg-slate-200 h-1.5 rounded-full mt-1 mx-auto">
                 <div class="bg-indigo-500 h-1.5 rounded-full" style="width: 62%"></div>
               </div>
            </td>
            <td class="px-4 py-4">
              <span class="px-2.5 py-1 text-xs bg-emerald-100 text-emerald-700 rounded-full font-bold">Active</span>
            </td>
           <td class="px-4 py-4 text-right">
  <div class="relative inline-block text-left">
    <button 
      onclick="toggleDropdown(event, 'dropdown-1')" 
      class="p-2 rounded-lg hover:bg-slate-100 transition focus:outline-none"
    >
      <i class="fa-solid fa-ellipsis-vertical text-slate-400"></i>
    </button>

    <div 
      id="dropdown-1" 
      class="dropdown-menu hidden absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-xl border py-2 z-50"
    >
      <button onclick="openModal('viewModal')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition">
        <i class="fa-solid fa-eye text-indigo-500"></i> View
      </button>
      
      <button class="flex items-center gap-3 w-full px-4 py-2 text-sm text-emerald-700 hover:bg-emerald-50 transition">
        <i class="bi bi-play-circle text-emerald-500"></i> Activate
      </button>

      <div class="border-t my-1"></div>

      <button onclick="openModal('deleteModal')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">
        <i class="fa-solid fa-trash text-red-500"></i> Delete
      </button>
    </div>
  </div>
</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
    <div class="text-sm text-slate-500">
      Page <span class="font-bold text-slate-800">1</span> of <span class="font-bold text-slate-800">3</span> 
      — Showing <span class="font-bold text-slate-800">1–6</span> of <span class="font-bold text-slate-800">6</span> entries
    </div>
    <nav class="flex items-center gap-1">
      <button class="px-4 py-2 rounded-full border bg-white text-slate-400 text-sm flex items-center gap-2 cursor-not-allowed">
        <i class="bi bi-arrow-left-circle-fill"></i> Prev
      </button>
      <button class="w-10 h-10 rounded-full bg-indigo-600 text-white text-sm font-bold">1</button>
      <button class="w-10 h-10 rounded-full bg-white border text-slate-600 text-sm hover:bg-slate-50 transition">2</button>
      <button class="w-10 h-10 rounded-full bg-white border text-slate-600 text-sm hover:bg-slate-50 transition">3</button>
      <button class="px-4 py-2 rounded-full border bg-white text-indigo-600 text-sm flex items-center gap-2 hover:bg-indigo-50 transition font-medium">
        Next <i class="bi bi-arrow-right-circle-fill"></i>
      </button>
    </nav>
  </div>

</div>
<div id="viewModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm px-4 hidden">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden transition-all transform">
    <div class="px-6 py-4 border-b flex justify-between items-center bg-slate-50">
      <h3 class="text-xl font-bold text-slate-800">Promo Details: <span class="text-indigo-600">SAVE50</span></h3>
      <button onclick="closeModal('viewModal')" class="text-slate-400 hover:text-slate-600 transition">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>

    <div class="p-6 space-y-4">
      <div class="flex flex-col gap-3">
        <div class="p-3 bg-indigo-50 border-l-4 border-indigo-500 rounded-r-lg">
          <p class="text-xs text-indigo-600 font-bold uppercase tracking-wider">Title / Description</p>
          <p class="text-slate-700 font-medium">Flat ₹50 off on orders above ₹299</p>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Discount Type</p>
            <p class="text-slate-800 font-semibold">Flat</p>
          </div>
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Value</p>
            <p class="text-slate-800 font-semibold text-lg text-emerald-600">₹50</p>
          </div>
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Valid From</p>
            <p class="text-slate-800 font-medium italic">01-Jun-2025</p>
          </div>
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Valid To</p>
            <p class="text-slate-800 font-medium italic">30-Jun-2025</p>
          </div>
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Usage Limit</p>
            <p class="text-slate-800 font-bold">500</p>
          </div>
          <div>
            <p class="text-xs text-slate-400 font-semibold uppercase">Used Count</p>
            <p class="text-indigo-600 font-bold">312</p>
          </div>
        </div>

        <div class="pt-2">
          <span class="px-4 py-1 bg-emerald-100 text-emerald-700 text-sm font-bold rounded-full border border-emerald-200">
             <i class="bi bi-check-circle-fill me-1"></i> Active
          </span>
        </div>
      </div>
    </div>

    <div class="px-6 py-4 bg-slate-50 border-t flex justify-end">
      <button onclick="closeModal('viewModal')" class="px-6 py-2 bg-white border border-slate-300 text-slate-700 rounded-xl font-semibold hover:bg-slate-100 transition shadow-sm">
        Close
      </button>
    </div>
  </div>
</div>
<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm px-4 hidden">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
    <div class="p-8 text-center">
      <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
        <i class="fa-solid fa-trash-can text-3xl"></i>
      </div>
      
      <h3 class="text-2xl font-bold text-slate-800 mb-2">Delete Notification?</h3>
      <p class="text-slate-500 mb-8">Are you sure you want to delete this? This action cannot be undone.</p>
      
      <div class="flex gap-3">
        <button onclick="closeModal('deleteModal')" class="flex-1 py-3 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200 transition">
          Cancel
        </button>
        <button class="flex-1 py-3 bg-red-600 text-white rounded-xl font-bold hover:bg-red-700 transition shadow-lg shadow-red-200">
          Yes, Delete
        </button>
      </div>
    </div>
  </div>
</div>
<div id="addPromoCodeModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm px-4 hidden">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden">
    <div class="px-6 py-5 border-b bg-indigo-600 flex justify-between items-center">
      <h3 class="text-xl font-bold text-white"><i class="fa-solid fa-ticket me-2"></i>Add New Promo Code</h3>
      <button onclick="closeModal('addPromoCodeModal')" class="text-white/80 hover:text-white transition">
        <i class="fa-solid fa-xmark text-2xl"></i>
      </button>
    </div>

    <form id="promoCodeForm" class="p-6">
      <div class="space-y-5">
        <div>
          <label class="block text-sm font-bold text-slate-700 mb-1">Promo Code</label>
          <input type="text" placeholder="e.g., SAVE20" required
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition uppercase font-mono">
        </div>

        <div>
          <label class="block text-sm font-bold text-slate-700 mb-1">Title / Description</label>
          <textarea rows="2" placeholder="Short description of the promo" required
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition resize-none"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Discount Type</label>
            <select required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
              <option value="" disabled selected>Select Type</option>
              <option value="Flat">Flat</option>
              <option value="Percentage">Percentage</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Discount Value</label>
            <input type="text" placeholder="e.g., 20% or ₹100" required
              class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Valid From</label>
            <input type="date" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
          </div>
          <div>
            <label class="block text-sm font-bold text-slate-700 mb-1">Valid To</label>
            <input type="date" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
          </div>
        </div>

        <div>
          <label class="block text-sm font-bold text-slate-700 mb-1">Usage Limit</label>
          <input type="number" min="1" placeholder="Enter max number of uses" required
            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
        </div>
      </div>

      <div class="flex justify-end gap-3 mt-8 pt-6 border-t">
        <button type="reset" class="px-6 py-2.5 text-slate-500 font-bold hover:text-slate-700 transition">
          Reset
        </button>
        <button type="submit" class="px-8 py-2.5 bg-amber-400 hover:bg-amber-500 text-slate-900 font-bold rounded-xl shadow-lg shadow-amber-100 transition flex items-center">
          <i class="fas fa-save me-2 text-sm"></i> Save Promo
        </button>
      </div>
    </form>
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
    <?php include 'include/footer.php'; ?>

</body>
<script>
  function toggleDropdown(event, dropdownId) {
  // Stop the click from bubbling up to the window listener
  event.stopPropagation();
  
  const currentDropdown = document.getElementById(dropdownId);
  
  // Close all other dropdowns first
  document.querySelectorAll('.dropdown-menu').forEach(menu => {
    if (menu.id !== dropdownId) {
      menu.classList.add('hidden');
    }
  });

  // Toggle the clicked dropdown
  currentDropdown.classList.toggle('hidden');
}

// Global click listener to close dropdowns when clicking outside
window.addEventListener('click', function(e) {
  document.querySelectorAll('.dropdown-menu').forEach(menu => {
    if (!menu.classList.contains('hidden')) {
      menu.classList.add('hidden');
    }
  });
});

// Helper for Modals
function openModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.classList.remove('hidden');
    // If you have a View Modal, you can populate data here
  }
}

function closeModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.classList.add('hidden');
  }
}
// Optional: Close when clicking outside the white box
window.onclick = function(event) {
  if (event.target.classList.contains('bg-black/50')) {
    event.target.classList.add('hidden');
    document.body.style.overflow = 'auto';
  }
}
</script>
</html>