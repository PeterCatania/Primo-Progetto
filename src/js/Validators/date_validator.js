/**
* Validate the inserted value.
* @author: Peter Catania
* @version: 2018.10.15
*/
class DateValidator extends Validator{
    /**
	 * Empty constructor.
	 */
    constructor(element){
        super(element);
        this.currentDate = new Date();
        this.currentYear = this.currentDate.getUTCFullYear();
        this.currentMonth = this.currentDate.getUTCMonth();
        this.currentDay = this.currentDate.getUTCDate();
    }
    
    /**
	 * Get the Date from the value of the input inserted.
	 */
	getDate(){
        return new Date(this.getValue());
    }

    /**
	 * Get the year from the date.
	 */
    getYear(){
        return this.getDate().getUTCFullYear();
    }

    /**
	 * Get the month from the date.
	 */
    getMonth(){
        return this.getDate().getUTCMonth();
    }

    /**
	 * Get the day from the date.
	 */
    getDay(){
        return this.getDate().getUTCDate();
    }
    
    /**
     * Get the age from the date.
     */
    getAge(){
        var sign = 1;
        var diff_ms = this.currentDate.getTime() - this.getDate().getTime();
        if(diff_ms < 0){
            sign = -1;
        }
        var age_dt = new Date(diff_ms);
        var result = Math.abs(age_dt.getUTCFullYear() - 1970) * sign;
        return result;
    }

    /**
    * Validator for the "Birthday" input.
    */
    isAgeValid(){
        if(this.getAge() < 100 && this.getAge() >= 0){
            return true;
        }else{
            return false;
        }
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
		return this.isAgeValid();
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
}
