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
      Bennar Details
    </h1>

  </div>



  <!-- Filters -->
     <div class="flex justify-end mb-6">
        <button
             onclick="openAddModal()"
            class="inline-block w-auto bg-amber-500 hover:bg-amber-600 text-white text-sm font-semibold px-4 py-2 rounded-xl transition">
            + Add Banner
        </button>
    </div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-visible">

  <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-1">
  <div class="overflow-x-auto" style="min-height: 300px;"> <table class="min-w-[900px] w-full text-sm">
      <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
        <tr>
          <th class="px-6 py-4 text-left">Sr. No.</th>
          <th class="px-6 py-4 text-left">Name</th>
          <th class="px-6 py-4 text-left">Location</th>
          <th class="px-6 py-4 text-left">Image</th>
          <th class="px-6 py-4 text-left">Status</th>
          <th class="px-6 py-4 text-right">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-100">
        <tr class="hover:bg-slate-50 transition">
          <td class="px-6 py-4 text-slate-500 font-medium">01</td>
          <td class="px-6 py-4 font-semibold text-slate-700">Premium Cuts Store</td>
          <td class="px-6 py-4 text-slate-600">Hero Section</td>
          <td class="px-6 py-4">
            <img src="https://via.placeholder.com/150" class="w-12 h-12 rounded-lg object-cover border border-slate-200">
          </td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs bg-emerald-100 text-emerald-600 rounded-full font-semibold">Active</span>
          </td>

          <td class="px-6 py-4 text-right">
            <div class="relative inline-block text-left">
              <button onclick="toggleDropdown(this, event)" class="p-2 rounded-full hover:bg-slate-100 transition focus:outline-none">
                <i class="fa-solid fa-ellipsis-vertical text-slate-500"></i>
              </button>

              <div class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-2xl border border-slate-100 py-2 z-[9999]">
                <button onclick="openActionModal('active')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 transition">
                  <i class="fa-solid fa-circle-check text-emerald-500 w-4"></i> Active
                </button>
                <button onclick="openActionModal('deactivate')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 transition">
                  <i class="fa-solid fa-circle-pause text-amber-500 w-4"></i> Deactivate
                </button>
                <button onclick="openEditModal('1', 'Premium Cuts', 'heroSection')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 transition">
                  <i class="fa-solid fa-pen-to-square text-blue-500 w-4"></i> Edit
                </button>
                <div class="my-1 border-t border-slate-100"></div>
                <button onclick="openActionModal('delete')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">
                  <i class="fa-solid fa-trash w-4"></i> Delete
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

      <button  onclick="closeAddModal()"
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
            Banner name
          </label>
          <input type="text"
            name="bannername"
            placeholder="Enter banner name"
            required
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
           Banner img
          </label>
          <input type="file" name="bannerimg"class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        </div>

        <!-- Tag -->
        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Location
          </label>
           <select name="location" id="" class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
            <option value="heroSection">Hero Section</option>
            <option value="heroSection">Sidebar Section</option>
           </select>
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
<!-- Modal -->
<div id="actionModal" 
     class="hidden fixed inset-0 bg-black/40 flex items-center justify-center z-[9999]">

  <div class="bg-white rounded-2xl shadow-2xl w-96 p-6 relative">

    <h2 id="modalTitle" class="text-lg font-semibold mb-4">
      Action
    </h2>

    <p class="text-gray-600 mb-6">
      Are you sure you want to continue?
    </p>

    <div class="flex justify-end gap-3">
      <button onclick="closeActionModal()" 
        class="px-4 py-2 text-sm bg-gray-100 rounded-lg hover:bg-gray-200">
        Cancel
      </button>

      <button 
        class="px-4 py-2 text-sm bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
        Confirm
      </button>
    </div>

  </div>
</div>

<div id="editBannerModal"
     class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">

  <div class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden">

    <div class="flex items-center justify-between px-6 py-4 bg-blue-600"> <h5 class="text-lg font-semibold text-white">
        Update Banner Details
      </h5>

      <button onclick="closeEditModal()"
        class="text-white hover:text-slate-200 text-xl">
        ✕
      </button>
    </div>

    <form id="editBannerForm" enctype="multipart/form-data">
      
      <input type="hidden" name="banner_id" id="edit_banner_id">

      <div class="p-6 space-y-5">

        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Banner name
          </label>
          <input type="text"
            id="edit_bannername"
            name="bannername"
            placeholder="Enter banner name"
            required
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
        </div>

        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Banner img (Leave empty to keep current)
          </label>
          <input type="file" name="bannerimg" 
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
        </div>

        <div>
          <label class="block text-sm font-medium text-slate-600 mb-1">
            Location
          </label>
          <select name="location" id="edit_location" 
            class="w-full px-4 py-2 rounded-xl bg-slate-100 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
            <option value="heroSection">Hero Section</option>
            <option value="sidebarSection">Sidebar Section</option>
          </select>
        </div>

      </div>

      <div class="flex justify-end gap-3 px-6 py-4 bg-slate-50">

        <button type="button" onclick="closeEditModal()"
          class="px-4 py-2 text-sm rounded-xl bg-slate-200 hover:bg-slate-300 transition">
          Cancel
        </button>

        <button type="submit"
          class="px-5 py-2 text-sm font-semibold rounded-xl 
                 bg-blue-600 hover:bg-blue-700 text-white transition">
          Update Changes
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
<script>
  // Modal open karne ka function
function openEditModal(id, name, location) {
    const modal = document.getElementById('editBannerModal');
    
    // Values ko fields mein set karna
    document.getElementById('edit_banner_id').value = id;
    document.getElementById('edit_bannername').value = name;
    document.getElementById('edit_location').value = location;

    // Modal dikhane ke liye
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

// Modal close karne ka function
function closeEditModal() {
    const modal = document.getElementById('editBannerModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

/* ------------------ DROPDOWN ------------------ */

function toggleDropdown(btn, e) {
    e.stopPropagation();

    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu !== btn.nextElementSibling) {
            menu.classList.add('hidden');
        }
    });

    btn.nextElementSibling.classList.toggle('hidden');
}

document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });
});


/* ------------------ ADD BANNER MODAL ------------------ */

function openAddModal() {
    document.getElementById('addBannerModal').classList.remove('hidden');
    document.getElementById('addBannerModal').classList.add('flex');
}

function closeAddModal() {
    document.getElementById('addBannerModal').classList.add('hidden');
}


/* ------------------ ACTION MODAL (Edit/Delete/Active) ------------------ */

function openActionModal(action) {

    // Close dropdown first
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.add('hidden');
    });

    const modal = document.getElementById("actionModal");
    const title = document.getElementById("modalTitle");

    title.innerText = action.charAt(0).toUpperCase() + action.slice(1);

    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeActionModal() {
    document.getElementById("actionModal").classList.add("hidden");
}


/* ------------------ CLOSE MODAL OUTSIDE CLICK ------------------ */

document.getElementById("addBannerModal").addEventListener("click", function(e) {
    if (e.target.id === "addBannerModal") {
        closeAddModal();
    }
});

document.getElementById("actionModal").addEventListener("click", function(e) {
    if (e.target.id === "actionModal") {
        closeActionModal();
    }
});

</script>
</main>
<?php include 'include/footer.php'; ?>