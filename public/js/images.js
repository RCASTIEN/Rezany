window.onload =() =>{
    //Gestion des bouttons supprimer
    let links =document.querySelectorAll("[data-delete]")

    //on boucle sur links
    for(link of links){
        //on ecoute le clic
        link.addEventListener("click", function(e){
            //on empeche la navigation
            e.preventDefault()

            // on demande confirmation
            if(confirm("voulez-vous supprimer cette image?")){
                //on envoie une rquette ajax vers le href de lien avec la methods delete
                fetch(this.getAttribute("href"),{
                    method: "DELETE",
                    headers:{
                        "X-Requested-With":"XMLHttpRequest",
                        "Content-Type": "applications/json"
                    },
                    body:JSON.stringify({"_token": this.dataset.token})
                }).then(
                    //on recupere la reponse en Json
                    response => response.json()
                ).then(data=>{
                    if(data.success)
                        this.parentElement.remove()
                    else
                        alert(data.error)
                }).catch(e => alert(e))
            }
            
        })
    }
}