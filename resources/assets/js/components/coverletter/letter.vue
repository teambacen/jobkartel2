<template lang="html">
<div class="col-md-9 col-md-offset-1">
  <sweet-modal ref="success" icon="success">
    Terima Kasih, Tekan Next Untuk Langkah Seterusnya
  </sweet-modal>
  <sweet-modal ref="error" icon="error">
    Hi, Mungkin Data Yang Anda Masukkan Mempunyai Masalah Sila Cuba Lagi !
  </sweet-modal>
  <h3 class="text-center">My Cover Letter</h3>
  <!-- From -->
  <form class="" @submit.prevent="updateData" method="post" v-if="letters">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">From <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-3">
        <img v-if="avatar === null" src="../../../images/profile-27.png" alt="" class="center-block">
        <img v-if="avatar"  v-bind:src="'https://s3-us-west-2.amazonaws.com/tailor-buck/users/'+avatar" alt="" width="150px" height="180" class="center-block">
        <br>
        <sweet-modal ref="upload">
          <form  method="post" enctype="multipart/form-data" v-show="!loading">
            <div class="form-group">
              <input type="file" class="form-control" name="file[]" @change="uploadImage">
            </div>
            <h1 v-show="upload">Upload Successful</h1>
            <p v-show="upload">Please Refresh Ur Page</p>
          </form>
          <Spinner v-show="loading" size="large" message="Uploading..."></Spinner>
        </sweet-modal>
        <a class="center-block btn btn-jobkartel" @click="uploadModal">Upload Photo</a>
      </div>
      <div class="col-md-9">
          <div class="form-group col-sm-12">
            <label for="">Title Before</label>
            <input type="text" class="form-control" v-model="letters.from_before" value="">
            <input type="hidden" name="_method" value="PATCH">
          </div>
          <div class="form-group col-sm-6">
            <label for="">First Name</label>
            <input type="text" class="form-control" v-model="letters.from_first" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Last Name</label>
            <input type="text" class="form-control" v-model="letters.from_last" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" v-model="letters.from_phone" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Email Address</label>
            <input type="text" class="form-control" v-model="letters.from_email" value="">
          </div>
          <div class="col-sm-12">
            <label for="">Address</label>
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.from_street" value="" placeholder="Street Number">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.from_city" value="" placeholder="City">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.from_postal" value="" placeholder="Postal Code">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.from_state" value="" placeholder="State">
          </div>

      </div>
    </div>
  </div>
  <!-- To -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">To <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-12">
          <div class="form-group col-sm-4">
            <label for="">Title Before</label>
            <input type="text" class="form-control" v-model="letters.to_before" value="">
          </div>
          <div class="form-group col-sm-4">
            <label for="">First Name</label>
            <input type="text" class="form-control" v-model="letters.to_first" value="">
          </div>
          <div class="form-group col-sm-4">
            <label for="">Last Name</label>
            <input type="text" class="form-control" v-model="letters.to_last" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Company Name</label>
            <input type="text" class="form-control" v-model="letters.to_company" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Department</label>
            <input type="text" class="form-control" v-model="letters.to_department" value="">
          </div>
          <div class="col-sm-12">
            <label for="">Address</label>
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.to_street" placeholder="Street Number">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.to_city" placeholder="City">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.to_postal" placeholder="Postal Code">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letters.to_state" placeholder="State">
          </div>

      </div>
    </div>
  </div>
  <!-- Content -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">Content <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-12">
          <div class="form-group col-sm-6">
            <label for="">Subject</label>
            <input type="text" class="form-control" v-model="letters.content_subject">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Date</label>
            <input type="text" class="form-control" v-model="letters.content_date">
          </div>
          <div class="col-sm-12">
            <quill-editor v-model="letters.content_body"
                  :options="option"
                  ref="quillEditor">
            </quill-editor>
          </div>
          <div class="col-sm-3 col-sm-offset-9">
            <button type="submit" class="btn btn-jobkartel btn-lg btn-block">Update</button>
          </div>
      </div>
    </div>
  </div>
