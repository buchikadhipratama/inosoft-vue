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

const storeInstruction = async (payload) => {
  axios.post("api/store", payload)  
}

const TerminateInstruction = async (context, payload) => {
    context.commit("TERMINATEINSTRUCTION", payload)
}

const fetchOneInstruction = async (context, payload) => {
  return axios.get('api/det/' + payload)
  .then(({data}) => {
    context.commit("SETDETAILINSTRUCTION", data)
  })
}

const editOneInstruction = async (context, payload) => {
  context.commit("EDITINSTRUCTION", payload)
}

export {
    sort,
    fetchOpenInstruction,
    fetchCompletedInstruction,
    storeInstruction,
    fetchOneInstruction,
    TerminateInstruction,
    editOneInstruction
}
