const getOpenInstruction = (state) => {
    return state.open_instructions;
};

const getCompletedInstruction = (state) => {
    return state.completed_instruction;
}

const getDetailInstruction = (state) => {
    return state.detail_instruction;
}

export {
    getOpenInstruction,
    getCompletedInstruction,
    getDetailInstruction
};
