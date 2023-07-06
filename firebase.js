import { initializeApp } from "firebase/app";
import { getMessaging, getToken } from "firebase/messaging";

var firebaseConfig = {
  apiKey: "AIzaSyDRVv3zcUwrZmgbo2A0OLVRrT4ongQC7Ew",
  authDomain: "project-core-92b12.firebaseapp.com",
  databaseURL: "https://project-core-92b12.firebaseio.com",
  projectId: "project-core-92b12",
  storageBucket: "project-core-92b12.appspot.com",
  messagingSenderId: "118072611371",
  appId: "1:118072611371:web:8d4054d5b2d114dbb2506e",
};

const messaging = getMessaging();

export const requestForToken = () => {
  return getToken(messaging, { vapidKey: REPLACE_WITH_YOUR_VAPID_KEY })
    .then((currentToken) => {
      if (currentToken) {
        console.log("current token for client: ", currentToken);
        // Perform any other neccessary action with the token
      } else {
        // Show permission request UI
        console.log(
          "No registration token available. Request permission to generate one."
        );
      }
    })
    .catch((err) => {
      console.log("An error occurred while retrieving token. ", err);
    });
};

initializeApp(firebaseConfig);
