<div class="form-group">
    <label for="tag" class="col-md-3 control-label">标题</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="title" id="title" value="{{ $title }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">图片</label>
    <div class="col-md-5">
        <input type="file" class="form-control" name="image" id="image" value="{{ $image }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">链接</label>
    <div class="col-md-5">
        <input type="url" class="form-control" name="gourl" id="gourl" value="{{ $gourl }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">开始时间</label>
    <div class="col-md-5">
        <input type="datetime" placeholder="默认不限制" class="form-control" name="start_time" id="datepicker1" value="{{ $start_time }}" autofocus>
    </div>
    <label for="dtp_input1" class="col-md-3 control-label">DateTime Picking</label>
    <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1">
        <input class="form-control" size="16" type="text" value="" readonly>
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
    </div>
    <input type="hidden" id="dtp_input1" value="" /><br/>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">结束时间</label>
    <div class="col-md-5">
        <input type="datetime" placeholder="默认不限制" class="form-control" name="end_time" id="datepicker2" value="{{ $end_time }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">序号</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="sort" value="{{ $sort }}" autofocus>
    </div>
</div>
@section('js')
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
  } );
</script>
@stop

