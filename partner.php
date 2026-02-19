<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<div class="p-6 bg-gray-50 min-h-screen">
  <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Vendors Details</h1>

    <div class="flex gap-2">
      <button id="exportExcel" title="Excel" class="p-2 hover:bg-green-50 rounded-full transition-colors text-green-600">
        <i class="fa-solid fa-file-excel text-2xl"></i>
      </button>
      <button id="exportPdf" title="PDF" class="p-2 hover:bg-red-50 rounded-full transition-colors text-red-500">
        <i class="fa-solid fa-file-pdf text-2xl"></i>
      </button>
      <button id="printButton" title="Print" class="p-2 hover:bg-blue-50 rounded-full transition-colors text-blue-500">
        <i class="fa-solid fa-print text-2xl"></i>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-purple-600 to-indigo-500 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end">
        <span class="text-sm font-medium text-gray-500">Total Orders</span>
        <span class="text-3xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-plus-fill text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end">
        <span class="text-sm font-medium text-gray-500">Today's Orders</span>
        <span class="text-3xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-rose-500 to-red-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-rose-500 to-red-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-dash text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end">
        <span class="text-sm font-medium text-gray-500">Pending Orders</span>
        <span class="text-3xl font-bold text-gray-800">0</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-check-fill text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end">
        <span class="text-sm font-medium text-gray-500">Completed Orders</span>
        <span class="text-3xl font-bold text-gray-800">5</span>
      </div>
    </div>
  </div>

  <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
      <input type="text" placeholder="Search" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 transition-all">
      <input type="text" placeholder="Mobile No." class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
      <select class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm focus:outline-none">
        <option value="">Status</option>
        <option>Active</option>
        <option>Deactive</option>
      </select>
      <input type="date" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm">
      <input type="date" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm">
      <button class="w-full py-2 bg-purple-600 text-white rounded-full text-sm font-semibold hover:bg-purple-700 transition-colors shadow-md">
        Reset
      </button>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gradient-to-r from-purple-700 to-indigo-600 text-white">
          <tr>
            <th class="px-6 py-4 font-semibold text-sm">Sr.No.</th>
            <th class="px-6 py-4 font-semibold text-sm">Reg.Date</th>
            <th class="px-6 py-4 font-semibold text-sm">Partner Info.</th>
            <th class="px-6 py-4 font-semibold text-sm">Contact</th>
            <th class="px-6 py-4 font-semibold text-sm">Store Name</th>
            <th class="px-6 py-4 font-semibold text-sm text-center">Status</th>
            <th class="px-6 py-4 font-semibold text-sm text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 text-sm text-gray-600">
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">
              <span class="font-medium text-gray-800">10 May 2025</span><br>
              <span class="text-xs text-gray-400">05:49 AM</span>
            </td>
            <td class="px-6 py-4">
              <div class="font-medium text-gray-800">Partner_7446</div>
              <div class="text-xs text-gray-400">ID: PARTNER7774468212</div>
            </td>
            <td class="px-6 py-4">1234567890</td>
            <td class="px-6 py-4">
              <div class="font-medium text-gray-800">Store_name</div>
              <div class="text-xs text-gray-400">Store ID: Store7774468212</div>
            </td>
            <td class="px-6 py-4 text-center">
              <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-bold inline-flex items-center gap-1">
                <i class="fa-solid fa-toggle-on"></i> Active
              </span>
            </td>
           <td class="px-6 py-4 text-right">
  <div class="relative inline-block text-left">
    <button onclick="toggleDropdown(event, 'dropdown-1')" class="text-gray-400 hover:text-gray-600 p-2 rounded-full border border-gray-200 hover:bg-gray-50 transition">
      <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <!-- Dropdown Menu -->
    <div id="dropdown-1" class="hidden absolute right-0 mt-2 w-52 bg-white rounded-2xl shadow-lg border border-gray-100 z-50 overflow-hidden">
      <button onclick="toggleModal('viewModal'); closeAllDropdowns()" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-eye w-5"></i> View Details
      </button>
      <button onclick="toggleModal('orderModal'); closeAllDropdowns()" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-cart-shopping w-5"></i> View Orders
      </button>
      <button onclick="toggleModal('inventoryModal'); closeAllDropdowns()" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        <i class="fa-solid fa-boxes-stacked w-5"></i> Inventory
      </button>
      <button onclick="toggleModal('earningModal'); closeAllDropdowns()" class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-t">
        <i class="fa-solid fa-indian-rupee-sign w-5"></i> Earnings
      </button>
    </div>
  </div>
