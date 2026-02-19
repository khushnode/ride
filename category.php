<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="p-4 space-y-6">

  <!-- Header -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
    <h1 class="text-xl font-bold text-slate-800">Vendors Details</h1>

    <div class="flex items-center gap-3">
      <button class="text-green-600 hover:scale-110 transition text-2xl" title="Excel">
        <i class="fa-solid fa-file-excel"></i>
      </button>

      <button class="text-red-600 hover:scale-110 transition text-2xl" title="PDF">
        <i class="fa-solid fa-file-pdf"></i>
      </button>

      <button class="text-emerald-600 hover:scale-110 transition text-2xl" title="Print">
        <i class="fa-solid fa-print"></i>
      </button>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
      <div>
        <p class="text-sm text-slate-500">Top Categories</p>
        <h2 class="text-2xl font-bold">6</h2>
      </div>
      <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white text-xl">
        <i class="fa-solid fa-trophy"></i>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
      <div>
        <p class="text-sm text-slate-500">Total Products</p>
        <h2 class="text-2xl font-bold">6</h2>
      </div>
      <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white text-xl">
        <i class="fa-solid fa-plus"></i>
      </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
  <div>
    <p class="text-sm text-slate-500">Total Category</p>
    <h2 class="text-2xl font-bold">0</h2>
  </div>

  <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-red-500 to-rose-400 
              flex items-center justify-center text-white shadow-md">
    <i class="fa-solid fa-layer-group text-lg"></i>
  </div>
</div>


    <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
      <div>
        <p class="text-sm text-slate-500">Inactive Categories</p>
        <h2 class="text-2xl font-bold">5</h2>
      </div>
      <div class="w-12 h-12 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xl">
        <i class="fa-solid fa-pause"></i>
      </div>
    </div>

  </div>

  <!-- Filters -->
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
  onclick="openModal('addCategoryModal')"
  class="flex items-center justify-center gap-2 
         bg-amber-500 text-white 
         px-5 py-2.5 
         rounded-xl 
         text-sm font-semibold 
         hover:bg-amber-600 
         active:scale-95 
         transition-all duration-200">
  + Add
</button>

      </div>

    </div>
  </div>

  <!-- Table -->
  <div class="bg-white rounded-2xl shadow-sm border overflow-x-auto">
    <table class="min-w-[800px] w-full text-sm">

      <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
        <tr>
          <th class="px-6 py-4 text-left">Sr.No.</th>
          <th class="px-6 py-4 text-left">Date/Time</th>
          <th class="px-6 py-4 text-left">Category</th>
          <th class="px-6 py-4 text-left">Status</th>
          <th class="px-6 py-4 text-right">Actions</th>
        </tr>
      </thead>

      <tbody class="divide-y">

        <tr class="hover:bg-slate-50 transition">
          <td class="px-6 py-4">1</td>

          <td class="px-6 py-4">
            10 May 2025<br>
            <span class="text-xs text-slate-400">05:49 AM</span>
          </td>

          <td class="px-6 py-4 flex items-center gap-3">
            <img src="./assets/images/img3.jpg"
              class="w-10 h-10 rounded-full object-cover">
            <div>
              <p class="font-semibold">Liver</p>
              <p class="text-xs text-slate-400">ID: LIVERID123</p>
            </div>
          </td>

          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs bg-emerald-100 text-emerald-600 rounded-full font-semibold">
              Active
            </span>
          </td>

          <!-- Action Dropdown -->
          <td class="px-6 py-4 text-right relative">

            <div class="relative inline-block">
              <button onclick="toggleDropdown(this)"
                class="p-2 rounded-lg hover:bg-slate-100">
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </button>

               <div class="dropdown-menu hidden absolute right-0 mt-2 w-44 
            bg-white rounded-xl shadow-xl border py-2 z-50">

  <!-- Edit -->
  <button
    onclick="openModal('editModal')"
    class="flex items-center gap-3 w-full px-4 py-2 text-sm 
           text-slate-700 hover:bg-slate-100 transition">
    <i class="fa-solid fa-pen-to-square text-indigo-500 text-sm"></i>
    Edit
  </button>

  <!-- Delete -->
  <button
    onclick="openModal('deleteModal')"
    class="flex items-center gap-3 w-full px-4 py-2 text-sm 
           text-red-600 hover:bg-red-50 transition">
    <i class="fa-solid fa-trash text-red-500 text-sm"></i>
    Delete
  </button>

  <!-- Deactivate -->
  <button
    class="flex items-center gap-3 w-full px-4 py-2 text-sm 
           text-amber-600 hover:bg-amber-50 transition">
    <i class="fa-solid fa-toggle-off text-amber-500 text-sm"></i>
    Deactivate
  </button>

