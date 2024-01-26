// Importez les composants nécessaires
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, IonInput, IonButton } from '@ionic/react';
import { IonCard, IonCardContent, IonCardHeader, IonCardSubtitle, IonCardTitle } from '@ionic/react';

// Importez dataApi
import { dataApi } from '../data/index';


import ExploreContainer from '../components/ExploreContainer';
import { useState } from 'react';
import './Login.css';


const Tab1: React.FC = () => {

  const [email, setEmail] = useState('');
  const [motDePasse, setMotDePasse] = useState('');
 
  return (
    <IonPage>
   
      <IonContent fullscreen>
        <IonHeader collapse="condense">
       
        </IonHeader>

        <IonCard id="custom-card-container">
      <IonCardHeader>
        <IonCardTitle class="ion-text-center">Login</IonCardTitle>
      </IonCardHeader>

      <IonInput 
          placeholder="Email" 
          value={email} 
          onIonInput={(e) => setEmail(e.detail.value!)}
        ></IonInput>

        <IonInput 
          type="password" 
          placeholder="Mot de passe" 
          value={motDePasse} 
          onIonInput={(e) => setMotDePasse(e.detail.value!)}
        ></IonInput>

        <IonButton expand="full" onClick={() => submitForm(email, motDePasse)}>
          Se connecter
        </IonButton>
     
    </IonCard>

      </IonContent>
    </IonPage>
  );
};

// Fonction submitForm modifiée pour accepter les valeurs du nom d'utilisateur et du mot de passe
const submitForm = (email:any,motDePasse:any) => {
  console.log("Formulaire envoyé !");
  console.log("Email:", email);
  console.log("Mot de passe:", motDePasse);

  console.log("Url API:", dataApi[0].urlApi);

 

  if(email !== '' && motDePasse !== '') {
 
     fetch(dataApi[0].urlApi+'login', {
       method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
       body: JSON.stringify({
         email: email,
         password: motDePasse
       })
      })
     
      .then(data => {
        console.log('Success:', data);
        //alert("Connexion réussie !");
        console.log("Status "+data.status);
        //je veux récupérer le token
        data.json().then((data) => {
          var token = data.token;
          localStorage.setItem('token', token);
  
        });
      
        
        console.log("Mon token "+localStorage.getItem('token'));
        window.location.href = "/tab1";
       

      })
      .catch((error) => {
        console.error('Error:', error);
        //alert("Erreur lors de la connexion !");
      });


  }
  else {
    alert("Veuillez remplir tous les champs !");
  }


};

export default Tab1;
