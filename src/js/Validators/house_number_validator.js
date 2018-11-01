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
		this.errorMessage = "deve contenere delle cifre, da 1 a 3, con al massimo una lettera del alfabeto alla fine";
        this.pattern = /^([\d]{1}[\d]{0,2}(([\d]{1})|([a-z]?)))$/i;
    }
}