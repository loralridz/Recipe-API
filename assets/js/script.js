
const API_KEY = `3adc0ab47f7d222db5976d4ba32977b8`;
const APP_ID = `885f8879`;
let searchValue="";
let url = ``;

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
    //   mode: 'cors', // no-cors, *cors, same-origin
    //   cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    //   credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
    //   redirect: 'follow', // manual, *follow, error
    //   referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
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


const renderRecipes = (recipes) => {
 console.log("recipes",recipes)


  for(const recipee of recipes){

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
    // icon id

    let cardBody = document.createElement("div");
    cardBody.className ="card-body";

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
  }
}
