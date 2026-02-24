
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
    <div class="p-6 md:p-8 space-y-8">

    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <h1 class="text-lg md:text-xl font-black text-mayview-dark">
           Product's Details
        </h1>

        <div class="flex items-center gap-3">
            <button class="w-10 h-10 flex items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 hover:bg-emerald-600 hover:text-white transition">
                <i class="fa-solid fa-file-excel"></i>
            </button>

            <button class="w-10 h-10 flex items-center justify-center rounded-2xl bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition">
                <i class="fa-solid fa-file-pdf"></i>
            </button>

            <button class="w-10 h-10 flex items-center justify-center rounded-2xl bg-blue-50 text-blue-600 hover:bg-mayview-blue hover:text-white transition">
                <i class="fa-solid fa-print"></i>
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

        <!-- Card -->
        <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">
                        Total Products
                    </p>
                    <h2 class="text-3xl font-black mt-1">6</h2>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-box"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">
                        Active Products
                    </p>
                    <h2 class="text-3xl font-black mt-1">6</h2>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-check"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">
                        Inactive Products
                    </p>
                    <h2 class="text-3xl font-black mt-1">0</h2>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">
                        Out Of Stock
                    </p>
                    <h2 class="text-3xl font-black mt-1">5</h2>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-ban"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Filters -->
    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4">

            <input type="text" placeholder="Search"
                class="px-4 py-2 rounded-xl bg-slate-100 text-sm outline-none focus:ring-2 focus:ring-mayview-blue">

            <input type="text" placeholder="Product ID"
                class="px-4 py-2 rounded-xl bg-slate-100 text-sm outline-none focus:ring-2 focus:ring-mayview-blue">

            <select
                class="px-4 py-2 rounded-xl bg-slate-100 text-sm outline-none focus:ring-2 focus:ring-mayview-blue">
                <option>Status</option>
                <option>Active</option>
                <option>Deactive</option>
            </select>

            <input type="date"
                class="px-4 py-2 rounded-xl bg-slate-100 text-sm outline-none focus:ring-2 focus:ring-mayview-blue">

            <input type="date"
                class="px-4 py-2 rounded-xl bg-slate-100 text-sm outline-none focus:ring-2 focus:ring-mayview-blue">

            <div class="flex gap-3">
                <button class="flex-1 bg-slate-200 text-slate-700 py-2 rounded-xl text-sm font-bold hover:bg-slate-300 transition">
                    Reset
                </button>
                <button onclick="openModal('addProductModal')" 
