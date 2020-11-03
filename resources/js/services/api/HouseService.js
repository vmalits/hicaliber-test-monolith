import ApiClient from '../api/ApiClient'
export default {
    getHouseList(params) {
        return ApiClient.get('/api/search/houses', {
            params
        });
    }
}
