function verif(){
     let entreprise=document.getElementById("Entreprise").value;
     let personne=document.getElementById("Personne a contacter").value;
     let fonction=document.getElementById("Fonction").value;
     let intervalle = /^[a-zA-Z-\s]+$/;
     if (entreprise==""){
       alert(' invalide');
       return false;
     }
     if ( (personne=="") (intervalle.test(personne)==false)) {
        alert(' invalide');
        return false;
      }
      if (fonction==""){
        alert(' invalide');
        return false;
      }
     else 
     return true;

} 


function affiche(etat)
{alert(etat);
if(etat=='pas')
document.getElementById("rdv1").style.display='none';
else
document.getElementById("rdv1").style.display='block';

}
function modalToggle(){
  const modal = document.getElementById('modal');
  modal.classList.toggle('active')
}
