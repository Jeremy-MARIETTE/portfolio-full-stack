import React, { useState, useEffect } from 'react';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, IonCard, IonCardContent, IonCardHeader, IonCardSubtitle, IonCardTitle, IonButton } from '@ionic/react';
import { IonButtons,IonMenu, IonMenuButton } from '@ionic/react';
import { IonItem, IonList, IonSelect, IonSelectOption } from '@ionic/react';
import { IonBadge, IonLabel } from '@ionic/react';
import { IonCol, IonGrid, IonRow } from '@ionic/react';



import './Tab1.css';
import { call } from 'ionicons/icons';  // Note: L'import de 'call' semble inutilisé, veuillez le vérifier.

// Importez dataApi
import { dataApi } from '../data/index';
import menuLateral from '../data/fonctions';




const Tab2: React.FC = () => {
  const [nom, setNom] = useState('');
  const [prenom, setPrenom] = useState('');
  const [roles, setRoles] = useState('');

  useEffect(() => {
    callApi();
  }, []);  // Utilisation de useEffect pour appeler callApi() au montage du composant.

  function callApi() {
    console.log(localStorage.getItem('token'));

    fetch(dataApi[0].urlApi + 'me/user', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
    })
      .then((response) => response.json())
      .then((responseJson) => {
        console.log(responseJson[0].nom);
        console.log(responseJson[0].prenom);
        console.log(responseJson[0].roles[0]);
        console.log(responseJson[0].imageName);

        setNom(responseJson[0].nom);
        setPrenom(responseJson[0].prenom);
        setRoles(responseJson[0].roles[0]);
      })
      .catch((error) => {
        console.error(error);

        // Vider le token s'il est invalide ou expiré
        localStorage.removeItem('token');
      
        // Redirection vers la page de login
        window.location.href = "/login";
      });
  }

  return (
    
    
    <IonPage>
        <>

      <IonMenu contentId="main-content">
        <IonHeader>
          <IonToolbar>
            <IonTitle>Outils</IonTitle>
          </IonToolbar>
        </IonHeader>
        <IonContent id="menu-link" className="ion-padding">

        
        <IonItem routerLink="/tab2">Mon profil</IonItem>
        <IonItem routerLink="/tab3">Messagerie</IonItem>
        <IonItem routerLink="/tab3">Consignes</IonItem>
        <IonItem routerLink="/tab3">Rondes</IonItem>
        <IonItem routerLink="/tab3">Rapports</IonItem>
        <IonItem routerLink="/tab3">Fin de service</IonItem>
        <IonItem routerLink="/tab3">Déconnexion</IonItem> 

       
        
        </IonContent>
      </IonMenu>

      <IonPage id="main-content">
        <IonHeader>
          <IonToolbar>
            <IonButtons slot="start">
              <IonMenuButton></IonMenuButton>
            </IonButtons>
            <IonTitle>VIGITEK</IonTitle>
          </IonToolbar>
        </IonHeader>
        <IonContent className="ion-padding">

        <IonItem>
        {prenom} {nom}
        <IonBadge id="monSite" slot="end"></IonBadge>
      </IonItem>
     
        <IonGrid id="btnPriseDeService">

          <IonRow id="formulaire">
            <IonCol>
            <IonList>
              <IonItem>
                <IonSelect id="liste" aria-label="site" placeholder="Sélectionnez votre site">
                  
                </IonSelect>
              </IonItem>
            </IonList>
            </IonCol>
          </IonRow>
          <IonRow id="bouton">

       
          </IonRow>
        </IonGrid>

        </IonContent>

      </IonPage>
    </>
     
    </IonPage>
  );

};

const listeDesSites = () => {
  fetch(dataApi[0].urlApi + 'mes/sites', {

    method: 'GET',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
  })
  
    .then((response) => response.json())
    .then((responseJson) => {
      console.log(responseJson);

      

      //innerHTML dans l'id liste
      var liste = document.getElementById("liste");
      liste!.innerHTML = "";
      for (var i = 0; i < responseJson.length; i++) {

        //créer une option avec value et id = id du site

        var option = document.createElement("ion-select-option");
        //attribuer class ion-select-option
     

        option.id = responseJson[i].id;
        option.value = responseJson[i].nom;

      

        option.setAttribute("value", responseJson[i].id);

        option.innerHTML = responseJson[i].nom;
        liste!.appendChild(option);
      }

    //Ecouter une websocket SSE pour mettre à jour la liste des sites
    // var eventSource = new EventSource(dataApi[0].urlApi + 'mes/sites');
    // eventSource.onmessage = function(event) {
    //   console.log(event.data);
    //   listeDesSites();
    // };
    
   


    //get value class select-text
  

//get element selected in ion-select and display it in ion-button
      var liste = document.getElementById("liste");

      //get id de l'options choisie




      liste!.addEventListener("ionChange", function() {
        
      
        

        console.log("id du site choisi : "+liste.value);

        var idSite = liste.value;
      
        var bouton = document.getElementById("bouton");
        bouton!.innerHTML = "";
        var button = document.createElement("ion-button");
        button.innerHTML = "Prise de service";
        button.onclick = function() {
          priseDeService(idSite, responseJson);
          
        }
        bouton!.appendChild(button);
      });


    })
    .catch((error) => {
      console.error(error);

      // Vider le token s'il est invalide ou expiré
      //localStorage.removeItem('token');
    
  
    });
}

function mettreAJourSite(liste:any) {
 
  //afficher localstorage idSite
  var i = localStorage.getItem('idSite');
  console.log("Nom storage "+liste[i].nom);

  localStorage.removeItem('siteEnService');
  var siteEnService = liste[i].nom;
  //mettre siteEnService dans le localStorage
  localStorage.setItem('siteEnService', siteEnService);
 
}



listeDesSites();

//if token not exist, redirect to login

if(status == 401){
  window.location.href = "/login";
}

const priseDeService = (idSite, liste) => {
  alert("Prise de service agent, site "+idSite);
 //enregistrer idSite dans localStorage
  localStorage.setItem('idSite', idSite);

  var siteEnService = liste[idSite-1].nom;
  //mettre siteEnService dans le localStorage
  localStorage.setItem('siteEnService', siteEnService);

  //hide liste 
  var formulaire = document.getElementById("formulaire");
  formulaire!.style.display = "none";

  //hide bouton
  var bouton = document.getElementById("bouton");
  bouton!.style.display = "none";

    //innerHTML dans l'id site
    var site = document.getElementById("monSite");
    site!.innerHTML = ""+localStorage.getItem('siteEnService');

  //appel API pour envoi des données de prise de service


}

//quand la page est chargée, on appelle la fonction menuLateral


export default Tab2;
