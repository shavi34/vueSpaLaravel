<template lang="">
  <div class="mt-5">
    <nav>
      <ul class="list-disc">
        <li><Link class="text-blue-500 hover:underline" href="/">Home</Link></li>
        <li><Link class="text-blue-500 hover:underline" href="/users">Users</Link></li>
        <li><Link class="text-blue-500 hover:underline" href="/settings">Settings</Link></li>
        <li><Link class="text-blue-500 hover:underline" href="/logout" :data="{foo: 'bar'}" method="post" as="button">Logout</Link></li>
      </ul>
    </nav>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    Link
  }
};
</script>
<style lang=""></style>
