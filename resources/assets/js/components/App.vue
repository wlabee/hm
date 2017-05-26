<template>
    <div id="app">
        <mheader></mheader>
        <router-view></router-view>
        <mfooter></mfooter>
        <leftcate></leftcate>
    </div>
</template>
<script>
import mheader from './layouts/Mheader'
import menux from './layouts/Mmenu'
import mfooter from './layouts/Mfooter'
import leftcate from './layouts/LeftCate'
    export default {
        data() {
          return {
            sayhello: 'hello word'
          }
        },
        components: {mheader, menux, mfooter, leftcate},
        watch: {
            // 如果路由有变化，会再次执行该方法
            '$route': 'fetchPath'
        },
        beforeCreate: function(){console.log('aaaa')},
        created: function(){console.log('bbb')},
        mounted:function(){console.log('dddd')},
        beforeMount: function () {
            console.log('cccc')
            this.fetchPath()
        },
        methods: {
            fetchPath() {
                var pathStr = this.$route.path + '/';
                var patrn= new RegExp('\/(.*?)\/');
                var arr = patrn.exec(pathStr)
                console.log(arr)
                if (arr[1] == '') {
                    this.$store.dispatch('menuNav', 'index')
                    this.$store.dispatch('upStyle', 'cate-index')
                } else {
                    this.$store.dispatch('menuNav', arr[1])
                    this.$store.dispatch('upStyle', 'cate-normal')
                }
            }
        }
    }
</script>