
var listaManuale = [];
 
/* Adaugam manualele intr-o lista atunci cand apasam adauga in cos */
/* Parcurgem fiecare buton de adaugare in cos */
 
$(".addcos").each(function(){
 
    /* Adaugam pe fiecare buton o functie atunci cand dam click pe el */
    $(this).click(function(e){
 
        e.preventDefault();
 
        listaManuale.push({
            "nume": $(this).data("name"),
            "cantitate": 1,
            "pret": $(this).data("price")
        });
 
        /* Salvam in localstorage lista ca sa o putem folosi si pe alta pagina */
        localStorage.setItem("lista-manuale", JSON.stringify(listaManuale));
 
        console.log(listaManuale);
 
    });
 
});
 
 
 
/* Adaugare manuale in tabelul din cos.php din lista salvata mai sus */
function adaugareInCos(){
 
    /* Descarcam lista din local storage si o punem in lista manuale */
    listaManuale = localStorage.getItem("lista-manuale");
    listaManuale = JSON.parse(listaManuale);
 
    /* Parcurgem lista */
    listaManuale.forEach(function(manual){
        $(".table").append("<tr>" + "<td>" + manual.nume + "</td>" + "<td>"
            + manual.cantitate + "</td>" + "<td>" + manual.pret + "</td>" + "</tr>");
    });
}
 

//Variabile
const produse = document.querySelector('#lista-produse'),
      shoppingCartContent = document.querySelector('#cart-content tbody'),
      clearCartBtn = document.querySelector('#clear-cart');

//Listeners
loadEventListeners();

function loadEventListeners(){
    //Cand un produs nou este adaugat
    produse.addEventListener('click', cumparaProdus);

    //Stergere produs din cos
    shoppingCartContent.addEventListener('click', removeProdus);

    //Sterge toate produsele Cart BTN
    clearCartBtn.addEventListener('click', clearCart);

    //Document ready
    document.addEventListener('DOMContentLoaded', getFromLocalStorage);
}

//Functii
function cumparaProdus(e){
    e.preventDefault(); //nu incearca sa deschida linkul
    //console.log(e.target);
    // Use delegation to find the product that was added
    if(e.target.classList.contains('add-to-cart')){
        //read the product values
        const produs = e.target.parentElement.parentElement;
    
        //read the values
        getProductInfo(produs);
    }
}

//Citeste html-ul cu informatii despre produs
//Read the html info of the product
function getProductInfo(produs){

    //Create an object with product data
    const produsInfo = {

        image: produs.querySelector('img').src,
        denumire: produs.querySelector('h4').textContent,
        pret: produs.querySelector('.price').textContent,
        id: produs.querySelector('a').getAttribute('data-id')

    }
    //Adauga in cos
    addIntoCart(produsInfo);
    
}

//Afiseazza produsul selectat in cos
function addIntoCart(produs){

    //creeaza <tr> 
    const row = document.createElement('tr');

    //Template 
    //innerTEMPLATE display in html
    row.innerHTML = `
        
        <tr>
            <td>
                <img src="${produs.image}" width="100px">
            </td>
            <td>${produs.denumire}</td>
            <td>${produs.pret}</td>
            <td>
                <a href="#" class="remove" data-id="${produs.id}">X</a>
            </td>
        </tr>
    `;

    //Add into the shopping cart
    if(true){

        shoppingCartContent.appendChild(row);
        alert("Produs adaugat cu succes!");
    }
    

    //Adauga produsele in local storage
    salveazaInStorage(produs);
}

// Adauga produs in localSTORAGE
function salveazaInStorage(produs){
    let produse = getProduseFromStorage();

    // add the product in the array
    produse.push(produs);

    //storage only saves strings, we need to convert JSON to string
    localStorage.setItem('produse', JSON.stringify(produse)); //salveaza listsa ca si obiect
}

//Get the content from storage
function getProduseFromStorage(produs){

    let produse;
    //daca exista ceva in LocalStorage get the value, daca nu creeaza o listsa goala
    //if somethign exists then we get the value, otherwise creat an empty array
    if(localStorage.getItem('produse') === null){

        produse = [];
    }else {
        produse = JSON.parse(localStorage.getItem('produse'));
    }
    return produse;
}


//Sterge produs din cos
function removeProdus(e){
    e.preventDefault();
    if(e.target.classList.contains('remove')){
        e.target.parentElement.parentElement.remove();
    }
}

//Sterge toate produsele din cos
function clearCart(e){
    e.preventDefault();
    shoppingCartContent.innerHTML = '';

    //Sterge din localstorage
    clearLocalStorage();
}

//Sterge din localstorage
function clearLocalStorage(){
    localStorage.clear();
}

//Load when document its ready and print products in the shopping cart
function getFromLocalStorage(){
    let produseLS = getProduseFromStorage();

    //LOOP through the products and print into the cart
    produseLS.forEach(function(produs){

        //create the table row
        const row = document.createElement('tr');

        //print the content
        row.innerHTML = `
        <tr>
            <td>
                <img src="${produs.image}" width="100px">
            </td>
            <td>${produs.denumire}</td>
            <td>${produs.pret}</td>
            <td>
                <a href="#" class="remove" data-id="${produs.id}">X</a>
            </td>
        </tr>
        `;
        shoppingCartContent.appendChild(row);
    });
}

