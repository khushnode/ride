<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Category</title>
    <script src="https://unpkg.com/lucide@latest"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Excel Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<!-- PDF Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.31/jspdf.plugin.autotable.min.js"></script>
<style>
    .custom-scroll::-webkit-scrollbar {
  width: 0px;
}

.custom-scroll {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;     /* Firefox */
}
/* Hide scrollbar for Chrome, Safari and Opera */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
/* Hide scrollbar but allow scrolling */
.hide-scrollbar::-webkit-scrollbar {
  display: none;
}

.hide-scrollbar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>
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
    <h1 class="text-xl font-bold text-slate-800">Subcategory Details</h1>
<div class="flex items-center gap-4 p-2 bg-transparent w-fit">
  
  <button 
    onclick="exportToExcel()" 
    class="group p-3 text-green-600 transition-all duration-300 rounded-xl active:scale-90">
    <i class="fa-solid fa-file-excel text-2xl group-hover:scale-125 group-hover:text-green-700 transition-all"></i>
  </button>

  <button 
    onclick="exportToPDF()" 
    class="group p-3 text-red-600 transition-all duration-300 rounded-xl active:scale-90">
    <i class="fa-solid fa-file-pdf text-2xl group-hover:scale-125 group-hover:text-red-700 transition-all"></i>
  </button>

  <button 
    onclick="window.print()" 
    class="group p-3 text-emerald-600 transition-all duration-300 rounded-xl active:scale-90">
    <i class="fa-solid fa-print text-2xl group-hover:scale-125 group-hover:text-emerald-700 transition-all"></i>
  </button>
</div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">

  <!-- Total Sub Categories -->
  <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
    <div>
      <p class="text-sm text-slate-500">Total Sub Categories</p>
      <h2 id="totalSubCategory" class="text-2xl font-bold">0</h2>
    </div>
    <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white text-xl">
      <i class="fa-solid fa-layer-group"></i>
    </div>
  </div>

  <!-- Active Sub Categories -->
  <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
    <div>
      <p class="text-sm text-slate-500">Active Sub Categories</p>
      <h2 id="activeSubCategory" class="text-2xl font-bold">0</h2>
    </div>
    <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white text-xl">
      <i class="fa-solid fa-check"></i>
    </div>
  </div>

  <!-- Inactive Sub Categories -->
  <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
    <div>
      <p class="text-sm text-slate-500">Inactive Sub Categories</p>
      <h2 id="inactiveSubCategory" class="text-2xl font-bold">0</h2>
    </div>
    <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-red-500 to-rose-400 
                flex items-center justify-center text-white shadow-md">
      <i class="fa-solid fa-pause"></i>
    </div>
  </div>

  <!-- Latest Sub Category -->
  <div class="bg-white rounded-2xl shadow-sm border p-5 flex items-center justify-between">
    <div>
      <p class="text-sm text-slate-500">Latest Sub Category</p>
      <h2 id="latestSubCategory" class="text-lg font-bold truncate">-</h2>
    </div>
    <div class="w-12 h-12 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xl">
      <i class="fa-solid fa-clock"></i>
    </div>
  </div>

</div>
   <!-- Filters -->
  <div class="bg-white rounded-2xl shadow-sm border p-4">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-3">

      <input type="text" placeholder="Search"
        class="col-span-1 md:col-span-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">

      <input type="text" placeholder="Subcategory"
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
<div class="bg-white rounded-2xl shadow-sm border overflow-x-auto">
    <table class="min-w-[1200px] w-full text-sm" id="myTable">
      <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
        <tr>
          <th class="px-4 py-4 text-left">Sr.No</th>
          <th class="px-4 py-4 text-left">Created At</th>
          <th class="px-4 py-4 text-left">Category</th>
          <th class="px-4 py-4 text-left">Subcategory</th>
          <th class="px-4 py-4 text-left">Name</th>
          <th class="px-4 py-4 text-left w-1/4">Description</th>
          <th class="px-4 py-4 text-center">Images</th>
          <th class="px-4 py-4 text-center">Status</th>
          <th class="px-4 py-4 text-right">Actions</th>
        </tr>
      </thead>
      <tbody id="categoryTable" class="divide-y bg-white">
        </tbody>
    </table>
  </div>
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
<div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">
  <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box">
    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-lg font-semibold text-red-600">Confirm Delete</h2>
      <button onclick="closeModal('deleteModal')" class="text-slate-400 hover:text-red-500 text-xl">&times;</button>
    </div>
    <div class="p-6 text-sm text-slate-600">
      <p>Are you sure you want to <strong class="text-red-600">permanently delete</strong>
        <span id="deleteCategoryName" class="text-amber-500 font-semibold"></span>?
      </p>
      <p class="text-xs text-slate-400 mt-2">This action cannot be undone.</p>
      <input type="hidden" id="deleteCategoryId">
    </div>
    <div class="flex justify-end gap-3 border-t px-6 py-4">
      <button onclick="closeModal('deleteModal')" class="px-4 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">Cancel</button>
      <button onclick="confirmDelete()" class="px-4 py-2 rounded-xl bg-red-600 text-white hover:bg-red-700 transition">Yes, Delete</button>
    </div>
  </div>
