/**
* Validate the inserted name value.
* @author: Peter Catania
* @version: 2018.10.16
*/
class HouseNumberValidator extends Validator{

    /**
	 * Empty constructor.
	 */
    constructor(){
        super();
		this.errorMessage = "deve contenere al massimo 3 cifre seguite da due lettere del alfabeto";
        this.pattern = /^([1-9][0-9]{0,3}[a-z]{0,1})+([ ]*))$/i;
    }
}