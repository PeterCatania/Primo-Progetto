/**
* Validate the inserted name value.
* @author: Peter Catania
* @version: 2018.10.16
*/
class NapValidator extends Validator{

    /**
	 * Empty constructor.
	 */
    constructor(){
        super();
		this.errorMessage = "deve contenere da 4 a 5 cifre";
        this.pattern = /^[\d]{4,5}$/i;
    }
}