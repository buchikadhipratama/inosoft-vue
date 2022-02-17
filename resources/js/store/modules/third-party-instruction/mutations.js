const SORT = (state, payload) => {
    const sorted = state.instructions.message.sort((a, b) => {
        if(payload.direction === 'asc'){
            return a[payload.data] > b[payload.data]
        }
        return a[payload.data] < b[payload.data]
    })

    state.instructions.message = sorted
}

const SETINSTRUCTION = (state, data) => {
    state.instructions = data;
}

export {
    SORT,
    SETINSTRUCTION
}