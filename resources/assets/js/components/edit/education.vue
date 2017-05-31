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
        <h4 class="text-center tajuk-panel">Education <i class="fa fa-pencil" aria-hidden="true"></i></h4>
      </div>
      <div class="panel-body">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked">
            <li><a @click="edit = false">Add New</a></li>
          </ul>
          <ul class="nav nav-pills nav-stacked"  v-for="(exp, key) in educations">
            <li><a @click="eduClick(exp.id)">Experience #{{ key }}</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <form @submit.prevent="eduInsert" method="post" v-if="edit === false">
            <div class="form-group col-sm-6">
              <label for="">Institution</label>
              <input type="text" class="form-control" v-model="education.institute" required>
            </div>
            <div class="form-group col-sm-6">
              <label for="">Field Of Study</label>
              <input type="text" class="form-control" v-model="education.qualification" required placeholder="Diploma In Programming">
            </div>
            <div class="form-group col-sm-6">
              <label for="">State</label>
              <select class="form-control"  v-model="education.state" required>
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
            <div class="form-group col-sm-6">
              <label for="">City</label>
              <input type="text" class="form-control" v-model="education.city" required>
            </div>
            <div class="eh">
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="education.start_month" required>
                    <option value="">Start Month</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Jun">Jun</option>
                    <option value="Julai">Julai</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
              </div>
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="education.start_year" required>
                    <option value="">Start Year</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>
              </div>
            </div>
            <div class="eh">
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="education.graduate_month" required>
                    <option value="">End Month</option>
                    <option value="Present">Present</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Jun">Jun</option>
                    <option value="Julai">Julai</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
              </div>
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="education.graduate_year" required>
                    <option value="">End Year</option>
                    <option value="Present">Present</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>
              </div>
            </div>
            <div class="col-sm-3 col-sm-offset-6">
               <router-link to="/language" class="btn btn-success btn-block" v-show="next">Next</router-link>
            </div>
            <br>
           <div class="col-sm-3 ">
              <button type="submit" class="btn btn-jobkartel btn-block" name="button">Save</button>
           </div>
          </form>
          <!-- Edit -->
          <form @submit.prevent="eduUpdate(edits.id)" method="post" v-show="edit">
            <div class="form-group col-sm-6">
              <label for="">Institution</label>
              <input type="text" class="form-control" v-model="edits.institute" required>
            </div>
            <div class="form-group col-sm-6">
              <label for="">Field Of Study</label>
              <input type="text" class="form-control" v-model="edits.qualification" required>
            </div>
            <div class="form-group col-sm-6">
              <label for="">State</label>
              <select class="form-control"  v-model="edits.state" required>
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
            <div class="form-group col-sm-6">
              <label for="">City</label>
              <input type="text" class="form-control" v-model="edits.city" required>
            </div>
            <div class="eh">
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="edits.start_month" required>
                    <option value="">Start Month</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Jun">Jun</option>
                    <option value="Julai">Julai</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
              </div>
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="edits.start_year" required>
                    <option value="">Start Year</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>
              </div>
            </div>
            <div class="eh">
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="edits.graduate_month" required>
                    <option value="">End Month</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Jun">Jun</option>
                    <option value="Julai">Julai</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
              </div>
              <div class="form-group col-sm-3">
                  <select class="form-control" name="" v-model="edits.graduate_year" required>
                    <option value="">End Year</option>
                    <option value="Present">Present</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>
              </div>
            </div>

            <div class="col-sm-3 col-sm-offset-3">
               <router-link to="/language" class="btn btn-success btn-block">Next</router-link>
            </div>
            <div class="col-sm-3 ">
              <a @click="eduDelete(edits.id)" class="btn btn-danger btn-block">Delete</a>
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
      education: {
        institute:'',
        qualification:'',
        graduate_year:'',
        graduate_month:'',
        start_year:'',
        start_month:'',
        description:'aaa',
        city:'',
        state:'',
        grade: 'takada'
      },
      edits:{
        id:'',
        institute:'',
        qualification:'',
        graduate_year:'',
        graduate_month:'',
        start_year:'',
        start_month:'',
        description:'aaa',
        city:'',
        state:'',
        grade: 'takada'
      },
      educations:[],
      edit: false,
      id: null,
      next:false
    }
  },
  methods:{
    start () {
      this.$Progress.start()
    },
    eduInsert: function() {
      let education = this.education
      let vm = this

      axios.post('/education', education).then(function(response) {
        vm.$refs.success.open()
        vm.next = true
      }, function(response){
        vm.$refs.error.open()
      })
    },
    eduClick: function(id){
      let vm = this
      vm.edit = true
      axios.get('/user/education/'+id).then(function(response){
        vm.edits = response.data
        console.log(response)
      }, function(response){
        console.log(response)
      })
    },
    eduUpdate: function(id){
      let edits = this.edits
      let vm = this
      axios.patch('/update/education/'+id, edits).then(function(response){
        vm.$refs.successUpdate.open()
      }, function(response){
        vm.$refs.errorUpdate.open()
      })
      console.log(id)
    },
    eduDelete: function(id){
      let vm = this
      axios.get('/delete/edu/'+id).then(function(response){
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
    axios.get('/user/education').then(function(response){
      vm.educations = response.data
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
