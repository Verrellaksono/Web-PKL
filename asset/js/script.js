$(document).ready(function () {
    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");

            $('#information').addClass('hitam');
            $('#information').removeClass('light');

            
        } else {
            $('.navbar').removeClass("sticky");

            $('#information').addClass('light');
            $('#information').removeClass('hitam');

            
        }

        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });
});

//FOOTER JS

let verrel = document.getElementById('rel').innerHTML;
const copyContentrel = async () => {
    try {
        await navigator.clipboard.writeText(verrel);
        alert("Verrel's E-mail copied")
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
        alert("Izdihar's E-mail copied")
    } catch (err) {
        console.error('Failed to copy: ', err);
    }
}
