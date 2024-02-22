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
                                    <a class="btn btn-primary" href="{{route('sale/index')}}">back</a>
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
                            <form method="post" action="{{route('sale/store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <div class="mb-3">
                                            <label for="manufacturerbrand">Customer Name<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Customer Name.....">
                                            <span class="text-danger">{{$errors->first('name')}}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Pancard">Moblie Number<span class="text-danger">*</span></label>
                                            <input id="" name="mobile_no" type="number" class="form-control"
                                                placeholder="Mobile Number">
                                            <span class="text-danger">{{$errors->first('moblie_no')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <div class="form-group ">
                                                <label> Date</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="date"
                                                        data-provide="datepicker" data-date-format="dd M, yyyy"
                                                        data-date-autoclose="true">
                                                <span class="text-danger">{{$errors->first('date')}}</span>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i
                                                                class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div><!-- input-group -->
                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Adderss<span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" id="productdesc" name="address"
                                                    rows="1"></textarea>
                                                <span class="text-danger">{{$errors->first('address')}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table">
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <select name="product_id[]" class="form-control" id="product">
                                                    <option value="">Select Product</option>
                                                    @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="sale[]" id="sale"
                                                    placeholder="Sale...."></td>
                                            <td>

                                                <button class="btn btn-primary ms-5" type="button" id="button"><i
                                                        class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                        <tbody id="addInput">

                                        </tbody>
                                    </table>
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
                            </script>
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
        <script>
            $(document).ready(function () {
        $("#button").on('click', function () {
            let rowData = "<tr>";
            rowData += "<td>2</td>";
                
            rowData += "<td> <select name='product_id[]' class='form-control' > <option value=''>Select Product</option>  @foreach ($products as $product)  <option value='{{$product->id}}'>{{$product->name}}</option> @endforeach </select></td>";
            rowData += "<td><input type='number'  name='sale[]'  placeholder='Sale....' class='form-control' ></td>";
            rowData += "</tr>"
            $("#addInput").append(rowData);
        });
    });
        </script>
        <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        @endpush