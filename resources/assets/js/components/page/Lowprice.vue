<template>
    <el-row>
        <el-col :span="4">
        &nbsp;
        </el-col>
        <el-col :span="16" class="lowprice">
            <div class="desc">
                <p>
                    今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。
                </p>
            </div>
            <div class="selection">
            </div>
            <div class="content">
                <div class="c-top">
                    <span>今日数据： 123456</span>
                    <el-button type="primary">关闭提醒</el-button>
                </div>
                <div class="c-table">
                    
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