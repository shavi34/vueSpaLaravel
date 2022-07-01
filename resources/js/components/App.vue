<template lang="">
  <div class="container mx-auto">
    <header class="py-6">
      <h1>SPA</h1>
    </header>
    <main class="flex">
      <aside class="w-1/5">
        <section>
          <h5 class="uppercase font-bold mb-4">The Brand</h5>
          <ul class="list-reset">
            <li class="text-sm leading-loose">
              <router-link class="text-black" to="/">Home</router-link>
            </li>
            <li class="text-sm leading-loose">
              <router-link to="/about">About</router-link>
            </li>
          </ul>
        </section>
        <section>
          <h5 class="uppercase font-bold mb-4">Doodles</h5>
          <ul>
            <li class="text-sm leading-loose">
              <router-link class="text-black" to="/animation">Animation</router-link>
            </li>
            <li class="text-sm leading-loose">
              <router-link class="text-black" to="/sitestats">Global stats</router-link>
            </li>
            <li class="text-sm leading-loose">
              <router-link class="text-black" to="/">Home</router-link>
            </li>
            <li class="text-sm leading-loose">
              <router-link class="text-black" to="/">Home</router-link>
            </li>
          </ul>
        </section>
      </aside>
      <div class="primary flex-1">
        <router-view></router-view>
      </div>
    </main>
  </div>
</template>
<script>
export default {};
</script>
 
<div></div>
<style lang=""></style>
<div></div>
