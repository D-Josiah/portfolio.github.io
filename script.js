let viewBtns = document.getElementsByClassName('view-btn');

console.log(viewBtns);

for (let i = 0; i < viewBtns.length; i++) {
    console.log("Hello");
    // Use regular function to correctly reference the element
    viewBtns[i].addEventListener('mouseover', function() {
        viewBtns[i].src = "images/btn-clicked.png";
    });

    viewBtns[i].addEventListener('mouseout', function() {
        viewBtns[i].src = "images/btn.png";
    });
}
