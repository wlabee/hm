<template>
    <div class="wrapper">
        <div class="content-wrapper">
            <el-carousel indicator-position="outside">
                <el-carousel-item v-for="item in 4" :key="item">
                <h3>{{ item }}</h3>
                </el-carousel-item>
            </el-carousel>
            <section class="content">
                <router-view></router-view>
                <!-- Your Page Content Here -->
            </section>
            <!-- /.content -->
        </div>
    </div>
</template>
<script>
    export default {
        data() {
          return {
            saybye: 'good bye'
          }
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
  }
</style>