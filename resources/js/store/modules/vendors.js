import axios from 'axios'
const vendors = {
    namespaced: true,
    state: {
        vendors: {}
    },
    mutations: {
        SET_POSTS(state, data){
            state.vendors = data
        }
    },
    actions: {
        loadData({commit}){
            axios.get('api/').then(res=> commit('SET_POSTS', res.data)).catch(error => console.log(error));
        },
        getCompleted({commit}){
            axios.get('api/completed').then(res=> commit('SET_POSTS', res.data)).catch(error => console.log(error));
        }
    }
}

export default vendors