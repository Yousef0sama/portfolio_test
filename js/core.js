// vars

let m_page    = document.getElementById("menu_section"),
    skin_c    = document.getElementById("skin-close"),
    portfolio = document.getElementById("portfolio"),
    skin_o    = document.getElementById("skin-open"),
    service   = document.getElementById("service"),
    textAr    = document.getElementById("text_ar"),
    textEn    = document.getElementById("text_en"),
    conact    = document.getElementById("conact"),
    yellow    = document.getElementById("yellow"),
    green     = document.getElementById("green"),
    about     = document.getElementById("about"),
    Close     = document.getElementById("close"),
    light     = document.getElementById("light"),
    skins     = document.getElementById("skins"),
    title     = document.getElementById("title"),
    theme     = document.querySelector(":root"),
    logo      = document.getElementById("logo"),
    home      = document.getElementById("home"),
    dark      = document.getElementById("dark"),
    menu      = document.getElementById("menu"),
    more      = document.getElementById("more"),
    Htext     = document.getElementById("text"),
    blue      = document.getElementById("blue"),
    pink      = document.getElementById("pink"),
    red       = document.getElementById("red"),
    ar        = document.getElementById("ar"),
    en        = document.getElementById("en");



    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
    }
    return "";
}

// open menu

menu.onclick = function () {
    m_page.style.display = "block"
}

// close menu

Close.onclick = function () {
    m_page.style.display = "none"
}

// change to light mode

light.onclick = function () {
    theme.style.setProperty('--bg-color' , "rgb(230, 230, 230)");
    theme.style.setProperty('--outer-shadow' , "3px 3px 3px rgb(208, 208, 208), -3px -3px 3px rgb(248, 248, 248)");
    theme.style.setProperty('--inner-shadow' , "3px 3px 3px inset rgb(208, 208, 208), -3px -3px 3px inset rgb(248, 248, 248)");
    light.style.visibility = "hidden"
    dark.style.visibility  = "visible"
    document.cookie = "mode=light";
}

// change to dark mode

dark.onclick = function () {
    theme.style.setProperty('--bg-color' , "rgb(40, 40, 40)");
    theme.style.setProperty('--outer-shadow' , "3px 3px 3px rgb(34, 35, 39), -3px -3px 3px rgb(54, 54, 54)");
    theme.style.setProperty('--inner-shadow' , "3px 3px 3px inset rgb(34, 35, 39), -3px -3px 3px inset rgb(54, 54, 54)");
    light.style.visibility = "visible"
    dark.style.visibility  = "hidden"
    document.cookie = "mode=dark";
}

if (getCookie("mode") == "light") {
    theme.style.setProperty('--bg-color' , "rgb(230, 230, 230)");
    theme.style.setProperty('--outer-shadow' , "3px 3px 3px rgb(208, 208, 208), -3px -3px 3px rgb(248, 248, 248)");
    theme.style.setProperty('--inner-shadow' , "3px 3px 3px inset rgb(208, 208, 208), -3px -3px 3px inset rgb(248, 248, 248)");
    light.style.visibility = "hidden"
    dark.style.visibility  = "visible"
    document.cookie = "mode=light";
} else {
    theme.style.setProperty('--bg-color' , "rgb(40, 40, 40)");
    theme.style.setProperty('--outer-shadow' , "3px 3px 3px rgb(34, 35, 39), -3px -3px 3px rgb(54, 54, 54)");
    theme.style.setProperty('--inner-shadow' , "3px 3px 3px inset rgb(34, 35, 39), -3px -3px 3px inset rgb(54, 54, 54)");
    light.style.visibility = "visible"
    dark.style.visibility  = "hidden"
    document.cookie = "mode=dark";
}

// theme slider open

skin_o.onclick = function () {
    skins.style.height      = "270px"
    skin_o.style.visibility = "hidden"
    skin_c.style.visibility = "visible"
}

// theme slider close

skin_c.onclick = function () {
    skins.style.height      = "0px"
    skin_o.style.visibility = "visible"
    skin_c.style.visibility = "hidden"
}

// change theme to red

red.onclick = function () {
    theme.style.setProperty('--skin' , "rgb(255, 79, 79)")
}

// change theme to yellow

yellow.onclick = function () {
    theme.style.setProperty('--skin' , "rgb(255, 187, 0)")
}

// change theme to green

green.onclick = function () {
    theme.style.setProperty('--skin' , "rgb(38, 153, 38)")
}

// change theme to blue

blue.onclick = function () {
    theme.style.setProperty('--skin' , "rgb(0, 140, 255)")
}

// change theme to pink

pink.onclick = function () {
    theme.style.setProperty('--skin' , "rgb(242, 98, 255)")
}

// translate to english

en.onclick = function () {
    textAr.style.display    = "none"
    textEn.style.display    = "block"
    ar.style.display        = "block"
    en.style.display        = "none"
}

// translate to arabic

ar.onclick = function () {
    textEn.style.display    = "none"
    textAr.style.display    = "block"
    en.style.display        = "block"
    ar.style.display        = "none"
}