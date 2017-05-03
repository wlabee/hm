<div class="form-group">
    <label for="tag" class="col-md-3 control-label">链接名</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="link_name" id="tag" value="{{ $link_name }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">链接地址</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="link_url" id="tag" value="{{ $link_url }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">排序</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="tag" value="{{ $sort or 1}}" autofocus>
    </div>
</div>


