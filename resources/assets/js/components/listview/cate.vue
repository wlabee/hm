<template>
<div>
    <el-row class="sub-cate" v-for="itemx in 4">
        <el-col :span="24"><img class="img-log" src="/images/demo/333.png"/></el-col>
    </el-row>
    <el-row class="cate-pro">
        <listOne></listOne>
    </el-row>
</div>
</template>
<script>
    import listOne from './one'
    export default {
        components: {listOne}
    }
</script>
<style lang="scss">
    .sub-cate {
        .el-col {
            margin: 10px 0;
        }
    }
</style>