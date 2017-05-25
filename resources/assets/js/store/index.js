import Vue from 'vue';
import Vuex from 'vuex';
import * as actions from './actions.js';
import * as mutations from './mutations.js';

Vue.use(Vuex);

const state = {
    cateStyle: 'cate-normal',
    cateChoice: 0,
    menuSelc: 'index'
};

export default new Vuex.Store({
    state,
    actions,
    mutations
});