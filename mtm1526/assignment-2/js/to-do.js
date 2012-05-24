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

//checking the added item
todolist.addEventListener('click', function (ev) {
	if (ev.target.className == 'deleted') {
		ev.target.className = '';
	} else {
		ev.target.className = 'deleted';
	}
}, false);

//unchecking the added item
todolist.addEventListener('click', function (ev) {
	if (ev.target.className == 'undeleted') {
		ev.target.className = '';
	} 
}, true);