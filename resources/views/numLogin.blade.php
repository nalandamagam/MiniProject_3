@extends('layouts.app')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style type="text/css">
        .box{
            width:800px;
            margin:0 auto;
        }
    </style>
    <script type="text/javascript">
        var analytics = <?php echo $loginCount; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                'vAxis': {'title': 'Number of Logins'},
                'hAxis': {'title': 'User Name'}
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" align="center"><h4>{{ __('User Login Dashboard') }}</h4>
                        <div align="right">
                            <a href="questionChart">Switch to Question View Dashboard</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title" align="center">Number of Logins per User</h5>
                            </div>
                            <div class="panel-body" align="center">
                                <div id="pie_chart" style="width:750px; height:450px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

