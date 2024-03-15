@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
@endsection
@section('additionalStyle')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('active')
    <li class="nav-item">
        <a href="{{ url('/dashboard') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Report
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('chartjs') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ChartJS</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('invoice') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://20.20.23.71:8000/feedback-client/public/feedback?logsNumber=2024-00001"
            class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Feedback Client
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col-8">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('additionalScript')
<script>
    // Get the canvas element
    var ctx = document.getElementById('myChart').getContext('2d');

    // Define data
    var data = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Sales',
            backgroundColor: 'rgba(0, 0, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40]
        }]
    };

    // Configure options
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    // Create the chart
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
    var Hellos = '{{$sqQuestion}}';
    console.log(Hellos);
</script>
@endsection
