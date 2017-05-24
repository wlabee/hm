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
        components: {mheader, menux, mfooter, leftcate}
    }
</script>