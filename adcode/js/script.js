
var earnerNames = ['Shirley Mack', 'Kim Allison', 'Mark Romero', 'Misty Oliver', 'Lyle Curtis', 'Hannah Smith', 'Sheryl Benson', 'Abel Fox', 'Randy Flowers', 'Ronald Norton', 'Helen Ryan', 'Lamar Casey', 'Phil Ross', 'Nathaniel Powell', 'Julie Pena', 'Jana Long', 'Neil Edwards', 'Kelly Perry', 'Roberto Cohen', 'Marilyn Wright', 'Wilbur Townsend', 'April Strickland', 'Laurie Lambert', 'Jerald Zimmerman', 'Jeannie Delgado', 'Jack Horton', 'Belinda Perkins', 'Amy Pierce', 'Danielle Guerrero', 'Pauline Carter', 'Santos Doyle', 'Jennie Hudson', 'Darrell Newman', 'Wm Phelps', 'Elisa Ingram', 'Louis Chavez', 'Garrett Drake', 'Lee Patterson', 'Sue Gibbs', 'Candace Griffith', 'Natasha Byrd', 'Donald Frank', 'Myron Sims', 'Melinda Walters', 'Clark Silva', 'Michele Little', 'Minnie Mckenzie', 'Paulette Keller', 'Jon Stewart', 'Gladys Morton', 'Clay Potter', 'Timothy Sutton', 'Homer Elliott', 'Nicole Fernandez', 'Kay Reyes', 'Kristina Roy', 'Javier Carpenter', 'Gerald Gutierrez', 'Krista Ortega', 'Ernesto Bishop', 'Greg Gomez', 'Mindy Bowen', 'Jenna Lawrence', 'Marjorie Moss', 'Felicia Williamson', 'Janie Cole', 'Francis Malone', 'Maggie Owen', 'Elvira Reid', 'Rosie Mcdaniel', 'Arlene Soto', 'Lora Harper', 'Olivia May', 'Lucy Holt', 'Christine Frazier', 'Doris Marsh', 'Claudia Colon', 'Felipe Kim', 'Rick Lucas', 'Jodi Snyder', 'Kim Lamb', 'Harriet Spencer', 'Clarence Joseph', 'Marvin Parker', 'Joy Holland', 'Fred Baldwin', 'Patricia Butler', 'Lindsay Hoffman', 'Lionel Greer', 'Maria Mccormick', 'Lisa Sanchez', 'Theresa Fields', 'Jane Nguyen', 'Ted Francis', 'Andrea Osborne', 'Della Saunders', 'Meredith Wood', 'Clayton Mullins', 'Marcus Rivera', 'Tyler Jacobs'];
$(document).ready(function () {
    $('.license-count .count').html('7');
    var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var dateToday = new Date();
    $('.license-info span.date').html(monthNames[dateToday.getMonth()] + " " + dateToday.getDate() + " " + dateToday.getFullYear());
    var intervalID = window.setInterval(updateLicenseCount, 180000);
    updateEarnerList();
    var earnerIntervalID = window.setInterval(updateEarnerList, 10000);
});
function updateLicenseCount() {
    var currentLicenseCount = $('.license-count .count').html();
    currentLicenseCount = parseInt(currentLicenseCount);
    if (currentLicenseCount > 1) {
        $('.license-count .count').html(currentLicenseCount - 2);
    }
    if (currentLicenseCount < 1) {
        $('.license-count .count').html(0);
        window.clearInterval(intervalID);
    }
}
function updateEarnerList() {
    $('.floating-earnings').addClass('show');
    var randomName = earnerNames[Math.floor(Math.random() * earnerNames.length)];
    randomName = randomName.split(' ');
    var randomAmount = getRandomAmount(100, 500);
    $('.floating-earnings span.name').html('<span class="earner-name">' + randomName[0] + ' just earned</span> <span class="earner-amount"><span class="currency" style="display:inline">' + '$' + '</span>' + randomAmount + '</span>');
    var hideFloatingTimer = window.setTimeout(hideFloatingEarnerWidget, 5000);
}

function hideFloatingEarnerWidget() {
    $('.floating-earnings').removeClass('show');
}

function getRandomAmount(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}
