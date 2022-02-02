import Vue from "vue";
import Vuex from "vuex";

import thirdPartyInstruction from "./modules/third-party-instruction/index.js";

Vue.use(Vuex);

export default new Vuex.Store({
	modules: {
		thirdPartyInstruction
	},
	strict: true,
});
