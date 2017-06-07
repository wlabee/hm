<template>
    <div class="left-cate" :class="[showcate,catett]">
        <ul>
            <li v-for="(item, index) in items" :class="catestyle(item.id)">
                <router-link :to="{path: '/cate/' + item.id}">{{ item.cat_name }}</router-link>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                cateNormal: true,
                cateIndex: false,
                items: [
                    {
                        id: 1,
                        cat_name: '小编精选'
                    },
                    {
                        id: 2,
                        cat_name: '厨房用品'
                    },
                    {
                        id: 3,
                        cat_name: '户外工具'
                    },
                    {
                        id: 4,
                        cat_name: '卧室睡眠'
                    },
                    {
                        id: 5,
                        cat_name: '步行运动'
                    }
                ]
            }
        },
        computed: {
            showcate: function () {
                return this.$store.state.cateStyle
            },
            catett: function () {
                if (this.$store.state.cateIndex == 0) {
                    return 'cate-tt1';
                }
                return '';
            }
        },
        methods:{
            catestyle: function(id) {
                console.log(this.$store.state.cateIndex)
                if (this.$store.state.cateIndex == id) {
                    return 'on-active';
                }
            }
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
    .left-cate li.on-active {
        background-color: #fd9e65;
        background: url(/images/hm_tt2.png) no-repeat -44px;
    }
</style>