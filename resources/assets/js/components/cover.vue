<template lang="html">
  <div class="container-fluid dashboard-fluid">
    <div class="col-xs-12 col-md-2 sidebar-baru">
      <div class="sidebar-menu collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav">
          <li><router-link to="/">Select Template</router-link></li>
          <li><router-link to="/letter">Create Cover Letter</router-link></li>
          <li><router-link to="/tutorial">How To Write Your Cover Letter</router-link></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-md-10 col-md-offset-2">
      <router-view name="letter" :data="data" :detail="detail"></router-view>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'data',
    'detail'
  ],
}
</script>

<style lang="css">
</style>
