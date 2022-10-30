
let cantidadEntradas = document.getElementById(`cantidad`);
//console.log(document.getElementById(`cantidad`));

let categoria = document.getElementById(`categoria`);
//console.log(document.getElementById(`categoria`));

let botonCalcular = document.getElementById(`calcular`);
//console.log(document.getElementById(`calcular`));

let totalaPagar = document.getElementById(`totalPagar`);
//console.log(document.getElementById(`totalPagar`));


function reset(){
    cantidadEntradas.value="";
    totalaPagar.innerHTML = "Total a pagar $";
}

function resumen(){
    
    let precioPagar=0;
 
    if(categoria.value=="estudiante"){
        
        precioPagar=(cantidadEntradas.value*(200-(200*0.8)));
        totalaPagar.innerHTML = precioPagar;
    }else if(categoria.value=="trainee"){
        
        precioPagar=(cantidadEntradas.value*(200-(200*0.5)));
        totalaPagar.innerHTML = precioPagar;
    }else if(categoria.value=="junior"){
        
        precioPagar=(cantidadEntradas.value*(200-(200*0.15)));
        totalaPagar.innerHTML = precioPagar;
    }

    //console.log(cantidadEntradas.value);
    //cantidadEntradas.value;
   // totalaPagar.innerHTML = cantidadEntradas.value;

}