</div>



<div id="addCategoryModal"
class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-xl max-h-[90vh] rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box flex flex-col">

    <!-- Header (Sticky) -->
    <div class="flex justify-between items-center border-b px-6 py-4 bg-slate-50 sticky top-0 z-10">
      <h2 class="text-lg font-semibold text-slate-800">Add New Subcategory</h2>
      <button onclick="closeModal('addCategoryModal')" class="text-slate-400 hover:text-red-500 text-2xl">
        &times;
      </button>
    </div>

    <!-- Scrollable Form Body -->
    <form onsubmit="addSubCategory(event)" class="flex flex-col flex-1 overflow-hidden">

      <div class="p-6 space-y-4 overflow-y-auto hide-scrollbar flex-1">

        <div>
          <label class="text-sm font-medium text-slate-600">Category *</label>
          <input type="text" id="category"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" required>
        </div>

        <div>
          <label class="text-sm font-medium text-slate-600">Subcategory *</label>
          <input type="text" id="subcategory"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" required>
        </div>

        <div>
          <label class="text-sm font-medium text-slate-600">Name *</label>
          <input type="text" id="productName"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" required>
        </div>

        <div>
          <label class="text-sm font-medium text-slate-600">Description</label>
          <textarea id="desc" rows="3"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
        </div>

        <div>
          <label class="text-sm font-medium text-slate-600">Image</label>
          <input type="file" id="image"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 outline-none">
        </div>

        <div>
          <label class="text-sm font-medium text-slate-600">Status</label>
          <select id="status"
          class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
          </select>
        </div>

      </div>

      <!-- Sticky Footer -->
      <div class="flex justify-end gap-3 border-t px-6 py-4 bg-slate-50 sticky bottom-0">
        <button type="button" onclick="closeModal('addCategoryModal')"
        class="px-6 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">
          Cancel
        </button>

        <button type="submit"
        class="px-8 bg-indigo-600 text-white rounded-xl py-2 hover:bg-indigo-700 transition">
          Save
        </button>
      </div>

    </form>

  </div>
</div>

<div id="editModal"
class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-xl max-h-[90vh] rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box flex flex-col">

    <!-- Header (Sticky) -->
    <div class="flex justify-between items-center border-b px-6 py-4 bg-slate-50 sticky top-0 z-10">
      <h2 class="text-lg font-bold text-slate-800">Edit Subcategory</h2>
      <button onclick="closeModal('editModal')" class="text-slate-400 hover:text-red-500 text-2xl">
        &times;
      </button>
    </div>

    <!-- Scrollable Body -->
    <div class="p-6 space-y-4 overflow-y-auto hide-scrollbar flex-1">

      <input type="hidden" id="editProductId">

      <div>
        <label class="text-sm font-medium text-slate-600">Category</label>
        <input type="text" id="editCategory"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Subcategory</label>
        <input type="text" id="editSubcategory"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Name</label>
        <input type="text" id="editProductName"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Description</label>
        <textarea id="editDesc" rows="3"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Status</label>
        <select id="editStatus"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
      </div>

      <div>
        <label class="text-sm font-medium text-slate-600">Update Image</label>
        <input type="file" id="editImage"
        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 outline-none">
      </div>

    </div>

    <!-- Footer (Sticky) -->
    <div class="flex justify-end gap-3 border-t px-6 py-4 bg-slate-50 sticky bottom-0">
      <button onclick="closeModal('editModal')"
      class="px-6 py-2 rounded-xl bg-slate-200 hover:bg-slate-300 transition">
        Cancel
      </button>

      <button onclick="saveEdit()"
      class="px-8 bg-indigo-600 text-white rounded-xl py-2 hover:bg-indigo-700 transition">
        Update
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

