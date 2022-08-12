const form = document.getElementById('form');


const productName = document.getElementById('productName');
const productDesc = document.getElementById('productDesc');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs(){
    
    const productNameValue = productName.value.trim();
    const productDescValue = productDesc.value.trim();

    if (productNameValue === ''){
        setErrorFor1(productName, '*Product Name is required')
    } else{
        setSuccessFor1(productName);
    }

    if (productDescValue === ''){

        setErrorFor3(productDesc, '*Product Description is required')

    }  else {
        setSuccessFor3(productDesc);
    }
}

function setErrorFor1(input, message){
    const formControl1 = input.parentElement;
    const small = formControl1.querySelector('small');

    small.innerText = message;

    formControl1.className = 'formControl1';
}

function setSuccessFor1(input){
    const formControl1 = input.parentElement;
    formControl1.className = 'formControl1';
}

function setErrorFor3(input, message){
    const formControl3 = input.parentElement;
    const small = formControl3.querySelector('small');

    small.innerText = message;

    formControl3.className = 'formControl3';
}

function setSuccessFor3(input){
    const formControl3 = input.parentElement;
    formControl3.className = 'formControl3';
}


/*$(".addButton").hover(function(){
    $('.addProductContainer').css({color:'white'});

        },function(){

             $('.addProductContainer').css({color:'green'});
        });*/

