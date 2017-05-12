// resources/assets/js/components/ChatMessages.vue

<template>
    <ul class="chat">
        <li class="left clearfix" v-for="(message, index) in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <button id='modal-open' class="btn-ctrl" @click="displaymsg(message.message)">Display</button>
                    <button id='modal-open' class="btn-ctrl" @click="deletemsg(message, index)">Delete</button>
                    <strong class="primary-font">
                         
                    </strong>

                </div>
                <p>
                    <h3>{{message.message}}</h3

                </p>
            </div>
        </li>

    </ul>

</template>

<script>
  export default {
    props: ['messages', 'modalmessage'],


    created() {


    },

    methods:{
        displaymsg(message){

            this.$emit('displaymsg', message);
        },

        deletemsg(message, index){
            this.$emit('deletemsg', message, index);


        },


    }

  };
</script>