<template lang="">
  <div>
    <h1>Site stats</h1>
    <ul>
      <li>Total Serios: 0</li>
      <li>Total Lessons: 0</li>
      
    </ul>
  </div>
</template>
<script>
import axios from 'axios';
import Axios from 'axios'
export default {

created(){

  const data = axios.get('/api/stats').then(function (response) {
    console.log(response.data);
  });
} 

};
</script>
<style lang=""></style>
