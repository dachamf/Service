function getAllStudents() {
    var formRequest = new FormData();
    formRequest.append('getStudents', 'getAllStudents');

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', uploadComplete, false);
    xhr.open('GET', 'getAllStudents.php');
    xhr.send(formRequest);
}


function getStudentById(sid) {
    var forrmRequest = new FormData();
    forrmRequest.append('sid', sid);

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('load', uploadComplete, false);
    xhr.open('POST', 'getStudentById.php');
    xhr.send(forrmRequest);
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

function uploadComplete(e) {
    console.log(e.target.responseText);
}

var integer = 0;
window.onload = function () {
    integer = getRandomInt(4, 1);
}