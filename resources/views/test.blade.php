<div id='root'>
	
	<input type="text" id="input" v-model="message">
	<h3>@{{ message }}</h3>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.2/vue.js"></script>

<script>

new Vue({
	el: '#root',
	data: {
		message: 'hoooo'
	}
})

</script>