</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
    <div class="text-sm text-gray-500">
      Page <span class="font-bold text-gray-800">1</span> of <span class="font-bold text-gray-800">3</span> 
      — Showing <span class="font-bold text-gray-800">1–6</span> of 6 entries
    </div>
    <nav class="flex gap-1">
      <button class="px-4 py-2 rounded-full border border-gray-200 text-sm text-gray-400 cursor-not-allowed">Prev</button>
      <button class="px-4 py-2 rounded-full bg-purple-600 text-white text-sm shadow-md">1</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-sm hover:bg-gray-100">2</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-sm hover:bg-gray-100">3</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-sm hover:bg-gray-100">Next</button>
    </nav>
  </div>
</div>
<div id="viewModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-semibold flex items-center gap-2">
        Partner_7446
        <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
      </h5>
      <button onclick="toggleModal('viewModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
    </div>
    
    <div class="p-6 text-xs uppercase tracking-wider">
      <h6 class="font-bold text-gray-700 mb-3">Partners Details</h6>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div>
          <label class="block text-gray-500 mb-1">First Name</label>
          <p class="border rounded px-3 py-2 bg-gray-50">Neeraj</p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Phone Number</label>
          <p class="border rounded px-3 py-2 bg-gray-50">1234567890</p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Shop Name</label>
          <p class="border rounded px-3 py-2 bg-gray-50">xyz store</p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Pin Code</label>
          <p class="border rounded px-3 py-2 bg-gray-50">123569</p>
        </div>
      </div>

      <h6 class="font-bold text-gray-700 mb-3">Bank Details</h6>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">Branch</span> SBI Main Branch
        </div>
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">A/C Number</span> 12345678901
        </div>
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">IFSC Code</span> 1235645895625478
        </div>
      </div>

      <div class="flex flex-wrap gap-6 mb-6">
        <div>
          <h6 class="font-bold mb-2">Photo of Shop</h6>
          <img src="./assets/images/Sample-Medical-Doctor-Bill-Receipt-Template.jpg" class="h-32 rounded border shadow-sm">
        </div>
        <div>
          <h6 class="font-bold mb-2">Photo of Food License</h6>
          <img src="./assets/images/Sample-Medical-Doctor-Bill-Receipt-Template.jpg" class="h-32 rounded border shadow-sm">
        </div>
      </div>

      <div class="flex justify-end gap-3 mt-6 pt-4 border-t">
        <button class="px-6 py-2 border border-red-500 text-red-500 rounded hover:bg-red-50 transition uppercase font-bold">Reject</button>
        <button class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition uppercase font-bold">Verify</button>
      </div>
    </div>
  </div>
</div>

