// Register the service worker

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js', { scope: '/RC21128/DOSM%20Pahang%20Mobile/' })
      .then(_reg => console.log('Service worker registered'))
      .catch(err => console.log('Service worker not registered', err));
  }
  

  