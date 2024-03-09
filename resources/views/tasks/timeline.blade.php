@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')

    {{-- <!-- CSS for full calender -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script> --}}

@endsection

@section('breadcrumb-title')
    <h3>Default</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header"> Calendar For Tasks </div>
                <div class="card-body pt-0">
                    <div id="calendar"></div>
                </div>
            </div>

        </div>
        {{-- <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header"> Timeline </div>
                <div class="card-body pt-0">
                    <div id="chart-timeline"></div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function() {
            display_events();
        });

        function display_events() {
            let events = [];
            $.ajax({
                url: "/api/calendar",
                dataType: 'json',
                success: function(response) {

                    var result = response.data;
                    $.each(result, function(i, item) {
                        events.push({
                            event_id: result[i].id,
                            title: result[i].projectTask,
                            start: result[i].deadline,
                            color: result[i].color,
                            url: result[i].priority
                        });
                    })

                    var calendar = $('#calendar').fullCalendar({
                        defaultView: 'month',
                        timeZone: 'local',
                        editable: true,
                        selectable: true,
                        selectHelper: true,
                        select: function(start, end) {
                            alert(start);
                            alert(end);
                            $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
                            $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
                            $('#event_entry_modal').modal('show');
                        },
                        events: events,
                        eventRender: function(event, element, view) {
                            element.bind('click', function() {
                                alert(event.event_id);
                            });
                        }
                    });
                },
                error: function(xhr, status) {
                    alert(response.msg);
                }
            });
        }

        var options = {
          series: [
          {
            data: [
              {
                x: 'Code',
                y: [
                  new Date('2019-03-02').getTime(),
                  new Date('2019-03-04').getTime()
                ]
              },
              {
                x: 'Test',
                y: [
                  new Date('2019-03-04').getTime(),
                  new Date('2019-03-08').getTime()
                ]
              },
              {
                x: 'Validation',
                y: [
                  new Date('2019-03-08').getTime(),
                  new Date('2019-03-12').getTime()
                ]
              },
              {
                x: 'Deployment',
                y: [
                  new Date('2019-03-12').getTime(),
                  new Date('2019-03-18').getTime()
                ]
              }
            ]
          }
        ],
          chart: {
          height: 350,
          type: 'rangeBar'
        },
        plotOptions: {
          bar: {
            horizontal: true
          }
        },
        xaxis: {
          type: 'datetime'
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-timeline"), options);
        chart.render();

    </script>

@endsection
