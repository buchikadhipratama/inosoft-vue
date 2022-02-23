import { state } from "./state"

const SORT = (state, payload) => {
    const sorted = state.instructions.message.sort((a, b) => {
        if(payload.direction === 'asc'){
            return a[payload.data] > b[payload.data]
        }
        return a[payload.data] < b[payload.data]
    })

    state.instructions.message = sorted
}

const SETOPENINSTRUCTION = (state, data) => {
    state.open_instructions = data;
}

const SETCOMPLETEDINSTRUCTION = (state, data) => {
    state.completed_instruction = data;
}

const STOREINSTRUCTION = (payload) => {
    axios.post("/api/store", [payload])
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
    STOREINSTRUCTION,
    SETDETAILINSTRUCTION,
    EDITINSTRUCTION
}
