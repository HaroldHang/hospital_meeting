
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
    
    const requestResponse = await getRdv(null, id);
    console.log(requestResponse)
    let bodyContent = document.getElementById("rdv-med");
    appendRdv(bodyContent, requestResponse);

    const medLeft = document.getElementById("medLeft")
    const medRight = document.getElementById("medRight")
    const medWeek = document.getElementById("medWeek")
    let date = new Date();
    medWeek.innerText = days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    medLeft.addEventListener("click", async ()=> {
        dayCount--;
        let date = (new Date()).valueOf() + (dayCount * aDay);
        date = new Date(date);
        const response = await getRdv(date, id);
        appendRdv(bodyContent, response);

        medWeek.innerText = days[date.getDay()] + " " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
    })

    medRight.addEventListener("click", async ()=> {
        dayCount++;
        let date = (new Date()).valueOf() + (dayCount * aDay);
        date = new Date(date);
        const response = await getRdv(date, id);
        appendRdv(bodyContent, response);
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

function createRdvLine(obj, index = 1, even = false) {
    let line = document.createElement("tr");
    for (let i = 0; i < 7; i++) {
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
                    //console.log(xmlhttp.responseText);
                    resolve (JSON.parse(xmlhttp.responseText));
                    
                } else {
                }
            };

    })
}
