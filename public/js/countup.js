function counting(){
    return{
        init(){
            
            this.apartmentsValue = this.startValue;
            this.fromSquareFootageValue = this.startValue;
            this.toSquareFootageValue = this.startValue;
            this.parkingSpacesValue = this.startValue;
        },
        started: false,
        isCounting: false,
        startValue: 0, 
        apartmentsValue: null,
        endApartmentsValue: 12,
        fromSquareFootageValue: null,
        endFromSquareFootageValue: 60,
        toSquareFootageValue: null,
        endToSquareFootageValue: 99,
        parkingSpacesValue: null,
        endParkingSpacesValue: 100,                    
        delay: 30,
        step: 1,
        toggleCounting() {
            if(!this.started){
                this.countUpApartments();
                this.countUpFromSquareFootage(); 
                this.countUpToSquareFootage(); 
                this.countUpParkingSpacesValue(); 
                this.started = true;
            };
            if(!this.isCounting){
                this.isCounting = true;  
            } else {
                this.isCounting = false;
            }
        },
        countUpApartments(){
            setTimeout(() => {
            if (this.apartmentsValue < this.endApartmentsValue ) { 
                if(this.isCounting){
                    this.apartmentsValue += this.step;
                }
                this.countUpApartments();
            };
            }, this.delay);
        },
        countUpFromSquareFootage(){
            setTimeout(() => {
            if (this.fromSquareFootageValue < this.endFromSquareFootageValue ) { 
                if(this.isCounting){
                    this.fromSquareFootageValue += this.step;
                }
                this.countUpFromSquareFootage();
            };                        
            }, this.delay);                          
        },
        countUpToSquareFootage(){
            setTimeout(() => {
            if (this.toSquareFootageValue < this.endToSquareFootageValue ) { 
                if(this.isCounting){
                    this.toSquareFootageValue += this.step;
                }
                this.countUpToSquareFootage();
            };                        
            }, this.delay);                          
        },
        countUpParkingSpacesValue(){
            setTimeout(() => {
            if (this.parkingSpacesValue < this.endParkingSpacesValue ) { 
                if(this.isCounting){
                    this.parkingSpacesValue += this.step;
                }
                this.countUpParkingSpacesValue();
            };                        
            }, this.delay);                          
        }                                            
    }
}