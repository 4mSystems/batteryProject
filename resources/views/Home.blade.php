@extends('temp')

@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>الصفحة الرئيسية </h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
				
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			@include('layouts.errors')
           @include('layouts.messages')
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="{{ route('Products.index')}}">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp">{{$products->count()}}</h3>
								<small>المنتجات</small>
							</div>
							<div class="icon">
								<i class="icon-basket"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">45% grow</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 
								</div>
								<div class="status-number">
									 45%
								</div>
							</div>
						</div>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<a href="{{ route('user.index')}}">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft">{{$userData->count()}}</h3>
								<small>المستخدمين</small>
							</div>
							<div class="icon">
								<i class="icon-user"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only">56% change</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 
								</div>
								<div class="status-number">
									 57%
								</div>
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>

			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@endsection