</body>
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


document.addEventListener("click", function(e){
  if(!e.target.closest(".relative.inline-block")){
    document.querySelectorAll(".dropdown-menu").forEach(m=>{
      m.classList.add("hidden");
    });
  }
});
</script>
<script>

// Close on outside click
document.addEventListener("click", function (e) {
  if (!e.target.closest(".relative")) {
    document.querySelectorAll(".dropdown-menu").forEach(menu => {
      menu.classList.add("hidden");
    });
  }
});

</script>
<script>

// Dropdown
function toggleDropdown(button) {
  const menu = button.nextElementSibling;
  document.querySelectorAll(".dropdown-menu").forEach(m => {if(m!==menu) m.classList.add("hidden");});
  menu.classList.toggle("hidden");
}
document.addEventListener("click", e => {if(!e.target.closest(".relative.inline-block")) document.querySelectorAll(".dropdown-menu").forEach(m=>m.classList.add("hidden"));});

// Modal functions
function openModal(id){const modal=document.getElementById(id);const box=modal.querySelector(".modal-box");modal.classList.remove("hidden");modal.classList.add("flex");setTimeout(()=>{box.classList.remove("scale-95","opacity-0");box.classList.add("scale-100","opacity-100");},50);}
function closeModal(id){const modal=document.getElementById(id);const box=modal.querySelector(".modal-box");box.classList.add("scale-95","opacity-0");setTimeout(()=>{modal.classList.add("hidden");modal.classList.remove("flex");},200);}
document.addEventListener("click", function (e) {document.querySelectorAll("[id$='Modal']").forEach(modal => {if (e.target === modal) closeModal(modal.id);});});
document.addEventListener("keydown", function(e){if(e.key==="Escape"){document.querySelectorAll("[id$='Modal']").forEach(modal=>closeModal(modal.id));}});

function openEditModal(id) {
  const item = subCategories.find(i => i.id === id);
  if (!item) return;

  document.getElementById("editProductId").value = item.id;
  document.getElementById("editCategory").value = item.category;
  document.getElementById("editSubcategory").value = item.subcategory;
  document.getElementById("editProductName").value = item.name;
  document.getElementById("editDesc").value = item.description;

  openModal("editModal");
}

function saveEdit() {
  const id = parseInt(document.getElementById("editProductId").value);

  const item = subCategories.find(i => i.id === id);
  if (!item) return;

  item.category = document.getElementById("editCategory").value;
  item.subcategory = document.getElementById("editSubcategory").value;
  item.name = document.getElementById("editProductName").value;
  item.description = document.getElementById("editDesc").value;

  renderTable();
  closeModal("editModal");
}

function openDeleteModal(id, name) {
  document.getElementById("deleteCategoryId").value = id;
  document.getElementById("deleteCategoryName").innerText = name;
  openModal("deleteModal");
}

function confirmDelete() {
  const id = parseInt(document.getElementById("deleteCategoryId").value);

  const index = subCategories.findIndex(i => i.id === id);
  if (index !== -1) {
    subCategories.splice(index, 1);
  }

  renderTable();
  closeModal("deleteModal");
}

renderTable();

function exportToExcel() {
    const table = document.getElementById("myTable").cloneNode(true);

    Array.from(table.rows).forEach(row => {
        row.deleteCell(4);
    });

    const wb = XLSX.utils.table_to_book(table, { sheet: "Category Data" });
    XLSX.writeFile(wb, "Category_List.xlsx");
}

function exportToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF('p', 'pt', 'a4');
    
  
    doc.autoTable({ 
        html: '#myTable',
        margin: { top: 40 },
        theme: 'striped',
        headStyles: { fillColor: [79, 70, 229] }, 
        columnStyles: {
            4: { display: 'none' }
        },
        didParseCell: function(data) {
            if (data.column.index === 4) {
                data.cell.text = ''; // 
            }
        }
    });
    
    doc.save("Table_Report.pdf");
}</script>
 <script>
    // 1. Dummy Data matching your image
   const subCategories = [
  {
    id: 1,
    createdAt: "27 May 2025",
    category: "Daal's",
    subcategory: "Pulses",
    name: "Chana Dal",
    description: "High quality organic chana dal sourced from farms.",
    image: null,
    status: "Active"
  },
  {
    id: 2,
    createdAt: "28 May 2025",
    category: "Rice",
    subcategory: "Grains",
    name: "Basmati Rice",
    description: "Premium long grain aromatic rice.",
    image: "https://via.placeholder.com/40",
    status: "Inactive"
  }
];

function addSubCategory(e) {
  e.preventDefault();

  const newItem = {
    id: subCategories.length + 1,
    createdAt: new Date().toLocaleDateString("en-GB", {
      day: "2-digit",
      month: "short",
      year: "numeric"
    }),
    category: document.getElementById("category").value,
    subcategory: document.getElementById("subcategory").value,
    name: document.getElementById("productName").value,
    description: document.getElementById("desc").value,
    image: null,
    status: document.getElementById("status").value
  };

  subCategories.push(newItem);
  renderTable();
  closeModal("addCategoryModal");
}

    function renderTable() {
  const tableBody = document.getElementById('categoryTable');

  tableBody.innerHTML = subCategories.map((item, index) => `
    <tr class="hover:bg-gray-50 transition-colors">
      
      <td class="px-4 py-4 text-gray-500">${index + 1}</td>
      <td class="px-4 py-4 whitespace-nowrap">${item.createdAt}</td>
      <td class="px-4 py-4 font-medium text-indigo-600">${item.category}</td>
      <td class="px-4 py-4 font-medium text-indigo-600">${item.subcategory}</td>
      <td class="px-4 py-4 font-semibold text-gray-800">${item.name}</td>
      <td class="px-4 py-4 text-gray-500 text-xs">${item.description}</td>

      <td class="px-4 py-4 text-center">
        ${item.image 
          ? `<img src="${item.image}" class="w-10 h-10 rounded border mx-auto">`
          : '<span class="text-gray-400 italic text-xs">No Image</span>'}
      </td>

      <td class="px-4 py-4 text-center">
        <span class="${item.status === 'Active' 
          ? 'text-green-600 bg-green-100 px-2 py-1 rounded-full text-xs font-bold' 
          : 'text-red-600 bg-red-100 px-2 py-1 rounded-full text-xs font-bold'}">
          ${item.status}
        </span>
      </td>

      <td class="px-4 py-4 text-right whitespace-nowrap">
        <div class="flex justify-end gap-2">
          
          <button 
            onclick="openEditModal(${item.id})"
            class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition">
            <i data-lucide="pencil-line" class="w-4 h-4"></i>
          </button>

          <button 
            onclick="openDeleteModal(${item.id}, '${item.name}')"
            class="flex items-center justify-center w-8 h-8 rounded-full bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition">
            <i data-lucide="trash-2" class="w-4 h-4"></i>
          </button>

        </div>
      </td>
    </tr>
  `).join('');

  lucide.createIcons();
}
document.addEventListener("DOMContentLoaded", function () {
  renderTable();
});
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function () {

  const notiBtn = document.getElementById("notiBtn");
  const notiBar = document.getElementById("notiBar");

  if(notiBtn && notiBar){
    notiBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      notiBar.classList.toggle("hidden");
    });

    // Outside click close
    document.addEventListener("click", function (e) {
      if (!e.target.closest("#notiBar") && !e.target.closest("#notiBtn")) {
        notiBar.classList.add("hidden");
      }
    });
  }

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const notiBtn = document.getElementById("notiBtn");
  const notiBar = document.getElementById("notiBar");

  if (notiBtn && notiBar) {

    notiBtn.addEventListener("click", function (e) {
      e.stopPropagation();   // VERY IMPORTANT
      notiBar.classList.toggle("hidden");
    });

    // Close when clicking outside
    document.addEventListener("click", function (e) {
      if (!notiBar.contains(e.target) && !notiBtn.contains(e.target)) {
        notiBar.classList.add("hidden");
      }
    });

  }

});
</script>
</html>