@extends('admin.layouts.app')

@section('title','网站配置-分类管理')

@section('content')
            <div class="row page-title-row" style="margin:5px;">
                <div class="col-md-6">
                @if($pid==0)
                    <span style="margin:3px;" id="pid" attr="{{$pid}}" class="btn-flat text-info"> 顶级分类</span>
                @else
                    <span style="margin:3px;" id="pid"  attr="{{$pid}}" class="text-info"> {{$data->cat_name}}
                    </span>
                    <a style="margin:3px;"  href="/admin/category"
                            class="btn btn-warning btn-md animation-shake reloadBtn"><i class="fa fa-mail-reply-all"></i> 返回顶级分类
                    </a>
                @endif
                </div>
                <div class="col-md-6 text-right">
                    <a href="/admin/category/{{$pid}}/create" class="btn btn-success btn-md">
                        <i class="fa fa-plus-circle"></i> 添加分类
                    </a>
                </div>
            </div>
            <div class="row page-title-row" style="margin:5px;">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 text-right">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                    @include('admin.partials.errors')
                    @include('admin.partials.success')
                    <div class="box-body">
                    <table id="tags-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th data-sortable="false" class="hidden-sm"></th>
                            <th class="hidden-sm">排序</th>
                            <th data-sortable="false" class="hidden-sm">分类名</th>
                            <th data-sortable="false">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-delete" tabIndex="-1">
        <div class="modal-dialog">
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
                        确认要删除这条数据吗?
                    </p>
                </div>
                <div class="modal-footer">
                    <form class="deleteForm" method="POST" action="/admin/category">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i>确认
                        </button>
                    </form>
                </div>
            </div>
@stop

@section('js')
    <script>
        $(function () {
            var pid=$('#pid').attr('attr');
            var table = $("#tags-table").DataTable({
                language: {
                    "sProcessing": "处理中...",
                    "sLengthMenu": "显示 _MENU_ 项结果",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上页",
                        "sNext": "下页",
                        "sLast": "末页"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                },
                order: [[1, "desc"]],
                serverSide: true,
                ajax: {
                    url: '/admin/category/index',
                    type: 'POST',
                    data: function (d) {
                        d.pid = pid;
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                "columns": [
                    {"data": "id"},
                    {"data": "sort"},
                    {"data": "cat_name"},
                    {"data": "action"}
                ],
                columnDefs: [
                    {
                        'targets': -1, "render": function (data, type, row) {
                            var strop = '';
                            if (row['pid'] == 0) {
                                strop = '<a style="margin:3px;"  href="/admin/category/' + row['id'] + '" class="X-Small btn-xs text-success "><i class="fa fa-adn"></i>下级菜单</a>';
                            }
                        return strop + '<a style="margin:3px;" href="/admin/category/' + row['id'] + '/edit" class="X-Small btn-xs text-success"><i class="fa fa-edit"></i> 编辑</a><a style="margin:3px;" href="#" attr="' + row['id'] + '" class="delBtn X-Small btn-xs text-danger"><i class="fa fa-times-circle"></i> 删除</a>';
                        }
                    }
                ]
            });

            table.on('preXhr.dt', function () {
                loadShow();
            });

            table.on('draw.dt', function () {
                loadFadeOut();
            });

            table.on('order.dt search.dt', function () {
                table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            });

            $("table").delegate('.delBtn', 'click', function () {
                var id = $(this).attr('attr');
                $('.deleteForm').attr('action', '/admin/category/' + id);
                $("#modal-delete").modal();
            });

        });
    </script>
@stop