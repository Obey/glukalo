<div id="observablehq-it-3aad12fe"></div>
<div id="observablehq-speedControl-3aad12fe"></div>
<div id="observablehq-viewof-fo-3aad12fe"></div>
<div id="observablehq-lControl-3aad12fe"></div>

<script type="module">
import {Runtime, Inspector} from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
import define from "https://api.observablehq.com/@obey/babylonjs-screensaver.js?v=3";
new Runtime().module(define, name => {
  if (name === "it") return new Inspector(document.querySelector("#observablehq-it-3aad12fe"));
  if (name === "speedControl") return new Inspector(document.querySelector("#observablehq-speedControl-3aad12fe"));
  if (name === "viewof fo") return new Inspector(document.querySelector("#observablehq-viewof-fo-3aad12fe"));
  if (name === "lControl") return new Inspector(document.querySelector("#observablehq-lControl-3aad12fe"));
});
</script>
