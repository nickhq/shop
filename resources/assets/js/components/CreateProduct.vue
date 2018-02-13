<template>
    <form action="#" method="post">
        <div class="form">
           <div class="input-group">
                <input type="text" name="product_name" id="name" class="input" placeholder="Product Name">
                <span class="focus-line"></span>
           </div>
           <div class="message success">A Nice message</div>
        </div>
        <div class="form">
            <div class="input-group">
                <input type="number" name="product_price" id="price" class="input" placeholder="Product Price"
            v-validate="'required|email'">
            <span class="focus-line"></span>
            </div>
            <span class="message error">This is a message</span>
        </div>
        <label for="file">Product Image</label>
        <div class="form file-drop-area">
            
            <span class="btn btn-file">Choose files</span>
            <span class="file-msg js-set-number">or drag and drop files here</span>
            <input name="product_image" class="input file-input" type="file">
        </div>
        <div class="form">
            <div class="input-group">
                <textarea type="text" name="product_description" id="description" rows="5" class="input" placeholder="Briefly describe the product..."></textarea>
                <span class="focus-line"></span>
            </div>
            <span class="message error">Am writting something</span>
        </div>
        <div class="form">
            <button class="btn" type="submit">Add Product</button>
        </div>
    </form>
</template>

<script>
    import VeeValidate from 'vee-validate'
    import Vue from 'vue';

    Vue.use(VeeValidate);
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
