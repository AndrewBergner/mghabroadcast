<template>
  <div id="modal" class="modal is-active">
    <div class="modal-background"></div>

    <div class="modal-content">
      <h1><p>{{modalmessage}}</p></h1>
    </div>
    <button class="modal-close" @click="$emit('close')"></button>
  </div>
</template>

<script>
  export default {
    props: ['showModal', 'modalmessage'],

    methods:
    {
        
    },


  };
</script>