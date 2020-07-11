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
          
        </div>
        <div class="actions">

        <div class="form-group">
           
              
          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
          </a>
          </div>
        
        </div>
      </div>
      <div class="portlet-body">
        
      <table class="table table-striped table-hover" id="sample_5">
      <thead>
      <tr role="row" class="heading">
          
          <th >
               اسم المنتج
          </th>
          <th >
              صورة المنتج
          </th>

          <th >
              يوم الانشاء
          </th>

          <th>
              العمليات
          </th>
      </tr>
          </thead>
        		<tbody>
                    @foreach($products as $row)
                    <tr role="row" class="filter">
                        
                        <td>
                            {{$row->name}}
                        </td>
        
                        <td><img width="100px" height="80px" src="{{ asset('public/uploads/Product_images/'.$row->Product_image) }}"></td>
                        <td>{{ $row->created_at->format('Y-d-m') }}</td>

                            <td class="center">
                    <div class="clearfix">
                    <a href="{{ URL::to('product/'.$row->id.'/details') }}" class="btn btn-icon-only btn-circle yellow">
                               التفاصيل
                        </a>
                        <a href="{{ URL::to('product/'.$row->id.'/edit') }}" class="btn btn-icon-only btn-circle yellow">
                                <span class="glyphicon glyphicon-pencil">
                                </span>
                        </a>

                        <a  class="btn btn-icon-only btn-circle red" href="{{ URL::to('product/'.$row->id.'/delete') }}" >
                
                                    <span class="fa fa-times">
                                </span>
                        </a>
                    </div>

                </td>

                    </tr>
                    @endforeach
                
            
    
                </tbody>
  </table>



        
      </div>
    </div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endsection