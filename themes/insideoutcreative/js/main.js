let introIcons = document.querySelectorAll('span.links-intro');

for (i = 0; i < introIcons.length; i++) {
    introIcons[i].addEventListener('click', showContent);

    function showContent() {
        showIconsContent(this);
    }
}


let showIconsContent = (elem) => {

    // console.log(elem);
    let ID = elem.id;
    // console.log(ID);

    // needs to be before command adding class
    elemActive = document.querySelector('span.links-intro-active');
    tabContentActive = document.querySelector('.tab-content-active');

    // makes clicked element active
    if (!elem.classList.contains('links-intro-active')) {
        elem.classList.add('links-intro-active');
    }

    // makes all other elements inactive
    elemActive.classList.remove('links-intro-active');

    let tabContent = ID.replace("link", "content");
    let tabContentID = document.querySelector('#' + tabContent);
    // console.log(tabContentID);

    // makes clicked element active
    if (!tabContentID.classList.contains('tab-content-active')) {
        tabContentID.classList.add('tab-content-active');
    }

    // makes all other elements inactive
    tabContentActive.classList.remove('tab-content-active');
}

// start of full width row
// alert('hello');
fullWidthRowImages = document.querySelectorAll('.img-full-width-row-bg');
imgFullWidthRowCol0 = document.querySelector('#imgFullWidthRowCol0');
imgFullWidthRowCol1 = document.querySelector('#imgFullWidthRowCol1');
imgFullWidthRowCol2 = document.querySelector('#imgFullWidthRowCol2');
imgFullWidthRowCol3 = document.querySelector('#imgFullWidthRowCol3');

fullWidthRowCol1 = document.querySelector('#fullWidthRowCol1');
fullWidthRowCol2 = document.querySelector('#fullWidthRowCol2');
fullWidthRowCol3 = document.querySelector('#fullWidthRowCol3');

fullWidthRowCol1.addEventListener('mouseover', function () {
    imgFullWidthRowCol0.style.opacity = "0";
    imgFullWidthRowCol1.style.opacity = "1";
    imgFullWidthRowCol2.style.opacity = "0";
    imgFullWidthRowCol3.style.opacity = "0";
});
fullWidthRowCol1.addEventListener('mouseout', function () {
    imgFullWidthRowCol0.style.opacity = "1";
    imgFullWidthRowCol1.style.opacity = "0";
    imgFullWidthRowCol2.style.opacity = "0";
    imgFullWidthRowCol3.style.opacity = "0";
});
fullWidthRowCol2.addEventListener('mouseover', function () {
    imgFullWidthRowCol0.style.opacity = "0";
    imgFullWidthRowCol1.style.opacity = "0";
    imgFullWidthRowCol2.style.opacity = "1";
    imgFullWidthRowCol3.style.opacity = "0";
});
fullWidthRowCol2.addEventListener('mouseout', function () {
    imgFullWidthRowCol0.style.opacity = "1";
    imgFullWidthRowCol1.style.opacity = "0";
    imgFullWidthRowCol2.style.opacity = "0";
    imgFullWidthRowCol3.style.opacity = "0";
});
fullWidthRowCol3.addEventListener('mouseover', function () {
    imgFullWidthRowCol0.style.opacity = "0";
    imgFullWidthRowCol1.style.opacity = "0";
    imgFullWidthRowCol2.style.opacity = "0";
    imgFullWidthRowCol3.style.opacity = "1";
});
fullWidthRowCol3.addEventListener('mouseout', function () {
    imgFullWidthRowCol0.style.opacity = "1";
    imgFullWidthRowCol1.style.opacity = "0";
    imgFullWidthRowCol2.style.opacity = "0";
    imgFullWidthRowCol3.style.opacity = "0";
});
// end of full width row