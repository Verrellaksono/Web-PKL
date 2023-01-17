let verrel = document.getElementById('rel').innerHTML;
const copyContentrel = async () => {
    try {
        await navigator.clipboard.writeText(verrel);
        alert("Verrel E-mail copied")
        // console.log(document.getElementById("demo").innerHTML = "E-mail coppied!");
        // $("#demo").fadeOut ("slow");
        //Kaga bisa njirrr
    } catch (err) {
        console.error('Failed to copy: ', err);
    }
}

let dihar = document.getElementById('iz').innerHTML;
const copyContentiz = async () => {
    try {
        await navigator.clipboard.writeText(dihar);
        alert("Izdihar E-mail copied")
    } catch (err) {
        console.error('Failed to copy: ', err);
    }
}