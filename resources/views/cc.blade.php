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

                <div class="card card-danger card-outline col-12 col-lg-4 p-0">
                    <div class="card-header text-right">
                        <form id="yearForm" action="" method="get">
                            <select id="2024" name="year" required="" class="btn btn-outline-danger btn-sm mr-1">
                                @foreach ($years as $year)
                                    @if (Request()->get('year') == $year)
                                        <option value="{{ $year }}" selected>{{ $year }}</option>
                                    @else
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endif
                                @endforeach
                                {{-- <option value="2025">2025</option>
                                <option value="2024">2024</option> --}}
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
                                    <th colspan="6" class="text-center pl-2">Answers</th>
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
                                <tr id="total"></tr>
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
    </script>

    <script>
        $(document).ready(function() {
            var dataAppended = false;

            $('#yearForm').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();

                // If data has already been appended, return early
                // if (dataAppended) {
                //     return;

                // }
                // Get form data
                var formData = $('#2024').val();
                console.log(formData)
                // Make AJAX request
                $.ajax({
                    url: 'http://localhost:8000/feedback-admin/public/getData?year=' +
                        formData, // Update this with your Laravel endpoint URL
                    type: 'GET', // Change the request method if needed
                    dataType: 'json', // The type of data you're expecting back from the server
                    success: function(response) {
                        // Handle successful response
                        console.log(response)
                        var choices1Total = parseInt(response[0].choices1_count) +
                            parseInt(response[1].choices1_count) +
                            parseInt(response[2].choices1_count);
                        var choices2Total = parseInt(response[0].choices2_count) +
                            parseInt(response[1].choices2_count) +
                            parseInt(response[2].choices2_count);
                        var choices3Total = parseInt(response[0].choices3_count) +
                            parseInt(response[1].choices3_count) +
                            parseInt(response[2].choices3_count);
                        var choices4Total = parseInt(response[0].choices4_count) +
                            parseInt(response[1].choices4_count);

                        $('#cc1-choices1').text(response[0].choices1_count);
                        $('#cc1-choices2').text(response[0].choices2_count);
                        $('#cc1-choices3').text(response[0].choices3_count);
                        $('#cc1-choices4').text(response[0].choices4_count);
                        $('#cc2-choices1').text(response[1].choices1_count);
                        $('#cc2-choices2').text(response[1].choices2_count);
                        $('#cc2-choices3').text(response[1].choices3_count);
                        $('#cc2-choices4').text(response[1].choices4_count);
                        $('#cc3-choices1').text(response[2].choices1_count);
                        $('#cc3-choices2').text(response[2].choices2_count);
                        $('#cc3-choices3').text(response[2].choices3_count);
                        $('#cc3-choices3').text(response[2].choices3_count);
                        $('#total').append(`
                            <td><strong>Total</strong></td>
                            <td><strong>${choices1Total}</strong></td>
                            <td><strong>${choices2Total}</strong></td>
                            <td><strong>${choices3Total}</strong></td>
                            td><strong>${choices4Total}</strong></td>
                        `);
                        // dataAppended = true;
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
