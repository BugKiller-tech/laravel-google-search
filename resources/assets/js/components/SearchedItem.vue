<template lang="html">
  <div class="search-item">
    <div class="Item">
		<a :href="searchItem.link" target="_blank">
			<u>{{ searchItem.title }}</u>
		</a>
		<br>
		<font color="#00AA00">{{searchItem.link}}</font> <br>
		<div style="float: left;">
			<img v-if="searchItem.pagemap.cse_thumbnail[0].src == '' " :src="searchItem.pagemap.cse_thumbnail[0].src" width="50" height="50">
		</div>
		<div>
			{{searchItem.htmlSnippet}}
		</div>
		<br><br>
	</div>
  </div>
</template>







<script>
export default {
    props: ['searchItem']
}
</script>

<style lang="css">
/*.search-item {
    padding: 1rem;
}

.search-item > p {
    margin-bottom: .5rem;
}*/
</style>
