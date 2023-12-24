var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");

function showPanel(panelIndex, colorCode) {
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
    });
    tabButtons[panelIndex].style.backgroundColor = colorCode;
    tabButtons[panelIndex].style.color = "white";
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.backgroundColor = colorCode;
}

function hidePanel(panelIndex) {
    tabPanels[panelIndex].style.display = "none";
}

tabButtons.forEach(function (button, index) {
    button.addEventListener("mouseenter", function () {
        showPanel(index, '#f44336');
    });

    button.addEventListener("mouseleave", function () {
        hidePanel(index);
    });
    
});

tabButtons.forEach(function (button, index) {
    button.addEventListener("mouseenter", function () {
        showPanel(index, '#f44336');
    });

    button.addEventListener("mouseleave", function () {
        hidePanel(index);
    });
    
});

var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");

var tabContainer = document.querySelector(".tabContainer");

document.addEventListener("mousemove", function (e) {
    var isInsideTabContainer = tabContainer.contains(e.target);

    if (!isInsideTabContainer) {
        // If the mouse is outside the tabContainer, hide all panels
        tabPanels.forEach(function (panel) {
            panel.style.display = "none";
        });

        // Reset button styles
        tabButtons.forEach(function (button) {
            button.style.backgroundColor = "";
            button.style.color = "";
        });
    }
});

function showPanel(panelIndex, colorCode) {
    // Hide all panels first
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });

    // Reset button styles
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
    });

    // Show the selected panel and style the button
    tabButtons[panelIndex].style.backgroundColor = colorCode;
    tabButtons[panelIndex].style.color = "white";
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.backgroundColor = colorCode;
}

// Add event listeners to show and hide panels on mouseenter and mouseleave for both buttons and panels
tabButtons.forEach(function (button, index) {
    button.addEventListener("mouseenter", function () {
        var colorCode = button.style.backgroundColor;
        showPanel(index, colorCode);
    });

    button.addEventListener("mouseleave", function () {
        // Reset button styles
        button.style.backgroundColor = "";
        button.style.color = "";
    });
});

tabPanels.forEach(function (panel, index) {
    panel.addEventListener("mouseenter", function () {
        // Show the panel when the mouse enters the content panel
        var colorCode = tabButtons[index].style.backgroundColor;
        showPanel(index, colorCode);
    });

    panel.addEventListener("mouseleave", function () {
        // Hide the panel when the mouse leaves the content panel
        panel.style.display = "none";
    });
});
