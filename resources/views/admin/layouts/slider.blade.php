<h5 class="s-title">栏目导航</h5>
{{$comData['activemenu']}}
<el-menu @if($comData['openmenu']) default-opened="{{$comData['openmenu']}}" @endif default-active="{{$comData['activemenu'] > 0 ? $comData['activemenu'] : 999}}" class="el-menu-vertical-demo" theme="dark">
    <el-menu-item index="999"><i class="el-icon-menu"></i><a href="/admin">控制面板</a></el-menu-item>
    @if(isset($comData['top'])&&count($comData['top']))
        @foreach($comData['top'] as $v)
        <el-submenu index="{{$v['id']}}">
            <template slot="title"><i class="el-icon-message"></i>{{$v['display_name']}}</template>
                @foreach($comData[$v['id']] as $vv)
                    <el-menu-item index="{{$vv['id']}}">
                    <a href="{{URL::route($vv['name'])}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>{{$vv['display_name']}}</a>
                    </el-menu-item>
                @endforeach
        </el-submenu>
        @endforeach
    @endif
</el-menu>