class="bg-mayview-blue text-white px-4 py-2 rounded-xl text-sm font-bold">
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
          <th class="px-4 py-4 text-left">Vendor Name</th>
          <th class="px-4 py-4 text-left">Shop Name</th>
          <th class="px-4 py-4 text-left">Category</th>
          <th class="px-4 py-4 text-left">Subcategory</th>
          <th class="px-4 py-4 text-left">Name</th>
          <th class="px-4 py-4 text-left w-1/4">Description</th>
          <th class="px-4 py-4 text-left">Price</th>
          <th class="px-4 py-4 text-left">Qty</th>
          <th class="px-4 py-4 text-left">In Stock</th>
          <th class="px-4 py-4 text-left">Unit</th>
          <th class="px-4 py-4 text-center">Images</th>
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
  
  <div id="editModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm p-4">
  <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box overflow-hidden">
    
    <div class="flex justify-between items-center border-b px-6 py-4 bg-slate-50">
      <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
        <i data-lucide="pencil-line" class="w-5 h-5 text-indigo-600"></i>
        Edit Product Details
      </h2>
      <button onclick="closeModal('editModal')" class="text-slate-400 hover:text-red-500 transition-colors text-2xl">&times;</button>
    </div>

    <div class="p-6 max-h-[70vh] overflow-y-auto custom-scrollbar no-scrollbar">
      <input type="hidden" id="editProductId">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Category</label>
          <input type="text" id="editCategory" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Subcategory</label>
          <input type="text" id="editSubcategory" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Vendor Name</label>
          <input type="text" id="editVendor" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Shop Name</label>
          <input type="text" id="editShop" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div class="md:col-span-1">
          <label class="text-xs font-bold text-slate-500 uppercase">Product Name</label>
          <input type="text" id="editProductName" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Price (₹)</label>
          <input type="number" id="editPrice" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>

        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Quantity</label>
          <input type="number" id="editQty" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Unit</label>
          <select id="editUnit" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
            <option>kg</option>
            <option>gram</option>
            <option>pcs</option>
            <option>ltr</option>
          </select>
        </div>
      </div>

      <div class="mt-4">
        <label class="text-xs font-bold text-slate-500 uppercase">Description</label>
        <textarea id="editDesc" rows="3" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">In Stock</label>
          <select id="editStock" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none">
            <option>Yes</option>
            <option>No</option>
          </select>
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 uppercase">Update Image</label>
          <input type="file" class="w-full mt-1 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
        </div>
      </div>
    </div>

    <div class="flex justify-end gap-3 border-t px-6 py-4 bg-slate-50">
      <button onclick="closeModal('editModal')" class="px-6 py-2 rounded-xl bg-white border border-slate-200 text-slate-600 hover:bg-slate-100 transition font-medium">Cancel</button>
      <button onclick="saveEdit()" class="px-8 bg-indigo-600 text-white rounded-xl py-2 hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition font-medium">Update Product</button>
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
<div id="viewModal" class="fixed inset-0 z-50 hidden items-center justify-end bg-black/50 pr-[100px]">
  <div class="bg-white w-full max-w-4xl rounded-[2rem] shadow-xl animate-scale">

    <div class="flex justify-between items-center p-6 border-b">
      <h2 class="text-lg font-black text-mayview-dark">Product Details</h2>
      <button onclick="closeModal('viewModal')" class="text-slate-400 hover:text-black text-xl">&times;</button>
    </div>

    <div class="p-6 space-y-6 max-h-[80vh] overflow-y-auto">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <img src="./assets/images/img1.jpg" class="rounded-2xl w-full object-cover">

        <div class="md:col-span-2 space-y-3">
          <p><span class="font-bold">Category:</span> Non-Vegetarian</p>
          <p><span class="font-bold">Product Name:</span> Chicken Biryani</p>
          <span class="px-3 py-1 text-xs bg-emerald-50 text-emerald-600 rounded-full font-bold">
            Active
          </span>
        </div>
      </div>

      <div>
        <h3 class="font-bold mb-3">Product Variants</h3>

        <div class="overflow-x-auto border rounded-2xl">
          <table class="min-w-full text-sm">
            <thead class="bg-slate-100 text-xs uppercase">
              <tr>
                <th class="px-4 py-3 text-left">SR</th>
                <th class="px-4 py-3 text-left">Qty</th>
                <th class="px-4 py-3 text-left">Unit</th>
                <th class="px-4 py-3 text-left">Pieces</th>
                <th class="px-4 py-3 text-left">MRP</th>
                <th class="px-4 py-3 text-left">Sell</th>
                <th class="px-4 py-3 text-left">Offer</th>
              </tr>
            </thead>
            <tbody class="divide-y">
              <tr>
                <td class="px-4 py-3">1</td>
                <td class="px-4 py-3">500</td>
                <td class="px-4 py-3">Gram</td>
                <td class="px-4 py-3">6-8 pieces</td>
                <td class="px-4 py-3">₹200</td>
                <td class="px-4 py-3">₹180</td>
                <td class="px-4 py-3">₹20</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>

  </div>
</div>
<div id="addProductModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-4">

    <div class="bg-white w-full max-w-6xl rounded-xl shadow-2xl overflow-hidden">
        
        <div class="flex justify-between items-center p-4 border-b border-gray-100">
            <h2 class="text-gray-700 font-medium">Add New Product</h2>
            <button onclick="closeModal('addProductModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
        </div>

        <div class="p-6 space-y-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Select Category</label>
                    <select class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 text-gray-500 focus:outline-none focus:ring-1 focus:ring-yellow-400">
                        <option>Select category</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Product Image</label>
                    <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden">
                        <label class="bg-gray-100 px-4 py-3 text-sm border-r border-gray-200 cursor-pointer hover:bg-gray-200 transition">Choose File</label>
                        <span class="px-4 text-gray-400 text-sm">No file chosen</span>
                        <input type="file" class="hidden">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Product Name</label>
                    <input type="text" placeholder="Enter product name" class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:outline-none focus:ring-1 focus:ring-yellow-400">
                </div>
            </div>

    <div class="flex justify-between items-center mb-4">
        <h3 class="font-bold text-gray-800">Product Variants</h3>

        <button type="button"
            onclick="addVariant()"
            class="text-yellow-500 border border-yellow-500 px-4 py-1 rounded-lg text-sm font-medium hover:bg-yellow-50 transition">
            Add Variant
        </button>
    </div>           

                <div id="variantContainer" class="space-y-4">

        <!-- Single Variant Template -->
        <div class="variant-item relative grid grid-cols-1 md:grid-cols-6 gap-4 p-4 border border-gray-100 rounded-xl bg-white shadow-sm">

            <button type="button"
                onclick="removeVariant(this)"
                class="absolute -top-2 -right-2 bg-white text-gray-400 border border-gray-200 rounded-full w-6 h-6 flex items-center justify-center text-xs hover:text-red-500 shadow-sm">
                ✕
            </button>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Quantity</label>
                <input type="text" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Unit</label>
                <select class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
                    <option>Gram</option>
                    <option>Kg</option>
                    <option>Piece</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Piece</label>
                <input type="text" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">MRP</label>
                <input type="text" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Selling Price</label>
                <input type="text" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Save Offer</label>
                <input type="text" class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg">
            </div>

        </div>

    </div>
