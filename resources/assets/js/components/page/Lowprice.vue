<template>
    <el-row>
        <el-col :span="4">
        &nbsp;
        </el-col>
        <el-col :span="16" class="lowprice">
            <el-row class="desc">
                <p>
                    今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。今日降价直播，所有商品一律5折，快来买。
                </p>
            </el-row>
            <el-row class="selection">
                <div class="">
                    <span>折扣</span>
                    <ul class="">
                        <li>1折</li>
                        <li class="active">2折</li>
                        <li>3折</li>
                        <li>4折</li>
                        <li>5折</li>
                        <li>6折</li>
                        <li>7折</li>
                    </ul>
                </div>
            </el-row>
            <el-row class="content">
                <div class="c-top">
                    <span>今日数据： 123456</span>
                    <el-button type="primary">关闭提醒</el-button>
                </div>
                <div class="c-table">
                    <el-table :data="goodsData" style="width: 100%">
                        <el-table-column prop="date" label="时间"></el-table-column>
                        <el-table-column  prop="name" label="产品"></el-table-column>
                        <el-table-column  prop="discount" label="折扣"></el-table-column>
                        <el-table-column  prop="price" label="现价"></el-table-column>
                        <el-table-column  prop="old_price" label="原价"></el-table-column>
                        <el-table-column  prop="shop" label="商城"></el-table-column>
                    </el-table>
                </div>
            </el-row>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                goodsData: [
                    {
                        date: "12:12:44",
                        name: "广泛地过福多说郭仁GRE热",
                        discount: "3折",
                        price: "￥555.00",
                        old_price: "￥666.44",
                        shop: "京东"
                    },
                    {
                        date: "07:08:44",
                        name: "将军与妓银监局具有㢠u㔿",
                        discount: "3折",
                        price: "￥555.00",
                        old_price: "￥666.44",
                        shop: "京东"
                    }
                ]
            }
        }
    }
</script>
<style lang="scss">
    @import "../../../sass/_variables-front";
    .lowprice {
        background-color: #fff;
        padding: 10px;
        .desc {
            background-color: $outer-main;
            margin: 10px;
            padding: 15px;
            color: #eee;
        }
        .selection {
            margin: 10px 0;
            div {
                display: block;
                span {
                    background-color: $body-bg;
                    display: block;
                    float: left;
                }
                ul {
                    display: block;
                    float: left;
                }
                li {
                    list-style: none;
                    float: left;
                    text-align: center;
                    margin: 0 10px;
                    padding: 2px 4px;
                }
                li.active {
                    background-color: $outer-main;
                    color: #fff;
                }
            }
        }
        .content {
            .c-top {
                width: 100%;
                span {

                }
                button {
                    float: right;
                }
                margin: 10px 0;
            }
        }
    }
</style>