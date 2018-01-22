
@extends('ayush.master')


@section('content')


        <div id="page-wrapper">
            <div class="row">
            <div style="margin-top: 20px; margin-bottom: 20px;;margin-left: 20px;">
               <a href="{{ URL('manageContact') }}"><button type="submit" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a> 
            </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Contact
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="{{ URL('add_product_data') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Contact Name:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Contact Name">
                                        </div>
                           

                                        <div class="form-group">
                                            <label>Company:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Company Name">
                                        </div>



                                        <div class="form-group">
                                            <label>Designation:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Designation">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Phone Number">
                                        </div>


         

                                                                                <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Email">
                                        </div>

                                                                       <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Address">
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

