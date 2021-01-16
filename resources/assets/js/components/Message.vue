<!-- UI-Button Component definition -->
<template>
       <div>
           
            <article class="orm-message" v-show="isVisible">
                <button type="button"  class="alert-button" @click="hideModal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="orm-body">
                    
                    <h4 class="alert-notify">{{ body }}
                        
                        <a class="alert-notify" href="https://ormrepo.co.uk/cookie">Click here to find out more</a>
                    </h4>
                </div><!-- /.orm-body -->
            </article><!-- /.orm-message -->
       </div>
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
      width: 100%; 
      height: 100px; 
      background: white !important;
      position: relative;  
      border-radius: 10px;  
    }

    
    
    .orm-body {
        padding-left: 200px;
        padding-top: 2px;
    }
    
@media screen and (min-width: 981px) and (max-width: 1381px) {
    
    
     
    .orm-message {
      background: white !important;  
      width: 100%; 
      height: 100px; 
      position: relative;  
      border-radius: 10px;  
      overflow: hidden;
      
    }

     .orm-body {
        padding-left: 200px;
        
    }
    
}
    
@media screen and (min-width: 481px) and (max-width: 980px) {
        
    .orm-message {
      background: white !important;
      width: 100%; 
      height: 100px; 
      position: relative;  
      border-radius: 10px;
      overflow: hidden;
      
    }
    
    .orm-body {
        padding-left: 20px;
        
    }
    
    
        
}
    
@media all and (min-width: 100px) and (max-width: 480px) {
        
    .orm-message {
        background: white !important;
        height: 150px;
        padding-top: 10px;
        padding-left: 10px;
        margin: 0;
        border-radius: 2px;
        width: 100%;
        overflow: hidden;
        
    }
    
    .orm-body {
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 10px
    }

    
        
}


</style>

