@extends('temp')

@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			
			<!-- END PAGE HEAD -->
		
			<!-- BEGIN PORTLET-->
      <div class="portlet light">
      <div class="portlet-title">
        <div class="caption font-purple-plum">
          <i class="icon-speech font-purple-plum"></i>
          <span class="caption-subject bold uppercase"> تفاصيل المنتج</span>
          
        </div>
        <div class="actions">

        <div class="form-group">
           
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
       

<br>
      <!-- Begin: life time stats -->

					<!-- HERE Details Table
				*
				*
				*
				*
				*
				*
				*
				End -->
				
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase"> صور التفاصيل</span>
								
							</div>
						
						</div>
						<div class="portlet-body">
                        {!! Form::open(['url' => 'gallery/'.$product_id, 'files'=>true]) !!}


                        <div class="form-group">
                        {!! Form::label('detail_image', 'اختر الصور') !!}
                        {{ Form::file('detail_image[]',array('accept'=>'image/*','class'=>'form-control','multiple'=>'multiple')) }}
                        </div>

                        <div class="form-group">
						<div class="clearfix">
								   <button class="btn green btn-block" type="submit" ><i class="fa fa-check"></i>حــــفـــــظ</button>
                               </div>
                        
                        </div>

                        {!! Form::close() !!}
                        </div>

						<div class="card mb-3">
					<div class="card-header">
						 الصور ({{ count($Detail_images) }})
					</div>
					<div class="card-body">
		  
		   		{!! Form::open(['url' => 'destroyGallery']) !!}
						@foreach($Detail_images as $row)
				
								<div class="col-md-2" 
								style="display: inline-block;">
										<img src="{{asset('public/uploads/Detail_images/'.$row->detail_image) }}" width="160" height="160">
										{!! Form::checkbox('deleteImages[]',$row->id,false,['class'=>'form-control']) !!}
								</div>
							@endforeach
								<div style="clear:both"></div>
								<br> <hr>
				     	{!! Form::submit('حذف المحدد', array('class'=>'btn btn-danger')) !!}
		 	    {!! Form::close() !!}
		  
		  
		  
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