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

const fetchOpenInstruction = async (context) => {
  return axios.get('api/')
  .then(({data}) => {
    context.commit("SETOPENINSTRUCTION", data);
  })
}

const fetchCompletedInstruction = async (context) => {
  return axios.get('api/1')
  .then(({data}) => {
    context.commit("SETCOMPLETEDINSTRUCTION", data)
  })
}

const storeInstruction = async (context, payload) => {
  context.commit("STOREINSTRUCTION", payload)
}

export {
    sort,
    fetchOpenInstruction,
    fetchCompletedInstruction,
    storeInstruction
}