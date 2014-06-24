//@version 1.0
//@require jquery,google map


//GenUId pour généré avec jquery un id unique
// name = identidiant du block pour ajouter automatiquement un id sur un block html
(function($){
    var a=0;
    $.genUId=function(name,e){
        var d=(e?e+"-":"jqUID-")+(a++);
        if(name){
            $(name).attr("id",d)
        }
        return d
    }
}(jQuery));

//Ajout de getBounds
if (!google.maps.Polygon.prototype.getBounds)
    google.maps.Polygon.prototype.getBounds = function() {

        var bounds = new google.maps.LatLngBounds();

        this.getPath().forEach( function(latlng) {
            bounds.extend(latlng);
        } );

        return bounds;

    }

// AZURA
var azura=azura||{}
azura.PATH = '/azura/';
azura.maps=azura.maps||{};
azura.maps.instances=azura.maps.instances||{};
azura.maps.Map=function(name,mapconfig){
    //config par default de la map
    var defaultmapconfig ={
        center:new google.maps.LatLng(46.75984,1.738281),
        mapTypeControl:false,
        keyboardShortcuts:false,
        scrollwheel:false,
        mapTypeControlOptions:{
            mapTypeIds:[google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.HYRBID],
            position:google.maps.ControlPosition.DEFAULT,
            style:google.maps.MapTypeControlStyle.DEFAULT
        },
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        zoom:6,
        streetViewControl:true,
        scaleControl: false,
        panControl: false,
        overviewMapControl:false
    };
    var obj = this;
    //init de la map à null
    this.map=null;
    this.infowindow =null;
    this.liste=new Array();

    //on permet d'ajouter des config à la map
    this.config=$.extend(true,defaultmapconfig,mapconfig||{});

    this.canvas=typeof(name)==="string"?document.getElementById(name):name;

    if(!this.canvas) return;

    //on sauvegarde l'objet en cours dans le tableau des intances
    azura.maps.instances[this.canvas.id]=this;

    //methode d'initialisation de la map
    this.init=function(){
        //init de la taille du div si non defini
        if($(this.canvas).css('width')=='0px') $(this.canvas).css('width','100%');
        if($(this.canvas).css('height')=='0px') $(this.canvas).css('height','400px');
        this.map=new google.maps.Map(this.canvas,this.config);
        this.infowindow = new google.maps.InfoWindow();
        //on met en place le listener pour la gestion des removes
        this.listen('needremove',function(args){
            if(args[1] && args[2]){
                obj.unTrack(args[1],args[2].name);
            }
        });
    }

    //methode de recupération de l'objet map
    this.getMap=function(){
        return this.map;
    };

    //methode zoom
    // afficher ou fixer le zoom de la carte
    this.zoom=function(f){
        if(!f){
            return this.getMap().getZoom();
        }
        return this.getMap().setZoom(f);
    };

    //methode zoomIn
    // effectue un zoom d'un niveau sur la carte
    this.zoomIn=function(f){
        this.zoom(this.zoom() + 1);
    };

    //methode zoomIn
    // effectue un dézoom d'un niveau sur la carte
    this.zoomOut=function(f){
        this.zoom(this.zoom() - 1);
    };

    //methode panBy
    // Change le centre de la carte par la distance donnée en pixels.
    this.panBy=function(x,y){
        this.getMap().panBy(x,y);
    };

    //methode panTo
    //Change le centre de la map en prenant l'objet LatLng
    this.panTo=function(f){
        this.getMap().panTo(f);
    };

    //methode centre
    // afficher ou fixer le center de la carte
    this.center=function(f){
        if(!f){
            return this.getMap().getCenter();
        }
        return this.getMap().setCenter(f);
    };

    //methode bounds
    // afficher ou fixer les limites de la carte
    this.bounds=function(f){
        if(!f){
            return this.getMap().getBounds();
        }
        return this.getMap().fitBounds(f);
    };

    //Methode setOptions
    //permet de set les options de la map aprés sa création
    this.setOptions=function(f){
        return this.getMap().setOptions(f);
    }

    //methode resized
    // permet aprés une redimention de la carte de tout initialisé correctement
    this.resized=function(){
        var f=this.center();
        google.maps.event.trigger(this.getMap(),"resize");
        this.center(f);
    };

    //retourne le type d'affichage de map
    this.mapTypeId=function(f){
        if(!f){
            return this.getMap().getMapTypeId();
        }
        return this.getMap().setMapTypeId(f);

    }

    //methode listen
    //ajout un evenement sur la carte
    // name : nom de l'event à écouté ex: click
    // fonction : le code à exécuté
    // once : bool => true = addListenerOnce sinon addListener
    // return:  MapsEventListener
    this.listen=function(name,fonction,once){
        return google.maps.event[once?"addListenerOnce":"addListener"](this.map,name,fonction);
    };

    //methode unlisten
    //supprime un evenement sur la carte
    // f : MapsEventListener
    this.unlisten=function(f){
        google.maps.event.removeListener(f);
    };

    //methode trigger
    //ajout déclanche un évenement sur la carte
    // name : nom de l'event a déclancher
    this.trigger=function(name){
        return google.maps.event.trigger(this.map,name,arguments);
    };

    //methode clearOverlays
    //Efface tout le contenu ajouter à la map (marker, polygon,...)
    this.clearOverlays=function(){
        var todo = this.getTrackAll();
        for(var index in todo){
            var tmptodo=todo[index];
            for(var index2 in tmptodo){
                tmptodo[index2].remove();
            }
        };
    };

    //constructeur de la classe
    this.init();

}
//retourn l'objet latitude longitude
azura.maps.LatLng=function(lat,lng){
    return new google.maps.LatLng(lat,lng);
};

