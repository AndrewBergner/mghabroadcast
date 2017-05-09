// resources/assets/js/components/test.vue

<template>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <input type="text" id="input" v-model="test">
                        <h3>{{ test }}</h3>
                </div>
            </div>
        </div>
    </div>    
</template>

<script>
  export default {
    props: ['test'],

  };
</script>