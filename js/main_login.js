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

	document.querySelector('.add-panel__button').onclick = function(){
		console.log('click');
		let requestData = new FormData();
		requestData.append('type', 'session');
		let sessionRequest = new XMLHttpRequest();
		sessionRequest.open('POST', '../html/accounts.php', true);
		sessionRequest.onreadystatechange = function(){
			if(sessionRequest.readyState == 4 && sessionRequest.status == 200){
				console.log(sessionRequest.responseText);
				if(sessionRequest.responseText == '1'){
					window.location.replace('../html/new_card.php');
				}
			}
		}
		sessionRequest.send(requestData);
	}
}
