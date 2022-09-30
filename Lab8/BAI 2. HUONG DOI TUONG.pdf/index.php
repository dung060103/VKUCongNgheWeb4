<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OOP with PHP</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="style.css" rel="stylesheet"></link>
<script>
function ajax(){
var obj=document.getElementById("info") ;
obj.style.display="block";
var value=document.getElementById("chon").value;
var xml=new XMLHttpRequest();
xml.onreadystatechange=function(){
if(xml.readyState==4){
    var obj = document.querySelector('#info');
    obj .innerHTML=xml.responseText;
}
}
url="showTable.php?chon="+value;
xml.open("GET", url, false);
xml.send();
}
</script>
</head>
<body>
<h1>OOP with PHP</h1>
<select id="chon" onChange="ajax();">
<option value="">-->-Chọn-<--</option>
<option value="giaovien">Giáo viên</option>
<option value="sinhvien">Sinh viên</option>
<option value="hocphan">Học phần</option>
<select>
<hr>
<div id="info" style="display:none;"></div>
</body>
</html>
