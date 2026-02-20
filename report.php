<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report </title>
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
  <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
    <h1 class="text-2xl font-bold text-gray-800">Vendors Details</h1>

    <div class="flex items-center gap-3">
      <button id="exportExcel" title="Excel" class="p-2 rounded-full hover:bg-green-50 transition-colors text-green-600 border border-transparent hover:border-green-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 384 512">
          <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z" />
        </svg>
      </button>

      <button id="exportPdf" title="PDF" class="p-2 rounded-full hover:bg-red-50 transition-colors text-red-600 border border-transparent hover:border-red-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512">
          <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z" />
        </svg>
      </button>

      <button id="printButton" title="Print" class="p-2 rounded-full hover:bg-blue-50 transition-colors text-blue-600 border border-transparent hover:border-blue-200">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 512 512">
          <path d="M128 0C92.7 0 64 28.7 64 64l0 96 64 0 0-96 226.7 0L384 93.3l0 66.7 64 0 0-66.7c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0L128 0zM384 352l0 32 0 64-256 0 0-64 0-16 0-16 256 0zm64 32l32 0c17.7 0 32-14.3 32-32l0-96c0-35.3-28.7-64-64-64L64 192c-35.3 0-64 28.7-64 64l0 96c0 17.7 14.3 32 32 32l32 0 0 64c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
        </svg>
      </button>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mb-4 text-white shadow-lg">
        <i class="bi bi-people text-2xl"></i>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-500 font-medium">Total Orders</span>
        <span class="text-2xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mb-4 text-white shadow-lg">
        <i class="bi bi-person-check text-2xl"></i>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-500 font-medium">Active Partners</span>
        <span class="text-2xl font-bold text-gray-800">6</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mb-4 text-white shadow-lg">
        <i class="bi bi-person-x text-2xl"></i>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-500 font-medium">Inactive Partners</span>
        <span class="text-2xl font-bold text-gray-800">0</span>
      </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
      <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mb-4 text-white shadow-lg">
        <i class="bi bi-person-gear text-2xl"></i>
      </div>
      <div class="w-full flex justify-between items-center px-2">
        <span class="text-sm text-gray-500 font-medium">Total Admin</span>
        <span class="text-2xl font-bold text-gray-800">5</span>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-6 bg-white p-4 rounded-xl shadow-sm">
    <input type="text" placeholder="Search" class="w-full px-4 py-2 rounded-full bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-sm" />
    <input type="text" placeholder="Offer Title" class="w-full px-4 py-2 rounded-full bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-sm" />
    
    <select class="w-full px-4 py-2 rounded-full bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm appearance-none">
      <option value="">Status</option>
      <option value="active">Active</option>
      <option value="Deactive">Deactive</option>
    </select>

    <input type="date" title="From Date" class="w-full px-4 py-2 rounded-full bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" />
    <input type="date" title="To Date" class="w-full px-4 py-2 rounded-full bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" />
    
    <button type="reset" class="w-full py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors text-sm font-medium">
      Reset
    </button>
  </div>

 <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <tr>
          <th class="px-6 py-4 font-semibold text-sm">Sr. No.</th>
          <th class="px-6 py-4 font-semibold text-sm">User Name</th>
          <th class="px-6 py-4 font-semibold text-sm">Email</th>
          <th class="px-6 py-4 font-semibold text-sm">Product Name</th>
          <th class="px-6 py-4 font-semibold text-sm">Query</th>
          <th class="px-6 py-4 font-semibold text-sm">Date</th>
          <th class="px-6 py-4 font-semibold text-sm">Status</th>
          <th class="px-6 py-4 font-semibold text-sm text-center">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <tr class="hover:bg-gray-50 transition-colors">
          <td class="px-6 py-4 text-sm text-gray-600">1</td>
          <td class="px-6 py-4 text-sm font-medium text-gray-800">Rahul Sharma</td>
          <td class="px-6 py-4 text-sm text-gray-600">rahul@example.com</td>
          <td class="px-6 py-4 text-sm text-gray-600">Chicken Breast</td>
          <td class="px-6 py-4 text-sm text-gray-600">Is this fresh?</td>
          <td class="px-6 py-4 text-sm text-gray-600">25 Jun 2025</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
          </td>
          <td class="px-6 py-4 text-center relative">
            <div class="inline-block text-left">
              <button class="dropdown-toggle text-gray-400 hover:text-gray-600 transition-colors focus:outline-none">
                <i class="bi bi-three-dots-vertical text-xl pointer-events-none"></i>
              </button>
              
              <div class="dropdown-menu hidden absolute right-6 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-xl z-50">
                <div class="py-1">
                  <a href="#" class="flex items-center px-4 py-2 text-sm text-green-600 hover:bg-green-50">
                    <i class="bi bi-check-circle me-2"></i> Mark as Resolved
                  </a>
                  <a href="#" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                    <i class="bi bi-trash me-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </td>
        </tr>

        <tr class="hover:bg-gray-50 transition-colors">
          <td class="px-6 py-4 text-sm text-gray-600">2</td>
          <td class="px-6 py-4 text-sm font-medium text-gray-800">Anjali Verma</td>
          <td class="px-6 py-4 text-sm text-gray-600">anjali@example.com</td>
          <td class="px-6 py-4 text-sm text-gray-600">Mutton Cut</td>
          <td class="px-6 py-4 text-sm text-gray-600">How much for 1kg?</td>
          <td class="px-6 py-4 text-sm text-gray-600">24 Jun 2025</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Answered</span>
          </td>
          <td class="px-6 py-4 text-center relative">
            <div class="inline-block text-left">
              <button class="dropdown-toggle text-gray-400 hover:text-gray-600 transition-colors focus:outline-none">
                <i class="bi bi-three-dots-vertical text-xl pointer-events-none"></i>
              </button>
              <div class="dropdown-menu hidden absolute right-6 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-xl z-50">
                <div class="py-1">
                  <a href="#" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                    <i class="bi bi-trash me-2"></i> Delete
                  </a>
                </div>
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
      Page <span class="font-bold text-gray-800">1</span> of <span class="font-bold text-gray-800">3</span> — 
      Showing <span class="font-bold text-gray-800">1–6</span> of <span class="font-bold text-gray-800">6</span> entries
    </div>
    
    <nav class="flex items-center gap-2">
      <button class="px-4 py-2 rounded-full border border-gray-200 text-gray-400 cursor-not-allowed text-sm flex items-center">
        <i class="bi bi-arrow-left-circle-fill mr-2"></i> Prev
      </button>
      <button class="px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-bold shadow-md">1</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm">2</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm">3</button>
      <button class="px-4 py-2 rounded-full border border-gray-200 text-gray-600 hover:bg-gray-50 text-sm flex items-center">
        Next <i class="bi bi-arrow-right-circle-fill ml-2"></i>
      </button>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      // Останавливаем всплытие, чтобы клик не дошел до документа
      e.stopPropagation();

      const currentMenu = toggle.nextElementSibling;

      // Сначала закрываем все другие открытые меню
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu !== currentMenu) {
          menu.classList.add('hidden');
        }
      });

      // Переключаем текущее меню
      currentMenu.classList.toggle('hidden');
    });
  });

  document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.classList.add('hidden');
    });
  });
});
    </script>
</body>
</html>