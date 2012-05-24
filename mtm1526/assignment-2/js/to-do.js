var additem = document.getElementById('additem');
var todolist = document.getElementById('todolist');
var myform = document.getElementById('myform');

//added item to list
myform.addEventListener('submit', function (ev) {
	ev.preventDefault();
	
	if (additem.value != '') {
		var newItem = document.createElement('li');
		newItem.innerHTML = additem.value;
		todolist.appendChild(newItem);
	}

	additem.value = '';
}, false);
