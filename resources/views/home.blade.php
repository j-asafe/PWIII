<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assents/css/styles.css')}}" rel="stylesheet">
    <title>Campeonato Paulista</title>
</head>

<body>
    <header id="cabecalho">
        <div id="logo"> 
            <h1>Paulistão 2025</h1>
        </div>
        <img src="{{asset('assents/img/banner.png')}}">
    </header>
    <h1>Times Participantes</h1>
    <table>
      <head>
        <tr>
          <th>Posição</th>
          <th>Time</th>
          <th>Jogos</th>
          <th>Vitórias</th>
          <th>Empates</th>
          <th>Derrotas</th>
          <th>Pontos</th>
        </tr>
      </head>
        <tr>
          <td>1</td>
          <td>Palmeiras</td>
          <td>12</td>
          <td>8</td>
          <td>3</td>
          <td>1</td>
          <td>27</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Corinthians</td>
          <td>12</td>
          <td>7</td>
          <td>4</td>
          <td>1</td>
          <td>25</td>
        </tr>
        <tr>
          <td>3</td>
          <td>São Paulo</td>
          <td>12</td>
          <td>6</td>
          <td>5</td>
          <td>1</td>
          <td>23</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Santos</td>
          <td>12</td>
          <td>6</td>
          <td>3</td>
          <td>3</td>
          <td>21</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Bragantino</td>
          <td>12</td>
          <td>5</td>
          <td>4</td>
          <td>3</td>
          <td>19</td>
        </tr>
    </table>  
  </main>
  <section class="form-section">
    <h2>Receba novidades do Paulistão</h2>
    <form action="#" method="POST" class="formulario">
      <label for="email">Digite seu e-mail:</label>
      <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
      <button type="submit">Cadastrar</button>
    </form>
  </section>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; Paulistão. Todos os direitos reservados.</p>
            <p><a href="#">Política de Privacidade</a> | <a href="#">Termos de Uso</a></p>
        </div>
    </footer>
</body>

</html>