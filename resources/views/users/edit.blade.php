@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User Update Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('users.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
            <h1>Edit User Details</h1>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

      

        @if ($user)
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
<div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" class='optional' name="name" required='required' value="{{ $user->name }}" />
                            </div>
                        </div>


                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="email" class='optional' name="email" required='required' value="{{ $user->email }}" />
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Roles</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="role" class='optional'>
                                    <option value="">select Role</option>
                                        @if(!empty($roles))
                                           @foreach($roles as $role)
                                             <option value="{{ $role->id ?? '' }}">{{ $role->name ?? '' }}</option>
                                           @endforeach
                                         @endif 
                                </select>
</div>
                        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Submit</button>
                <button type='reset' class="btn btn-success">Reset</button>
            </div>
            </div>
        </div>
    </div>
</form>
@else
    <p>User not found.</p>
@endif
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


