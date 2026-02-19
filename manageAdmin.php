<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageAdmin</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>

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
    <div class="bg-gray-100 p-4">
         <!-- Header Section -->
  <div class="flex flex-col md:flex-row justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Vendors Details</h1>

    <div class="flex space-x-3">
      <!-- Excel -->
      <button class="text-green-500 p-2 rounded-full hover:bg-green-100" id="exportExcel" title="Excel">
        <i class="bi bi-file-earmark-excel-fill text-2xl"></i>
      </button>

      <!-- PDF -->
      <button class="text-red-500 p-2 rounded-full hover:bg-red-100" id="exportPdf" title="PDF">
        <i class="bi bi-file-earmark-pdf-fill text-2xl"></i>
      </button>

      <!-- Print -->
      <button class="text-green-600 p-2 rounded-full hover:bg-green-100" id="printButton" title="Print">
        <i class="bi bi-printer-fill text-2xl"></i>
      </button>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
    <!-- Total Orders -->
    <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center text-center">
      <div class="mb-2 relative">
        <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-purple-500 to-purple-300 flex items-center justify-center">
          <i class="bi bi-people text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-400">Total Orders</span>
        <h2 class="text-lg font-semibold">6</h2>
      </div>
    </div>

    <!-- Active Partners -->
    <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center text-center">
      <div class="mb-2 relative">
        <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-green-500 to-green-300 flex items-center justify-center">
          <i class="bi bi-person-check text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-400">Active Partners</span>
        <h2 class="text-lg font-semibold">6</h2>
      </div>
    </div>

    <!-- Inactive Partners -->
    <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center text-center">
      <div class="mb-2 relative">
        <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-red-500 to-red-300 flex items-center justify-center">
          <i class="bi bi-person-x text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-400">Inactive Partners</span>
        <h2 class="text-lg font-semibold">0</h2>
      </div>
    </div>

    <!-- Total Admin -->
    <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center text-center">
      <div class="mb-2 relative">
        <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-purple-500 to-purple-300 flex items-center justify-center">
          <i class="bi bi-person-gear text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-400">Total Admin</span>
        <h2 class="text-lg font-semibold">5</h2>
      </div>
    </div>
  </div>

  <!-- Filters Section -->
   <div class="bg-white rounded-2xl shadow-sm border p-4">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-3">

      <input type="text" placeholder="Search"
        class="col-span-1 md:col-span-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">

      <input type="text" placeholder="Category"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">

      <select class="px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
        <option>Status</option>
        <option>Active</option>
        <option>Deactive</option>
      </select>

      <input type="date"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">

      <input type="date"
        class="px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">

      <div class="flex gap-2">
        <button class="flex-1 bg-indigo-600 text-white rounded-xl px-4 py-2 hover:bg-indigo-700 transition">
          Reset
        </button>
  <button
  type="button"
  onclick="toggleModal('addRoleModal')"
  class="btn btn-warning btn-sm rounded-pill"
>
  + Add
</button>

      </div>

    </div>
  </div>

  <!-- Table -->
  <div class="bg-white rounded-2xl shadow-sm border overflow-x-auto mt-5">
   <table class="min-w-[800px] w-full text-sm">
  <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
    <tr>
      <th class="px-4 py-3 text-left font-medium">Sr. No.</th>
      <th class="px-4 py-3 text-left font-medium">Created date</th>
      <th class="px-4 py-3 text-left font-medium">User Name</th>
      <th class="px-4 py-3 text-left font-medium">Email</th>
      <th class="px-4 py-3 text-left font-medium">Role</th>
      <th class="px-4 py-3 text-right font-medium">Actions</th>
    </tr>
  </thead>

  <tbody class="divide-y divide-gray-200 bg-white">
    <tr>
      <td class="px-4 py-3">1</td>
      <td class="px-4 py-3">15/may/2025</td>
      <td class="px-4 py-3 font-semibold text-gray-700">Admin</td>
      <td class="px-4 py-3 text-gray-600">hr@gmsil.com</td>
      <td class="px-4 py-3">
        <span class="px-2 py-1 bg-green-100 text-green-700 rounded-md text-xs">All</span>
      </td>
      <td class="px-4 py-3 text-right">
        <div class="relative inline-block text-left dropdown-container">
          <button onclick="toggleDropdown(this)" class="p-2 hover:bg-gray-100 rounded-full transition-colors focus:outline-none">
            <i class="bi bi-three-dots-vertical text-lg"></i>
          </button>
          
          <div class="dropdown-menu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-xl z-30">
            <div class="py-1">
              <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
                <i class="bi bi-pencil-square me-3"></i> Edit
              </a>
              <button onclick="toggleModal('deleteModal')" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                <i class="bi bi-trash3 me-3"></i> Delete
              </button>
            </div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td class="px-4 py-3">2</td>
      <td class="px-4 py-3">17/may/2025</td>
      <td class="px-4 py-3 font-semibold text-gray-700">Admin</td>
      <td class="px-4 py-3 text-gray-600">hr@gmsil.com</td>
      <td class="px-4 py-3">
        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-md text-xs">HR</span>
      </td>
      <td class="px-4 py-3 text-right">
        <div class="relative inline-block text-left dropdown-container">
          <button onclick="toggleDropdown(this)" class="p-2 hover:bg-gray-100 rounded-full transition-colors focus:outline-none">
            <i class="bi bi-three-dots-vertical text-lg"></i>
          </button>
          <div class="dropdown-menu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-xl z-30">
            <div class="py-1">
              <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
                <i class="bi bi-pencil-square me-3"></i> Edit
              </a>
              <button class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                <i class="bi bi-trash3 me-3"></i> Delete
              </button>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </tbody>
