console.log('Modulo importado');

// export async function aguardarPromesa() {
//     console.log('Inicio do processamento');


//     function fetchDados(){
//         return new Promise(resolve =>{
//             setTimeout(() => {
//                 resolve('Executou')
//             }, 2000);
//         })
//     }
//     //Aguardamos o processamento no contexto da FUNÇÃO
//     const dados = await(fetchDados()); 
//     console.log(dados);
//     console.log('Fim do processamento');

// }
// aguardarPromesa();



// No contexto do módulo e não da função

console.log('Inicio do processamento II');

export async function fetchDados2() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve('Executou II')
        }, 2000);
    })
}    

const dados2 = await (fetchDados2());
console.log(dados2);

console.log('Fim do processamento II');



