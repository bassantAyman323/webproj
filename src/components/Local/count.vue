<template>
    <div id="count">
   <p id="count" @click="count++">   <b-icon icon="heart-fill" id="heart" font-scale="1"></b-icon>  {{count}}</p>
    </div>
</template>
<script>
export default {
    data:function(){
    return {
        count:0,
    }},
}
</script>
<style scoped>
#count{
    color: black;
}
#heart{
    color:red;
}
</style>