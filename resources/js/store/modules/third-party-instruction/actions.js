const sort = async (context, payload) => {
    context.commit('SORT', payload)
}

// const fetchAllInstruction = async (context) => {
//     return fetch("http://127.0.0.1:8000/api/")
//       .then((response) => response.json())
//       .then((data) => {
//         context.commit("SETINSTRUCTION", data);
//       })
//       .catch((err) => console.error(err));
//   }

const fetchAllInstruction = async (context) => {
    return axios.get('api/')
    .then(({data}) => {
      context.commit("SETINSTRUCTION", data);
    })
    .catch((err) => console.error(err));
}

export {
    sort,
    fetchAllInstruction
}