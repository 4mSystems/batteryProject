
				<div class="portlet light">
				<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift font-green-sharp"></i>
					<span class="caption-subject font-green-sharp bold uppercase"> التفاصيل</span>
					
				</div>
			
			</div>
			<div class="portlet-body">
				<div class="table-container">
				{!! Form::open(['url' => 'storeDetail/'.$product_id, 'files'=>true]) !!}
  <table class="table table-striped table-bordered table-hover" id="datatable_products">
					<thead>
					<tr role="row" class="heading">
						
						<th width="15%">
							 النوع (Type) 
						</th>
						<th width="10%">
							  الطول(L)
						</th>
						<th width="10%">
							 العرض (W)
						</th>
						<th width="15%">
							الارتفاع (H)
						</th>
						<th width="10%">
							خيارات الغطاء (Lid Options)
						</th>

					</tr>
					<tr role="row" class="filter">
						
						<td>
							<input type="text" class="form-control form-filter input-sm" name="type">
						</td>
		
						<td>
							<input type="text" class="form-control form-filter input-sm" name="L">
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="W">
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="H">
						</td>
						<td>
							<input type="text" class="form-control form-filter input-sm" name="lid_options">
							
						</td>
						
					</tr>
					</thead>
					<tbody>
					</tbody>
					</table>
					<div class="clearfix">
					   <button class="btn green btn-block" type="submit" ><i class="fa fa-check"></i>أضافة</button>
				   </div>

				   {!! Form::close() !!}
<br>

					<table class="table table-striped table-bordered table-hover" id="sample_1">
					<thead>
					<tr role="row" class="heading">
						
						<th width="15%">
							النوع
						</th>
						<th width="10%">
							 الطول
						</th>
						<th width="15%">
							العرض
						</th>
						<th width="10%">
							 الارتفاع
						</th>
						<th width="10%">
						خيارات الغطاء
						</th>
					</tr>
					
					 @foreach($details as $row)
					<tr role="row" class="filter">
						
						<td>
							{{ $row->type }}
						</td>
						<td>
						   {{ $row->L }}
						</td>
						<td>
							{{ $row->W }}
						</td>
						<td>
							{{ $row->H }}
						</td>
						<td>
							{{ $row->lid_options }}
						</td>
					</tr>
					@endforeach
					</thead>
					<tbody>
					</tbody>
					</table>
				</div>

			  
			</div>
		</div>
		<hr>