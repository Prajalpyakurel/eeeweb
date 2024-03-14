@extends('backend.dashboard')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
            <a href="{{route('admin.createemployee')}}" type="btn" class="btn btn-primary">Add Employee</a>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Table</h6>
                        <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                        <div class="table-responsive">
                            <table id="dataTableExample myTable" class="table" class="display">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td></td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->designation }}</td>
                                        {{-- <td>{{ $employee->about }}</td> --}}
                                        <td><img src="{{ asset('images/' . $employee->image) }}" alt="Employee Image"></td>
                                        <td><a class="btn btn-primary" href="">Edit data</a></td>
                                        <td><a class="btn btn-danger" href="">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
