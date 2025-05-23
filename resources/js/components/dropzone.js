export default function dropzone() {
    return {
        dragging: false,
        uploadedFileName: "",
        loading: false,
        error: null,

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
                this.handleFile(file);
            }
        },

        handleFile(file) {
            if (!file) return;

            const supportedTypes = ["txt", "md", "json", "csv", "pdf"];
            const fileType = file.name.split(".").pop().toLowerCase();

            if (!supportedTypes.includes(fileType)) {
                this.error =
                    "Unsupported file type. Please upload a text-based file (txt, md, json, csv) or PDF.";
                return;
            }

            this.loading = true;
            this.error = null;
            this.uploadedFileName = file.name;

            const reader = new FileReader();
            reader.onload = (e) => {
                const base64Content = e.target?.result;
                if (base64Content) {
                    const content = base64Content.split(",")[1];

                    const listener = () => {
                        this.loading = false;
                        window.removeEventListener("file-uploaded", listener);
                    };
                    window.addEventListener("file-uploaded", listener);

                    Livewire.dispatch("upload-file", [
                        {
                            name: file.name,
                            content: content,
                            size: file.size,
                        },
                    ]);
                } else {
                    this.error = "Failed to read file. Please try again.";
                    this.loading = false;
                }
            };

            reader.onerror = () => {
                this.error = "Failed to read file. Please try again.";
                this.loading = false;
            };

            reader.readAsDataURL(file);
        },
    };
}
