import Vue from "vue";
import Vuex from "vuex";

import thirdPartyInstruction from "./modules/third-party-instruction/index.js";
import home from "./modules/home/index.js";

Vue.use(Vuex);

export default new Vuex.Store({
	modules: {
        home,
		thirdPartyInstruction
	},
	strict: true,
});
