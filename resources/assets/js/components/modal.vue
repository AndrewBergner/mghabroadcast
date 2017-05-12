<template>
  <div id="modal" class="modal is-active">
    <div class="modal-background"></div>

    <div class="modal-content">
      <p class="modal-msg">{{modalmessage}}</p>
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