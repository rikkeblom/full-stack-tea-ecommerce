let thisPage = 1;
let limit = 6;
let list = document.querySelectorAll('.allProducts_list .allProduct_product');

function loadProducts() {
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;

    list.forEach((allProduct_product, key)=>{
        if(key >= beginGet && key <= endGet) {
            allProduct_product.style.display = 'block';
        } else {
            allProduct_product.style.display = 'none';
        }
    })
    listPage();
}

loadProducts();

function listPage() {
    let count = Math.ceil(list.length / limit);
    document.querySelector('.allProduct_listPage').innerHTML = '';

    if(thisPage != 1) {
        let prev = document.createElement('li');
        prev.innerText = '<';
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        document.querySelector('.allProduct_listPage').appendChild(prev);
    }

    for(i = 1; i <= count; i++) {
        let newPage = document.createElement('li');
        newPage.innerText = i;

        if(i == thisPage) {
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.allProduct_listPage').appendChild(newPage);
    }

    if(thisPage != count) {
        let next = document.createElement('li');
        next.innerText = '>';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        document.querySelector('.allProduct_listPage').appendChild(next);
    }
}

function changePage(i) {
    thisPage = i;
    loadProducts();
}