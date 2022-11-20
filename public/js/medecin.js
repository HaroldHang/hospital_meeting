
const months = [
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre"
];
const daysOfMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
const days = [
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
]

window.addEventListener("load",async ()=> {
    let dayCount = 0;
    const aDay = 24 * 60 * 60 * 1000;
    
    let  id = document.getElementById("id_spec").value
    const rdvSection = document.querySelector("#rdv-section");
    const paieSection = document.querySelector("#paie-section");
    const examSection = document.querySelector("#exam-section");
    if (rdvSection) {
        const requestResponse = await getRdv(null, id);
        console.log(requestResponse)
        let bodyContent = document.getElementById("rdv-med");
        appendRdv(bodyContent, requestResponse);
    }
    if (paieSection) {
        const requestResponse = await getPaie(null, id);
        console.log(requestResponse)
        let bodyContent = document.getElementById("paie-med");
        appendPaie(bodyContent, requestResponse);
    }

    if (examSection) {
        let medId = document.querySelector("#id_med").value;
        const requestResponse = await getExam(null, id, medId);
        console.log(requestResponse)
        let bodyContent = document.getElementById("exam-med");
        appendExam(bodyContent, requestResponse);
    }

    const medLeft = document.getElementById("medLeft")
    const medRight = document.getElementById("medRight")
    const medWeek = document.getElementById("medWeek")
    let date = new Date();
    medWeek.innerText = days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    medLeft.addEventListener("click", async ()=> {
        dayCount--;
        let date = (new Date()).valueOf() + (dayCount * aDay);
        date = new Date(date);
        if (rdvSection) {
            //let submitExam = document.querySelectorAll("#btn-submit-exam");
            //submitExam.removeEventListener("click", ()=> {console.log("yup")})

            let bodyContent = document.getElementById("rdv-med");
            const response = await getRdv(date, id);
            appendRdv(bodyContent, response);
        }
        if (paieSection) {
            let bodyContent = document.getElementById("paie-med");
            const response = await getPaie(date, id);
            appendPaie(bodyContent, response);
        }
        if (examSection) {
            let medId = document.querySelector("#id_med").value;
            let bodyContent = document.getElementById("exam-med");
            const response = await getExam(date, id, medId);
            appendExam(bodyContent, response);
        }
        medWeek.innerText = days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    })

    medRight.addEventListener("click", async ()=> {
        dayCount++;
        let date = (new Date()).valueOf() + (dayCount * aDay);
        date = new Date(date);
        if (rdvSection) {
            //let submitExam = document.querySelectorAll("#btn-submit-exam");
            //console.log(submitExam);
            //submitExam.removeEventListener("click", ()=> {console.log("yup")})
            let bodyContent = document.getElementById("rdv-med");
            const response = await getRdv(date, id);
            appendRdv(bodyContent, response);
        }
        if (paieSection) {
            let bodyContent = document.getElementById("paie-med");
            const response = await getPaie(date, id);
            appendPaie(bodyContent, response);
        }

        if (examSection) {
            let medId = document.querySelector("#id_med").value;
            let bodyContent = document.getElementById("exam-med");
            const response = await getExam(date, id, medId);
            appendExam(bodyContent, response);
        }
        medWeek.innerText = days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    })
    
})

