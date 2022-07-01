<template lang="">
  <div>
    <h1>Site stats</h1>
    <ul>
      <li>Total Series: {{ series }}</li>
      <li>Total Lessons: {{ lessons }}</li>
    </ul>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      series: 0,
      lessons: 0,
    };
  },
  created() {
    let self = this;
    const data = axios.get('/api/stats').then(response => {
      self.series = response.data.series;
      self.lessons = response.data.lessons;
    });
  },
};
</script>
<style lang=""></style>
