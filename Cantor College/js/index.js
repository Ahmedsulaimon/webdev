const myForm = document.getElementById('myForm');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');


myForm.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});


const validateInputs = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();

   
    
 if(fnameValue !== '' && lnameValue !== '' && emailValue !== ''){
     alert("form submitted"); 
    } 
 

};
