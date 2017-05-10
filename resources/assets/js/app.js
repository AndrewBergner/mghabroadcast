
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// *
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
 

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });



// resources/assets/js/app.js

Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));
Vue.component('test-message', require('./components/test.vue'));
Vue.component('modal', require('./components/modal.vue'));

const app = new Vue({
    el: '#app',


    data: {
        messages: [],
        showModal: false,
        modalmessage: 'pappy',
    },

    created() {
        this.fetchMessages(); 

        Echo.channel('chat')
        .listen('MessageSent', (e) => {
            console.log('received');

            this.messages.push({
              message: e.message.message,
              user: e.user
            });
        });    
    },

    events: {
      displaymessage: function(){
        alert('test4');
      }
    },

    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },

        addMessage(message) {
            this.messages.push(message);
  
            axios.post('/messages', message).then(response => {
              console.log(response.data);
            });
        },

        displaymessage(message){
            alert(message);
        }

    }
});



// const app2 = new Vue({
//     el: '#app2',


//     data: {
//         message: "HELLO",
//     },


//     methods: {


//         ondisplaymsg2(){
//             console.log('test3');
//             alert('test2');
//         },

        

//     }
// });