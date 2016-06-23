@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/">
                    <div class="col-md-10"><input type="text" class="form-control" placeholder="搜索"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></div>
                </form>
            </div>

        </div>

        <div class="row patients-grid">

            @foreach($patients as $patient)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>#{{ $patient->number }}</h4>
                                </div>
                                <div class="col-md-4">
                                    <h5><i class="fa fa-user"></i>{{ $patient->name }}</h5>
                                </div>
                                <div class="col-md-8">
                                    <p><i class="fa fa-credit-card"></i>{{ $patient->card_id }}</p>
                                </div>
                                <div class="col-md-12">
                                    @for($i=1; $i <= $patient->times; $i++)
                                        <a href="/patients/{{$patient->id}}/times/{{$i}}/edit"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                    @endfor
                                    <a href="/patients/{{$patient->id}}/times/{{$patient->times+1}}/create" class="text-default">&nbsp;<i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer panel-footer-condensed">
                            <div class="heading-elements">
                                <span class="heading-text">创建日期: <span class="text-semibold">{{ $patient->created_at }}</span></span>

                                <ul class="list-inline list-inline-condensed heading-text pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">操作： <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('patients.edit', $patient->id) }}"><i class="fa fa-btn fa-pencil"></i>修改病人信息</a></li>
                                            <li><a href="{{ route('patients.destroy', $patient->id) }}"><i class="fa fa-btn fa-times"></i>删除该记录</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $patients->links() }}
    </div>

@stop
