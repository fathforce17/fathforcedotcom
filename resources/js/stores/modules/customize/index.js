import axios from "axios";
import * as Api from "@core/apis";
import * as Form from "@core/utils/form";
import { useToast } from "vue-toastification";
import { mutations, actions, getters } from "@stores/global";

const toast = useToast();

import landingtext from "@stores/modules/customize/landingtext";
import landingimage from "@stores/modules/customize/landingimage";

const initialState = () => ({
  initURL: "/app/customize",
  formErrors: {},
});

const customize = {
  namespaced: true,
  state: initialState,
  modules: {
    landingtext,
    landingimage,
  },
  mutations: {
    ...mutations,
  },
  actions: {
    ...actions,
  },
  getters: {
    ...getters,
  },
};

export default customize;
