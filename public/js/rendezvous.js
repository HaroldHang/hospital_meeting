
window.addEventListener("load", ()=> {
    const rdvForm = document.getElementById("formulaire-rdv")
    const closeRdv = document.getElementById("close-rdv")
    const hours = document.getElementsByClassName("hour-ctrl");
    //console.log(hours)
    const submitRdv = document.getElementById("btn-rdv");
    //let currentHour = null;
    let payPrice = 0;
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
            let price = document.querySelector('input[name="prix"]:checked');
            if (!price) {
                payPrice = 0;
            } else {
                payPrice = price.value;
            }
            
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
        let price = document.querySelector('input[name="prix"]:checked');
        if (!price || payPrice <= 0) {
            alert("Veuillez choisir votre consultation")
            return
        }
        payPrice = price.value
        console.log(payPrice)
        let motif = "";
        let motifs = document.querySelectorAll('input[name="motif"]');
        console.log(motifs)
        for (let motInd = 0; motInd < motifs.length; motInd++) {
            const element = motifs[motInd];
            let motElm = element.value.split(" ");
            console.log(motElm)
            if (motElm[motElm.length - 1] == payPrice.toString()) {
                motElm.pop()
                motif = motElm.join(" ");
                
            }
            
        }
        let payload = {
            rdv_date : formDateTrue.value,
            rdv_hour : formHourTrue.value,
            id_patient : idElm.value,
            objet : objetElm.value,
            id : document.getElementById("id_spec").value,
            mot : motif,
            price : payPrice
        }
        console.log(payload)
        let widget = FedaPay.init({
            //public_key: 'pk_live_uCOXQDXnAdtUVXhcwh3_CQs3',
            public_key : 'pk_sandbox_9SUMvWkY3q_xydj-8hCB4x8I',
            transaction: {
                //amount: this.beforePay.package[1],
                amount: payPrice,
                description: 'Rendez-cous'
            },
            customer: {
                email: "test@gmail.com",
                lastname: "Lastname",
                firstname : "firstname"
            },
            //container: '#payment-modal'
            onComplete : (obj)=> {
                console.log(obj);
                
                if (obj.reason == "CHECKOUT COMPLETE") {
                
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
                } else {
                    

                }
            }
          });
          widget.open();
    })


    //Toggle Paiement/RDV
    const calendar = document.querySelector("#calendar-section");
    const rdvOpt = document.querySelector("#rdv-opt");
    rdvOpt.addEventListener("click", ()=> {
        calendar.classList.toggle("calend-sup-active")
    })

    const rdvFormPaie = document.getElementById("formulaire-paie")
    const rdvPaie = document.querySelector("#rdv-paie");
    const closePaie = document.getElementById("close-paie")
    rdvPaie.addEventListener("click", ()=> {
        rdvFormPaie.classList.add("form-rdv--open")
    })
    closePaie.addEventListener("click", ()=> {
        rdvFormPaie.classList.remove("form-rdv--open")
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