// Adapte les limites de la carte au tableau de coordonée passé en paramètre
azura.maps.Map.prototype.fitMapToPath=function(path){
    var obj = this;
    var bnd=new google.maps.LatLngBounds();
    path.forEach(function(element){
        bnd.extend(element);
    });
    //TODO : utiliser map.bounds
    this.getMap().fitBounds(bnd);
};

azura.maps.Map.prototype.stringToPath=function(string){
    var reg=new RegExp("[,]+", "g");
    var reg2=new RegExp("[ ]+", "g");
    var tab1=string.split(reg);
    var path = new google.maps.MVCArray();
    for (var i=0; i<tab1.length; i++) {
        var tab2=tab1[i].split(reg2);
        if (tab2.length==2) {
            path.push(new azura.maps.LatLng(tab2[1],tab2[0]));
        }
    }
    return path;
};


azura.maps.Map.prototype.pathToString=function(path){
    var string="";
    var stringEnd="";
    path.forEach(function(element, index){
        var lng = new Number(element.lng());
        var lat = new Number(element.lat());
        lng =lng.toFixed(6);
        lat =lat.toFixed(6);
        if(index==0){
            stringEnd=stringEnd+","+lng+" "+lat;
        }
        if(index>0)string= string+",";
        string= string+""+lng+" "+lat;
    });
    string=string+stringEnd;
    return string;
};

/************************************************
 * Stockage des overlays (markers,polygone,...)
 ***************************************************/


azura.maps.Map.prototype.addTrack=function(obj,type,overlayName){
    obj.name=overlayName?overlayName:$.genUId(null,type);
    if(!this.liste[type]){
        this.liste[type] = new Array();
    }
    this.liste[type][obj.name]= obj;
};

azura.maps.Map.prototype.unTrack=function(type,overlayName){
    if(this.liste[type][overlayName]){
        this.liste[type][overlayName].get().setMap(null);
        this.liste[type][overlayName]=null;
        delete (this.liste[type][overlayName]);
    }
};

azura.maps.Map.prototype.getTrackAll=function(){
    if(this.liste){
        return this.liste;
    }
    return new Array();
};

