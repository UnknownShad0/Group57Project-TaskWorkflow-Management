@extends('layouts.master')
<title>Dashboard</title>

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Dashboard </h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
    <div class="container-fluid mb-0">
        <div class="row widget-grid">
            <div class="col-md-12 box-col-6">
                <div class="card profile-box">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <div class="greeting-user">
                                    <h4 class="f-w-600">Welcome! {{ ucwords(Auth::user()->name) }}</h4>
                                    <div class="whatsnew-btn"><a class="btn btn-outline-white" data-bs-original-title=""
                                            title="">Whats New !</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="clockbox">
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                            <path class="hour-marks"
                                                d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                                            </path>
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                                        </g>
                                        <g id="hour" style="transform: rotate(538.075deg);">
                                            <path class="hour-hand" d="M300.5 298V142"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="minute" style="transform: rotate(338.4deg);">
                                            <path class="minute-hand" d="M300.5 298V67"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="second" style="transform: rotate(504deg);">
                                            <path class="second-hand" d="M300.5 350V55"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"> </circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="cartoon"><img class="img-fluid"
                                src="{{ asset('/assets/images/dashboard/cartoon.svg') }}" alt="vector women with leptop">
                        </div>
                    </div>
                </div>
            </div>


            {{-- <a href="{{ route('dashboard.editProj', ['db' => $db]) }}">update</a> --}}
            <div class="">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-content">

                                    <div>
                                        <h4>Ongoing Project</h4>
                                        <span class="f-light fs-4">{{ $ongoing_project }} </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-content">

                                    <div>
                                        <h4>Completed Tasks</h4><span class="f-light fs-4">{{ $completed_tasks }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-content">

                                    <div>
                                        <h4>Incomplete Tasks</h4><span class="f-light fs-4">{{ $incomplete_tasks }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div>
                                        <h4>No. of Tasks</h4><span class="f-light fs-4">{{ $total_tasks }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-xxl-12 col-ed-3 col-xl-4 col-sm-6 box-col-5">
            <div class="card get-card">
                <div class="card-header card-no-border">
                    <h5>Projects</h5><span class="f-14 f-w-500 f-light"></span>
                </div>
                <div class="card-body pt-0">
                    <div id="chart"></div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Project Title</th>
                                <th scope="col">Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects_progress as $project)
                                <tr>
                                    <td>{{ $project['project_title'] }}</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ $project['progress']}}%" aria-valuenow="{{ $project['progress']}}" aria-valuemin="0" aria-valuemax="100">
                                                {{ $project['progress'] }} %
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="col-sm-2">
            @if (session()->has('workersuccess'))
                <div class="alert alert-info"> {{ session('workersuccess') }}</div>
            @endif
        </div>
        <div class="card">
            <div class="card-header">
                <h2 style="font-size: 20px">Workers</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="150">ID</th>
                            <th colspan="200">Name</th>
                            <th colspan="200">Email</th>
                            <th colspan="350">Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workers as $worker)
                            <tr>
                                <td colspan="150">{{ $worker->id }}</td>
                                <td colspan="200">{{ $worker->name }}</td>
                                <td colspan="200">{{ $worker->email }}</td>
                                <td colspan="350">{{ $worker->position }}</td>
                                <td>
                                    <a href="{{ route('dashboard.editWorker', ['worker' => $worker->id]) }}"
                                        class="btn btn-primary  d-inline">Edit</a>
                                    <form action="{{ route('dashboard.destroyWorker', ['worker' => $worker->id]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger " value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="mt-3">
                    <a href="{{ route('dashboard.createWorker') }}">Add a Worker </a>
                </div>
            </div>
        </div>
    </div>


@endsection
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@section('script')

    <script>
        var options = {
            series: @json($project_progress) ,
            chart: {
                height: 390,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    offsetY: 0,
                    startAngle: 0,
                    endAngle: 270,
                    hollow: {
                        margin: 5,
                        size: '30%',
                        background: 'transparent',
                        image: undefined,
                    },
                    dataLabels: {
                        name: {
                            show: false,
                        },
                        value: {
                            show: false,
                        }
                    }
                }
            },
            colors: ['#1ab7ea','#0084ff',"#506485","#953da1","#bbc272","##c7ae75"],
            labels: @json($project_title),
            legend: {
                show: true,
                floating: true,
                fontSize: '16px',
                position: 'left',
                offsetX: 160,
                offsetY: 15,
                labels: {
                    useSeriesColors: true,
                },
                markers: {
                    size: 0
                },
                formatter: function(seriesName, opts) {
                    return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex] + " %"
                },
                itemMargin: {
                    vertical: 3
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
