<template lang="">
  <div>
    <h1 class="text-2xl mt-10">Users</h1>
    <Nav />
  </div>
  <div style="margin-top:400px">
    <p>Current time is {{time}}</p>
    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
  </div>
</template>
<script>
import Nav from '../Shared/Nav.vue';
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props:{
    time : String,
  },
  components: { Nav, Link },
};
</script>
<style lang=""></style>
