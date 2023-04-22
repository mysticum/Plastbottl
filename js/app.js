function showByStatement(crds, statement) {
    for (let j = 0; j < crds.length; j++) {
        crds[j].hidden = statement;
    }
}

function clearChecks(bottles) {
    for (let i = 0; i < bottles.length; i++) {
        bottles[i].checked = false;
    }
    showByStatement(crds, false);
}

function main(bottles, crds) {
    intro.style.display = "none"
    let check_count = 0;
    showByStatement(crds, true);
    for (let i = 0; i < bottles.length; i++) {
        if (bottles[i].checked) {
            check_count++;
            for (let j = 0; j < crds.length; j++) {
                if (crds[j].id.includes(bottles[i].id)) {
                    crds[j].hidden = false;
                }
            }
        }
    }
    if (check_count === 0) {
        showByStatement(crds, false);
    }
}

bottles_checkboxes = document.querySelector("div.btn-group-bottles").getElementsByTagName("input");
cards = document.querySelector("div#cards").getElementsByClassName("card");

intro = document.getElementById("intro-slogan")