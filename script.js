let d = new Date();
let f = d.getMonth();
let t = d.getHours();
console.log(f);


if (t >= 6 && t <= 8){
document.getElementsByTagName('body')[0].style.backgroundImage = "url('italia.png')";

}
else {

document.getElementsByTagName('body')[0].style.backgroundColor = "lightblue";

}
