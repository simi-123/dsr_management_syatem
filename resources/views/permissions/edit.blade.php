@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Create Permissions</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('permissions.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Permissions</h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('permissions.store')}}" method="post" >
@csrf 
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">User id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="user_id" class='optional' >
    
    
  </select>
    </div>
</div>

    
    <div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Module id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="module_id" class='optional'>
    
    </select>
    </div>
    </div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Sub Module Id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" name="submodule_id" data-validate-length-range="6" data-validate-words="2" type="text"  placeholder="" required="required" />
    </div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Insert<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="insert" data-validate-length-range="" type="text" placeholder=""/></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Update<span class="">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" name="update" class='optional' required="required" type="text" placeholder=""/></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Delete<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="decimal" class='optional' name="delete" data-validate-linked='email' required='required' placeholder="" /></div>
</div>       


<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">View<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" class='optional' name="view" data-validate-linked='email' required='required' /></div>
</div>   
    
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Created by<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text"  class='optional' name="Created_by" data-validate-linked='email' required='required' /></div>
</div>   
      
                             
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Submit</button>
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


  