</div>
<div class="flex justify-end gap-3 p-6 pt-0">
            <button class="bg-mayview-blue text-white px-4 py-2 rounded-xl text-sm font-bold">
                Add Product
            </button>
            <button class="px-8 py-3 bg-gray-500 text-white font-bold rounded-xl hover:bg-gray-600 transition shadow-md" onclick="closeModal('addProductModal')">
                Cancel
            </button>
        </div>
    </div>
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
  <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl scale-95 opacity-0 transition-all duration-300 modal-box max-h-[90vh] overflow-y-auto custom-scroll">
    <div class="flex justify-between items-center border-b px-6 py-4">
      <h2 class="text-lg font-semibold text-slate-800">Add New Product</h2>
      <button onclick="closeModal('addCategoryModal')" class="text-slate-400 hover:text-red-500 text-xl">
        &times;
      </button>
    </div>

    <form class="p-6 space-y-4 max-w-4xl mx-auto bg-white rounded-2xl shadow-sm">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="text-sm font-medium text-slate-600">Category <span class="text-red-500">*</span></label>
      <input type="text" id="category" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none border-transparent focus:border-indigo-500" placeholder="e.g., Rice">
    </div>
    <div>
      <label class="text-sm font-medium text-slate-600">Subcategory <span class="text-red-500">*</span></label>
      <input type="text" id="subcategory" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., Grains">
    </div>

    <div>
      <label class="text-sm font-medium text-slate-600">Vendor Name</label>
      <input type="text" id="vendor" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., Fresh Mart">
    </div>
    <div>
      <label class="text-sm font-medium text-slate-600">Shop Name</label>
      <input type="text" id="shop" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., City Store">
    </div>

    <div>
      <label class="text-sm font-medium text-slate-600">Product Name <span class="text-red-500">*</span></label>
      <input type="text" id="productName" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., Basmati Rice">
    </div>
    <div>
      <label class="text-sm font-medium text-slate-600">Price (₹)</label>
      <input type="number" id="price" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., 150.00">
    </div>

    <div>
      <label class="text-sm font-medium text-slate-600">Quantity</label>
      <input type="number" id="qty" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="e.g., 200">
    </div>
    <div>
      <label class="text-sm font-medium text-slate-600">Unit</label>
      <select id="unit" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
        <option value="kg">kg</option>
        <option value="gram">gram</option>
        <option value="ltr">ltr</option>
        <option value="pcs">pcs</option>
      </select>
    </div>
  </div>

  <div>
    <label class="text-sm font-medium text-slate-600">Description</label>
    <textarea rows="3" id="desc" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none" placeholder="Enter product details..."></textarea>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="text-sm font-medium text-slate-600">Upload Product Image</label>
      <input type="file" id="image" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:bg-indigo-50 file:text-indigo-700">
    </div>

    <div>
      <label class="text-sm font-medium text-slate-600">In Stock</label>
      <select id="inStock" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 focus:ring-2 focus:ring-indigo-500 outline-none">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>
  </div>

  <div class="flex justify-end gap-3 pt-6 border-t mt-4">
    <button type="button" onclick="closeModal()" 
      class="px-6 py-2 rounded-xl bg-slate-200 text-slate-700 font-semibold hover:bg-slate-300 transition">
      Cancel
    </button>
    <button type="submit" 
      class="px-10 bg-indigo-600 text-white rounded-xl font-semibold py-2 hover:bg-indigo-700 shadow-lg shadow-indigo-200 transition">
      Save Product
    </button>
  </div>
