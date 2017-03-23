<h5 class="s-title">栏目导航</h5>
<el-menu default-active="999" class="el-menu-vertical-demo" theme="dark">
    <el-menu-item index="999"><i class="el-icon-menu"></i><a href="/admin">控制面板</a></el-menu-item>
    @if(isset($comData['top'])&&count($comData['top']))
        @foreach($comData['top'] as $v)
        <el-submenu index="{{$loop->iteration}}" class="@if(in_array($v['id'],$comData['openarr'])) is-opened @endif">
            <template slot="title"><i class="el-icon-message"></i>{{$v['display_name']}}</template>
                @foreach($comData[$v['id']] as $vv)
                    <el-menu-item index="{{$loop->parent->iteration}}-{{$loop->iteration}}" @if(in_array($vv['id'],$comData['openarr'])) class="is-active" @endif>
                    <a href="{{URL::route($vv['name'])}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>{{$vv['display_name']}}</a>
                    </el-menu-item>
                @endforeach
        </el-submenu>
        @endforeach
    @endif
</el-menu>