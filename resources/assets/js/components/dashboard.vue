<template lang="html">
  <div class="container-fluid dashboard-fluid">
    <div class="col-xs-12 col-md-2 sidebar-baru">
      <div class="sidebar-menu collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav">
          <li><router-link to="/"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Select Template</router-link></li>
          <li><router-link to="/about"><i class="fa fa-briefcase" aria-hidden="true"></i> About Me</router-link></li>
          <li><router-link to="/experience"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Experience</router-link></li>
          <li><router-link to="/education"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</router-link></li>
          <li><router-link to="/skill"><i class="fa fa-sliders" aria-hidden="true"></i> Skills</router-link></li>
          <li><router-link to="/language" v-if="data.length >= 1"><i class="fa fa-flag" aria-hidden="true" ></i> Languages</router-link></li>
          <li><router-link to="/award" v-if="data.length >= 1"><i class="fa fa-sticky-note" aria-hidden="true" ></i> Achievements</router-link></li>
          <li><a href="#"  v-if="data.length === 0" @click="$refs.premium.open()" ><i class="fa fa-flag" aria-hidden="true" ></i> Languages <h5 class="text-center label label-success">Premium</h5></a></li>
          <li><a href="#" v-if="data.length === 0" @click="$refs.premium.open()"><i class="fa fa-sticky-note" aria-hidden="true" ></i> Achievements <h5 class="text-center label label-success">Premium</h5></a></li>
          <li><router-link to="/ebook"><i class="fa fa-book" aria-hidden="true"></i> Ebook</router-link></li>
          <li><a href="/affiliate" target="_blank">Affiliate</a></li>
        </ul>

      </div>
    </div>
    <div class="col-xs-12 col-md-10 col-md-offset-2">
      <sweet-modal ref="premium" icon="error">
         Hanya Untuk Langganan Premium Sahaja
      </sweet-modal>
      <router-view :data="data" :detail="detail" :auth="auth"></router-view>
      <vue-progress-bar></vue-progress-bar>
    </div>
  </div>
</template>

<script>
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'

export default {
  props: [
    'data',
    'detail',
    'auth'
  ],
  method:{
    start () {
      this.$Progress.start()
    },
    checkAccount(){
      if (this.data.length >= 1) {
        return true
      }else{
        return false
      }
    }
  },
  mounted(){
    console.log(this.checkAccount)
  },
  components: {
    SweetModal,
		SweetModalTab
  },
}
</script>

<style lang="css">
.dashboard-fluid{
  padding-left: 0px;
}
.sidebar-baru{
  position: fixed;
  padding-top: 65px;
  padding-left: 0px;
  padding-right: 0px;
  background-color: #F9F9F9;
  background-size: auto 100%;
  min-height: 100%;
  bottom: 0;
}
.sidebar-menu{
  padding-left:0px !important;
  width: 100% !important;
  padding-right: 0px !important;
}
.sidebar-menu .router-link-active{
  /*background-color: #FACE0E;*/
  color: #000;
  text-decoration: none;
  background: #F8CC0E;
}
.nav > li > a{
  color: #C5C5C6;
  padding: 20px 15px;
}
.nav > li > a:hover, .nav > li > a:focus{
  background: #F8CC0E;
  color: #000;
}
</style>
