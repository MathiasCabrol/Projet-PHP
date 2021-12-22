//Regex qui accepte lettres minuscule/majuscule + accents + tirets
const regexName = /^[a-zÀ-ÖØ-öø-ÿ]*([\-\s][a-zÀ-ÖØ-öø-ÿ]*)?$/i
//Regex acceptant un format mail
const regexMail = /^[a-z0-9]([a-z0-9\-\_\.]*)[@]([a-z0-9\.]+)[\.]([a-z]){2,5}/i
//Regex acceptant un numero de tel
const regexTel = /0[0-9]([\.\-\s])?([0-9]{2}([\.\-\s])?){3}[0-9]{2}$/
//Regex acceptant du texte sans caractères spéciaux
const regexText = /^[A-Za-zÀ-ÖØ-öø-ÿ\s\-\'\.]+$/i

//Message d'erreur pour les différents champs
const errorMessageName = "Merci d'entrer un nom uniquement en lettres, il est possible d'utiliser un tiret."
const errorMessageMail = "Merci d'entrer une adresse mail avec un format valide."
const errorMessageTel = "Merci d'entrer un numero de telephone avec un format valide."
const errorMessageSubject = "Merci d'entrer un sujet uniquement en lettres."
const errorMessageCity = "Merci d'entrer une ville en lettres."
const errorMessageMessage = "Merci d'entrer votre message." 

nameInput.addEventListener("blur", function () {
    regexTest(this, regexName, errorMessageName)
})

mailInput.addEventListener("blur", function () {
    regexTest(this, regexMail, errorMessageMail)
})

telInput.addEventListener("blur", function () {
    regexTest(this, regexTel, errorMessageTel)
})

subjectInput.addEventListener("blur", function () {
    regexTest(this, regexText, errorMessageSubject)
})

cityInput.addEventListener("blur", function () {
    regexTest(this, regexText, errorMessageCity)
})

MessageInput.addEventListener("blur", function () {
    regexTest(this, regexText, errorMessageMessage)
})

function regexTest(inputFull, regex, errorMessage) {
    //Création de la constante permettant de faire l'id du p
    const pId = "p" + inputFull.id
    let p = document.getElementById(pId)
    //On vérifie que le p existe. Si c'est le cas on le modifie. Sinon on le crée
    if (p == null) {
        //Création du paragraphe virtuel
        p = document.createElement("p")
        p.id = pId
    }

    //Création de la condition du test RegExp.
    if (!regex.test(inputFull.value)) {
        //Création texte refus de validation.
        p.innerText = errorMessage
        //Changement de couleur.
        p.style.color = "red"
    } else {
        //on efface le texte
        p.innerText = ""
    }
    inputFull.insertAdjacentElement("afterend", p)
}