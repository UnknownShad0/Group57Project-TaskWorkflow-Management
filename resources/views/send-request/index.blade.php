@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Default</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')

<style>
    .break-text {
        max-width: 300px;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    /* Apply vertical alignment to all columns */
    td {
        vertical-align: top;
    }
</style>


    <div class="col-md-12">

        @if (Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header " style="display: flex; justify-content:space-between;">
                <h4>Send Request List</h4>
                <a href="{{ route('send-request.create') }}" class="btn btn-primary">Add + </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Project Name</th>
                            <th scope="col">asset_inventory</th>
                            <th scope="col">supplier_vendor</th>
                            <th scope="col">subcontractor</th>
                            <th scope="col">budgeting_financial</th>
                            <th scope="col">facility_management </th>
                            <th scope="col">legal_contract</th>
                            <th scope="col">risk</th>
                            <th scope="col">communication_collab</th>
                            <th scope="col">meetings_calendar</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th style="vertical-align: top"> <br> {{ $project->projectTitle }}</th>
                                <td class="break-text">{{ $project->asset_inventory ?? 'Pending'  }}</td>
                                <td class="break-text" id="jsonContainer">{{ $project->supplier_vendor ?? 'Pending' }}</td>
                                <td class="break-text">{{ $project->subcontractor ?? 'Pending' }}</td>
                                <td class="break-text">{{ $project->budgeting_financial ?? 'Pending' }} </td>
                                <td class="break-text">{{ $project->facility_management ?? 'Pending' }} </td>
                                <td class="break-text">{{ $project->legal_contract ?? 'Pending' }} </td>
                                <td class="break-text">{{ $project->risk ?? 'Pending' }} </td>
                                <td class="break-text">{{ $project->communication_collab ?? 'Pending' }} </td>
                                <td class="break-text">{{ $project->meetings_calendar ?? 'Pending' }} </td>
                                <td>
                                    @if ($project->asset_inventory
                                    && $project->supplier_vendor
                                    && $project->subcontractor
                                    && $project->budgeting_financial
                                    && $project->facility_management
                                    && $project->legal_contract
                                    && $project->risk
                                    && $project->communication_collab
                                    && $project->meetings_calendar
                                    )
                                        <a href="{{ route('taskAdmin.create', $project->project_id) }}" class="btn btn-success btn-xs">Add task to this Project</a>
                                    @else
                                        <a href="{{ route('send-request.show', $project->project_id) }}" class="btn btn-primary btn-xs">View</a>
                                        <form action="{{ route("send-request.destroy", $project->id ) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger btn-xs">Remove</button>
                                        </form>

                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var elements = document.querySelectorAll('.break-text');
            elements.forEach(function (element) {
                element.innerHTML = addLineBreaks(element.innerHTML);
            });
        });

        function addLineBreaks(text) {
            // Add a space and a line break after each numbering pattern
            return text.replace(/(\d+\.\s)/g, '<br>$1 ');
        }
    </script>


@endsection

@section('script')
@endsection
