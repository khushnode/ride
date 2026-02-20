<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's</title>
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
    
    <div 
  id="orderModal" 
  class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto px-4"
>
  <div class="relative w-full max-w-6xl mx-auto bg-white rounded-lg shadow-xl transform transition-all">
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-semibold text-gray-800">Order Service</h5>
      <button 
        onclick="toggleModal('orderModal')" 
        class="text-gray-400 hover:text-gray-600 text-3xl leading-none"
      >
        &times;
      </button>
    </div>

    <div class="p-4">
      <div class="overflow-x-auto border rounded-lg">
        <table class="min-w-full text-xs text-left">
          <thead class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
            <tr>
              <th class="px-4 py-3">Sr. No.</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Order ID</th>
              <th class="px-4 py-3">Store</th>
              <th class="px-4 py-3">Amount</th>
              <th class="px-4 py-3">Delivery Boy</th>
              <th class="px-4 py-3">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="px-4 py-3">1</td>
              <td class="px-4 py-3">
                30 Apr 2025 <br />
                <span class="text-gray-400 text-xs">02:41 AM</span>
              </td>
              <td class="px-4 py-3">
                <div class="flex items-center gap-3">
                  <img src="./assets/images/img5.jpg" class="w-10 h-10 rounded-full object-cover border" alt="food" />
                  <div>
                    <span class="text-gray-500 font-bold block">ID: ORDER7774468212</span>
                    <span class="text-gray-400">quantity: 3kg | 4 pieces</span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-gray-500">
                <span class="font-bold">Vendor's:</span> abcd <br />
                <span>ID: ABC7774468212</span>
              </td>
              <td class="px-4 py-3 text-gray-500">
                <span class="font-bold block">amount: ₹150.00</span>
                <span>payment: online</span>
              </td>
              <td class="px-4 py-3 text-gray-500">
                <span class="font-bold">Name:</span> abcd <br />
                <span>ID: ABC7774468212</span>
              </td>
              <td class="px-4 py-3">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  <i class="fas fa-check-circle mr-1 text-[0.7rem]"></i> Complete
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div 
  id="viewModal" 
  class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto px-4"
>
  <div class="relative w-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-semibold text-gray-800">User Details</h5>
      <button 
        onclick="toggleModal('viewModal')" 
        class="text-gray-400 hover:text-gray-600 text-3xl leading-none"
      >
        &times;
      </button>
    </div>
    
    <div class="p-6 text-xs sm:text-sm">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div>
          <h6 class="text-gray-500 uppercase tracking-wider text-[0.7rem] font-bold mb-1">First Name:</h6>
          <p class="border rounded-md px-3 py-2 bg-gray-50 text-gray-700">Neeraj</p>
        </div>
        <div>
          <h6 class="text-gray-500 uppercase tracking-wider text-[0.7rem] font-bold mb-1">Last Name:</h6>
          <p class="border rounded-md px-3 py-2 bg-gray-50 text-gray-700">Singh</p>
        </div>
      </div>

      <h6 class="font-bold text-gray-800 mb-3 border-l-4 border-blue-600 pl-2">Address Details</h6>
      <div class="overflow-x-auto border rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50 text-gray-600">
            <tr>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">SR.NO.</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">House NO./Area</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">Floor</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">Landmark</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">Save As</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">Address</th>
              <th class="px-4 py-3 text-left font-semibold uppercase text-[0.7rem]">Receiver's Phone</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white text-gray-600">
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="px-4 py-3">1</td>
              <td class="px-4 py-3 font-medium">B41</td>
              <td class="px-4 py-3">2</td>
              <td class="px-4 py-3">B, BLOCK</td>
              <td class="px-4 py-3">
                <span class="px-2 py-0.5 bg-blue-50 text-blue-700 rounded text-[0.7rem]">Work</span>
              </td>
              <td class="px-4 py-3">Noida Sector 63</td>
              <td class="px-4 py-3 font-mono">7584785767</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div 
  id="bookingModal" 
  class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto px-4"
