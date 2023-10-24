document.getElementById('calculoTrapezio').onsubmit = function () {
        var baseMaior = document.getElementById('BaseMaior').value;
        var baseMenor = document.getElementById('BaseMenor').value;
        var altura = document.getElementById('Altura').value;
        
        const area = ((parseFloat(baseMaior) + parseFloat(baseMenor)) * parseFloat(altura)) / 2;

        document.getElementById('area').value = area;
        return false;
    }
