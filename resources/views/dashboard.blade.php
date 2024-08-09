@extends('layouts.app')

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body py-4">

                    <!--begin::Statistics Cards-->
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="card card-custom bg-light-primary card-stretch gutter-b">
                                <div class="card-body">
                                        <span class="svg-icon svg-icon-2x svg-icon-primary d-block my-2">
                                            <!-- SVG Icon for Students -->
                                        </span>
                                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{ $studentsCount }}</div>
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Number of Students</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-custom bg-light-success card-stretch gutter-b">
                                <div class="card-body">
                                        <span class="svg-icon svg-icon-2x svg-icon-success d-block my-2">
                                            <!-- SVG Icon for Schools -->
                                        </span>
                                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{ $schoolsCount }}</div>
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Number of Schools</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-custom bg-light-warning card-stretch gutter-b">
                                <div class="card-body">
                                        <span class="svg-icon svg-icon-2x svg-icon-warning d-block my-2">
                                            <!-- SVG Icon for Teachers -->
                                        </span>
                                    <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{ $teachersCount }}</div>
                                    <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Number of Teachers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Statistics Cards-->

                    <!-- Existing content with charts -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="container1" data-highcharts-chart="1" style="overflow: hidden;" aria-hidden="false">
                                <!-- Highcharts content -->
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="container2" data-highcharts-chart="0" style="overflow: hidden;" aria-hidden="false">
                                <!-- Highcharts content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
<script type="text/javascript">
    // Data retrieved from https://netmarketshare.com/
    // Radialize the colors
    Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: {
                    cx: 0.5,
                    cy: 0.3,
                    r: 0.7
                },
                stops: [
                    [0, color],
                    [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        })
    });

    // Build the chart
    Highcharts.chart('container2', {
        credits: {
            enabled: false
        },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Numbers Schools Based on LGA in Kano',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.0f}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.0f} ',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Share',
            data: [
            @foreach ($lgaschools as $series)
    {
        name: '{{ $series['name'] }}',
        y: {{ $series['y'] }},
    },
    @endforeach
    ]
    }]
    });

</script>
<script type="text/javascript">
    Highcharts.chart('container1', {
        credits: {
            enabled: false
        },
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'Numbers Schools Based on LGA in Kano'
        },
        accessibility: {
            announceNewData: {
                enabled: false
            }
        },
        xAxis: {
            type: 'category',
            title: {
                text: 'LGAs'
            }
        },
        yAxis: {
            title: {
                text: 'Total Number of Schools'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of total<br/>'
        },

        series: [
            {
                name: 'Schools',
                colorByPoint: true,
                data: [
                @foreach ($lgaschools as $series)
    {
        name: '{{ $series['name'] }}',
        y: {{ $series['y'] }},
    },
    @endforeach

    ]
    }
    ],
    });

</script>
@endsection
