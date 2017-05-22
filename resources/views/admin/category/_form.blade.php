<div class="form-group">
    <label for="tag" class="col-md-3 control-label">分类名</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="cat_name" id="tag" value="{{ $cat_name }}" autofocus>
        <input type="hidden" class="form-control" name="pid" id="tag" value="{{ $pid }}" autofocus>
    </div>
</div>
@if ($pid > 0)
<div class="form-group">
    <label for="image" class="col-md-3 control-label">图片</label>
    <div class="col-md-5">
        <input type="file" class="form-control" name="picture" id="picture" value="{{ $picture }}" autofocus>
        @if ($picture)
        <img src="{{$picture}}" width="50" height="50"/>
        @endif
    </div>
</div>
@endif
<div class="form-group">
    <label for="tag" class="col-md-3 control-label">排序</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="sort" id="tag" value="{{ $sort or 1}}" autofocus>
    </div>
</div>


