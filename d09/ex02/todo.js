
var s = 0;
function add() {
  var todo = prompt("Enter your Todo");
  var list = document.getElementById("ft_list");
  if (todo) {
    s = s + 1;
    var newelem = document.createElement("label");
    newelem.setAttribute('id', s);
    newelem.setAttribute('onclick', 'dele(this.id)');
    newelem.innerHTML = todo;
    list.insertBefore(newelem, list.childNodes[0]);
  }
}
function dele(id) {
      var list = document.getElementById("ft_list");
      var newelem  = document.getElementById(id);
      list.removeChild(newelem);
  }
  
