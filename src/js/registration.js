/**
 * Validator for the "Name" input.
 */
let name = new Validator("#name");
name.setRegexp(/^(\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+\s*(((\s+|-|')[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+.?\s*)?)){0,50}$/i);
name.setValidationMessage("Il nome deve contenere solo lettere alfabetiche e punteggiatura adeguata");

/**
 * Validator for the "Surname" input.
 */
let surname = new Validator("#surname");
surname.setRegexp(/^(\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+\s*(((\s+|-|')[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+\s*)?)){0,50}$/i);
surname.setValidationMessage("Il cognome deve contenere solo lettere alfabetiche e punteggiatura adeguata");

/**
 * Validator for the "Birthday" input.
 */
let birthday = new DateValidator("#birthday");
birthday.setRegexp(/^((3[01]{1}|[12]{1}[0-9]{1}|0[1-9]{1}).(1[012]{1}|0[1-9]{1}).((19|20)\d{2})){0,10}$/);
birthday.setValidationMessage("Puoi avere massimo 100 anni o essere nato oggi");

/**
 * Validator for the "Address" input.
 */
let address = new Validator("#address");
address.setRegexp(/^(\s*[a-z]+\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+\s*(((\s+|-|')[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð]+.?\s*)?)){0,50}$/i);
address.setValidationMessage("L'indirizzo deve contenere solo lettere alfabetiche e punteggiatura adeguata");

/**
 * Validator for the "House Number" input.
 */
let houseNumber = new Validator("#houseNumber");
houseNumber.setRegexp(/^([\d]{1}[\d]{0,2}(([\d]{1})|([a-zA-Z]?)))$/);
houseNumber.setValidationMessage("Il numero civico deve contenere solo delle cifre, da 1 a 3, con al massimo una lettera alfabetica alla fine");

/**
 * Validator for the "City" input.
 */
let city = new Validator("#city");
city.setRegexp(/^(\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð\s]+\s*){0,50}$/i);
city.setValidationMessage("La città deve contenere solo lettere alfabetiche e punteggiatura adeguata");

/**
 * Validator for the "NAP" input.
 */
let nap = new Validator("#nap");
nap.setRegexp(/^[\d]{4,5}$/);
nap.setValidationMessage("Il NAP deve solo contenere cifre, da 4 a 5");

/**
 * Validator for the "Telephone" input.
 */
let telephone = new Validator("#telephone");
telephone.setRegexp(/^(((\+|00)\d{1,3})([ \.\-]?)((\(0\)|0)?)(\d{2})([ \.\-]?)(\d{3})([ \.\-]?)(\d{2})([ \.\-]?)(\d{2}))$/);
telephone.setValidationMessage("Il numero di telefono deve essere nel formato internazionale, contenente il prefisso");

/**
 * Validator for the "Email" input.
 */
let email = new Validator("#email");
email.setRegexp(/^[\w]+((\.[\w]+))*@([\w]+\.){1,4}[\w-]{2,4}$/);
email.setValidationMessage("L'Email deve solo contenere lette e caratteri speciali adeguati");

/**
 * Validator for the "Hobby" input.
 */
let hobby = new Validator("#hobby");
hobby.setRegexp(/^(\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð.,:-_!?<>\(\)\{\}\[\]]+\s*){0,50}$/i);
hobby.setValidationMessage("L'Hobby deve contenere solo lettere alfabetiche e punteggiatura adeguata");
hobby.setRequired(false);

/**
 * Validator for the "Profession" input.
 */
let profession = new Validator("#profession");
profession.setRegexp(/^(\s*[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð.,:-_!?<>\(\)\{\}\[\]]+\s*){0,50}$/i);
profession.setValidationMessage("La professione deve contenere solo lettere alfabetiche e punteggiatura adeguata");
profession.setRequired(false);

/**
 * Validate the inserted "Name" input.
 */
$('#name').on("keyup change",function(){
    name.validate();
});

/**
 * Validate the inserted "Surname" input.
 */
$('#surname').on("keyup change",function(){
    surname.validate();
});

/**
 * Validate the inserted "Birthday" input.
 */
$('#birthday').on("change keyup ",function(){
    birthday.validate();
});

/**
 * Validate the inserted "Address" input.
 */
$('#address').on("keyup change",function(){
    address.validate();
});

/**
 * Validate the inserted "House number" input.
 */
$('#houseNumber').on("keyup change",function(){
    houseNumber.validate();
});

/**
 * Validate the inserted "City" input.
 */
$('#city').on("keyup change",function(){
    city.validate();
});

/**
 * Validate the inserted "NAP" input.
 */
$('#nap').on("keyup change",function(){
    nap.validate();
});

/**
 * Validate the inserted "Telephone" input.
 */
$('#telephone').on("keyup change",function(){
    telephone.validate();
});

/**
 * Validate the inserted "Email" input.
 */
$('#email').on("keyup change",function(){
    email.validate();
});

/**
 * Validate the inserted "Hobby" input.
 */
$("#hobby").on("keyup change",function(){
    hobby.validate();
});

/**
 * Validate the inserted "Profession" input.
 */
$('#profession').on("keyup change",function(){
    profession.validate();
});

/**
 * Set the chacked gender.
 */
function setGender(id){
    $("#" + id).prop("checked",true);
}

/**
 * If a input is invalid show the corresponding error message
 * and don't perform the form action,
 * otherwise the action is performed.
 */
$('#form').submit(() => {
    //show error message if their are invalid
    name.submitError();
    surname.submitError();
    birthday.submitError();
    address.submitError();
    houseNumber.submitError();
    city.submitError();
    nap.submitError();
    telephone.submitError();
    email.submitError();
    hobby.submitError();
    profession.submitError();

    //decide if is performable the form action
    if(
        name.isValid() &&
        surname.isValid() &&
        birthday.isValid() &&
        address.isValid() &&
        houseNumber.isValid() &&
        city.isValid() &&
        nap.isValid() &&
        telephone.isValid() &&
        email.isValid() &&
        hobby.isValid() &&
        profession.isValid()
    ){
        return true;
    }else{
        return false
    }
});

/**
 * Clear all inputs values, reset their css
 * and hide the corresponding error message.
 */
$('#empty').click(function(event){
    //prevent the use of default variables
    event.preventDefault();

    //reset all inputs (css; value)
    name.reset();
    surname.reset();
    birthday.reset();
    address.reset();
    houseNumber.reset();
    city.reset();
    nap.reset();
    telephone.reset();
    email.reset();
    hobby.reset();
    profession.reset();

    //Set the selected "Gender" as "M"
    setGender("M");
});