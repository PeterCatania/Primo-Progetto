/**
* Validate the inserted value.
* @author: Peter Catania
* @version: 2018.10.15
*/
class Validator{
	/**
	 * Empty constructor.
	 */
    constructor(){
		this.errorMessage = "";
		this.regexp = "";
	}

	/**
	* Control if the value is valid.
	* @param {String} value controlled value
	* @return true if it's valid, else false
	*/
	isValid(value){
		return this.pattern.test(value);
	}

    /**
	* Get the error message of the validation.
	* @return error message of the validation.
	*/
	getErrorMessage(){
		return this.errorMessage;
	}
}
