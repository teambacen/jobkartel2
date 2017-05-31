<template lang="html">
  <div class="col-md-12">
    <br>
    <h1 class="text-center">Ebook</h1>
    <div class="col-xs-12 col-md-4 pre">
      <img src="../../../images/EBOOK-FREE1.png" alt="" class="img-responsive">
      <center><h5 class="text-center label label-default">Free</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a href="/resume/default">DOWNLOAD</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 pre">
      <img src="../../../images/EBOOK-2.png" alt="" class="img-responsive">
      <center><h5 class="text-center label label-default">Free</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a href="/resume/default">DOWNLOAD</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 pre">
      <img src="../../../images/EBOOK-3.png" alt="" class="img-responsive">
      <center><h5 class="text-center label label-default">Free</h5></center>
      <div class="overlay"></div>
      <div class="button">
        <a href="/resume/default">DOWNLOAD</a>
      </div>

    </div>
    <div class="col-xs-12 col-md-4 pre">
      <img src="../../../images/EBOOK.png" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="#">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a href="/resume/default">DOWNLOAD</a>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 pre">
      <img src="../../../images/ebook-hire-me.png" alt="" class="img-responsive">
      <center><h5 class="text-center label label-success">Premium</h5></center>
      <div class="overlay"></div>
      <div class="button"><a href="#">Upgrade</a></div>
      <div class="button"  v-if="data.length >= 1">
        <a href="/resume/default">DOWNLOAD</a>
      </div>
    </div>
  </div>

</template>

<script>
import pdf from 'vue-pdf'

export default {
  props:[
    'data',
    'detail'
  ],
  components:{
    pdf
  }
}
</script>

<style lang="css">
</style>
