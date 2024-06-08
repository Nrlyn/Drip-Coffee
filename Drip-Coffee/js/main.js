let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let products = document.querySelector('.cart-items-container');

document.querySelector('#btnadd').onclick = () =>{
    cartItem.classList.toggle('active');
}

// var addItemId = 0;
// function addToCart(item) {
//     addItemId += 1;
//     var selectedItem = document.createElement('div');
//     selectedItem.classList.add('cartImg');
//     selectedItem.setAttribute('id',addItemId);
//     var img = document.createElement('img');
//     img.setAttribute('src',item.children[0].currentSrc);
//     var title = document.createElement('div');
//     title.innerText = item.children[1].innerText;
//     var label = document.createElement('div');
//     label.innerText = item.children[2].children[0].innerText;
//     var select = document.createElement('span');
//     select.innerText = item.children[2].children[1].value;
//     label.append(select);
//     var cartItems = document.getElementsById('title');
//     selectedItem.append(img);
//     selectedItem.append(title);
//     cartItems.append(selectedItem);
// }










// var closeBtns = document.getElementsByIdName("#close");

// var i;
// for(i=0;i<closeBtns.length;i++) {
//     closeBtns[i].onclick = function(){
//         var litask = this.parentElement;
//         litask.remove();
//         //to hide use the code below
//         // litask.style.display= "none";
//     }
// }

// var product = document.querySelector(".cart-item");

// document.getElementById("btnAdd").addEventListener('click', function() {
//     newElement();
// });

// //Add task item to list
// function newElement() {
//     var newTask = document.createElement(".box");
//     var txtTask = document.getElementsByClassName("cart-item");

//     newTask.appendChild(document.createTextNode(txtTask.value))

// }

// var closeTag = document.createElement('span');
//     closeTag.appendChild(document.createTextNode("x"));
//     closeTag.className = "close";
//     closeTag.addEventListener('click',function(ev) {
//         this.parentElement.remove();
//     })

//     newTask.appendChild(closeTag);