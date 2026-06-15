const Modal = {
    el: document.querySelector("dialog"),
    
    open(title, content) {
        if (!this.el) return;
        this.el.querySelector("h1").textContent = title;
        this.el.querySelector(".modal-body").innerHTML = content;
        this.el.showModal();
    },
    close() {
        if (!this.el) return;
        this.el.close();
        this.el.querySelector(".modal-body").innerHTML = ""; 
        this.el.querySelector("h1").textContent = "";
    }
};