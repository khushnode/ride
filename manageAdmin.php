<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageAdmin</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

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
    <h1 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Manage Admin Details</h1>

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

  <div class="bg-white rounded-xl shadow-md border border-gray-100">
  <div class="min-w-full">
    <table class="w-full text-left border-collapse" id="dataTable">
      <thead class="bg-gradient-to-r from-purple-700 to-indigo-600 text-white">
        <tr>
          <th class="px-4 py-3 text-left">Sr. No.</th>
          <th class="px-4 py-3 text-left">User Name</th>
          <th class="px-4 py-3 text-left">Email</th>
          <th class="px-4 py-3 text-left">Role</th>
          <th class="px-4 py-3 text-left">Status</th>
          <th class="px-4 py-3 text-right">Actions</th>
        </tr>
      </thead>
      <tbody id="tableBody" class="divide-y divide-gray-100 text-sm text-gray-600">
        
      </tbody>
    </table>
  </div>
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
 
<div id="addRoleModal" 
  class="fixed inset-0 z-[10000] flex items-center justify-center bg-slate-900/50 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 overflow-y-auto"
>
  <div class="relative bg-white w-full max-w-4xl my-10 rounded-[30px] shadow-2xl transform scale-95 transition-all duration-300 border border-indigo-50">
    
    <div class="flex items-center justify-between p-6 border-b border-slate-100 bg-gradient-to-r from-indigo-700 to-blue-600 rounded-t-[30px]">
      <div class="flex items-center gap-3 text-white">
        <i class="bi bi-person-plus-fill text-xl"></i>
        <h5 class="text-xl font-bold tracking-wide">Add New Admin</h5>
      </div>
      <button onclick="toggleModal('addRoleModal')" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 text-white hover:bg-white/30 transition shadow-inner">
        <i class="bi bi-x-lg text-sm"></i>
      </button>
    </div>

    <div class="p-8 max-h-[75vh] overflow-y-auto bg-slate-50/50">
      <form id="manageAdminForm" class="space-y-8">
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
          <h6 class="text-indigo-600 font-bold text-xs uppercase tracking-widest mb-4 border-b pb-2">Basic Information</h6>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
              <input type="text" placeholder="Enter full name" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
              <input type="email" placeholder="admin@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Create Password</label>
              <input type="password" placeholder="••••••••" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Admin Role</label>
              <input type="text" placeholder="e.g. Sub-Admin" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
            </div>
          </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
          <h6 class="text-indigo-600 font-bold text-xs uppercase tracking-widest mb-4 border-b pb-2">Assign Module Permissions</h6>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-slate-600">
            <div class="space-y-1">
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Active User</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">User Status</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Notification</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Scheme Transaction</span>
              </label>
            </div>

            <div class="space-y-1">
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">My Products</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Catalogue</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Order Management</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Manage Page</span>
              </label>
            </div>

            <div class="space-y-1">
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Scheme / Offer</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">History</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Complaints</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-indigo-50/50 rounded-xl cursor-pointer transition group">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> 
                <span class="group-hover:text-indigo-700 transition">Feedback</span>
              </label>
            </div>
          </div>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-slate-100">
          <button type="button" onclick="toggleModal('addRoleModal')" class="px-8 py-3 bg-slate-100 text-slate-600 rounded-2xl font-bold hover:bg-slate-200 transition-all">Cancel</button>
          <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition-all active:scale-95 uppercase tracking-wider text-sm">
            Assign Roles
          </button>
        </div>

      </form>
    </div>
  </div>
</div>


<div>
 <div id="viewModal"
  class="fixed inset-0 z-[10000] flex items-center justify-center bg-slate-900/40 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300">

  <div class="bg-white w-full max-w-md rounded-[30px] shadow-[0_20px_60px_rgba(0,0,0,0.15)] overflow-hidden transform scale-95 transition-transform duration-300 border border-indigo-50">
    
    <div class="bg-gradient-to-r from-indigo-600 to-blue-500 px-6 py-4 flex justify-between items-center text-white">
      <div class="flex items-center gap-2">
        <i class="bi bi-person-badge text-xl"></i>
        <h2 class="text-lg font-semibold tracking-wide">User Profile Details</h2>
      </div>
      <button onclick="toggleModal('viewModal')" 
        class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition shadow-inner">
        <i class="bi bi-x-lg text-sm"></i>
      </button>
    </div>

    <div class="p-8">
      <div id="viewContent" class="space-y-4">
        <div class="flex flex-col items-center mb-4">
            <div class="w-20 h-20 bg-indigo-50 rounded-full flex items-center justify-center mb-2">
                <i class="bi bi-person text-4xl text-indigo-500"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-800" id="userNameDetail">John Doe</h3>
            <span class="px-3 py-1 bg-green-50 text-green-600 text-xs rounded-full font-medium">Active Account</span>
        </div>

        <div class="grid grid-cols-1 gap-4 text-sm">
            <div class="p-3 bg-slate-50 rounded-2xl flex items-center gap-3 border border-slate-100">
                <i class="bi bi-envelope text-indigo-500"></i>
                <div>
                    <p class="text-slate-400 text-[10px] uppercase font-bold">Email Address</p>
                    <p class="text-slate-700 font-medium">john@example.com</p>
                </div>
            </div>
            
            <div class="p-3 bg-slate-50 rounded-2xl flex items-center gap-3 border border-slate-100">
                <i class="bi bi-shield-check text-indigo-500"></i>
                <div>
                    <p class="text-slate-400 text-[10px] uppercase font-bold">Account Role</p>
                    <p class="text-slate-700 font-medium">Administrator</p>
                </div>
            </div>
        </div>
      </div>
      
      <button onclick="toggleModal('viewModal')" 
        class="w-full mt-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-2xl font-semibold shadow-lg shadow-indigo-200 transition-all active:scale-95">
        Done
      </button>
    </div>
  </div>
