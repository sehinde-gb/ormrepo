Vue.component('modal', {
template: `
<div class="modal is-active">
            <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">
                            <slot name="header"></slot>
                        </p><!-- /.modal-card-title -->
                        
                    </header><!-- /.modal-card-head -->
                    <section class="modal-card-body">
                        <slot></slot>
                    </section><!-- /.modal-card-body -->
                    <footer class="modal-card-foot">
                        <slot name="footer">
                            <a class="button is-primary" @click="$emit('close')">OK</a>
                            <!-- /.button -->
                        </slot>
                    </footer><!-- /.modal-card-foot -->
                </div><!-- /.modal-card -->
            <button class="modal-close" @click="$emit('close')"></button>
            
        </div><!-- /.modal-background -->

`

});

Vue.component('message', {
    props: ['title', 'body'],

    data() {
        return {
            isVisible:true
        };
    },

    template: `

<article class="message" v-show="isVisible">
  <div class="message-header">
   {{ title }}
   
    <button type="button" @click="hideModal" class="btn-close">x</button>
  </div>
  <div class="message-body">
    {{ body }}
  </div>
</article>
    
`,

methods: {
    hideModal() {
        this.isVisible = false;

    }
}

});





new Vue({
    el: '#root',

    data: {
        showModal: true,

    }
});