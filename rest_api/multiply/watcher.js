function getNum() {
    var form_data = new FormData();

    var num1 = document.forms.myForm.id_num1.value;
    var num2 = document.forms.myForm.id_num2.value;

    form_data.append("num1", num1);
    form_data.append("num2", num2);

    hitAPI(form_data);
}

function hitAPI(form_data) {
    var req = new XMLHttpRequest();
    req.open('POST', "maker.php", true);
    req.send(form_data);
    req.onreadystatechange = function() {
        var disp = document.getElementById("disp");
        disp.innerHTML = req.responseText;
    };
}
