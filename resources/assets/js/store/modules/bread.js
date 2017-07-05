import { BREAD_NAV_LIST } from '../mutation-types'

const state = {
    bnav: [],
};

//getters
const getters = {
    bnavList: state => state.bnav
};

const actions = {
    bnav: ({ commit }, info) => {
        commit(BREAD_NAV_LIST, info)
    }
};

const mutations = {
    [ADAPT_PRODUCTS_LIST](state, info) {
        return state.bnav = info
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}