httpObj = new XMLHttpRequest();
httpObj.open("get", "./memo.json", true);
httpObj.onload = function() {
    var disp = document.getElementById("disp");

    var myData = JSON.parse(this.responseText);
    var txt = "";
    for (var i = 0; i < myData.Memo.length; i++) {
        txt = txt + i + " - <a href='example.html'>" + myData.Memo[i].title + "</a> " + myData.Memo[i].text +
        " <a href='javascript:void(0);' onclick='deleteData(" + i + ");'>削除</a><br>" ;
    }

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
