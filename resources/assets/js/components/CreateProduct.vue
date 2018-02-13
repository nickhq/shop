<template>
    <form action="/products" method="post">
        <div class="form">
           <div class="input-group">
                <input type="text" name="name" id="name" class="input" placeholder="Product Name"
                v-validate="'required'">
                <span class="focus-line"></span>
           </div>
           <div class="message error">{{ errors.first('name') }}</div>
        </div>
        <div class="form">
            <div class="input-group">
                <input type="number" name="price" id="price" class="input" placeholder="Product Price"
            v-validate="'required|digits:2'">
            <span class="focus-line"></span>
            </div>
            <span class="message error" v-show="errors.has('price')">{{ errors.first('price') }}</span>
        </div>
        <label for="file">Product Image</label>
        <div class="form file-drop-area">
            
            <span class="btn btn-file">Choose files</span>
            <span class="file-msg js-set-number">or drag and drop files here</span>
            <input name="image" class="input file-input" type="file">
        </div>
        <div class="form">
            <div class="input-group">
                <textarea type="text" name="description" id="description" rows="5" class="input" 
                placeholder="Briefly describe the product..."
                v-validate="'required|min:30'"
               ></textarea>
                <span class="focus-line"></span>
            </div>
            <span class="message error" v-show="errors.has('description')">{{ errors.first('description') }}</span>
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
