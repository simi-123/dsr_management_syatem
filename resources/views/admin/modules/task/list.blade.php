

    <title>Task </title>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Task master</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                      <!-- <a class="btn btn-secondary"  href="{{route('task.create') }}"><b>Create<b></a> -->
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
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
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
                        <th>Customer Name</th>
                        <th>Project Code</th>
                          <th>Module Name</th>
                          <th>Task Desc</th>
                          <th>Task detailed understanding</th>
                          <th>Assigned to</th>
                          <th>Expected time to complete</th>
                          <th>Expected start date</th>
                          <th>Expected completion date</th>
                          <th>Any previous task refference</th>
                          <th>Actual start date</th>
                          <th>Actual completion date</th>
                          <th>Actual time taken</th>
                          <th>Resaon for delay</th>
                          <th>Created At</th>
                         
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                      @foreach($tasks as $tasks)

                      
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>@if ($tasks && isset($tasks->hasCustomer) && isset($tasks->hasCustomer['name']))
                                                {{ $tasks->hasCustomer['name'] }}
                                            @endif
                                        </td>
                                        <td>@if ($tasks && isset($tasks->hasProject) && isset($tasks->hasProject['project_code']))
                                              {{ $tasks->hasProject['project_code'] }}
                                          @endif
                                        </td>
                                        <td>@if ($tasks && isset($tasks->hasmodule) && isset($tasks->hasmodule['module_name']))
                                                {{ $tasks->hasmodule['module_name'] }}
                                            @endif
                                          </td>
                                        <td>{{ $tasks->task_desc }}</td>
                                        <td>{{ $tasks->task_detailed_understanding}}</td>
                                        <td>{{ $tasks->assigned_to}}</td>
                                        <td>{{ $tasks->expected_time_to_complete }}</td>
                                        <td>{{ $tasks->	expected_start_date }}</td>
                                        <td>{{ $tasks->expected_completion_date }}</td>
                                        <td>{{ $tasks->any_previous_task_refference}}</td>
                                        <td>{{ $tasks->actual_start_date }}</td>
                                        <td>{{ $tasks->actual_completion_date }}</td>
                                        <td>{{ $tasks->actual_time_taken}}</td>
                                        <td>{{ $tasks->resaon_for_delay }}</td>
                                        <td>{{ $tasks->created_at }}</td>
                                        
                                        <td>
                                            
                                            <a href="{{route('task.edit',$tasks->id)}}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <form id="" method="POST" action="/TaskMaster/{{ $tasks->id }}" accept-charset="UTF-8" style="display:inline">
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
