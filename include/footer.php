


    <script>
        const ctx = document.getElementById('vendorChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [
                    {
                        label: 'Commission Earnings',
                        data: [1200, 1900, 1500, 2400],
                        borderColor: '#1e40af',
                        backgroundColor: 'rgba(30, 64, 175, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 4,
                        pointRadius: 0
                    },
                    {
                        label: 'Vendor Payouts',
                        data: [800, 1200, 1100, 1800],
                        borderColor: '#f87171',
                        borderDash: [5, 5],
                        fill: false,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false } },
                    y: { border: { dash: [5, 5] } }
                }
            }
        });
    </script>


<script>
    const notiBtn = document.getElementById('notiBtn');
    const notiBar = document.getElementById('notiBar');
    const adminBtn = document.getElementById('adminBtn');
    const adminBar = document.getElementById('adminBar');

    // Toggle Notifications
    notiBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        notiBar.classList.toggle('hidden');
        adminBar.classList.add('hidden'); // Close admin if open
    });

    // Toggle Admin Profile
    adminBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        adminBar.classList.toggle('hidden');
        notiBar.classList.add('hidden'); // Close noti if open
    });

    // Close on click outside
    document.addEventListener('click', () => {
        notiBar.classList.add('hidden');
        adminBar.classList.add('hidden');
    });

    // Prevent closing when clicking inside bars
    notiBar.addEventListener('click', (e) => e.stopPropagation());
    adminBar.addEventListener('click', (e) => e.stopPropagation());
</script>
</body>
</html>



