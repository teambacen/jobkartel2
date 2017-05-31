<template lang="html">
  <div class="col-md-8 col-md-offset-1">
    <!--Modal -->
      <sweet-modal ref="success" icon="success">
        Terima Kasih, Tekan Next Untuk Langkah Seterusnya
      </sweet-modal>
      <sweet-modal ref="error" icon="error">
        Hi, Mungkin Data Yang Anda Masukkan Mempunyai Masalah Sila Cuba Lagi !
      </sweet-modal>
      <sweet-modal ref="successUpdate" icon="success">
        Kemaskini Berjaya
      </sweet-modal>
      <sweet-modal ref="errorUpdate" icon="error">
        Kemaskini Tidak Berjaya
      </sweet-modal>
      <sweet-modal ref="successDelete" icon="success">
        DiPadam
      </sweet-modal>
      <sweet-modal ref="errorDelete" icon="error">
        Kami Mengalami Masalah , Sila Cuba Lgai
      </sweet-modal>
    <!--End Modal -->

    <h3 class="text-center">My CV</h3>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center tajuk-panel">Skill <i class="fa fa-pencil" aria-hidden="true"></i></h4>
      </div>
      <div class="panel-body">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked">
            <li><a @click="edit = false">Add New</a></li>
          </ul>
          <ul class="nav nav-pills nav-stacked"  v-for="(exp, key) in skills">
            <li><a @click="skillClick(exp.id)">Experience #{{ key }}</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <form @submit="skillInsert" method="post" v-if="edit === false">

            <div class="col-sm-12">
              <div class="form-group col-sm-6">
                <label for="">Skill Name</label>
                <input type="text" class="form-control" v-model="skill.skil" required placeholder="Eg: Microsoft Office">
              </div>
              <div class="form-group col-sm-6">
                <label for="">Skill Level</label>
                <select class="form-control" name="" v-model="skill.level" required="">
                  <option value="">Select</option>
                  <option value="1">
                    1 / 5
                  </option>
                  <option value="2">
                    2 / 5
                  </option>
                  <option value="3">
                    3 / 5
                  </option>
                  <option value="4">
                    4 / 5
                  </option>
                  <option value="5">
                    5 / 5
                  </option>
                </select>
              </div>
            </div>

            <div class="col-sm-3 col-sm-offset-6">
               <router-link to="/language" class="btn btn-success btn-block" v-show="next" v-if="data.length >= 1">Next</router-link>
               <router-link to="/" class="btn btn-success btn-block" v-show="next" v-if="data.length >= 0">Finish</router-link>
            </div>
            <br>
           <div class="col-sm-3 ">
              <button type="submit" class="btn btn-jobkartel btn-block" name="button">Save</button>
           </div>
          </form>
          <!--Update-->
          <form @submit="skillUpdate(edits.id)" method="post" v-show="edit">
            <div class="col-sm-12">
              <div class="form-group col-sm-6">
                <label for="">Skill Name</label>
                <input type="text" class="form-control" v-model="edits.skil" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="">Skill Level</label>
                <select class="form-control" name="" v-model="edits.level" required="">
                  <option value="1">
                    1 / 5
                  </option>
                  <option value="2">
                    2 / 5
                  </option>
                  <option value="3">
                    3 / 5
                  </option>
                  <option value="4">
                    4 / 5
                  </option>
                  <option value="5">
                    5 / 5
                  </option>
                </select>
              </div>
            </div>

            <div class="col-sm-3 col-sm-offset-3">
               <router-link to="/language" class="btn btn-success btn-block" v-if="data.length >= 1">Next</router-link>
               <router-link to="/" class="btn btn-success btn-block" v-if="data.length >= 0">Finish</router-link>
            </div>
            <div class="col-sm-3 ">
              <a @click="skillDelete(edits.id)" class="btn btn-danger btn-block">Delete</a>
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
import axios from 'axios'
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'
export default {

  data: function() {
    return {
      skill: {
        skil: '',
        level: '',
        category: 'aaa',
      },
      edits:{
        id: '',
        skil: '',
        level: '',
        category: 'aaa',
      },
      skills:[],
      edit: false,
      id: null,
      next:false,
    }
  },
  props: [
    'data',
    'detail'
  ],
  methods:{
    start () {
      this.$Progress.start()
    },
    skillInsert: function() {
      let skill = this.skill
      let vm = this

      axios.post('/skill', skill).then(function(response) {
        vm.$refs.success.open()
        vm.next = true
      }, function(response){
        vm.$refs.error.open()
      })
    },
    skillClick: function(id){
      let vm = this
      vm.edit = true
      axios.get('/user/skill/'+id).then(function(response){
        vm.edits = response.data
        console.log(response)
      }, function(response){
        console.log(response)
      })
    },
    skillUpdate: function(id){
      let edits = this.edits
      let vm = this
      axios.patch('/update/skill/'+id, edits).then(function(response){
        vm.$refs.successUpdate.open()
      }, function(response){
        vm.$refs.errorUpdate.open()
      })
      console.log(id)
    },
    skillDelete: function(id){
      let vm = this
      axios.get('/delete/skill/'+id).then(function(response){
        vm.$refs.successDelete.open()
      },function(response){
        vm.$refs.errorDelete.open()
      })
    }
  },
  components: {
    SweetModal,
		SweetModalTab
  },
  mounted(){
    let vm = this
    axios.get('/user/skill').then(function(response){
      vm.skills = response.data
      console.log(response.data)
    }, function(response){
      console.log(response)
    })
  }
}
</script>

<style lang="css">
.stack{
  padding: 0px;
  margin-top:22px;
}
.stack li {
  list-style: none;
  margin-bottom: 24px;
}
.stack li > a{
  text-decoration: none;
  width: 100px;
  height: 50px;
  background: #BFBFBF;
  padding-left: 9px;
  padding-right: 75px;
  padding-top: 11px;
  padding-bottom: 12px;
  color:#000;
}
</style>
