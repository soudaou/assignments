var additem = document.getElementById('additem');
var todolist = document.getElementById('todolist');
var myform = document.getElementById('myform');

//added item to list
myform.addEventListener('submit', function (ev) {
	ev.preventDefault();
