<template>
    <form method="POST" action="http://127.0.0.1:8000/api/product/create">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select name="category_id">
                <option  v-for="item in info" :key="item.id" v-bind:value="item.id">{{ item.name }}</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
</template>

<script>
export default {
    data () {
    return {
      info: null
    }
    },
    mounted () {
            console.log('Component mounted from product template.')

        axios
        .get('/api/categories')
        .then(response => (this.info = response.data.data))
    }
}
</script>
















































<!--
<template>
     <form method="POST" action="/api/product/create">
    <form method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" v-model="product.name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Description:</label>
            <input type="text" v-model="product.description" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" v-model="product.price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input type="file" @change="fillTheImg(this.value)" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select v-model="product.category_id">
                <option  v-for="item in info" :key="item.id" v-bind:value="item.id">{{ item.name }}</option>
            </select>
        </div>
        <button type="submit" @click="submitIt()" class="btn btn-success">Add Product</button>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
</template>

<script>
export default {
    data () {
    return {
      info: null,
      product:{
        name:"",
        description:"",
        price:"",
        image:"",
        category_id:""
      }
    }
    },
    mounted () {
        //to know that the component loaded
        console.log('Component mounted from product template.')
        //get categories
        axios
        .get('/api/categories')
        .then(response => (this.info = response.data.data))
    },
    submitIt(){
        axios
        .post('/api/product/create',{
            product: this.product
        })
        .then(console.log('success'))
    },
    fillTheImg(val){
        this.product.image = val;
    }
}
</script>
-->
