
function darkmode(){
    document.getElementById('stylearea').innerHTML = '<link rel="stylesheet" href="assets/style-night.css">'
    localStorage.setItem('mode','dark')
    console.log(localStorage.getItem('mode'))
}
function lightmode(){
    document.getElementById('stylearea').innerHTML = '<link rel="stylesheet" href="assets/style.css">'
    localStorage.setItem('mode','light')
    console.log(localStorage.getItem('mode'))
}
