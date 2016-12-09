<template>
   <div class="alertClasses" v-show="show">
       <slot></slot>
       <span class="Alert--close" @click="show = false">x</span>
   </div>
   <!-- /.Alert -->
</template>

<script>
    export default  {

        props: ['type'],

        data() {
            return {
                show: true
            };
        },
        computed: {
            alertClasses() {
                var type = this.type;

                return {
                    'Alert': true,
                    'Alert--Success': type == 'success',
                    'Alert--Error': type == 'error'
                };
            }
        }

    });
</script>

<style>
    .Alert {
        padding: 10px;
        position: relative;
        color: red;
    }

    .Alert--Info {
        background-color: #e3e3e3;
    }

    .Alert--Success {
        background: green;
        color: white;
    }

    .
</style>


