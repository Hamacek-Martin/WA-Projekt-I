const pole = [["","","","",""],["","","","",""],["","","","",""],["","","","",""],["","","","",""]];
idbunky = 0;
for(let i = 0; i < 5; i++){
	for(let j = 0; j < 5; j++){
		document.getElementById(String(idbunky)).innerHTML = pole[i][j];
		pole[i][j] = document.getElementById(String(idbunky)).innerHTML = localStorage.getItem(idbunky);
	idbunky ++;
	}
}



function resset(){
	for(let i = 0; i < 5; i++){
		for(let j = 0; j < 5; j++){
			pole[i][j] = "";
		}
	}
	localStorage. clear();
	vykres();
}

typ = false;
function vyber(i,j,id){
	if(typ == false){
		pole[i][j] = "O";
		typ = true;
		localStorage.setItem(id, pole[i][j]);
	}else{
		pole[i][j] = "X";
		typ = false;
		localStorage.setItem(id, pole[i][j]);
	}
	document.getElementById(String(id)).innerHTML = localStorage.getItem(idbunky);
	vykres();
}

function tah(){
	if(typ != false){
	document.getElementById("tah").innerHTML = "X";
	
	}else{
	document.getElementById("tah").innerHTML = "O";
	}
}

function vykres(){
	
	
	idbunky = 0;
	for(let i = 0; i < 5; i++){
		for(let j = 0; j < 5; j++){
			document.getElementById(String(idbunky)).innerHTML = pole[i][j];
			
		
		idbunky ++;
		}
	}
	tah();
}
