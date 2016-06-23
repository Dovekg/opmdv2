<section id="olp">
	<div class="panel">
		<div class="panel-heading">
			<div class="panel-title">OLP病变信息
				<span class="pull-right"><button class="btn btn-primary" data-toggle="modal" data-target="#olpModal"><i class="fa fa-news"></i>添加OLP病变信息</button></span>
			</div>
			
		</div>
		<div class="panel-body">
			<table class="table">
				@if($clinical->exists)
				<thead>
					<tr>
						<th>部位</th>
						<th>是否癌变</th>
						<th>编辑</th>
						<th>删除</th>
					</tr>
				</thead>
				@else
				没有OLP病变信息
				@endif
				<tbody>
					@foreach($patient->olps as $olp)
					<tr>
						<td>{{ $olp->site }}</td>
						<td>{{ $olp->cancer }}</td>
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
		<div class="panel-footer">

			<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('糜烂面积') !!} <span>mm<SUP>2<SUP></span>

                            {!! Form::input('ml_area','email', null, ['id' => 'ml_area', 'class' => 'form-control']) !!}  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('OLP分型') !!}

                            {!! Form::select('olp_type', [
                                            '' => '',
                                            '1' => '斑纹型',
                                            '2' => '充血型',
                                            '3' => '糜烂型',
                                        ], null, ['class' => 'form-control']) !!}

                        </div>
                    </div>
                </div>
		</div>
	</div>
	<div class="modal" id="olpModal" tabindex="-1" role="dialog" aria-labelledby="olpModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="olpModalLabel">填写olp信息，并上传病理图片</h4>
				</div>
				<div class="modal-body">
					<div class="modal-container">

					{!! Form::open([

                            'method' => 'post',
                            'route' => 'olps.store'

                        ]) !!}
                        <input name="times" value="{{ $times }}"  type="hidden">
    <input name="patient_id" value="{{ $id }}"  type="hidden">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('部位') !!}
                                    {!! Form::select('site', [
                                            '' => '',
                                            '1' => '双唇',
                                            '2' => '右颊',
                                            '3' => '左颊',
                                            '4' => '舌背',
                                            '5' => '舌腹',
                                            '6' => '口底',
                                            '7' => '硬腭',
                                            '8' => '软腭',
                                            '9' => '上颌牙龈',
                                            '10' => '下颌牙龈'

                                        ], null, ['class' => 'form-control', 'required' => '']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('白纹累计（四分法）') !!}
                                    {!! Form::select('bw', [
                                            '' => '',
                                            '1' => '1/4',
                                            '2' => '2/4',
                                            '3' => '3/4',
                                            '4' => '4/4'

                                        ], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('充血面积（四分法）') !!}
                                    {!! Form::select('cx', [
                                            '' => '',
                                            '1' => '1/4',
                                            '2' => '2/4',
                                            '3' => '3/4',
                                            '4' => '4/4'
                                        ], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('糜烂长') !!}
                                    {!! Form::input('number', 'ml_long', null, ['class' => 'form-control', 'placeholder' => 'mm']) !!}
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>最长径</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                {!! Form::label('糜烂宽') !!}
                                {!! Form::input('number','ml_wide', null, ['class' => 'form-control', 'placeholder' => 'mm']) !!}
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
								<input name="type" value="3"  type="hidden">
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