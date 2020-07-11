@extends('temp')

@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
				
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
		
      @include('layouts.errors')
      @include('layouts.messages')
			<!-- BEGIN PORTLET-->
      <div class="portlet light">
      <div class="portlet-title">
        <div class="caption font-purple-plum">
          <i class="icon-speech font-purple-plum"></i>
          <span class="caption-subject bold uppercase"> أضافة منتج</span>
          <span class="caption-helper"></span>
        </div>
        <div class="actions">

        <div class="form-group">
           

              
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
      
      <div class="portlet-body">
        
        <div class="portlet box green-haze">
           <div class="portlet-title">
        
            <div class="tools">
          <a href="javascript:;" class="collapse">
          </a>
          
          
          
        </div>
      </div>
      <div class="portlet-body">
      <div class="card-body">
              {!! Form::open(['url' => 'Products', 'files'=>true]) !!}

              <div class="form-group">
                {!! Form::label('name', 'اسم المنتج') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
              </div>
            
              <div class="form-group">
                {!! Form::label('Product_image', 'صورة المنتج') !!}
                {{ Form::file('Product_image',array('accept'=>'image/*','class'=>'form-control')) }}
              </div>

              <br>
              <div class="form-group">
              {!! Form::submit('أضافة', array('class'=>'btn btn-primary')) !!}
              </div>
              
              {!! Form::close() !!}
              
          </div>
      </div>
      </div>
      </div>
    </div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endsection