azura.maps.Map.prototype.getTrackType=function(type){
    if(this.liste[type]){
        return this.liste[type];
    }
    return new Array();
};

azura.maps.Map.prototype.getTrackTypeName=function(type,overlayName){
    if(this.liste[type][overlayName]){
        return this.liste[type][overlayName];
    }
    return null;
};

/************************************************
MARKER
 ***************************************************/
azura.maps.Map.prototype.fitMapToMarkerSet=function(){
    var markers = this.getTrackType('marker');
    var bnd=new google.maps.LatLngBounds();
    var a=markers.length;
    var elem;
    for(elem in markers){
        var latlng=markers[elem].position();
        bnd.extend(azura.maps.LatLng(latlng.lat(),latlng.lng()));
    }
    this.getMap().fitBounds(bnd);
};

//ajoute un marqueur à la map
azura.maps.Map.prototype.addMarker=function(omarker,markerName){
    this.addTrack(omarker,'marker',markerName);
    omarker.addToMap(this);
    return omarker;
};

azura.maps.Marker=function(latlng,config,omap){
    var defaultmarkerconfig={
        position:latlng
    };

    this.config=$.extend(true,defaultmarkerconfig,config||{});
    this.marker=new google.maps.Marker(this.config);

    this.contentWindow='';

    //methode addToMap
    //ajoute le marker sur une map
    this.addToMap=function(omap){
        this.marker.setMap(omap.getMap());
    // TODO lancé un event pour signaler l'ajout ?
    };

    //methode get
    //retourne le marker
    this.get=function(){
        return this.marker;
    };

    //methode position
    //retourne la position du marker
    this.position=function(){
        return this.marker.getPosition();
    };

    //methode remove
    //supprime le marker de la carte
    this.remove=function(){
        omap.trigger("needremove",'marker',this);
    };

    this.setIcon=function(f){
        this.marker.setIcon(f)
    };

    this.addInfoWindow=function(contentString){
        var map = this.map;
        if(map){
            this.listen('click', function() {
                map.infowindow.setContent(contentString);
                map.infowindow.open(map.getMap(),this);
            });
        }
    }

    this.closeInfoWindow=function(){
        var map = this.map;
        if(map){
            map.infowindow.close();
        }
    }

    //Methode setOptions
    //permet de set les options du marker aprés sa création
    this.setOptions=function(f){
        return this.marker.setOptions(f);
    }

    //methode listen
    //ajout un evenement sur le marker
    // name : nom de l'event à écouté ex: click
    // fonction : le code à exécuté
    // once : bool => true = addListenerOnce sinon addListener
    // return:  MapsEventListener
    this.listen=function(name,fonction,once){
        return google.maps.event[once?"addListenerOnce":"addListener"](this.marker,name,fonction);
    };

    //methode listen
    //supprime un evenement sur la carte
    // f : MapsEventListener
    this.unlisten=function(f){
        map.unlisten(f);
    };

    //si on a donné en parametre un objet map alors on l'ajoute sur la map
    if(omap){
        this.map=omap;
        omap.addMarker(this);
    }
}

/************************************************
Polygon
 ***************************************************/

azura.maps.Map.prototype.addPolygon=function(opolygon,polygonName){
    opolygon.name=polygonName?polygonName:$.genUId(null,"polygon");

    var polygon = this.getTrackType('polygon');
    var ctp=0;
    while(polygon[opolygon.name+"|"+ctp]){
        ctp++
    }
    opolygon.name+="|"+ctp;
    this.addTrack(opolygon,'polygon',opolygon.name);
    opolygon.addToMap(this);
    return opolygon;
};

azura.maps.Map.prototype.getPolygonByName=function(polygonName){
    return this.getTrackTypeName('polygon',polygonName);
}

azura.maps.Map.prototype.removePolygonByName=function(polygonName){
    var polygon = this.getTrackTypeName('polygon',polygonName);
    if(polygon){
        polygon.remove();
        this.unTrack('polygon',polygonName);
    }
}

