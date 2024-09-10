// Ministry Participation Chart
var ctx = document.getElementById('ministryChart').getContext('2d');
var ministryChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: '# of Ministries Participated',
            data: [3, 5, 2, 8, 7],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    }
});

// Fellowship Attendance Chart
var ctx2 = document.getElementById('fellowshipChart').getContext('2d');
var fellowshipChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Fellowship Attendance',
            data: [10, 20, 15, 30, 25],
            borderColor: 'rgba(75, 192, 192, 1)',
            fill: false,
        }]
    }
});
