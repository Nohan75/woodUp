function initMap() {
    // The location of Uluru
    const woodup = { lat: 48.8496575, lng: 2.3006246 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 11,
      center: woodup,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: woodup,
      map: map,
    });
  }