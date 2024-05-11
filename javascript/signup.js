const form = document.querySelector(".signup form"),
continueBtn = document.querySelector(".button input");

form.onsubmit = (e)=>{
	e.preventDefault();
}

continueBtn.onclick = ()=>{
	let xhr = new XMLHttpRequest();
	xhr.open();
	xhr.onload = ()=>{

	}
	xhr.send();
}