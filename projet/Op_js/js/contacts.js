/* 
Activité : gestion des contacts
*/

// TODO : complétez le programme
var choix;
var nom = ["Lévisse", "Nelsonne"];
var prenom = ["Carole", "Mélodie"];


console.log("Bienvenue dans le gestionnaire de contacts !");

//Faire le programme tant que l'on a pas tapé 0
function contacts(){
do {
    console.log("1 : Lister les contacts");
    console.log("2 : Ajouter un contact");
    console.log("0 : Quitter");

    //Boîte de dialogue pour taper notre option
    choix = prompt("Choisissez une option :")

    //Switch utiliser pour executer notre algorithme suivant la valeur que l'on tape
    switch (choix) {

        //Algo à suivre si on tape 1
        case "1":

            console.log("Vous avez choisi l'option 1: \"Lister les contacts\"");

            for (var i = 0; i < nom.length; i++){
                console.log("Nom : " + nom[i] + ", prénom : " + prenom[i]);
            }
            
            break;
        
        //Algo à suivre si on tape 2   
        case "2":
            
            console.log("Vous avez choisi l'option 2: \"Ajouter un contact\"");

            nom.push(prompt("Entrez le nom du nouveau contact :"));
            prenom.push(prompt("Entrez le prénom du nouveau contact :"))

            console.log("Contact enregistré");
            break;

        //Si on tape 0, mettre fin au programme
        case "0":
            console.log("Au revoir");
            break;
        }
    }


while (choix != 0);

}
