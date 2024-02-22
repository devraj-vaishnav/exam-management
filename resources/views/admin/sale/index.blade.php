@extends('layouts.app')
@section('main-content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Starter page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li>
                                    <a class="btn btn-primary" href="{{route('sale/create')}}">Create</a>
                                </li>
                               
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
    
                            <table id="datatable" class="table table-bordered dt-responsive  mt-3 nowrap w-100">
                                <thead>
                                <tr>
                                    <th>SR No.</th>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Sale</th>
                                    <th>Date</th>
                                    <th>Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($sale as $sale )
                                <tr>
                                    <td></td>
                                    <td>{{$employee->name}}</td>
                                  
                                    <td>{{$sale->id}}</td>
                                     --}}
                                    {{-- <td>
                                        <a href="{{route('employee/edit', ['id' => $employee['id']])}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('employee/delete', ['id' => $employee['id']])}}" class="btn btn-danger">Delete</a>
                                    </td> --}}
                                </tr>
                                    {{-- @endforeach --}}
                                    
                                </tbody>
                            </table>
    
                        </div>
                    </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Nazox.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank">HelloDeveloper</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection