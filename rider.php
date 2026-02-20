<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rider</title>
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
    <div class="p-6 bg-gray-50 min-h-screen">
  <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Vendors Details</h1>
    
    <div class="flex items-center gap-2">
      <button title="Excel" class="p-2 rounded-full hover:bg-green-50 text-green-600 transition-colors">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 384 512"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg>
      </button>
      <button title="PDF" class="p-2 rounded-full hover:bg-red-50 text-red-600 transition-colors">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512"><path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z"/></svg>
      </button>
      <button title="Print" class="p-2 rounded-full hover:bg-blue-50 text-blue-600 transition-colors">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512"><path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
      </button>
    </div>
  </div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
  
  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
    <div class="flex flex-col items-center">
      <div class="relative w-14 h-14 mb-4">
        <div class="absolute inset-0 bg-gradient-to-tr from-purple-600 to-indigo-400 rounded-2xl rotate-6 opacity-20"></div>
        <div class="relative w-full h-full bg-gradient-to-tr from-purple-600 to-indigo-400 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-200">
          <i class="bi bi-truck text-2xl text-white"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end px-2">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Deliveries</div>
        <div class="text-3xl font-bold text-gray-800">6</div>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
    <div class="flex flex-col items-center">
      <div class="relative w-14 h-14 mb-4">
        <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl rotate-6 opacity-20"></div>
        <div class="relative w-full h-full bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-200">
          <i class="bi bi-calendar-check text-2xl text-white"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end px-2">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Today's Deliveries</div>
        <div class="text-3xl font-bold text-gray-800">6</div>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
    <div class="flex flex-col items-center">
      <div class="relative w-14 h-14 mb-4">
        <div class="absolute inset-0 bg-gradient-to-tr from-rose-500 to-orange-400 rounded-2xl rotate-6 opacity-20"></div>
        <div class="relative w-full h-full bg-gradient-to-tr from-rose-500 to-orange-400 rounded-2xl flex items-center justify-center shadow-lg shadow-rose-200">
          <i class="bi bi-hourglass-split text-2xl text-white"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end px-2">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Pending Deliveries</div>
        <div class="text-3xl font-bold text-gray-800">0</div>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 hover:shadow-md transition-shadow">
    <div class="flex flex-col items-center">
      <div class="relative w-14 h-14 mb-4">
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-cyan-400 rounded-2xl rotate-6 opacity-20"></div>
        <div class="relative w-full h-full bg-gradient-to-tr from-blue-600 to-cyan-400 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200">
          <i class="fa-solid fa-motorcycle text-2xl text-white"></i>
        </div>
      </div>
      <div class="w-full flex justify-between items-end px-2">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Riders</div>
        <div class="text-3xl font-bold text-gray-800">5</div>
      </div>
    </div>
  </div>

</div>
  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-6 bg-white p-4 rounded-xl shadow-sm border border-gray-100">
    <input type="text" placeholder="Search Name" class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:ring-2 focus:ring-blue-500 outline-none bg-gray-50/50">
    <input type="text" placeholder="Mobile No." class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:ring-2 focus:ring-blue-500 outline-none bg-gray-50/50">
    <select class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:ring-2 focus:ring-blue-500 outline-none bg-gray-50/50 text-gray-500">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    <input type="date" class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:ring-2 focus:ring-blue-500 outline-none bg-gray-50/50">
    <input type="date" class="w-full px-4 py-2 text-sm border border-gray-200 rounded-full focus:ring-2 focus:ring-blue-500 outline-none bg-gray-50/50">
    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 rounded-full transition-colors shadow-sm">Reset</button>
  </div>
