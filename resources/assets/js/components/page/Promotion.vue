<template>
    <el-row>
        <el-col :span="4">
        &nbsp;
        </el-col>
        <el-col :span="16" class="topic-info">
            <div class="topic-box" v-for="topic in topics">
                <div class="topic-item">
                    <div class="title">{{topic.title}}</div>
                    <div class="desc">{{topic.description}}</div>
                    <div class="pro">
                        <div class="pro-item" v-for="pro in topic.pros">
                            <img :src="pro.image" alt="">
                            <br/>
                            <span class="price">$ {{pro.price}}</span>
                        </div>
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
                topics: [
                    {
                        title: 'dsds',
                        description: 'ddddd',
                        pros: [
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            }
                        ]
                    },
                    {
                        title: '丰富的水分',
                        description: '随风飞舞个无人敢惹GRE刚认识刚认识',
                        pros: [
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            }
                        ]
                    },
                    {
                        title: '丰富的水分',
                        description: '随风飞舞个无人敢惹GRE刚认识刚认识',
                        pros: [
                            {
                                image: '/images/demo/888.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/888.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/888.png',
                                price: 36.00
                            }
                        ]
                    },
                    {
                        title: '丰富的水分',
                        description: '随风飞舞个无人敢惹GRE刚认识刚认识',
                        pros: [
                            {
                                image: '/images/demo/888.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/777.png',
                                price: 36.00
                            },
                            {
                                image: '/images/demo/888.png',
                                price: 36.00
                            }
                        ]
                    }
                ]
            }
        }
    }
</script>
<style lang="scss">
    @import "../../../sass/_variables-front";
    .topic-info {
        background-color: #fff;
        .topic-box {
            width: 50%;
            float: left;
            padding: 20px;
            .topic-item {
                background-color: $body-bg;
                padding: 10px;
                .title {
                    font-size: 16px;
                    font-weight: bold;
                    height: 35px;
                    line-height: 35px;
                    overflow: hidden;
                }
                .desc {
                    height: 24px;
                    line-height: 24px;
                }
                .pro {
                    height: 190px;
                    .pro-item {
                        margin: 0 8px;
                        float: left;
                        .price {
                            color: #fe642f;
                            font-size: 16px;
                            font-weight: bold;
                        }
                    }
                }
            }
        }
    }
</style>