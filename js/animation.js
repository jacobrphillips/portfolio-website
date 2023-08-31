var title = document.getElementById("home-title");
var description = document.getElementById("home-description");
var subtitle = document.getElementById("home-subtitle");
var sidelinks = document.getElementById("sidelinks");

gsap.from(title, {
  opacity: 0,
  y: -50, // Negative value to move the element down
  duration: 1
});

gsap.from(description, {
  opacity: 0,
  y: -50,
  duration: 1,
  delay: 0.2 // Delay the animation slightly
});

gsap.from(subtitle, {
  opacity: 0,
  y: -50,
  duration: 1,
  delay: 0.4 // Delay the animation slightly more
});

gsap.from(sidelinks, {
  opacity: 0,
  x: -50, // Negative value to move the element from left to right
  duration: 1,
  delay: 0.6 // Delay the animation a bit more
});
