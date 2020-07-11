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
          <span class="caption-subject bold uppercase"> المنتجات</span>
          <span class="caption-helper">هنا تستطيع التحكم فالمخزون</span>
        </div>
        <div class="actions">

        <div class="form-group">
           

              
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
      <div class="portlet-body">
        
        
      </div>
    </div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endsection