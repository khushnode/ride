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
    <div class="p-4 sm:p-6">

  <!-- Header -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <h1 class="text-xl sm:text-2xl font-bold text-slate-800">
      Vendors Details
    </h1>

    <div class="flex items-center gap-3">

      <!-- Excel -->
      <button class="text-emerald-600 hover:scale-110 transition"
        title="Excel">
        <i class="fa-solid fa-file-excel text-2xl"></i>
      </button>

      <!-- PDF -->
      <button class="text-red-600 hover:scale-110 transition"
        title="PDF">
        <i class="fa-solid fa-file-pdf text-2xl"></i>
      </button>

      <!-- Print -->
      <button class="text-green-600 hover:scale-110 transition"
        title="Print">
        <i class="fa-solid fa-print text-2xl"></i>
      </button>

    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">

  <!-- Total Orders -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 flex items-center justify-between">
    
    <div>
      <p class="text-sm text-slate-500 font-medium">Total Orders</p>
      <h2 class="text-3xl font-bold text-slate-800 mt-1">6</h2>
    </div>

    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-500 to-purple-500 
                flex items-center justify-center shadow-md">
      <i class="fa-solid fa-cart-shopping text-white text-xl"></i>
    </div>

  </div>

  <!-- Active Partners -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 flex items-center justify-between">
    
    <div>
      <p class="text-sm text-slate-500 font-medium">Active Partners</p>
      <h2 class="text-3xl font-bold text-emerald-600 mt-1">6</h2>
    </div>

    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-emerald-400 to-emerald-600 
                flex items-center justify-center shadow-md">
      <i class="fa-solid fa-user-check text-white text-xl"></i>
    </div>

  </div>

  <!-- Inactive Partners -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 flex items-center justify-between">
    
    <div>
      <p class="text-sm text-slate-500 font-medium">Inactive Partners</p>
      <h2 class="text-3xl font-bold text-red-600 mt-1">0</h2>
    </div>

    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-red-400 to-red-600 
                flex items-center justify-center shadow-md">
      <i class="fa-solid fa-user-xmark text-white text-xl"></i>
    </div>

  </div>

  <!-- Total Admin -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 flex items-center justify-between">
    
    <div>
      <p class="text-sm text-slate-500 font-medium">Total Admin</p>
      <h2 class="text-3xl font-bold text-indigo-600 mt-1">5</h2>
    </div>

    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-500 to-blue-500 
                flex items-center justify-center shadow-md">
      <i class="fa-solid fa-user-gear text-white text-xl"></i>
    </div>

  </div>

</div>


  <!-- Filters -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-4 mb-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4">

      <input type="text"
        placeholder="Search"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">

      <input type="text"
        placeholder="Category"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">

      <select
        class="px-4 py-2 rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        <option>Status</option>
        <option>Active</option>
        <option>Deactive</option>
      </select>

      <input type="date"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">

      <input type="date"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">

      <div class="flex items-center gap-3">
        <button
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold px-4 py-2 rounded-xl transition">
          Reset
        </button>

        <button
  onclick="openModal()"
  class="w-full bg-amber-500 hover:bg-amber-600 text-white text-sm font-semibold px-4 py-2 rounded-xl transition">
  + Add
</button>

      </div>

    </div>
  </div>

  <!-- Table -->
  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-x-auto">

    <table class="min-w-[900px] w-full text-sm">

      <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
        <tr>
          <th class="px-6 py-4 text-left">Sr. No.</th>
          <th class="px-6 py-4 text-left">Offer Title</th>
          <th class="px-6 py-4 text-left">Subtext</th>
          <th class="px-6 py-4 text-left">Tag</th>
          <th class="px-6 py-4 text-left">Image</th>
          <th class="px-6 py-4 text-left">Validity</th>
          <th class="px-6 py-4 text-left">Status</th>
          <th class="px-6 py-4 text-right">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-100">

        <tr class="hover:bg-slate-50 transition">
          <td class="px-6 py-4">2</td>
          <td class="px-6 py-4 font-semibold text-slate-700">
            PREMIUM CUTS FIRST ORDER DEAL
          </td>
          <td class="px-6 py-4">Free delivery + ₹50 OFF</td>

          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs bg-amber-100 text-amber-700 rounded-full font-semibold">
              Limited Time
            </span>
          </td>

          <td class="px-6 py-4">
            <img src="./assets/images/banner2.jpg"
              class="w-14 h-10 rounded-lg object-cover">
          </td>

          <td class="px-6 py-4">24–30 Jun 2025</td>

          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs bg-emerald-100 text-emerald-600 rounded-full font-semibold">
              Active
            </span>
          </td>

          <td class="px-6 py-4 text-right relative">

  <div class="relative inline-block text-left">

    <!-- 3 Dot Button -->
    <button onclick="toggleDropdown(this)"
      class="p-2 rounded-lg hover:bg-slate-100 transition">
      <i class="fa-solid fa-ellipsis-vertical text-slate-600"></i>
    </button>

    <!-- Dropdown -->
    <div class="dropdown-menu hidden absolute right-0 mt-2 w-44 
                bg-white rounded-xl shadow-xl border border-slate-200 
                py-2 z-50">

      <button
        class="flex items-center gap-2 w-full px-4 py-2 text-sm 
               text-amber-600 hover:bg-amber-50 transition">
        <i class="fa-solid fa-pause"></i>
        Deactivate
      </button>

      <button
        class="flex items-center gap-2 w-full px-4 py-2 text-sm 
               text-red-600 hover:bg-red-50 transition">
        <i class="fa-solid fa-trash"></i>
        Delete
      </button>

    </div>

  </div>

