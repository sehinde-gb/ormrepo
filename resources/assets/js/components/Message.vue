<!-- UI-Button Component definition -->
<template>
    
    <article class="orm-message" v-show="isVisible">
        <button type="button"  class="alert-button" @click="hideModal"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></button>
        <div class="orm-body">
            <h4 class="alert-notify">{{ body }}
                <a href="https://ormrepo.co.uk/cookie" class="find-link">Click here to find out more</a>
                
                </h4>
        
        </div><!-- /.orm-body -->
    
    </article><!-- /.orm-message -->

</template>

<script>
    export default {

        props: ['body'],


        data() {
            return {
                isVisible: true
            };

        },

        mounted() {
            console.log('Component ready.')
        },

        methods: {
            hideModal() {
                this.isVisible = false;

            }
        }

    }
</script>

<style>
    
    
    
    .orm-message {
        background-color: #f3f3f3;
        color: #F8F8F8;
        min-height: 70px;
        border-radius: 2px;
        width: 100%;
    }
    
    .orm-body {
        padding-left: 200px;
    }
    
@media screen and (min-width: 981px) and (max-width: 1381px) {
    
    
    .orm-message {
        background-color: #f3f3f3;
        color: #F8F8F8;
        min-height: 70px;
        border-radius: 2px;
        width: 100%;
    }
    
    .orm-body {
        padding-left: 200px;
    }
    
}
    
@media screen and (min-width: 481px) and (max-width: 980px) {
        
    .orm-message {
        background-color: #f3f3f3;
        color: #F8F8F8;
        min-height: 120px;
        border-radius: 2px;
        width: 74%;
        margin-left: 70px;
    }
    
    .orm-body {
        padding-top: 12px;
        padding-left: 20px;
    }
    
    
        
}
    
@media all and (min-width: 100px) and (max-width: 480px) {
        
    .orm-message {
        background-color: #f3f3f3;
        color: #F8F8F8;
        height: 150px;
        padding-top: 10px;
        padding-left: 10px;
        margin: 0;
        border-radius: 2px;
        width: 100%;
    }
    
    .orm-body {
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 10px
    }

    
        
}


</style>

