import HouseService from "../../services/api/HouseService";

const state = {
    houses: [],
};

const getters = {
    getHouseList(state) {
        return state.houses;
    },
};

const actions = {
    async getHouseList({commit}, params) {
        let response = await HouseService.getHouseList(params)
        commit('PUSH_HOUSES', response.data.data);
        return response;
    }
};

const mutations = {
    PUSH_HOUSES(state, data) {
        state.houses = data
    },
};

export default {
    state,
    getters,
    actions,
    mutations
};
