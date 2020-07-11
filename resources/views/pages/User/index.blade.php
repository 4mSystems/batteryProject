@extends('temp')

@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			
			<!-- END PAGE HEAD -->
			@include('layouts.errors')
           @include('layouts.messages')
			<!-- BEGIN PORTLET-->
      <div class="portlet light">
      <div class="portlet-title">
        <div class="caption font-purple-plum">
          <i class="icon-speech font-purple-plum"></i>
          <span class="caption-subject bold uppercase"> المستخدم</span>
        </div>
        <div class="actions">

        <div class="form-group">
           
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
      <div class="portlet-body">
        
      <div class="panel-body">

      <form role="form" class="form-horizontal" method="GET" action="{{ URL::to('updateUser') }}">
         @csrf

                   <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                الاسم
                                            </label>
                                         
                                             <div class="col-md-6">
                                                 <span class="input-icon">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $data->name }}" required autofocus> </span>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                   </div>
                   <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                الايميل
                                            </label>
                                            
                                             <div class="col-md-6">
                                                 <span class="input-icon">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email }}" required> </span>

                           @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                   </div>

                   <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                               الرقم السرى
                                            </label>
                                           
                                             <div class="col-md-6">
                                                 <span class="input-icon">
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value ="{{ $data->password }}" required>  </span>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                   </div>
                  

                   
                        <div class="clearfix">
					   <button class="btn green btn-block" type="submit" ><i class="fa fa-check"></i>تعديل</button>
				   </div>
                                    </form>
                                </div>

        
        
      </div>
    </div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endsection