<div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
        <tr>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">SR.NO.</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Name</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Phone Number</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">E-mail</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Orders Delivered</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Current Status</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Availability</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Joined Date</th>
          <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider text-center">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-100 text-gray-700 text-[0.8rem]">
        <tr id="row-101" class="hover:bg-gray-50 transition-colors">
          <td class="px-4 py-4 font-medium">1</td>
          <td class="px-4 py-4">
            <span class="font-bold text-gray-900 block">Raj Verma</span>
            <span class="text-gray-400 text-[0.7rem]"><b>ID:</b> 101</span>
          </td>
          <td class="px-4 py-4">9876543210</td>
          <td class="px-4 py-4 text-gray-500">email@123.com</td>
          <td class="px-4 py-4 font-semibold text-center">240</td>
          <td class="px-4 py-4">
            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700 uppercase">Active</span>
          </td>
          <td class="px-4 py-4">
            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-green-500 text-white uppercase tracking-tighter">Online</span>
          </td>
          <td class="px-4 py-4 text-gray-500">2023-11-10</td>

        <td class="px-4 py-4 text-center">
  <div class="relative inline-block text-left">
    <button 
      onclick="toggleActionMenu(event, 'action-101')"
      class="action-btn p-2 rounded-full hover:bg-gray-100 focus:outline-none transition-colors"
    >
      <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 128 512">
        <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
      </svg>
    </button>

    <div 
      id="action-101" 
      class="action-dropdown hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-xl shadow-xl z-50 overflow-hidden"
    >
      <button onclick="openModal('viewModal101')" class="w-full flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-50 transition-colors">
        <svg class="w-4 h-4 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        View Detail
      </button>

      <button onclick="openModal('orderHistory')" class="w-full flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-50 transition-colors">
        <svg class="w-4 h-4 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg>
        Orders
      </button>

      <button onclick="openModal('walletModal')" class="w-full flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-50 transition-colors">
        <svg class="w-4 h-4 mr-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
        </svg>
        Wallet
      </button>

      <button onclick="toggleStatus(101, this)" class="w-full flex items-center px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors">
        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636" />
        </svg>
        Deactivate
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
    <p class="text-sm text-gray-500">
      Page <span class="font-bold text-gray-800">1</span> of 3 — Showing <span class="font-medium text-gray-800">1-6</span> of 6
    </p>
    <nav class="flex gap-2">
      <button class="px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-200 rounded-full cursor-not-allowed">Prev</button>
      <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-full shadow-md">1</button>
      <button class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-full hover:bg-gray-50">2</button>
      <button class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-full hover:bg-gray-50">Next</button>
    </nav>
  </div>
</div>
<div id="viewModal101" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-xl font-semibold flex items-center gap-2">
                Raj Verma
                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </h3>
            <button onclick="closeModal('viewModal101')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
        </div>

        <div class="p-6 text-[0.85rem]">
            <div class="mb-6">
                <h6 class="font-bold text-gray-700 mb-3">Rider Details</h6>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">First Name:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">Neeraj</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Last Name:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">Singh</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Phone Number:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">1234567890</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Date Of Birth:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">12/12/12</p>
                    </div>
                    <div class="md:col-span-1">
                        <label class="block text-gray-500 text-xs mb-1">E-mail:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50 truncate">abc@123.com</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-500 text-xs mb-1">Address:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">Pqr road 23, U.S</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Pin Code:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">123569</p>
                    </div>
                </div>
            </div>

            <div class="mb-6 pt-4 border-t">
                <h6 class="font-bold text-gray-700 mb-3">Bank Details</h6>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">A/C Holder Name:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">Neeraj</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">A/C Number:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">12345678901</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">IFSC Code:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">1235645895625478</p>
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">UPI ID:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">user23@oksbi</p>
                    </div>
                </div>
            </div>

            <div class="mb-6 pt-4 border-t">
                <h6 class="font-bold text-gray-700 mb-3">Rider Documents</h6>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div class="md:col-span-2">
                        <label class="block text-gray-500 text-xs mb-1">PAN Number:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">PAN56768M</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-500 text-xs mb-1">Driving License Number:</label>
                        <p class="border rounded-lg px-3 py-2 bg-gray-50">xxxxxxxxxxxxxxxx</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-8">
                    <div>
                        <h6 class="text-base font-semibold mb-2">Photo of DL</h6>
                        <a href="#" target="_blank" class="block border rounded-lg overflow-hidden hover:opacity-90 transition">
                            <img src="./assets/images/Sample-Medical-Doctor-Bill-Receipt-Template.jpg" class="h-32 w-auto object-cover" alt="DL Photo">
                        </a>
                    </div>
                    <div>
                        <h6 class="text-base font-semibold mb-2">Profile Photo</h6>
                        <a href="#" target="_blank" class="block border rounded-lg overflow-hidden hover:opacity-90 transition">
                            <img src="./assets/images/Sample-Medical-Doctor-Bill-Receipt-Template.jpg" class="h-32 w-auto object-cover" alt="Profile Photo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-6 border-t">
                <button class="px-6 py-2 bg-red-100 text-red-600 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition">Reject</button>
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transition shadow-md">Verify</button>
            </div>
        </div>
    </div>
