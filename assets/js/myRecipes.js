const listRecipes = () =>{

     // list of recipes
    
     let recipeContainer = document.getElementById("list-group");

     // create recipe card
     let recipeCard = document.createElement("a");
     recipeCard.className = "list-group-item recipeItem";
     let heading= document.createElement("h2");
     heading.className ="list-group-item-heading";


    // get recipe names
    let myRecipes=JSON.parse(localStorage.getItem("recipes") || "[]");
    myRecipes.forEach(function(recipe) {
        let label = (recipe).replace(/[\[\]'"]+/g,'');
        let name =label.replace("\[\]", "");
        console.log(name)
        heading.innerText=name;

    });
    // get url's
    let myRecipeAddress=JSON.parse(localStorage.getItem("address") || "[]");
    console.log(myRecipeAddress)
    myRecipeAddress.forEach(function(address) {
        console.log(address);
        recipeCard.href=address;
    });

    
   

   
    recipeContainer.append(recipeCard);


}
listRecipes();