@extends('layouts.app')
@section('content')
<div class="container mt-20">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">病人信息</h4>
                </div>
                <div class="panel-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                            <li class="{{ $baseinfo ? : 'active'}}"><a href="#highlighted-justified-tab1" data-toggle="tab" aria-expanded={{ $baseinfo ? "false" : "true"}}>基本信息</a></li>
                            <li class="{{ $baseinfo && !$epibio ? 'active' : ''}}"><a href="#highlighted-justified-tab2" data-toggle="tab" aria-expanded={{ $baseinfo && !$epibio ? "true" : "false"}}>流行病学信息</a></li>
                            <li class="{{ $baseinfo && $epibio && !$clinical ? 'active' : ''}}"><a href="#highlighted-justified-tab3" data-toggle="tab" aria-expanded={{ $baseinfo && $epibio && !$clinical ? "true" : "false"}}>临床信息</a></li>
                            <li class="{{ $baseinfo && $epibio && $clinical && !$result ? 'active' : ''}}"><a href="#highlighted-justified-tab4" data-toggle="tab" aria-expanded={{ $baseinfo && $epibio && $clinical && !$result ? "true" : "false"}}>诊断结果</a></li>
                        </ul>
                        <div class="tab-content" style="padding: 40px 50px;">
                            <div class="tab-pane {{ $baseinfo ? '' : 'active'}}" id="highlighted-justified-tab1">
                                @include('forms.baseinfo')
                            </div>
                            <div class="tab-pane {{ $baseinfo && !$epibio ? 'active' : ''}}" id="highlighted-justified-tab2">
                                @include('forms.epibio')
                            </div>
                            <div class="tab-pane {{ $baseinfo && $epibio && !$clinical ? 'active' : ''}}" id="highlighted-justified-tab3">
                                @include('forms.clinical')
                            </div>
                            <div class="tab-pane {{ $baseinfo && $epibio && $clinical && !$result ? 'active' : ''}}" id="highlighted-justified-tab4">
                                @include('forms.result')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
