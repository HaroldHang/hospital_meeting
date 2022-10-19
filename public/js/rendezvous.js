
window.addEventListener("load", ()=> {
    const rdvForm = document.getElementById("formulaire-rdv")
    const closeRdv = document.getElementById("close-rdv")
    const hours = document.getElementsByClassName("hour-ctrl");
    console.log(hours)
    for (let i = 0; i < hours.length; i++) {
        const thisHour = hours[i];
        hours[i].addEventListener("click", ()=> {
            //alert("okay")
            let formDate = document.getElementById("form-date")
            let formHour = document.getElementById("form-hour")
            formDate.value = thisHour.getAttribute("data-date")
            formHour.value = thisHour.getAttribute("data-hour")
            rdvForm.classList.add("form-rdv--open")
        })
    }
    closeRdv.addEventListener("click", ()=> {
        rdvForm.classList.remove("form-rdv--open")
    })
})