const SORT = (state, payload) => {
    const sorted = state.dashboards.sort((a,b) => {
        if(payload.direction === 'asc'){
            return a[payload.data] > b[payload.data]
        }
        return a[payload.data] < b[payload.data]
    })

    state.dashboards = sorted
}

export {
    SORT
}
