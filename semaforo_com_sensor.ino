/*///////////////////////////////////////////////////////////////
PROJETO ARDUINO ADS 4 2019 FATEC CRUZEIRO - PROF. WALDOMIRO MAY

SEMÁFORO COM SENSORES DE APROXIMAÇÃO E CANCELA DE SEGURANÇA

AUTORES: LUCAS MOTA; MATHEUS; JOÃO VITOR; MARCOS; THIAGO
//////////////////////////////////////////////////////////////*/


//Carregar as bibliotecas do sensor ultrassonico
#include <Ultrasonic.h>
#include <Servo.h>
//////////////////////////////////////////////////

//Definir os pinos trigger e echo dos sensores
#define sensor1_trigger 31
#define sensor1_echo 33

#define sensor2_trigger 37
#define sensor2_echo 39

//////////////////////////////////////////////////


//Inicializa os sensores nos pinos definidos acima
Ultrasonic sensor1(sensor1_trigger, sensor1_echo);
Ultrasonic sensor2(sensor2_trigger, sensor2_echo);
//////////////////////////////////////////////////

//Definir variáveis e posições dos semáforos de carros
int car1R = 7; //Vermelho
int car1Y = 8; //Amarelo
int car1G = 9; //Verde

int car2R = 11; //Vermelho
int car2Y = 12; //Amarelo
int car2G = 13; //Verde
//////////////////////////////////////////////////

//Definir variáveis e posições dos semáforos de pedestres
int ped1G = 30; //Verde
int ped1R = 32; //Vermelho

int ped2G = 48; //Verde
int ped2R = 50; //Vermelho
//////////////////////////////////////////////////

//Definir variáveis e posições do buzzer
#define tempo 10
int frequencia = 0;
int buzzer = 6;
//////////////////////////////////////////////////

//Definir variável do contador
int contador;
//////////////////////////////////////////////////


void setup()
{
  Serial.begin(9600);//padrão de saída de energia do Arduino
  
  pinMode (car1R, OUTPUT);
  pinMode (car1Y, OUTPUT);
  pinMode (car1G, OUTPUT);
  pinMode (car2R, OUTPUT);
  pinMode (car2Y, OUTPUT);
  pinMode (car2G, OUTPUT);

  pinMode (ped1G, OUTPUT);
  pinMode (ped1R, OUTPUT);
  pinMode (ped2G, OUTPUT);
  pinMode (ped2R, OUTPUT);

  pinMode(buzzer,OUTPUT); //Pino do buzzer
  // Declaração de função, dizendo que os pinos digitais serão uma saída
}

void loop()
{
  //Lê as informacoes do sensor, em cm
  float cmMsec, cmMsec2;
  long microsec = sensor1.timing(), microsec2 = sensor2.timing();
  cmMsec = sensor1.convert(microsec, Ultrasonic::CM);
  cmMsec2 = sensor2.convert(microsec2, Ultrasonic::CM);

  digitalWrite(car1G,HIGH);
  digitalWrite(car2G,HIGH);
  digitalWrite(ped1R, HIGH);
  digitalWrite(ped2R, HIGH);
  
  if(cmMsec<5 || cmMsec2<5)
  {
    delay(5000);  
    digitalWrite (car1G, LOW); // LED Verde será desligado.
    digitalWrite (car2G, LOW); // LED Verde será desligado.
    digitalWrite (car1Y, HIGH); // LED Amarelo será ligado.
    digitalWrite (car2Y, HIGH); // LED Amarelo será ligado.
    
    delay (1000); // Espera um segundo.
    
    digitalWrite (car1Y, LOW); // LED Amarelo será desligado.
    digitalWrite (car2Y, LOW); // LED Amarelo será desligado.
    digitalWrite (car1R, HIGH); // LED Vermelho será ligado.
    digitalWrite (car2R, HIGH); // LED Vermelho será ligado.
    
    digitalWrite (ped1G, HIGH); // LED Verde do pedestre será ligado.
    digitalWrite (ped2G, HIGH); // LED Verde do pedestre será ligado.
    digitalWrite (ped1R, LOW); // LED Vermelho do pedestre será desligado.
    digitalWrite (ped2R, LOW); // LED Vermelho do pedestre será desligado.

    for (frequencia = 150; frequencia < 1800; frequencia += 1) 
      {
        tone(buzzer, frequencia, tempo); 
        delay(1);
      } 
    
    delay(8000); // Espera 8 segundos

    for (frequencia=0; frequencia<4; frequencia++) 
      {
        tone(6,262,500); //DO
        delay(800); 
      }
      tone(6,262,1200); //DO

    digitalWrite (car1R, LOW); // LED Vermelho será desligado.
    digitalWrite (car2R, LOW); // LED Vermelho será desligado.
    digitalWrite (ped1G, LOW); // LED Verde será desligado.
    digitalWrite (ped2G, LOW); // LED Verde será desligado.

    contador++;
    Serial.println(contador);
  }
}
