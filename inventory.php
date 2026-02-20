<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
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
 
 <div class="p-6 space-y-6">

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

    <h1 class="text-2xl font-bold text-slate-800">
      Vendors Details
    </h1>

    <div class="flex gap-3">

      <button class="w-10 h-10 rounded-full flex items-center justify-center
                     text-green-600 hover:bg-green-50 transition">
        <i class="fa-solid fa-file-excel text-lg"></i>
      </button>

      <button class="w-10 h-10 rounded-full flex items-center justify-center
                     text-red-600 hover:bg-red-50 transition">
        <i class="fa-solid fa-file-pdf text-lg"></i>
      </button>

      <button class="w-10 h-10 rounded-full flex items-center justify-center
                     text-emerald-600 hover:bg-emerald-50 transition">
        <i class="fa-solid fa-print text-lg"></i>
      </button>

    </div>
  </div>

  <!-- STATS -->
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-sm border p-5 flex justify-between items-center">
      <div>
        <p class="text-sm text-slate-500">Inventory Value</p>
        <h2 class="text-2xl font-bold text-slate-800">₹85,000</h2>
      </div>
      <div class="w-12 h-12 rounded-xl bg-gradient-to-tr
                  from-purple-500 to-indigo-500
                  flex items-center justify-center text-white shadow">
        <i class="fa-solid fa-indian-rupee-sign"></i>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border p-5 flex justify-between items-center">
      <div>
        <p class="text-sm text-slate-500">In Stock Items</p>
        <h2 class="text-2xl font-bold text-slate-800">185</h2>
      </div>
      <div class="w-12 h-12 rounded-xl bg-gradient-to-tr
                  from-green-500 to-emerald-500
                  flex items-center justify-center text-white shadow">
        <i class="fa-solid fa-box"></i>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border p-5 flex justify-between items-center">
      <div>
        <p class="text-sm text-slate-500">Total Inventory</p>
        <h2 class="text-2xl font-bold text-slate-800">220</h2>
      </div>
      <div class="w-12 h-12 rounded-xl bg-gradient-to-tr
                  from-red-500 to-rose-500
                  flex items-center justify-center text-white shadow">
        <i class="fa-solid fa-layer-group"></i>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border p-5 flex justify-between items-center">
      <div>
        <p class="text-sm text-slate-500">Expired Products</p>
        <h2 class="text-2xl font-bold text-slate-800">5</h2>
      </div>
      <div class="w-12 h-12 rounded-xl bg-gradient-to-tr
                  from-amber-500 to-orange-500
                  flex items-center justify-center text-white shadow">
        <i class="fa-solid fa-calendar-xmark"></i>
      </div>
    </div>

  </div>

  <!-- FILTERS -->
  <div class="bg-white p-4 rounded-2xl shadow-sm border
              grid grid-cols-1 md:grid-cols-6 gap-4">

    <input type="text" placeholder="Search"
           class="px-4 py-2 rounded-xl border focus:ring-2 focus:ring-amber-400 outline-none">

    <input type="text" placeholder="Product ID"
           class="px-4 py-2 rounded-xl border focus:ring-2 focus:ring-amber-400 outline-none">

    <select class="px-4 py-2 rounded-xl border focus:ring-2 focus:ring-amber-400 outline-none">
      <option>Status</option>
      <option>Active</option>
      <option>Deactive</option>
    </select>

    <input type="date" class="px-4 py-2 rounded-xl border">
    <input type="date" class="px-4 py-2 rounded-xl border">

    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold px-4 py-2 rounded-xl transition">
      Reset
    </button>

  </div>

  <!-- TABLE -->
 <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-visible">
  <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

  <h2 class="text-2xl font-bold p-6 text-slate-800 border-b bg-slate-50">
    Inventory Table
  </h2>

  <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-slate-700">
      <!-- table content -->
    </table>
  </div>

