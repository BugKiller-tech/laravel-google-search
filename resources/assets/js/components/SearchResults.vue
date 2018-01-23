<template lang="html">
  <div class="search-log">
      <search-item v-for:"searchItem in searchItems" :searchItem="searchItem"></search-item>
  </div>
</template>

<script>
export default {
    props: ['searchItems']
}
</script>

<style lang="css">

</style>
