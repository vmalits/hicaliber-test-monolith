<template>
    <el-container>
        <el-row>
            <el-col :span="24">
                <div class="grid-content bg-purple-dark">
                    <el-form :inline="true" :model="params" class="demo-form-inline">
                        <el-form-item label="Name">
                            <el-input v-model="params.name" name="name" placeholder="name"></el-input>
                        </el-form-item>
                        <el-form-item label="Bedrooms">
                            <el-input v-model="params.bedrooms" name="bedrooms" placeholder="bedrooms"></el-input>
                        </el-form-item>
                        <el-form-item label="Bathrooms">
                            <el-input v-model="params.bathrooms" name="bathrooms" placeholder="bathrooms"></el-input>
                        </el-form-item>
                        <el-form-item label="Storeys">
                            <el-input v-model="params.storeys" name="storeys" placeholder="storeys"></el-input>
                        </el-form-item>
                        <el-form-item label="Garages">
                            <el-input v-model="params.garages" name="garages" placeholder="garages"></el-input>
                        </el-form-item>
                        <el-form-item label="Price From">
                            <el-input v-model="params.priceFrom" name="priceFrom" placeholder="priceFrom"></el-input>
                        </el-form-item>
                        <el-form-item label="Price To">
                            <el-input v-model="params.priceTo" name="priceTo" placeholder="priceTo"></el-input>
                        </el-form-item>
                        <el-form-item>
                            <el-button type="primary" @click="onSubmit">Submit</el-button>
                        </el-form-item>
                    </el-form>
                </div>
            </el-col>
        </el-row>
    </el-container>
</template>

<script>
export default {
    name: "Search",
    data() {
        return {
            params: {
                name: '',
                bedrooms: '',
                bathrooms: '',
                storeys: '',
                garages: '',
                priceFrom: '',
                priceTo: ''
            }
        }
    },
    methods: {
        onSubmit() {
            this.$emit('submit', this.params)
        }
    }
}
</script>

<style scoped>

</style>
