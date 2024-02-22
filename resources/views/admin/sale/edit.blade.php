@extends('layouts.app')
@push('header_script')
<link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
@endpush
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
                                    <a class="btn btn-primary" href="{{route('employee/create')}}">Back</a>
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
    
                            <h4 class="card-title">Basic Information</h4>
                            <form method="POST" action="{{route('employee/update',$edit->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <div class="mb-4">
                                            <label for="manufacturername">Employee Name<span
                                                    class="text-danger">*</span></label>
                                            <input id="name" name="name" value="{{$edit->name}}" type="text" class="form-control"
                                                placeholder="Employee Name">
                                            <span class="text-danger">{{$errors->first('name')}}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="manufacturerbrand">Mobile Number<span
                                                    class="text-danger">*</span></label>
                                            <input name="mobile_no" value="{{$edit->mobile_no}}" type="text" class="form-control"
                                                placeholder="Mobile Number">
                                            <span class="text-danger">{{$errors->first('mobile_no')}}</span>
    
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="Pancard">Pancard Number<span class="text-danger">*</span></label>
                                            <input id="Pancard" name="pancard_no" value="{{$edit->pancard_no}}" type="text" class="form-control"
                                                placeholder="pancard Number">
                                            <span class="text-danger">{{$errors->first('pancard_no')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <div class="form-group mb-4">
                                                <label>Join Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="{{$edit->join_date}}" name="join_date" data-provide="datepicker" data-date-format="dd M, yyyy" data-date-autoclose="true">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div><!-- input-group -->
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="productdesc">Adderss<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="productdesc" name="address"
                                                    rows="1">{{$edit->address}}</textarea>
                                                <span class="text-danger">{{$errors->first('address')}}</span>
    
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Department<span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control select2" name="department_id">
                                                    <option value="">Select</option>
                                                    @foreach ($departments as $department )
                                                    <option value="{{$department->id}}" {{( $department->id == $edit->department_id) ? 'selected' : '' }}> {{$department->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{$errors->first('department_id')}}</span>
    
                                            </div>
                                          
                                        </div>
                                    </div>
    
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                            Detail</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Nazox.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#"
                                    target="_blank">HelloDeveloper</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        @endsection

        @push('footer_script')
           <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
            
        @endpush