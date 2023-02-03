
window.addEventListener("load", ()=> {

    const examDownload = document.querySelector("#exam-download");
    examDownload.addEventListener('click', (event)=> {
        event.preventDefault()
        examName = examDownload.getAttribute("data-exam");
        console.log(examName)
        window.location.replace( `download?exam=${examName}`)
    })
})