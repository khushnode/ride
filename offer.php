<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer's</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    <div class="p-6 bg-slate-50 min-h-screen font-sans text-slate-700">
  
  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-slate-800">Vendors Details</h1>

    <div class="flex items-center gap-2">
      <button id="exportExcel" title="Excel" class="p-2.5 bg-white border rounded-full text-emerald-600 hover:shadow-md transition shadow-sm">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 384 512"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg>
      </button>
      <button id="exportPdf" title="PDF" class="p-2.5 bg-white border rounded-full text-red-500 hover:shadow-md transition shadow-sm">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 512 512"><path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z"/></svg>
      </button>
      <button id="printButton" title="Print" class="p-2.5 bg-white border rounded-full text-blue-500 hover:shadow-md transition shadow-sm">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 512 512"><path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-2xl shadow-sm border flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center text-white shadow-lg shadow-indigo-100">
          <i class="bi bi-people text-xl"></i>
        </div>
        <div>
          <p class="text-sm text-slate-400 font-medium">Total Orders</p>
          <h2 class="text-2xl font-bold text-slate-800">6</h2>
        </div>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-emerald-500 flex items-center justify-center text-white shadow-lg shadow-emerald-100">
          <i class="bi bi-person-check text-xl"></i>
        </div>
        <div>
          <p class="text-sm text-slate-400 font-medium">Active Partners</p>
          <h2 class="text-2xl font-bold text-slate-800">6</h2>
        </div>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-rose-500 flex items-center justify-center text-white shadow-lg shadow-rose-100">
          <i class="bi bi-person-x text-xl"></i>
        </div>
        <div>
          <p class="text-sm text-slate-400 font-medium">Inactive Partners</p>
          <h2 class="text-2xl font-bold text-slate-800">0</h2>
        </div>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-amber-500 flex items-center justify-center text-white shadow-lg shadow-amber-100">
          <i class="bi bi-person-gear text-xl"></i>
        </div>
        <div>
          <p class="text-sm text-slate-400 font-medium">Total Admin</p>
          <h2 class="text-2xl font-bold text-slate-800">5</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white p-4 rounded-2xl shadow-sm border mb-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-3">
    <input type="text" placeholder="Search" class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm">
    <input type="text" placeholder="Category" class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm">
    <select class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm appearance-none">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="Deactive">Deactive</option>
    </select>
    <input type="date" class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm">
    <input type="date" class="w-full px-4 py-2 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm">
    
    <div class="flex gap-2">
      <button class="flex-1 bg-slate-200 text-slate-700 font-semibold py-2 rounded-xl hover:bg-slate-300 transition text-sm">Reset</button>
      <button
  onclick="openModal('addOfferModal')"
  class="flex-1 bg-indigo-600 text-white font-semibold py-2 rounded-xl hover:bg-indigo-700 transition shadow-md shadow-indigo-100 text-sm"
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
            <th class="px-6 py-4">Sr. No.</th>
            <th class="px-6 py-4">Offer Title</th>
            <th class="px-6 py-4">Type</th>
            <th class="px-6 py-4">Product/Category</th>
            <th class="px-6 py-4">Discount</th>
            <th class="px-6 py-4">Validity</th>
            <th class="px-6 py-4">Status</th>
            <th class="px-6 py-4 text-right">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          <tr class="hover:bg-slate-50 transition">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4 font-semibold text-slate-800">Weekend Meat Sale</td>
            <td class="px-6 py-4">% Off</td>
            <td class="px-6 py-4">Chicken</td>
            <td class="px-6 py-4 font-bold text-indigo-600">20%</td>
            <td class="px-6 py-4 text-slate-500 text-xs">22–24 Jun 2025</td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full font-bold text-[10px] uppercase">Active</span>
            </td>
            <td class="px-6 py-4 text-right relative">
  <div class="inline-block text-left">
    <button 
      onclick="toggleTableDropdown(event, this)" 
      class="p-2 hover:bg-slate-100 rounded-lg transition"
    >
      <i class="bi bi-three-dots-vertical"></i>
    </button>

    <div class="table-dropdown hidden absolute right-6 mt-2 w-44 bg-white rounded-xl shadow-xl border border-slate-100 py-2 z-50">
      <!-- <button onclick="openModal('viewModal')" class="flex items-center gap-3 w-full px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition">
        <i class="bi bi-eye text-indigo-500"></i>
        View Details
      </button> -->

      <button class="flex items-center gap-3 w-full px-4 py-2 text-sm text-amber-600 hover:bg-amber-50 transition">
        <i class="bi bi-pause-circle"></i>
        Deactivate
      </button>

      <button class="flex items-center gap-3 w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition border-t border-slate-50">
        <i class="bi bi-trash"></i>
        Delete
      </button>
    </div>
  </div>
