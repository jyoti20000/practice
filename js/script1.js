let car1 = new Object();
car1.make = 'Hyundai';
car1.model = 'i20';
car1.year = 2014;
car1.display = function()
{
    document.write(this.make + this.model + this.year);
};

let car2 = new Object();
car2.make = 'Honda';
car2.model = 'City';
car2.year = 2005;
car2.display = function()
{
    document.write(this.make + this.model + this.year);
};

let car3 = new Object();
car3.make = 'Tata';
car3.model = 'Nano';
car3.year = 2012;
car3.display = function()
{
    document.write(this.make + this.model + this.year);
};