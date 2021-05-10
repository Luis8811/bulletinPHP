<!--TODO Update the front end. Adding charts -->
@extends('common.app')

@section('title', 'Inicio')

@section('sidebar')
    @parent
    <h1><span class="label label-primary">Estad&iacute;sticas de suscriptores <i class="fas fa-chart-pie"></i></span></h1>
@endsection

@section('content')
    <p class="bg-info">Resumen de datos demogr&aacute;ficos</p>
      <!--TODO Fix Chart.js in page-->
      <div>
      <canvas id="sex" width="400" height="400"></canvas>
      </div>
      <div>
      <canvas id="education" width="400" height="400"></canvas>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <!--TODO To fix to use Chart.js from node_modules
      <script src="{{ asset('chart.js/chart.js') }}"></script>
      -->
      <script>
        var users = [];
        $.get("http://localhost/bulletin/public/api/users", function(data, status, xhr) {
            var usersData = JSON.stringify(data);
            users = JSON.parse(usersData);
            console.log("Users:");
            console.log(users);
            let males = 0;
            let females = 0;
            let fp = 0;
            let primary = 0;
            let secondary = 0;
            let college = 0;
            for (let i = 0; i < users.length; i++) {
                if (users[i].sex == 'F') {
                    females ++;
                } else {
                    males ++;
                }
                let educational_level = users[i].educational_level_id;
                switch (educational_level) {
                    case 0:
                    primary ++;
                    break;
                    case 1:
                    secondary ++;
                    break;
                    case 2:
                    fp ++;
                    default:
                    college ++;
                }

            }
            console.log("Females:");
            console.log(females);
            console.log("Males");
            console.log(males);
            var ctxSex = document.getElementById('sex').getContext('2d');
            var myChart = new Chart(ctxSex, {
            type: 'bar',
            data: {
                labels: ['Femenino', 'Masculino'],
                datasets: [{
                    label: 'Usuarios registrados',
                    data: [females, males],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        stacked: true
                    }
                },

                title: {
                    display: true,
                    text: 'Sexo'
                },
            }
        });

        var ctxEducation = document.getElementById('education').getContext('2d');
        var educationChart = new Chart(ctxEducation, {
            type: 'doughnut',
            data: {
                labels: ['Primario', 'Secundario', 'FP', 'Superior'],
                datasets: [{
                    label: 'Education',
                    data: [primary, secondary, fp, college],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                title: {
                        display: true,
                        text: 'Nivel educacional'
                }
            }
        });

         });

        </script>
@endsection
