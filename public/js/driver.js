function dbg(y,z){
 console.log(y,z);
}
function msg(){
    var x = new XMLHttpRequest();
    x.open('GET', 'test.html',true);
    x.onreadystatechange = function () {
        if(x.readyState == 4){

        if(x.status == 200){
                                                          
        document.getElementById("box").innerHTML="<p>\"Je suis à la recherche d'un stage du 04/05/2020 au 03/07/2020, contactez moi ! \"</p>";
        }
    }      
};
  x.send();
}


