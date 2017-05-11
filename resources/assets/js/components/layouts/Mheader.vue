<template>
    <el-row class="mheader">
        <el-row class="top-bar">
            <el-col :span="16" :offset="4">
                <div class="login-bar">
                    <span>登录 | 注册</span>
                </div>
            </el-col>
        </el-row>
        <el-row class="menu-bar">
            <el-col :span="16" :offset="4">
                <el-col :span="6" class="logo">
                    <img src="images/boxed-bg.jpg" alt="">
                </el-col>
                <el-col :span="18">
                    <el-col>
                        <div class="search-f">
                            <el-input class="search-input" placeholder="请输入您要搜索的内容" icon="search" v-model="input2" :on-icon-click="handleIconClick"></el-input>
                            <div class="sub-search">
                                热门搜索：
                                <a href="">橱柜</a>
                                <a href="">空调</a>
                            </div>
                        </div>
                    </el-col>
                    <el-col>
                        <div class="grid-content menu-main">
                            <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
                                <el-menu-item index="1"><a href="/">首页</a></el-menu-item>
                                <el-menu-item index="2"> <router-link to="/test/index">小编精选</router-link></el-menu-item>
                            </el-menu>
                        </div>
                    </el-col>
                </el-col>
            </el-col>
        </el-row>
    </el-row>
</template>
<script>
    export default{
        data() {
            return {
            input2: ''
            }
        },
        methods: {
            handleIconClick(ev) {
            console.log(ev);
            }
        }
    }
</script>