@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('progress.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Task Progress Details</h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('progress.update',$progress->id)}}" method="post" >
@csrf 
@method('put')

<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align"> Date<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="date" class='optional' name="date" required='required' /></div>
</div> 

    
   
    
    <div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="developer" class='optional'>
    @foreach($developer as $developers)
            <option value="{{$developers->id }}">{{$developers->developer_name}}</option>
     @endforeach
    </select>
    </div>
    </div>
    
    <div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Description Of task Done <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <textarea class="form-control" name="description_of_task_done" class='optional' type="text"></textarea>
    </div>
    </div>


  <div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Time Spent<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <input class="form-control" name="time_spent" class='optional' type="time ">
    
    </select>
    </div>
    </div>


    <div class="field item form-group">
    <label for="is_completed" class="col-form-label col-md-3 col-sm-3  label-align">Is Completed<span class="">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input id="is_completed" type="checkbox" class="form-control" name="is_complete" class='optional' required="required" value="1"/></div>
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