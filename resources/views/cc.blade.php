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
                        <h3 class="card-title"><strong>CC</strong></h3>
                    </div>
                    <div class="card-body">
                        <canvas class="d-flex justify-content-center mb-4" id="myChart"></canvas>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="card card-danger card-outline col-12 col-lg-4 p-0 h-50">
                    <div class="card-header text-right">
                        <form id="yearForm" action="" method="get">
                            <select id="select" name="year" required="" class="btn btn-outline-danger btn-sm mr-1">
                                @foreach ($years as $year)
                                    @if ($year == $currentYear)
                                        <option value="{{ $year }}" selected>{{ $year }}</option>
                                    @else
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endif
                                @endforeach
                                <option value="2025">2025</option>
                            </select>
                            <button id="view" type="submit" name="" class="btn btn-danger btn-sm rounded">
                                View
                            </button>
                        </form>
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
                                    <td id="cc1-choices1"></td>
                                    <td id="cc1-choices2"></td>
                                    <td id="cc1-choices3"></td>
                                    <td id="cc1-choices4"></td>
                                </tr>
                                <tr>
                                    <td>CC2</td>
                                    <td id="cc2-choices1"></td>
                                    <td id="cc2-choices2"></td>
                                    <td id="cc2-choices3"></td>
                                    <td id="cc2-choices4"></td>
                                </tr>
                                <tr>
                                    <td>CC3</td>
                                    <td id="cc3-choices1"></td>
                                    <td id="cc3-choices2"></td>
                                    <td id="cc3-choices3"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td><strong id="choices1-total"></strong></td>
                                    <td><strong id="choices2-total"></strong></td>
                                    <td><strong id="choices3-total"></strong></td>
                                    <td><strong id="choices4-total"></strong></td>
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
    {{-- <script>
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

        // Configure options
        var options = {
            // scales: {
            //     yAxes: [{
            //         ticks: {
            //             beginAtZero: true
            //         }
            //     }],
            //     xAxes: [{
            //         ticks: {
            //             autoSkip: false,
            //             maxRotation: 90, // Or any angle you want
            //             minRotation: 90 // Should be the same as maxRotation
            //         }
            //     }]
            // }
        };
        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            // Fetches data from viewCC function in DashboardController and updates the page using AJAX with the received data.
            // year argument is used to change the year in the first load of the page and if the use select a specific year.
            function fetchData(year) {
                $.ajax({
                    url: 'http://localhost:8000/feedback-admin/public/dashboard/cc?year=' + year,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Handle successful response
                        console.log(response)
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
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }

            // For the first load of the page
            fetchData("{{ $currentYear }}");

            // If the user select a specific year
            $('#yearForm').submit(function(event) {

                event.preventDefault();

                var formData = $('#select').val();

                console.log(formData)

                fetchData(formData);
            });
        });
    </script>
@endsection
