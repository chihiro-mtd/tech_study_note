httpObj = new XMLHttpRequest();
httpObj.open("get", "./memo.json", true);
httpObj.onload = function() {
    var div_disp = document.getElementById("disp");

    var myData = JSON.parse(this.responseText);
    var txt = "";
    for (var i = 0; i < myData.Memo.length; i++) {
        txt = txt + "<a href='example.html'>" + myData.Memo[i].title + "</a> " + myData.Memo[i].text +
        " <a href='example.html'>削除</a><br>" ;
    }

    div_disp.innerHTML = txt;
}
httpObj.send("");