</div>

            </div>

          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="flex flex-col md:flex-row justify-between items-center gap-4">
    <div class="text-sm text-slate-500">
      Page <strong>1</strong> of <strong>3</strong> — Showing
      <strong>1–6</strong> of <strong>6</strong>
    </div>

    <div class="flex gap-2">
      <button class="px-3 py-1 rounded-lg border text-slate-500">Prev</button>
      <button class="px-3 py-1 rounded-lg bg-indigo-600 text-white">1</button>
      <button class="px-3 py-1 rounded-lg border">2</button>
      <button class="px-3 py-1 rounded-lg border">3</button>
      <button class="px-3 py-1 rounded-lg border">Next</button>
    </div>
  </div>
</div>
<!-- Edit Modal -->
<div id="editModal"
  class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box">

    <!-- Header -->
    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-lg font-semibold text-slate-800">Edit Admin</h2>
      <button onclick="closeModal('editModal')" class="text-slate-400 hover:text-red-500 text-xl">
        &times;
      </button>
    </div>

    <!-- Body -->
    <div class="p-6 space-y-4">
      <div>
        <label class="text-sm font-medium text-slate-600">Name</label>
        <input type="text"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none"
          value="Product Name">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Image</label>
        <input type="file"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
      </div>
    </div>

    <!-- Footer -->
    <div class="flex justify-end gap-3 border-t px-6 py-4">
      <button onclick="closeModal('editModal')"
        class="px-4 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">
        Cancel
      </button>
      <button
        class="flex-1 bg-indigo-600 text-white rounded-xl px-4 py-2 hover:bg-indigo-700 transition">
        Save Changes
      </button>
    </div>

  </div>
</div>
<!-- Delete Modal -->
<div id="deleteModal"
  class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box">

    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-lg font-semibold text-red-600">Confirm Delete</h2>
      <button onclick="closeModal('deleteModal')" class="text-slate-400 hover:text-red-500 text-xl">
        &times;
      </button>
    </div>

    <div class="p-6 text-sm text-slate-600">
      <p>
        Are you sure you want to <strong class="text-red-600">permanently delete</strong>
        <span class="text-amber-500 font-semibold">Chicken Breast</span>
        from Category list?
      </p>
      <p class="text-xs text-slate-400 mt-2">This action cannot be undone.</p>
    </div>

    <div class="flex justify-end gap-3 border-t px-6 py-4">
      <button onclick="closeModal('deleteModal')"
        class="px-4 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">
        Cancel
      </button>
      <button
        class="px-4 py-2 rounded-xl bg-red-600 text-white hover:bg-red-700 transition">
        Yes, Delete
      </button>
    </div>

  </div>
</div>
<!-- Add Category Modal -->
<div id="addCategoryModal"
  class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box">

    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-lg font-semibold text-slate-800">Add New Category</h2>
      <button onclick="closeModal('addCategoryModal')" class="text-slate-400 hover:text-red-500 text-xl">
        &times;
      </button>
    </div>

    <form class="p-6 space-y-4">

      <div>
        <label class="text-sm font-medium text-slate-600">
          Category Name <span class="text-red-500">*</span>
        </label>
        <input type="text"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none"
          placeholder="e.g., Chicken, Mutton, Fish">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Upload Image</label>
        <input type="file"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Status</label>
        <select
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
          <option disabled selected>--Select Status--</option>
          <option>Active</option>
          <option>Inactive</option>
        </select>
      </div>

      <div class="flex justify-end gap-3 pt-4 border-t">
        <button type="button" onclick="closeModal('addCategoryModal')"
          class="px-4 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">
          Cancel
        </button>
        <button
          class="flex-1 bg-indigo-600 text-white rounded-xl px-4 py-2 hover:bg-indigo-700 transition">
          Save Category
        </button>
      </div>

    </form>

  </div>
</div>

<script>
    function openModal(id) {
  const modal = document.getElementById(id);
  const box = modal.querySelector(".modal-box");

  modal.classList.remove("hidden");
  modal.classList.add("flex");

  setTimeout(() => {
    box.classList.remove("scale-95", "opacity-0");
    box.classList.add("scale-100", "opacity-100");
  }, 50);
}

function closeModal(id) {
  const modal = document.getElementById(id);
  const box = modal.querySelector(".modal-box");

  box.classList.add("scale-95", "opacity-0");

  setTimeout(() => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  }, 200);
}

document.addEventListener("click", function (e) {
  document.querySelectorAll("[id$='Modal']").forEach(modal => {
    if (e.target === modal) {
      closeModal(modal.id);
    }
  });
});

document.addEventListener("keydown", function(e){
  if(e.key === "Escape"){
    document.querySelectorAll("[id$='Modal']").forEach(modal=>{
      closeModal(modal.id);
    });
  }
});
function toggleDropdown(btn) {
  const menu = btn.parentElement.querySelector(".dropdown-menu");
  document.querySelectorAll(".dropdown-menu").forEach(m => {
    if (m !== menu) m.classList.add("hidden");
  });
  menu.classList.toggle("hidden");
}

document.addEventListener("click", function(e){
  if(!e.target.closest(".relative.inline-block")){
    document.querySelectorAll(".dropdown-menu").forEach(m=>{
      m.classList.add("hidden");
    });
  }
});
</script>
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
</html>