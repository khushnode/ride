<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
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
  
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center relative overflow-hidden group">
      <i class="bi bi-bag absolute -bottom-4 -right-2 text-7xl text-purple-600 opacity-[0.05] group-hover:scale-110 transition-transform duration-500"></i>
      
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-purple-600 to-indigo-500 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-purple-600 to-indigo-500 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end relative z-10">
        <span class="text-sm font-medium text-gray-500">Total Orders</span>
        <span class="text-3xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center relative overflow-hidden group">
      <i class="bi bi-bag-plus-fill absolute -bottom-4 -right-2 text-7xl text-emerald-500 opacity-[0.05] group-hover:scale-110 transition-transform duration-500"></i>
      
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-plus-fill text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end relative z-10">
        <span class="text-sm font-medium text-gray-500">Today's Orders</span>
        <span class="text-3xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center relative overflow-hidden group">
      <i class="bi bi-bag-dash absolute -bottom-4 -right-2 text-7xl text-rose-500 opacity-[0.05] group-hover:scale-110 transition-transform duration-500"></i>
      
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-rose-500 to-red-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-rose-500 to-red-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-dash text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end relative z-10">
        <span class="text-sm font-medium text-gray-500">Pending Orders</span>
        <span class="text-3xl font-bold text-gray-800">0</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center relative overflow-hidden group">
      <i class="bi bi-bag-check-fill absolute -bottom-4 -right-2 text-7xl text-blue-600 opacity-[0.05] group-hover:scale-110 transition-transform duration-500"></i>
      
      <div class="relative mb-4">
        <div class="w-16 h-16 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-2xl rotate-12 opacity-20 absolute inset-0"></div>
        <div class="w-16 h-16 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-2xl flex items-center justify-center relative shadow-lg">
          <i class="bi bi-bag-check-fill text-white text-2xl"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end relative z-10">
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

 <?php
// Dummy Data Array
$partners = [
    [
        "id" => 1,
        "reg_date" => "10 May 2025",
        "reg_time" => "05:49 AM",
        "partner_name" => "Partner_7446",
        "partner_id" => "PARTNER7774468212",
        "contact" => "9876543210",
        "store_name" => "Mayview Fresh",
        "store_id" => "Store7774468212",
        "status" => "Active"
    ],
    [
        "id" => 2,
        "reg_date" => "12 May 2025",
        "reg_time" => "10:30 PM",
        "partner_name" => "Partner_9921",
        "partner_id" => "PARTNER11223344",
        "contact" => "9988776655",
        "store_name" => "Daily Needs",
        "store_id" => "Store11223344",
        "status" => "Inactive"
    ],
    // Aap aur bhi data yahan add kar sakte hain
];
?>

