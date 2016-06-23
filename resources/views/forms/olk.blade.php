<section id="olk">
	<div class="panel">
		<div class="panel-heading">
			<div class="panel-title">OLK病变信息
				<span class="pull-right"><button class="btn btn-primary" data-toggle="modal" data-target="#olkModal"><i class="fa fa-news"></i>添加OLK病变信息</button></span>
			</div>
			
		</div>
		<div class="panel-body">
			<table class="table">
				@if(!count($clinical))
				<thead>
					<tr>
						<th>部位</th>
						<th>是否癌变</th>
						<th>编辑</th>
						<th>删除</th>
					</tr>
				</thead>
				@else
				没有OLK病变信息
				@endif
				<tbody>
					@foreach($patient->olks as $olk)
					<tr>
						<td>{{ $olk->site }}</td>
						<td>{{ $olk->cancer }}</td>
						<td>
							<a href="#">
								<span class="fa fa-edit"></span>
							</a>
						</td>
						<td>
							<a href="#">
								<span class="fa fa-remove"></span>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="modal" id="olkModal" tabindex="-1" role="dialog" aria-labelledby="olkModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="olkModalLabel">填写OLK信息，并上传病理图片</h4>
				</div>
				<div class="modal-body">
					<div class="modal-container">
						{!! Form::open([
						'method' => 'post',
						'route' => ['olks.store']
						]) !!}
						<input name="times" value="{{ $times }}"  type="hidden">
    <input name="patient_id" value="{{ $id }}"  type="hidden">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									{!! Form::label('部位') !!}
									{!! Form::text('site', null, ['class' => 'form-control', 'required' => '']) !!}
									<span class="help-block m-b-none"><i class="fa fa-info-circle"></i>请详细填写具体部位</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									{!! Form::label('分型') !!}
									{!! Form::select('type', [
									'' => '',
									'A' => '板块状',
									'B' => '皱纸状',
									'C' => '颗粒状',
									'D' => '疣状',
									'E' => '溃疡状'
									], null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('长') !!}
									{!! Form::input('number', 'site_long', null, ['class' => 'form-control', 'placeholder' => 'mm', 'required' => '' ]) !!}
									<span class="help-block m-b-none"><i class="fa fa-info-circle"></i>最长径</span>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									{!! Form::label('宽') !!}
									{!! Form::input('number','site_wide', null, ['class' => 'form-control', 'placeholder' => 'mm', 'required' => '']) !!}
									<span class="help-block m-b-none"><i class="fa fa-info-circle"></i>与最长径垂直的最长径</span>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">是否癌变</label>
									<div class="radio-list">
										<div class="radio">
											<label>
												{!! Form::radio('cancer', 0, null) !!}
												否
											</label>
										</div>
										<div class="radio">
											<label>
												{!! Form::radio('cancer', 1, null) !!}
												是
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						{!! Form::submit( '创建新OLP信息', ['class' => 'btn btn-primary pull-right']) !!}
						{!! Form::close() !!}
						<div class="image-upload">
							<h4>部位图片</h4>
							<form action="/file"
								class="dropzone"
								id="my-awesome-dropzone">
								{{ csrf_field()}}
								<input name="type" value="2"  type="hidden">
								<input name="times" value="{{ $times }}"  type="hidden">
								<input name="id" value="{{ $id }}"  type="hidden">
							</form>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</section>