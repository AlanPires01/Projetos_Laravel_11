import './bootstrap';

import Inputmask from 'inputmask';

document.addEventListener('DOMContentLoaded',function(){
    var cpfMask = new Inputmask("999.999.999-99");
    cpfMask.mask(document.querySelectorAll(".cpf"));

    var celularMask = new Inputmask("(99)9 9999-9999");
    celularMask.mask(document.querySelectorAll(".telefone"));
    
});