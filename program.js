const wyswietlacz = document.getElementById("wyswietlacz")

function dodajDoWyswietlacza(input) {
    wyswietlacz.value += input;
}

function wyczysc() {
    wyswietlacz.value = "";
}

function oblicz() {
    try {
        wyswietlacz.value = eval(wyswietlacz.value);
    }
    catch (error) {
        wyswietlacz.value = "Błąd"
    }

}