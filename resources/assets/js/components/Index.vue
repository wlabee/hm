<template>
    <div class="wrapper">
    <div class="content-wrapper">
        <b>{{saybye}}</b>
        <!--<cheader :title="$route.name"></cheader>-->
        <!-- Main content -->
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