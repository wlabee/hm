<template>
    <div id="app">
        <mheader></mheader>
        <menux></menux>
        <p>{{sayhello}}</p>
        <router-view></router-view>
        <mfooter></mfooter>
    </div>
</template>
<script>
import mheader from './layouts/Mheader'
import menux from './layouts/Mmenu'
import mfooter from './layouts/Mfooter'
    export default {
        data() {
          return {
            sayhello: 'hello word'
          }
        },
        components: {mheader, menux, mfooter}
    }
</script>