// let abc;
// // abc = "Hello World!";
// abc = 5;
// document.write (abc);

let dog = 
{
    breed: 'Golden retriever',
    height: '4ft',
    age: 2,
    display: function()
    {
        document.write(this.breed + this.height + this.age);
    }
        
};
document.write(dog.breed);
document.write(dog.height);
document.write(dog.age);

dog.wieght = "34kg";
document.write(dog.wieght);
