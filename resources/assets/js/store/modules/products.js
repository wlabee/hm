
import {ADAPT_PRODUCTS_LIST} from '../mutation-types'

const state = {
  pList: [],
};

//getters
const getters = {
  productsList: state => state.pList
};

const actions = {
  productInfo: ({commit}, info) => {
    commit(ADAPT_PRODUCTS_LIST, info)
  }
};

const mutations = {
  [ADAPT_PRODUCTS_LIST] (state, info) {
    return state.pList = info
  }
};

export default {
  state, getters, actions, mutations
}