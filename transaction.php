<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaction</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>
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
  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Vendors Details</h1>

    <div class="flex gap-2">
      <button class="p-2.5 bg-white border border-gray-200 rounded-full text-green-600 hover:bg-green-50 shadow-sm transition-all" title="Export Excel">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 384 512 shadow-sm">
          <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"></path>
        </svg>
      </button>

      <button class="p-2.5 bg-white border border-gray-200 rounded-full text-red-600 hover:bg-red-50 shadow-sm transition-all" title="Export PDF">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 512 512">
          <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z"></path>
        </svg>
      </button>

      <button class="p-2.5 bg-white border border-gray-200 rounded-full text-indigo-600 hover:bg-indigo-50 shadow-sm transition-all" title="Print">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 512 512">
          <path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"></path>
        </svg>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500 font-medium">Total Transaction</p>
        <h2 class="text-2xl font-bold text-gray-800">320</h2>
      </div>
      <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center">
        <i class="bi bi-receipt text-xl"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500 font-medium">Vendors Payout</p>
        <h2 class="text-2xl font-bold text-gray-800">1,20,000</h2>
      </div>
      <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
        <i class="bi bi-cash-stack text-xl"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500 font-medium">Riders Payout</p>
        <h2 class="text-2xl font-bold text-gray-800">80,000</h2>
      </div>
      <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center">
        <i class="bi bi-cash-stack text-xl"></i>
      </div>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500 font-medium">Successful Payments</p>
        <h2 class="text-2xl font-bold text-gray-800">298</h2>
      </div>
      <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
        <i class="bi bi-check-circle text-xl"></i>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-6">
    <input type="text" placeholder="Search" class="w-full px-4 py-2 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none text-sm transition-all">
    <input type="text" placeholder="Transaction ID" class="w-full px-4 py-2 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none text-sm transition-all">
    <select class="w-full px-4 py-2 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm appearance-none">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
    </select>
    <input type="date" class="w-full px-4 py-2 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
    <input type="date" class="w-full px-4 py-2 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
    <button class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-xl hover:bg-indigo-700 transition-colors text-sm">Reset</button>
  </div>

  <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left">
        <thead class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
          <tr>
            <th class="px-4 py-4 font-semibold">Sr. No.</th>
            <th class="px-4 py-4 font-semibold">Date & Time</th>
            <th class="px-4 py-4 font-semibold">Accounts</th>
            <th class="px-4 py-4 font-semibold">Name</th>
            <th class="px-4 py-4 font-semibold">Type</th>
            <th class="px-4 py-4 font-semibold">Description</th>
            <th class="px-4 py-4 font-semibold">Amount</th>
            <th class="px-4 py-4 font-semibold">Method</th>
            <th class="px-4 py-4 font-semibold">Status</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-4 py-4">1</td>
            <td class="px-4 py-4">21-Jun-2025 <br><span class="text-gray-400 text-xs font-normal">02:30 PM</span></td>
            <td class="px-4 py-4 font-medium text-gray-700">User Name <br><span class="text-indigo-500 text-xs">ID: 34852783</span></td>
            <td class="px-4 py-4">Ravi Kumar</td>
            <td class="px-4 py-4 text-red-500 font-medium">Debit</td>
            <td class="px-4 py-4 text-gray-500">Food Order Payment</td>
            <td class="px-4 py-4 font-bold text-gray-800">₹250.00</td>
            <td class="px-4 py-4">UPI</td>
            <td class="px-4 py-4">
              <span class="px-2.5 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-semibold">Success</span>
            </td>
          </tr>
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-4 py-4">2</td>
            <td class="px-4 py-4">21-Jun-2025 <br><span class="text-gray-400 text-xs font-normal">03:10 PM</span></td>
            <td class="px-4 py-4 font-medium text-gray-700">Rider <br><span class="text-indigo-500 text-xs">ID: 589570398</span></td>
            <td class="px-4 py-4">Deepak Singh</td>
            <td class="px-4 py-4 text-green-600 font-medium">Credit</td>
            <td class="px-4 py-4 text-gray-500">Delivery Earnings</td>
            <td class="px-4 py-4 font-bold text-gray-800">₹120.00</td>
            <td class="px-4 py-4">Wallet</td>
            <td class="px-4 py-4">
              <span class="px-2.5 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-semibold">Success</span>
            </td>
          </tr>
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-4 py-4">3</td>
            <td class="px-4 py-4">21-Jun-2025 <br><span class="text-gray-400 text-xs font-normal">04:20 PM</span></td>
            <td class="px-4 py-4 font-medium text-gray-700">Partner <br><span class="text-indigo-500 text-xs">ID: 11525558545</span></td>
            <td class="px-4 py-4">A2B Restaurant</td>
            <td class="px-4 py-4 text-green-600 font-medium">Credit</td>
            <td class="px-4 py-4 text-gray-500">Payout for Order #1234</td>
            <td class="px-4 py-4 font-bold text-gray-800">₹1,450.00</td>
            <td class="px-4 py-4">Bank Transfer</td>
            <td class="px-4 py-4">
              <span class="px-2.5 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-xs font-semibold">Pending</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
    <p class="text-sm text-gray-500">
      Page <span class="font-semibold text-gray-800">1</span> of <span class="font-semibold text-gray-800">3</span> 
      — Showing <span class="font-semibold text-gray-800">1-6</span> of <span class="font-semibold text-gray-800">6</span> entries
    </p>
    <nav class="flex gap-1">
      <button class="px-4 py-2 bg-white border border-gray-200 text-gray-400 rounded-full text-sm cursor-not-allowed">Prev</button>
      <button class="px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-medium">1</button>
      <button class="px-4 py-2 bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 rounded-full text-sm transition-colors">2</button>
      <button class="px-4 py-2 bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 rounded-full text-sm transition-colors">3</button>
      <button class="px-4 py-2 bg-white border border-gray-200 text-indigo-600 hover:bg-indigo-50 rounded-full text-sm font-medium transition-colors">Next</button>
    </nav>
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
</body>
</html>