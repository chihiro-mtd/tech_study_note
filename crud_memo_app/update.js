// URLパラメータの取得
function getParameter() {
    var arg = new Object;
    var tmp_parameter = location.search.substring(1);
    var kv = tmp_parameter.split('=');
    var index = kv[1];

    return index;
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

        setTitleAndText(title, text);
    }
    httpObj.send("");
}

// タイトルと内容を入力欄にセット
function setTitleAndText(title, text) {
    document.forms.myForm.id_title.value = title;
    document.forms.myForm.id_text.value = text;
}

// フォームの入力値を取得
function getFormValue() {
    var form_data = new FormData();

    var index = getParameter();
    var title = document.forms.myForm.id_title.value;
    var text = document.forms.myForm.id_text.value;

    form_data.append("index",index);
    form_data.append("title", title);
    form_data.append("text", text);

    hitAPI(form_data);
}

// phpにフォームの入力値を投げる
function hitAPI(form_data) {
    var httpObj = new XMLHttpRequest();
    httpObj.open('POST', "update.php", true);
    httpObj.send(form_data);
    httpObj.onload = function() {
      //var update_status = document.getElementById("update_status");
      //update_status.innerHTML = httpObj.responseText;

        if (httpObj.responseText == "OK") {
            location.href = "./register_ok.html";
        } else {
            var update_status = document.getElementById("register_status");
            register_status.innerHTML = "<h2>NG</h2>";
        }
    };
}
