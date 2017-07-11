<!-- UI-Button Component definition -->
<template>
    
   <article class="message" v-show="isVisible">
       
           <div class="message-header">
               {{ title }}
    
               <button type="button" @click="hideModal">X</button>
           </div><!-- /.message-header -->
           
           <div class="message-body">
               {{ body }}
           </div>
           <!-- /.message-body -->
      
       
    </article><!-- /.message -->
    
</template>

<script>
    export default {

        props: ['title','body'],

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
        background-color: #FF3B3F;
        color: #F8F8F8;
        min-height: 60px;
        border-radius: 2px;
        width: 100%;
    }
    
    .orm-body {
        padding-top: 12px;
        padding-left: 200px;
    }

    @media screen and (min-width: 981px) and (max-width: 1381px) {
    
        .orm-message {
            background-color: #FF3B3F;
            color: #F8F8F8;
            min-height: 60px;
            border-radius: 2px;
            width: 100%;
        }
    
        .orm-body {
            padding-top: 12px;
            padding-left: 200px;
        }
    
    }

    @media screen and (min-width: 481px) and (max-width: 980px) {
    
        .orm-message {
            background-color: #FF3B3F;
            color: #F8F8F8;
            min-height: 60px;
            border-radius: 2px;
            width: 100%;
        }
    
        .orm-body {
            padding-top: 12px;
            padding-left: 200px;
        }
    
    }

    @media all and (min-width: 100px) and (max-width: 480px) {
    
        .orm-message {
            background-color: #FF3B3F;
            color: #F8F8F8;
            height: 120px;
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
