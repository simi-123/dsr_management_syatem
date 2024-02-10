
@extends('admin.layouts.common')

@section('content')
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Permission</title>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Permissions</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                      <a class="btn btn-secondary"  href="{{route('permissions.create')}}"><b>Create<b></a>
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
                        <th><b>ID</b></th>
                        <th><b>user ID</b></th>
                        <th><b>Module ID</b></th>
                        <th><b>Submodule Id</b></th>
                        <th><b>Insert</b></th>
                        <th><b>Update</b></th>
                        <th><b>Delete</b></th>
                        <th><b>view</b></th>
                        <th><b>Created By</b></th>
                        <th><b>Created At</b></th>
                        <th><b>Updated At</b></th>
                        <th><b>Action</b></th>
                        </tr>
                      </thead>
                      <tbody>


                      @foreach($Permission as $permission)
                    <tr>
                        <td>{{ $permission->id}}</td>
                        <td>{{ $permission->user_id}}</td>
                        <td>{{ $permission->module_id}}</td>
                        <td>{{ $permission->submodule_id}}</td>
                        <td>{{ $permission->insert}}</td>
                        <td>{{ $permission->update}}</td>
                        <td>{{ $permission->delete}}</td>
                        <td>{{ $permission->view}}</td>
                        <td>{{ $permission->created_by}}</td>
                        <td>{{ $permission->created_at}}</td>
                        <td>{{ $permission->updated_at}}</td>


                        <td>
                        <a href="{{route('permissions.edit',$permission->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form id="" method="POST" action="/permission/{{ $permission->id }}" accept-charset="UTF-8" style="display:inline">
                                                  @csrf
                                                  @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                 <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                               </button>

                                            </form>
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
@endsection
