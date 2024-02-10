@extends('admin.layouts.common')

@section('content')
      
<title>customers </title>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Project master</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            
              <!-- <a class="btn btn-secondary"  href="{{route('ProjectMaster.create') }}"><b>Create<b></a> -->
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
                        <th><b>S.No</b></th> 
                        <th><b> Project Code</b></th>
                          <th><b>Customer Name</b></th>
                          <th><b>Project Description</b></th>
                          <th><b>Status</b></th>
                          <th><b>Created At</b></th>
                        
                          <th><b>Action</b></th>
                          
                        </tr>
                      </thead>
                      <tbody> 
                      <?php $i = 1; ?>
                      @foreach($projects as $projects)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $projects->project_code }}</td>
                                        <td>{{ $projects->hasCustomer['name'] }}</td>
                                        <td>{{ $projects->project_description }}</td>
                                        <td>{{ $projects->status}}</td>
                                        <td>{{ $projects->created_at }}</td>
                                       
                                        <td>
                                            
                                          <a href="{{route('ProjectMaster.edit',$projects->project_id)}}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <form id="" method="POST" action="/ProjectMaster/{{$projects->project_id}}" accept-charset="UTF-8" style="display:inline">
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
 

  

              @endsection