/**
* Validate the inserted value.
* @author: Peter Catania
* @version: 2018.10.15
*/
class Validator{
	/**
	 * Empty constructor.
	 */
    constructor(element){
		this.element = element;
		this.errorMessage = "Perfavore riempire il campo, è obbligatorio";
		this.validationMessage = "Perfavore rispettare il formato richiesto";
		this.emptyMessage = "Perfavore riempire il campo, è obbligatorio";
		this.regexp;
		this.required = true;
		this.empty = false;
		this.insertErrorMessage();
	}

	/**
	 * Set the element where insert the inputs to validate.
	 * @param {Element} element  element where insert the inputs to validate
	 */
	setElement(element){
		if(element && typeof(element) == typeof("")){
			this.element = element;
		}	
	}

	/**
	 * Get the element where insert the inputs to validate.
	 * @returns element where insert the inputs to validate
	 */
	getElement(){
		return this.element;
	}

	/**
	* Get the regexp for the validation of inputs.
	* @returns regexp for the validation of inputs
	*/
	getRegexp(){
		return this.regexp;
	}

	/**
	 * Set the regexp for the validation of inputs.
	 * @param {RegExp} regexp regexp for the validation of inputs
	 */
	setRegexp(regexp){
		if(regexp && typeof(regexp) == typeof(/a/)){
			this.regexp = regexp;
		}
	}

    /**
	* Get the error message of the validation.
	* @returns error message of the validation
	*/
	getErrorMessage(){
		return this.errorMessage;
	}

	/**
	 * Set the error message of the validation.
	 * @param {String} meassage error message of the validation
	 */
	setErrorMessage(message){
		if(message && typeof(message) == typeof("")){
			this.errorMessage = message;
		}
	}

	/**
	* Get the error message of the validation.
	* @returns error message of the validation
	*/
	getValidationMessage(){
		return this.validationMessage;
	}

	/**
	 * Set the error message of the validation.
	 * @param {String} meassage error message of the validation
	 */
	setValidationMessage(message){
		if(message && typeof(message) == typeof("")){
			this.validationMessage = message;
		}
	}

	/**
	* Get the error message for empty validation inputs.
	* @returns error message for empty validation inputs
	*/
	getEmptyMessage(){
		return this.emptyMessage;
	}

	/**
	 * Set the error message for empty validation inputs.
	 * @param {String} meassage error message for empty validation inputs
	 */
	setEmptyMessage(message){
		if(message && typeof(message) == typeof("")){
			this.emptyMessage = message;
		}
	}

	/***
	 * Return if is required, the input to validate, 
	 * true or false.
	 */
	isRequired(){
		return this.required;
	}

	/**
	 * Set if is required, the input to validate,
	 * true or false.
	 * @param {boolean} required define if is required, the input to validate
	 */
	setRequired(required){
		if(typeof(required) == typeof(true)){
			this.required = required;
		}
	}

	/***
	 * Return if is empty, the input to validate, 
	 * true or false.
	 */
	isEmpty(){
		return this.empty;
	}

	/**
	 * Set if is required, the input to validate,
	 * true or false.
	 * @param {boolean} empty define if is required, the input to validate
	 */
	setEmpty(empty){
		if(typeof(empty) == typeof(true)){
			this.empty = empty;
		}
	}

	/**
	 * Get the value of the input inserted.
	 */
	getValue(){
		return $(this.element).val();
	}

	/**
	* Control if the value is valid.
	* @param {String} value controlled value
	* @return true if it's valid, else false
	*/
	isValid(){
		if(!this.getValue()){
			if(this.isRequired()){
				return false;				
			}else{
				return true;
			}
		}
		return this.regexp.test(this.getValue());
	}

	/**
 	* Try to validate the user inserted input in a html {Element}, set the class "valid" or "invalid".
 	*/
	validate(){
		this.addValidity();
		if(this.getValue()){
			$(this.element).css('color', 'black');
			if(this.isValid()){
				this.hideErrorMessage();
			}else{
				this.setErrorMessage(this.validationMessage);
				this.insertErrorMessage();
			}
			this.setEmpty(false);
		}else{
			this.setDefaultBackround();
			this.setErrorMessage(this.emptyMessage);
			this.insertErrorMessage();
			this.setEmpty(true);
		}
	}

	/**
 	* Set the default background of the element.
 	*/
	setDefaultBackround(){
    	$(this.element).css("background-color","#fafafa");
	}

	/**
 	* Remove the corrispective validation css class,
 	* and set the currect backround.
 	*/
	addValidity(){
		if(this.isValid()){
			$(this.element).addClass("valid");
			$(this.element).removeClass("invalid");
			$(this.element).css("background-color","hsla(87, 70%, 40%,0.4)");
		}else{
			$(this.element).addClass("invalid");
			$(this.element).removeClass("valid");
			$(this.element).css("background-color","hsla(5, 100%, 40%,0.4)");
		}
	}

	/**
 	* Remove the corresponding validation css class,
 	* and set the default backround.
 	*/
	removeValidity(){
		$(this.element).removeClass("invalid");
		$(this.element).removeClass("valid");
		this.setDefaultBackround();
	}

	/**
 	* Hide the error message element.
 	*/
	hideErrorMessage(){
    	$(this.element + "Error").slideUp();
	}

	/**
 	* Show the error message element.
 	*/
	showErrorMessage(){
    	$(this.element + "Error").slideDown();
	}

	/**
 	* Insert the error message in the corresponding element.
 	*/
	insertErrorMessage(){
		$(this.element + "Error").html(this.errorMessage);
	}

	/**
	 * Clear the value in the element, 
	 * and hide the error message.
	 */
	reset(){
		if(!this.empty){
			$(this.element).val("");
			this.hideErrorMessage();
			this.removeValidity();
			this.setErrorMessage(this.emptyMassage);
			this.insertErrorMessage();
			this.setEmpty(true);
		}
	}

	/**
	 * Submit the element error, if is invalid.
	 */
	submitError(){
		if(!this.isValid()){
			this.showErrorMessage();
		}
	}
}
