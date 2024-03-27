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
            <div class="row d-flex">
                <div class="card card-info col-12 col-lg-7 h-50 p-0">
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

                <div class="card card-info col-12 col-lg-4 p-0">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title">
                                <i class="fa fa-table mr-2" aria-hidden="true"></i>
                                <strong>Table</strong>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" width="100%">
                            <thead>
                                <tr>
                                    <th>Questions</th>
                                    <th colspan="6" class="text-center">Star Ratings</th>
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
                                    <td id="sqd0-strongly-disagree">{{ $sqd0->strongly_disagree_count }}</td>
                                    <td id="sqd0-disagree">{{ $sqd0->disagree_count }}</td>
                                    <td id="sqd0-neutral">{{ $sqd0->neutral_count }}</td>
                                    <td id="sqd0-agree">{{ $sqd0->agree_count }}</td>
                                    <td id="sqd0-strongly-agree">{{ $sqd0->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD1</td>
                                    <td id="sqd1-strongly-disagree">{{ $sqd1->strongly_disagree_count }}</td>
                                    <td id="sqd1-disagree">{{ $sqd1->disagree_count }}</td>
                                    <td id="sqd1-neutral">{{ $sqd1->neutral_count }}</td>
                                    <td id="sqd1-agree">{{ $sqd1->agree_count }}</td>
                                    <td id="sqd1-strongly-agree">{{ $sqd1->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD2</td>
                                    <td id="sqd2-strongly-disagree">{{ $sqd2->strongly_disagree_count }}</td>
                                    <td id="sqd2-disagree">{{ $sqd2->disagree_count }}</td>
                                    <td id="sqd2-neutral">{{ $sqd2->neutral_count }}</td>
                                    <td id="sqd2-agree">{{ $sqd2->agree_count }}</td>
                                    <td id="sqd2-strongly-agree">{{ $sqd2->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD3</td>
                                    <td id="sqd3-strongly-disagree">{{ $sqd3->strongly_disagree_count }}</td>
                                    <td id="sqd3-disagree">{{ $sqd3->disagree_count }}</td>
                                    <td id="sqd3-neutral">{{ $sqd3->neutral_count }}</td>
                                    <td id="sqd3-agree">{{ $sqd3->agree_count }}</td>
                                    <td id="sqd3-strongly-agree">{{ $sqd3->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD4</td>
                                    <td id="sqd4-strongly-disagree">{{ $sqd4->strongly_disagree_count }}</td>
                                    <td id="sqd4-disagree">{{ $sqd4->disagree_count }}</td>
                                    <td id="sqd4-neutral">{{ $sqd4->neutral_count }}</td>
                                    <td id="sqd4-agree">{{ $sqd4->agree_count }}</td>
                                    <td id="sqd4-strongly-agree">{{ $sqd4->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD5</td>
                                    <td id="sqd5-strongly-disagree">{{ $sqd5->strongly_disagree_count }}</td>
                                    <td id="sqd5-disagree">{{ $sqd5->disagree_count }}</td>
                                    <td id="sqd5-neutral">{{ $sqd5->neutral_count }}</td>
                                    <td id="sqd5-agree">{{ $sqd5->agree_count }}</td>
                                    <td id="sqd5-strongly-agree">{{ $sqd5->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD6</td>
                                    <td id="sqd6-strongly-disagree">{{ $sqd6->strongly_disagree_count }}</td>
                                    <td id="sqd6-disagree">{{ $sqd6->disagree_count }}</td>
                                    <td id="sqd6-neutral">{{ $sqd6->neutral_count }}</td>
                                    <td id="sqd6-agree">{{ $sqd6->agree_count }}</td>
                                    <td id="sqd6-strongly-agree">{{ $sqd6->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD7</td>
                                    <td id="sqd7-strongly-disagree">{{ $sqd7->strongly_disagree_count }}</td>
                                    <td id="sqd7-disagree">{{ $sqd7->disagree_count }}</td>
                                    <td id="sqd7-neutral">{{ $sqd7->neutral_count }}</td>
                                    <td id="sqd7-agree">{{ $sqd7->agree_count }}</td>
                                    <td id="sqd7-strongly-agree">{{ $sqd7->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td>SQD8</td>
                                    <td id="sqd8-strongly-disagree">{{ $sqd8->strongly_disagree_count }}</td>
                                    <td id="sqd8-disagree">{{ $sqd8->disagree_count }}</td>
                                    <td id="sqd8-neutral">{{ $sqd8->neutral_count }}</td>
                                    <td id="sqd8-agree">{{ $sqd8->agree_count }}</td>
                                    <td id="sqd8-strongly-agree">{{ $sqd8->strongly_agree_count }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td>
                                        <strong id="strongly-disagree-total">
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
                                        <strong id="disagree-total">
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
                                        <strong id="neutral-total">
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
                                        <strong id="agree-total">
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
                                        <strong id="strongly-agree-total">
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
    </section>

@endsection

@section('additionalScript')
    @include('additionalScript.sqdScript')
@endsection
