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
                <h3 id="queue">0</h3>
                <p>Queue</p>
            </div>
            <div class="icon">
                <i class="ion-ios-people "></i>
            </div>
        </div>
    </div>
</div>
