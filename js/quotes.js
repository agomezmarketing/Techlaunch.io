const $quotesSection = $('section#quotes')
const $quotes = $quotesSection.find('.quote-container')

let quoteIndex = Math.floor( Math.random() * $quotes.length )

function switchQuote() {
    quoteIndex = ++quoteIndex % $quotes.length
    $quotes.hide()
    $($quotes[quoteIndex]).show()
}

switchQuote()

setInterval(function() {
    const position = $quotesSection[0].getBoundingClientRect()
    
    if(position.top >= 0) return;
    
    switchQuote()
}, 5000)

export { switchQuote }
