@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
@endsection

@section('additionalStyle')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css') }}">
@endsection

@section('active')
    <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
        </a>
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
            <div class="row">
                <div class="col-8">
                    <canvas class="d-flex justify-content-center mb-4" id="myChart" width="400"
                        height="200"></canvas>
                </div>
                <div class="col-4">
                    <div class="col-sm-12 mb-4">
                        <div class="border mt-4 p-2">
                            <table class="table" width="100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <form action="index" method="post">
                                                <select name="fy" required="">
                                                    <option value="2024" selected="">2024</option>
                                                    <option value="2022">2022</option>

                                                    <option value="2023">2023</option>

                                                    <option value="2024">2024</option>

                                                </select>
                                                <button type="submit" name="viewthisyear" class="rounded"
                                                    style="border:.3px solid gray;">View</button>
                                            </form>
                                        </th>
                                        <th colspan="5" class="text-center">Rate</th>
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
                            </table>
                        </div>
                    </div>
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
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

    <!-- date-range-picker -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
@endsection