</form>
  <form class="" @submit.prevent="insertData" method="post" v-if="letters == null">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">From <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-12">
          <div class="form-group col-sm-12">
            <label for="">Title Before</label>
            <input type="text" class="form-control" v-model="letter.from_before" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">First Name</label>
            <input type="text" class="form-control" v-model="letter.from_first" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Last Name</label>
            <input type="text" class="form-control" v-model="letter.from_last" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" v-model="letter.from_phone" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Email Address</label>
            <input type="text" class="form-control" v-model="letter.from_email" value="">
          </div>
          <div class="col-sm-12">
            <label for="">Address</label>
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.from_street" value="" placeholder="Street Number">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.from_city" value="" placeholder="City">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.from_postal" value="" placeholder="Postal Code">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.from_state" value="" placeholder="State">
          </div>

      </div>
    </div>
  </div>
  <!-- To -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">To <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-12">
          <div class="form-group col-sm-4">
            <label for="">Title Before</label>
            <input type="text" class="form-control" v-model="letter.to_before" value="">
          </div>
          <div class="form-group col-sm-4">
            <label for="">First Name</label>
            <input type="text" class="form-control" v-model="letter.to_first" value="">
          </div>
          <div class="form-group col-sm-4">
            <label for="">Last Name</label>
            <input type="text" class="form-control" v-model="letter.to_last" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Company Name</label>
            <input type="text" class="form-control" v-model="letter.to_company" value="">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Department</label>
            <input type="text" class="form-control" v-model="letter.to_department" value="">
          </div>
          <div class="col-sm-12">
            <label for="">Address</label>
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.to_street" placeholder="Street Number">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.to_city" placeholder="City">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.to_postal" placeholder="Postal Code">
          </div>
          <div class="form-group col-sm-6">
            <input type="text" class="form-control" v-model="letter.to_state" placeholder="State">
          </div>

      </div>
    </div>
  </div>
  <!-- Content -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="text-center tajuk-panel">Content <i class="fa fa-pencil" aria-hidden="true"></i></h4>
    </div>
    <div class="panel-body">
      <div class="col-md-12">
          <div class="form-group col-sm-6">
            <label for="">Subject</label>
            <input type="text" class="form-control" v-model="letter.content_subject">
          </div>
          <div class="form-group col-sm-6">
            <label for="">Date</label>
            <input type="text" class="form-control" v-model="letter.content_date">
          </div>
          <div class="col-sm-12">
            <quill-editor v-model="letter.content_body"
                  :options="option"
                  ref="quillEditor">
            </quill-editor>
          </div>
          <div class="col-sm-3 col-sm-offset-9">
            <button type="submit" class="btn btn-jobkartel btn-lg btn-block">Save</button>
          </div>
      </div>
    </div>
  </div>
</form>
</div>
</template>

<script>
import { quillEditor } from 'vue-quill-editor'
import axios from 'axios';
import FileUpload from 'vue-upload-component'
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'
import Spinner from 'vue-simple-spinner'

export default {
  data: function() {
    return {
      letter: {
        from_before: '',
        from_first: '',
        from_last: '',
        from_phone: '',
        from_email: '',
        from_street: '',
        from_city: '',
        from_postal: '',
        from_state: '',
        to_before: '',
        to_first: '',
        to_last: '',
        to_company: '',
        to_department: '',
        to_street: '',
        to_city: '',
        to_postal: '',
        to_state: '',
        content_subject: '',
        content_body: '',
        content_date: ''
      },
      letters: {
        from_before: null,
        from_first: null,
        from_last: null,
        from_phone: null,
        from_email: null,
        from_street: null,
        from_city: null,
        from_postal: null,
        from_state: null,
        to_before: null,
        to_first: null,
        to_last: null,
        to_company: null,
        to_department: null,
        to_street: null,
        to_city: null,
        to_postal: null,
        to_state: null,
        content_subject: null,
        content_body: null,
        content_date: null
      },
      content: '',
      upload: false,
      next: false,
      loading: false,
      loadingForm: false,
      avatar: '',
      option: {
        readOnly: false,
        modules: {
          toolbar: [
            ['bold','italic','underline','strike'],
            [{'align': [] }, { 'list': 'ordered' }, {'list': 'bullet'}]
          ]
        }
      }
    }
  },
  components: {
    quillEditor,
    FileUpload,
    SweetModal,
		SweetModalTab,
    Spinner
  },
  methods:{
    uploadModal: function(){
      this.$refs.upload.open();
    },
    uploadImage: function(e){
      var image = new Image()
      let vm = this
      let avatar = this.avatar
      var files = e.target.files || e.dataTransfer.files;
      let formData = new FormData()
      this.loading = true
      formData.append('gambar', files[0])

      if (!files.length)
        return;
      console.log(files[0])
      axios.post('/testpost', formData).then(function(res){
        avatar = res.data
        vm.upload = true
        vm.loading=false
        console.log(res)
      }, function(res){
        console.log(res)
      })
    },
    insertData: function(){
      let letter = this.letter
      let vm = this
      axios.post('/letter/info', letter).then(function(res){
        vm.$refs.success.open();
        console.log(res)
      }, function(error){
        vm.$refs.error.open();
        console.log(error)
      })
    },
    updateData: function(){
      let vm = this
      let letters = this.letters
      axios.patch('/letter/dat', letters).then(function(response){
        vm.$refs.success.open();
        console.log(response)
      }, function(error){
        vm.$refs.error.open();
        console.log(error)
      })
    }
  },
  mounted(){
    let vm = this
    axios.get('/letter/data').then(function(response){
      vm.letters =  response.data
      console.log(response)
    })
    axios.get('/user/avatar').then(function(response){
      vm.avatar = response.data.gambar
      console.log(response.data.gambar)
    })
  }
}
</script>

<style lang="css">
</style>
