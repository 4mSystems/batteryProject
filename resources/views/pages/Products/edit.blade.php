@extends('temp')


@section('styles')
<link rel="stylesheet" href="{{ asset('public/admin/layout4/css/bootstrap-fileupload.min.css') }}">
@endsection

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
          <span class="caption-subject bold uppercase"> التعديل على المنتج</span>
        </div>
        <div class="actions">

        <div class="form-group">
           
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
      <div class="portlet-body">
        
      <div class="card mb-3">
          
          <div class="card-body">
              
              {!! Form::model($data, ['route' => ['Products.update',$data->id] , 'method'=>'put' ,'files'=> true]) !!}
              <br>
               <div class="row">
                          <div class="col-md-12">
                            <h3> بيانات المنتج</h3>
                            <hr>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">
                               اسم المنتج
                              </label>
                             {!! Form::text('name',$data->name,['class'=>'form-control']) !!}
                            </div>
                  
                          </div>

                          <div class="col-md-6">
                        
                    <div class="form-group">
                      <label>
                       صورة المنتج
                      </label>
                     
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail"><img  width="150px" height="110px" src="{{ asset('public/uploads/Product_images/'.$data->Product_image) }}" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                        <div class="user-edit-image-buttons">
                          <span class="btn btn-azure btn-file">
                            <span class="fileupload-new " ><i class="fa fa-picture "></i> Change image</span>

                            {{ Form::file('Product_image',array('accept'=>'image/*','class'=>'form-control')) }}
                          <span class="fileupload-exists "><i class="fa fa-picture"></i> Change</span>
                            <input type="file">
                          </span>
                          <a href="#" class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Cancel
                          </a>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>

        
              <div class="form-group">
              {!! Form::submit('حفظ', array('class'=>'btn btn-primary')) !!}
              </div>
              
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


@section('scripts')
<script src="{{ asset('public/js/jquery.pulsate.min.js') }}"></script>
<script src="{{ asset('public/js/pages-user-profile.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>
@endsection

@section('scriptDocument')
 PagesUserProfile.init();
 Main.init();
@endsection