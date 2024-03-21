@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
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
                <div class="card card-danger card-outline col-12 col-lg-7 h-50">
                    <div class="card-header">
                        <h3 class="card-title"><strong>SQD</strong></h3>
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
                                @foreach ($years as $year)
                                    @if ($year == $currentYear)
                                        <option value="{{ $year }}" selected>{{ $year }}</option>
                                    @else
                                     <option value="{{ $year }}">{{ $year }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit" name="" class="btn btn-danger btn-sm rounded">
                                View
                            </button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th>Questions</th>
                                    <th colspan="6" class="text-center">Ratings</th>
                                </tr>
                                <tr>
                                    <th></th>
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
                        </table>
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
            labels: ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree'],
            datasets: [{
                label: 'SQD0',
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                data: [
                    {{ $sqd0->strongly_disagree_count }},
                    {{ $sqd0->disagree_count }},
                    {{ $sqd0->neutral_count }},
                    {{ $sqd0->agree_count }},
                    {{ $sqd0->strongly_agree_count }}
                ]
            }, {
                label: 'SQD1',
                backgroundColor: 'rgba(255, 192, 203, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd1->strongly_disagree_count }},
                    {{ $sqd1->disagree_count }},
                    {{ $sqd1->neutral_count }},
                    {{ $sqd1->agree_count }},
                    {{ $sqd1->strongly_agree_count }}
                ]
            }, {
                label: 'SQD2',
                backgroundColor: 'rgba(0, 0, 255, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd2->strongly_disagree_count }},
                    {{ $sqd2->disagree_count }},
                    {{ $sqd2->neutral_count }},
                    {{ $sqd2->agree_count }},
                    {{ $sqd2->strongly_agree_count }}
                ]
            }, {
                label: 'SQD3',
                backgroundColor: 'rgba(255, 255, 0, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd3->strongly_disagree_count }},
                    {{ $sqd3->disagree_count }},
                    {{ $sqd3->neutral_count }},
                    {{ $sqd3->agree_count }},
                    {{ $sqd3->strongly_agree_count }}
                ]
            }, {
                label: 'SQD4',
                backgroundColor: 'rgba(0, 255, 0, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd4->strongly_disagree_count }},
                    {{ $sqd4->disagree_count }},
                    {{ $sqd4->neutral_count }},
                    {{ $sqd4->agree_count }},
                    {{ $sqd4->strongly_agree_count }}
                ]
            }, {
                label: 'SQD5',
                backgroundColor: 'rgba(128, 128, 128, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd5->strongly_disagree_count }},
                    {{ $sqd5->disagree_count }},
                    {{ $sqd5->neutral_count }},
                    {{ $sqd5->agree_count }},
                    {{ $sqd5->strongly_agree_count }}
                ]
            }, {
                label: 'SQD6',
                backgroundColor: 'rgba(255, 165, 0, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd6->strongly_disagree_count }},
                    {{ $sqd6->disagree_count }},
                    {{ $sqd6->neutral_count }},
                    {{ $sqd6->agree_count }},
                    {{ $sqd6->strongly_agree_count }}
                ]
            }, {
                label: 'SQD7',
                backgroundColor: 'rgba(0, 128, 128, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd7->strongly_disagree_count }},
                    {{ $sqd7->disagree_count }},
                    {{ $sqd7->neutral_count }},
                    {{ $sqd7->agree_count }},
                    {{ $sqd7->strongly_agree_count }}
                ]
            }, {
                label: 'SQD8',
                backgroundColor: 'rgba(139, 69, 19, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $sqd8->strongly_disagree_count }},
                    {{ $sqd8->disagree_count }},
                    {{ $sqd8->neutral_count }},
                    {{ $sqd8->agree_count }},
                    {{ $sqd8->strongly_agree_count }}
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
