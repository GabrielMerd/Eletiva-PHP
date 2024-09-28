<x-app-layout>
    <h5 class="mt-3">Bem-vindo ao Sistema de Controle de Estoque!</h5>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Produtos', 'Quantidade Vendida'],
          ['Produto A',     11],
          ['Produto B',      2],
          ['Produto C',  2],
          ['Produto D', 2],
          ['Produto E',    7]
        ]);

        var options = {
          title: 'Quantidade de Produtos Vendidos',
          pieHole: 0.4,
          slices: {
            0: {color: '#1E90FF'},
            1: {color: '#FF6347'},
            2: {color: '#32CD32'},
            3: {color: '#FFD700'},
            4: {color: '#9370DB'}
          },
          height: 500,
          width: 900,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>
