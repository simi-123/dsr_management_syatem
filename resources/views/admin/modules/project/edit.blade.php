@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Project Edit form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('ProjectMaster.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>project Details </h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('ProjectMaster.update',$project->project_id)}}" method="post" >
@csrf 
@method('put')
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">project Code<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="project_code" placeholder="{{old('project_code', $project->project_code)}}"required="required" />
    </div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Customer Id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="customer_id" class='optional' >
    @foreach($customer as $customers)
            <option value="{{$customers->customer_id }}">{{$customers->name }}</option>
    @endforeach
    </select>
</div>
</div>

<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Project Description<span class="">*</span></label>
    <div class="col-md-6 col-sm-6">
        <textarea rows="4" cols="50" class="form-control" name="project_description" class='optional' required="required" type="text box" placeholder="{{old('project_description', $project->project_description)}}"></textarea></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="status" class='optional'>
    <option value="">select status</option>
<option value="1">Active</option>
<option value="0">In-Active</option>
</select>   
</div>      
</div>   
                             
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Update</button>
                <button type='reset' class="btn btn-success">Reset</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
      
</div>

</div>



  

</body>

</html>
@endsection