<div class="form-group">
    <label for="tag" class="col-md-3 control-label">标题</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="title" id="tag" value="{{ $title }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">图片</label>
    <div class="col-md-5">
        <input type="file" class="form-control" name="image" id="tag" value="{{ $image }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">链接</label>
    <div class="col-md-5">
        <input type="url" class="form-control" name="gourl" id="tag" value="{{ $gourl }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">开始时间</label>
    <div class="col-md-5">
    <el-date-picker  v-model="datatimex" type="datetimerange" placeholder="选择时间范围">
    </el-date-picker>
        <input type="datetime" class="form-control" name="start_time" id="tag" value="{{ $start_time }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">结束时间</label>
    <div class="col-md-5">
        <input type="datetime" class="form-control" name="end_time" id="tag" value="{{ $end_time }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">序号</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="tag" value="{{ $sort }}" autofocus>
    </div>
</div>


