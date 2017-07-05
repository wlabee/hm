<template>
    <div id="app">
        <mheader></mheader>
        <bread></bread>
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
import bread from './layouts/Bread'
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
        beforeCreate: function(){},
        created: function(){},
        mounted:function(){},
        beforeMount: function () {
            this.fetchPath()
        },
        methods: {
            fetchPath() {
                var pathStr = this.$route.path + '/';
                var patrn = new RegExp('\/(.*?)\/');
                var arr = patrn.exec(pathStr)
                console.log(arr)
                var cate_index = 0;
                if (arr[1] == '') {
                    this.$store.dispatch('menuNav', 'index')
                    this.$store.dispatch('upStyle', 'cate-index')
                } else {
                    if (_.indexOf(['index', 'selection', 'hearsay', 'promotion', 'lowprice'], arr[1]) >= 0) {
                        this.$store.dispatch('menuNav', arr[1])
                    }

                    this.$store.dispatch('upStyle', 'cate-normal')
                    if (arr[1] == 'cate') {
                        this.$store.dispatch('menuNav', '')
                        var patrn2 = new RegExp('\/cate\/(.*?)\/')
                        var arr2 = patrn2.exec(pathStr)
                        if (arr2[1]) {
                            cate_index = arr2[1];
                        }
                    }
                }
                this.$store.dispatch('upCate', cate_index)
            }
        }
    }
</script>