azura.maps.Map.prototype.removeAllPolygon=function(){
    var polygons = this.getTrackType('polygon');
    if(polygons==null){
        return
    }
    for(var a in polygons){
        a.remove();
    }
};

azura.maps.Polygon=function(polyCoord,config,omap){

    var obj = this;

    var defaultpolygonconfig={
        paths:polyCoord,
        strokeColor:"#000000",
        strokeOpacity:1,
        strokeWeight:4,
        fillColor:"#000000",
        fillOpacity:0.2
    };

    this.config=$.extend(true,defaultpolygonconfig,config||{});
    this.polygon=new google.maps.Polygon(this.config);


    //TODO : utilisé le this.listen pour plus de cohérence
    var listen1 = google.maps.event.addListener(this.polygon.getPath(), 'set_at', function() {
        $('#'+omap.canvas.id).trigger('polygonmodified',[obj]);
    });
    var listen2 = google.maps.event.addListener(this.polygon.getPath(), 'remove_at', function() {
        $('#'+omap.canvas.id).trigger('polygonmodified',[obj]);
    });
    var listen3 = google.maps.event.addListener(this.polygon.getPath(), 'insert_at', function() {
        $('#'+omap.canvas.id).trigger('polygonmodified',[obj]);
    });

    //methode get
    //retourne le marker
    this.get=function(){
        return this.polygon;
    };


    //methode addToMap
    //ajoute le marker sur une map
    this.addToMap=function(omap){
        this.polygon.setMap(omap.getMap());
        $('#'+omap.canvas.id).trigger('polygoncreated',[obj]);
    };

    this.path=function(f){
        if(!f){
            return this.polygon.getPath();
        }
        return this.polygon.setPath(f);
    };

    //permet d'identifier le polygon en tant que polygone dessiner
    this.isDrawn=function(){
        if(!omap.dManager){
            omap.drawingManager({
                drawingMode:null,
                drawingControl: false
            });
        }
        google.maps.event.trigger(omap.dManager, 'polygoninit',this.name);
        var namepoly=this.name;
        var evtcancel = google.maps.event.addListener(omap.dManager,'cancelPolygon',function(){
            omap.removePolygonByName(namepoly);
            google.maps.event.removeListener(evtcancel);
            $('#'+omap.canvas.id).trigger('polygondeleted');
        });

        return this;
    }

    this.goPolygone=function(){
        omap.fitMapToPath(this.path());
        return this;
    }

    //methode bounds
    this.bounds=function(){
        return this.polygon.getBounds();
    };

    //methode remove
    //ajoute le marker sur une map
    this.remove=function(){
        if(this.polygon){
            omap.trigger("needremove",'polygon',this);
            google.maps.event.removeListener(listen1);
            google.maps.event.removeListener(listen2);
            google.maps.event.removeListener(listen3);
            $('#'+omap.canvas.id).trigger('polygondeleted');
        }
    };

    this.setEditable=function(is_editable){
        this.polygon.setEditable(is_editable)
    }

    //methode listen
    //ajout un evenement sur le polygon
    // name : nom de l'event à écouté ex: click
    // fonction : le code à exécuté
    // once : bool => true = addListenerOnce sinon addListener
    // return:  MapsEventListener
    this.listen=function(name,fonction,once){
        return google.maps.event[once?"addListenerOnce":"addListener"](this.polygon,name,fonction);
    };

    //methode listen
    //supprime un evenement
    // f : MapsEventListener
    this.unlisten=function(f){
        map.unlisten(f);
    };

    if(omap){
        omap.addPolygon(this,this.name);
    }
};

azura.maps.Map.DEFAULT_POLYGON_OPTIONS = {
    strokeColor:"#000000",
    strokeOpacity:1,
    strokeWeight:4,
    fillColor:"#000000",
    fillOpacity:0.2,
    clickable: false,
    zIndex: 99,
    editable: true
};

