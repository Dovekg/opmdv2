{!! Form::model($epibio, [
'method' => $epibio ? 'put' : 'post',
'route' => $epibio ? ['epibios.update', $epibio->id] : ['epibios.store']
]) !!}
    <input name="times" value="{{ $times }}"  type="hidden">
    <input name="patient_id" value="{{ $id }}"  type="hidden">
<fieldset>
    <legend><h3>吸烟</h3></legend>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">吸烟</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="smoke" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="smoke" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('始吸年龄(岁)') !!}
                {!! Form::text('smo_age', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">吸烟类型</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="smo_type" value="1" checked="">
                            过滤嘴
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="smo_type" value="2">
                            非过滤嘴
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="smo_type" value="3">
                            其他
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('平均烟量（支/天）') !!}
                {!! Form::text('smo_num', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">是否戒烟</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="quit_smoking" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="quit_smoking" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('戒烟时长（月）') !!}
                {!! Form::text('smo_quit_time', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">被动吸烟</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="passive_smo" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="passive_smo" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('备注') !!}
                {!! Form::textarea('smo_comments', null, ['class' => 'form-control', 'rows' => 2]) !!}
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend><h3>饮酒</h3></legend>
    <div class="row">
        
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">是否饮酒</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="drink" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="drink" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('开始年龄（岁）') !!}
                {!! Form::text('dri_age', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">主要类型</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="dri_type" value="1" checked="">
                            白酒
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="dri_type" value="2">
                            红酒
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="dri_type" value="3">
                            啤酒
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="dri_type" value="4">
                            其它
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('平均酒量（毫升/天）') !!}
                {!! Form::text('capacity', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">是否戒酒</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="quit_dri" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="quit_dri" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('戒酒时长（月）') !!}
                {!! Form::text('dri_quit_time', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {!! Form::label('备注') !!}
                {!! Form::textarea('dri_comments', null, ['class' => 'form-control','rows' => 2]) !!}
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend><h3>其他</h3></legend>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">咀嚼槟榔</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="betel" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="betel" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('每日用量') !!}
                {!! Form::text('betel_dos', null, ['id' => 'betel_docs', 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">咀嚼烟叶</label>
                <div class="radio-list">
                    <div class="radio">
                        <label>
                            <input type="radio" name="tabacoo" value="0" checked="">
                            否
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="tabacoo" value="1">
                            是
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('每日用量') !!}
                {!! Form::text('tabacoo_dos', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label class="control-label">饮食</label>
            <div class="radio-list">
                <div class="radio">
                    <label>
                        <input type="radio" name="food" value="1" checked="">
                        辛辣
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="food" value="2">
                        清淡
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="food" value="3">
                        烫食
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="food" value="4">
                        其它
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

</fieldset>
<div class="row">
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">系统病史</label>
        <div class="radio-list">
            <div class="radio">
                <label>
                    <input type="radio" name="sys_d" value="0" checked="">
                    否
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sys_d" value="1">
                    是
                </label>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-8">
    <div class="form-group">
        {!! Form::label('具体疾病名称') !!}
        {!! Form::text('sys_d_details', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">家族病史</label>
        <div class="radio-list">
            <div class="radio">
                <label>
                    <input type="radio" name="fami_d" value="0" checked="">
                    否
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="fami_d" value="1">
                    是
                </label>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-8">
    <div class="form-group">
        {!! Form::label('与患者关系') !!}
        {!! Form::text('fami_d_details', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">长期服药</label>
        <div class="radio-list">
            <div class="radio">
                <label>
                    <input type="radio" name="drug" value="0" checked="">
                    否
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="drug" value="1">
                    是
                </label>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-8">
    <div class="form-group">
        {!! Form::label('主要种类、剂量及持续时间') !!}
        {!! Form::text('drug_details', null, ['class' => 'form-control']) !!}
    </div>
</div>
</div>
{!! Form::submit( $epibio ? '确认修改' : '确认保存', ['class' => 'btn btn-primary pull-right']) !!}
{!! Form::close() !!}