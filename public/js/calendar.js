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

function handleMonth(type = 'right', monthElm) {
    let monthArray = monthElm.innerText.split('/');
    let monthYear = parseInt(monthArray[1]);
    let currentMonth = months.indexOf(monthArray[0].trim());
    console.log(currentMonth);
    
    if (type == 'right') {
        if (currentMonth == 11) {
            currentMonth = 0;
            monthYear++;
        } else {
            currentMonth++;
        }
    } else if (type == 'left') {
        if (currentMonth == 0) {
            currentMonth = 11;
            monthYear--;
        } else {
            currentMonth--;
        }
        
    }
    updateMonth(monthElm, currentMonth, monthYear)
}

function updateMonth(monthElm, month, year) {
    monthElm.innerText = months[month] + " / " + year;
}
function getMonthElm(monthElm) {
    return (monthElm.innerText.split('/')).map((el) => el.trim());
}
function handleWeeks(type= 'right', weekElm, monthElm) {
    let numOfWeek = getNumOfWeek(monthElm);
    let currentWeek = getCurWeek(weekElm);
    if (type == 'right') {
        currentWeek++;
        updateWeek(weekElm, currentWeek);
        handleDays("right", currentWeek)
    } else if (type == 'left') {
        currentWeek--;
        updateWeek(weekElm, currentWeek);
        handleDays("left", currentWeek)

    }
    //updateWeek(weekElm, currentWeek);
    
}

function updateWeek(weekElm, weekNum) {
    weekElm.innerText = "Semaine " + weekNum;
}
function getCurWeek(weekElm) {
    return weekElm.innerText.split(" ")[1]
}

function setCurrentWeek(weekElm, currentDay) {
    //let weekNum = Math.ceil(currentDay / 7);
    let weekNum = weekNumber();
    /*let nowDay = new Date();
    let firstDayOfMonth = new Date (nowDay.getFullYear().toString() + "-" + (nowDay.getMonth() + 1) + "-1");
    if (firstDayOfMonth.getDay() == 0 && (daysOfMonth[nowDay.getMonth()] == 31 || daysOfMonth[nowDay.getMonth()] == 28 || daysOfMonth[nowDay.getMonth()] == 29)) {
        weekNum++;
    } else if (firstDayOfMonth.getDay() == 6 && currentDay == 31) {

    }*/

    updateWeek(weekElm, weekNum);
}
function getCurrentWeek() {
    let weekNum = weekNumber();
    return weekNum
}
function getNumOfWeek(monthElm) {
    let monthArray = getMonthElm(monthElm);
    let month = monthArray[0].trim();
    let year = parseInt(monthArray[1].trim());
    let numOfDays = daysOfMonth[months.indexOf(month)];
    if (month == "Fevrier" && checkYear(year)) {
        numOfDays++;
    }
    let numOfWeeks = Math.ceil(numOfDays / 7);
    let firstDayOfMonth = new Date (year.toString() + "-" + (months.indexOf(month) + 1) + "-1");
    if (firstDayOfMonth.getDay() == 6 || firstDayOfMonth.getDay() == 0) {
        numOfWeeks++;
    }
    return numOfWeeks;
}

function weekNumber(date = new Date())
{
    var firstJanuary = new Date(date.getFullYear(), 0, 1);
    var dayNr = Math.round((date - firstJanuary) / (24 * 60 * 60 * 1000));
    var weekNr = Math.round((dayNr + firstJanuary.getDay()) / 7);
    console.log(weekNr)
    return weekNr;
}

function handleDays(type = "current", weekStateNum) {
    let date = new Date();
    let aDay = 24 * 60 * 60 * 1000;
    let numberOfLastDay = 0;
    if (type == "current") {
        let numberOfLastDay = (date.getDay()) * aDay
        console.log(date.valueOf() - numberOfLastDay)
        numberOfLastDay = date.valueOf() - numberOfLastDay;
        let nowDate = new Date(numberOfLastDay);
        console.log(nowDate);
        properHandeDays(numberOfLastDay);
    } else if (type == "right") {
        let weekElm = weekStateNum;
        let curWeek = getCurrentWeek();
        let numberOfLastDay = ((7 - date.getDay()) + (((weekElm - curWeek) - 1)) * 7) * aDay;
        numberOfLastDay = date.valueOf() + numberOfLastDay;
        properHandeDays(numberOfLastDay, "right");
        numberOfLastDay = new Date(numberOfLastDay)
        console.log(numberOfLastDay);
        if (date.getMonth() != numberOfLastDay.getMonth()) {
            const month = document.getElementById("calendarMonth");
            
            updateMonth (month, numberOfLastDay.getMonth(), numberOfLastDay.getFullYear());
        }
    } else if (type == "left") {
        let weekElm = weekStateNum;
        let curWeek = getCurrentWeek();
        let numberOfLastDay = ((date.getDay() ) + (((curWeek - weekElm))) * 7) * aDay;
        numberOfLastDay = date.valueOf() - numberOfLastDay;
        properHandeDays(numberOfLastDay, "left");
        numberOfLastDay = new Date(numberOfLastDay)
        console.log(numberOfLastDay);
        if (date.getMonth() != numberOfLastDay.getMonth()) {
            const month = document.getElementById("calendarMonth");
            updateMonth (month, numberOfLastDay.getMonth(), numberOfLastDay.getFullYear());
            
        }
    }
    //let monthElm = getMonthElm(monthState);
    //let firstJanuary = new Date(parseInt(monthElm[1]), 0, 1);
    //let firstDayOfMonth = new Date(parseInt(monthElm[1]), months.indexOf(monthElm[0]), 1);
    //let numberOfDay = Math.round((firstDayOfMonth - firstJanuary) / (24 * 60 * 60 * 1000));
    //let numWeek = Math.round((numberOfDay + firstJanuary.getDay()) / 7);
}

