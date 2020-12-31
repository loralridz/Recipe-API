const listRecipes = () =>{

     // list of recipes
    let recipeLabels = [];
    let recipeUrls = [];
    
    // get recipe names
    let myRecipes=JSON.parse(localStorage.getItem("recipes") || "[]");
    myRecipes.forEach(function(recipe) {
        // let label = (recipe).replace(/[\[\]'"]+/g,'');
        // let name =label.replace("\[\]", "");
        recipeLabels.push(recipe.replace(/[^a-zA-Z ]/g, ""));
    });

    // get url's
    let myRecipeAddress=JSON.parse(localStorage.getItem("address") || "[]");
    myRecipeAddress.forEach(function(address) {
        recipeUrls.push(address);
        
    });
    buildList(recipeUrls,recipeLabels);

}
listRecipes();

function buildList(recipeUrls,recipeLabels){
    let recipeList = document.getElementById("list-group");
for (let index = 0; index < recipeLabels.length; index++) {
 
     // create recipe card
     let recipeCard = document.createElement("a");
     recipeCard.className = "list-group-item recipeItem";
    //  heading
     let heading= document.createElement("h2");
     heading.className ="list-group-item-heading";
    //  set item value
     heading.innerText=recipeLabels[index];
    //  recipeCard.href=recipeUrls[index];

     // Recipe button
    let recipeButton = document.createElement("a");
    recipeButton.className = "getRecipe btn-primary";
    recipeButton.innerText = "Remove Recipe";
    recipeButton.id =index+1;
    recipeButton.onclick = function(){ 
 // get recipe names
 let myRecipes=JSON.parse(localStorage.getItem("recipes") || "[]");
     let myRecipesNew=[];
     let indexx=1;
     myRecipes.forEach(function(recipe) {
         if(indexx!=index+1){        myRecipesNew.push(recipe);}
        indexx++;
    });
    localStorage.removeItem("recipes");
    localStorage.setItem('recipes', JSON.stringify(myRecipesNew));    
    location.reload()

}


     recipeCard.append(heading);
    recipeCard.append(recipeButton);
     recipeList.append(recipeCard);
    
}
   

}