<div class="bg-white rounded-xl shadow-md border border-gray-100">
    <div class="min-w-full">
        <table id="vendorTable" class="w-full text-left border-collapse">
            <thead class="bg-gradient-to-r from-purple-700 to-indigo-600 text-white">
                <tr>
                    <th class="px-6 py-4 font-semibold text-sm rounded-tl-xl">Sr.No.</th>
                    <th class="px-6 py-4 font-semibold text-sm">Reg.Date</th>
                    <th class="px-6 py-4 font-semibold text-sm">Partner Info.</th>
                    <th class="px-6 py-4 font-semibold text-sm">Contact</th>
                    <th class="px-6 py-4 font-semibold text-sm">Store Name</th>
                    <th class="px-6 py-4 font-semibold text-sm text-center">Status</th>
                    <th class="px-6 py-4 font-semibold text-sm text-right rounded-tr-xl">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-600">
                <?php foreach ($partners as $partner): ?>
                <tr class="hover:bg-blue-50/50 transition-colors">
                    <td class="px-6 py-4 font-bold text-gray-400">#<?php echo $partner['id']; ?></td>
                    <td class="px-6 py-4">
                        <span class="font-medium text-gray-800"><?php echo $partner['reg_date']; ?></span><br>
                        <span class="text-xs text-gray-400"><?php echo $partner['reg_time']; ?></span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-semibold text-indigo-600"><?php echo $partner['partner_name']; ?></div>
                        <div class="text-[10px] font-mono text-gray-400"><?php echo $partner['partner_id']; ?></div>
                    </td>
                    <td class="px-6 py-4 font-medium"><?php echo $partner['contact']; ?></td>
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-800"><?php echo $partner['store_name']; ?></div>
                        <div class="text-xs text-gray-400 italic">ID: <?php echo $partner['store_id']; ?></div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <?php if($partner['status'] == 'Active'): ?>
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-[11px] font-bold inline-flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span> Active
                            </span>
                        <?php else: ?>
                            <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-[11px] font-bold inline-flex items-center gap-1">
                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span> Inactive
                            </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="relative inline-block text-left group">
                            <button onclick="toggleDropdown(event, 'dropdown-<?php echo $partner['id']; ?>')" 
                                    class="text-gray-400 hover:text-indigo-600 p-2 rounded-lg border border-gray-200 hover:bg-white hover:shadow-sm transition-all">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>

                            <div id="dropdown-<?php echo $partner['id']; ?>" 
                                 class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-2xl border border-gray-100 z-[9999] ring-1 ring-black ring-opacity-5">
                                <div class="py-1">
    <button onclick="openViewModal(<?php echo $partner['id']; ?>)" 
        class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition-colors">
        <i class="fa-solid fa-eye text-indigo-500 w-4"></i> View Details
    </button>

    <button onclick="openOrderModal(<?php echo $partner['id']; ?>)" 
        class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">
        <i class="fa-solid fa-cart-shopping text-emerald-500 w-4"></i> View Orders
    </button>

    <button onclick="openInventoryModal(<?php echo $partner['id']; ?>)" 
        class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition-colors">
        <i class="fa-solid fa-boxes-stacked text-amber-500 w-4"></i> Inventory
    </button>

    <div class="border-t border-gray-50 my-1"></div>

    <button onclick="openEarningModal(<?php echo $partner['id']; ?>)" 
        class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-rose-600 hover:bg-rose-50 transition-colors">
        <i class="fa-solid fa-indian-rupee-sign w-4"></i> Earnings
    </button>
</div>                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
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
    
    <!-- Header -->
    <div class="flex items-center justify-between p-4 border-b">
      <h5 id="v_partnerName" class="text-xl font-semibold flex items-center gap-2"></h5>
      <button onclick="toggleModal('viewModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
    </div>
    
    <div class="p-6 text-xs uppercase tracking-wider">
      
      <!-- Partner Details -->
      <h6 class="font-bold text-gray-700 mb-3">Partners Details</h6>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div>
          <label class="block text-gray-500 mb-1">First Name</label>
          <p id="v_firstName" class="border rounded px-3 py-2 bg-gray-50"></p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Phone Number</label>
          <p id="v_phone" class="border rounded px-3 py-2 bg-gray-50"></p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Shop Name</label>
          <p id="v_shop" class="border rounded px-3 py-2 bg-gray-50"></p>
        </div>
        <div>
          <label class="block text-gray-500 mb-1">Pin Code</label>
          <p id="v_pin" class="border rounded px-3 py-2 bg-gray-50"></p>
        </div>
      </div>

      <!-- Bank Details -->
      <h6 class="font-bold text-gray-700 mb-3">Bank Details</h6>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">Branch</span>
          <span id="v_branch"></span>
        </div>
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">A/C Number</span>
          <span id="v_account"></span>
        </div>
        <div class="border rounded p-3">
          <span class="font-bold block text-gray-500">IFSC Code</span>
          <span id="v_ifsc"></span>
        </div>
      </div>

      <!-- Images -->
      <div class="flex flex-wrap gap-6 mb-6">
        <div>
          <h6 class="font-bold mb-2">Photo of Shop</h6>
          <img id="v_shopImage" class="h-32 rounded border shadow-sm">
        </div>
        <div>
          <h6 class="font-bold mb-2">Photo of Food License</h6>
          <img id="v_licenseImage" class="h-32 rounded border shadow-sm">
        </div>
      </div>

      <!-- Footer -->
      <div class="flex justify-end gap-3 mt-6 pt-4 border-t">
        <button class="px-6 py-2 border border-red-500 text-red-500 rounded hover:bg-red-50 transition uppercase font-bold">
          Reject
        </button>
        <button class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition uppercase font-bold">
          Verify
        </button>
      </div>
    </div>
  </div>
