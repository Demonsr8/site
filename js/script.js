function Help() { alert("Создатель сайта: Елкин МИ группа ИСр20-2к") }

function login() {
    var login = document.getElementById('login').value;
    var pass = document.getElementById('password').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            location.reload()
        } else {}
    };

    xhttp.open("POST", "/php/testreg.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");
    var param = "login=" + login + "&password=" + pass;
    xhttp.send(param);
}

function reg() {
    var login = document.getElementById('login').value;
    var pass = document.getElementById('password').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        } else {}
    };

    xhttp.open("POST", "/php/save_user.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=UTF-8");
    var param = "login=" + login + "&password=" + pass;
    xhttp.send(param);
}