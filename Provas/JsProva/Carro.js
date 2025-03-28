
class Carro {
    #marca;  // Atributo privado(os dois sao)
    #modelo; 

    constructor(marca, modelo) {
        this.#marca = marca;
        this.#modelo = modelo;
    }

    // Métodos get e set
    get marca() {
        return this.#marca;
    }

    set marca(novaMarca) {
        this.#marca = novaMarca;
    }

    get modelo() {
        return this.#modelo;
    }

    set modelo(novoModelo) {
        this.#modelo = novoModelo;
    }

    // Método acelerar
    acelerar() {
        console.log("Acelerando...");
    }
}
