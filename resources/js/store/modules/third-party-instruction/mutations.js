
const SORT = (state, payload) => {
    const sorted = state.completed_instruction.sort((a, b) => {
        if(payload.direction === 'asc'){
            return a[payload.data] > b[payload.data]
        }
        return a[payload.data] < b[payload.data]
    })

    state.completed_instruction = sorted
}

const SETOPENINSTRUCTION = (state, data) => {
    state.open_instructions = data;
}

const SETCOMPLETEDINSTRUCTION = (state, data) => {
    state.completed_instruction = data;
}

const SETDETAILINSTRUCTION = (state, data) => {
    state.detail_instruction = data;
}

const EDITINSTRUCTION = (payload) => {
    axios.put("/api/update", [payload])
}

export {
    SORT,
    SETOPENINSTRUCTION,
    SETCOMPLETEDINSTRUCTION,
    SETDETAILINSTRUCTION,
    EDITINSTRUCTION
}
