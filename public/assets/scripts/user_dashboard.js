document.addEventListener('DOMContentLoaded', function () {
    // Sidebar Submenu Toggle Logic
    const navItems = document.querySelectorAll('.nav-item > a');

    navItems.forEach(item => {
        item.addEventListener('click', function (event) {
            const submenu = this.nextElementSibling;
            if (submenu && submenu.classList.contains('submenu')) {
                event.preventDefault();  // Prevent the default link behavior

                // Toggle the visibility of the current submenu
                submenu.classList.toggle('show');

                // Close other open submenus when a new one is opened
                const openSubmenus = document.querySelectorAll('.submenu.show');
                openSubmenus.forEach(openMenu => {
                    if (openMenu !== submenu) {
                        openMenu.classList.remove('show');
                    }
                });
            }
        });
    });

    // Ministry Participation Chart
    const ctxMinistry = document.getElementById('ministryChart').getContext('2d');
    // const ministryChart = new Chart(ctxMinistry, {
    //     type: 'bar',
    //     data: {
    //         labels: ['January', 'February', 'March', 'April', 'May'],
    //         datasets: [{
    //             label: '# of Ministries Participated',
    //             data: [3, 5, 2, 8, 7],
    //             backgroundColor: 'rgba(54, 162, 235, 0.2)',  // Transparent blue
    //             borderColor: 'rgba(54, 162, 235, 1)',        // Solid blue
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         responsive: true,
    //         maintainAspectRatio: false,
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });

    // Fellowship Attendance Chart
    const ctxFellowship = document.getElementById('fellowshipChart').getContext('2d');
    // const fellowshipChart = new Chart(ctxFellowship, {
    //     type: 'line',
    //     data: {
    //         labels: ['January', 'February', 'March', 'April', 'May'],
    //         datasets: [{
    //             label: 'Fellowship Attendance',
    //             data: [10, 20, 15, 30, 25],
    //             borderColor: 'rgba(75, 192, 192, 1)',        // Line color (Cyan)
    //             backgroundColor: 'rgba(75, 192, 192, 0.2)',   // Area fill color (light cyan)
    //             fill: true
    //         }]
    //     },
    //     options: {
    //         responsive: true,
    //         maintainAspectRatio: false,
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
});
