<template>
    <el-row class="mheader">
        <el-row class="top-bar">
            <el-col :span="16" :offset="4">
                <div class="login-bar">
                    <span>
                        <a data-toggle="modal" data-target="#loginform" title="登录">登录</a> | 注册
                     </span>
                </div>
                <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">登录慧买</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1">账户</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1">密码</span>
                                        <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <el-button class="login" type="primary" native-type="submit">登录</el-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </el-col>
        </el-row>
        <el-row class="menu-bar">
            <el-col :span="16" :offset="4">
                <el-col :span="4" class="logo">
                    <img src="/images/hm_logo.png" alt="慧买">
                </el-col>
                <el-col :span="20">
                    <el-col>
                        <div class="search-f">
                            <el-input class="search-input" placeholder="请输入您要搜索的内容" icon="search" v-model="inputSearch" :on-icon-click="handleIconClick"></el-input>
                            <div class="sub-search">
                                热门搜索：
                                <a href="">橱柜</a>
                                <a href="">空调</a>
                            </div>
                        </div>
                    </el-col>
                    <el-col>
                        <div class="grid-content menu-main">
                            <el-menu :default-active="activeIndex" mode="horizontal">
                                <el-menu-item index="index"><router-link to="/">首页</router-link></el-menu-item>
                                <el-menu-item index="selection"><router-link to="/selection">小编精选</router-link></el-menu-item>
                                <el-menu-item index="hearsay"><router-link to="/hearsay">小道消息</router-link></el-menu-item>
                                <el-menu-item index="promotion"><router-link to="/promotion">促销精选</router-link></el-menu-item>
                                <el-menu-item index="lowprice"><router-link to="/lowprice">神价屋</router-link></el-menu-item>
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
                activeIndex: this.$store.state.menuSelc,
                inputSearch: '',
                labelPosition: 'right',
                formLabelAlign: {
                    name: '',
                    password: ''
                },
                router: true
            }
        },
        methods: {
            handleIconClick(ev) {
                console.log(ev);
            }
        }
    }
</script>