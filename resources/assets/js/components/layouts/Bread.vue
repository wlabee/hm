<template>
    <el-row class="bread-nav">
        <el-col :span="24">
            <ul>
            <li v-for="(item, index) in bnavs">
                <router-link :to="{path: item.url}">{{ item.name }}</router-link>
            </li>
        </ul>
        </el-col>
    </el-row>
</template>
<style lang="">
    .bread-nav {
        background-color: #8492A6;
        height: 300px;
    }
</style>
<script>
    export default{
        data() {
            return {
                bnavs: [
                    {
                        url: "/",
                        name: "首页"
                    },
                    {
                        url: "/selection",
                        name: "小编精选"
                    }
                ]
            }
        }
    }
</script>