</div>
<div id="orderHistory" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-2">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-[95vw] max-h-[90vh] overflow-hidden flex flex-col">
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-xl font-bold text-gray-800">Order Service</h3>
            <button onclick="closeModal('orderHistory')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
        </div>

        <div class="p-4 overflow-auto">
            <div class="min-w-full inline-block align-middle">
                <table class="min-w-full divide-y divide-gray-200 text-[0.8rem]">
                    <thead class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                        <tr>
                            <th class="px-4 py-3 text-left font-medium">Sr. No.</th>
                            <th class="px-4 py-3 text-left font-medium">Order Date/Time</th>
                            <th class="px-4 py-3 text-left font-medium">Order ID</th>
                            <th class="px-4 py-3 text-left font-medium">User Name</th>
                            <th class="px-4 py-3 text-left font-medium">Location</th>
                            <th class="px-4 py-3 text-left font-medium">Amount</th>
                            <th class="px-4 py-3 text-left font-medium">Payment Method</th>
                            <th class="px-4 py-3 text-left font-medium">Order Status</th>
                            <th class="px-4 py-3 text-left font-medium">Delivery Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-4">1</td>
                            <td class="px-4 py-4">
                                <span class="font-semibold block">4 May 2025</span>
                                <span class="text-gray-500 text-xs">02:41 AM</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="./assets/images/img1.jpg" class="w-10 h-10 rounded-full object-cover border" alt="Item">
                                    <div>
                                        <p class="font-bold text-gray-800">Order Name:</p>
                                        <p class="text-gray-500 text-[10px]"><b>ID:</b> BOOKING7774468212</p>
                                        <p class="text-gray-500 text-[10px]"><b>type:</b> chicken, fish</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <p class="text-gray-600"><b>ID:</b> 7548515</p>
                                <p class="text-gray-600"><b>Name:</b> goku</p>
                            </td>
                            <td class="px-4 py-4 max-w-xs">
                                <p class="text-[10px] text-gray-500 leading-tight"><b>PickUp:</b> b41, bmdu greater noida</p>
                                <p class="text-[10px] text-gray-500 leading-tight mt-1"><b>Delivery:</b> b41, bmdu greater noida</p>
                                <p class="text-[10px] font-bold mt-1">Distance: 1km</p>
                            </td>
                            <td class="px-4 py-4 font-bold text-gray-800">₹150.00</td>
                            <td class="px-4 py-4">Cash</td>
                            <td class="px-4 py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold">Completed</span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-[10px] font-bold">On The Way</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="walletModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black bg-opacity-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between p-5 border-b">
            <h3 class="text-xl font-bold text-gray-800">Rider Wallet Details</h3>
            <button onclick="closeModal('walletModal')" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
        </div>

        <div class="p-6 text-[0.85rem]">
            <div class="flex items-center gap-2 mb-4">
                <h6 class="font-bold text-gray-700">Wallet Info</h6>
                <i class="fa-solid fa-wallet text-blue-400"></i>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Wallet Balance:</label>
                    <p class="border rounded-lg px-3 py-2 bg-blue-50 font-bold text-blue-700 text-base">₹350.00</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Last Credited Amount:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 font-semibold text-green-600">₹200.00</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Last Debited Amount:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 font-semibold text-red-500">₹50.00</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Last Updated:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 text-gray-600">22 Jun 2025, 11:00 AM</p>
                </div>

                <div class="border-t pt-4 md:col-span-4 mt-2"></div>

                <div>
                    <label class="block text-gray-500 text-xs mb-1">Action Type:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 text-green-600 font-medium">Credit (Incentive)</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Amount:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 font-semibold text-gray-800">₹200.00</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Payment Mode:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 text-gray-600">Wallet</p>
                </div>
                <div>
                    <label class="block text-gray-500 text-xs mb-1">Status:</label>
                    <p class="border rounded-lg px-3 py-2 bg-green-100 text-green-700 font-bold text-center">Success</p>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-gray-500 text-xs mb-1">Description:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 text-gray-600 italic">Weekly performance incentive added by admin</p>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-500 text-xs mb-1">Date & Time:</label>
                    <p class="border rounded-lg px-3 py-2 bg-gray-50 text-gray-600">22 Jun 2025, 11:00 AM</p>
                </div>
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
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Modal Functions
    window.openModal = function(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex'); // Tailwind flex display for centering
            document.body.style.overflow = 'hidden'; // Stop scrolling
            
            // Modal khulne par saare open dropdowns band kar do
            closeAllDropdowns();
        }
    };

    window.closeModal = function(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        }
    };

    // 2. Dropdown Toggle Function
    window.toggleActionMenu = function(event, menuId) {
        event.stopPropagation(); // Click ko document tak jane se roko
        const menu = document.getElementById(menuId);
        
        // Pehle baaki sab band karo
        closeAllDropdowns(menuId);

        // Targeted menu ko toggle karo
        if (menu) {
            menu.classList.toggle('hidden');
        }
    };

    // Helper function sabhi dropdowns band karne ke liye
    function closeAllDropdowns(exceptId = null) {
        document.querySelectorAll('.action-dropdown, [id^="action-"]').forEach(dropdown => {
            if (dropdown.id !== exceptId) {
                dropdown.classList.add('hidden');
            }
        });
    }

    // 3. Close Dropdown on Outside Click
    window.addEventListener('click', function(e) {
        // Agar click button ya dropdown ke andar nahi hai, toh band karo
        if (!e.target.closest('.action-btn') && !e.target.closest('.action-dropdown')) {
            closeAllDropdowns();
        }
    });

    // 4. ESC key se Modal band karne ke liye (Extra Feature)
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id$="Modal"], #orderHistory').forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    closeModal(modal.id);
                }
            });
        }
    });
});
  </script>
</body>
</html>