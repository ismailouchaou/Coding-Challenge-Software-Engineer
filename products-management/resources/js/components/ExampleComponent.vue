<template>
    <div class="container">
        <div class="col-sm-6">
            <product-template/>
        </div>
    </div>
</template>
<script>
import ProductTemplate from './ProductTemplate.vue';

    export default {
        mounted() {
            console.log('example Component mounted.')
        },
        components:{
            ProductTemplate
        }
    }
</script>
