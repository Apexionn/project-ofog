// EDITABLE ITEM START 

// JUST ADD THE NEW DEGREE TO ADD A NEW ITEM
const listyear = ["deg108", "deg144", "deg180", "deg216", "deg252", "deg288", "deg324"];

// JUST ADD A NEW EVENT ID AND ADD TIME WITH THE SAME FORMAT
// MAKE SURE TO PUT THE EVENT AND TIME IN THE SAME INDEX
const listevent = document.querySelectorAll("[data-countdown-enabled='true']");

// EDITABLE ITEM END


const totalposition = listyear.length;
const slides = document.getElementsByClassName('datajourney');
const tablist = document.getElementsByClassName('menu-item');
function changeposition(id) {
    for (let slide of slides) {
        slide.classList.remove('activejourney');
    }
    slides[id - 1].classList.add('activejourney');
    let datalama;
    for (let tab of tablist) {
        if (tab.classList.contains('activetab')) {
            datalama = tab.id;
        }
        tab.classList.remove('activetab');
    }
    // console.log(datalama);
    // console.log(id);
    for (var i = 0; i < tablist.length; i++) {
        var position = listyear.indexOf(tablist[i].classList[1]);
        // console.log(position);
        for (var j = 0; j < totalposition; j++) {
            tablist[i].classList.remove(listyear[j]);
        }
        let perubahan;
        if (datalama > id) {
            perubahan = datalama - id;
        }
        else {
            perubahan = datalama - id;
        }
        perubahan = position + perubahan;
        if (perubahan < 0) {
            perubahan = totalposition + perubahan;
        }
        // console.log(perubahan);
        tablist[i].classList.add(listyear[(perubahan) % totalposition])
    }
    tablist[id - 1].classList.add('activetab');
}
var y = setInterval(function () {
    var datalama;
    for (let tab of tablist) {
        if (tab.classList.contains('activetab')) {
            datalama = tab.id;
            break;
        }
    }
    if (datalama <= 1) {
        datalama = totalposition + 1;
    }
    changeposition((datalama - 1));
}, 10000);


var x = setInterval(function () {
    var now = new Date().getTime();
    for (var i = 0; i < listevent.length; i++) {
        var timestamp = listevent[i].attributes.getNamedItem("data-countdown-timestamp");
        // console.log(timestamp.value + " UTC");
        if (!timestamp) continue;
        // console.log(listevent[i]);
        var eventtime = new Date(timestamp.value + " UTC").getTime();
        var distance = eventtime - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        listevent[i].innerHTML = days + "D " + hours + "H "
            + minutes + "M " + seconds + "S ";
        if (distance < 0) {
            clearInterval(x);
            listevent[i].innerHTML = "Now";
        }
    }
}, 1000);

setTimeout(ClosePreloader, 3500);

function ClosePreloader() {
    var Div = document.getElementById("Preloader");
    Div.style.animation = "FadeOut 0.5s linear";
    setTimeout(Hide, 500);

}

function Hide() {
    var Div = document.getElementById("Preloader");
    document.querySelector("html").style.overflowY = "scroll";
    Div.style.display = "none";
}