/**
* Validate the inserted name value.
* @author: Peter Catania
* @version: 2018.10.16
*/
class NameValidator extends Validator{

    /**
	 * Empty constructor.
	 */
    constructor(){
        super();
		this.errorMessage = "deve contenere solo lettere";
        this.pattern = /^[a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž∂ð ,.-';:$!?#+&*()"]{0,50}$/i;
    }
}