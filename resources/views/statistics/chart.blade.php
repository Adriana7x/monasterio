<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <script type="text/javascript" src="http://www.google.com/jsapi"></script>
          <script type="text/javascript">
                    /* 	google.charts.load('current', {
			'packages': ['corechart']
		});

		google.charts.setOnLoadCallback(drawVisualization); */

                    function init() {
                              google.load('visualization', '1.1', {
                                        packages: 'corechart',
                                        callback: 'drawVisualization'
                              });
                    }

                    function drawVisualization() {
                              // Some raw data (not necessarily accurate)
                              var data = google.visualization.arrayToDataTable([
                                        ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                                        ['2004/05', 165, 938, 522, 998, 450, 614.6],
                                        ['2005/06', 135, 1120, 599, 1268, 288, 682],
                                        ['2006/07', 157, 1167, 587, 807, 397, 623],
                                        ['2007/08', 139, 1110, 615, 968, 215, 609.4],
                                        ['2008/09', 136, 691, 629, 1026, 366, 569.6]
                              ]);

                              var options = {
                                        title: 'Monthly Coffee Production by Country',
                                        vAxis: {
                                                  title: 'Cups'
                                        },
                                        hAxis: {
                                                  title: 'Month'
                                        },
                                        seriesType: 'bars',
                                        series: {
                                                  5: {
                                                            type: 'line'
                                                  }
                                        }
                              };

                              var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                              chart.draw(data, options);
                    }
          </script>
</head>

<body onload="init()">
          <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>

</html>