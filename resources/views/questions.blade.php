<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <modal :modalmessage="modalmessage" v-if="showModal" @close="showModal=false"></modal>
                <div class="panel-heading"><h2>Questions</h2></div>

                <div class="panel-body">
                    <chat-messages :messages="messages" @displaymsg="displaymessage" @deletemsg="deletemessage"></chat-messages>

                </div>
              
            </div>
        </div>
    </div>
</div>
