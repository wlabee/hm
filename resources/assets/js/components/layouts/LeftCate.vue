<template>
    <div class="left-cate cate-tt1" :class="showcate">
        <ul>
            <li>小编精选</li>
            <li>厨房用品</li>
            <li>户外工具</li>
            <li>卧室睡眠</li>
            <li>步行运动</li>
        </ul>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                cateNormal: true,
                cateIndex: false
            }
        },
        computed: {
            showcate: function () {
                return this.$store.state.cateStyle
            }
        },
         beforeCreate: function(){console.log('xxxx')},
        created: function(){console.log('yyyy')},
        mounted:function(){console.log('oooo')},
        beforeMount: function () {
            console.log('zzzz')
        }
    }
</script>
<style>
    .left-cate {
        position: absolute;
        right: 85%;
        z-index: 9999;
    }
    .left-cate ul {
        padding-left: 0px;
        margin-bottom: 0px;
        width: 120px;
        border: 4px solid #fd9e65;
        background-color: #fff;
        margin: 45px 0 0 45px;
    }
    .left-cate li {
        list-style: none;
        height: 40px;
        line-height: 40px;
        border-bottom: 1px solid #afafaf;
        width: 100%;
        text-align: center;
    }
</style>