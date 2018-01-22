
@extends('ayush.master')

@section('content')






        <div id="page-wrapper">
            

             @if(Session::has('chk_msg'))
             <p style="margin-top:10px" class="alert {{ Session::get('alert-class') }}">{{ Session::get('chk_msg') }}</p>
             @endif
         
            <div style="margin-top: 20px; float: right; margin-bottom: 20px;">
               <a href="{{ URL('addStore') }}"><button type="submit" class="btn btn-success"> <i class="fa fa-server" aria-hidden="true"></i> Add New Store</button></a> 
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                

                    <table class="table table-striped stores-table">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Store Name</th>
                            <th>Store Location</th>
                            <th>Contact Person</th>
                            <th>Contact</th>
                            <th>Store Status</th>
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

  $('.stores-table').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: false,
        pageLength: 10,
        ajax: "{{ URL('get_stores') }}",
        columns: [
            {data: 'sno', name: 'sno', orderable: false, searchable: false},
            {data: 'store_name', name: 'store_name'},
            {data: 'location', name: 'location'},
            {data: 'point_of_contact', name: 'point_of_contact'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'account_status', name: 'account_status'},
            {data: 'edit', name: 'edit', orderable: false, searchable: false}
            // {data: 'delete', name: 'delete', orderable: false, searchable: false}
        ]
    });

</script>


@endsection