</td>
          </tr>
          <tr class="hover:bg-slate-50 transition">
            <td class="px-6 py-4">2</td>
            <td class="px-6 py-4 font-semibold text-slate-800">Flat ₹100 Off</td>
            <td class="px-6 py-4">Flat</td>
            <td class="px-6 py-4">Mutton</td>
            <td class="px-6 py-4 font-bold text-indigo-600">₹100</td>
            <td class="px-6 py-4 text-slate-500 text-xs">25–30 Jun 2025</td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 bg-slate-100 text-slate-500 rounded-full font-bold text-[10px] uppercase">Inactive</span>
            </td>
            <td class="px-6 py-4 text-right">
              <button class="p-2 hover:bg-slate-100 rounded-lg transition"><i class="bi bi-three-dots-vertical"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
    <p class="text-sm text-slate-400">
      Page <span class="font-bold text-slate-700">1</span> of <span class="font-bold text-slate-700">3</span> 
      — Showing <span class="font-bold text-slate-700">1–6</span> of 6 entries
    </p>
    <nav class="flex items-center gap-1">
      <button class="px-4 py-2 rounded-xl bg-white border text-slate-400 cursor-not-allowed text-sm font-medium">Prev</button>
      <button class="w-10 h-10 rounded-xl bg-indigo-600 text-white text-sm font-bold shadow-md shadow-indigo-100">1</button>
      <button class="w-10 h-10 rounded-xl bg-white border text-slate-600 hover:bg-slate-50 text-sm font-medium transition">2</button>
      <button class="w-10 h-10 rounded-xl bg-white border text-slate-600 hover:bg-slate-50 text-sm font-medium transition">3</button>
      <button class="px-4 py-2 rounded-xl bg-white border text-slate-600 hover:bg-slate-50 text-sm font-medium transition">Next</button>
    </nav>
  </div>

</div>
<div id="viewModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
  <div class="bg-white w-full max-w-md mx-4 rounded-2xl shadow-2xl transform transition-all">
    
    <div class="flex items-center justify-between p-5 border-b border-slate-100">
      <h5 class="text-xl font-bold text-slate-800" id="viewModalLabel">Offer Details</h5>
      <button onclick="closeModal('viewModal')" class="text-slate-400 hover:text-slate-600 transition">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>

    <div class="p-6 space-y-4">
      <div class="flex flex-col gap-1">
        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Offer Title</label>
        <p id="modalOfferTitle" class="text-slate-700 font-medium bg-slate-50 p-3 rounded-xl border border-slate-100">
          Loading...
        </p>
      </div>

      <div class="flex flex-col gap-1">
        <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Status</label>
        <div>
          <span id="modalOfferStatus" class="inline-flex px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full font-bold text-[10px] uppercase">
            Loading...
          </span>
        </div>
      </div>

      <div class="mt-4 p-4 bg-amber-50 rounded-xl border border-amber-100">
        <p class="text-sm text-amber-700 flex items-center gap-2">
          <i class="fa-solid fa-circle-info"></i>
          More details can go here...
        </p>
      </div>
    </div>

    <div class="p-4 border-t border-slate-50 flex justify-end">
      <button onclick="closeModal('viewModal')" class="px-6 py-2 bg-slate-100 text-slate-600 font-semibold rounded-xl hover:bg-slate-200 transition text-sm">
        Close
      </button>
    </div>

  </div>
