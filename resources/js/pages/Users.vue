<template>
  <Head title="Users" />  
  <h1 class="text-2xl mt-10">Users</h1>
  <div style="margin-top:400px">
    <p>Current time is {{time}}</p>
    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
  </div>
</template>
<script>
import Layout from '../Shared/Layout.vue';
export default {
  layout: Layout,
  props:{
    time : String,
  },
  components: { Layout },
};
</script>