<template lang="">
  <div class="">
    <nav>
      <ul class="flex space-x-6">
        <li><NavLink href="/" :active="$page.component==='Home'">Home</NavLink></li>
        <li><NavLink  href="/users" :active="$page.component==='Users'">Users</NavLink></li>
        <li><NavLink  href="/settings" :active="$page.component==='Settings'">Settings</NavLink></li>
        <li><NavLink  href="/logout" :data="{foo: 'bar'}" method="post" as="button">Logout</NavLink></li>
      </ul>
    </nav>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import NavLink from "./NavLink.vue"
export default {
  components: {
    Link, NavLink
  }
};
</script>
<style lang=""></style>
