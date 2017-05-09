// resources/assets/js/components/ChatMessages.vue

<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <button id='counter' v-on:click="displayMessage(message.message)">Display</button>
                    <strong class="primary-font">
                        {{ message.user.name }} 
                    </strong>

                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>

    </ul>

</template>

<script>
  export default {
    props: ['messages', 'test', 'counter'],

    methods:{
        displayMessage(message){
            console.log(message);
        }
    }

  };
</script>