async function getRdv(date = null, id) {
    if (!date) {
        date = new Date ();
    }
    let url = "index.php?action=rendezvous&api=true"
    const payload = {
        
        startDate : [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-"),
        id : id
    }
    console.log(payload.startDate)
    // Obtenir les rendez-vous sans recharger la page
    const requestResponse = await ajaxRequest(url, "POST", payload);
    if (!requestResponse) {
        return [];
    }
    return requestResponse
}

async function getPaie(date = null, id) {
    if (!date) {
        date = new Date ();
    }
    let url = "index.php?action=fetchPaiement&api=true"
    const payload = {
        
        startDate : [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-"),
        id : id
    }
    console.log(payload.startDate)
    // Obtenir les rendez-vous sans recharger la page
    const requestResponse = await ajaxRequest(url, "POST", payload);
    if (!requestResponse) {
        return [];
    }
    return requestResponse
}

async function getExam(date = null, id, medId) {
    if (!date) {
        date = new Date ();
    }
    let url = "index.php?action=fetchExam&api=true"
    const payload = {
        
        startDate : [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-"),
        servId : id,
        medId : medId
    }
    console.log(payload.startDate)
    // Obtenir les rendez-vous sans recharger la page
    const requestResponse = await ajaxRequest(url, "POST", payload);
    if (!requestResponse) {
        return [];
    }
    return requestResponse
}

function createRdvLine(obj, index = 1, even = false) {
    let line = document.createElement("tr");
    for (let i = 0; i < 8; i++) {
        let lineChild = document.createElement("td");
        if (i == 0) {
            lineChild.innerText = index;
        } else if (i == 1) {
            lineChild.innerText = obj.nom;
        } else if ( i == 2) {
            lineChild.innerText = obj.prenom;
        } else if (i == 3) {
            lineChild.innerText = obj.heure_rdv;
        } else if (i == 4) {
            lineChild.innerText = obj.description;
        } else if (i == 5) {
            lineChild.innerText = obj.motif;
        } else if (i == 6) {
            lineChild.innerText = obj.prix;
        } else if ( i == 7) {
            //let subChild = document.createElement("button");
            //subChild.innerHTML = '<i class="ti-angle-right ml-auto"></i>'
            //lineChild.appendChild = subChild
            lineChild.innerHTML = `
                <button class="btn-action btn-exam" data-patient="${obj.id_patient}">
                    <i class="ti-plus ml-auto"></i>
                </button>
            `
        }
        line.appendChild(lineChild);
    }

    if (even) {
        line.classList.add("line-even")
    }

    return line;
}

function createPaieLine(obj, index = 1, even = false) {
    let line = document.createElement("tr");
    for (let i = 0; i < 7; i++) {
        let lineChild = document.createElement("td");
        if (i == 0) {
            lineChild.innerText = index;
        } else if (i == 1) {
            lineChild.innerText = obj.nom_client;
        } else if ( i == 2) {
            lineChild.innerText = obj.prenom_client;
        } else if (i == 3) {
            lineChild.innerText = obj.nom;
        } else if (i == 4) {
            lineChild.innerText = obj.prenom;
        } else if (i == 5) {
            lineChild.innerText = obj.motif;
        } else if (i == 6) {
            lineChild.innerText = obj.prix;
        }
        line.appendChild(lineChild);
    }

    if (even) {
        line.classList.add("line-even")
    }

    return line;
}

function createExamLine(obj, index = 1, even = false) {
    let line = document.createElement("tr");
    for (let i = 0; i < 6; i++) {
        let lineChild = document.createElement("td");
        if (i == 0) {
            lineChild.innerText = index;
        } else if (i == 1) {
            lineChild.innerText = obj.nom;
        } else if ( i == 2) {
            lineChild.innerText = obj.description;
        } else if (i == 3) {
            lineChild.innerText = obj.nom_patient + obj.prenom_patient;
        } else if (i == 4) {
            lineChild.innerText = obj.status;
        } else if (i == 5) {
            lineChild.innerHTML = `<button class="btn btn-primary exam-finish" data-exam="${obj.id}">Termine</button>`;
        } 
        line.appendChild(lineChild);
    }

    if (even) {
        line.classList.add("line-even")
    }

    return line;
}

function appendRdv(elm, objArray) {
    elm.innerHTML = "";
    if (objArray.length == 0) {
        elm.innerHTML = "Aucun resultat trouve";
        return
    }
    for (let i = 0; i < objArray.length; i++) {
        let rdvLine = null;
        if ((i % 2) != 0) {
            rdvLine = createRdvLine(objArray[i], i + 1, true);
        } else {
            rdvLine = createRdvLine(objArray[i], i + 1);
        }

        elm.appendChild(rdvLine);
    }
    let rdvExam = document.getElementById("formulaire-examen")
    let closeExam = document.getElementById("close-exam")

    let btnExams = document.querySelectorAll(".btn-exam");
    
    let idPatient = document.getElementById("patientId")
    for (let j = 0; j < btnExams.length; j++) {
        //console.log("okay")
        const btnExam = btnExams[j];
        btnExam.addEventListener("click", ()=> {
            rdvExam.classList.add("form-rdv--open")
            let patientId = btnExam.getAttribute("data-patient")
            idPatient.value =  patientId;
            return
        })
        
    }
    let examSubmit = document.querySelector("#btn-submit-exam");
    examSubmit.removeEventListener("click", ()=> {
        console.log("removed");
    })
    examSubmit.addEventListener("click", async (event) => {
        event.preventDefault(); 
        examSubmit.setAttribute("disabled", true)
        let idPatient = document.getElementById("patientId")
        await submitExam(idPatient.value);
        return
    }, "once")
    closeExam.addEventListener("click", ()=> {
        let examSubmit = document.querySelector("#btn-submit-exam");
        examSubmit.removeAttribute("disabled", false)
        rdvExam.classList.remove("form-rdv--open")
    })
}

function appendPaie(elm, objArray) {
    elm.innerHTML = "";
    if (objArray.length == 0) {
        elm.innerHTML = "Aucun resultat trouve";
        return
    }
    for (let i = 0; i < objArray.length; i++) {
        let rdvLine = null;
        if ((i % 2) != 0) {
            rdvLine = createPaieLine(objArray[i], i + 1, true);
        } else {
            rdvLine = createPaieLine(objArray[i], i + 1);
        }

        elm.appendChild(rdvLine);
    }
}

function appendExam(elm, objArray) {
    elm.innerHTML = "";
    if (objArray.length == 0) {
        elm.innerHTML = "Aucun resultat trouve";
        return
    }
    for (let i = 0; i < objArray.length; i++) {
        let rdvLine = null;
        if ((i % 2) != 0) {
            rdvLine = createExamLine(objArray[i], i + 1, true);
        } else {
            rdvLine = createExamLine(objArray[i], i + 1);
        }

        elm.appendChild(rdvLine);
    }
    let examTermin = document.querySelectorAll(".exam-finish");
    for (let e = 0; e < examTermin.length; e++) {
        const examTerm = examTermin[e];
        examTerm.addEventListener("click", ()=> {
            finishExam(examTerm.getAttribute("data-exam"))
        })
        
    }
}

async function submitExam(idPatient) {
    let examName = document.getElementById("exam-name").value;
    let examDescription = document.getElementById("object-exam").value;
    let serviceId = document.getElementById("specId").value;
    let medId = document.getElementById("medId").value;
    console.log(examName, examDescription, idPatient, serviceId, medId);
    let date = new Date();
    let payload = {
        name : examName,
        description : examDescription,
        patient : idPatient,
        service : serviceId,
        medecin : medId,
        currDate : [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-")
    }
    let url = "index.php?action=examen&api=true"
    const response = await ajaxRequest(url, "POST", payload);
    if (response.success) {
        let successBox = document.querySelector("#success-box-paie");
        successBox.firstChild.nextSibling.innerText = response.message;
        successBox.classList.add("success-box--active")

    }
    
}

async function finishExam(idExam) {
    
    let url = "index.php?action=terminExam&api=true"
    const payload = {
        
        id : idExam
    }
    console.log(payload)
    // Obtenir les rendez-vous sans recharger la page
    const requestResponse = await ajaxRequest(url, "POST", payload);
    if (!requestResponse) {
        return [];
    }
    return requestResponse
}

function ajaxRequest(url, verb, payload = false) {
    return new Promise((resolve, reject)=> {
        let xmlhttp = new XMLHttpRequest();
            xmlhttp.open(verb, url);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            if (verb == "POST") {
                xmlhttp.send(JSON.stringify(payload));
            } else {
                xmlhttp.send();
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    console.log(xmlhttp.responseText);
                    resolve (JSON.parse(xmlhttp.responseText));
                    
                } else {
                }
            };

    })
}