>
  <div class="relative w-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl transform transition-all duration-300 scale-100">
    
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-semibold text-gray-800">User Cart</h5>
      <button 
        onclick="toggleModal('bookingModal')" 
        class="text-gray-400 hover:text-gray-600 transition-colors text-3xl leading-none"
      >
        &times;
      </button>
    </div>

    <div class="p-4">
      <div class="overflow-x-auto border rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-left align-middle">
          <thead class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
            <tr>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Sr. No.</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Date/Time</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Product</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Quantity</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Amount</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white text-[0.8rem]">
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="px-4 py-4 text-gray-600">1</td>
              <td class="px-4 py-4">
                <span class="block font-medium">4 May 2025</span>
                <span class="text-gray-400 text-xs">02:41 AM</span>
              </td>
              <td class="px-4 py-4">
                <div class="flex items-center">
                  <img src="./assets/images/img5.jpg" class="w-10 h-10 rounded-full object-cover mr-3 border" alt="food" />
                  <div>
                    <h6 class="font-bold text-gray-800 mb-0">Product Name:</h6>
                    <span class="text-gray-500 block"><b>ID:</b> BOOKING7774468212</span>
                    <span class="text-gray-500"><b>Unit:</b> 4Kg</span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-center">1</td>
              <td class="px-4 py-4 font-semibold text-gray-700">₹150.00</td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                  <i class="fas fa-hourglass-half mr-1"></i> Pending
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    <div class="p-6 bg-gray-50 min-h-screen text-gray-800">
  <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
    <h1 class="text-2xl font-bold text-gray-900">Vendors Details</h1>

    <div class="flex items-center gap-2">
      <button id="exportExcel" title="Excel" class="p-2 rounded-full hover:bg-green-50 text-green-600 transition-colors border border-transparent hover:border-green-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 384 512"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg>
      </button>

      <button id="exportPdf" title="PDF" class="p-2 rounded-full hover:bg-red-50 text-red-600 transition-colors border border-transparent hover:border-red-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512"><path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z"/></svg>
      </button>

      <button id="printButton" title="Print" class="p-2 rounded-full hover:bg-blue-50 text-blue-600 transition-colors border border-transparent hover:border-blue-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512"><path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="relative w-14 h-14 flex-shrink-0">
        <div class="absolute inset-0 bg-purple-600 opacity-20 rounded-2xl rotate-6"></div>
        <div class="relative w-full h-full bg-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl">
          <i class="bi bi-people"></i>
        </div>
      </div>
      <div class="flex-grow flex justify-between items-center">
        <span class="text-sm font-medium text-gray-500">Total Users</span>
        <span class="text-2xl font-bold">6</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="relative w-14 h-14 flex-shrink-0">
        <div class="absolute inset-0 bg-green-500 opacity-20 rounded-2xl rotate-6"></div>
        <div class="relative w-full h-full bg-green-500 rounded-2xl flex items-center justify-center text-white text-2xl">
          <i class="bi bi-person-check"></i>
        </div>
      </div>
      <div class="flex-grow flex justify-between items-center">
        <span class="text-sm font-medium text-gray-500">Active Users</span>
        <span class="text-2xl font-bold">6</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="relative w-14 h-14 flex-shrink-0">
        <div class="absolute inset-0 bg-red-500 opacity-20 rounded-2xl rotate-6"></div>
        <div class="relative w-full h-full bg-red-500 rounded-2xl flex items-center justify-center text-white text-2xl">
          <i class="bi bi-person-x"></i>
        </div>
      </div>
      <div class="flex-grow flex justify-between items-center">
        <span class="text-sm font-medium text-gray-500">Inactive Users</span>
        <span class="text-2xl font-bold">0</span>
      </div>
    </div>

    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
      <div class="relative w-14 h-14 flex-shrink-0">
        <div class="absolute inset-0 bg-blue-600 opacity-20 rounded-2xl rotate-6"></div>
        <div class="relative w-full h-full bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl">
          <i class="bi bi-bag-check-fill"></i>
        </div>
      </div>
      <div class="flex-grow flex justify-between items-center">
        <span class="text-sm font-medium text-gray-500">Completed Orders</span>
        <span class="text-2xl font-bold">5</span>
      </div>
    </div>
  </div>

  <div class="bg-gray-100 p-4 rounded-xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-6 items-center">
    <input type="text" placeholder="Search" class="w-full px-4 py-2 rounded-full border-none bg-white/60 focus:ring-2 focus:ring-blue-400 outline-none text-sm transition-all" />
    <input type="text" placeholder="Mobile No." class="w-full px-4 py-2 rounded-full border-none bg-white/60 focus:ring-2 focus:ring-blue-400 outline-none text-sm transition-all" />
    <select class="w-full px-4 py-2 rounded-full border-none bg-white/60 focus:ring-2 focus:ring-blue-400 outline-none text-sm transition-all">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="deactive">Deactive</option>
    </select>
    <input type="date" title="From Date" class="w-full px-4 py-2 rounded-full border-none bg-white/60 focus:ring-2 focus:ring-blue-400 outline-none text-sm transition-all" />
    <input type="date" title="To Date" class="w-full px-4 py-2 rounded-full border-none bg-white/60 focus:ring-2 focus:ring-blue-400 outline-none text-sm transition-all" />
    <button type="reset" class="w-full bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition-colors">Reset</button>
  </div>

  <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gradient-to-r from-purple-700 to-indigo-800 text-white text-sm">
          <tr>
            <th class="p-4 font-semibold">Sr.No.</th>
            <th class="p-4 font-semibold">Date & Time</th>
            <th class="p-4 font-semibold">User ID.</th>
            <th class="p-4 font-semibold">Contact</th>
            <th class="p-4 font-semibold">Password</th>
            <th class="p-4 font-semibold">Location</th>
            <th class="p-4 font-semibold">Status</th>
            <th class="p-4 font-semibold text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="text-xs text-gray-600 divide-y divide-gray-100">
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="p-4">1</td>
            <td class="p-4">
              <div class="font-medium text-gray-900">10 May 2025</div>
              <div class="text-gray-400">05:49 AM</div>
            </td>
            <td class="p-4">
              <div class="font-medium text-gray-900">User_7446</div>
              <div class="text-gray-400"><b>ID:</b> USER7774468212</div>
            </td>
            <td class="p-4">8651777446</td>
            <td class="p-4">password</td>
            <td class="p-4 max-w-[200px] truncate" title="a1,xyz palace near pqr, noid 123456">
              a1,xyz palace near pqr, noid 123456
            </td>
            <td class="p-4">
              <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-green-100 text-green-700 font-medium">
                <i class="fas fa-signal text-[10px]"></i> Active
              </span>
            </td>
           <td class="p-4 text-right">
  <div class="relative inline-block text-left group">
    <button class="p-2 hover:bg-gray-200 rounded-lg transition-colors focus:outline-none">
      <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 128 512">
        <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
      </svg>
    </button>

    <div class="hidden group-focus-within:block absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-xl z-30 overflow-hidden animate-in fade-in slide-in-from-top-2 duration-200">
      
      <button 
        onclick="toggleModal('viewModal')" 
        class="w-full text-left px-4 py-2.5 hover:bg-blue-50 text-gray-700 flex items-center gap-3 transition-colors border-b border-gray-100"
      >
        <i class="fas fa-user-circle text-blue-500 w-4"></i>
        <span class="text-sm font-medium">View Profile</span>
      </button>

      <button 
        onclick="toggleModal('orderModal')" 
        class="w-full text-left px-4 py-2.5 hover:bg-blue-50 text-gray-700 flex items-center gap-3 transition-colors border-b border-gray-100"
      >
        <i class="fas fa-shopping-basket text-indigo-500 w-4"></i>
        <span class="text-sm font-medium">Order History</span>
      </button>

      <button 
        onclick="toggleModal('bookingModal')" 
        class="w-full text-left px-4 py-2.5 hover:bg-blue-50 text-gray-700 flex items-center gap-3 transition-colors border-b border-gray-100"
      >
        <i class="fas fa-shopping-cart text-green-500 w-4"></i>
        <span class="text-sm font-medium">View Cart</span>
      </button>

      <button 
        onclick="toggleModal('walletModal')" 
        class="w-full text-left px-4 py-2.5 hover:bg-blue-50 text-gray-700 flex items-center gap-3 transition-colors border-b border-gray-100"
      >
        <i class="fas fa-wallet text-orange-500 w-4"></i>
        <span class="text-sm font-medium">Payments</span>
      </button>

      <button class="w-full text-left px-4 py-2.5 hover:bg-red-50 text-red-600 flex items-center gap-3 transition-colors">
        <i class="fas fa-user-slash w-4"></i>
        <span class="text-sm font-medium">Deactivate</span>
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
      Page <span class="font-bold text-gray-800">1</span> of <span class="font-bold text-gray-800">3</span> — Showing
      <span class="font-bold text-gray-800">1–6</span> of <span class="font-bold text-gray-800">6</span> entries
    </div>
    <nav class="flex items-center gap-1">
      <button class="px-4 py-2 rounded-full border bg-gray-100 text-gray-400 cursor-not-allowed text-sm">Prev</button>
      <button class="px-4 py-2 rounded-full bg-blue-600 text-white text-sm">1</button>
      <button class="px-4 py-2 rounded-full border hover:bg-gray-50 text-sm">2</button>
      <button class="px-4 py-2 rounded-full border hover:bg-gray-50 text-sm">3</button>
      <button class="px-4 py-2 rounded-full border hover:bg-gray-50 text-sm">Next</button>
    </nav>
  </div>
