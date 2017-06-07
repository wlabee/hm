<template>
<div>
    <el-row class="info-item" v-for="itemx in products">
        <el-col :span="4"><img class="img-log" :src="itemx.image_page"/></el-col>
        <el-col :span="20">
            <div class="title">{{itemx.title}}</div>
            <div class="sub-title">
                显示优惠价 <span class="price">￥ {{itemx.price}}</span>
                <span class="time">{{itemx.create_date}}</span>
            </div>
            <div class="desc">{{itemx.description}}</div>
            <div class="buybtn">
                <el-button type="primary">购买</el-button>
                <el-button :plain="true" class="lite-btn">直达链接</el-button>
                <el-button :plain="true" class="lite-btn">商城</el-button>
            </div>
        </el-col>
    </el-row>
</div>
</template>
<script>
export default{
    data() {
        return {
            products: this.$store.getters.productsList
        }
    }
}
</script>
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