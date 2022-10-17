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
    return monthElm.innerText.split('/');
}
function handleWeeks(type= 'right', weekElm, monthElm) {
    let numOfWeek = getNumOfWeek(monthElm);
    let currentWeek = getCurWeek(weekElm);
    if (type == 'right') {
        currentWeek++;
    } else if (type == 'left') {
        currentWeek--;
    }
    updateWeek(weekElm, currentWeek);
    
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
    var dayNr = Math.ceil((date - firstJanuary) / (24 * 60 * 60 * 1000));
    var weekNr = Math.ceil((dayNr + firstJanuary.getDay()) / 7);
    return weekNr;
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
    console.log(Math.ceil(29 / 7));
    //console.log(checkYear(2023))
    monthRight.addEventListener('click', ()=> {
        handleMonth('right', month);
    });
    monthLeft.addEventListener('click', ()=> {
        handleMonth('left', month);
    });

    weekLeft.addEventListener('click', ()=> {
        handleWeeks('left', week, month)
    })
    weekRight.addEventListener('click', ()=> {
        handleWeeks('right', week, month)
    })
})
