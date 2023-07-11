//!VARIABLES
const rigaProdotti = document.querySelector('#rigaProdotti');
const spinner = document.querySelector('#spinner');
const containerProdotti = document.querySelector('#containerProdotti');


//!INITIALIZATIONS
//?funzione per fetch prodotti
async function getProducts(){
    const url = "./obj/product.json";

    try {
        const response = await fetch(url);
        const prod = await response.json();
        genCards(rigaProdotti, prod);
    } catch (error) {
        console.error(error);
    }
}

//?generazione cards
function genCards(target, obj){
    spinner.classList.add('d-none');
    containerProdotti.classList.remove('d-none')
    obj.products.forEach(prodotto => {
        let div = document.createElement('div');
        div.classList.add('col-md-4', 'col-xl-3', 'col-12', 'mb-5', 'animate__animated', 'animate__flipInX');
        let card = `
            <p class="small opacity-75"><i class="fa-regular fa-user me-3"></i>${prodotto.author}</p>
            <div class="card border-0 shadow">
                <img src="${prodotto.img}" class="img-fluid" alt="${prodotto.brand}">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-6 d-flex justify-content-start">
                            <strong>${parseInt(prodotto.price).toFixed(2)} €</strong>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <p class="opacity-50"><i class="fa-regular fa-heart me-2"></i>${prodotto.like}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <p class="text-success">${(parseInt(prodotto.price) + 1.05).toFixed(2) }€ incl. <i class="fa-solid fa-shield-halved ms-1"></i></p>
                        </div>
                    </div>

                    <div class="d-flex">
                        ${cicleSize(prodotto)}
                    </div>

                    <div>
                        <p class="opacity-50">${prodotto.brand}</p>
                    </div>
                </div>
            </div>
        `;
        div.innerHTML = card;
        target.appendChild(div);
    });
}

//?ciclo per taglie
function cicleSize(oggetto){
    let string = ``;
    oggetto.size.forEach(taglia=>{
        string += `<p class="text-primary opacity-50">${taglia}</p>`;
    })
    return string;
}

//!INVOCATIONS
getProducts();