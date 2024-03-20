@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
@endsection

@section('active')
    <li class="nav-item  menu-is-opening menu-open">
        <a href="" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('CC') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CC</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('SQD') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SQD</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Suggestion</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('report') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Report
                <i class="right fas"></i>
            </p>
        </a>
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
            {{-- <div class="row">
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
            </div> --}}
            <div class="row d-flex">
                <div class="card card-danger card-outline col-12 col-lg-7">
                    <div class="card-header">
                        <h3 class="card-title">CC</h3>
                    </div>
                    <div class="card-body">
                        <canvas class="d-flex justify-content-center mb-4" id="myChart"></canvas>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="card card-danger card-outline col-12 col-lg-4 p-0">
                    <div class="card-header text-right">
                        <form action="#" method="get">
                            <select name="fy" required="" class="btn btn-outline-danger btn-sm mr-1">
                                <option value="2024" selected>2024</option>
                                <option value="2025">2025</option>
                            </select>
                            <button type="submit" name="" class="btn btn-danger btn-sm rounded">
                                View
                            </button>
                        </form>
                    </div>
                    <div class="card-body">
                        {{-- <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="6" class="text-center pl-2">Ratings</th>
                                </tr>
                                <tr>
                                    <th>Questions</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SQD0</td>
                                    <td>{{ $sqd0->strongly_disagree_count }}</td>
                                    <td>{{ $sqd0->disagree_count }}</td>
                                    <td>{{ $sqd0->neutral_count }}</td>
                                    <td>{{ $sqd0->agree_count }}</td>
                                    <td>{{ $sqd0->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD1</td>
                                    <td>{{ $sqd1->strongly_disagree_count }}</td>
                                    <td>{{ $sqd1->disagree_count }}</td>
                                    <td>{{ $sqd1->neutral_count }}</td>
                                    <td>{{ $sqd1->agree_count }}</td>
                                    <td>{{ $sqd1->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD2</td>
                                    <td>{{ $sqd2->strongly_disagree_count }}</td>
                                    <td>{{ $sqd2->disagree_count }}</td>
                                    <td>{{ $sqd2->neutral_count }}</td>
                                    <td>{{ $sqd2->agree_count }}</td>
                                    <td>{{ $sqd2->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD3</td>
                                    <td>{{ $sqd3->strongly_disagree_count }}</td>
                                    <td>{{ $sqd3->disagree_count }}</td>
                                    <td>{{ $sqd3->neutral_count }}</td>
                                    <td>{{ $sqd3->agree_count }}</td>
                                    <td>{{ $sqd3->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD4</td>
                                    <td>{{ $sqd4->strongly_disagree_count }}</td>
                                    <td>{{ $sqd4->disagree_count }}</td>
                                    <td>{{ $sqd4->neutral_count }}</td>
                                    <td>{{ $sqd4->agree_count }}</td>
                                    <td>{{ $sqd4->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD5</td>
                                    <td>{{ $sqd5->strongly_disagree_count }}</td>
                                    <td>{{ $sqd5->disagree_count }}</td>
                                    <td>{{ $sqd5->neutral_count }}</td>
                                    <td>{{ $sqd5->agree_count }}</td>
                                    <td>{{ $sqd5->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD6</td>
                                    <td>{{ $sqd6->strongly_disagree_count }}</td>
                                    <td>{{ $sqd6->disagree_count }}</td>
                                    <td>{{ $sqd6->neutral_count }}</td>
                                    <td>{{ $sqd6->agree_count }}</td>
                                    <td>{{ $sqd6->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD7</td>
                                    <td>{{ $sqd7->strongly_disagree_count }}</td>
                                    <td>{{ $sqd7->disagree_count }}</td>
                                    <td>{{ $sqd7->neutral_count }}</td>
                                    <td>{{ $sqd7->agree_count }}</td>
                                    <td>{{ $sqd7->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD8</td>
                                    <td>{{ $sqd8->strongly_disagree_count }}</td>
                                    <td>{{ $sqd8->disagree_count }}</td>
                                    <td>{{ $sqd8->neutral_count }}</td>
                                    <td>{{ $sqd8->agree_count }}</td>
                                    <td>{{ $sqd8->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td>
                                        <strong>
                                            {{ $sqd0->strongly_disagree_count +
                                                $sqd1->strongly_disagree_count +
                                                $sqd2->strongly_disagree_count +
                                                $sqd3->strongly_disagree_count +
                                                $sqd4->strongly_disagree_count +
                                                $sqd5->strongly_disagree_count +
                                                $sqd6->strongly_disagree_count +
                                                $sqd7->strongly_disagree_count +
                                                $sqd8->strongly_disagree_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            {{ $sqd0->disagree_count +
                                                $sqd1->disagree_count +
                                                $sqd2->disagree_count +
                                                $sqd3->disagree_count +
                                                $sqd4->disagree_count +
                                                $sqd5->disagree_count +
                                                $sqd6->disagree_count +
                                                $sqd7->disagree_count +
                                                $sqd8->disagree_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            {{ $sqd0->neutral_count +
                                                $sqd1->neutral_count +
                                                $sqd2->neutral_count +
                                                $sqd3->neutral_count +
                                                $sqd4->neutral_count +
                                                $sqd5->neutral_count +
                                                $sqd6->neutral_count +
                                                $sqd7->neutral_count +
                                                $sqd8->neutral_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            {{ $sqd0->agree_count +
                                                $sqd1->agree_count +
                                                $sqd2->agree_count +
                                                $sqd3->agree_count +
                                                $sqd4->agree_count +
                                                $sqd5->agree_count +
                                                $sqd6->agree_count +
                                                $sqd7->agree_count +
                                                $sqd8->agree_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            {{ $sqd0->strongly_agree_count +
                                                $sqd1->strongly_agree_count +
                                                $sqd2->strongly_agree_count +
                                                $sqd3->strongly_agree_count +
                                                $sqd4->strongly_agree_count +
                                                $sqd5->strongly_agree_count +
                                                $sqd6->strongly_agree_count +
                                                $sqd7->strongly_agree_count +
                                                $sqd8->strongly_agree_count }}
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
                <div class="col-4">

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
            labels: [
                'Choices 1',
                'Choices 2',
                'Choices 3',
                'Choices 4'
            ],
            datasets: [{
                label: 'CC1',
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                data: [
                    {{ $cc1->choices1_count }},
                    {{ $cc1->choices2_count }},
                    {{ $cc1->choices3_count }},
                    {{ $cc1->choices4_count }}
                ]
            }]
        };

        // Configure options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 90, // Or any angle you want
                        minRotation: 90 // Should be the same as maxRotation
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
    </script>
@endsection
