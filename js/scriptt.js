let body = document.body
let starsContainer = document.querySelector(".stars-container")


const randombgColor = () => {
  randomR = Math.floor(Math.random() * 20)
  randomG = Math.floor(Math.random() * 20)
  randomB = Math.floor(10 + (Math.random() * 70))
  
  body.style.background = `rgb(${randomR + "," + randomG + "," + randomB})`
  
  console.log(`rgb(${randomR, randomG, randomB})`)
  let interalId = setInterval(()=>{
    randombgColor()
    clearInterval(interalId)
  }, 1000)
}
randombgColor()







let starColor = [
  'rgb(237, 232, 154)',
  'rgb(255, 255, 255)',
  'rgb(127, 153, 245)',
  'rgb(50, 82, 194)',
  'rgb(143, 227, 209)',
  'rgb(235, 224, 110)',
  'rgb(232, 92, 60)',
  'rgb(207, 45, 20)',
]


const createBgStars = () => {
  for(let i = 0; i < 500; i++){
    let randomLeftPosition = Math.floor(0 + (Math.random() * 1700))
    let randomTopPosition = Math.floor(-100 + (Math.random() * 1000))
    let randomWidth = Math.floor(Math.random() * 3)
    let starHeight = randomWidth
    
    
    let randomStarColorIndex = Math.floor(Math.random() * starColor.length - 1)
    
    
    let star = document.createElement('span')
    star.classList.add('star')
    star.style.left = randomLeftPosition + "px"
    star.style.top = randomTopPosition + "px"
    star.style.width = randomWidth + "px"
    star.style.height = starHeight + "px"
    star.style.background = starColor[randomStarColorIndex]
    starsContainer.appendChild(star)
  }
}
createBgStars()