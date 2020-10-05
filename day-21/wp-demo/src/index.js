import Stage from './stage/Stage.js';
import Pacman from './pacman/Pacman.js';
import './main-scss/main.scss';
import './index.html';


let width = Number(prompt('Insert width of maze'));
let height = Number(prompt('Insert height of maze'));

const container = document.querySelector('.container');
const stage = new Stage(width * 85, height * 85);
stage.mount(container);

const pacman = new Pacman(stage, 0, 0);
pacman.mount(stage.element);

fetch(`http://bootcamp.podlomar.org/api/pacman?width=${width - 1}&height=${height - 1}`)
    .then((resp) => resp.json())
    .then((maze) => {
      maze.walls.forEach((wall) => {
        stage.addEntity(wall.x, wall.y, 'wall');
      });
      maze.apples.forEach((apple) => {
        stage.addEntity(apple.x, apple.y, 'apple');
      });
      maze.bombs.forEach((bomb) => {
        stage.addEntity(bomb.x, bomb.y, 'bomb');
      });
        stage.amountOfApples = maze.apples.length;
    });

    