</div>

<div id="editModal"
  class="fixed inset-0 z-[10000] flex items-center justify-center bg-slate-900/50 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 overflow-y-auto">

  <div class="relative bg-white w-full max-w-4xl my-10 rounded-[30px] shadow-2xl transform scale-95 transition-all duration-300 border border-indigo-50">
    
    <div class="flex items-center justify-between p-6 border-b border-slate-100 bg-gradient-to-r from-indigo-700 to-blue-600 rounded-t-[30px]">
      <div class="flex items-center gap-3 text-white">
        <i class="bi bi-pencil-square text-xl"></i>
        <h5 class="text-xl font-bold tracking-wide">Edit Admin Details</h5>
      </div>
      <button onclick="toggleModal('editModal')" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 text-white hover:bg-white/30 transition shadow-inner">
        <i class="bi bi-x-lg text-sm"></i>
      </button>
    </div>

    <div class="p-8 max-h-[75vh] overflow-y-auto bg-slate-50/50">
      <form id="editForm" class="space-y-8">
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <h6 class="text-indigo-600 font-bold text-xs uppercase tracking-widest mb-4 border-b pb-2">Basic Info</h6>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                    <input id="editName" type="text" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <input id="editEmail" type="email" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Change Role</label>
                    <input id="editRole" type="text" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Reset Password (Optional)</label>
                    <input type="password" placeholder="Leave blank to keep current" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all" />
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
          <h6 class="text-indigo-600 font-bold text-xs uppercase tracking-widest mb-4 border-b pb-2">Update Module Permissions</h6>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm text-slate-600">
            <div class="space-y-3">
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Active User</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>User Status</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Notification</span>
              </label>
            </div>

            <div class="space-y-3">
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>My Products</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Catalogue</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Order Management</span>
              </label>
            </div>

            <div class="space-y-3">
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Scheme / Offer</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>History</span>
              </label>
              <label class="flex items-center gap-3 p-2 hover:bg-slate-50 rounded-lg cursor-pointer transition">
                <input type="checkbox" class="w-5 h-5 accent-indigo-600 rounded"> <span>Complaints</span>
              </label>
            </div>
          </div>
        </div>

        <div class="flex justify-end gap-4 pt-4 border-t border-slate-100">
          <button type="button" onclick="toggleModal('editModal')" class="px-8 py-3 bg-slate-100 text-slate-600 rounded-2xl font-bold hover:bg-slate-200 transition-all">Cancel</button>
          <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition-all active:scale-95 uppercase tracking-wider text-sm">
            Save Changes
          </button>
        </div>

      </form>
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
<script>
const tableBody = document.getElementById("tableBody");

const users = [
  { name: "John Doe", email: "john@example.com", role: "Admin", status: "Active" },
  { name: "Jane Smith", email: "jane@example.com", role: "User", status: "Inactive" },
  { name: "David Lee", email: "david@example.com", role: "Editor", status: "Active" }
];

