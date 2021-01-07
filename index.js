function dayHandler(self){
    var target = document.querySelector('body');
    if (self.value === 'dark') {
        target.style.backgroundColor = 'black';
        target.style.color = 'white';
        self.value = 'light';
        
        var list = document.querySelectorAll('a');
        for (var i = 0; i < list.length; i++) {
            list[i].style.color = 'antiquewhite'
        }
    } else {
        target.style.backgroundColor = 'antiquewhite';
        target.style.color = 'black';
        self.value = 'dark';
        
        var list = document.querySelectorAll('a');
        for (var i = 0; i < list.length; i++) {
            list[i].style.color = 'black'
        }
    }
}