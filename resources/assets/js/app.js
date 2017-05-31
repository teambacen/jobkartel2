
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import vueResource from 'vue-resource'
import VueRouter from 'vue-router'
import TemplateDash from './components/edit/template.vue'
import About from './components/edit/about.vue'
import Experience from './components/edit/experience.vue'
import Skill from './components/edit/skill.vue'
import Award from './components/edit/award.vue'
import Language from './components/edit/language.vue'
import VueProgressBar from 'vue-progressbar'
import Education from './components/edit/education.vue'
import Ebook from './components/edit/ebook.vue'
import Cover from './components/cover.vue'
import Cindex from './components/coverletter/index.vue'
import Letter from './components/coverletter/letter.vue'
import VueQuillEditor from 'vue-quill-editor'
import Tutorial from './components/coverletter/tutorial.vue'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('detail', require('./components/detail.vue'));
Vue.component('edit-detail', require('./components/edit/detail.vue'));
Vue.component('dash', require('./components/dashboard.vue'));
Vue.component('cover', require('./components/cover.vue'));
Vue.component('harga', require('./components/page/harga.vue'));
Vue.component('welcome', require('./components/page/welcome.vue'));
Vue.use(vueResource)
Vue.use(VueRouter)
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})

const routes = [
  {
    path: '/',
    components: {
      default: TemplateDash,
      letter: Cindex
    }
  },
  {
    path: '/about',
    components: {
      default: About
    }
  },
  {
    path: '/experience',
    components: {
      default: Experience
    }
  },
  {
    path: '/skill',
    components: {
      default: Skill
    }
  },
  {
    path: '/award',
    components:{
      default: Award
    }
  },
  {
    path: '/language',
    components: {
      default: Language
    }
  },
  {
    path: '/education',
    components: {
      default: Education
    }
  },
  {
    path: '/ebook',
    components: {
      default: Ebook
    }
  },
  {
    path: '/letter',
    components: {
      letter: Letter
    }
  },
  {
    path: '/tutorial',
    components: {
      letter: Tutorial
    }
  }
]

const router = new VueRouter({
  routes
})

const app = new Vue({
    router
}).$mount('#app')
