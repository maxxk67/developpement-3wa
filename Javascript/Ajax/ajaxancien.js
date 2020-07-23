//depuis 1998

let xhttp= new XMLHttpRequest();

xhttp.open('GET', 'essai.php?orderNumber');

xhttp.send();

xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200){
        let response = (xhttp.response);
    }
}
