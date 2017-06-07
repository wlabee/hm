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