<!-- UI-Button Component definition -->
<template>
    
    <div  :class="classes" v-show="isVisible">
        {{ message }}
        
        <button class="terminate" type="button" @click="hideModal">X</button>
    </div><!-- /.Alert -->
    
    

</template>

<script>
    export default {

        props: ['type', 'message'],
        
        
            
        data() {
            return {
                isVisible: true,
                classes: true
                
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
    .Alert {
        padding: 10px;
        position: relative;
        min-width: 100%;
        min-height: 50px;
        
    }
    
    .Alert--Info {
        position: fixed;
        right: 10px;
        bottom: 10px;
        background: #3f50a5;
        padding-top: 12px;
        padding-left: 20px;
        color: white;
        height: 50px;
        width: 200px;
    }
    
    .Alert--Success {
        background: green;
        color: white;
        
    }
    
    .Alert--Error {
        position: fixed;
        right: 10px;
        bottom: 10px;
        background: #3f50a5;
        padding-top: 12px;
        padding-left: 20px;
        color: white;
        height: 80px;
        width: 200px;
        border: 1px solid #363636;
        border-radius: 10px;
    }

    

</style>