azura.maps.Map.prototype.drawingManager=function(config){
    var drawingOptions = {
        drawingMode: null,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [google.maps.drawing.OverlayType.POLYGON]
        },
        polygonOptions: azura.maps.Map.DEFAULT_POLYGON_OPTIONS
    }
    this.dManager = new google.maps.drawing.DrawingManager($.extend(true,drawingOptions,config||{}));
    this.dManager.setMap(this.map);
};

azura.maps.Map.prototype.polygonManager=function(config){
    new azura.maps.Controls.addPolygon(this);
};

azura.maps.Map.prototype.startPolygon=function(configPolygon){
    var omap = this;
    if(this.dManager){
        omap.cancelDrawPolygon();
        this.dManager.setOptions({
            polygonOptions: $.extend(true,azura.maps.Map.DEFAULT_POLYGON_OPTIONS,configPolygon||{})
        });
    }else{
        this.drawingManager({
            drawingMode:null,
            drawingControl: false,
            polygonOptions: configPolygon
        });
    }
    this.dManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);

    var evt = google.maps.event.addListener(this.dManager, 'polygoncomplete', function(polygon) {
        //on supprime le polygone dessiner
        polygon.setMap(null);
        //on ajoute le polygone au système
        var newpoly = new azura.maps.Polygon(polygon.getPath(),omap.dManager.polygonOptions,omap).isDrawn();
        google.maps.event.removeListener(evt);
        omap.dManager.setDrawingMode(null);
    });
}

azura.maps.Map.prototype.cancelDrawPolygon=function(disableManager){
    if(disableManager==true && this.dManager){
        this.dManager.setDrawingMode(null);
    }
    if(this.dManager){
        google.maps.event.trigger(this.dManager, 'cancelPolygon');
    }
}

azura.maps.Map.prototype.polyCircle=function(point, radius, dir,option,omap){
    radius = radius*0.000621371192237;//metre to miles

    var bounds = new google.maps.LatLngBounds();
    var d2r = Math.PI / 180;   // degrees to radians
    var r2d = 180 / Math.PI;   // radians to degrees
    var earthsradius = 3963; // 3963 is the radius of the earth in miles

    var points = 32;

    // find the raidus in lat/lon
    var rlat = (radius / earthsradius) * r2d;
    var rlng = rlat / Math.cos(point.lat() * d2r);


    var extp = Array();
    if (dir==1)	{
        var start=0;
        var end=points+1
    } // one extra here makes sure we connect the
    else		{
        var start=points+1;
        var end=0
    }
    for (var i=start; (dir==1 ? i < end : i > end); i=i+dir)
    {
        var theta = Math.PI * (i / (points/2));
        ey = point.lng() + (rlng * Math.cos(theta)); // center a + radius x * cos(theta)
        ex = point.lat() + (rlat * Math.sin(theta)); // center b + radius y * sin(theta)
        extp.push(new azura.maps.LatLng(ex, ey));
        bounds.extend(extp[extp.length-1]);
    }
    return new azura.maps.Polygon(extp,option,omap);
}

/************************************************
CONTROL
 ***************************************************/
