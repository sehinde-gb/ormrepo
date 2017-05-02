<template>
    <div>
        something
    </div>
</template>

<script>
    
    export default{
        created() {
            $.ajax({
                url: 'https://srv.buysellads.com/ads/CVADC53U.json',
                dataType: 'jsonp',
                success: response => {
                    console.log(response);
                }
            
            
            })
        }
    }
</script>
