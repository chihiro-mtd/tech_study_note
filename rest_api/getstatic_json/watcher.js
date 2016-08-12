var req = new XMLHttpRequest();
req.open('GET', "index.php", true);
req.onreadystatechange = function() {
    var disp = document.getElementById("disp");
    disp.innerHTML = req.responseText;
};
req.send("");
