
@extends('ayush.master')


@section('content')


        <div id="page-wrapper">
            <div class="row">
            <div style="margin-top: 20px; margin-bottom: 20px;;margin-left: 20px;">
               <a href="{{ URL('manageCategories') }}"><button type="submit" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a> 
            </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="{{ URL('add_product_data') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Product Name:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
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

