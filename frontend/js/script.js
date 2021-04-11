function displayMenu(){
    if(!document.getElementById("menuVisible").checked){
        document.documentElement.style.overflow = 'hidden';
    } else {
        document.documentElement.style.overflow = 'auto';
    }
}
function removeMenu(){
    document.getElementById("menuVisible").checked = false;
}
function displaySkills(){
    displayMenu();
    document.getElementById('radio3').checked = true;
}