require("./bootstrap");

import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import collapse from "@alpinejs/collapse";

Alpine.plugin(collapse);
Alpine.plugin(persist);
window.Alpine = Alpine;

Alpine.start();