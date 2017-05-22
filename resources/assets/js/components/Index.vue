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
            saybye: 'good bye'
          }
        },
        components: {listOne}
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
  }
</style>