<template>
    <el-container>
        <search-houses v-on:submit="submit"/>
        <el-row>
            <el-col :span="24">
                <div class="grid-content bg-purple">
                    <el-table
                        :data="getHouseList"
                        v-loading="loading"
                        empty-text="There are no items"
                        style="width: 100%">
                        <el-table-column
                            prop="name"
                            label="Name"
                            width="180">
                        </el-table-column>
                        <el-table-column
                            prop="bedrooms"
                            label="Bedrooms"
                            width="180">
                        </el-table-column>
                        <el-table-column
                            prop="bathrooms"
                            label="Bathrooms"
                            width="180">
                        </el-table-column>
                        <el-table-column
                            prop="storeys"
                            label="Storeys"
                            width="180">
                        </el-table-column>
                        <el-table-column
                            prop="garages"
                            label="Garages"
                            width="180">
                        </el-table-column>
                        <el-table-column
                            prop="price"
                            label="Price"
                            width="180">
                        </el-table-column>
                    </el-table>
                </div>
            </el-col>
        </el-row>
    </el-container>
</template>

<script>
import {mapGetters, mapState} from 'vuex';

export default {
    name: "Houses",
    props: {
        params: {
            type: Object,
        }
    },
    data: () => {
        return {
            loading: false,
        }
    },
    created() {
        this.getHouses();
    },
    computed: {
        ...mapState([
            'houses'
        ]),
        ...mapGetters([
            'getHouseList',
        ]),
    },
    methods: {
        getHouses(params) {
            this.loading = true;
            this.$store.dispatch('getHouseList', params).then(() => {
                this.loading = false;
            });
        },
        submit(params) {
            this.getHouses(params);
        }
    }
}
</script>

<style scoped>

</style>