</div>

<div id="orderModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-7xl">
    
    <div class="flex items-center justify-between p-4 border-b bg-gray-800 text-white rounded-t-lg">
      <h5 class="text-lg font-bold">Order Service</h5>
      <button onclick="toggleModal('orderModal')" class="text-white text-2xl">&times;</button>
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
        <tbody id="orderTableBody" class="text-xs"></tbody>
      </table>
    </div>
  </div>
</div>

<div id="inventoryModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-5xl">
    
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-bold">Inventory</h5>
      <button onclick="toggleModal('inventoryModal')" class="text-gray-400 text-2xl">&times;</button>
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
        <tbody id="inventoryTableBody" class="text-center divide-y"></tbody>
      </table>
    </div>
  </div>
</div>
<div id="earningModal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl">
    
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-bold">Earning Report</h5>
      <button onclick="toggleModal('earningModal')" class="text-gray-400 text-2xl">&times;</button>
    </div>

    <div class="p-4">
      <table class="w-full text-xs text-center border">
        <thead class="bg-green-600 text-white uppercase">
          <tr>
            <th class="p-3">Sr.</th>
            <th class="p-3">Product</th>
            <th class="p-3 text-right">Paid Price</th>
            <th class="p-3">Commission</th>
            <th class="p-3 text-right font-bold">Earning</th>
          </tr>
        </thead>
        <tbody id="earningTableBody" class="divide-y"></tbody>
      </table>
    </div>
  </div>
</div>
</div>
 </main>
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
<script>
function toggleDropdown(event, id) {
    event.stopPropagation();
    // Saare dusre dropdowns band karein
    document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
        if (el.id !== id) el.classList.add('hidden');
    });
    // Current dropdown toggle karein
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('hidden');
}

// Bahar click karne par dropdown band ho jaye
window.onclick = function(event) {
    document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
        el.classList.add('hidden');
    });
}
</script>
<script>

const partnersData = {
  1: {
    name: "Partner_7446",
    firstName: "Neeraj",
    phone: "9876543210",
    shop: "Mayview Fresh",
    pin: "123569",
    branch: "SBI Main Branch",
    account: "12345678901",
    ifsc: "SBIN0001234",
    shopImage: "./assets/images/img2.jpg",
    licenseImage: "./assets/images/img2.jpg",

    orders: [
      {
        date: "30 Apr 2025",
        time: "02:41 AM",
        id: "ORDER7774468212",
        amount: "₹150.00",
        customer: "Adil Hussain",
        status: "Completed"
      }
    ],

    inventory: [
      {
        product: "Chicken Breast",
        qty: "50 Kg",
        price: "₹200",
        value: "₹10,000",
        status: "Available",
        image: "./assets/images/img2.jpg"
      }
    ],

    earnings: [
      {
        product: "Chicken Breast",
        paid: "₹50,000",
        commission: "₹500",
        earning: "₹1,00,000"
      }
    ]
  },

  2: {
    name: "Partner_9921",
    firstName: "Rohit",
    phone: "9988776655",
    shop: "Daily Needs",
    pin: "400001",
    branch: "HDFC Branch",
    account: "45678912345",
    ifsc: "HDFC0005678",
    shopImage: "./assets/images/img2.jpg",
    licenseImage: "./assets/images/img2.jpg",
    orders: [],
    inventory: [],
    earnings: []
  }
};



// ================= VIEW MODAL =================