function renderTable() {
  tableBody.innerHTML = "";

  users.forEach((user, index) => {
    tableBody.innerHTML += `
      <tr class="hover:bg-gray-50 transition border-b border-gray-100">
        <td class="px-4 py-4 text-gray-500">${index + 1}</td>
        <td class="px-4 py-4">
            <div class="font-semibold text-gray-800">${user.name}</div>
            <div class="text-xs text-gray-400 italic">ID: User${user.id || '000'}</div>
        </td>
        <td class="px-4 py-4 text-gray-600">${user.email}</td>
        <td class="px-4 py-4 text-gray-600">${user.role}</td>
        <td class="px-4 py-4">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium ${
            user.status === "Active"
              ? "bg-green-50 text-green-600"
              : "bg-red-50 text-red-500"
          }">
            <span class="w-1.5 h-1.5 rounded-full ${user.status === "Active" ? "bg-green-500" : "bg-red-500"}"></span>
            ${user.status}
          </span>
        </td>

        <td class="px-2 py-2 text-right w-16">
  <div class="relative inline-block text-left">  
    <button onclick="toggleDropdown(this)"
      class="p-1.5 hover:bg-gray-100 rounded-md transition border border-gray-200">
      <i class="bi bi-three-dots-vertical text-gray-400 text-sm"></i>
    </button>

    <div class="dropdown-menu hidden absolute right-0 mt-2 z-[9999] 
        w-44 bg-white rounded-[20px] shadow-[0_10px_40px_rgba(0,0,0,0.2)] 
        border border-gray-100 p-2">

      <button onclick="openView(${index})"
class="flex items-center gap-3 w-full px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-xl transition">
<i class="bi bi-eye text-indigo-600"></i> View
</button>

      <button onclick="openEdit(${index})"
class="flex items-center gap-3 w-full px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 rounded-xl transition">
<i class="bi bi-pencil text-green-500"></i> Edit
</button>

      <button class="flex items-center gap-3 w-full px-3 py-2 text-sm font-medium text-red-500 hover:bg-red-50 rounded-xl transition">
        <i class="bi bi-trash"></i> Delete
      </button>

    </div>
  </div>
</td>
</tr>
    `;
  });
}

function toggleDropdown(button) {
  const menu = button.nextElementSibling;

  // Close all dropdowns
  document.querySelectorAll(".dropdown-menu").forEach((el) => {
    if (el !== menu) el.classList.add("hidden");
  });

  menu.classList.toggle("hidden");
}

// Close dropdown when clicking outside
window.addEventListener("click", function (e) {
  if (!e.target.closest(".inline-block")) {
    document.querySelectorAll(".dropdown-menu").forEach((el) => {
      el.classList.add("hidden");
    });
  }
});

renderTable();


function toggleModal(id) {
  const modal = document.getElementById(id);
  modal.classList.toggle("opacity-0");
  modal.classList.toggle("pointer-events-none");
}

// VIEW
function openView(index) {
  document.querySelectorAll(".dropdown-menu").forEach(el => el.classList.add("hidden"));
  const user = users[index];

  document.getElementById("viewContent").innerHTML = `
    <p><strong>Name:</strong> ${user.name}</p>
    <p><strong>Email:</strong> ${user.email}</p>
    <p><strong>Role:</strong> ${user.role}</p>
    <p><strong>Status:</strong> ${user.status}</p>
  `;

  toggleModal("viewModal");
}

// EDIT
function openEdit(index) {
  document.querySelectorAll(".dropdown-menu").forEach(el => el.classList.add("hidden"));
  const user = users[index];

  document.getElementById("editName").value = user.name;
  document.getElementById("editEmail").value = user.email;
  document.getElementById("editRole").value = user.role;

  toggleModal("editModal");
}
</script>
<script>
document.getElementById("exportPdf").addEventListener("click", function () {

    const { jsPDF } = window.jspdf;
    let doc = new jsPDF();

    // Table clone karo
    let table = document.getElementById("dataTable").cloneNode(true);

    // Har row ka last column remove karo
    table.querySelectorAll("tr").forEach(row => {
        row.deleteCell(-1);   // -1 = last column
    });

    // AutoTable me clone pass karo
    doc.autoTable({
        html: table
    });

    doc.save("table-data.pdf");
});
</script>

<script>
document.getElementById("exportExcel").addEventListener("click", function () {

    // Original table clone karo
    let table = document.getElementById("dataTable").cloneNode(true);

    // Har row se last cell remove karo
    table.querySelectorAll("tr").forEach(row => {
        row.deleteCell(-1);   // -1 = last column
    });

    // Export
    let blob = new Blob([table.outerHTML], {
        type: "application/vnd.ms-excel"
    });

    let url = window.URL.createObjectURL(blob);
    let a = document.createElement("a");

    a.href = url;
    a.download = "table-data.xls";
    a.click();
});
</script>
<script>
document.getElementById("printButton").addEventListener("click", function () {
    let table = document.getElementById("dataTable").outerHTML;

    let newWin = window.open("");
    newWin.document.write(`
        <html>
        <head>
            <title>Print</title>
            <style>
                /* Yahan hum 'Action' column ko hide kar rahe hain */
                /* Maan lijiye Action column table ka aakhri (last) column hai */
                th:last-child, td:last-child {
                    display: none;
                }
                
                /* Agar aapne kisi specific class ka use kiya hai, 
                   to aap .action-column { display: none; } bhi likh sakte hain */
                   
                table { width: 100%; border-collapse: collapse; }
                th, td { border: 1px solid black; padding: 8px; text-align: left; }
            </style>
        </head>
        <body>
            ${table}
        </body>
        </html>
    `);

    newWin.document.close();
    
    // Thoda delay taaki styles load ho jayein
    setTimeout(function() {
        newWin.print();
        newWin.close();
    }, 500);
});
</script>
</body>
</html>