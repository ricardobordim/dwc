// alert('ok');
class Despesa{
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano;
        this.mes = mes;
        this.dia = dia;
        this.tipo = tipo;
        this.descricao = descricao;
        this.valor = valor;
    }
    validarDados(){
        for (let i in this){
                // console.log(i, this[i]);
                if (this[i]== undefined || this[i]=='' || this[i]==null) {
                    return false
                }
                
            
        }
        return true;
    }


}
class Bd{
    
    constructor(){
        let id = localStorage.getItem('id');

        if (id===null){
            localStorage.setItem('id',0);
        }
    }
    getProximoId(){
        let proximoId = localStorage.getItem('id');
        return(parseInt(proximoId)+1);
    }
    gravar(d){
        // Está transformando em JSON e substituindo no local storage
        // localStorage.setItem('despesa',JSON.stringify(d));
        let id =this.getProximoId();
        localStorage.setItem(id,JSON.stringify(d));
        localStorage.setItem('id',id);
    }
    recuperarTodosRegistros(){

        // Array de despesas

        let despesas = Array();

        //recuperar todas as despesas cadastradas
        let id = localStorage.getItem('id');
        for (let i = 1; i <=id; i++){

            // Transformando o JSON em Objeto
            let despesa = JSON.parse(localStorage.getItem(i));

            // Indices que foram removidos
            if (despesa===null){
                continue;
            }
            
            
            despesa.id = i;
            despesas.push(despesa);
        }
        return despesas;
    }
    pesquisar(despesa){
        let despesasFiltradas = Array();
        despesasFiltradas = this.recuperarTodosRegistros();
        
        console.log(despesasFiltradas);
        console.log(despesa);
        // Aplicar os filtros, lembrando que o Filter não atua sobre o Array Original
        // despesasFiltradas.filter(function f(){return f.ano !=''})
        
        // Ano
        if (despesa.ano != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.ano == despesa.ano);
            // console.log(despesasFiltradas);
        }
        
        // mes
        
        if (despesa.mes != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.mes == despesa.mes);
            // console.log(despesasFiltradas);
        }
        
        
        // dia
        
        if (despesa.dia != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.dia == despesa.dia);
            // console.log(despesasFiltradas);
        }
        // tipo
        if (despesa.tipo != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.tipo == despesa.tipo);
            // console.log(despesasFiltradas);
        }
        
        // descricao
        if (despesa.descricao != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.descricao == despesa.descricao);
            // console.log(despesasFiltradas);
        }
        
        // valor
        if (despesa.valor != ''){
            despesasFiltradas = despesasFiltradas.filter(f => f.valor == despesa.valor);
            // console.log(despesasFiltradas);
        }
        return despesasFiltradas;
    }
    remover(id){
        localStorage.removeItem(id);

    }


}
let bd = new Bd();

function cadastrarDespesa(){
    // alert('teste');
    let ano = document.getElementById('ano');
    let mes = document.getElementById('mes');
    let dia = document.getElementById('dia');
    let tipo = document.getElementById('tipo');
    let descricao = document.getElementById('descricao');
    let valor = document.getElementById('valor');

    console.log(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value);
    
    let despesa = new Despesa(  ano.value, 
                                mes.value, 
                                dia.value, 
                                tipo.value, 
                                descricao.value, 
                                valor.value);
    // console.log(despesa);
    if (despesa.validarDados()){
        bd.gravar(despesa);
        // console.log('Válido');
        document.getElementById('modal_titulo').innerHTML ='Registro Inserido com Sucesso';
        document.getElementById('modal_titulo_div').className = "modal-header text-success";
        document.getElementById('modal_titulo_desc').innerHTML = 'Despesa cadastrada com sucesso'; 
        document.getElementById('modal_botao').className = "btn btn-success";
        
        $('#modalRegistraDespesa').modal('show');
        limparCampos();
        
    }else {
        // console.log('Inválidos');
        document.getElementById('modal_titulo_desc').innerHTML = 'Registro Inválido'; 
        document.getElementById('modal_titulo_div').className = "modal-header text-danger";
        document.getElementById('modal_titulo').innerHTML ='Registro Inválido';
        document.getElementById('modal_botao').className = "btn btn-danger";
        $('#modalRegistraDespesa').modal('show');
    }
}

function limparCampos(){
    document.getElementById('ano').value = '';
    document.getElementById('mes').value = '';
    document.getElementById('dia').value = '';
    document.getElementById('tipo').value = '';
    document.getElementById('descricao').value = '';
    document.getElementById('valor').value = '';
}

function carregaListaDespesas(despesas=Array(), filtro=false) {
    
    if ((despesas.length ==0) && (filtro==false)){
        despesas = bd.recuperarTodosRegistros();
    }
    
    // Selecionando o elemento tbody da tabela
    let listaDespesas = document.getElementById('listaDespesas');
    listaDespesas.innerHTML = '';
    /*
        <tr>
            0 = <td>15/03/2018</td>
            1 = <td>Alimentação</td>
            2 = <td>Compras do Mês</td>
            3 = <td>1800.00</td>
            </tr>
    */
    //    percorrer o array despesas, listando cada despesa de forma dinâmica
    despesas.forEach(function (d){
        // console.log(d);
        // criando a linha <tr>
        let linha = listaDespesas.insertRow();

        // criar as colunas nas linhas <td> começando em Zero
        // linha.insertCell(0).innerHTML = d.dia + '/' + d.mes+  '/' + d.ano;
        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`;
        // ajustar o tipo
        switch (d.tipo) {
            case '1': d.tipo = 'Alimentação';
            break;
            case '2': d.tipo = 'Educação';
            break;
            case '3': d.tipo = 'Lazer';
            break;
            case '4': d.tipo = 'Saúde';
            break;
            case '5': d.tipo = 'Transporte';
            break;
            
            break;
            
            default:
                break;
            }
        linha.insertCell(1).innerHTML = d.tipo;
        linha.insertCell(2).innerHTML = d.descricao;
        linha.insertCell(3).innerHTML = d.valor;

        let btn = document.createElement("button");
        btn.className = 'btn btn-danger';
        btn.innerHTML = '<i class="fas fa-times"></i>';
        btn.id = 'id_despesa_' + d.id;
        btn.onclick = function(){
            let id = this.id.replace('id_despesa_','');
            // alert(id);
            bd.remover(id);
            // repare que do Lado do cliente não existe o id , por isso a inclusão no obj
            console.log(d);

            // Atualizar a Página

            window.location.reload();



        }
        linha.insertCell(4).append(btn);


    })

    // console.log(despesas)
    
}
function pesquisarDespesa(){
    let ano = document.getElementById('ano').value;
    let mes = document.getElementById('mes').value;
    let dia = document.getElementById('dia').value;
    let tipo = document.getElementById('tipo').value;
    let descricao = document.getElementById('descricao').value;
    let valor = document.getElementById('valor').value;    

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor);

    let despesas = bd.pesquisar(despesa);
    // console.log(despesa)
    this.carregaListaDespesas(despesas,true);
}
