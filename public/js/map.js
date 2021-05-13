class Maps {
    markers = [];
    myLocation() {
        return new Promise((resolve, reject) => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((pos) =>
                    resolve(pos.coords)
                );
            } else {
                const error = new Error("Error");
                reject(error);
            }
        });
    }
    addMarker(map, pos) {
        return new Promise((resolve, reject) => {
            let marker = new google.maps.Marker({
                position: pos,
                map: map,
                // title: "Aquí estás!",
                // icon: 'https://i.postimg.cc/65GCkjzh/marker-Rest-White.png' // https://i.postimg.cc/L6rY4Vwm/marker2-copia.png
            });
            
            /*
            google.maps.event.addListener(infoWindow, 'domready', function() {
                let divInfo = $('#info').parent().parent().parent();
                divInfo[0].id = 'divRest';
                divInfo.addClass('flotante shadowRight');
                for (var i = 0; i < l.length; i++) {
                    if($(l[i]).css('z-index') == 'auto') {
                        $(l[i]).css('border-radius', '16px 16px 16px 16px');
                        $(l[i]).css('border', '2px solid red');
                    }
                }
            });
            */
            resolve(marker);
        });
    }
}
const myMap = new Maps();
function initMap() {
    myMap.myLocation().then((pos) => {
        let myLatLng = { lat: pos.latitude, lng: pos.longitude };
        
        $.ajax({
            url: "/locations",
            aysnc: false,
            success: function (response) {
                let json = JSON.parse(response);
                let map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: myLatLng,
                    disableDefaultUI: true,
                    styles: [
                        {
                            "featureType": "poi",
                            "stylers": [
                                { "visibility": "off" }
                            ]
                        }
                    ]
                });
                myMap.map = map;
                for (let i = 0; i < json.length; i++) {
                    ll = {
                        lat: json[i].latitud,
                        lng: json[i].longitud
                    };
                    console.log(ll);
                    myMap.addMarker(map, ll).then((marker) => {
                        marker.addListener("click", () => {
                            $('#divRest').css('left', 0);
                            $('#divRest').css('transition', '1s');
                            // Change icon
                        });
                        // myMap.markers["myLocation"] = marker;                
                    });
                }
            }
        });
    });
}
