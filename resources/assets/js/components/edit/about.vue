<template lang="html">
 <div class="col-md-8 col-md-offset-1 ">
   <h3 class="text-center">My CV</h3>
   <div class="panel panel-default">
     <div class="panel-heading">
       <h4 class="text-center tajuk-panel">Personal Info <i class="fa fa-pencil" aria-hidden="true"></i></h4>
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
         <sweet-modal ref="success" icon="success">
           Terima Kasih, Tekan Next Untuk Langkah Seterusnya
         </sweet-modal>
         <sweet-modal ref="error" icon="error">
           Hi, Mungkin Data Yang Anda Masukkan Mempunyai Masalah Sila Cuba Lagi !
         </sweet-modal>
         <form @submit.prevent="detailInsert" method="post" v-if="details == null">
           <div class="form-group col-sm-6">
             <label for="first">First Name</label>
             <input type="text" name="first" class="form-control" v-model="detail.first" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Last Name</label>
             <input type="text" name="last" class="form-control" v-model="detail.last" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Date Of Birth</label>
             <input type="text" name="first" class="form-control" v-model="detail.dob" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Nationality</label>
             <input type="text" name="last" class="form-control" v-model="detail.nationality" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Phone Number</label>
             <input type="text" name="first" class="form-control" v-model="detail.phone" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Email Address</label>
             <input type="text" name="last" class="form-control" v-model="detail.email" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Address</label>
             <input type="text" name="last" class="form-control" v-model="detail.address" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">City</label>
             <input type="text" name="last" class="form-control" v-model="detail.city" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">Postal Code</label>
             <input type="text" name="last" class="form-control" v-model="detail.postal" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">State</label>
             <select class="form-control"  v-model="detail.country">
               <option value="Sabah">Sabah</option>
               <option value="Sarawak">Sarawak</option>
               <option value="Selangor">Selangor</option>
               <option value="Penang">Penang</option>
               <option value="Perak">Perak</option>
               <option value="Kelantan">Kelantan</option>
               <option value="Johor">Johor</option>
               <option value="Terengganu">Terengganu</option>
               <option value="Kedah">Kedah</option>
               <option value="Negeri Sembilan">Negeri Sembilan</option>
               <option value="Perlis">Perlis</option>
               <option value="Pahang">Pahang</option>
               <option value="Melaka">Melaka</option>
             </select>
           </div>
           <div class="form-group col-sm-12">
             <label for="position">Position</label>
             <input type="text" class="form-control" v-model="detail.position" equired>
           </div>
           <div class="form-group col-sm-12">
             <label for="">Career Summary</label>
             <textarea name="name" rows="8" cols="80" class="form-control" v-model="detail.description" required></textarea>
           </div>
           <div class="col-sm-3 col-sm-offset-6">
              <router-link to="/experience" class="btn btn-success btn-block" v-show="next">Next</router-link>
           </div>
          <div class="col-sm-3 ">
             <button type="submit" class="btn btn-jobkartel btn-block" name="button">Save</button>
          </div>
         </form>
         <!--form for update if detail not null-->
         <form @submit.prevent="detailUpdate" method="post" v-if="details" >
           <div class="form-group col-sm-6">
             <label for="first">First Name</label>
             <input type="text" name="first" class="form-control" v-model="details.first" required>
             <input type="hidden" name="_method" value="PATCH">
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Last Name</label>
             <input type="text" name="last" class="form-control" v-model="details.last" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Date Of Birth</label>
             <input type="text" name="first" class="form-control" v-model="details.dob" required placeholder="Eg: 13 April 1996">
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Nationality</label>
             <input type="text" name="last" class="form-control" v-model="details.nationality" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Phone Number</label>
             <input type="text" name="first" class="form-control" v-model="details.phone" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Email Address</label>
             <input type="text" name="last" class="form-control" v-model="details.email" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="first">Address</label>
             <input type="text" name="last" class="form-control" v-model="details.address" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">City</label>
             <input type="text" name="last" class="form-control" v-model="details.city" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">Postal Code</label>
             <input type="text" name="last" class="form-control" v-model="details.postal" required>
           </div>
           <div class="form-group col-sm-6">
             <label for="">State</label>
             <select class="form-control"  v-model="details.country" required>
               <option value="">State</option>
               <option value="Sabah">Sabah</option>
               <option value="Sarawak">Sarawak</option>
               <option value="Selangor">Selangor</option>
               <option value="Penang">Penang</option>
               <option value="Perak">Perak</option>
               <option value="Kelantan">Kelantan</option>
               <option value="Johor">Johor</option>
               <option value="Terengganu">Terengganu</option>
               <option value="Kedah">Kedah</option>
               <option value="Negeri Sembilan">Negeri Sembilan</option>
               <option value="Perlis">Perlis</option>
               <option value="Pahang">Pahang</option>
               <option value="Melaka">Melaka</option>
             </select>
           </div>
           <div class="form-group col-sm-12">
             <label for="position">Position</label>
             <input type="text" class="form-control" v-model="details.position" required>
           </div>
           <div class="form-group col-sm-12">
             <label for="">Career Summary</label>
             <textarea name="name" rows="8" cols="80" class="form-control" v-model="details.description" required></textarea>
           </div>
           <div class="col-sm-3 col-sm-offset-6">
              <router-link to="/experience" class="btn btn-success btn-block">Next</router-link>
           </div>
          <div class="col-sm-3 ">
             <button type="submit" class="btn btn-jobkartel btn-block" name="button">Save</button>
          </div>
         </form>

       </div>
     </div>
   </div>
 </div>
</template>

<script>
import axios from 'axios';
import FileUpload from 'vue-upload-component'
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'
import Spinner from 'vue-simple-spinner'
export default {
  data: function(){
    return {
      avatar:'',
      detail: {
        first: '',
        last: '',
        dob: '',
        nationality: '',
        phone: '',
        email: '',
        adrress: '',
        city: '',
        postal: '',
        country: '',
        description: 'Isi ruangan ini dengan ringkasan perjalanan karier anda dan pengalaman anda mengikut bidang pekerjaan yang anda mohon.Pastikan ringkasan anda tidak melebihi 5 baris.',
        position: '',
      },
      details: {
        first: null,
        last: null,
        dob: null,
        nationality: null,
        phone: null,
        email: null,
        adrress: null,
        city: null,
        postal: null,
        country: null,
        description: null,
        position: null,
      },
      upload: false,
      next: false,
      loading: false,
      loadingForm: false
    }
  },
  components: {
    FileUpload,
    SweetModal,
		SweetModalTab,
    Spinner
  },
  methods: {
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
    detailInsert: function() {
      let detail = this.detail
      let vm = this

      axios.post('/detail', detail).then(function(response){
        vm.$refs.success.open();
        vm.next = true
      }, function(response){
        vm.$refs.error.open();
      })

    },
    detailUpdate: function() {
      let vm = this
      let details = this.details
      axios.patch('/update/detail', details).then(function(response){
        vm.$refs.success.open();
      }, function(response){
        vm.$refs.error.open();
      })
    }

  },
  mounted(){
    let vm = this
    axios.get('/user/detail').then(function(response){
      vm.details = response.data[0]
    }, function(response){
      console.log(response)
    })
    axios.get('/user/avatar').then(function(response){
      vm.avatar = response.data.gambar
      console.log(response.data.gambar)
    })
    console.log(vm.details)
  }
}
</script>

<style lang="css">
.tajuk-panel{
  color: #fff;
}
</style>
