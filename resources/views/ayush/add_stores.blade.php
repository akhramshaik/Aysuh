
@extends('ayush.master')

@section('content')


        <div id="page-wrapper">

            <div class="row">
            <div style="margin-top: 20px; margin-bottom: 20px;;margin-left: 20px;">
               <a href="{{ URL('manageStores') }}"><button type="submit" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a> 
            </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Store
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
         
            <form method="POST" action="{{ URL('add_store_data') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Store Name:</label>
                                            <input type="text" required name="store_name" class="form-control" placeholder="Enter Store Name">
                                        </div>
                 
                                        <div class="form-group">
                                            <label>Products Selliing</label>
                                            <select name="products_selling" class="form-control">
                                                <option>Select a Product</option>
                                                  @foreach($productsdata as $products)
                                                    <option value="{{ $products->id}}">{{ $products->product_name }}</option>
                                                  @endforeach
                                            </select>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Base Cost:</label>
                                            <input type="number" name="base_cost" class="form-control" placeholder="Enter Base Cost">
                                        </div>
                 
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="location" class="form-control" placeholder="Enter Location">
                                        </div>
                    
                                        <div class="form-group">
                                            <label>Account Status </label>
                                            <select name="account_status" class="form-control">
                                                <option>Select a Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                       

                                        <div class="form-group">
                                            <label>Point of Contact:</label>
                                            <input type="text" name="point_of_contact" class="form-control" placeholder="Enter Contact Name">
                                        </div>


                                        <div class="form-group">
                                            <label>Phone Number:</label>
                                            <input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number">
                                        </div>



                           
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </form>
                                </div>
            
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@endsection