function openViewModal(id) {
  const p = partnersData[id];

  document.getElementById("v_partnerName").innerText = p.name;
  document.getElementById("v_firstName").innerText = p.firstName;
  document.getElementById("v_phone").innerText = p.phone;
  document.getElementById("v_shop").innerText = p.shop;
  document.getElementById("v_pin").innerText = p.pin;
  document.getElementById("v_branch").innerText = p.branch;
  document.getElementById("v_account").innerText = p.account;
  document.getElementById("v_ifsc").innerText = p.ifsc;
  document.getElementById("v_shopImage").src = p.shopImage;
  document.getElementById("v_licenseImage").src = p.licenseImage;

  toggleModal("viewModal");
}



// ================= ORDER MODAL =================

function openOrderModal(id) {
  const p = partnersData[id];
  const tbody = document.getElementById("orderTableBody");
  tbody.innerHTML = "";

  if (p.orders.length === 0) {
    tbody.innerHTML = `<tr><td colspan="6" class="p-4 text-center">No Orders Found</td></tr>`;
  } else {
    p.orders.forEach((o, index) => {
      tbody.innerHTML += `
        <tr>
          <td class="p-3 border">${index+1}</td>
          <td class="p-3 border">${o.date}<br><span class="text-gray-400">${o.time}</span></td>
          <td class="p-3 border font-semibold">${o.id}</td>
          <td class="p-3 border font-bold">${o.amount}</td>
          <td class="p-3 border">${o.customer}</td>
          <td class="p-3 border text-center">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full font-bold">${o.status}</span>
          </td>
        </tr>
      `;
    });
  }

  toggleModal("orderModal");
}



// ================= INVENTORY MODAL =================

function openInventoryModal(id) {
  const p = partnersData[id];
  const tbody = document.getElementById("inventoryTableBody");
  tbody.innerHTML = "";

  p.inventory.forEach(item => {
    tbody.innerHTML += `
      <tr>
        <td class="p-3 flex items-center gap-3 text-left">
          <img src="${item.image}" class="w-10 h-10 rounded-full border">
          <div>
            <p class="font-bold">${item.product}</p>
          </div>
        </td>
        <td class="p-3">${item.qty}</td>
        <td class="p-3">${item.price}</td>
        <td class="p-3 font-bold text-green-600">${item.value}</td>
        <td class="p-3">
          <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs font-semibold">${item.status}</span>
        </td>
      </tr>
    `;
  });

  toggleModal("inventoryModal");
}



// ================= EARNING MODAL =================

function openEarningModal(id) {
  const p = partnersData[id];
  const tbody = document.getElementById("earningTableBody");
  tbody.innerHTML = "";

  p.earnings.forEach((e, index) => {
    tbody.innerHTML += `
      <tr>
        <td class="p-3">${index+1}</td>
        <td class="p-3">${e.product}</td>
        <td class="p-3 text-right">${e.paid}</td>
        <td class="p-3 text-red-500">${e.commission}</td>
        <td class="p-3 text-right font-bold text-green-600">${e.earning}</td>
      </tr>
    `;
  });

  toggleModal("earningModal");
}

</script>
<script>
document.getElementById("exportExcel").addEventListener("click", function () {
    const table = document.getElementById("vendorTable");
    const wb = XLSX.utils.table_to_book(table, { sheet: "Vendors" });
    XLSX.writeFile(wb, "vendors.xlsx");
});

document.getElementById("exportPdf").addEventListener("click", function () {
    const element = document.getElementById("vendorTable");

    const opt = {
        margin: 0.5,
        filename: 'vendors.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
    };

    html2pdf().set(opt).from(element).save();
});

document.getElementById("printButton").addEventListener("click", function () {
    const printContents = document.getElementById("vendorTable").outerHTML;
    const win = window.open("", "", "width=900,height=650");
    
    win.document.write(`
        <html>
        <head>
            <title>Print Vendors</title>
        </head>
        <body>
            ${printContents}
        </body>
        </html>
    `);

    win.document.close();
    win.print();
});
</script>
</html>