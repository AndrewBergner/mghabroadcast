<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <button @click="showModal=true">Show Modal</button>
                    <modal :modalmessage="modalmessage" v-if="showModal" @close="showModal=false"></modal>
                <div class="panel-heading">Questions</div>

                <div class="panel-body">
                    <chat-messages :messages="messages" @displaymsg="displaymessage"></chat-messages>

                </div>
                
            </div>
        </div>
    </div>
</div>
