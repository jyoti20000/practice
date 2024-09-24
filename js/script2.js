function Car(make, model, year)  //function constructor
{
    this.make = make;
    this.model = model;
    this.year = year;
    this.display = function()
    {
        document.write(this.make + this.model + this.year);
    
    };
}
let car1 = new Car ("Hyundai", "i20", 2014);
let car2 = new Car ("Honda", "City", 2005 );
let car3 = new Car ("Tata", "Nano", 2012);

document.write(car1.make);
document.write(car1.modal);
document.write(car1.year);