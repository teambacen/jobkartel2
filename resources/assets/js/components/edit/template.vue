<template lang="html">

  <div class="col-md-12">
    <br><br>
    <div v-if="auth.status === 0" class="alert alert-danger">
        Please Verify Your Email, Check Your Email. <a href="/verify/request">Resend Verification</a>
    </div>
    <h1 class="text-center">Pilih Template Resume Anda</h1>
    <div class="col-xs-12 col-md-3 pre">
      <sweet-modal ref="color" title="Select Color">
        <form>
          <input type="hidden" name="" value="">
          <select class="form-control" v-model="colour.color">
            <option value="">Select Color</option>
            <option value="grey">Grey</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="red">Red</option>
          </select><br>
          <a v-bind:href="url" v-show="select">Download</a>
        </form>
      </sweet-modal>
      <sweet-modal ref="preview" title="Preview">
        <iframe v-bind:src="view" width="100%" height="800px" style="border: 0px solid transparent;"></iframe>
      </sweet-modal>
      <img src="http://www.jobkartel.com/image/resume-21.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-default">Free</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a @click="previewPDF('default')"  v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="openModal('free')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-02.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a @click="previewPDF('resume1')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="previewPDF('resume1')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a @click="openModal('resume1')" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-03.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a href="/offer" target="_blank">Upgrade</a>
      </div>
      <div class="button"  v-if="data.length >= 1">
        <a @click="previewPDF('resume2')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="previewPDF('resume2')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="/resume/generate/resume2" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-04.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a @click="previewPDF('resume3')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="previewPDF('resume3')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="/resume/generate/resume3" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-05.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a @click="previewPDF('resume4')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="previewPDF('resume4')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="/resume/generate/resume4" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-06.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="/offer" target="_blank">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a @click="previewPDF('resume5')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2">
        <a @click="previewPDF('resume5')" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="/resume/generate/resume5" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-07.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="#">Coming Soon</a></div>
      <!--<div class="button" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div> -->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-08.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="">Coming Soon</a></div>
  <!--    <div class="button" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div> -->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-09.jpg" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a href="">Coming Soon</a>
      </div>
    <!--  <div class="button" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div> -->
    </div>
    <div class="col-xs-12 col-md-3 pre">
      <img src="http://www.jobkartel.com/image/resume-10.jpg" alt="" class="img-responsive">
      <center><h5 class=" label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="" target="_blank">Coming Soon</a></div>
    <!--  <div class="button" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Preview</a>
        <router-link to="/about" v-if="detail.length === 0">Preview</router-link>
      </div>
      <div class="button2" v-if="data.length >= 1">
        <a href="#" v-if="detail.length === 1 ">Generate</a>
        <router-link to="/about" v-if="detail.length === 0">Generate</router-link>
      </div>-->
    </div>

  </div>
</template>

<script>
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'
import axios from 'axios';
export default {
  props:[
    'data',
    'detail',
    'auth'
  ],
  data: function(){
    return {
      colour: {
        color: ''
      },
      resume: '',
      type: '',
      select: false,
      view: '',
    }
  },
  mounted(){
    console.log(this.data)
  },
  computed:{
    url: function(type){
      if(this.colour.color === ""){
        this.select = false
      }else{
        this.select = true
      }
      return '/resume/color/'+this.type+'/'+ this.colour.color
    }
  },
  methods: {
    openModal: function(type){
      this.type = type
      this.$refs.color.open();
    },
    requestPDF: function(){
      var color = this.colour
      axios.get('/resume/color/free/test').then(function(res){
        console.log(res)
      })
    },
    previewPDF: function(type){
      this.view = '/resume/preview/'+type
      this.$refs.preview.open();
    }
  },
  components:{
    SweetModal,
    SweetModalTab
  }
}
</script>

<style lang="css">
.pre{
  margin-bottom: 20px;
}
.overlay{
  position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   color: #FFF;
   background: rgba(0, 0, 0, 0);
   transition: background 0.5s ease;
}
.pre:hover .overlay {
  display: block;
  background: rgba(0, 0, 0, .3);
}
.title {
  position: absolute;
  width: 500px;
  left: 0;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
}

.pre:hover .title {
  top: 90px;
}
.button {
  position: absolute;
  width: 100%;
  left:0;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}
.button a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: black;
  background-color: #F8CC0E;
  z-index: 1;
  border-radius: 10px;
}

.pre:hover .button {
  opacity: 1;
}
.button2 {
  position: absolute;
  width: 100%;
  left:0;
  top: 125px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}
.button2 a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: black;
  background-color: #F8CC0E;
  z-index: 1;
  border-radius: 10px;
}

.pre:hover .button2 {
  opacity: 1;
}

.sweet-modal .sweet-title h2{
  padding: 22px !important;
}
</style>