<div id="orderModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-7xl">
    <div class="flex items-center justify-between p-4 border-b bg-gray-800 text-white rounded-t-lg">
      <h5 class="text-lg font-bold">Order Service</h5>
      <button onclick="toggleModal('orderModal')" class="text-white hover:text-gray-300 text-2xl">&times;</button>
    </div>
    <div class="p-4 overflow-x-auto">
      <table class="w-full text-left border-collapse min-w-[1000px]">
        <thead>
          <tr class="bg-blue-600 text-white text-xs uppercase">
            <th class="p-3 border">Sr. No.</th>
            <th class="p-3 border">Date</th>
            <th class="p-3 border">Order ID</th>
            <th class="p-3 border">Amount</th>
            <th class="p-3 border">Customer</th>
            <th class="p-3 border">Delivery Status</th>
          </tr>
        </thead>
        <tbody class="text-xs">
          <tr class="hover:bg-gray-50 transition">
            <td class="p-3 border">1</td>
            <td class="p-3 border">30 Apr 2025<br><span class="text-gray-400">02:41 AM</span></td>
            <td class="p-3 border font-semibold">ORDER7774468212</td>
            <td class="p-3 border font-bold">₹150.00</td>
            <td class="p-3 border text-gray-600">User Name <br> ID: 4468212</td>
            <td class="p-3 border text-center">
              <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full font-bold">Completed</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="inventoryModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-5xl">
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-bold">Inventory</h5>
      <button onclick="toggleModal('inventoryModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
    </div>
    <div class="p-4 overflow-x-auto">
      <table class="w-full text-sm border">
        <thead class="bg-purple-600 text-white">
          <tr>
            <th class="p-3">Product</th>
            <th class="p-3">Quantity</th>
            <th class="p-3">Price</th>
            <th class="p-3">Value</th>
            <th class="p-3">Status</th>
          </tr>
        </thead>
        <tbody class="text-center divide-y">
          <tr>
            <td class="p-3 flex items-center gap-3 text-left">
              <img src="./assets/images/img2.jpg" class="w-10 h-10 rounded-full border">
              <div>
                <p class="font-bold">Chicken Breast</p>
                <span class="text-xs text-gray-400 tracking-tight">ID: Chicken777</span>
              </div>
            </td>
            <td class="p-3">50 Kg</td>
            <td class="p-3">₹200</td>
            <td class="p-3 font-bold text-green-600">₹10,000</td>
            <td class="p-3">
              <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs font-semibold">Available</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div id="earningModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl">
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-bold">Earning Report</h5>
      <button onclick="toggleModal('earningModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
    </div>
    <div class="p-4">
      <table class="w-full text-xs text-center border">
        <thead class="bg-green-600 text-white uppercase">
          <tr>
            <th class="p-3">Sr.</th>
            <th class="p-3">Product</th>
            <th class="p-3 text-right">Paid Price</th>
            <th class="p-3">Commision</th>
            <th class="p-3 text-right font-bold">Earning</th>
          </tr>
        </thead>
        <tbody class="divide-y">
          <tr>
            <td class="p-3">1</td>
            <td class="p-3">123qwexawe12</td>
            <td class="p-3 text-right">₹50,000</td>
            <td class="p-3 text-red-500">₹500</td>
            <td class="p-3 text-right font-bold text-green-600">1,00,000</td>
          </tr>
        </tbody>
      </table>
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
    // --- Modal Logic ---
function toggleModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.toggle('hidden');
    // Toggle body scroll
    if (!modal.classList.contains('hidden')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = 'auto';
    }
  }
}

// --- Dropdown Logic ---
function toggleDropdown(event, dropdownId) {
  event.stopPropagation(); // Prevents the window click listener from closing it immediately
  
  const targetDropdown = document.getElementById(dropdownId);
  
  // Close all other dropdowns first
  document.querySelectorAll('[id^="dropdown-"]').forEach(dropdown => {
    if (dropdown.id !== dropdownId) {
      dropdown.classList.add('hidden');
    }
  });

  // Toggle the clicked one
  targetDropdown.classList.toggle('hidden');
}

function closeAllDropdowns() {
  document.querySelectorAll('[id^="dropdown-"]').forEach(dropdown => {
    dropdown.classList.add('hidden');
  });
}

// Close dropdowns and modals when clicking outside
window.addEventListener('click', function(event) {
  // Close dropdowns
  if (!event.target.closest('.relative')) {
    closeAllDropdowns();
  }

  // Close modals if clicking the dark backdrop
  if (event.target.classList.contains('fixed')) {
    event.target.classList.add('hidden');
    document.body.style.overflow = 'auto';
  }
});

// Close on Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closeAllDropdowns();
    document.querySelectorAll('.fixed').forEach(m => m.classList.add('hidden'));
    document.body.style.overflow = 'auto';
  }
});
</script>
</html>