</div>


  <div class="overflow-x-auto">
    <table class="min-w-[1100px] w-full text-sm border-collapse">

      <thead class="bg-white border-b border-slate-200">
        <tr class="text-slate-900 font-bold uppercase text-[11px] tracking-wider">
          <th class="px-6 py-4 text-center">SR. NO.</th>
          <th class="px-6 py-4 text-left">DATE</th>
          <th class="px-6 py-4 text-left">PRODUCT</th>
          <th class="px-6 py-4 text-center">QUANTITY</th>
          <th class="px-6 py-4 text-center">UNIT</th>
          <th class="px-6 py-4 text-left">PRICE</th>
          <th class="px-6 py-4 text-left">TOTAL VALUE</th>
          <th class="px-6 py-4 text-left">EXPIRY DATE</th>
          <th class="px-6 py-4 text-center">STATUS</th>
          <th class="px-6 py-4 text-right">ACTION</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-100">

        <tr class="hover:bg-slate-50 transition group">
          
          <td class="px-6 py-4 text-center font-medium">1</td>

          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-slate-700 font-medium">4 May 2025</div>
            <div class="text-[10px] text-slate-400">02:41 AM</div>
          </td>

          <td class="px-6 py-4">
            <div class="flex items-center gap-3">
              <img src="./assets/images/chicken_breast.jpg" 
                   class="w-12 h-12 rounded-full object-cover border border-slate-200 shadow-sm" 
                   alt="Chicken Breast">
              <div>
                <p class="font-bold text-slate-800 leading-tight">Chicken Breast</p>
                <p class="text-[10px] text-slate-500 font-medium">ID: Chicken7774468212</p>
                <p class="text-[10px] text-slate-400">Category: Poultry</p>
              </div>
            </div>
          </td>

          <td class="px-6 py-4 text-center font-semibold text-slate-700">50</td>

          <td class="px-6 py-4 text-center text-slate-600 font-medium">Kg</td>

          <td class="px-6 py-4 font-bold text-slate-700">₹200</td>

          <td class="px-6 py-4 font-bold text-slate-700">₹10,000</td>

          <td class="px-6 py-4 text-slate-600 font-medium whitespace-nowrap">15 Jul 2025</td>

          <td class="px-6 py-4 text-center">
            <span class="px-3 py-1.5 text-[10px] bg-[#ef4444] text-white rounded-full font-bold uppercase tracking-wide">
              Unavailable
            </span>
          </td>
  <td class="px-6 py-4 text-right">
  <button
    class="flex items-center justify-center gap-2 px-3 py-1 bg-blue-500 text-white rounded-lg text-sm hover:bg-blue-600 transition"
    onclick="openModal('inventoryModal')"
  >
    <i class="fa-solid fa-eye"></i>
    View
  </button>
</td>

        </tr>

      </tbody>
    </table>
  </div>
</div>

  <!-- PAGINATION -->
  <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm">

    <p class="text-slate-500">
      Page <span class="font-semibold">1</span> of 3
    </p>

    <div class="flex gap-2">

      <button class="px-4 py-1 rounded-full border hover:bg-slate-100">
        Prev
      </button>

      <button class="px-4 py-1 rounded-full bg-amber-500 text-white">
        1
      </button>

      <button class="px-4 py-1 rounded-full border hover:bg-slate-100">
        2
      </button>

      <button class="px-4 py-1 rounded-full border hover:bg-slate-100">
        Next
      </button>

    </div>

  </div>

</div>

