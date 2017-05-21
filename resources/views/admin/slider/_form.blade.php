<div class="form-group">
    <label for="title" class="col-md-3 control-label">标题</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="title" id="title" value="{{ $title }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="image" class="col-md-3 control-label">图片</label>
    <div class="col-md-5">
        <input type="file" class="form-control" name="image" id="image" value="{{ $image }}" autofocus>
        @if ($image)
        <img src="{{$image}}" width="50" height="50"/>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="gourl" class="col-md-3 control-label">链接</label>
    <div class="col-md-5">
        <input type="url" class="form-control" name="gourl" id="gourl" value="{{ $gourl }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">开始时间</label>
    <div class="col-md-5">
        <div class="input-group date form_datetime col-md-5" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="start_time">
            <input class="form-control" size="16" type="text" value="{{$start_time}}" readonly placeholder="默认没有限制">
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
        </div>
        <input type="hidden" id="start_time" name="start_time" value="{{$start_time}}" placeholder="默认没有限制"/>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">结束时间</label>
    <div class="col-md-5">
        <div class="input-group date form_datetime col-md-5" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="end_time">
            <input class="form-control" size="16" type="text" value="{{ $end_time }}" readonly placeholder="默认没有限制">
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
        </div>
        <input type="hidden" id="end_time" name="end_time" value="{{$end_time}}" placeholder="默认没有限制"/>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">序号</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="sort" value="{{ $sort }}" autofocus>
    </div>
</div>
<div id="div1">
    <p>请输入内容...</p>
</div>
@section('css')
<link href="{{ asset('plugs/wangeditor/css/wangEditor.min.css') }}" rel="stylesheet">
@stop
@section('js')
<script src="{{ asset('plugs/wangeditor/js/wangEditor.min.js') }}"></script>
<script>
$( function() {
    {{-- $( "#datepicker1" ).datepicker({dateFormat: "yy-mm-dd",duration: "slow"});
    $( "#datepicker2" ).datepicker({dateFormat: "yy-mm-dd"}); --}}
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
    var editor = new wangEditor('div1');
    editor.config.uploadImgUrl = '/admin/upload';
    editor.config.uploadHeaders = {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    };
    editor.config.uploadImgFileName = 'editorfile'
    editor.create();
  } );
  </script>
@stop
