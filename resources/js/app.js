import "./bootstrap";
import dropzone from "./components/dropzone";

document.addEventListener("alpine:init", () => {
    Alpine.data("dropzone", dropzone);
});