azura.maps.Controls={};
azura.maps.Controls.addPolygon=function(omap){
    if(omap.dManager){
        omap.dManager.setOptions({
            drawingMode:null,
            drawingControl: true
        });
    }else{
        omap.drawingManager();
    }
    var evt = google.maps.event.addListener(omap.dManager, 'polygoncomplete', function(polygon) {
        //on supprime le polygone dessiner
        polygon.setMap(null);
        //on ajoute le polygone au système
        var newpoly = new azura.maps.Polygon(polygon.getPath(),omap.dManager.polygonOptions,omap);
        new azura.maps.Controls.removePolygon(omap,newpoly.name);
        google.maps.event.removeListener(evt);
        google.maps.event.removeListener(evt2);
    });

    var evt2 = google.maps.event.addListener(omap.dManager,'polygoninit',function(namepoly){
        new azura.maps.Controls.removePolygon(omap,namepoly);
        google.maps.event.removeListener(evt);
        google.maps.event.removeListener(evt2);
    });

}
azura.maps.Controls.removePolygon=function(omap,polygonName){

    if(omap.dManager) {
        omap.dManager.setOptions({
            drawingMode:null,
            drawingControl: false
        });
    }else{
        omap.drawingManager({
            drawingMode:null,
            drawingControl: false
        });
    }
    //on crée le bouton deletePolygone
    var e = $("<div id='deletePolygone'><div><img src='"+azura.PATH+"images/delete-polygon.gif'></div></div>");
    e.css('padding','4px');
    //action au click sur le bouton de deletePolygone
    e.click(function(){
        e.remove();
        omap.getMap().controls[google.maps.ControlPosition.TOP_CENTER].clear();

        //var newpoly = omap.getPolygonByName(polygonName);
        omap.removePolygonByName(polygonName);
        new azura.maps.Controls.addPolygon(omap,polygonName);
        $('#'+omap.canvas.id).trigger('polygondeleted');
    });


    omap.getMap().controls[google.maps.ControlPosition.TOP_CENTER].push(e.get(0));

}

/************************************************
Circle
 ***************************************************/

azura.maps.Map.prototype.addCircle=function(ocircle,circleName){
    this.addTrack(ocircle,'circle',circleName);
    ocircle.addToMap(this);
    return ocircle;
};

azura.maps.Circle=function(latlng,radius,config,omap){
    var defaultcircleconfig = {
        center: latlng,
        radius: radius,
        editable: false,
        strokeColor:"#000000",
        strokeOpacity:1,
        strokeWeight:4,
        fillColor:"#000000",
        fillOpacity:0.2
    };

    var obj = this;

    this.config=$.extend(true,defaultcircleconfig,config||{});
    this.circle = new google.maps.Circle(this.config);

    //methode get
    //retourne le cercle
    this.get=function(){
        return this.circle;
    };

    //methode addToMap
    //ajoute le marker sur une map
    this.addToMap=function(omap){
        this.circle.setMap(omap.getMap());
        $('#'+omap.canvas.id).trigger('circlecreated',[obj]);
    };

    this.goCircle=function(){
        omap.getMap().fitBounds(this.circle.getBounds())
        return this;
    }

    //methode remove
    //supprime le cercle de la carte
    this.remove=function(){
        omap.trigger("needremove",'circle',this);
    };

    //methode bounds
    // afficher ou fixer les limites de la carte
    this.bounds=function(){
        return this.circle.getBounds();
    };

    //methode listen
    //ajout un evenement sur le cercle
    // name : nom de l'event à écouté ex: click
    // fonction : le code à exécuté
    // once : bool => true = addListenerOnce sinon addListener
    // return:  MapsEventListener
    this.listen=function(name,fonction,once){
        return google.maps.event[once?"addListenerOnce":"addListener"](this.circle,name,fonction);
    };

    //methode listen
    //supprime un evenement
    // f : MapsEventListener
    this.unlisten=function(f){
        map.unlisten(f);
    };

    if(omap){
        omap.addCircle(this);
    }

}

/************************************************
Polyline
 ***************************************************/
//ajoute un marqueur à la map
azura.maps.Map.prototype.addPolyline=function(opolyline,polylineName){
    this.addTrack(opolyline,'polyline',polylineName);
    opolyline.addToMap(this);
    return opolyline;
};

