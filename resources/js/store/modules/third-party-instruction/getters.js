import { state } from "./state";

const getOpenInstruction = (state) => {
    return state.open_instructions;
};

const getCompletedInstruction = (state) => {
    return state.completed_instruction;
}

export {
    getOpenInstruction,
    getCompletedInstruction
};
