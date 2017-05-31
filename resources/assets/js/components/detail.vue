<template>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <form @submit.prevent="detailInsert" method="post" v-if="de">
          <h1>Personal Detail</h1>
          <div class="form-group">
            <input type="text" class="form-control" v-model="detail.first" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" v-model="detail.last" placeholder="Last Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" v-model="detail.position" placeholder="Position">
          </div>
          <div class="form-group">
            <textarea name="name" class="form-control" v-model="detail.description" placeholder="Description"></textarea>
          </div>
          <div class="form-group">
            <input type="file">
          </div>
          <button type="submit" class="btn btn-primary">Save</button>

        </form>
        <br>
        <transition name="fade">
          <form @submit.prevent="contactInsert"  method="post" v-if="con">
            <h1>Contact Info</h1>
            <div class="form-group">
              <input type="text" v-model="contact.phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
              <input type="email" v-model="contact.email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" v-model="contact.web" class="form-control" placeholder="Website">
            </div>
            <div class="form-group">
              <textarea v-model="contact.address" class="form-control" placeholder="Address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </transition>

        <form @submit.prevent="workInsert" method="post" v-show="wok">
          <div class="form-group">
            <input type="text" v-model="work.position" class="form-control" placeholder="Position">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.company" class="form-control" placeholder="Company">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.start_year" class="form-control" placeholder="Start Year">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.end_year" class="form-control" placeholder="End Year">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.city" class="form-control" placeholder="City">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.state" class="form-control" placeholder="State">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.work_description" class="form-control" placeholder="Work Description">
          </div>
          <div class="form-group">
            <input type="text" v-model="work.industry" class="form-control" placeholder="Industry">
          </div>
          <button type="submit" name="button" class="btn btn-primary">Add</button>
          <button name="button" class="btn btn-success">Next</button>
        </form>
        <form @submit.prevent="educationInsert" v-show="edu">
          <div class="form-group">
            <input type="text" placeholder="Institute" v-model="education.institute" class="form-control" />
          </div>
          <div class="form-group">
            <input type="text" placeholder="Qualification" v-model="education.qualification" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Grade Year" v-model="education.graduate_year" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="CGPA" v-model="education.grade" class="form-control">
          </div>
          <button name="submit" class="btn btn-success">Next</button>
        </form>
        <form @submit="skillInsert" v-show="ski">
            <div class="form-group">
              <input type="text" placeholder="Skill" v-model="skill.ski" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Level" v-model="skill.level" class="form-control">
            </div>
            <button name="submit" class="btn btn-success">Finish</button>

        </form>
        <div class="alert alert-succes" v-if="message != '' ">
          {{ message }}
        </div>
      </div>
    </div>
  </div>
</template>
<script type="text/javascript">
  import axios from 'axios';
  export default {
    data: function() {
      return {
        detail: {
          first: '',
          last: '',
          position: '',
          description: '',
          default: '',

        },
        contact: {
          phone: '',
          email: '',
          web: '',
          address: '',
        },
        work: {
          position: '',
          company: '',
          start_year: '',
          end_year: '',
          city: '',
          state: '',
          work_description: '',
          industry: ''
        },
        education: {
          institute: '',
          qualification: '',
          graduate_year: '',
          grade: ''
        },
        skill: {
          skil: '',
          level: ''
        },

        status: 0,
        de: true,
        con: false,
        edu: false,
        wok: false,
        ski: false,
        message: ''



     }
    },
    methods: {
      detailInsert: function() {
        let detail = this.detail
        let vm = this

        axios.post('detail', detail).then(function(response){
           vm.de = false
           vm.con = true
        }, function(response){
          console.log(response)
        })

      },
      contactInsert: function() {
        let contact = this.contact
        let vm = this

        axios.post('contact', contact).then(function(response) {
          vm.con = false
          vm.wok = true
        }, function(response){
          console.log(response)
        })
      },
      educationInsert: function() {
        let education = this.education
        let vm = this

        axios.post('education', education).then(function(response) {
          vm.edu = false
          vm.ski = true
        }, function(response){
          console.log(response)
        })
      },
      workInsert: function() {
        let work = this.work
        let vm = this

        axios.post('work', work).then(function(response) {
          vm.wok = false
          vm.edu = true
        }, function(response){
          console.log(response)
        })
      },
      skillInsert: function() {
        let skill = this.skill
        let vm = this

        axios.post('skill', skill).then(function(response) {
          vm.ski = false
          vm.message = "Thank You For Ur Detail"
        }, function(response){
          console.log(response)
        })
      },

    },
    mounted() {
      console.log(status)
    }
  }

</script>
<style media="screen">
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0
}

</style>