azura.maps.Polyline=function(polyCoord,config,omap){
    var obj = this;
    var defaultpolylineconfig={
        path:polyCoord,
        strokeColor:"#000000",
        strokeOpacity:1,
        strokeWeight:2
    };

    this.config=$.extend(true,defaultpolylineconfig,config||{});
    this.polyline=new google.maps.Polyline(this.config);

    //methode get
    //retourne le polyline
    this.get=function(){
        return this.polyline;
    };

    //methode addToMap
    //ajoute le marker sur une map
    this.addToMap=function(omap){
        this.polyline.setMap(omap.getMap());
        $('#'+omap.canvas.id).trigger('polylinecreated',[obj]);
    };

    this.path=function(f){
        if(!f){
            return this.polyline.getPath();
        }
        return this.polyline.setPath(f);
    };

    this.goPolyline=function(){
        omap.fitMapToPath(this.path());
        return this;
    }

    //methode remove
    this.remove=function(){
        if(this.polyline){
            omap.trigger("needremove",'polyline',this);
            $('#'+omap.canvas.id).trigger('polylinedeleted');
        }
    };

    //methode listen
    //ajout un evenement sur le polyline
    // name : nom de l'event à écouté ex: click
    // fonction : le code à exécuté
    // once : bool => true = addListenerOnce sinon addListener
    // return:  MapsEventListener
    this.listen=function(name,fonction,once){
        return google.maps.event[once?"addListenerOnce":"addListener"](this.polyline,name,fonction);
    };

    //methode listen
    //supprime un evenement
    // f : MapsEventListener
    this.unlisten=function(f){
        map.unlisten(f);
    };

    if(omap){
        omap.addPolyline(this,this.name);
    }
}

/************************************************
Direction
 ***************************************************/
azura.maps.Direction=function(omap,config){

    var directionsService = new google.maps.DirectionsService();

    this.searchRoute=function(start,end){
        var request = {
            origin:start,
            destination:end,
            travelMode: google.maps.TravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            $('#'+omap.canvas.id).trigger('directioncompleted',[response, status]);
        });
    }

    var directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(omap.getMap());


    this.showRoute=function(origin,destination){
        $('#'+omap.canvas.id).bind('directioncompleted',function(event,response, status){
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });
        var responce = this.searchRoute(origin,destination);
    }

    this.clear=function(){
        directionsDisplay.setMap(null);
    }


}

/************************************************
Geocoder
 ***************************************************/
// deprecated - utiliser geocodeByAddress à la place
azura.maps.Map.prototype.findAddress=function(address){
    var obj = this;
    var geocoder =new google.maps.Geocoder();
    geocoder.geocode( {
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            obj.trigger('geocoder_results',results);
        } else {
            return null;
        }
    });
}

//methode geocodeByAddress
// Effectue une géolocalisation par adresse
// onSuccess: callback pour recevoir le résultat simple (LatLng) et le résultat détaillé (optionnel, objet google complexe)
// onFailure: callback pour recevoir l'erreur éventuelle
azura.maps.Map.prototype.geocodeByAddress=function(address, onSuccess, onFailure){
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (onSuccess) {
                onSuccess(results[0].geometry.location, results);
            }
        } else {
            if (onFailure) {
                onFailure(status);
            }
        }
    });
}

/************************************************
Places
 ***************************************************/
azura.maps.markerTypes={
    "HOUSE":{
        icon:azura.PATH+"images/markers/pin_bien.png"
    },
    "HOUSE_XS":{
        icon:azura.PATH+"images/markers/pin_XS.png"
    },
    "BABY":{
        icon:azura.PATH+"images/markers/pin_creche.png"
    },
    "KID":{
        icon:azura.PATH+"images/markers/pin_maternelle.png"
    },
    "SMALL_SCHOOL":{
        icon:azura.PATH+"images/markers/pin_elementaire.png"
    },
    "COLLEGE":{
        icon:azura.PATH+"images/markers/pin_college.png"
    },
    "HIGH_SCHOOL":{
        icon:azura.PATH+"images/markers/pin_lycee.png"
    },
    "STADE":{
        icon:azura.PATH+"images/markers/pin_stade.png"
    },
    "SUPERMARKET":{
        icon:azura.PATH+"images/markers/pin_supermarche.png"
    },
    "HOSPITAL":{
        icon:azura.PATH+"images/markers/pin_hopital.png"
    },
    "POSTAL":{
        icon:azura.PATH+"images/markers/pin_poste.png"
    },
    "METIER":{
        icon:azura.PATH+"images/markers/pin_metier.png"
    }

}

