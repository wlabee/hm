<template>
    <el-row>
        <el-col :span="4">
        &nbsp;
        </el-col>
        <el-col :span="16" class="topic-info">
            <div class="topic-item" v-for="topic in topics">
                <div class="title">{{topic.title}}</div>
                <div class="desc">{{topic.description}}</div>
                <div class="pro">
                    <div class="pro-item">
                        <img src="" alt="">
                        <span class="price">$ 66.00</span>
                    </div>
                </div>
            </div>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                topics: {
                    title: 'dsds',
                    description: 'ddddd'
                }
            }
        }
    }
</script>
<style lang="scss">
    @import "../../../sass/_variables-front";
    .topic-info {
        background-color: #fff;
        .topic-item {
            background-color: $body-bg;
            width: 50%;
            margin: 10px;
            padding: 5px;
        }
    }
</style>