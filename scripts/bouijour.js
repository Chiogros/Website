const rainbow = ["red", "orange", "yellow", "green", "cyan", "blue", "purple", "pink"];

window.setInterval(function () {
    const color = rainbow.shift();
    document.documentElement.style.setProperty("--highlight-color", color);
    rainbow.push(color);
}, 100);

// C'est nul sans les types, vive typescript
