<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>customers </title>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Customer master</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                      <!-- <a class="btn btn-secondary"  href="{{route('customer.create') }}"><b><b></a> -->
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <th>S.No</th> 
                        <th>Customer Code</th>
                          <th>Customer Name</th>
                          <th>Customer Address</th>
                          <th>Status</th>
                          <th>Created At</th>
                          <!-- <th>Updated_at</th> -->
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                      @foreach($customers as $customers)
                                    <tr>
                                    <td>{{ $i++ }}</td>
                                       
                                        <td>{{ $customers->code }}</td>
                                        <td>{{ $customers->name }}</td>
                                        <td>{{ $customers->address }}</td>
                                        <td>{{ $customers->status}}</td>
                                        <td>{{ $customers->created_at }}</td>
                                        <!-- <td>{{ $customers->updated_at }}</td> -->
                                        <td>
                                            
                                            <a href="{{route('customer.edit',$customers->customer_id)}}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <form id="" method="POST" action="/CustomerMaster/{{ $customers->customer_id }}" accept-charset="UTF-8" style="display:inline">
                                                  @csrf
                                                  @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                 <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                               </button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                      
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
              </body>
</html>
<script>
    function deleteCustomer(customer_id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('customer-edit-action-'+customer_id).submit();
        }
    }
</script>
