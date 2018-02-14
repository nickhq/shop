<template>
    <form action="/products" method="post" v-on:submit.prevent="validateBeforeSubmit">
        <div class="form">
            <div class="input-group">
                <input type="text" name="name" id="name" class="input" placeholder="Product Name"
                       v-validate="'required'"
                       v-model="name">
                <span class="focus-line"></span>
            </div>
            <div class="message error">{{ errors.first('name') }}</div>
        </div>
        <div class="form">
            <div class="input-group">
                <input type="number" name="price" id="price" class="input" placeholder="Product Price"
                       v-validate="'required|numeric'"
                       v-model="price">
                <span class="focus-line"></span>
            </div>
            <span class="message error" v-show="errors.has('price')">{{ errors.first('price') }}</span>
        </div>

        <label for="file">Product Image</label>
        <div class="form file-drop-area">

            <span class="btn btn-file">Choose files</span>
            <input id="file" name="image" class="input file-input" type="file"
                   v-on:change="onFileChange"
                   accept="image/*"
                   v-validate="'required|image'">
            <img :src="image" class="image">
            <span v-show="errors.has('image')" class="message error">{{ errors.first('image') }}</span>
        </div>

        <div class="form">
            <div class="input-group">
                <textarea type="text" name="description" id="description" rows="5" class="input"
                          placeholder="Briefly describe the product..."
                          v-validate="'required|min:30'"
                          v-model="description"></textarea>
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
        data() {
            return {
                name: '',
                price: '',
                image: null,
                description: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            validateBeforeSubmit() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        //TODO: add toast message

                        this.submit()
                        return
                    }

                    alert('Correct them errors!')
                })
            },
            onFileChange(e) {
                let files = e.target.files
                if (!files.length)
                    return

                this.readFile(files[0])
            },
            readFile(file) {
                let reader = new FileReader()
                reader.onload = (e) => {
                    this.image = e.target.result

                };
                reader.readAsDataURL(file)

            },
            submit() {
                axios.post('/products', {
                    product_image: this.image,
                    product_name: this.name,
                    product_price: this.price,
                    product_description: this.description

                }).then(response => {
                    let productId = response.data.id;

                    window.location = `/products/${productId}`
                });
            },
        }
    }
</script>
<style scooped>
    .image {
        max-width: 100%;
        max-height: 100px;
    }
</style>
