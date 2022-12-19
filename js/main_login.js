window.onload = function(){
	document.querySelector('.header__logout').onclick = function(){
		let logoutRequest = new XMLHttpRequest();
		logoutRequest.open('POST', '../html/accounts.php', true);
		logoutRequest.onreadystatechange = function(){
			window.location.replace('../');
		}
		let logoutFormData = new FormData();
		logoutFormData.append('type', 'logout');
		logoutRequest.send(logoutFormData);
	}
}
