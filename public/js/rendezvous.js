
window.addEventListener("load", ()=> {
    const rdvForm = document.getElementById("formulaire-rdv")
    const closeRdv = document.getElementById("close-rdv")
    const hours = document.getElementsByClassName("hour-ctrl");
    //console.log(hours)
    const submitRdv = document.getElementById("btn-rdv");
    //let currentHour = null;
    for (let i = 0; i < hours.length; i++) {
        const thisHour = hours[i];
        hours[i].addEventListener("click", ()=> {
            //alert("okay")
            if (hours[i].classList.contains("hour-gone")) {
                return
            }
            if (hours[i].classList.contains("hour-filled") || hours[i].classList.contains("hour-filled-shade")) {
                //console.log("yes");
                alert("Rendez-vous inacessible");
                return
            }
            //currentHour = hours[i];
            let formDate = document.getElementById("form-date")
            let formDateTrue = document.getElementById("form-date-true")
            let formHour = document.getElementById("form-hour")
            let formHourTrue = document.getElementById("form-hour-true")
            formDate.value = thisHour.getAttribute("data-date")
            //console.log(formDate);
            formDateTrue.value = thisHour.getAttribute("data-date")
            formHour.value = thisHour.getAttribute("data-hour")
            formHourTrue.value = thisHour.getAttribute("data-hour")
            rdvForm.classList.add("form-rdv--open")
        })
    }
    closeRdv.addEventListener("click", ()=> {
        rdvForm.classList.remove("form-rdv--open")
    })
    submitRdv.addEventListener("click", (e)=> {
        e.preventDefault();
        //alert("oaky");
        let formDateTrue = document.getElementById("form-date-true")
        let formHourTrue = document.getElementById("form-hour-true")
        let idElm = document.getElementById("client-id");
        let objetElm = document.getElementById("object");
        let payload = {
            rdv_date : formDateTrue.value,
            rdv_hour : formHourTrue.value,
            id_patient : idElm.value,
            objet : objetElm.value,
            id : document.getElementById("id_spec").value
        }
        console.log(payload)
        let url = "index.php?action=rendezvous/create&api=true";
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', url);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.send(JSON.stringify(payload));
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //callback(xmlhttp.responseText);
                let successBox = document.querySelector("#success-box");
                console.log(xmlhttp.responseText)
                let result = JSON.parse(xmlhttp.responseText);
                //console.log(successBox.firstChild);
                successBox.firstChild.nextSibling.innerText = result.message;
                successBox.classList.add("success-box--active")
            } else {
                // the preloder here
            }
        };
    })
})


function getPage(file, params, callback) {
    onrequest = true;
    let url = file + '?';
    // loop through object and assemble the url
    let notFirst = false;
    for (var key in params) {
    if (params.hasOwnProperty(key)) {
    url += (notFirst ? '&' : '') + key + "=" + params[key];
    }
    notFirst = true;
    }
    // create a AJAX call with url as parameter
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    callback(xmlhttp.responseText);
    } else {
        // the preloder here
    }
    };
    xmlhttp.open('GET', url, true);
    xmlhttp.send();
}