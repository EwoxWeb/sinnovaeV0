var imgnum=[];

function changeColor1(mid){ 
  if(!imgnum[mid])document.getElementById("color"+mid).style.backgroundColor = "#2E3433";
  else document.getElementById("color"+mid).style.backgroundColor = "#2E3433";
  imgnum[mid] = !imgnum[mid];
}

function sauverList(){
	alert(imgnum);
}