</div>

<div 
  id="walletModal" 
  class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto px-4"
>
  <div class="relative w-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl animate-in fade-in zoom-in duration-200">
    
    <div class="flex items-center justify-between p-4 border-b">
      <h5 class="text-xl font-semibold text-gray-800">User Payments</h5>
      <button 
        onclick="toggleModal('walletModal')" 
        class="text-gray-400 hover:text-gray-600 transition-colors text-3xl leading-none"
      >
        &times;
      </button>
    </div>

    <div class="p-4">
      <div class="overflow-x-auto border rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-left align-middle">
          <thead class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
            <tr>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Sr. No.</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Date</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Service Details</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Transactions</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Amount</th>
              <th class="px-4 py-3 text-xs font-bold uppercase tracking-wider">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white text-[0.8rem]">
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-4">1</td>
              <td class="px-4 py-4">
                <span class="block">4 May 2025</span>
                <span class="text-gray-400 text-xs">02:41 AM</span>
              </td>
              <td class="px-4 py-4">
                <span class="text-gray-500 block"><b>ID:</b> CAP2345654</span>
                <span class="text-gray-500"><b>Name:</b> Chicken Beast</span>
              </td>
              <td class="px-4 py-4">
                <span class="text-gray-500 block"><b>ID:</b> TRAN2345654</span>
                <span class="text-gray-500"><b>Method:</b> UPI</span>
              </td>
              <td class="px-4 py-4">
                <span class="px-2 py-1 rounded-full text-green-700 font-bold bg-green-50">+₹1000</span>
              </td>
              <td class="px-4 py-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  <i class="fas fa-check-circle mr-1"></i> Success
                </span>
              </td>
            </tr>
          </tbody>
        </table>
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
</body>
<script>
  // Action button
  const actionBtn = document.querySelector("#actionBtn"); // aapka table button
  const modal = document.querySelector("#myModal");
  const closeModal = document.querySelector("#closeModal");

  actionBtn.addEventListener("click", () => {
    modal.classList.toggle("hidden"); // toggle visibility
  });

  closeModal.addEventListener("click", () => {
    modal.classList.add("hidden"); // close modal
  });

  // Modal ke bahar click pe bhi close karna
  modal.addEventListener("click", (e) => {
    if(e.target === modal){
      modal.classList.add("hidden");
    }
  });

  const actionBtns = document.querySelectorAll(".actionBtn");
const modal = document.querySelector("#myModal");
const closeModal = document.querySelector("#closeModal");

actionBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });
});

closeModal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

modal.addEventListener("click", (e) => {
  if(e.target === modal){
    modal.classList.add("hidden");
  }
});

 function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Stop scrolling background
    } else {
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto'; // Restore scrolling
    }
  }

  // Close when clicking outside the white box (optional)
  window.onclick = function(event) {
    const modal = document.getElementById('walletModal');
    if (event.target == modal) {
      toggleModal('walletModal');
    }
  }
</script>
<script>
  function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    
    modal.classList.toggle('hidden');
    
    // Toggle body scroll to prevent background movement
    if (modal.classList.contains('hidden')) {
      document.body.style.overflow = 'auto';
    } else {
      document.body.style.overflow = 'hidden';
    }
  }

  // Close modal if clicking on the dark backdrop
  window.addEventListener('click', function(event) {
    // Check if the click was on a modal wrapper (the backdrop)
    if (event.target.classList.contains('fixed') && event.target.id) {
      toggleModal(event.target.id);
    }
  });
</script>
</html>