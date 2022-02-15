const SORT = (state, payload) => {
    const sorted = state.instructions.sort((a, b) => {
        if(payload.direction === 'asc'){
            return a[payload.data] > b[payload.data]
        }
        return a[payload.data] < b[payload.data]
    })

    state.instructions = sorted
}

export {
    SORT
}
 