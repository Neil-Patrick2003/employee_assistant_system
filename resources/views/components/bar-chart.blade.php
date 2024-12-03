<div>
    <canvas id="{{ $attributes->get('id', 'barChart') }}" class="h-96"></canvas>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('{{ $attributes->get('id', 'barChart') }}').getContext('2d');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($labels),
                    datasets: [{
                        label: @json($chartLabel),
                        data: @json($data),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: @json($chartTitle)
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Count'
                            }
                        }
                    }
                }
            });
        });
    </script>
</div>
