<div class="row result-images">
    <div class="col-sm-4">
        <h5>上传血常规图片</h5>
        <form action="/file"
            class="dropzone"
            id="my-awesome-dropzone">
            {{ csrf_field()}}
            <input name="type" value="3"  type="hidden">
            <input name="times" value="{{ $times }}"  type="hidden">
            <input name="id" value="{{ $id }}"  type="hidden">
        </form>
    </div>
    <div class="col-sm-4">
        <h5>上传血糖图片</h5>
        <form action="/file"
            class="dropzone"
            id="my-awesome-dropzone">
            {{ csrf_field()}}
            <input name="type" value="4"  type="hidden">
            <input name="times" value="{{ $times }}"  type="hidden">
            <input name="id" value="{{ $id }}"  type="hidden">
        </form>
    </div>
    <div class="col-sm-4">
        <h5>上传肝肾功图片</h5>
        <form action="/file"
            class="dropzone"
            id="my-awesome-dropzone">
            {{ csrf_field()}}
            <input name="type" value="5"  type="hidden">
            <input name="times" value="{{ $times }}"  type="hidden">
            <input name="id" value="{{ $id }}"  type="hidden">
        </form>
    </div>
</div>
{!! Form::model($result, [
'method' => $result ? 'put' : 'post',
'route' => $result ? ['results.update', $result->id] : ['results.store', 'id'.'='.$id]
]) !!}
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label">尖锐牙尖</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="sharp_teeth" value="0" checked="">
                        无
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="sharp_teeth" value="1">
                        有
                    </label>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label">不良修复体</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="bad_fit" value="0" checked="">
                        无
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="bad_fit" value="1">
                        有
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label">牙结石</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="calculus" value="0" checked="">
                        无
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="calculus" value="1">
                        Ⅰ
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="calculus" value="1">
                        Ⅱ
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="calculus" value="1">
                        Ⅲ
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">全身用药</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="sys_treat" value="0" checked="">
                        无
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="sys_treat" value="1">
                        有
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('药名') !!}
            {!! Form::text('sys_drug', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('疗程') !!}
            {!! Form::text('sys_time', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <label class="control-label">局部用药</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="topical_treat" value="0" checked="">
                        无
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="topical_treat" value="1">
                        有
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('药名') !!}
            {!! Form::text('topical_drug', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('疗程') !!}
            {!! Form::text('topical_time', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('备注') !!}
            {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 3]) !!}
            <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>上述表格未包含的其他内容</span>
        </div>
    </div>
</div>
{!! Form::submit( $result ? '确认修改' : '确认保存', ['class' => 'btn btn-primary pull-right']) !!}
{!! Form::close() !!}