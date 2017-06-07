import Vue from 'vue';
import Vuex from 'vuex';
import * as actions from './actions.js';
import * as mutations from './mutations.js';
import products from './modules/products.js';

Vue.use(Vuex);

const state = {
    cateStyle: 'cate-normal',
    cateChoice: 0,
    menuSelc: 'index',
    cateIndex: 0
};

export default new Vuex.Store({
    state,
    actions,
    mutations,
    modules: {
        products
    }
});