var tabButtons=documnent.querySelectorAll(".tabContainer .buttonCOntainer .button ")
var tabPanels=document.querySelectorAll(" .tabContainer .tabPanel");

function showPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node) {
    node.style.backgroundColor="";
    node.style.Color="";
    
    } ); 

tabButtons[panelIndex].style.backgroundColor=colorCode;
tabButton[panelIndex].style.color="white";
tabPanels.forEach(function(node) {
    node.style.display="none"; 
});

tabPanels[panelIndex].style.display="block";
tabPanels[panelIndex].style.display= colorCode;
}