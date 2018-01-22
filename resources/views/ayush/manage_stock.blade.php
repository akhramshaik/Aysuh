
@extends('ayush.master')

@section('content')


        <div id="page-wrapper">
            
            <div style="margin-top: 20px; float: right; margin-bottom: 20px;">
               <a href="{{ URL('addStock') }}"><button type="submit" class="btn btn-success"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Add Stock</button></a> 
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                

<table class="table table-striped products-table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Product Name</th>
        <th>Action</th>
      </tr>
    </thead>

  </table>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<script type="text/javascript">

  $('.products-table').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: false,
        pageLength: 10,
        ajax: "{{ URL('get_products') }}",
        columns: [
            {data: 'sno', name: 'sno', orderable: false, searchable: false},
            {data: 'product_name', name: 'product_name'},
            {data: 'edit', name: 'edit', orderable: false, searchable: false}

        ]
    });

</script>


@endsection
