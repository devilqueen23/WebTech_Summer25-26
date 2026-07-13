console.log("Connected");

function collect_data()
{
    let playerName = document.getElementById("playerName").value;
    console.log(playerName);

    let age = document.getElementById("age").value;
    console.log(age);

    let email = document.getElementById("email").value;
    console.log(email);

    let username = document.getElementById("username").value;
    console.log(username);

    let password = document.getElementById("password").value;
    console.log(password);

    let confirmPassword = document.getElementById("confirmPassword").value;
    console.log(confirmPassword);

    let hero = document.getElementById("hero").value;
    console.log(hero);

    let playerID = document.getElementById("playerid").value;
    console.log(playerID);

    let isValidDOB = collect_DOB();
    let isValidGender = collect_Gender();
    let isValidCountry = collect_Country();
    let isValidRank = collect_Rank();
    let isValidRole = collect_Role();
    let isValidTerms = collect_Terms();

    return false;
}

function collect_DOB()
{
    let dob = document.getElementById("dob").value;
    console.log(dob);

    return false;
}

function collect_Gender()
{
    let gender = document.querySelector('input[name="gender"]:checked');

    if(gender != null)
    {
        console.log(gender.value);
    }

    return false;
}

function collect_Country()
{
    let country = document.getElementById("country").value;
    console.log(country);

    return false;
}

function collect_Rank()
{
    let rank = document.getElementById("rank").value;
    console.log(rank);

    return false;
}

function collect_Role()
{
    let tank = document.getElementById("tank").checked;
    let fighter = document.getElementById("fighter").checked;
    let mage = document.getElementById("mage").checked;
    let marksman = document.getElementById("marksman").checked;
    let assassin = document.getElementById("assassin").checked;
    let support = document.getElementById("support").checked;

    console.log("Tank: " + tank);
    console.log("Fighter: " + fighter);
    console.log("Mage: " + mage);
    console.log("Marksman: " + marksman);
    console.log("Assassin: " + assassin);
    console.log("Support: " + support);

    return false;
}

function collect_Terms()
{
    let agree = document.getElementById("agree").checked;
    console.log(agree);

    return false;
}