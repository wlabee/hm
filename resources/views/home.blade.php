@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="block">
                    <span class="demonstration">默认显示颜色</span>
                    <span class="wrapper">
                        <el-button type="success">成功按钮</el-button>
                        <el-button type="warning">警告按钮</el-button>
                        <el-button type="danger">危险按钮</el-button>
                        <el-button type="info">信息按钮</el-button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
