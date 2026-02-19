<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayview Health | Super Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mayview-blue': '#1e40af',
                        'mayview-dark': '#0f172a',
                        'mayview-accent': '#3b82f6',
                        'vendor-orange': '#f97316'
                    },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <div class="flex min-h-screen">
       <aside class="w-72 bg-mayview-dark text-slate-400 hidden lg:flex flex-col sticky top-0 h-screen overflow-y-auto custom-scrollbar">
    
    <div class="p-8 border-b border-slate-800/50">
        <img src="./assets/images/logo.png" alt="Mayview" class="h-12 w-auto mb-2" onerror="this.src='https://ui-avatars.com/api/?name=Mayview&background=1e40af&color=fff'">
        <p class="text-[10px] font-bold text-mayview-accent tracking-[3px] uppercase">Super Admin Portal</p>
    </div>

    <nav class="px-4 py-6 space-y-6 flex-1">
        
        <div>
            <p class="text-[10px] font-bold uppercase text-slate-500 px-4 mb-2 tracking-widest">Master Control</p>
            <div class="space-y-1">
                <a href="index.php" class="flex items-center gap-3 px-4 py-3 bg-mayview-blue text-white rounded-xl font-semibold shadow-lg shadow-blue-900/20">
                    <i class="fas fa-grid-2 w-5 text-center"></i> Overview
                </a>
                <a href="notification.php" class="flex items-center justify-between px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-bell w-5 text-center group-hover:text-mayview-accent"></i> Notifications</span>
                    <span class="bg-red-500 text-[10px] px-2 py-0.5 rounded-full text-white font-bold">12</span>
                </a>
            </div>
        </div>

        <div>
            <p class="text-[10px] font-bold uppercase text-slate-500 px-4 mb-2 tracking-widest">Stakeholders</p>
            <div class="space-y-1">
                <a href="partner.php" class="flex items-center justify-between px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-store w-5 text-center group-hover:text-mayview-accent"></i> Total Vendors</span>
                    <span class="bg-mayview-blue text-[10px] px-2 py-0.5 rounded-full text-white">24</span>
                </a>
                <a href="users.php" class="flex items-center justify-between px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-user-group w-5 text-center group-hover:text-mayview-accent"></i> Total Customers</span>
                    <span class="bg-slate-700 text-[10px] px-2 py-0.5 rounded-full text-white">1.2k</span>
                </a>
                <a href="rider.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-motorcycle w-5 text-center group-hover:text-mayview-accent"></i> Delivery Fleet
                </a>
            </div>
        </div>

        <div>
            <p class="text-[10px] font-bold uppercase text-slate-500 px-4 mb-2 tracking-widest">Marketplace Control</p>
            <div class="space-y-1">
                <a href="order.php" class="flex items-center justify-between px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-dolly w-5 text-center group-hover:text-mayview-accent"></i> Total Orders</span>
                    <span class="border border-mayview-accent text-mayview-accent text-[10px] px-2 py-0.5 rounded-full font-bold">New</span>
                </a>
                <a href="category.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-layer-group w-5 text-center group-hover:text-mayview-accent"></i> Categories & Slugs
                </a>
                <a href="addproduct.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-boxes-stacked w-5 text-center group-hover:text-mayview-accent"></i> Product Catalog
                </a>
            </div>
        </div>

        <div>
            <p class="text-[10px] font-bold uppercase text-slate-500 px-4 mb-2 tracking-widest">Front-end & CMS</p>
            <div class="space-y-1">
                <a href="banner.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-images w-5 text-center group-hover:text-mayview-accent"></i> Web Banner Settings
                </a>
                <a href="promoCode.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-ticket w-5 text-center group-hover:text-mayview-accent"></i> Promo Codes (Coupons)
                </a>
                <a href="" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group text-orange-400">
                    <i class="fa-solid fa-link w-5 text-center"></i> Global Slug Manager
                </a>
            </div>
        </div>

        <div>
            <p class="text-[10px] font-bold uppercase text-slate-500 px-4 mb-2 tracking-widest">System & Admin</p>
            <div class="space-y-1">
                <a href="" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-percent w-5 text-center group-hover:text-mayview-accent"></i> Commission Setup
                </a>
                <a href="manageAdmin.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-user-shield w-5 text-center group-hover:text-mayview-accent"></i> Manage Sub-Admins
                </a>
                <a href="report.php" class="flex items-center gap-3 px-4 py-3 hover:text-white hover:bg-slate-800 rounded-xl transition-all group">
                    <i class="fa-solid fa-chart-pie w-5 text-center group-hover:text-mayview-accent"></i> Analytics Reports
                </a>
            </div>
        </div>

    </nav>
    
    <div class="p-4 border-t border-slate-800 mt-auto">
        <a href="login.php" class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl font-bold transition-all">
            <i class="fa-solid fa-power-off w-5 text-center"></i> Log Out
        </a>
    </div>
</aside>