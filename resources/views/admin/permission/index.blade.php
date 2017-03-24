@extends('admin.layouts.app')

@section('title','权限管理')

@section('content')

<div class="row page-title-row" id="dangqian" style="margin:5px;">
    <div class="col-md-6">
        @if($cid==0)
            <span style="margin:3px;" id="cid" attr="{{$cid}}" class="btn-flat text-info"> 顶级菜单</span>
            @else
            <span style="margin:3px;" id="cid"  attr="{{$cid}}" class="text-info"> {{$data->display_name}}
            </span>
        <a style="margin:3px;"  href="/admin/permission"
                class="btn btn-warning btn-md animation-shake reloadBtn"><i class="fa fa-mail-reply-all"></i> 返回顶级菜单
        </a>
        @endif
    </div>

    <div class="col-md-6 text-right">
        <a href="/admin/permission/{{$cid}}/create" class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i> 添加权限 </a>
    </div>
</div>
<div class="row page-title-row" style="margin:5px;">
    <div class="col-md-6">
    </div>
    <div class="col-md-6 text-right">
    </div>
</div>

    <template>
        <el-table :data="tableData" border style="width: 100%">
            <el-table-column prop="name" label="权限规则"></el-table-column>
            <el-table-column prop="display_name" label="权限名称"></el-table-column>
            <el-table-column prop="description" label="权限概述"></el-table-column>
            <el-table-column prop="created_at" label="权限创建日期"></el-table-column>
            <el-table-column prop="updated_at" label="权限修改日期"></el-table-column>
            <el-table-column prop="operate" label="操作"></el-table-column>
        </el-table>
    </template>
<div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog modal-warning">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    确认要删除这个软件吗?
                </p>
            </div>
            <div class="modal-footer">
                <form class="deleteForm" method="POST" action="/admin/list">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-times-circle"></i> 确认
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
   
  </script>
@endsection
