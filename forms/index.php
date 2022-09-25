<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Comercial &copy;</title>
    <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
       
    <!-- baixe para testar http://www.usbwebserver.net/downloads/USBWebserver%20v8.6.zip -->
    <header>
        <div class="header">
            <img src="../assets/img/logo.png" alt="">
            <div class="links">
                <details>
                    <summary>Cadastrar</summary>
                    <li>
                        <ul><a href="cadusuario.php" class="btn">Cadastrar usuário</a></ul>
                        <ul><a href="cadfornecedor.php" class="btn">Cadastrar Fornecedor</a></ul>
                        <ul><a href="cadfuncionario.php" class="btn">Cadastrar funcionário</a></ul>
                        <ul><a href="cadcliente.php" class="btn">Cadastrar cliente</a></ul>
                        <ul><a href="cadproduto.php" class="btn">Cadastrar produto</a></ul>
                        
                    </li>
                </details>
                <details>
                    <summary>Consultar</summary>
                    <li>
                        <ul><a href="consultaCliente.php" class="btn">Consultar cliente</a></ul>
                        <ul><a href="cadfornecedor.php" class="btn">Consultar Fornecedor</a></ul>
                        <ul><a href="cadfuncionario.php" class="btn">Consultar funcionário</a></ul>
                        <ul><a href="cadcliente.php" class="btn">Consultar cliente</a></ul>
                        <ul><a href="cadproduto.php" class="btn">Consultar produto</a></ul>
                        
                    </li>
                </details>
                <a href="" id="logout" onclick="inativeFunction();">Sair</a>
            </div>
            <script>
                function inativeFunction(){
                    Alert('Aplicação focada no banco de dados!');
                }
            </script>
        </div>
        
        <div class="info">
        <img src="../assets/img/Toguro.jpeg" alt="" class="foto">
        <div>
            <h2>Toguro Marombeta <br><strong>CEO da Mansão maromba</strong></h2>
        <p>
            Em pleno 2022, Conhece o Elon Musk? <br>
            Ano que o Vini Jr vai ser conhecido pelo mundo na copa do Qatar <br>
            Ano de eleições <br>
            Ano que o Elon Musk vai lançar um foguete para o espaço
        </p>
        
    </header>
    <main>
        <p>Em caso de erros de conexão clique no botão abaixo</p>
        <a href="conexao.php" id="conexao">Conectar com o banco</a>
    </main>
</body>
</html>