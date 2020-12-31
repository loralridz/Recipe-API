const API_KEY = `3adc0ab47f7d222db5976d4ba32977b8`;
const APP_ID = `885f8879`;
let searchValue="";
let url = ``;
var all_recipe=[];
var all_favs=[];


// Submit form function
const searchRecipes = (e) => {
  e.preventDefault();
  searchValue = e.target.querySelector("input").value;
  e.target.querySelector("input").value="";
  url = `https://api.edamam.com/search?q=${searchValue}&app_id=${APP_ID}&app_key=${API_KEY}`;
  getRecipes(url)
    // .then(data => console.log(data))
    .then(data => renderRecipes(data.hits));
}

// API REQ RES Function
async function getRecipes(url = '') {
  let data = {}; 
  
    const response = await fetch(url, {
      method: 'post', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
   
      headers: {
        'Content-Type': 'application/json'
      
      },
  
      body: JSON.stringify(data) 
    });
    return response.json(); 
  }

    // document.addEventListener('DOMContentLoaded',()=>{

    //   getRecipes(`https://api.edamam.com/search?q=chicken&app_id=${APP_ID}&app_key=${API_KEY}`, { })
    //   .then(data => renderRecipes(data.hits)
    //     // console.log(data.hits[0].recipe.label); 
    //     // console.log(data.hits[0].recipe.ingredients[0].text); 
    //    )

let v=1;
const renderRecipes = (recipes) => {

console.log("recipes",recipes)
let loop=1;
  for(const recipee of recipes){
    

    all_recipe[v]=recipee.recipe;
   
    
    let recipeContainer = document.getElementById("recipeContainer");

    // create recipe card
    let recipeCard = document.createElement("div");
    recipeCard.className = "col";

    let card = document.createElement("div");
    card.className="card cardStyling";

    let cardImg = document.createElement("img");
    cardImg.className = "card-img-top";
    cardImg.src=recipee.recipe.image;
    
    // fav icon 
    
   
    let cardBody = document.createElement("div");
    cardBody.className ="card-body";
    
    
    let cardfav = document.createElement("button");
    cardfav.className="btn_fav-primary far fa-heart";
    cardfav.id=loop;
      cardfav.onclick = function(){ 
      cardfav.className="btn_fav-click fas fa-heart";
      // check if nothing in LS
      let current = localStorage.getItem('recipes');
        // if not
        current = current ? current.split(',') : [];
// add item
current.push(recipee.recipe.label);
let alerat = document.createElement("div");
alerat.className = "alert alert-success";
alerat.role = "alert";
alert("Added to My Recipes. (^_^) ");


// save LC 
localStorage.setItem('recipes', JSON.stringify(current));

// check if nothing in LS
let current2 = localStorage.getItem('address');
// if not
current2 = current2 ? current2.split(',') : [];
// add item
current2.push(recipee.recipe.url);
// save LC 
localStorage.setItem('address', JSON.stringify(current2));

      // localStorage.setItem(v, JSON.stringify(all_recipe[v]));
      
      // localStorage.setItem("my_recipes", JSON.stringify(all_recipe[cardfav.id]));
      // }

    //   if(JSON.parse(localStorage.getItem("my_recipes"))!==null){
    //   var temp=[];
    //   temp=JSON.parse(localStorage.getItem("my_recipes"));
    //   console.log(temp);
    //   var temp2=all_recipe[cardfav.id];
    //   for(var i=0;i<=temp.length;i++){
    //     if (i===temp.length){
    //       temp[i]=temp2;
    //     }
    //   }
    //   localStorage.setItem("my_recipes", JSON.stringify(temp));
    //   alert("Added to My Recipes. (^_^) ");
    //   console.log("if");
    //   console.log(temp);
    // }
      
    //   else{
    //     var temp=[];
    //     temp[0]=all_recipe[cardfav.id];
    //     localStorage.setItem("my_recipes",JSON.stringify(temp));
    //     alert("Added to My Recipes. (^_^) ");
    //   }
      }
    
    cardBody.append(cardfav);
    
    let cardTitle = document.createElement("h6");
    cardTitle.className = "card-title";
    cardTitle.innerHTML = recipee.recipe.label;
    cardBody.append(cardTitle);



    let recipeCalories= document.createElement("p");
    recipeCalories.className = "card-text";
    recipeCalories.innerHTML = "Calories : "+ Math.round(recipee.recipe.calories);
    cardBody.append(recipeCalories);
    
    let recipehealthLabels ="";
    if(recipee.recipe.healthLabels.length > 0 ){
      recipehealthLabels= document.createElement("p");
      recipehealthLabels.className = "card-text";
      recipehealthLabels.innerHTML = "Health Labels : "+recipee.recipe.healthLabels;
      cardBody.append(recipehealthLabels);
    }

    // Recipe button
    let recipeButton = document.createElement("a");
    recipeButton.className = "btn-primary";
    recipeButton.innerText = "Get Recipe";
    recipeButton.href = recipee.recipe.url;
    cardBody.append(recipeButton);

    card.append(cardImg,cardBody);
    recipeCard.append(card);
    recipeContainer.append(recipeCard);
    loop=loop+1;
  }
   
 //localStorage.setItem("my_recipes", JSON.stringify(all_recipe));

 //console.log(JSON.parse(localStorage.getItem("my_recipes")));

}


//code saved for later used if needed


// if(document.getElementById("loop")){
//   cardfav.onclick = function(){ 
//   cardfav.className="btn_fav-click fas fa-heart";

//   if(JSON.parse(localStorage.getItem("my_recipes"))!==null){
//   var temp=[];
//   temp=JSON.parse(localStorage.getItem("my_recipes"));
//   var temp2=all_recipe[cardfav.id];
//   temp.push(temp2);
//   localStorage.setItem("my_recipes", JSON.stringify(temp));
//   alert("Added to My Recipes. (^_^) ");}}
//   }
//   else{
//     var temp=[];
//     temp.push(all_recipe[cardfav.id]);
//     localStorage.setItem("my_recipes",JSON.stringify(temp));
//     alert("Added to My Recipes. (^_^) ");
//   }}}
// loop=loop+1;
// cardBody.append(cardfav);