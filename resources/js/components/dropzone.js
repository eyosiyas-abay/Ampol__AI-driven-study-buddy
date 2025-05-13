export default function dropzone() {
    return {
        dragging: false,
        uploadedFileName: "",
        handleDragEnter(event) {
            this.dragging = true;
        },
        handleDragLeave(event) {
            this.dragging = false;
        },
        handleDrop(event) {
            event.preventDefault();
            this.dragging = false;
            const file = event.dataTransfer.files[0];
            if (file) {
                this.uploadFile(file);
            }
        },
        uploadFile(file) {
            this.uploadedFileName = file.name;
        },
    };
}
