<template lang="html">
  <div class="col-md-12">
    <h1 class="text-center">Pilih Template CoverLetter Anda</h1>
    <sweet-modal ref="color" title="Select Color">
        <select class="form-control" v-model="color">
          <option value="">Select Color</option>
          <option value="grey">Grey</option>
          <option value="yellow">Yellow</option>
          <option value="blue">Blue</option>
        </select>
        <a v-bind:href="url" v-show="select">Download</a>
    </sweet-modal>
    <sweet-modal ref="pdf" title="Preview">
      <iframe v-bind:src="view" width="100%" height="800px" style="border: 0px solid transparent;"></iframe>
    </sweet-modal>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-11.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-default">Free</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a @click="previewPDF('free')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColor('free')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-12.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button">
        <a @click="previewPDF('letter1')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColor('letter1')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-13.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button">
        <a @click="previewPDF('letter2')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColor('letter2')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-14.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button">
        <a @click="previewPDF('letter3')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColor('letter3')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-15.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button">
        <a @click="previewPDF('letter4')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColo('letter4')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-16.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button">
        <a @click="previewPDF('letter5')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="changeColor('letter5')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-17.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Coming Soon</a></div>
      <!--<div class="button"  v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-18.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Coming Soon</a></div>
      <!--<div class="button"  v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-19.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Coming Soon</a></div>
      <!--<div class="button"  v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-20.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Coming Soon</a></div>
      <!--<div class="button"  v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-21.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Coming Soon</a></div>
      <!--<div class="button"  v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/letter" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/letter" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>
  </div>
</template>

<script>
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'

export default {
  data: function(){
    return {
      view: '',
      color: '',
      select: false,
      type: ''
    }
  },
  props: [
    'data',
    'detail'
  ],
  components:{
    SweetModal,
    SweetModalTab,
  },
  methods: {
    changeColor: function(type){
      this.type = type
      this.$refs.color.open()
    },
    previewPDF: function(type){
      this.view = '/letter/preview/'+type
      this.$refs.pdf.open()
    }
  },
  computed: {
    url: function(){
      if(this.color === ""){
        this.select = false
      }else{
        this.select = true
      }
      return '/letter/generate/'+this.type
    }
  }
}
</script>

<style lang="css">

.sweet-modal .sweet-title h2{
  padding-left: 0px !important;
  padding: 22px !important;
}
</style>
