var prod1 = document.getElementById("product1");
var prod2 = document.getElementById("product2");
var prod3 = document.getElementById("product3");

var numbers1 = document.getElementById("amount1");
var numbers2 = document.getElementById("amount2");
var numbers3 = document.getElementById("amount3");

var shipping = document.getElementById("shipping");

var userName = document.getElementById("userName");
var passWord = document.getElementById("passWord");
 
function reset()
{
    prod1.checked= false;
    prod2.checked= false;
    prod3.checked= false;
    numbers1.value ="";
    numbers2.value ="";
    numbers3.value ="";
    shipping.checked =false;
}

function valid()
{
	//I could not get validation to work correctly so I decided to make an alert box to tell the user how to input the right combination
	alert("Please select everything in the item box and give it an amount and 1 option from shipping to make this work);
}