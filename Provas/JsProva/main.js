
// Criando os objetos ( construtor do js, construindo a instancia do objeto)
// Importando as classes Carro, Esportivo e Popular
const c1 = new Esportivo("Ferrari", "F8");
const c2 = new Popular("Fiat", "Uno");

// Usando os métodos get (definindo atributos usando get)
console.log(`Carro: ${c1.marca} ${c1.modelo}`);
c1.acelerar();

console.log(`Carro: ${c2.marca} ${c2.modelo}`);
c2.acelerar();

// Modificando atributos com set ( set é para editar atributos)
c1.marca = "Lamborghini";
c1.modelo = "Huracán";

console.log(`Novo carro esportivo: ${c1.marca} ${c1.modelo}`);
