<x-employer-layout>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F1F5F9]">
    <div class="max-w-7xl mx-auto py-8 px-6">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Dashboard</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-700">Total Jobs</h2>
                <p class="text-xl font-bold text-indigo-600 mt-2">120</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-700">Open Jobs</h2>
                <p class="text-xl font-bold text-indigo-600 mt-2">45</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-700">Total Applicants</h2>
                <p class="text-xl font-bold text-indigo-600 mt-2">350</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Monthly Application Trends</h2>
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Applications',
                    data: [50, 60, 70, 90, 100, 120, 150, 130, 160, 200, 220, 250],
                    fill: false,
                    borderColor: '#4F46E5',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: '#f3f4f6',
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f3f4f6',
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>

</x-employer-layout>