</form>
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
<script>

function toggleDropdown(button) {
  
  // Close all other dropdowns
  document.querySelectorAll(".dropdown-menu").forEach(menu => {
    if(menu !== button.nextElementSibling) {
      menu.classList.add("hidden");
    }
  });

  // Toggle current
  button.nextElementSibling.classList.toggle("hidden");
}

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


// Delete modal
function openDeleteModal(id,name){
  openModal('deleteModal');
  document.getElementById('deleteCategoryId').value=id;
  document.getElementById('deleteCategoryName').innerText=name;
}

function confirmDelete(){
  const id=parseInt(document.getElementById('deleteCategoryId').value);
  categories=categories.filter(c=>c.id!==id);
  renderTable();
  closeModal('deleteModal');
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
    const products = [
      {
        id: 1,
        createdAt: "27 May 2025",
        vendor: "N/A",
        shop: "N/A",
        category:"Daal's",
        subcategory: "Pulses (Dal)",
        name: "Chana Dal",
        desc: "Sourced from certified organic farms, our Premium Organic Chana Dal is unpolished, retaining all natural nutrients.",
        price: "129.00",
        qty: 500,
        inStock: "Yes",
        unit: "kg",
        image: null // null matlab 'No Image' text dikhayenge
      },
      {
        id: 2,
        createdAt: "28 May 2025",
        vendor: "Fresh Mart",
        shop: "City Store",
        category:"Rice",
        subcategory: "Grains",
        name: "Basmati Rice",
        desc: "Long-grain aromatic rice perfect for biryani and special occasions.",
        price: "150.00",
        qty: 200,
        inStock: "Yes",
        unit: "kg",
        image: "https://via.placeholder.com/40"
      }
    ];

    // 2. Function to Render Table
    function renderTable() {
      const tableBody = document.getElementById('categoryTable');
      tableBody.innerHTML = products.map((item, index) => `
        <tr class="hover:bg-gray-50 transition-colors">
          <td class="px-4 py-4 text-gray-500">${index + 1}</td>
          <td class="px-4 py-4 whitespace-nowrap">${item.createdAt}</td>
          <td class="px-4 py-4 text-gray-400">${item.vendor}</td>
          <td class="px-4 py-4 text-gray-400">${item.shop}</td>
                    <td class="px-4 py-4 font-medium text-indigo-600">${item.category}</td>
          <td class="px-4 py-4 font-medium text-indigo-600">${item.subcategory}</td>
          <td class="px-4 py-4 font-semibold text-gray-800">${item.name}</td>
          <td class="px-4 py-4 text-gray-500 leading-relaxed text-xs">${item.desc}</td>
          <td class="px-4 py-4 font-bold text-gray-900">₹${item.price}</td>
          <td class="px-4 py-4">${item.qty}</td>
          <td class="px-4 py-4">
            <span class="${item.inStock === 'Yes' ? 'text-green-600' : 'text-red-600'} font-bold">
              ${item.inStock}
            </span>
          </td>
          <td class="px-4 py-4">${item.unit}</td>
          <td class="px-4 py-4 text-center">
            ${item.image ? `<img src="${item.image}" class="w-10 h-10 rounded border mx-auto">` : '<span class="text-gray-400 italic text-xs">No Image</span>'}
          </td>
         <td class="px-4 py-4 text-right whitespace-nowrap">
  <div class="flex justify-end gap-2">
    
    <button 
      onclick="openEditModal(${item.id}, '${item.name}', '${item.inStock}')"
      class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-sm group"
      title="Edit Item">
      <i data-lucide="pencil-line" class="w-4 h-4 group-hover:scale-110 transition-transform"></i>
    </button>

    <button 
      onclick="openDeleteModal(${item.id}, '${item.name}')"
      class="flex items-center justify-center w-8 h-8 rounded-full bg-red-50 text-red-600 hover:bg-red-600 hover:text-white transition-all duration-300 shadow-sm group"
      title="Delete Item">
      <i data-lucide="trash-2" class="w-4 h-4 group-hover:scale-110 transition-transform"></i>
    </button>

  </div>
</td>

      `).join('');

        // Icons trigger karna na bhulein
        lucide.createIcons();
      }

      lucide.createIcons(); // Icons active karne ke liye
    

    renderTable();
  </script>

<?php include 'include/footer.php'; ?>
