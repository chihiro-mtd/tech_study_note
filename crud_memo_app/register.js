function getValue() {
    var form_data = new FormData();

    var title = document.forms.myForm.id_title.value;
    var text = document.forms.myForm.id_text.value;

    form_data.append("title", title);
    form_data.append("text", text);

    hitAPI(form_data);
}

function hitAPI(form_data) {
    var httpObj = new XMLHttpRequest();
    httpObj.open('POST', "register.php", true);
    httpObj.send(form_data);
    httpObj.onreadystatechange = function() {
        //var register_status = document.getElementById("register_status");
        //register_status.innerHTML = httpObj.responseText;

        if(httpObj.responseText == "OK"){
          location.href = "./register_ok.html";
        }
        else{
          var register_status = document.getElementById("register_status");
          register_status.innerHTML = "<h2>NG</h2>";
        }
    };
}
