<template>
  <section class="p-6 bg-gray-200">
    <header class="flex justify-between"><h1 class="font-bold text-lg">My App</h1>
      <Nav />
    </header>
    <p>Welcome back {{$page.props.auth.username}}</p>
  </section>
  <section class="p-6">
    <div class="mx-auto">
      <slot />
    </div>
  </section>
</template>
<script>
import Nav from './Nav.vue';
export default {
  components: { Nav },
};
</script>
<style lang=""></style>
