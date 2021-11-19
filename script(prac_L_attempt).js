const form = $('#form_L');
const search1 = $('#search1');


// error count
let errors = 0;

// show input error message
const showError = (displayPlace, message) => {
    displayPlace.html(message);
    errors += 1;
}


//Check for numbers only
const checkSearch1 = (input) => {
    const regex = /^\d+$/;

    if(!regex.test(input.val())){
        showError(input.next(), 'Input error. Search should contain only numbers');
    }
}

const validateForm = (e) =>{
    e.preventDefault();
    $('small').html('');
    errors = 0;

    checkSearch1(search1);

    if(errors === 0){
        return true;
    }
}
