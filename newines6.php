<script type="text/javascript">
	//Multiply all elements of an array by 2 //new implementations in ES6 
	let numbers = [1,2,3,4];
	let mul = numbers.map(function(num){
		return num * 2;
	});
	//console.log(mul);
	
	//spread operator ... spread the elements inside an array or objects
	let completeNumbers = [...numbers,5,6,7,8];
	let otherNumbers = [5,6, ...numbers];
	console.log(completeNumbers);
	console.log(otherNumbers);

	let newItems = {
		newBooks: 10,
		pen: 2,
		copies: 20
	}
	let libraryItems = {
		computers: 5,
		books: 50,
		...newItems
	}
	console.log(libraryItems);

	//Destructing an array ES5 vs ES6
	var user = ['ashish', 22, 'butwal'];

	var name = user[0];
	var age = user[1];
	var location = user[2];
	console.log(name, age, location);

	//new method in ES6
	let [name, age location] = user;
	console.log[name, age, location]

	//OR another method
	var person = {
		name: 'birat',
		age: 23,
		city: 'nawalpur'
	};
	var name = person.name;
	var age = person.age;
	var city = person.city;
	console.log(name, age, city);
	//new in es6
	var {name,age,city}= person;
	console.log(name, age, city);

// arrow function equal to function add(a,b)
	let add = (a,b) =>{
		return a+b;
	}
	add(10,50);

</script>