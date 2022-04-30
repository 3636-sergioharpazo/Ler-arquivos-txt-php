<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Revisão de html </title>
</head>
<style>
body{
    background-color: rgb(151, 121, 121);

}
.lana{
background-color: blue;
width: 200px;
align-items: center;
margin-left: 200px;
border-radius: 50%;
position: fixed;
bottom: 0;
right: 0;
}
.leticia{
    background-color:red;
    width: 200px;
   
    border-radius: 50%;
    position: fixed;
    bottom: 0;
    right: 0;

}
input{

border-radius: 5px;
color:green;

}
form{
  

flex-direction: row;
justify-content: center;
align-items: center;
background-color: yellow;
position: fixed;
bottom:0;
left: 120px;
border-radius: 20px;

}
</style>
<body>
    <div class="lana">
    <span>Cadastrados pelo Fale Conosco</span>
        
    <table style="background-color: aqua;" border='1'class="bable">
        <thead>

            </thead>
       <?php 
       

       $filename = "ler.txt";
      
        if(file_exists($filename)){
            
            $handle = fopen ($filename, "r");
            $conteudo = fread ($handle, filesize ($filename));
            echo $conteudo;
            fclose ($handle);
            
        }else{
                
            $conteudo="Não tem ninguém cadastrado no fale conosco";  
            
                
            }
    
?>
</tr>

</table>

</div>
<form action="http://localhost/Users/User/Desktop/github/processa.php" method="POST">
    <h1>Fale Conosco</h1>
    <h2>Relógio:</h2><span id="horas"></span><br><br><hr>
    <label>Nome</label><BR>
    <input type="text" name="nome" placeholder="Digite seu nome"><br>
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Digite seu melhor"><br>
    <input type="submit" class="btn btn-primary"value="Cadastrar">
    </form>




</form>

</body>
</html>




<script>
    

function hora(){

    setInterval(function(){
    
        let novaHora = new Date();
       
        let hora = novaHora.getHours();
        let minuto = novaHora.getMinutes();
        let segundo = novaHora.getSeconds();
         minuto = zero(minuto);
        segundo = zero(segundo);
var dia=['Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo']

var dia_semana=dia[novaHora.getDay()-1]
        
        document.querySelector('#horas').textContent = hora+':'+minuto+':'+segundo+' Dia da semana: '+dia_semana;
    },1000)
    
    
    function zero(x){
    if(x<10){
    x='0'+x;
        
    }return x;
        
    }
/*

    const products = [
    { name: 'Mouse Sem Fio', price: 30 },
    { name: 'Pen Drive', price: 25 },
    { name: 'Cartucho de Tinta', price: 50 },
    { name: 'Suporte Ergonômico para Notebook', price: 23 },
    { name: 'Repetidor de Sinal Wi-Fi', price: 44 }
  ]
  const saleProducts = products.map(product=>{
if(product.price>=30){
return{

name:product.name,
price:product.price/2

}
}
return product


  })
*/
/*
const users = [
{ name: 'Ada Lovelace', premium: true },
{ name: 'Grace Hopper', premium: false },
{ name: 'Alan Turing', premium: true },
{ name: 'Linus Torvalds', premium: false },
{ name: 'Margaret Hamilton', premium: true }
]
const premiumUsers=users.filter(user=>user.premium)

console.log(premiumUsers)
*/
const phaseScores = [
  { name: 'Vinicius Costa', score: 337 },
  { name: 'Roger Melo', score: 43 },
  { name: 'Alfredo Braga', score: 234 },
  { name: 'Pedro H. Silva', score: 261 },
  { name: 'Ana Paula Rocha', score: 491 },
  { name: 'Vinicius Costa', score: 167 },
  { name: 'Roger Melo', score: 137 },
  { name: 'Alfredo Braga', score: 135 },
  { name: 'Ana Paula Rocha', score: 359 },
  { name: 'Pedro H. Silva', score: 133 }
]
const regerScore=phaseScores.reduce((accumulator,phaseScore)=>{ 

if(phaseScore.name ==='Roger Melo'){ 
return accumulator+phaseScore.score
}
return accumulator

},0)
console.log(regerScore)
}
hora()

function criar_tubuada(){



var tabela = "<table border='1' cellspacing='0' width='400px'><tr><td colspan='5' bgcolor='yellow'><font color='black'><center>Tabuada</font></td><tr>";

    for(let i=1;i<=10;i++){

         tabela = tabela+"<td>";        
    for(let j=1;j<=10;j++){
var multiplica=i*j;
        var linha="" +i+ "X" +j+ "=" +multiplica+"<br>"

        tabela = tabela + linha
        
    }

    
        
    if(i%5===0){

        tabela=tabela+"<tr></tr>";
    }
    }
tabela=tabela+"</tr></table>";
document.write(tabela)    
    
}
criar_tubuada()

</script>