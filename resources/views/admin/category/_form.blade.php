<div class="form-group">
    <label for="tag" class="col-md-3 control-label">分类名</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="cat_names" id="tag" value="{{ $cat_name }}" autofocus>
    </div>
</div>
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">排序</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="tag" value="{{ $sort or 1}}" autofocus>
    </div>
</div>