</table>
  </div>


  <!-- Pagination -->
  <div class="flex justify-between items-center mt-4">
    <div class="text-gray-500 text-sm">
      Page <strong>1</strong> of <strong>3</strong> — Showing <strong>1–6</strong> of <strong>6</strong> entries
    </div>
    <div class="flex space-x-1">
      <button class="px-3 py-1 rounded-full bg-gray-200 text-gray-700 flex items-center gap-1" disabled>
        <i class="bi bi-arrow-left-circle-fill"></i> Prev
      </button>
      <button class="px-3 py-1 rounded-full bg-blue-500 text-white">1</button>
      <button class="px-3 py-1 rounded-full bg-gray-200 text-gray-700">2</button>
      <button class="px-3 py-1 rounded-full bg-gray-200 text-gray-700">3</button>
      <button class="px-3 py-1 rounded-full bg-gray-200 text-gray-700 flex items-center gap-1">
        Next <i class="bi bi-arrow-right-circle-fill"></i>
      </button>
    </div>
  </div>

    </div>
    <div 
  id="addRoleModal" 
  class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300"
>
  <div 
    class="bg-white w-full max-w-lg rounded-2xl shadow-2xl transform scale-95 transition-transform duration-300 overflow-hidden"
  >
    <div class="flex items-center justify-between p-6 border-b border-slate-100">
      <h5 class="text-xl font-bold text-slate-800">Add Organize Task</h5>
      <button 
        onclick="toggleModal('addRoleModal')" 
        class="text-slate-400 hover:text-red-500 transition-colors"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="p-6">
      <form id="addRoleForm" class="space-y-5">
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-1">User Name</label>
          <input 
            type="text" 
            placeholder="Enter Your Name" 
            class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white transition-all"
          />
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
          <input 
            type="email" 
            placeholder="hr@gmail.com" 
            class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white transition-all"
          />
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-1">Create Password</label>
          <input 
            type="password" 
            placeholder="Minimum 8 characters" 
            class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white transition-all"
          />
        </div>

        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-1">Role</label>
          <select class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 cursor-pointer transition-all">
            <option selected disabled>--Select Role--</option>
            <option>Super Admin</option>
            <option>Admin</option>
            <option>Manager</option>
            <option>Auditor</option>
          </select>
        </div>
      </form>
    </div>

    <div class="flex justify-end gap-3 p-6 bg-slate-50/50 border-t border-slate-100">
      <button 
        onclick="toggleModal('addRoleModal')" 
        class="px-5 py-2 text-sm font-semibold text-slate-600 hover:bg-slate-200 rounded-xl transition-colors"
      >
        Back
      </button>
      <button 
        type="submit" 
        form="addRoleForm"
        class="flex-1 bg-indigo-600 text-white rounded-xl px-4 py-2 hover:bg-indigo-700 transition">
      
        Submit
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
<?php include 'include/footer.php'; ?>
<script>
  function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return; // Check if modal exists

    const modalContent = modal.querySelector('div:first-child > div'); 

    if (modal.classList.contains('opacity-0')) {
      // OPEN MODAL
      modal.classList.remove('opacity-0', 'pointer-events-none');
      modalContent.classList.remove('scale-95');
      modalContent.classList.add('scale-100');
      document.body.classList.add('overflow-hidden'); // Tailwind class to prevent scroll
    } else {
      // CLOSE MODAL
      modal.classList.add('opacity-0', 'pointer-events-none');
      modalContent.classList.add('scale-95');
      modalContent.classList.remove('scale-100');
      document.body.classList.remove('overflow-hidden'); 
    }
  }

  // Close modal when clicking outside the white card
  window.addEventListener('click', function(event) {
    const modal = document.getElementById('addRoleModal');
    // Agar click modal background par ho (na ki content par), toh band kar do
    if (event.target === modal) {
      toggleModal('addRoleModal');
    }
  });
</script>
<script>
  function toggleDropdown(button) {
    // Sabhi dusre open dropdowns ko band karein
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      if (menu !== button.nextElementSibling) {
        menu.classList.add('hidden');
      }
    });

    // Current dropdown ko toggle karein
    const dropdownMenu = button.nextElementSibling;
    dropdownMenu.classList.toggle('hidden');
  }

  // Click outside to close dropdown
  window.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown-container')) {
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
      });
    }
  });
</script>
</body>
</html>