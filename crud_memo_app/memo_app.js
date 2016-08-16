httpObj = new XMLHttpRequest();
httpObj.open("get", "./memo.json", true);
httpObj.onload = function() {
    var disp = document.getElementById("disp");

    var myData = JSON.parse(this.responseText);
    var txt = "<table border='1'><tr><th>表示順</th><th>ID</th><th>タイトル(クリックで更新)</th><th>内容</th><th>操作</th></tr>";
    for (var i = 0; i < myData.Memo.length; i++) {
        txt = txt + "<tr><td>" +  i + "</td><td>" + myData.Memo[i].id + "</td><td><a href='update.html?index=" + i + "'>" + myData.Memo[i].title + "</a></td><td>"
        + myData.Memo[i].text + "</td><td><a href='javascript:void(0);' onclick='deleteData(" + i + ");'>削除</a></td></tr>" ;
    }

    txt = txt + "</table>";

    disp.innerHTML = txt;
}
httpObj.send("");

function deleteData(index){
  var req = new XMLHttpRequest();
  req.open('POST',"./delete_data.php", true);
  req.setRequestHeader("Content-Type" , "application/x-www-form-urlencoded");
  req.send("index=" + index);
  req.onload = function() {
        location.href = "./index.html";
  };
}
