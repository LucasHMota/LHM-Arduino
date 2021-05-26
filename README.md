# LHM-Arduino
<p> Projeto de semáforo inteligente feito com Arduino </p>
<p> Smart traffic light developed using Arduino </p>

<p>
  <h2>Proposta</h2>
  Criar um sistema de semáforo inteligente com sensor ultrassônico, também adaptado para deficientes visuais.
  O Semáforo será capaz de reconhecer pelo sensor ultrassônico a presença do funcionário/pedestre aguardando travessia e automaticamente fechar o semáforo para veículos, empilhadeiras e afins, indicando também com um emissor de sinal sonoro (buzzer) a possibilidade de o funcionário/pedestre poder atravessar e quando o sinal voltará a ser fechado.  
</p>

<p>
  <h2>Funcionamento</h2>
  Ao se aproximar da área de travessia (uma rampa com demarcação específica) que está próxima ao sensor, é identificado que essa pessoa deseja fazer a travessia. A partir daí, é dado o comando para trocar as luzes do semáforo. O semáforo é fechado, em seguida emissor de som toca, indicando permissão de travessia. É dado um tempo médio para que o pedestre atravesse e, quando o semáforo está prestes a fechar, o emissor de som toca consecutivamente como em uma contagem regressiva para mostrar a quem está atravessando que o sinal verde voltará. O semáforo inteligente beneficia não só o pedestre com mais segurança na travessia, como também o motorista que somente deverá parar mediante presença de pedestres, do contrário ele sabe que aquela via da fábrica estará sempre aberta para ele passar, melhorando o tráfego e impedindo acidentes de trabalho. 
</p>

<p>
  <h2>Ferramentas utilizadas</h2>
  <h3>Programação</h3>
  Programação desenvolvida com Linguagem C++ a partir da IDE “Arduino IDE”.
  
  <h3>Semáforo</h3>
    <ul>
      <li>1x Arduino Mega + Cabo USB</li>
      <li>1x Protoboard</li>
      <li>2x Sensores Ultrassônicos HC-SR04</li>
      <li>1x Módulo Semáforo LED</li>
      <li>1x Buzzer 5V</li>
      <li>16x Jumpers</li>
  </ul>
</p>
