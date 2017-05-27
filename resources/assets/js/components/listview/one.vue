<template>
<div>
    <el-row class="info-item" v-for="itemx in 4">
        <el-col :span="4"><img class="img-log" src="/images/demo/222.png"/></el-col>
        <el-col :span="20">
            <div class="title">2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码</div>
            <div class="sub-title">
                显示优惠价 <span class="price">￥ 53.00</span>
                <span class="time">2017-04-05</span>
            </div>
            <div class="desc">2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码</div>
            <div class="buybtn">
                <el-button type="primary">购买</el-button>
                <el-button :plain="true" class="lite-btn">直达链接</el-button>
                <el-button :plain="true" class="lite-btn">商城</el-button>
            </div>
        </el-col>
    </el-row>
</div>
</template>
<style lang="scss">
    .info-item {
        padding: 15px 10px;
        border-bottom: 1px solid #afafaf;
        height: 220px;
        background-color:#fff;
        .img-log {
            padding: 10px;
            width: 180px;
            height: 180px;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
            height: 35px;
            line-height: 35px;
            overflow: hidden;
        }
        .sub-title {
            .price {
                color: #fe642f;
                font-size: 16px;
                font-weight: bold;
            }
            .time {
                float: right;
            }
        }
        .desc {
            color: #afafaf;
        }
        .buybtn {
            position: absolute;
            bottom: 30px;
            .lite-btn {
                background: #fff;
                border-color: #11b95c;
                color: #11d9ac;
                outline: 0;
            }
        }
    }
</style>