async function properHandeDays(startDate, type="left") {

    let url = "index.php?action=rendezvous&api=true"
    let days = document.getElementsByClassName("days");
    let aDay = 24 * 60 * 60 * 1000;
    
    for (let index = 0; index < days.length; index++) {
        const day = days[index];
        let date = new Date (startDate + (index * aDay));
        day.innerText = date.getDate();
        convertedDate = new Date (startDate);
        const payload = {
            //startDate : [convertedDate.getFullYear(), (convertedDate.getMonth() + 1), convertedDate.getDate()].join("-"),
            startDate : [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-")
        }
        console.log(payload.startDate)
        const requestResponse = await ajaxRequest(url, "POST", payload);
        console.log(requestResponse);
        const hoursDate = document.getElementsByClassName(`date-day-${index + 1}`)
        for (let j = 0; j < hoursDate.length; j++) {
            const hourDate = hoursDate[j];
            const nowHours = hourDate.children
            for (let k = 0; k < nowHours.length; k++) {
                const hourTime = nowHours[k];
                //console.log(hourTime);
                let curDate = new Date();
                hourTime.classList.remove("hour-gone");

                if (curDate.getDate() > date.getDate()) {
                    //console.log("yeah date");
                    if (curDate.getMonth() >= date.getMonth()) {
                        hourTime.classList.add("hour-gone");
                    }
                }
                if (k % 2 == 0) {
                    hourTime.classList.remove("hour-filled");
                } else {
                    hourTime.classList.remove("hour-filled-shade");
                }
                hourTime.setAttribute("data-date", [date.getFullYear(), (date.getMonth() + 1), date.getDate()].join("-") )
                let hour  = hourTime.getAttribute("data-hour");
                if (requestResponse) {
                    requestResponse.forEach(meets => {
                        if (meets.heure_rdv == hour) {
                            /*hourTime.removeEventListener("click", ()=> {
                                return;
                            });*/
                            if (k % 2 == 0) {
                                hourTime.classList.add("hour-filled");
                            } else {
                                hourTime.classList.add("hour-filled-shade");
                            }
                        }
                    });
                }
            }
        }
        let previousDay = new Date(startDate + ((index - 1) * aDay))
        
    }
    
}

function checkYear(year) {
    // If a year is multiple of 400,
    // then it is a leap year
    if (year % 400 == 0)
        return true;
    // Else If a year is multiple of 100,
    // then it is not a leap year
    if (year % 100 == 0)
        return false;
    // Else If a year is multiple of 4,
    // then it is a leap year
    if (year % 4 == 0)
        return true;
    return false;
}


window.addEventListener("load", ()=> {
    const currentDate = new Date();

    const month = document.getElementById("calendarMonth");
    const monthRight = document.getElementById("monthRight");
    const monthLeft = document.getElementById("monthLeft");

    const week = document.getElementById("calendarWeek");
    const weekRight = document.getElementById("weekRight");
    const weekLeft = document.getElementById("weekLeft");

    month.innerText = months[currentDate.getMonth()] + " / " + currentDate.getFullYear();
    setCurrentWeek(week, currentDate.getDate());
    handleDays("current", week)
    //console.log(Math.ceil(29 / 7));
    //console.log(checkYear(2023))
    monthRight.addEventListener('click', ()=> {
        handleMonth('right', month);
    });
    monthLeft.addEventListener('click', ()=> {
        handleMonth('left', month);
    });

    weekLeft.addEventListener('click', ()=> {
        handleWeeks('left', week, month);
    })
    weekRight.addEventListener('click', ()=> {
        handleWeeks('right', week, month)
    })
})

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