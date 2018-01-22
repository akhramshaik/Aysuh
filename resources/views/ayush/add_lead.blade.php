
@extends('ayush.master')


@section('content')

<style type="text/css">
    .display_item{
        display: none;
    }

    .hide_item{
        display: none;
    }
</style>

        <div id="page-wrapper">
            <div class="row">
            <div style="margin-top: 20px; margin-bottom: 20px;;margin-left: 20px;">
               <a href="{{ URL('manageLead') }}"><button type="submit" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a> 
            </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Lead
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="{{ URL('add_product_data') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Lead Name:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                                        </div>
                           
                                        <div class="form-group">
                                            <label>Lead Status:</label>
                                         
                                            <select class="form-control lead_status" id="">
                                            <option value="new">New</option>
                                            <option value="attempting_to_call">Attempting to call </option>
                                            <option value="interested">Interested</option>
                                            <option value="nurture">Nurture</option>
                                            <option value="unresponsive">Unresponsive</option>
                                            <option value="not_valid">Not valid</option>
                                            <option value="converted">Converted</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>First Contact Date:</label>
              <div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
                                        </div>



<div class="form-group hide_item lead_item">
<label>Lead Converted Date:</label>

<div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
<input type="text" class="form-control">
<div class="input-group-addon">
<span class="glyphicon glyphicon-th"></span>
</div>
</div>
</div>


                                    <div class="form-group">
                                            <label>Primary Contact:</label>
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                                        </div>


<div class="form-group">
<label>Next Followup Date:</label>

<div class="input-group date" data-provide="datepicker" data-date-format="dd-mm-yyyy">
<input type="text" class="form-control">
<div class="input-group-addon">
<span class="glyphicon glyphicon-th"></span>
</div>
</div>
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
<script type="text/javascript">
    
    $(document).ready(function(){
   
    $('.datepicker').datepicker();


 $(".lead_status").change(function(){
        if($(this).val() =='converted'){
 $(".lead_item").removeClass("hide_item");
        } else{

 $(".lead_item").addClass("hide_item");


        }
    });


   
});
</script>


@endsection

