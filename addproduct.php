
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
            Vendors Details
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

    <!-- Table -->
<div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-visible relative">

    <!-- Responsive Scroll Wrapper -->
    <div class="w-full overflow-x-auto">

        <table class="min-w-[700px] w-full text-sm relative">
            <thead class="bg-mayview-blue text-white text-xs uppercase tracking-widest">
                <tr>
                    <th class="px-4 sm:px-6 py-4 text-left">SR.NO.</th>
                    <th class="px-4 sm:px-6 py-4 text-left">Product</th>
                    <th class="px-4 sm:px-6 py-4 text-left">Category</th>
                    <th class="px-4 sm:px-6 py-4 text-left">Status</th>
                    <th class="px-4 sm:px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition">

                    <td class="px-4 sm:px-6 py-4">1</td>

                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="./assets/images/img5.jpg"
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl object-cover">
                            <div>
                                <p class="font-bold text-slate-700 text-sm sm:text-base">
                                    Chicken Biryani
                                </p>
                                <p class="text-xs text-slate-400">
                                    ID: 2784678233
                                </p>
                            </div>
                        </div>
                    </td>

                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                        Non-Vegetarian
                    </td>

                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-3 py-1 text-xs font-bold bg-emerald-50 text-emerald-600 rounded-full">
                            Active
                        </span>
                    </td>

                    <!-- Actions (UNCHANGED) -->
                    <td class="px-4 sm:px-6 py-4 text-right relative">

                        <div class="relative inline-block">

                            <button onclick="toggleDropdown(this)"
                                class="w-9 h-9 flex items-center justify-center rounded-xl hover:bg-slate-100 transition">
                                <i class="fa-solid fa-ellipsis-vertical text-slate-500"></i>
                            </button>

                            <div class="dropdown-menu hidden absolute right-0 top-full mt-2 w-44 
                            bg-white rounded-2xl shadow-2xl border border-slate-200 
                            py-2 z-[9999]">

                                <button onclick="openModal('viewModal')" 
                                    class="flex items-center gap-2 w-full px-4 py-2 text-sm hover:bg-slate-50 text-slate-600">
                                    <i class="fa-solid fa-eye text-indigo-500"></i>
                                    View
                                </button>

                                <button onclick="openModal('editModal')" 
                                    class="flex items-center gap-2 w-full px-4 py-2 text-sm hover:bg-slate-50 text-slate-600">
                                    <i class="fa-solid fa-pen text-emerald-500"></i>
                                    Edit
                                </button>

                                <button onclick="openModal('deleteModal')" 
                                    class="flex items-center gap-2 w-full px-4 py-2 text-sm hover:bg-red-50 text-red-600">
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
</div>
    <!-- Pagination -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
        <div class="text-slate-500">
            Page <span class="font-bold text-mayview-dark">1</span> of 3
        </div>

        <div class="flex gap-2">
            <button class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 transition">
                Prev
            </button>
            <button class="px-4 py-2 rounded-xl bg-mayview-blue text-white">
                1
            </button>
            <button class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 transition">
                2
            </button>
            <button class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 transition">
                3
            </button>
            <button class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 transition">
                Next
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
<div id="editModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 p-4">

  <div class="bg-white w-full max-w-lg rounded-[2rem] shadow-xl p-6 space-y-5">

    <div class="flex justify-between items-center">
      <h2 class="font-black text-lg">Edit Product</h2>
      <button onclick="closeModal('editModal')" class="text-xl">&times;</button>
    </div>

    <form class="space-y-4">
      <div>
        <label class="text-sm font-bold">Product Name</label>
        <input type="text" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100 outline-none focus:ring-2 focus:ring-mayview-blue">
      </div>

      <div>
        <label class="text-sm font-bold">Image</label>
        <input type="file" class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-100">
      </div>

      <div class="flex justify-end gap-3">
        <button type="button" onclick="closeModal('editModal')" 
        class="px-4 py-2 bg-slate-200 rounded-xl">
          Cancel
        </button>

        <button type="submit" 
        class="px-4 py-2 bg-mayview-blue text-white rounded-xl">
          Save
        </button>
      </div>
    </form>

  </div>
</div>
<div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 p-4">

  <div class="bg-white w-full max-w-md rounded-[2rem] shadow-xl p-6 space-y-5">

    <div class="flex justify-between items-center">
      <h2 class="font-black text-lg text-red-600">Confirm Delete</h2>
      <button onclick="closeModal('deleteModal')" class="text-xl">&times;</button>
    </div>

    <p class="text-sm">
      Are you sure you want to permanently delete 
      <span class="font-bold text-red-600">Chicken Breast</span>?
    </p>

    <div class="flex justify-end gap-3">
      <button onclick="closeModal('deleteModal')" 
      class="px-4 py-2 bg-slate-200 rounded-xl">
        Cancel
      </button>

      <button class="px-4 py-2 bg-red-600 text-white rounded-xl">
        Delete
      </button>
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

        

<script>
function openModal(id) {

    closeAllDropdowns();

    const modal = document.getElementById(id);
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}


function closeModal(id) {
  document.getElementById(id).classList.add('hidden');
  document.getElementById(id).classList.remove('flex');
}
function closeAllDropdowns() {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });
}

</script>
<script>

function toggleDropdown(button) {

    // Close all open dropdowns first
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });

    const menu = button.parentElement.querySelector('.dropdown-menu');
    menu.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative.inline-block')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    }
});

</script>
<script>
function toggleDropdown(button) {
    // Close all dropdowns first
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });

    // Open clicked one
    const menu = button.nextElementSibling;
    menu.classList.toggle('hidden');
}

// Close on outside click
document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    }
});
</script>

<script>

function addVariant() {
    const container = document.getElementById('variantContainer');
    const firstVariant = container.querySelector('.variant-item');

    const newVariant = firstVariant.cloneNode(true);

    // Clear input values
    newVariant.querySelectorAll('input').forEach(input => input.value = '');
    newVariant.querySelectorAll('select').forEach(select => select.selectedIndex = 0);

    container.appendChild(newVariant);
}

function removeVariant(button) {
    const container = document.getElementById('variantContainer');
    const variants = container.querySelectorAll('.variant-item');

    if (variants.length > 1) {
        button.closest('.variant-item').remove();
    } else {
        alert("At least one variant is required.");
    }
}

</script>

<?php include 'include/footer.php'; ?>
