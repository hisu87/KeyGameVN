let main
let wrappes
let gapWidth
let width
let positionX = 0
let idx = 0

wrappes = document.querySelectorAll('.studies__item')
main = document.querySelector('.studies')
gapWidth = parseFloat(getComputedStyle(main).getPropertyValue('gap'));
width = wrappes[0].offsetWidth + gapWidth
console.log(width);

function next() {
    const next = document.querySelector('.studies__next')
    next.addEventListener('click', () => {
        handleClick(1)
    })
}

// prev
function prev() {
    const next = document.querySelector('.studies__prev')
    next.addEventListener('click', () => {
        handleClick(-1)
        console.log('hi');
    })
}


// handle click


function handleClick(value) {
    if (value === 1) {
        if (idx >= wrappes.length - 2) {
            idx = wrappes.length - 2
            return
        }
        idx++
        positionX = positionX - width
        main.style = `transform: translateX(${positionX}px)`
    }

    if (value === -1) {
        if (idx <= 0) {
            idx = 0
            return
        }
        idx--
        positionX = positionX + width
        main.style = `transform: translateX(${positionX}px)`
    }
}

// auto scroll
function autoScrol() {
    setInterval(() => {
        if (idx >= wrappes.length - 2) {
            idx = -1;
            if (idx !== 0) {
                positionX = 0 + width
            }
        }
        positionX = positionX - width
        main.style = `transform: translateX(${positionX}px)`
        idx++
    }, 4000);

}

(() => {
    next()
    prev()
    autoScrol()
})()