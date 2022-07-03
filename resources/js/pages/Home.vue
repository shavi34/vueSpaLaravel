<template lang="">
  <div>Hi this is Inertia, My name is {{ name }}</div>
  <ul>
    <h3>Stacks we are going to use</h3>
    <li v-for="framework of frameworks" v-text="framework"></li>
  </ul
  >
</template>
<script>
export default {
  props: {
    name: String,
    frameworks: Array,
  },
};
</script>
