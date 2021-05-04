<!--TODO Update the front end. Adding charts -->
@extends('common.app')

@section('title', 'Inicio')

@section('sidebar')
    @parent
    <h1><span class="label label-default">Estad&iacute;sticas de suscriptores</span></h1>
@endsection

@section('content')
    <p class="bg-info">Aspectos considerados en el desarrollo del caso práctico</p>
    <ul class="list-group">
        <li class="list-group-item">PHP con un framework: <span class="badge">Se usa Laravel debido a que facilita el trabajo y tiene demanda</span></li>
        <li class="list-group-item">Front end atractivo: <span class="badge">Uso de Bootstrap 4</span></li>
        <li class="list-group-item">Autoaprendizaje</li>
      </ul>
      <!--TODO Fix Chart.js in page-->
      <div>
      <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>

@endsection
