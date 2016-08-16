// URLパラメータの取得
function getParameter() {
    var arg = new Object;
    var tmp_parameter = location.search.substring(1);
    var kv = tmp_parameter.split('=');
    var index = kv[1];

    getTitleAndTextFromJSON(index);
}

// JSONファイルから更新対象の要素を取得
function getTitleAndTextFromJSON(index) {
    var myData;

    httpObj = new XMLHttpRequest();
    httpObj.open("get", "./memo.json", true);
    httpObj.onload = function() {
        myData = JSON.parse(this.responseText);

        var title = myData['Memo'][index]['title'];
        var text = myData['Memo'][index]['text'];

        console.log(title);

        setTitleAndText(title, text);
    }
    httpObj.send("");
}

function setTitleAndText(title, text) {
    document.forms.myForm.id_title.value = title;
    document.forms.myForm.id_text.value = text;
}

function hitAPI(form_data) {
    var httpObj = new XMLHttpRequest();
    httpObj.open('POST', "register.php", true);
    httpObj.send(form_data);
    httpObj.onload = function() {
        if (httpObj.responseText == "OK") {
            location.href = "./register_ok.html";
        } else {
            var register_status = document.getElementById("register_status");
            register_status.innerHTML = "<h2>NG</h2>";
        }
    };
}