</div>

<div id="addOfferModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden p-4">
  <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden transform transition-all">
    
    <div class="bg-indigo-600 px-6 py-4 flex items-center justify-between">
      <h5 class="text-lg font-bold text-white" id="addOfferModalLabel">
        Add Offer Details
      </h5>
      <button onclick="closeModal('addOfferModal')" class="text-white/80 hover:text-white transition">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>

    <form id="offerForm">
      <div class="p-6 space-y-5">
        
        <div>
          <label for="offerTitle" class="block text-sm font-semibold text-slate-700 mb-1">Offer Title</label>
          <input
            type="text"
            id="offerTitle"
            name="offerTitle"
            placeholder="Enter offer title"
            class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition text-sm"
            required
          />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label for="offerType" class="block text-sm font-semibold text-slate-700 mb-1">Type</label>
            <select
              id="offerType"
              name="offerType"
              class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm appearance-none"
              required
            >
              <option value="" selected disabled>Select Type</option>
              <option value="Flat">Flat</option>
              <option value="Percentage">Percentage</option>
              <option value="Buy 1 Get 1">Buy 1 Get 1</option>
              <option value="Free Shipping">Free Shipping</option>
            </select>
          </div>

          <div>
            <label for="discountValue" class="block text-sm font-semibold text-slate-700 mb-1">Discount</label>
            <input
              type="text"
              id="discountValue"
              name="discountValue"
              placeholder="e.g., 20% or ₹500"
              class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"
              required
            />
          </div>
        </div>

        <div>
          <label for="productOrCategory" class="block text-sm font-semibold text-slate-700 mb-1">Product/Category</label>
          <input
            type="text"
            id="productOrCategory"
            name="productOrCategory"
            placeholder="Enter product or category name"
            class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"
            required
          />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label for="offerStartDate" class="block text-sm font-semibold text-slate-700 mb-1">Start Date</label>
            <input
              type="date"
              id="offerStartDate"
              name="offerStartDate"
              class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"
              required
            />
          </div>
          <div>
            <label for="offerEndDate" class="block text-sm font-semibold text-slate-700 mb-1">End Date</label>
            <input
              type="date"
              id="offerEndDate"
              name="offerEndDate"
              class="w-full px-4 py-2.5 rounded-xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"
              required
            />
          </div>
        </div>
      </div>

      <div class="px-6 py-4 bg-slate-50 flex justify-end gap-3 border-t border-slate-100">
        <button 
          type="reset" 
          class="px-5 py-2 text-sm font-semibold text-slate-600 hover:text-slate-800 transition"
        >
          Reset
        </button>
        <button 
          type="submit" 
          class="px-6 py-2 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition flex items-center gap-2"
        >
          <i class="fas fa-save"></i>
          Save Offer
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
<script>
  function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Scroll disable karne ke liye
  }

  function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
    document.body.style.overflow = 'auto'; // Scroll wapas enable karne ke liye
  }
  function toggleTableDropdown(event, btn) {
    // Event propagation roko taaki window click trigger na ho
    event.stopPropagation();
    
    // Sabse pehle baaki saare khule huye dropdowns band karo
    document.querySelectorAll('.table-dropdown').forEach(dropdown => {
      if (dropdown !== btn.nextElementSibling) {
        dropdown.classList.add('hidden');
      }
    });

    // Current dropdown ko toggle karo
    const currentDropdown = btn.nextElementSibling;
    currentDropdown.classList.toggle('hidden');
  }

  // Agar user kahin bhi bahar click kare toh dropdown band ho jaye
  window.addEventListener('click', function() {
    document.querySelectorAll('.table-dropdown').forEach(dropdown => {
      dropdown.classList.add('hidden');
    });
  });
</script>
</body>
</html>