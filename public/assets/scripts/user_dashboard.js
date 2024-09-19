document.addEventListener('DOMContentLoaded', function () {
    // Sidebar Submenu Toggle Logic
    const navItems = document.querySelectorAll('.nav-item > a');
    const submenuLinks = document.querySelectorAll('.submenu .nav-link');  // Select submenu links
    const contentSections = document.querySelectorAll('.content-section');  // All content sections
    const defaultContent = document.getElementById('default-content');  // The default content
    const breadcrumb = document.querySelector('.breadcrumb');  // Breadcrumb selector

    // Function to close all open submenus
    function closeAllSubmenus() {
        const openSubmenus = document.querySelectorAll('.submenu.show');
        openSubmenus.forEach(submenu => {
            submenu.classList.remove('show');
        });
    }

    // Function to dynamically update the breadcrumb
    function updateBreadcrumb(sectionTitle) {
        breadcrumb.innerHTML = '';  // Clear the existing breadcrumb

        // Add 'Dashboard' link to breadcrumb
        const dashboardLink = document.createElement('li');
        dashboardLink.classList.add('breadcrumb-item');
        const dashboardAnchor = document.createElement('a');
        dashboardAnchor.href = '#';
        dashboardAnchor.textContent = 'Dashboard';
        dashboardAnchor.addEventListener('click', function () {
            // Reset to the default dashboard view
            contentSections.forEach(section => section.classList.add('d-none'));
            defaultContent.classList.remove('d-none');
            localStorage.removeItem('activeSection');

            // Close any open submenus
            closeAllSubmenus();

            updateBreadcrumb('Overview');
        });
        dashboardLink.appendChild(dashboardAnchor);
        breadcrumb.appendChild(dashboardLink);

        // Add the current section as active
        const currentSection = document.createElement('li');
        currentSection.classList.add('breadcrumb-item', 'active');
        currentSection.setAttribute('aria-current', 'page');
        currentSection.textContent = sectionTitle;
        breadcrumb.appendChild(currentSection);
    }

    // Handle the sidebar submenu toggle
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

    // Handle submenu link clicks and content toggling
    submenuLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();  // Prevent default link behavior
            const contentId = this.getAttribute('data-content');  // Get the data-content attribute

            // Store the current section in localStorage to maintain it after reload
            localStorage.setItem('activeSection', contentId);

            // Hide all content sections
            contentSections.forEach(section => {
                section.classList.add('d-none');
            });

            // Show the selected content section
            const targetSection = document.getElementById(contentId);
            if (targetSection) {
                targetSection.classList.remove('d-none');
            }

            // Hide the default content
            defaultContent.classList.add('d-none');

            // Update the breadcrumb with the current section
            const sectionTitle = this.textContent;
            updateBreadcrumb(sectionTitle);
        });
    });

    // Check localStorage for the last active section (preserve on refresh)
    const activeSection = localStorage.getItem('activeSection');
    if (activeSection) {
        // Hide all content sections
        contentSections.forEach(section => {
            section.classList.add('d-none');
        });

        // Show the last active section
        const targetSection = document.getElementById(activeSection);
        if (targetSection) {
            targetSection.classList.remove('d-none');
        }

        // Hide the default content
        defaultContent.classList.add('d-none');

        // Update the breadcrumb to reflect the current section
        const activeLink = document.querySelector(`.submenu .nav-link[data-content="${activeSection}"]`);
        if (activeLink) {
            updateBreadcrumb(activeLink.textContent);
        }
    } else {
        // Initialize breadcrumb for the default Overview
        updateBreadcrumb('Overview');
    }

    // Add event listener to the "Overview" link to reset to the default content
    const overviewLink = document.querySelector('.nav-link.active');
    if (overviewLink) {
        overviewLink.addEventListener('click', function () {
            // Clear localStorage to reset the view to the dashboard main content
            localStorage.removeItem('activeSection');

            // Show the default content and hide other sections
            contentSections.forEach(section => {
                section.classList.add('d-none');
            });
            defaultContent.classList.remove('d-none');

            // Close all open submenus when returning to the overview
            closeAllSubmenus();

            // Update breadcrumb back to 'Overview'
            updateBreadcrumb('Overview');
        });
    }

    // Ministry Participation Chart (optional, uncomment when necessary)
    const ctxMinistry = document.getElementById('ministryChart')?.getContext('2d');
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

    // Fellowship Attendance Chart (optional, uncomment when necessary)
    const ctxFellowship = document.getElementById('fellowshipChart')?.getContext('2d');
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