azura.maps.search=function(omap,stringSearch,typeSearch,markerconfig, searchconfig ){

    var request ={
        location:omap.center(),
        radius: 4000,
        bounds: omap.bounds(),
        keyword:stringSearch,
        types:typeSearch,
        limit: 10000
    }
    var obj = this;
    this.service = null;
    var markers=new google.maps.MVCArray();
    this.config = $.extend(true,{},markerconfig||{});
    this.searchconfig =  $.extend(true,request,searchconfig||{});

    this.init=function(omap){
        this.service = new google.maps.places.PlacesService(omap.getMap());
        this.search(stringSearch,typeSearch);
    }

    this.search=function(stringSearch,typeSearch){
        //TODO : utilisé le param Name pour pouvoir afficher plusieur recherche en meme temps, il faudra faire un tableau
        this.service.search(obj.searchconfig, function(results, status) {
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {

                    if(i > obj.searchconfig.limit) return;

                    var marker = new azura.maps.Marker(results[i].geometry.location,obj.config,omap);
                    var e =$('<div></div>').append("<strong>"+results[i].name+"</strong><br />"+results[i].vicinity);
                    marker.addInfoWindow(e.get(0));
                    markers.push(marker);
                }
            }
        });
    }

    this.removeAll=function(){
        markers.forEach(function(elem,index){
            elem.remove();
        });
    }


    if(omap){
        this.init(omap);
    }
}

azura.maps.Map.prototype.interest=function(interestID,searchconfig){
    var interestList={
        "MARK_BABY":{
            term:"Crêche",
            type:null,
            markerconfig:azura.maps.markerTypes.BABY
        },
        "MARK_KID":{
            term:"Ecole maternelle",
            type:null,
            markerconfig:azura.maps.markerTypes.KID
        },
        "MARK_SMALL_SCHOOL":{
            term:"ecole primaire ",
            type:null,
            markerconfig:azura.maps.markerTypes.SMALL_SCHOOL
        },
        "MARK_COLLEGE":{
            term:"Enseignement Secondaire: College",
            type:null,
            markerconfig:azura.maps.markerTypes.COLLEGE
        },
        "MARK_HIGH_SCHOOL":{
            term:"Lycée",
            type:null,
            markerconfig:azura.maps.markerTypes.HIGH_SCHOOL
        },
        "MARK_STADE":{
            term:"",
            type:["stadium"],
            markerconfig:azura.maps.markerTypes.STADE
        },
        "MARK_SUPERMARKET":{
            term:"Supermarché et hypermarché",
            type:["grocery_or_supermarket","food","store","establishment"],
            markerconfig:azura.maps.markerTypes.SUPERMARKET
        },
        "MARK_HOSPITAL":{
            term:"hopital",
            type:["hospital"],
            markerconfig:azura.maps.markerTypes.HOSPITAL
        },
        "MARK_POSTAL":{
            term:"",
            type:["post_office"],
            markerconfig:azura.maps.markerTypes.POSTAL
        }
    }

    this.interests=this.interests||{};
    if(interestList[interestID]){
        if(this.interests[interestID]){
            this.removeInterest(interestID);
        }
        this.interests[interestID]=new azura.maps.search(this,interestList[interestID].term,interestList[interestID].type,interestList[interestID].markerconfig,searchconfig);
    }

    this.removeInterest=function(interestID){
        if(this.interests[interestID]){
            this.interests[interestID].removeAll();
            delete(this.interests[interestID]);
        }
    }

    this.removeAllInterest=function()
    {
        for(var interest in this.interests)
        {
            this.interests[interest].removeAll();
            delete(this.interests[interest]);
        }
    }
}
