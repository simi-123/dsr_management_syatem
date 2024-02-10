
@extends('admin.layouts.common')

@section('content')
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Roles</title>


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
                    
                      <a class="btn btn-secondary"  href="{{route('roles.create')}}"><b>Manage your Roles<b></a>
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
                        <th><b>Name</b></th>
                       <th><b>Status</b></th>
                       <th><b>Action</b></th>
                        </tr>
                      </thead>
                      <tbody>


                      @foreach($role as $roles)
                    <tr>
                        <td>{{ $roles->id}}</td>
                        <td>{{ $roles->name}}</td>
                        <td>{{ $roles->status}}</td>
                     


                        <td>
                        <a href="{{route('roles.edit',$roles->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            
                                            <form id="" method="POST" action="/Roles/{{ $roles->id }}" accept-charset="UTF-8" style="display:inline">
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

