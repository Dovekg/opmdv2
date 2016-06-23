<section id="baseinfo_form">
    
    {!! Form::model($baseinfo, [
    'method' => $baseinfo ? 'put' : 'post',
    'route' => $baseinfo ? ['baseinfos.update', $baseinfo->id] : 'baseinfos.store',
    'enctype' => 'multipart/form-data'
    ]) !!}
    <input name="times" value="{{ $times }}"  type="hidden">
    <input name="patient_id" value="{{ $id }}"  type="hidden">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('记录者姓名') !!}
                {!! Form::text('recorder', null, ['class' => 'form-control', 'minlength' => 2, 'required' => '']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('病例图片') !!}
                <!-- Button trigger modal -->
                <div>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#bingliModal">
                    打开文件上传窗口
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('手机号码') !!}
                {!! Form::text('mphone', null, ['class' => 'form-control', 'minlength' => 11]) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('座机号码') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('邮箱') !!}
                {!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('家庭地址') !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'required' => '']) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('QQ号') !!}
                {!! Form::text('qq', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('微信号') !!}
                {!! Form::text('weixin', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">现就业状态</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            {!! Form::radio('job_status', 1, null) !!}
                            在职
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            {!! Form::radio('job_status', 2, null) !!}
                            失业
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            {!! Form::radio('job_status', 3, null) !!}
                            退休
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            {!! Form::radio('job_status', 4, null) !!}
                            其他
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('（原）主要职业') !!}
                {!! Form::text('job', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label">教育程度</label>
        <div class="radio-list">
            <div class="radio">
                <label>
                    <input type="radio" name="education" value="1" checked="">
                    小学
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="education" value="2">
                    中学
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="education" value="3">
                    大学及以上
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="education" value="4">
                    其他
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label class="control-label">居住地区</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="living" value="1" checked="">
                        市区
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living" value="2">
                        郊区
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living" value="3">
                        农村
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living" value="4">
                        其他
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label class="control-label">居住状态</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="living_status" value="1" checked="">
                        独居
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living_status" value="2">
                        与同伴合居
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living_status" value="3">
                        与家人合居
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="living_status" value="4">
                        其他
                    </label>
                </div>
            </div>
        </div>
    </div>
    {!! Form::submit( $baseinfo ? '确认修改' : '确认保存', ['class' => 'btn btn-primary pull-right']) !!}
    {!! Form::close() !!}
    <div class="modal" id="bingliModal" tabindex="-1" role="dialog" aria-labelledby="bingliModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="bingliModalLabel">上传病例图片</h4>
                </div>
                <div class="modal-body">
                    <form action="/file"
                        class="dropzone"
                        id="my-awesome-dropzone">
                        {{ csrf_field()}}
                        <input name="type" value="1"  type="hidden">
                        <input name="times" value="{{ $times }}"  type="hidden">
                        <input name="id" value="{{ $id }}"  type="hidden">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>