</td>

        </tr>

      </tbody>
    </table>

  </div>

  <!-- Pagination -->
  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-6">
    <p class="text-sm text-slate-500">
      Page <span class="font-semibold">1</span> of
      <span class="font-semibold">3</span>
    </p>

    <div class="flex items-center gap-2">
      <button class="px-4 py-2 text-sm rounded-xl bg-slate-100 hover:bg-slate-200">
        Prev
      </button>
      <button class="px-4 py-2 text-sm rounded-xl bg-indigo-600 text-white">
        1
      </button>
      <button class="px-4 py-2 text-sm rounded-xl bg-slate-100 hover:bg-slate-200">
        2
      </button>
      <button class="px-4 py-2 text-sm rounded-xl bg-slate-100 hover:bg-slate-200">
        3
      </button>
      <button class="px-4 py-2 text-sm rounded-xl bg-slate-100 hover:bg-slate-200">
        Next
      </button>
    </div>
  </div>

</div>
<!-- Modal Backdrop -->
<div id="addBannerModal"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">

  <!-- Modal Box -->
  <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden">

    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-4 bg-indigo-600">
      <h5 class="text-lg font-semibold text-white">
        Add Banner Details
      </h5>

      <button onclick="closeModal()"
        class="text-white hover:text-slate-200 text-xl">
        ✕
      </button>
    </div>

    <!-- Form -->
    <form id="bannerForm" enctype="multipart/form-data">

      <div class="p-6 space-y-5">

        <!-- Offer Title -->
        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Offer Title
          </label>
          <input type="text"
            name="bannerTitle"
            placeholder="Enter banner title"
            required
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <!-- Subtext -->
        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Subtext
          </label>
          <textarea name="bannerSubtext"
            rows="2"
            placeholder="Enter subtext"
            required
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"></textarea>
        </div>

        <!-- Tag -->
        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Tag
          </label>
          <input type="text"
            name="bannerTag"
            placeholder="e.g., Limited Time Offer"
            required
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <!-- Upload Image -->
        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Upload Image
          </label>
          <input type="file"
            name="bannerImage"
            accept="image/*"
            required
            class="w-full text-sm file:mr-4 file:py-2 file:px-4
                   file:rounded-xl file:border-0
                   file:bg-indigo-600 file:text-white
                   hover:file:bg-indigo-700">
        </div>

        <!-- Date Row (Same 2 Column Layout) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

          <div>
            <label class="block text-sm font-medium text-slate-600 mb-1">
              Start Date
            </label>
            <input type="date"
              name="startDate"
              required
              class="w-full px-4 py-2 rounded-xl bg-slate-100 
                     focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
          </div>

          <div>
            <label class="block text-sm font-medium text-slate-600 mb-1">
              End Date
            </label>
            <input type="date"
              name="endDate"
              required
              class="w-full px-4 py-2 rounded-xl bg-slate-100 
                     focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
          </div>

        </div>

      </div>

      <!-- Footer -->
      <div class="flex justify-end gap-3 px-6 py-4 bg-slate-50">

        <button type="reset"
          class="px-4 py-2 text-sm rounded-xl bg-slate-200 hover:bg-slate-300 transition">
          Reset
        </button>

        <button type="submit"
          class="px-5 py-2 text-sm font-semibold rounded-xl 
                 bg-amber-500 hover:bg-amber-600 text-white transition">
          Save Banner
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
<script>
  function openModal() {
    document.getElementById('addBannerModal').classList.remove('hidden');
    document.getElementById('addBannerModal').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('addBannerModal').classList.add('hidden');
    document.getElementById('addBannerModal').classList.remove('flex');
  }
</script>
<script>
  function toggleDropdown(button) {
    const dropdown = button.parentElement.querySelector(".dropdown-menu");

    // Close all other dropdowns
    document.querySelectorAll(".dropdown-menu").forEach(menu => {
      if (menu !== dropdown) {
        menu.classList.add("hidden");
      }
    });

    dropdown.classList.toggle("hidden");
  }

  // Outside click close
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".relative.inline-block")) {
      document.querySelectorAll(".dropdown-menu").forEach(menu => {
        menu.classList.add("hidden");
      });
    }
  });
</script>


</main>
<?php include 'include/footer.php'; ?>