var nb_elem = 1;

function createCookie(name, value, days)
{
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days*24*60*60*1000));
		var expires = "; expires="+date.toUTCString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function eraseCookie(name) {
	createCookie(name, "", -1);
}

function readCookie()
{
	var cooktab = document.cookie.split(';');
	if (cooktab[0])
	{
		for (var i = 0; i < cooktab.length; i++)
		{
			var cookie = cooktab[i];
			var name = cookie.split('=')[0];
			var value = cookie.split('=')[1];
			eraseCookie(name);
			newTodo(value);
		}
	}
}

function newTodo(Todo) {
	if (!Todo)
		var Todo = prompt("To do ?");
	if (Todo)
	{
		var div = document.createElement('div')
		var ft_list = document.getElementById("ft_list");

		div.textContent = Todo;
		div.setAttribute("onclick", "rmTodo(this)");
		div.setAttribute("id", nb_elem)
		if(ft_list.firstChild)
			ft_list.insertBefore(div,ft_list.firstChild);
		else
			ft_list.appendChild(div);
		createCookie(nb_elem, Todo, 7);
		nb_elem++;
	}
}

function rmTodo(elem) {
	var del = prompt("Delete ? (y / n)");
	if (del == "y")
	{
		eraseCookie(elem.id);
		document.getElementById("ft_list").removeChild(elem);
	}
}

