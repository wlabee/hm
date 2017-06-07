<template>
    <el-row>
        <el-col :span="4">
        &nbsp;
        </el-col>
        <el-col :span="16">
            <listCate></listCate>
        </el-col>
    </el-row>
</template>

<script>
    import listCate from '../listview/cate'
    export default {
        components: {listCate},
        data() {
            return {
                
            }
        },
        beforeMount: function() {
            var products = [
                    {
                        image_page: '/images/demo/666.png',
                        title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                        price: 53.00,
                        create_date: '2017-05-16',
                        description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    },
                    {
                        image_page: '/images/demo/666.png',
                        title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                        price: 53.00,
                        create_date: '2017-05-16',
                        description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    },
                    {
                        image_page: '/images/demo/666.png',
                        title: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                        price: 53.00,
                        create_date: '2017-05-16',
                        description: '2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码2016夏一字扣鱼嘴粗跟凉鞋女中跟露趾显瘦职业黑高跟罗马鞋大小码',
                    }
                ]
            this.$store.dispatch('productInfo', products)
        }
    }
</script>
