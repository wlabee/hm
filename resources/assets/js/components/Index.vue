<template>
    <el-row>
        <el-col :span="24">
            <el-carousel indicator-position="outside">
                <el-carousel-item v-for="item in 4" :key="item">
                <h3>{{ item }}</h3>
                </el-carousel-item>
            </el-carousel>
        </el-col>
        <el-row class="top-bar">
            <el-col :span="4">
            &nbsp;
            </el-col>
            <el-col :span="16">
                <listOne></listOne>
            </el-col>
        </el-row>
    </el-row>
</template>
<script>
import listOne from './listview/one'
    export default {
        data() {
          return {
            saybye: 'good bye',
            cateIndex: true,
            cateNormal: false,
            testxx: false,
          }
        },
        beforeMount: function () {
            var products = [
                {
                    image_page: '/images/demo/222.png',
                    title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    price: 53.00,
                    create_date: '2017-05-16',
                    description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                },
                {
                    image_page: '/images/demo/222.png',
                    title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    price: 53.00,
                    create_date: '2017-05-16',
                    description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                },
                {
                    image_page: '/images/demo/222.png',
                    title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    price: 53.00,
                    create_date: '2017-05-16',
                    description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                },
                {
                    image_page: '/images/demo/222.png',
                    title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    price: 53.00,
                    create_date: '2017-05-16',
                    description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                },
                {
                    image_page: '/images/demo/222.png',
                    title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    price: 53.00,
                    create_date: '2017-05-16',
                    description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                }
            ]
            this.$store.dispatch('productInfo', products)
        },
        components: {
            listOne
        }
    }
</script>
<style>
  .el-carousel__item h3 {
    color: #475669;
    font-size: 18px;
    opacity: 0.75;
    line-height: 300px;
    margin: 0;
  }
  
  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }
  
  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
    background: url(/images/demo/111.png) no-repeat center center;
  }
</style>