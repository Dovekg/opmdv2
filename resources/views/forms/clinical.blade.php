{!! Form::model($clinical, [
'method' => $clinical ? 'put' : 'post',
'route' => $clinical ? ['clinicals.update', $clinical->id] : 'clinicals.store'
]) !!}
<input name="times" value="{{ $times }}"  type="hidden">
    <input name="patient_id" value="{{ $id }}"  type="hidden">
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('诊断') !!}
            {!! Form::select('diagnosis', [
                '' => '',
                '1' => 'OLK患者',
                '2' => 'OLK癌变患者',
                '3' => 'OLP患者',
                '4' => 'OLP癌变患者',
            ], null, ['class' => 'form-control', 'required' => '', 'id' => 'diagnosis']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('病程（月）') !!}
            {!! Form::input('number', 'd_course', null, ['class' => 'form-control', 'required' => '', 'digits' => 'true']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('主观症状') !!}
            {!! Form::select('symptom', [
                '' => '',
                '1' => '无不适',
                '2' => '粗糙感',
                '3' => '刺激痛',
                '4' => '自发痛',
            ], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{!! Form::submit( $clinical ? '确认修改' : '确认保存', ['class' => 'btn btn-primary pull-right']) !!}
{!! Form::close() !!}




@if($clinical)
    @if($clinical->diagnosis == 1 || $clinical->diagnosis == 2)
        @include('forms.olk')
    @elseif($clinical->diagnosis == 3 || $clinical->diagnosis == 4)
        @include('forms.olp')
    @endif
@endif

