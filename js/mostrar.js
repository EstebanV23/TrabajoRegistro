var menu = document.getElementById("menu");
var navegacion = document.getElementById("navegacion");

menu.addEventListener("click", function() 
    {
        if (navegacion.classList.contains("mostrar")) 
        {
            navegacion.classList.remove("mostrar")    
        }
        else
        {
            navegacion.classList.add("mostrar")
        }
    })

