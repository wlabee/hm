<template>
    <el-row class="navmenu">
        <el-col :span="5"><div class="grid-content">&nbsp;</div></el-col>
        <el-col :span="14">
            <div class="grid-content">
                <el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
                    <el-menu-item index="1"><a href="/">首页</a></el-menu-item>
                    <el-menu-item index="2"> <router-link to="/test/index">小编精选</router-link></el-menu-item>
                </el-menu>
            </div>
        </el-col>
        <el-col :span="5"><div class="grid-content">&nbsp;</div></el-col>
    </el-row>
</template>
<style lang="">
    .navmenu {
        background-color: #324157;
        }
</style>
<script>
export default {
    data() {
      return {
        activeIndex: '1',
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
}
</script>