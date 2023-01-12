let numbers = [2, 5, 12, 13, 15, 18, 22];
for(let i = 0; i < numbers.length; i++){
    if(numbers[i] %2===0){
        isEven(numbers[i]);
    }
}
function isEven(num) {
    console.log(num + 'は偶数です');
}


class Car{
    constructor(gass,number){
        this.gass=gass;
        this.number=number;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.number}です`);
    }
}
let car1 = new Car(20,1122);
car1.getNumGas();
