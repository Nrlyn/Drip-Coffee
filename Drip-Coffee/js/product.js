let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}


const product = [
    {
        id: 0,
        images: '../images/latte.jpg',
        title: 'Latte',
        price: 120, 
    },
    {
        id: 1,
        images: '../images/espresso.png',
        title: 'Espresso',
        price: 100, 
    },
    {
        id: 2,
        images: '../images/spanish.jpg',
        title: 'Spanish', 
        price: 140, 
    },
    {
        id: 3,
        images: '../images/caramel.jpg',
        title: 'Caramel', 
        price: 145, 
    },
    {
        id: 4,
        images: '../images/mocha.avif',
        title: 'Mocha', 
        price: 150, 
    },
    {
        id: 5,
        images: '../images/dirty-chai.avif',
        title: 'Dirty-Chai', 
        price: 150, 
    }
];

const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {images, title,  price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${images}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>₱ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a){
    let j = 0, total=0;
    document.getElementById("count").innerHTML = cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "₱ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((item)=>
        {
            var {images, title, price} = item;
            total=total+price;
            document.getElementById("total").innerHTML = "₱ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowing' src=${images}>
                </div>
                <p style='font-size: 12px;'>${title}</p>
                <h2 style='font-size: 15px;'>${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }
}