<!-- MODAL -->
<div id="inventoryModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/60 backdrop-blur-sm p-4 transition-all duration-300">
  
  <div class="absolute inset-0" onclick="closeModal('inventoryModal')"></div>

  <div class="relative z-10 w-full max-w-[90vw] bg-white rounded-3xl shadow-2xl transform transition-all overflow-hidden">

    <div class="flex items-center justify-between border-b border-slate-100 p-6 md:px-8 bg-white">
      <div>
        <h5 class="text-2xl font-black text-slate-800 tracking-tight" id="inventoryModalLabel">
          Inventory Status
        </h5>
        <p class="text-xs text-slate-400 mt-1">Real-time stock availability across partners</p>
      </div>
      <button onclick="closeModal('inventoryModal')" class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-50 text-slate-400 hover:bg-red-50 hover:text-red-500 transition-all text-2xl">
        &times;
      </button>
    </div>

    <div class="p-4 md:p-8 max-h-[70vh] overflow-y-auto custom-scrollbar">
      <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-inner bg-slate-50/30">
        <table class="w-full min-w-[1000px] border-collapse align-middle text-sm">
          <thead class="bg-gradient-to-r from-indigo-700 to-blue-600 text-white sticky top-0 z-20">
            <tr>
              <th class="px-6 py-5 text-left font-bold uppercase tracking-wider text-[11px]">Partner's Name</th>
              <th class="px-6 py-5 text-left font-bold uppercase tracking-wider text-[11px]">Store</th>
              <th class="px-6 py-5 text-center font-bold uppercase tracking-wider text-[11px]">Quantity</th>
              <th class="px-6 py-5 text-center font-bold uppercase tracking-wider text-[11px]">Unit</th>
              <th class="px-6 py-5 text-left font-bold uppercase tracking-wider text-[11px]">MRP</th>
              <th class="px-6 py-5 text-left font-bold uppercase tracking-wider text-[11px]">Selling Price</th>
              <th class="px-6 py-5 text-left font-bold uppercase tracking-wider text-[11px]">Stock Status</th>
              <th class="px-6 py-5 text-center font-bold uppercase tracking-wider text-[11px]">Status</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-slate-100 bg-white">
            <tr class="hover:bg-indigo-50/3 transition-colors group">
              <td class="px-6 py-4">
                <span class="block font-bold text-slate-700">Partner Name</span>
                <div class="flex items-center gap-1 mt-0.5">
                  <span class="text-[10px] bg-slate-100 px-1.5 py-0.5 rounded text-slate-500 font-bold">ID: VND001</span>
                </div>
              </td>
              <td class="px-6 py-4 text-slate-600 font-medium">Store Name</td>
              <td class="px-6 py-4 text-center">
                 <span class="bg-slate-100 px-3 py-1 rounded-lg font-bold text-slate-700">10</span>
              </td>
              <td class="px-6 py-4 text-center text-slate-500 font-medium">Kg</td>
              <td class="px-6 py-4 font-bold text-slate-700 text-base">₹300</td>
              <td class="px-6 py-4 font-bold text-indigo-600 text-base">₹250</td>
              <td class="px-6 py-4">
                 <div class="flex items-center gap-1.5">
                   <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                   <span class="text-emerald-600 font-black text-[11px] uppercase tracking-wide">In Stock</span>
                 </div>
              </td>
              <td class="px-6 py-4 text-center">
                <span class="inline-flex items-center px-3 py-1 text-[10px] font-black uppercase bg-emerald-500 text-white rounded-md shadow-sm">
                  Active
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="p-6 border-t border-slate-50 flex justify-end bg-white">
      <button onclick="closeModal('inventoryModal')" class="px-8 py-2.5 bg-slate-800 text-white text-sm font-bold rounded-xl hover:bg-slate-900 transition-all shadow-lg shadow-slate-200">
        Close Window
      </button>
    </div>

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
<?php include 'include/footer.php'; ?>
<script>
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  const box = modal.querySelector('.relative.z-10');

  modal.classList.remove('hidden');
  modal.classList.add('flex');

  // Animate scale + opacity
  setTimeout(() => {
    box.classList.remove('scale-95','opacity-0');
    box.classList.add('scale-100','opacity-100');
  }, 50);
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  const box = modal.querySelector('.relative.z-10');

  if (box) {
    box.classList.add('scale-95','opacity-0');
    setTimeout(() => {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }, 200); // matches transition duration
  } else {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
}
</script>
</body>
</html>