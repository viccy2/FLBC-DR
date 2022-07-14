self.addEventListener('install',function (take){
  take.waitUntil(caches.open('serve').then(function(e){
    return e.addAll([
      '/',
      'index.html',
      'css/page.css'
      

      ]);
  })
  );
})
self.addEventListener('fetch',function(doit){
  doit.respondWith(caches.match(doit.request).then(function(response){
    return response || fetch(doit.request);
  })
   
   );

})