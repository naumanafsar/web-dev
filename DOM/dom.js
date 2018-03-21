// Examine the DOM
// console.dir(document);
// console.log(document.domain);
// console.log(document.URL);
// console.log(document.title);
// console.log(document.all);
// console.log(document.forms);
// console.log(document.links);
// console.log(document.links);
// console.log(document.all[10]);
// console.log(document.forms[0]);
// document.title = "Hello";   // changing directly the title
// console.log(document.nodeName);


// GETELEMENTBYID //

// console.log(document.getElementById('header-title'));
  // var Title = document.getElementById('header-title');
//   console.log(Title);
  // var Title = document.getElementById('main-header');
  // Title.textContent = 'Hello World!';  //It Ignores Style
  // Title.innerText = "Hello From Text!";
  // Title.style.borderBottom = "solid 3px #000";

// GETELEMENTBYCLASS //
var items = document.getElementsByClassName('list-group-item');
console.log(items);
items[0].textContent = "Hello";
