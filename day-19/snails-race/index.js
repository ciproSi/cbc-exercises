document.addEventListener('DOMContentLoaded', () => {
  const raceTrackElm = document.querySelector('.race-track');
  fetch('http://bootcamp.podlomar.org/api/snails/7')
    .then((resp) => resp.json())
    .then((snailsBase) => {
      snailsBase.forEach((snail, index) => {
        new Snail(snail.name, snail.velocity, snail.color).mount(raceTrackElm, index);
      });
    });
});


