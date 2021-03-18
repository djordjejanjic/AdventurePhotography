$(document).ready(function(){
    $('.btn1').click(function (event){
        console.log('Clicked')
        
        var name = $('.name').val()
        var email = $('.email').val()
        var poruka = $('.poruka').val()
        var statusElm = $('.status')
        statusElm.empty()
        
        if(name.length > 5 && poruka.length > 10 && email.length > 5 && email.includes('@') && email.includes('.')){
            var string = '<div>Poruka je poslata.</div>'
            statusElm.append(string.fontcolor("green"))
        }else{
            event.preventDefault()
            var string = '<div>Poruka nije poslata, proverite da li ste popunili sva polja i da li je email validan.</div>'
            statusElm.append(string.fontcolor("red"))
        }
    })
})