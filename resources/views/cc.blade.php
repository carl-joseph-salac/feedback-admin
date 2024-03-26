@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-primary">
                        <div class="inner">
                            <h3 id="total-feedbacks">{{ $totalFeedbacks }}</h3>
                            <p>Total Feedbacks</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-star"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-secondary">
                        <div class="inner">
                            <h3 id="yearly-feedbacks">{{ $yearlyFeedbacks }}</h3>
                            <div class="row">
                                <p class="mx-2">Yearly Feedbacks</p>
                                <form id="yearForm" action="" method="get">
                                    <select id="select" name="year" class="btn btn-sm bg-white text-dark">
                                        <option value="2023">2023</option>
                                        @foreach ($years as $year)
                                            @if ($year == $currentYear)
                                                <option value="{{ $year }}" selected="selected"
                                                    data-select2-id="14">
                                                    {{ $year }}</option>
                                            @else
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-star-outline"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3 id="queue">44</h3>
                            <p>Queue</p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-people "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="card card-info col-12 col-lg-7 p-0 h-50">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title">
                                <i class="ion-stats-bars mr-2"></i>
                                <strong>Chart</strong>
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">
                        <canvas class="d-flex justify-content-center mb-4" id="myChart"></canvas>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="card card-info col-12 col-lg-4 p-0 h-50">
                    <div class="card-header text-right">
                        <h3 class="card-title">
                            <i class="fa fa-table mr-2" aria-hidden="true"></i>
                            <strong>Table</strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th>Questions</th>
                                    <th colspan="6" class="text-center pl-2">Choices</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td>CC1</td>
                                    <td id="cc1-choices1">{{ $cc1->choices1_count }}</td>
                                    <td id="cc1-choices2">{{ $cc1->choices2_count }}</td>
                                    <td id="cc1-choices3">{{ $cc1->choices3_count }}</td>
                                    <td id="cc1-choices4">{{ $cc1->choices4_count }}</td>
                                </tr>
                                <tr>
                                    <td>CC2</td>
                                    <td id="cc2-choices1">{{ $cc2->choices1_count }}</td>
                                    <td id="cc2-choices2">{{ $cc2->choices2_count }}</td>
                                    <td id="cc2-choices3">{{ $cc2->choices3_count }}</td>
                                    <td id="cc2-choices4">{{ $cc2->choices4_count }}</td>
                                </tr>
                                <tr>
                                    <td>CC3</td>
                                    <td id="cc3-choices1">{{ $cc3->choices1_count }}</td>
                                    <td id="cc3-choices2">{{ $cc3->choices2_count }}</td>
                                    <td id="cc3-choices3">{{ $cc3->choices3_count }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td>
                                        <strong id="choices1-total">
                                            {{ $cc1->choices1_count + $cc2->choices1_count + $cc3->choices1_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong id="choices2-total">
                                            {{ $cc1->choices2_count + $cc2->choices2_count + $cc3->choices2_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong id="choices3-total">
                                            {{ $cc1->choices3_count + $cc2->choices3_count + $cc3->choices3_count }}
                                        </strong>
                                    </td>
                                    <td>
                                        <strong id="choices4-total">
                                            {{ $cc1->choices4_count + $cc2->choices4_count }}
                                        </strong>
                                    </td>
                                </tr>
                                {{-- <tr id="total"></tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additionalScript')
    <script>
        var ctx = $('#myChart').get(0).getContext('2d');
        var myChart;

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
            }, {
                label: 'CC2',
                backgroundColor: 'rgba(0, 128, 128, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $cc2->choices1_count }},
                    {{ $cc2->choices2_count }},
                    {{ $cc2->choices3_count }},
                    {{ $cc2->choices4_count }}
                ]
            }, {
                label: 'CC3',
                backgroundColor: 'rgba(139, 69, 19, 0.8)',
                borderColor: 'rgba(255, 162, 235, 1)',
                borderWidth: 1,
                hidden: true,
                data: [
                    {{ $cc3->choices1_count }},
                    {{ $cc3->choices2_count }},
                    {{ $cc3->choices3_count }},
                ]
            }]
        };

        var labelsForCC1 = [
            'I know what a CC is and I saw this office\'s CC',
            'I know what a CC is but did NOT see this office\'s CC',
            'I learned of the CC only when I saw this office\'s CC.',
            'I do not know what a CC is and I did not see one in this office.'
        ];

        var labelsForCC2 = [
            'Easy to see',
            'Somewhat easy to see',
            'Difficult to see',
            'Not visible at all'
        ];

        var labelsForCC3 = [
            'Helped very much',
            'Somewhat helped',
            'Did not help'
        ];

        // Configure options
        var options = {
            // scales: {
            //     x: {
            //         type: 'category',
            //         ticks: {
            //             autoSkip: false,
            //             maxRotation: 50,
            //             minRotation: 50,
            //             fontSize: 10
            //         }
            //     },
            //     y: {
            //         type: 'linear',
            //         ticks: {
            //             beginAtZero: true
            //         }
            //     }
            // },
            plugins: {
                tooltip: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            var datasetIndex = tooltipItem[0]
                                .datasetIndex;
                            var index = tooltipItem[0].dataIndex;
                            if (datasetIndex === 0) {
                                return labelsForCC1[index];
                            } else if (datasetIndex === 1) {
                                return labelsForCC2[index];
                            } else {
                                return labelsForCC3[index];
                            }
                        }
                    }
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>

    <script>
        $(document).ready(function() {
            // Automatically submit the form after selecting a year
            $('#select').change(function() {
                $('#yearForm').submit();
            });

            // If the user select a specific year
            $('#yearForm').submit(function(event) {

                event.preventDefault();

                var formData = $('#select').val();

                $.ajax({
                    url: 'http://localhost:8000/feedback-admin/public/dashboard/cc?year=' +
                        formData,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Handle successful response
                        var choices1Total = parseInt(response[0]?.choices1_count || 0) +
                            parseInt(response[1]?.choices1_count || 0) +
                            parseInt(response[2]?.choices1_count || 0);
                        var choices2Total = parseInt(response[0]?.choices2_count || 0) +
                            parseInt(response[1]?.choices2_count || 0) +
                            parseInt(response[2]?.choices2_count || 0);
                        var choices3Total = parseInt(response[0]?.choices3_count || 0) +
                            parseInt(response[1]?.choices3_count || 0) +
                            parseInt(response[2]?.choices3_count || 0);
                        var choices4Total = parseInt(response[0]?.choices4_count || 0) +
                            parseInt(response[1]?.choices4_count || 0);
                        var yearlyFeedbacks = choices1Total + choices2Total + choices3Total +
                            choices4Total;

                        $('#cc1-choices1').text(response[0]?.choices1_count || 0);
                        $('#cc1-choices2').text(response[0]?.choices2_count || 0);
                        $('#cc1-choices3').text(response[0]?.choices3_count || 0);
                        $('#cc1-choices4').text(response[0]?.choices4_count || 0);
                        $('#cc2-choices1').text(response[1]?.choices1_count || 0);
                        $('#cc2-choices2').text(response[1]?.choices2_count || 0);
                        $('#cc2-choices3').text(response[1]?.choices3_count || 0);
                        $('#cc2-choices4').text(response[1]?.choices4_count || 0);
                        $('#cc3-choices1').text(response[2]?.choices1_count || 0);
                        $('#cc3-choices2').text(response[2]?.choices2_count || 0);
                        $('#cc3-choices3').text(response[2]?.choices3_count || 0);
                        $('#cc3-choices3').text(response[2]?.choices3_count || 0);
                        $('#choices1-total').text(choices1Total);
                        $('#choices2-total').text(choices2Total);
                        $('#choices3-total').text(choices3Total);
                        $('#choices4-total').text(choices4Total);
                        $('#total-feedbacks').text(response[3]);
                        $('#yearly-feedbacks').text(response[4]);

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
                                    response[0]?.choices1_count || 0,
                                    response[0]?.choices2_count || 0,
                                    response[0]?.choices3_count || 0,
                                    response[0]?.choices4_count || 0
                                ]
                            }, {
                                label: 'CC2',
                                backgroundColor: 'rgba(0, 128, 128, 0.8)',
                                borderColor: 'rgba(255, 162, 235, 1)',
                                borderWidth: 1,
                                hidden: true,
                                data: [
                                    response[1]?.choices1_count || 0,
                                    response[1]?.choices2_count || 0,
                                    response[1]?.choices3_count || 0,
                                    response[1]?.choices4_count || 0
                                ]
                            }, {
                                label: 'CC3',
                                backgroundColor: 'rgba(139, 69, 19, 0.8)',
                                borderColor: 'rgba(255, 162, 235, 1)',
                                borderWidth: 1,
                                hidden: true,
                                data: [
                                    response[2]?.choices1_count || 0,
                                    response[2]?.choices2_count || 0,
                                    response[2]?.choices3_count || 0
                                ]
                            }]
                        };

                        var labelsForCC1 = [
                            'I know what a CC is and I saw this office\'s CC',
                            'I know what a CC is but did NOT see this office\'s CC',
                            'I learned of the CC only when I saw this office\'s CC.',
                            'I do not know what a CC is and I did not see one in this office.'
                        ];

                        var labelsForCC2 = [
                            'Easy to see',
                            'Somewhat easy to see',
                            'Difficult to see',
                            'Not visible at all'
                        ];

                        var labelsForCC3 = [
                            'Helped very much',
                            'Somewhat helped',
                            'Did not help'
                        ];

                        // Configure options
                        var options = {
                            legend: {
                                display: false
                            },
                            scales: {
                                x: {
                                    type: 'category',
                                    ticks: {
                                        autoSkip: false,
                                        maxRotation: 50,
                                        minRotation: 50,
                                        fontSize: 10
                                    }
                                },
                                y: {
                                    type: 'linear',
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }
                            },
                            plugins: {
                                tooltip: {
                                    callbacks: {
                                        title: function(tooltipItem, data) {
                                            var datasetIndex = tooltipItem[0]
                                                .datasetIndex;
                                            var index = tooltipItem[0].dataIndex;
                                            if (datasetIndex === 0) {
                                                return labelsForCC1[index];
                                            } else if (datasetIndex === 1) {
                                                return labelsForCC2[index];
                                            } else {
                                                return labelsForCC3[index];
                                            }
                                        }
                                    }
                                }
                            }
                        };

                        // If the chart does not exist, create it
                        if (!myChart) {
                            myChart = new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: options
                            });
                        } else {
                            // If the chart already exists, update its data
                            myChart.data = data;
                            myChart.update();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
