
window.addEventListener("load", ()=> {
    
    const patConn = document.querySelector("#patient-connect")
    const medConn = document.querySelector("#medecin-connect")
    const patForm = document.querySelector("#patient-form")
    const medForm = document.querySelector("#medecin-form")
    const form = document.querySelector("#form-app");
    patConn.addEventListener("click", ()=> {
        medConn.classList.remove("user-active")
        patConn.classList.add("user-active")
        medForm.style.display = "none";
        patForm.style.display = "block";
        form.setAttribute("action", "connect")
    })
    medConn.addEventListener("click", ()=> {
        patConn.classList.remove("user-active")
        medConn.classList.add("user-active")
        patForm.style.display = "none";
        medForm.style.display = "block";
        form.setAttribute("action", "medconnect")
    })
})