@extends('layout.app')

@section('headerTitle')
    <h1 class="m-0">Dashboard</h1>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @include('layout.statBox')
            <div class="row">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additionalScript')
    @include('additionalScript.ccScript')
@endsection
