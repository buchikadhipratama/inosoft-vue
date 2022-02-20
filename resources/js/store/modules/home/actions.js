const sort = async (context, payload) => {
    context.commit('SORT', payload)
}

export {
    sort
}
